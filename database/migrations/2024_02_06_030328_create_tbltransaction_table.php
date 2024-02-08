<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbltransaction', function (Blueprint $table) {
            $table->id();
            $table->string('Transaction_No');
            $table->string('System');
            $table->string('SubSystem');
            $table->string('SubjectName');
            $table->string('Sender');
            $table->string('Action');
            $table->string('Division');
            $table->string('Section');
            $table->string('Personnel');
            $table->string('Documents');
            $table->string('Remarks');
            $table->string('Status');
            $table->foreignId('User_ID')->constrained('tbluser');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbltransaction');
    }
};
