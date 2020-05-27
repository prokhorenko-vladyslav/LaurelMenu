<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @throws Exception
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->json('attributes')->nullable();
            $table->foreignId('menu_id');
            $table->foreignId('path_id')->nullable();
            $table->string('path')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->timestamps();
        });

        if (Schema::hasTable('paths')) {
            Schema::table('paths', function (Blueprint $table) {
               $table->foreignId('menu_item_id')->after('parent_id')->nullable();
            });
        } else {
            throw new Exception('Table paths has not been found');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_items');
    }
}
