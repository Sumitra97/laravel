<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {

        Schema::table('tbl_items', function (Blueprint $table) {
            $table->integer('category_id')->after('description');
            $table->integer('reorder_level')->after('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_items', function (Blueprint $table) {
            //
        });
    }
}
