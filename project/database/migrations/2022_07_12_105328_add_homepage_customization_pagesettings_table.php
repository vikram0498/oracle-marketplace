<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHomepageCustomizationPagesettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pagesettings', function (Blueprint $table) {
            $table->integer('category_slider')->default('1');
            $table->integer('top_deal')->default('1');
            $table->integer('popular_gifts')->default('1');
            $table->integer('used_product_slider')->default('1');
            $table->integer('smart_watch_banner')->default('1');
            $table->integer('two_banner_section')->default('0');
            $table->integer('flash_deal_of_day')->default('0');
            $table->integer('four_section_banner')->default('0');
            $table->integer('best_seller_slider')->default('0');
            $table->integer('top_products')->default('1');
            $table->integer('kitchen_banner')->default('1');
            $table->integer('trending_collection_slider')->default('0');
            $table->integer('discount_banner')->default('0');
            $table->integer('best_fashion_banner')->default('1');
            $table->integer('auction_products_slider')->default('0');
            $table->integer('popular_category_slider')->default('0');
            $table->integer('premiumn_products')->default('1');
            $table->integer('recent_view')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pagesettings', function (Blueprint $table) {
            //
        });
    }
}
