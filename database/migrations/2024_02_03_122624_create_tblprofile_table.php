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
        Schema::create('tblprofile', function (Blueprint $table) {
            $table->id();
            $table->string('Address');
            $table->string('ContactNo');
            $table->string('BirthDate');
            $table->string('BirthPlace');
            $table->string('Division');
            $table->string('Section');
            $table->string('JobTitle');
            $table->string('About');
            $table->string('UserID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblprofile');
    }
};
