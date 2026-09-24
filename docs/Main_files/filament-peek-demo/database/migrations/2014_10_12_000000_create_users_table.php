<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
<<<<<<< HEAD
return new class extends Migration
=======
return new class() extends Migration
>>>>>>> c34c6d1 (.)
=======
return new class() extends Migration
>>>>>>> ad90ea0 (.)
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
<<<<<<< HEAD
<<<<<<< HEAD


=======
>>>>>>> c34c6d1 (.)
=======
>>>>>>> ad90ea0 (.)
