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
        Schema::create('tbluser', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('firstname');
            $table->string('lastname');
<<<<<<< HEAD
            // $table->string('address');
            // $table->string('division');
            // $table->string('section');
            // $table->string('jobtitle');
=======
            $table->string('address');
            $table->string('contactno');
            $table->string('division');
            $table->string('section');
            $table->string('jobtitle');
>>>>>>> 2da174bee994caea426a4fea2df7eed9dfa161fb
            $table->string('usertype');
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
        Schema::dropIfExists('tbluser');
    }
};
