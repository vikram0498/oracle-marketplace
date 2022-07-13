<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagesetting extends Model
{
    protected $fillable = ['contact_email','street','phone','fax','email','site','best_seller_banner','best_seller_banner_link','big_save_banner','big_save_banner_link','best_seller_banner1','best_seller_banner_link1','big_save_banner1','big_save_banner_link1','partners','bottom_small','rightbanner1','rightbanner2','rightbannerlink1','rightbannerlink2','home','blog','faq','contact','category','arrival_section','our_services','blog','popular_products','third_left_banner','slider','flash_deal','deal_of_the_day','best_sellers','partner','top_big_trending','top_brand','category_slider','top_deal','popular_gifts','used_product_slider','smart_watch_banner','two_banner_section','flash_deal_of_day','four_section_banner','best_seller_slider','top_products','kitchen_banner','trending_collection_slider','discount_banner','best_fashion_banner','auction_products_slider','popular_category_slider','premiumn_products','recent_view'];

    public $timestamps = false;

    public function upload($name,$file,$oldname)
    {
        $file->move('assets/images',$name);
        if($oldname != null)
        {
            if (file_exists(public_path().'/assets/images/'.$oldname)) {
                unlink(public_path().'/assets/images/'.$oldname);
            }
        }
    }

}
