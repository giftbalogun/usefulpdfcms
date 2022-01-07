<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contract_id');

            $table->unsignedInteger('user_id')->index();

            $table->string('name');
            $table->string('header_title');
            $table->text('header_content');
            $table->char('preview_image')->nullable();

            $table->text('template_body');

            $table->string('page_title');
            $table->string('page_meta_description');
            $table->char('page_meta_image');

            $table->char('slug')->index();
            $table->dateTime('published_at');
            $table->timestamps();

            $table
                ->foreign('contract_id')
                ->references('id')
                ->on('contract')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template');
    }
}
