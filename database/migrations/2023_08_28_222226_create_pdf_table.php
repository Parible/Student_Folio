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
        Schema::create('admin_p_d_f_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable(); // Add a new user_id column
            $table->string('pdf'); // Change the data type as needed
            $table->timestamps();

            
            // $table->unsignedBigInteger('user_id'); // Foreign key referencing the users table
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // Define foreign key constraint
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('admin_p_d_f_s');
        
    }
};
