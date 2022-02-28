<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            // $table->uuid('id')->primary();
            $table->id();
            // $table->uuid('post');
            $table->foreignId('post');
            // $table->uuid('owner');
            $table->foreignId('owner');
            $table->string('name');
            $table->string('species');
            $table->text('description')->nullable();
            $table->integer('age');
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
        Schema::dropIfExists('animals');
    }
}
