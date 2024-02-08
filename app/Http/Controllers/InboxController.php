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
        $section = $request->input('section'); // Get the selected section from the request
        
        // Select users based on the specified section and exclude the one with the specified ID
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
        $data = $request->validate([
            'system' => 'required',
            'subsystem' => 'required',
            'subjectname' => 'required',
            'division' => 'required',
            'section' => 'required',
            'personnel' => 'required',
            'action' => 'required',
            'documents' => 'required',
            'remarks' => 'required',
        ]);
    
        $currentYear = Carbon::now()->year;
    
        $totalCount = Transaction::whereYear('created_at', $currentYear)->count();
    
        $transactionNo = 'Doc-' . $currentYear . '-' . str_pad(($totalCount + 1), 6, '0', STR_PAD_LEFT);
    
        $data['User_ID'] = $request->input('userid');
        $data['transaction_no'] = $transactionNo;
        $data['sender'] = $request->input('sender');
        $data['Status'] = 1;
    
        if ($request->hasFile('documents')) {
            $file = $request->file('documents');
    
            $validatedData = $request->validate([
                'documents' => 'required|file|mimes:pdf,doc,docx|max:2048', 
            ]);
    
            $folderName = uniqid();
    
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
        
        $showAllInbox = User::join('tbltransaction', 'tbluser.id', '=', 'tbltransaction.user_id')
        ->where('tbltransaction.status', 1)
        ->where('tbltransaction.personnel', $id)
        ->get();
        
        return response()->json(['data' => $showAllInbox]);

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
        ->select('tbltransaction.System', 'tbltransaction.sender', 'tbltransaction.SubSystem','tbluser.address','tbltransaction.subjectname','tbluser.division','tbluser.section','personnel.firstname as personnel_firstname', 'personnel.lastname as personnel_lastname','tbltransaction.action','tbltransaction.remarks','tbltransaction.documents')
        ->first();

    return response()->json(['data' => $transaction]);
}

    
}
