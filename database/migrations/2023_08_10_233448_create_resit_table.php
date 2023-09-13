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
        Schema::create('resits', function (Blueprint $table) {
            $table->id();
             $table->string('firstname');
            $table->string('lastname');
             $table->enum('programme',['CE', 'MC', 'SC', 'DCS', 'DIT', 'BIT'])->default("CE");
              $table->integer('contact');
              $table->string('email');
              $table->enum('department', [
                'FOCIS'
              ]);
                 $table->unsignedBigInteger('sid');
                 $table->integer('course_code');
                 $table->integer('academic_year');
                 $table->string('course_title');
                 $table->string('name_of_lecturer');
              
               $table->unsignedBigInteger('transaction_id')->nullable();
            
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
        Schema::dropIfExists('resits');
    }
};
