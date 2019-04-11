<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\ServiceProvider;

class CreateCarsTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('cars', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->bigInteger('brand_id')->unsigned();
           $table->foreign('brand_id')->references('id')->on('brands');
           $table->string('name');
           $table->string('color');
           $table->boolean('fuel');
           $table->integer('places');
           $table->string('power');
           $table->integer('price');
           $table->string('matricule');
           $table->boolean('statut');
           $table->string('comments');
           $table->timestamps();
           $table->softDeletes();
       });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
       Schema::dropIfExists('cars');
   }
}