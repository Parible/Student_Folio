<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transcripts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->enum('programme',['CE', 'MC', 'SE', 'DCS', 'DIT', 'BIT'])->default("CE");
            $table->string('image');
            $table->enum('level',['100', '200', '300', '400', 'Graduate']);
            $table->enum('session', ['Morning', 'Evening', 'Weekend'])->default('morning');
            $table->unsignedBigInteger('sid');
            $table->enum('campus',['Tesano', 'Kumasi', 'Koforidua'])->default("tesano");
            $table->integer('contact');
            $table->date('dob');

            // //Page 2 data
            // $table->enum('id_type', ['Ghana_Card', 'Voters_ID', 'Drivers_License', 'NHIS', 'Passport']);
            // $table->integer('id_number');
            // $table->string('pdf');

            //Page 3 Data
            $table->string('request_type'); 
          
            
            // Page 4 Data
            $table->unsignedBigInteger('transaction_id')->nullable();

             //PDF
            // $table->string('pdf')->nullable(); 

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
        Schema::dropIfExists('transcripts',  function (Blueprint $table) {
            //  $table->dropColumn('pdf');
            
             
       });
        
        
    }
};
