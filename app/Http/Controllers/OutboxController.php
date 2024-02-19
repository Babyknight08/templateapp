<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class OutboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('outbox');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $id = $request->input('id');
        

        $transactions = Transaction::join('tbluser', 'tbluser.id', '=', 'tbltransaction.user_id')
        ->join('tbluser as personnel', 'personnel.id', '=', 'tbltransaction.personnel')
        ->where('tbltransaction.OutboxStatus', 1) 
        ->select(
            'tbltransaction.Transaction_No',
            'tbltransaction.System',
            'tbltransaction.sender',
            'tbltransaction.SubSystem',
            'tbluser.address',
            'tbltransaction.SubjectName',
            'tbltransaction.OutboxStatus',
            'tbluser.division',
            'tbluser.section',
            'tbltransaction.sender',
            'personnel.firstname as personnel_firstname',
            'personnel.lastname as personnel_lastname',
            'tbltransaction.Action',
            'tbltransaction.remarks',
            'tbltransaction.documents',
            'tbltransaction.updated_at'
        )
        ->get();

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
}
