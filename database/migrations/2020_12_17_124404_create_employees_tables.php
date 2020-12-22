<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployeesTables extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->string('header_title_size')->default('4xl');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('branch')->nullable();
            $table->string('job_title')->nullable();

            $table->integer('position')->unsigned()->nullable();

            $table->timestamp('publish_start_date')->nullable();
            $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('employee_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'employee');
            $table->text('header_one')->nullable();
            $table->text('header_two')->nullable();
            $table->text('header_three')->nullable();
            $table->text('header_subtext')->nullable();
            $table->string('title', 200)->nullable();
            $table->string('branch')->nullable();
            $table->string('job_title')->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('employee_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'employee');
        });

        Schema::create('employee_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'employee');
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_revisions');
        Schema::dropIfExists('employee_translations');
        Schema::dropIfExists('employee_slugs');
        Schema::dropIfExists('employees');
    }
}
