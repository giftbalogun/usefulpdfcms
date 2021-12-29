<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->index();

            $table->string('name');
            $table->string('header_title');
            $table->text('header_content');
            $table->char('preview_image')->nullable();
            $table->string('short_name');

            $table->text('template_body');
            $table->text('short_description');

            $table->string('page_title');
            $table->string('page_meta_description');
            $table->char('page_meta_image');

            $table->char('slug')->index();
            $table->dateTime('published_at');
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
        Schema::dropIfExists('contract_templates');
    }
}
