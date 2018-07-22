<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductIdResourceIdThumbnails extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('thumbnails', function (Blueprint $table) {
            $table->integer('product_id')->nullable();
            $table->integer('resource_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('thumbnails', function (Blueprint $table) {
            //
        });
    }

}
