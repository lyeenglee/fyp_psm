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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->String("studentID");
            $table->String("stuentName");
            $table->String("stdaddress");
            $table->String("studentPhone");
            $table->String("stdemail");
            $table->Integer("stdyear");
            $table->String("stdsupervisor");
            $table->String("stdpsmtitle");
            $table->String("psmType");
            $table->String("image");
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
        Schema::dropIfExists('students');
    }
};
