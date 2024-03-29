<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTables extends Migration
{
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->integer('position')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->text('header_one')->nullable();
            $table->text('header_two')->nullable();
            $table->text('header_three')->nullable();
            $table->text('header_subtext')->nullable();
            $table->string('template')->default('default');
            $table->boolean('show_logos')->default(false);
            $table->string('header_title_size')->default('4xl');
            $table->string('button_1_label')->nullable();
            $table->string('button_1_url')->nullable();
            $table->string('button_2_label')->nullable();
            $table->string('button_2_url')->nullable();

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('page_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'page');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->text('header_one')->nullable();
            $table->text('header_two')->nullable();
            $table->text('header_three')->nullable();
            $table->text('header_subtext')->nullable();
            $table->string('button_1_label')->nullable();
            $table->string('button_2_label')->nullable();
        });

        Schema::create('page_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'page');
        });

        Schema::create('page_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'page');
        });
    }

    public function down()
    {
        Schema::dropIfExists('page_revisions');
        Schema::dropIfExists('page_translations');
        Schema::dropIfExists('page_slugs');
        Schema::dropIfExists('pages');
    }
}
