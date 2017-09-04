<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colony', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        
        Schema::create('reporttype', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->timestamps();
        });
        
        Schema::create('reporte', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->integer('colony_id')->unsigned();
            $table->text('address');
            $table->text('reference');
            $table->string('name');
            $table->string('celphone');
            $table->string('mail');
            $table->string('image_path');
            $table->timestamps();
                    
            $table->foreign('user_id')  ->references('id')->on('users')->onDelete('cascade');
            $table->foreign('type_id')  ->references('id')->on('reporttype')->onDelete('cascade');
            $table->foreign('colony_id')->references('id')->on('colony')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reporte');
    }
}
