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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Default Title');
            $table->string('author')->default('Mr. Author');
            $table->string('publisher')->default('Pt. Publisher');
            $table->year('year')->default('2012');
            $table->string('edition')->default('1');
            $table->integer('quantity')->default('2');
            $table->string('category')->nullable()->default('Default category');
            $table->string('cover')->default('images/books/default.jpg');
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
        Schema::dropIfExists('books');
    }
};
