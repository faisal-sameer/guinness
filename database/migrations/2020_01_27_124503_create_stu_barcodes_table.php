<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStuBarcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stu_barcodes', function (Blueprint $table) {
            $table->engine = 'InnoDB';


            $table->Increments('id');
            $table->integer('stu_id')->unsigned()->index();
            $table->foreign('stu_id')->references('id')->on('stu_tables')->onDelete('cascade');
            $table->boolean('attend');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stu_barcodes');
    }
}
