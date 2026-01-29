<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('skills', function (Blueprint $table) {
        $table->id();                 // single primary key
        $table->string('name');      // normal column
        $table->string('level');    // normal column
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::dropIfExists('skills');
}

};
