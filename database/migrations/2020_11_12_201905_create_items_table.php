<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('name')->nullable();
             $table->text('description')->nullable();
              $table->double('price')->nullable();
               $table->boolean('is_available')->nullable()->default(0);
              $table->double('discount')->nullable();
                $table->enum('size',['SM','MD','LG'])->nullable()->default('MD');
              $table->bigInteger('section_id')->unsigned()->nullable();
              $table->foreign('section_id')->references('id')->on('sections')->OnDelete('cascade');
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
        Schema::dropIfExists('items');
    }
}
