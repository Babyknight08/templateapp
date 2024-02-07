<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'tbltransaction';
    
    protected $fillable = [
        'transaction_no',
        'system',
        'subsystem',
        'subjectname',
        'action',
        'sender',
        'division',
        'section',
        'personnel',
        'documents',
        'remarks',
        'Status',
        'User_ID',

    ];
}
