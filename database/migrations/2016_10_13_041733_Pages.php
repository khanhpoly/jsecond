<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pages', function (Blueprint $table) {
        $table->string('title')->index();
        $table->text('descrition');
        $table->text('body');
        $table->string('images');
        $table->integer('idcate');
        $table->timestamp('created_at');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('pages');
    }
}
