<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table -> integer('author_id')->unsigned()->default(0);

            $table->string('titleRu')->nullable();
            $table->string('titleEn')->nullable();
            $table->string('linkEn')->nullable();
            $table->string('linkRu')->nullable();
            $table->string('days')->nullable();
            $table->string('night')->nullable();
            $table->integer('price')->nullable();
            $table->string('img1')->nullable();
            $table->enum('role',['extreme','heal','all','culture','gastronomy','weekend'])->default('all');
            $table->boolean('active');
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
        Schema::dropIfExists('posts');
    }
}
