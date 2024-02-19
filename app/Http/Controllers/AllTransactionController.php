<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('alltransaction');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show()
    // {
    //     $usersWithTransactions = User::join('tbltransaction', 'tbluser.id', '=', 'tbltransaction.User_ID')
    //         ->join('tbluser as personnel', 'personnel.id', '=', 'tbltransaction.personnel')
    //         ->select('tbltransaction.id', 'tbltransaction.Transaction_No', 'tbltransaction.System', 'tbltransaction.SubSystem' , 'tbltransaction.SubjectName', 'tbltransaction.Action', 'tbluser.firstname', 'tbluser.lastname', 'personnel.firstname as personnel_firstname', 'personnel.lastname as personnel_lastname','tbltransaction.created_at')
    //         ->get();
    
    //     return response()->json(['data' => $usersWithTransactions]);
    // }

    public function show()
    {
        $usersWithTransactions = User::join('tbltransaction', 'tbluser.id', '=', 'tbltransaction.User_ID')
            ->join('tbluser as personnel', 'personnel.id', '=', 'tbltransaction.personnel')
            ->select('tbltransaction.id', 'tbltransaction.Transaction_No', 'tbltransaction.System', 'tbltransaction.SubSystem' , 'tbltransaction.SubjectName', User::raw("CONCAT(tbluser.firstname, ' ', tbluser.lastname) AS Sender"),'tbltransaction.Action',  User::raw("CONCAT(personnel.firstname, ' ', personnel.lastname) AS Personnel"),'tbltransaction.Remarks','tbltransaction.created_at')
            ->orderBy('id', 'DESC')
            ->get();

        return response()->json(['data' => $usersWithTransactions]);
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
            )
            ->first();
    
        if ($transaction) {
            return response()->json(['data' => $transaction]);

        }

        return response()->json(['error' => 'Unauthorized Access!'], 403);

    }
}
