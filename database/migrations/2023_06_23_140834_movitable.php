<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.  IMG, Title, Publication Date,IMG, Title, Description, runtime, and Publication Date.
     */ 
    public function up(): void
    {
        Schema::create('movitable', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('title');
            $table->string('publicationdate');
            $table->string('runtime');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
