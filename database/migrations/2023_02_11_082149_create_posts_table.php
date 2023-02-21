<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->unsignedBigInteger('category_id')->nullable();//разобрать детальнее и в план мнемоники nullable если у поста нет категории
            $table->timestamps();

            $table->index('category_id', 'post_category_idx'); //привязываем, имя это
            $table->foreign('category_id', 'post_category_fk')->on('categories')->references('id');
            //рэзэбрать ->on('categories') назв таблицы references(колонка)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
