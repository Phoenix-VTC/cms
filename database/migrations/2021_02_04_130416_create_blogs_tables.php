<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogsTables extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();

            $table->string('author', 200)->nullable();
        });

        Schema::create('blog_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'blog');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->string('tag', 20)->nullable();
        });

        Schema::create('blog_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'blog');
        });

        Schema::create('blog_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'blog');
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_revisions');
        Schema::dropIfExists('blog_translations');
        Schema::dropIfExists('blog_slugs');
        Schema::dropIfExists('blogs');
    }
}
