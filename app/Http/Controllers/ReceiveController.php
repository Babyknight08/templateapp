<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class ReceiveController extends Controller
{
    public function index(Request $request){
        $authid = auth()->user();
        $id = $request->input('id');
    
        $data = Transaction::join('tbluser', 'tbluser.id', '=', 'tbltransaction.user_id')
        ->join('tbluser as personnel', 'personnel.id', '=', 'tbltransaction.personnel')
        ->where('tbltransaction.id', $id)
        ->where('personnel.id', auth()->id())
        ->select('tbltransaction.System', 'tbltransaction.sender', 'tbltransaction.SubSystem','tbluser.address','tbltransaction.subjectname','tbluser.division','tbluser.section',User::raw("CONCAT(personnel.firstname, ' ', personnel.lastname) AS personnel"),'tbltransaction.action','tbltransaction.remarks','tbltransaction.documents')
        ->first();
        if ($data) {
            return view('receive', ['data' => $data, 'auth' => $authid]);
        }
        else{
        return response()->json(['error' => 'Unauthorized Access!'], 403);

        }
    }
    
    
    public function show(Request $request)
    {

    }
}
