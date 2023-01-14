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
        Schema::create('ptaresult', function (Blueprint $table) {
            $table->Integer("resultID");
            $table->String("studentID");
            $table->Float("svMark");
            $table->Float("evMark");
            $table->Float("totalMark");
            $table->String("grade");
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
        Schema::dropIfExists('ptaresult');
    }
};
