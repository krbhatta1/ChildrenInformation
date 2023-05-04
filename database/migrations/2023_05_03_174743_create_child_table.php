<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('child', function (Blueprint $table) {
            $table->id('childid');
            $table->string('ChildFirstName');
            $table->string('ChildMiddleName')->nullable();
            $table->string('ChildLastName');
            $table->integer('ChildAge');
            $table->string('ChildGender');
            $table->string('ChildAddress');
            $table->string('ChildCity');
            $table->string('ChildState');
            $table->string('ChildCountry');
            $table->integer('ChildZipCode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child');
    }
};
