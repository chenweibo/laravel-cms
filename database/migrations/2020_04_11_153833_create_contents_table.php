<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('sort');
            $table->string('time')->nullable($value = true);
            $table->string('redirect')->nullable($value = true);
            $table->integer('menus_id');
            $table->tinyInteger('recommend')->default(false);
            $table->integer('page_views');
            $table->text('detail')->nullable($value = true);
            $table->json('extra');
            $table->tinyInteger('status');
            $table->softDeletes();
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
        Schema::dropIfExists('contents');
    }
}
