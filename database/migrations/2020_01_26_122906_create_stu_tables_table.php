<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStuTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stu_tables', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->Increments('id');
            $table->string('stu_name');
            $table->string('school_name');
         //   $table->integer('user_id')->unsigned()->index();
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
        Schema::dropIfExists('stu_tables');
    }
}
