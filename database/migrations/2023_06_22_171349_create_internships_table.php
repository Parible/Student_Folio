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
        Schema::create('internships', function (Blueprint $table) {
            $table->id();           
            $table->string('firstname');
            $table->string('lastname');
            $table->enum('programme',[

                "Bsc. in Computer Engineering",
            "BSc. in Mobile Computing", 
            "BSc. in Software Engineering", 
            "Diploma in Cyber Security",
                "Diploma in Information Technology",

            ]); 
            $table->string('level'); 
            $table->integer('contact');
            $table->string('department')->default("Information Technology");
            $table->enum('title',[
                "Mr",
                "Mrs",
                "Miss",
            ]);
            $table->enum('type', [
                "Diploma",
                "Degree",
            ]);
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
        Schema::dropIfExists('internships');
    }
};
