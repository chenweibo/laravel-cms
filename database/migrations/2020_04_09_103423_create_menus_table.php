<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('parentId')->default(0);
            $table->string('path');
            $table->string('url');
            $table->tinyInteger('recommend')->default(false);
            $table->mediumText('pageInfo')->nullable($value = true);
            $table->string('redirect')->nullable($value = true);
            $table->tinyInteger('hide')->default(0);
            $table->json('view');
            $table->integer('perPage')->default(10);
            $table->string('type');
            $table->string('sort')->default(99);
            $table->json('extra');
            $table->integer('created_id');
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
        Schema::dropIfExists('menus');
    }
}
