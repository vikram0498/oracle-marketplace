@extends('layouts.admin')

@section('content')

<div class="content-area">
  <div class="mr-breadcrumb">
    <div class="row">

      <div class="col-lg-12">
        <h4 class="heading">{{ __('Home Page Customization') }}</h4>
        <ul class="links">
          <li>
            <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
          </li>
          <li>
            <a href="javascript:;">{{ __('Home Page Settings') }}</a>
          </li>
          <li>
            <a href="{{ route('admin-ps-customize') }}">{{ __('Home Page Customization') }}</a>
          </li>
        </ul>
      </div>

    </div>
  </div>

  <div class="add-product-content1">
    <div class="row">
      <div class="col-lg-12">
        <div class="product-description">
          <div class="social-links-area">
            <div class="gocover"
              style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);">
            </div>
            <form id="geniusform" action="{{ route('admin-ps-homeupdate') }}" method="POST"
              enctype="multipart/form-data">
              @csrf

              @include('alerts.admin.form-both')

              <div class="row justify-content-center">

                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="slider">{{ __('Slider') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="slider" value="1" {{ $data->slider == 1 ? "checked" : ""}}>
                    <span class="slider round"></span>
                  </label>
                </div>

                <div class="col-lg-2"></div>

          
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="arrival_section">{{ __('Arrival Section') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="arrival_section" value="1" {{ $data->arrival_section == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>

              </div>

              <div class="row justify-content-center">

                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="category">{{ __('Featured Products') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="category" value="1" {{ $data->category == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>

                <div class="col-lg-2"></div>
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="deal_of_the_day">{{ __('Deal Of The Day') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="deal_of_the_day" value="1" {{ $data->deal_of_the_day == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>

              </div>

              <div class="row justify-content-center">

             
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="top_big_trending">{{ __('Top Rated, Big Save & Trending') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="top_big_trending" value="1" {{ $data->top_big_trending == 1 ? "checked" : ""}}>
                    <span class="slider round"></span>
                  </label>
                </div>

                <div class="col-lg-2"></div>

                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="partner">{{ __('Partner') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="partner" value="1" {{ $data->partner == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>

              </div>

              <div class="row justify-content-center">

                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="best_sellers">{{ __('Best Selling Product') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="best_sellers" value="1" {{ $data->best_sellers == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>

                <div class="col-lg-2"></div>

                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="blog">{{ __('Blogs') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="blog" value="1" {{ $data->blog == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>

              </div>

            

              <div class="row justify-content-center">

                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="third_left_banner">{{ __('Newsletter') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="third_left_banner" value="1" {{ $data->third_left_banner == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>

                <div class="col-lg-2"></div>
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="category_slider">{{ __('Shop by Category Slider ') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="category_slider" value="1" {{ $data->category_slider == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="popular_gifts">{{ __('Popular Gifts') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="popular_gifts" value="1" {{ $data->popular_gifts == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>

                <div class="col-lg-2"></div>
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="top_deal">{{ __('Top 50 Deals') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="top_deal" value="1" {{ $data->top_deal == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="used_product_slider">{{ __('Used Products Slider') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="used_product_slider" value="1" {{ $data->used_product_slider == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>

                <div class="col-lg-2"></div>
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="best_seller_slider">{{ __('Best Seller Slider') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="best_seller_slider" value="1" {{ $data->best_seller_slider == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="smart_watch_banner">{{ __('Smart Watch Banner') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="smart_watch_banner" value="1" {{ $data->used_product_slider == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>

                <div class="col-lg-2"></div>
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="two_banner_section">{{ __('Two Banner Section') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="two_banner_section" value="1" {{ $data->top_deal == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>

              <div class="row justify-content-center">
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="flash_deal_of_day">{{ __('Flash Deal of The Day') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="flash_deal_of_day" value="1" {{ $data->flash_deal_of_day == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>

                <div class="col-lg-2"></div>
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="four_section_banner">{{ __('4 Section Banner') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="four_section_banner" value="1" {{ $data->four_section_banner == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>

              <div class="row justify-content-center">
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="used_product_slider">{{ __('Top Products') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="top_products" value="1" {{ $data->top_products == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="kitchen_banner">{{ __('Kitchen Banner') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="kitchen_banner" value="1" {{ $data->kitchen_banner == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>

              <div class="row justify-content-center">
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="trending_collection_slider">{{ __('Trending Collection Slider') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="trending_collection_slider" value="1" {{ $data->trending_collection_slider == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="discount_banner">{{ __(' 10% Discount Banner') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="discount_banner" value="1" {{ $data->discount_banner == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>

              <div class="row justify-content-center">
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="best_fashion_banner">{{ __('Best Fashion Banner') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="best_fashion_banner" value="1" {{ $data->best_fashion_banner == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="auction_products_slider">{{ __('Auction Products Slider') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="auction_products_slider" value="1" {{ $data->auction_products_slider == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>

              <div class="row justify-content-center">
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="popular_category_slider">{{ __('Popular Category Slider') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="popular_category_slider" value="1" {{ $data->popular_category_slider == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="premiumn_products">{{ __('Premium Products') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="premiumn_products" value="1" {{ $data->premiumn_products == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-lg-4 d-flex justify-content-between">
                  <label class="control-label" for="recent_view">{{ __('Recently viewed Slider ') }} *</label>
                  <label class="switch">
                    <input type="checkbox" name="recent_view" value="1" {{ $data->recent_view == 1 ? "checked" : "" }}>
                    <span class="slider round"></span>
                  </label>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-4 d-flex justify-content-between">
                </div>
              </div>
              <div class="row">
                <div class="col-12 text-center">
                  <button type="submit" class="submit-btn">{{ __('Submit') }}</button>
                </div>
              </div>

            </form>

              </div>

              <br>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
