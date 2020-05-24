<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenussTable extends Migration
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
            $table->json('name');
            $table->foreignId('path_id');
            $table->foreignId('user_id')->nullable();
            $table->timestamps();
        });

        if (Schema::hasTable('paths')) {
            Schema::table('paths', function (Blueprint $table) {
               $table->foreignId('menu_id')->after('parent_id')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
