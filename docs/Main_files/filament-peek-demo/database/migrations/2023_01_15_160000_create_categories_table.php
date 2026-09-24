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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug')->unique();
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
<<<<<<< HEAD
<<<<<<< HEAD


=======
>>>>>>> c34c6d1 (.)
=======
>>>>>>> ad90ea0 (.)
