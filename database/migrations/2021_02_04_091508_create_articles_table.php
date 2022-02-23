<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('description',1000)->nullable();
            $table->integer('order')->nullable();
            $table->string('info',1000)->nullable();
            $table->string('doi',1000)->nullable();
            $table->string('keywords',500)->nullable();
            $table->foreignId('issue_id')->constrained();
            $table->text('content',5000)->nullable();
            $table->string('authors',2000)->nullable();
            $table->string('authors_names',500)->nullable();
            $table->text('abstract',5000)->nullable();
            $table->text('recognitions',3000)->nullable();
            $table->text('reference',3000)->nullable();
            $table->string('pdf')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
