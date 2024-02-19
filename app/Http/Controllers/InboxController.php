<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inbox');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->input('id');
        $section = $request->input('section'); 
        
   
        $users = User::where('section', $section)->whereNotIn('id', [$id])->get();
        
        return response()->json(['data' => $users]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // 1 active
        // 0 inactive

        $data = $request->validate([
            'system' => 'required',
            'subsystem' => 'required',
            'subjectname' => 'required',
            'division' => 'required',
            'section' => 'required',
            'personnel' => 'required',
            'action' => 'required',
            'documents' => 'required|file|mimes:pdf,doc,docx|max:2048', 
            'remarks' => 'required',
        ]);
    
        $currentYear = Carbon::now()->year;
    
        $totalCount = Transaction::whereYear('created_at', $currentYear)->count();
    
        $transactionNo = 'Doc-' . $currentYear . '-' . str_pad(($totalCount + 1), 6, '0', STR_PAD_LEFT);
    
        $data['User_ID'] = $request->input('userid');
        $data['transaction_no'] = $transactionNo;
        $data['sender'] = $request->input('sender');
        $data['Status'] = 1;
        $data['OutboxStatus'] = 0;

        if ($request->hasFile('documents')) {

            $file = $request->file('documents');
    
            $folderName = uniqid();
    
            $filePath = [];

            $file->move(public_path('uploads/transactions/' . $folderName), $file->getClientOriginalName());

            $filePath = '/uploads/transactions/' . $folderName . '/' . $file->getClientOriginalName();

            $data['documents'] = $filePath;

            $transaction = Transaction::create($data);

            return response()->json(['data' => $transaction]); 

        } 
    }
    
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->input('id');
        
    
   
        $transactions = Transaction::join('tbluser', 'tbltransaction.user_id', '=', 'tbluser.id')
        ->where('tbltransaction.personnel', $id)
        ->orderBy('id', 'DESC')
        ->get([
            'tbltransaction.id',
            'tbltransaction.Transaction_No',
            'tbltransaction.System', 
            'tbltransaction.SubSystem', 
            'tbltransaction.SubjectName', 
            User::raw("CONCAT(tbluser.firstname, ' ', tbluser.lastname) AS Sender"), 
            'tbltransaction.Action', 
            'tbltransaction.created_at', 
        ]);



        return response()->json(['data' => $transactions]);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function view(Request $request)
    {
        $id = $request->input('id');
    
        $transaction = Transaction::join('tbluser', 'tbluser.id', '=', 'tbltransaction.user_id')
            ->join('tbluser as personnel', 'personnel.id', '=', 'tbltransaction.personnel')
            ->where('tbltransaction.id', $id)
            ->where('personnel.id', auth()->id())
            ->select(
                'tbltransaction.System',
                'tbltransaction.sender',
                'tbltransaction.SubSystem',
                'tbluser.address',
                'tbltransaction.subjectname',
                'tbluser.division',
                'tbluser.section',
                User::raw("CONCAT(personnel.firstname, ' ', personnel.lastname) AS personnel"),
                'tbltransaction.action',
                'tbltransaction.remarks',
                'tbltransaction.documents'
            )
            ->first();
    
        if ($transaction) {
            return response()->json(['data' => $transaction]);

        }

        return response()->json(['error' => 'Unauthorized Access!'], 403);

    }
    





    public function division(Request $request){
        $divisions = $request->input('division');
        $sections = [];
    
        if($divisions == "Environmental Monitoring and Enforcement Division"){
            $sections = User::where('division', $divisions)->pluck('section')->toArray();
        } 

        if($divisions == "Clearance and Permitting Division"){
            $sections = User::where('division', $divisions)->pluck('section')->toArray();
        } 

        if($divisions == "Finance and Administrative Division"){
            $sections = User::where('division', $divisions)->pluck('section')->toArray();
        } 
        else{
            $sections = User::where('division', $divisions)->pluck('section')->toArray();
        }
    
        $sections = array_unique($sections);
        return response()->json(['sections' => $sections]);
    }
    
    public function section(Request $request){
        $sections = $request->input('section');
        $personnel = User::where('section', $sections)
            ->select('id', 'firstname', 'lastname')
            ->get();
        
        return response()->json(['personnel' => $personnel]);
    }
    
    

    
}
