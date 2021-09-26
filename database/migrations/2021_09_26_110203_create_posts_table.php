<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('excerpt')->nullable();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('approve_by')->nullable();
            $table->longText('body');
            $table->string('image')->nullable();
            $table->integer('status')->default(2);
            $table->boolean('active')->default(1);
            $table->boolean('featured')->default(1);
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->json('meta_keywords')->nullable();
            $table->timestamps();

            // Foreign
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('approve_by')->references('id')->on('users')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('posts');
    }
}
