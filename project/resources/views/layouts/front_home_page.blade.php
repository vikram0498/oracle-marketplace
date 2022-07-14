<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="GeniusCart-New - Multivendor Ecommerce system">
    <meta name="author" content="GeniusOcean">

    @if(isset($page->meta_tag) && isset($page->meta_description))

        <meta name="keywords" content="{{ $page->meta_tag }}">
        <meta name="description" content="{{ $page->meta_description }}">
        <title>{{$gs->title}}</title>

    @elseif(isset($blog->meta_tag) && isset($blog->meta_description))

        <meta property="og:title" content="{{$blog->title}}" />
        <meta property="og:description" content="{{ $blog->meta_description != null ? $blog->meta_description : strip_tags($blog->meta_description) }}" />
        <meta property="og:image" content="{{asset('assets/images/blogs/'.$blog->photo)}}" />
        <meta name="keywords" content="{{ $blog->meta_tag }}">
        <meta name="description" content="{{ $blog->meta_description }}">
        <title>{{$gs->title}}</title>

    @elseif(isset($productt))

        <meta name="keywords" content="{{ !empty($productt->meta_tag) ? implode(',', $productt->meta_tag ): '' }}">
        <meta name="description" content="{{ $productt->meta_description != null ? $productt->meta_description : strip_tags($productt->description) }}">
        <meta property="og:title" content="{{$productt->name}}" />
        <meta property="og:description" content="{{ $productt->meta_description != null ? $productt->meta_description : strip_tags($productt->description) }}" />
        <meta property="og:image" content="{{asset('assets/images/thumbnails/'.$productt->thumbnail)}}" />
        <meta name="author" content="GeniusOcean">
        <title>{{substr($productt->name, 0,11)."-"}}{{$gs->title}}</title>

    @else

        <meta property="og:title" content="{{$gs->title}}" />
        <meta property="og:image" content="{{asset('assets/images/'.$gs->logo)}}" />
        <meta name="keywords" content="{{ $seo->meta_keys }}">
        <meta name="author" content="GeniusOcean">
        <title>{{$gs->title}}</title>

    @endif

    <link rel="icon"  type="image/x-icon" href="{{asset('assets/images/'.$gs->favicon)}}"/>
    <!-- Google Font -->
    @if ($default_font->font_value)
        <link href="https://fonts.googleapis.com/css?family={{ $default_font->font_value }}:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @else
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @endif

    @if ($default_font->font_family)
            <link rel="stylesheet" id="colorr" href="{{ asset('assets/front/css/font.php?font_familly='.$default_font->font_family) }}">
    @else
            <link rel="stylesheet" id="colorr" href="{{ asset('assets/front/css/font.php?font_familly='."Open Sans") }}">
    @endif
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{asset('asset_old/front/css/all.css')}}">

    <!--Updated CSS-->
    <link rel="stylesheet" href="{{ asset('asset_old/front/css/styles.php?color=505773&header_color=ffffff&footer_color=143250&copyright_color=02020c&menu_color=ff5500&menu_hover_color=02020c') }}">

    <link rel="stylesheet" href="{{asset('asset_old/front/css/auction.css')}}">


    @if(!empty($seo->google_analytics))
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
                dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', '{{ $seo->google_analytics }}');
    </script>
    @endif
    @if(!empty($seo->facebook_pixel))
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '{{ $seo->facebook_pixel }}');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none"
                 src="https://www.facebook.com/tr?id={{ $seo->facebook_pixel }}&ev=PageView&noscript=1"/>
        </noscript>
    @endif
    <script src="http://js.stripe.com/v3/"></script>
    @yield('css')

</head>
<body class="home-container">
    <section class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 remove-padding">
                    <div class="content">
                        <div class="left-content">
                            <div class="list">
                                <ul>


                                    
                                    

                                </ul>
                            </div>
                        </div>
                        <div class="right-content">
                            <div class="list">
                                <ul>
                                                                        <li class="login">
                                        <a href="#" class="sign-log">
                                            <div class="links">
                                                <span class="sign-in">Sign in</span> <span>|</span>
                                                <span class="join">Join</span>
                                            </div>
                                        </a>
                                    </li>
                                    

                                                                            <li>
                                                                                </li><li>
                                            <a href="javascript:;" data-toggle="modal" data-target="#vendor-login" class="sell-btn">Sell</a>
                                        </li>
                                                                            

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="logo-header">
        <div class="container">
            <div class="row ">
                <div class="col-lg-2 col-sm-6 col-5 remove-padding">
                    <div class="logo">
                        <a href="#">
                            <img src="{{asset('asset_old/images/1611727654oracle_logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 remove-padding order-last order-sm-2 order-md-2">
                    <div class="search-box-wrapper">
                        <div class="search-box">
                            <div class="categori-container" id="catSelectForm">
                                <select name="category" id="category_select" class="categoris">
                                    <option value="">All Categories</option>
                                                                        <option value="electric">Electronic</option>
                                                                        <option value="sport-and-outdoors">Sport &amp; Outdoors</option>
                                                                        <option value="toys-and-games">Toys &amp; Games</option>
                                                                        <option value="automotive">Automotive</option>
                                                                        <option value="home-and-garden">Home &amp; Garden</option>
                                                                        <option value="arts-crafts-and-books">Arts, Crafts &amp; Books</option>
                                                                        <option value="fashion">Fashion</option>
                                                                        <option value="industrial-and-scientific">Industrial &amp; Scientific</option>
                                                                        <option value="health-beauty">Health &amp; Beauty</option>
                                                                        <option value="appliances">Appliances</option>
                                                                        <option value="furniture">Furniture</option>
                                                                        <option value="tools-and-equipment">Tools &amp; Equipment</option>
                                                                        <option value="kids">Kids</option>
                                                                        <option value="Gifts">Gifts</option>
                                                                    </select>
                            </div>

                            <form id="searchForm" class="search-form" action="#" method="GET">
                                                                                                                                <input type="text" id="prod_name" name="search" placeholder="Search For Product" value="" autocomplete="off">
                                <div class="autocomplete">
                                  <div id="myInputautocomplete-list" class="autocomplete-items">
                                  </div>
                                </div>
                                <button type="submit"><i class="icofont-search-1"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-7 remove-padding order-lg-last">
                    <div class="helpful-links">
                        <ul class="helpful-links-inner">
                            <li class="my-dropdown" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cart">
                                <a href="javascript:;" class="cart carticon">
                                    <div class="icon">
                                        <i class="icofont-cart"></i>
                                        <span class="cart-quantity" id="cart-count">0</span>
                                    </div>

                                </a>
                                <div class="my-dropdown-menu" id="cart-items">
                                    <p class="mt-1 pl-3 text-left">Cart is empty.</p>
                                                                    </div>
                            </li>
                            <li class="wishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wish">
                                                                    <a href="javascript:;" data-toggle="modal" id="wish-btn" data-target="#comment-log-reg" class="wish">
                                        <i class="far fa-heart"></i>
                                        <span id="wishlist-count">0</span>
                                    </a>
                                                            </li>
                            <li class="compare" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare">
                                <a href="#" class="wish compare-product">
                                    <div class="icon">
                                        <i class="fas fa-exchange-alt"></i>
                                        <span id="compare-count">0</span>
                                    </div>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mainmenu-area mainmenu-bb">
        <div class="container">
            <div class="row align-items-center mainmenu-area-innner">
                <div class="col-lg-3 col-md-6 categorimenu-wrapper remove-padding">
                    
                    <div class="categories_menu">
                        <div class="categories_title">
                            <h2 class="categori_toggle"><i class="fa fa-bars"></i>   Shop by Category<i class="fa fa-angle-down arrow-down"></i></h2>
                        </div>
                        <div class="categories_menu_inner" style="display: none; height: 609px; padding-top: 0px; margin-top: -2px; padding-bottom: 7px; margin-bottom: 0px;">
                            <ul>
                                                                
                                <li class="dropdown_list ">
                                                                    <div class="img">
                                        <img src="{{asset('assets/images/categories/1557807287light.png')}}" alt="">
                                    </div>
                                    <div class="link-area">
                                        <span><a href="//localhost/oracle_old/products/subcategories/electric">Electronic</a></span>
                                                                                <a href="javascript:;">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                                                            </div>

                                                                    
                                                                        <ul class="categories_mega_menu row">
                                        <div class="backmenu">
                                        Back
                                        </div>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/accessories-supplies">Accessories &amp; Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/accessories-supplies/audio-video-accessories">Audio &amp; Video Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/accessories-supplies/batteries-chargers-and-accessories">Batteries, Chargers &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/accessories-supplies/blank-media">Blank Media</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/accessories-supplies/cable-organizer-bags-and-cases">Cable Organizer Bags &amp; Cases</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/accessories-supplies/cables">Cables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/accessories-supplies/camera-and-photo-accessories">Camera &amp; Photo Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/accessories-supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/air-conditioners">Air Conditioners</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/air-conditioners/Air-Coolers">Air Coolers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/air-conditioners/central-air">Central Air</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/air-conditioners/hybrid-air">Hybrid Air</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/air-conditioners/portable-air">Portable Air</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/air-conditioners/Portable-Air-Conditioners">Portable Air Conditioners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/air-conditioners/window-air">Window Air</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/air-conditioners">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/camera-and-photo">Camera &amp; Photo</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/camera-and-photo/binoculars-and-scopes">Binoculars &amp; Scopes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/camera-and-photo/digital-cameras">Digital Cameras</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/camera-and-photo/film-photography">Film Photography</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/camera-and-photo/lenses">Lenses</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/camera-and-photo/printers-and-scanners">Printers &amp; Scanners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/camera-and-photo/simulated-cameras">Simulated Cameras</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/camera-and-photo">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/car-and-vehicle-electronics">Car &amp; Vehicle Electronics</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/car-and-vehicle-electronics/aviation-electronics">Aviation Electronics</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/car-and-vehicle-electronics/car-electronics">Car Electronics</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/car-and-vehicle-electronics/marine-electronics">Marine Electronics</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/car-and-vehicle-electronics/powersports-electronics">Powersports Electronics</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/car-and-vehicle-electronics/vehicle-gps">Vehicle GPS</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/car-and-vehicle-electronics">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/cell-phones-and-accessories">Cell Phones &amp; Accessories</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/cell-phones-and-accessories/Cell-Phones-Accessories">Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/cell-phones-and-accessories/carrier-cell-phones">Carrier Cell Phones</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/cell-phones-and-accessories/Cases-Holsters-and-Clips">Cases, Holsters &amp; Clips</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/cell-phones-and-accessories/cases-holsters-and-clips">Cases, Holsters &amp; Clips</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/cell-phones-and-accessories/Cell-Phone-Accessories">Cell Phone Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/cell-phones-and-accessories/Cell-Phones">Cell Phones</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/cell-phones-and-accessories">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/computers">Computers</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/computers/Cases-Enclosures-and-Racks">Cases, Enclosures &amp; Racks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/computers/computer-accessories-and-peripherals">Computer Accessories &amp; Peripherals</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/computers/Computer-Hardware">Computer Hardware</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/computers/Computer-Monitors">Computer Monitors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/computers/Computer-Software">Computer Software</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/computers/computers-and-tablets">Computers &amp; Tablets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/computers">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/computers-and-accessories">Computers &amp; Accessories</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/computers-and-accessories/computer-components">Computer Components</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/computers-and-accessories/computers-and-tablets">Computers &amp; Tablets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/computers-and-accessories/data-storage">Data Storage</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/computers-and-accessories/laptop-accessories">Laptop Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/computers-and-accessories/computers-monitors">Monitors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/computers-and-accessories/networking-products">Networking Products</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/computers-and-accessories">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/eBook-readers-and-accessories">eBook Readers &amp; Accessories</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/eBook-readers-and-accessories/Bundles">Bundles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/eBook-readers-and-accessories/eBook-Readers">eBook Readers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/eBook-readers-and-accessories/Power-Adapters">Power Adapters</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/eBook-readers-and-accessories/Power-Cables">Power Cables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/eBook-readers-and-accessories/Reading-Lights">Reading Lights</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/eBook-readers-and-accessories/Screen-Protectors">Screen Protectors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/eBook-readers-and-accessories">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/gps-and-navigation">GPS &amp; Navigation</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/gps-and-navigation/boating-gps-units-and-chartplotters">Boating GPS Units &amp; Chartplotters</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/gps-and-navigation/GPS-trackers">GPS Trackers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/gps-and-navigation/item-finders">Item Finders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/gps-and-navigation/sports-and-handheld-gps">Sports &amp; Handheld GPS</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/gps-and-navigation/vehicle-gps">Vehicle GPS</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/gps-and-navigation">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/headphones">Headphones</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/headphones/earbud-headphones">Earbud Headphones</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/headphones/on-ear-headphones">On-Ear Headphones</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/headphones/over-ear-headphones">Over-Ear Headphones</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/headphones">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/home-audio">Home Audio</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/home-audio/compact-radios-and-stereos">Compact Radios &amp; Stereos</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/home-audio/headphones">Headphones</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/home-audio/home-theater">Home Theater</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/home-audio/speakers">Speakers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/home-audio/stereo-system-components">Stereo System Components</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/home-audio/turntables-and-accessories">Turntables &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/home-audio">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/movies-and-television">Movies &amp; Television</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/movies-and-television/Movies-and-Films">Movies &amp; Films</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/movies-and-television/TV-Shows">TV Shows</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/movies-and-television">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/office-electronics">Office Electronics</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/office-electronics/Calculators">Calculators</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/office-electronics/Document-Cameras">Document Cameras</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/office-electronics/Electronic-Dictionaries-Thesauri-and-Translators">Electronic Dictionaries, Thesauri &amp; Translators</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/office-electronics/Fax-Machines">Fax Machines</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/office-electronics/PDAs-and-Handhelds">PDAs &amp; Handhelds</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/office-electronics/Point-of-Sale-POS-Equipment">Point-of-Sale (POS) Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/office-electronics">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/portable-audio-and-video">Portable Audio &amp; Video</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/portable-audio-and-video/Boomboxes">Boomboxes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/portable-audio-and-video/Cassette-Players-and-Recorders">Cassette Players &amp; Recorders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/portable-audio-and-video/CB-and-Two-Way-Radios">CB &amp; Two-Way Radios</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/portable-audio-and-video/Digital-Voice-Recorders">Digital Voice Recorders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/portable-audio-and-video/Microcassette-Recorders">Microcassette Recorders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/portable-audio-and-video/Minidisc-Players">Minidisc Players</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/portable-audio-and-video">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/security-and-surveillance">Security &amp; Surveillance</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/security-and-surveillance/Biometrics">Biometrics</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/security-and-surveillance/Home-Security-Systems">Home Security Systems</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/security-and-surveillance/Horns-and-Sirens">Horns &amp; Sirens</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/security-and-surveillance/Motion-Detectors">Motion Detectors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/security-and-surveillance/Radio-Scanners">Radio Scanners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/security-and-surveillance/Surveillance-Cameras">Surveillance Cameras</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/security-and-surveillance">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/service-plans">Service Plans</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/service-plans/Computers">Computers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/service-plans">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/software">Software</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/software/Antivirus-and-Security-Software">Antivirus &amp; Security Software</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/software/Business-Accounting-Software">Business Accounting Software</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/software/Office-Suites-Software">Office Suites Software</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/software/Operating-Systems">Operating Systems</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/software">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/television-and-video">Television &amp; Video</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/television-and-video/Analog-to-Digital-DTV-Converters">Analog-to-Digital (DTV) Converters</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/television-and-video/AV-Receivers-and-Amplifiers">AV Receivers &amp; Amplifiers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/television-and-video/Blu-ray-Players-and-Recorders">Blu-ray Players &amp; Recorders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/television-and-video/DVD-Players-and--mRecorders">DVD Players &amp; Recorders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/television-and-video/DVD-VCR-Combos">DVD-VCR Combos</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/television-and-video/HD-DVD-Players">HD DVD Players</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/television-and-video">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/video-game-consoles-and-accessories">Video Game Consoles &amp; Accessories</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/video-game-consoles-and-accessories/Nintendo-3DS">Nintendo 3DS</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/video-game-consoles-and-accessories/Nintendo-DS">Nintendo DS</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/video-game-consoles-and-accessories/Nintendo-Switch">Nintendo Switch</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/video-game-consoles-and-accessories/PlayStation-3">PlayStation 3</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/video-game-consoles-and-accessories/PlayStation-4">PlayStation 4</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/video-game-consoles-and-accessories/PlayStation-Vita">PlayStation Vita</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/video-game-consoles-and-accessories">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/electric/wearable-technology">Wearable Technology</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/wearable-technology/Body-Mounted-Cameras">Body Mounted Cameras</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/wearable-technology/Clips-Arm-and-Wristbands">Clips, Arm &amp; Wristbands</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/wearable-technology/Glasses">Glasses</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/wearable-technology/Smartwatches">Smartwatches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/wearable-technology/Virtual-Reality">Virtual Reality</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/electric/wearable-technology">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                            </ul>

                                    
                                    </li>

                                    
                                    

                                    
                                <li class="dropdown_list ">
                                                                    <div class="img">
                                        <img src="//localhost/oracle_old/assets/images/categories/1557807258sports.png" alt="">
                                    </div>
                                    <div class="link-area">
                                        <span><a href="//localhost/oracle_old/products/subcategories/sport-and-outdoors">Sport &amp; Outdoors</a></span>
                                                                                <a href="javascript:;">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                                                            </div>

                                                                    
                                                                        <ul class="categories_mega_menu row">
                                        <div class="backmenu">
                                        Back
                                        </div>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/sport-and-outdoors/boxing-martial-arts-and-mma">Boxing, Martial Arts &amp; MMA</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/boxing-martial-arts-and-mma/clothing-shoes-and-accessories">Clothing, Shoes &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/boxing-martial-arts-and-mma/Gloves-Boxing">Gloves - Boxing</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/boxing-martial-arts-and-mma/Gloves-Martial-Arts">Gloves - Martial Arts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/boxing-martial-arts-and-mma/Martial-Arts-Weapons">Martial Arts Weapons</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/boxing-martial-arts-and-mma/Protective-Gear">Protective Gear</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/boxing-martial-arts-and-mma">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/sport-and-outdoors/Cycling">Cycling</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Cycling/Bicycle-Frames">Bicycle Frames</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Cycling/bicycle-tires-Tubes-and-wheels">Bicycle Tires, Tubes &amp; Wheels</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Cycling/Bicycles">Bicycles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Cycling/Electric-Bicycles">Electric Bicycles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Cycling">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/sport-and-outdoors/Fishing">Fishing</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Fishing/Baits-Lures-and-Flies">Baits, Lures &amp; Flies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Fishing/Finishing-Clothing-Shoes-and-Accessories">Clothing-Shoes-and-Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Fishing/Fishfinders">Fishfinders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Fishing/Fishing-Equipment">Fishing Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Fishing/Fishing-Trips">Fishing Trips</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Fishing/Line-and-Leaders">Line &amp; Leaders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Fishing">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/sport-and-outdoors/fitness-running-and-yoga">Fitness, Running &amp; Yoga</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/fitness-running-and-yoga/Cardio-Equipment">Cardio Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/fitness-running-and-yoga/Fitness-Clothing-and-Accessories">Clothing &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/fitness-running-and-yoga/Fitness-Equipment-and-Gear">Fitness Equipment &amp; Gear</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/fitness-running-and-yoga/Fitness-Technology">Fitness Technology</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/fitness-running-and-yoga/Gym-Bags">Gym Bags</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/fitness-running-and-yoga/Running-Shoes">Shoes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/fitness-running-and-yoga">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/sport-and-outdoors/Golf">Golf</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Golf/Golf-Accessories">Golf Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Golf/Golf-Clothing-Shoes-and-Accessories">Golf Clothing, Shoes &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Golf/Golf-Club-Components">Golf Club Components</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Golf/Golf-Clubs-and-Equipment">Golf Clubs &amp; Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Golf/Golf-Tech">Golf Tech</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Golf/Golf-Training-Aids">Golf Training Aids</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Golf">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/sport-and-outdoors/Hunting">Hunting</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Hunting/Blinds-and-Treestands">Blinds &amp; Treestands</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Hunting/Bowhunting">Bowhunting</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Hunting/Hunting-Clothing-Shoes-and-Accessories">Clothing, Shoes &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Hunting/Decoys">Decoys</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Hunting/Game-and-Trail-Cameras">Game &amp; Trail Cameras</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Hunting/Game-Calls">Game Calls</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Hunting">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/sport-and-outdoors/Indoor-Games">Indoor Games</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Indoor-Games/Air-Hockey">Air Hockey</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Indoor-Games/Billiards">Billiards</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Indoor-Games/Darts">Darts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Indoor-Games/Foosball">Foosball</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Indoor-Games/Indoor-Roller-Skating">Indoor Roller Skating</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Indoor-Games/Shuffleboard">Shuffleboard</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Indoor-Games">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/sport-and-outdoors/Outdoor-Sports">Outdoor Sports</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Outdoor-Sports/Air-Guns-and-Slingshots">Air Guns &amp; Slingshots</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Outdoor-Sports/Airsoft">Airsoft</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Outdoor-Sports/Archery">Archery</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Outdoor-Sports/Backyard-Games">Backyard Games</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Outdoor-Sports/Camping-and-Hiking">Camping &amp; Hiking</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Outdoor-Sports/Climbing-and-Caving">Climbing &amp; Caving</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Outdoor-Sports">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/sport-and-outdoors/Team-Sports">Team Sports</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Team-Sports/Baseball-and-Softball">Baseball &amp; Softball</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Team-Sports/Basketball">Basketball</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Team-Sports/Bowling">Bowling</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Team-Sports/Cheerleading">Cheerleading</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Team-Sports/Coach-and-Referee-Equipment">Coach &amp; Referee Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Team-Sports/Cricket">Cricket</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Team-Sports">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/sport-and-outdoors/tennis-and-racquet-sports">Tennis &amp; Racquet Sports</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/tennis-and-racquet-sports/Badminton">Badminton</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/tennis-and-racquet-sports/Tennis-Clothing-Shoes-and-Accessories">Clothing, Shoes &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/tennis-and-racquet-sports/Racquetball">Racquetball</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/tennis-and-racquet-sports/Squash">Squash</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/tennis-and-racquet-sports/Tennis">Tennis</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/tennis-and-racquet-sports">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/sport-and-outdoors/Water-Sports">Water Sports</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Water-Sports/Fins-Footwear-and-Gloves">Fins, Footwear &amp; Gloves</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Water-Sports/Kayaking-Canoeing-and-Rafting">Kayaking, Canoeing &amp; Rafting</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Water-Sports/Kitesurfing">Kitesurfing</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Water-Sports/Scuba-and-Snorkeling">Scuba &amp; Snorkeling</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Water-Sports/Stand-Up-Paddleboarding">Stand Up Paddleboarding</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Water-Sports/Surfing">Surfing</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/sport-and-outdoors/Water-Sports">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                            </ul>

                                    
                                    </li>

                                    
                                    

                                    
                                <li class="dropdown_list ">
                                                                    <div class="img">
                                        <img src="//localhost/oracle_old/assets/images/categories/1634365482toys.png" alt="">
                                    </div>
                                    <div class="link-area">
                                        <span><a href="//localhost/oracle_old/products/subcategories/toys-and-games">Toys &amp; Games</a></span>
                                                                                <a href="javascript:;">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                                                            </div>

                                                                    
                                                                        <ul class="categories_mega_menu row">
                                        <div class="backmenu">
                                        Back
                                        </div>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/action-figures-and-statues">Action Figures &amp; Statues</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/action-figures-and-statues/Toys-Accessories">Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/action-figures-and-statues/Bendables">Bendables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/action-figures-and-statues/Bobbleheads">Bobbleheads</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/action-figures-and-statues/Buildings-and-Scenery">Buildings &amp; Scenery</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/action-figures-and-statues/Dinosaurs-and-Prehistoric-Creatures">Dinosaurs &amp; Prehistoric Creatures</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/action-figures-and-statues/Playsets">Playsets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/action-figures-and-statues">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/baby-and-toddler-toys">Baby &amp; Toddler Toys</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/baby-and-toddler-toys/Activity-Centers-Kindly">Activity Centers Kindly</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/baby-and-toddler-toys/Activity-Centres">Activity Centres</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/baby-and-toddler-toys/Baby-Toys">Baby Toys</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/baby-and-toddler-toys/Bath-Toys">Bath Toys</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/baby-and-toddler-toys/Early-Development-and-Activity-Toys">Early Development &amp; Activity Toys</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/baby-and-toddler-toys/Hobbyhorses">Hobbyhorses</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/baby-and-toddler-toys">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Bikes-Trikes-and-Ride-Ons">Bikes, Trikes &amp; Ride-Ons</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Bikes-Trikes-and-Ride-Ons/Balance-Bikes">Balance Bikes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Bikes-Trikes-and-Ride-Ons/Electrical-Vehicles">Electrical Vehicles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Bikes-Trikes-and-Ride-Ons/Go-Carts">Go-Carts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Bikes-Trikes-and-Ride-Ons/Kids-Bikes-and-Accessories">Kids' Bikes &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Bikes-Trikes-and-Ride-Ons/Pedal-Cars">Pedal Cars</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Bikes-Trikes-and-Ride-Ons/Pull-Along-Wagons">Pull-Along Wagons</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Bikes-Trikes-and-Ride-Ons">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Building-and-Construction-Toys">Building &amp; Construction Toys</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Building-and-Construction-Toys/Figures">Figures</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Building-and-Construction-Toys/Gear-Sets">Gear Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Building-and-Construction-Toys/Magnetic-Building">Magnetic Building</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Building-and-Construction-Toys/Stacking-Blocks">Stacking Blocks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Building-and-Construction-Toys">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/building-toys">Building Toys</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/building-toys/Building-Sets">Building Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/building-toys">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Collectible-Trading-Cards-and-Accessories">Collectible Trading Cards &amp; Accessories</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Collectible-Trading-Cards-and-Accessories/Trading-Cards">Trading Cards</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Collectible-Trading-Cards-and-Accessories">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Cosmetics-and-Jewellery">Cosmetics &amp; Jewellery</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Cosmetics-and-Jewellery/Bracelets">Bracelets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Cosmetics-and-Jewellery/Earrings">Earrings</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Cosmetics-and-Jewellery/Hair-Decoration">Hair Decoration</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Cosmetics-and-Jewellery/Makeup">Makeup</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Cosmetics-and-Jewellery/Makeup-and-Hair-Dressing-Heads">Makeup &amp; Hair Dressing Heads</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Cosmetics-and-Jewellery/Makeup-Bags-and-Cases">Makeup Bags &amp; Cases</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Cosmetics-and-Jewellery">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Die-Cast-and-Toy-Vehicles">Die-Cast &amp; Toy Vehicles</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Die-Cast-and-Toy-Vehicles/Aircraft">Aircraft</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Die-Cast-and-Toy-Vehicles/Friction-Vehicles">Friction Vehicles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Die-Cast-and-Toy-Vehicles/Slot-Cars-Race-Tracks-and-Accessories">Slot Cars, Race Tracks &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Die-Cast-and-Toy-Vehicles/Toy-Vehicle-Playsets">Toy Vehicle Playsets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Die-Cast-and-Toy-Vehicles/Toy-Vehicles-and-Accessories">Toy Vehicles &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Die-Cast-and-Toy-Vehicles/Trains-and-Railroad-Sets">Trains &amp; Railroad Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Die-Cast-and-Toy-Vehicles">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/dolls-and-accessories">Dolls &amp; Accessories</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/dolls-and-accessories/Boas">Boas</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/dolls-and-accessories/Doll-Accessories">Doll Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/dolls-and-accessories/Dollhouse-Accessories">Dollhouse Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/dolls-and-accessories/Dollhouses">Dollhouses</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/dolls-and-accessories/Dolls">Dolls</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/dolls-and-accessories/Furniture">Furniture</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/dolls-and-accessories">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/dress-up-and-pretend-play">Dress Up &amp; Pretend Play</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/dress-up-and-pretend-play/accessories">Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/dress-up-and-pretend-play/Capes-and-Wings">Capes &amp; Wings</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/dress-up-and-pretend-play/Costume-Kits">Costume Kits</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/dress-up-and-pretend-play/Costumes">Costumes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/dress-up-and-pretend-play/Face-Paints">Face Paints</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/dress-up-and-pretend-play/Footwear">Footwear</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/dress-up-and-pretend-play">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Dressing-Up-and-Costumes">Dressing Up &amp; Costumes</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Dressing-Up-and-Costumes/Masks">Masks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Dressing-Up-and-Costumes/Stockings-Tights-and-Socks">Stockings, Tights &amp; Socks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Dressing-Up-and-Costumes/Toy-Weapons">Toy Weapons</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Dressing-Up-and-Costumes/Wands">Wands</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Dressing-Up-and-Costumes/Wigs-and-Hairpieces">Wigs &amp; Hairpieces</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Dressing-Up-and-Costumes">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Electronic-Toys">Electronic Toys</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Electronic-Toys/Alarm-Clocks">Alarm Clocks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Electronic-Toys/Dance-Mats">Dance Mats</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Electronic-Toys/Toys-Digital-Cameras">Digital Cameras</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Electronic-Toys/Electronic-Pets">Electronic Pets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Electronic-Toys/Handheld-Games">Handheld Games</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Electronic-Toys/Karaoke-Machines">Karaoke Machines</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Electronic-Toys">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/games">Games</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/games/Backgammon">Backgammon</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/games/Bingo">Bingo</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/games/Board-Games">Board Games</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/games/Card-Games">Card Games</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/games/Checkers">Checkers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/games/Chess">Chess</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/games">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Learning-and-Education">Learning &amp; Education</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Learning-and-Education/Detective">Detective</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Learning-and-Education/Electronics">Electronics</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Learning-and-Education/Flash-Cards">Flash Cards</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Learning-and-Education/Habitats">Habitats</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Learning-and-Education/Outdoor-Exploration-Toys">Outdoor Exploration Toys</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Learning-and-Education/Reading-and-Writing">Reading &amp; Writing</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Learning-and-Education">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Model-Building-Kits">Model Building Kits</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Model-Building-Kits/Model-Accessories">Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Model-Building-Kits/Model-Aircraft">Aircraft</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Model-Building-Kits/Boats-and-Watercraft">Boats &amp; Watercraft</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Model-Building-Kits/Buildings">Buildings</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Model-Building-Kits/Cars-and-Vehicles">Cars &amp; Vehicles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Model-Building-Kits/Model-Figures">Figures</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Model-Building-Kits">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Model-Trains-and-Railway-Sets">Model Trains &amp; Railway Sets</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Model-Trains-and-Railway-Sets/Building">Building</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Model-Trains-and-Railway-Sets/Model-Trains-Figures">Figures</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Model-Trains-and-Railway-Sets/Landscaping">Landscaping</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Model-Trains-and-Railway-Sets/Lighting-and-Signal-Engineering">Lighting &amp; Signal Engineering</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Model-Trains-and-Railway-Sets/Locomotives">Locomotives</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Model-Trains-and-Railway-Sets/Replacement-Parts">Replacement Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Model-Trains-and-Railway-Sets">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Musical-Toy-Instruments">Musical Toy Instruments</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Musical-Toy-Instruments/Musical-Accessories">Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Musical-Toy-Instruments/Drums-and-Percussion">Drums &amp; Percussion</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Musical-Toy-Instruments/Guitars-and-Strings">Guitars &amp; Strings</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Musical-Toy-Instruments/Pianos-and-Keyboards">Pianos &amp; Keyboards</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Musical-Toy-Instruments/Wind-and-Brass">Wind &amp; Brass</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Musical-Toy-Instruments">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Novelty-and-Gag-Toys">Novelty &amp; Gag Toys</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Novelty-and-Gag-Toys/Badges">Badges</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Novelty-and-Gag-Toys/Gag-Toys-and-Practical-Jokes">Gag Toys &amp; Practical Jokes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Novelty-and-Gag-Toys/Kaleidoscopes">Kaleidoscopes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Novelty-and-Gag-Toys/Key-Rings">Key Rings</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Novelty-and-Gag-Toys/Magic-Kits-and-Accessories">Magic Kits &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Novelty-and-Gag-Toys/Magnets-and-Magnetic-Toys">Magnets &amp; Magnetic Toys</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Novelty-and-Gag-Toys">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Party-Supplies">Party Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Party-Supplies/Decorations">Decorations</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Party-Supplies/Invitations">Invitations</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Party-Supplies/Noisemakers">Noisemakers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Party-Supplies/Party-Favours">Party Favours</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Party-Supplies/Party-Games">Party Games</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Party-Supplies/Party-Hats-Masks-and-Accessories">Party Hats, Masks &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Party-Supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Pretend-Play">Pretend Play</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Pretend-Play/Doctor-Play-Sets">Doctor Play Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Pretend-Play/Household-Toys">Household Toys</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Pretend-Play/Paper-and-Magnetic-Dolls">Paper &amp; Magnetic Dolls</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Pretend-Play/Play-Tools">Play Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Pretend-Play/Pretend-Play-Purses">Pretend Play Purses</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Pretend-Play/Shops-and-Accessories">Shops &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Pretend-Play">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Puppets-and-Puppet-Theatres">Puppets &amp; Puppet Theatres</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Puppets-and-Puppet-Theatres/Puppets-Accessories">Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Puppets-and-Puppet-Theatres/Finger-Puppets">Finger Puppets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Puppets-and-Puppet-Theatres/Hand-Puppets">Hand Puppets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Puppets-and-Puppet-Theatres/Marionettes">Marionettes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Puppets-and-Puppet-Theatres/Plush-Puppets">Plush Puppets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Puppets-and-Puppet-Theatres/Puppet-Theatres">Puppet Theatres</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Puppets-and-Puppet-Theatres">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Puzzles">Puzzles</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Puzzles/3-D-Puzzles">3-D Puzzles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Puzzles/Floor-Puzzles">Floor Puzzles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Puzzles/Framed-Puzzles">Framed Puzzles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Puzzles/Jigsaw-Puzzles">Jigsaw Puzzles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Puzzles/Pegged-Puzzles">Pegged Puzzles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Puzzles/Puzzle-Accessories">Puzzle Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Puzzles">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Radio-and-Remote-Control">Radio &amp; Remote Control</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Radio-and-Remote-Control/Airplanes">Airplanes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Radio-and-Remote-Control/Boats">Boats</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Radio-and-Remote-Control/Drones">Drones</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Radio-and-Remote-Control/Helicopters">Helicopters</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Radio-and-Remote-Control/Military-Vehicles">Military Vehicles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Radio-and-Remote-Control/Motor-Vehicles">Motor Vehicles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Radio-and-Remote-Control">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/School-Supplies">School Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/School-Supplies/Book-Covers">Book Covers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/School-Supplies/Colouring-Pens-and-Markers">Colouring Pens &amp; Markers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/School-Supplies/Diaries-and-Poetry-Albums">Diaries &amp; Poetry Albums</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/School-Supplies/Exercise-Books">Exercise Books</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/School-Supplies/School-Globes">Globes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/School-Supplies/Letter-Sets">Letter Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/School-Supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Soft-Toys">Soft Toys</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Soft-Toys/Plush-Pillows">Plush Pillows</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Soft-Toys/Soft-Plush-Puppets">Plush Puppets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Soft-Toys/Plush-Toy-and-Blanket-Sets">Plush Toy &amp; Blanket Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Soft-Toys/Stuffed-Animal-Clothing-and-Accessories">Stuffed Animal Clothing &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Soft-Toys/Stuffed-Animals">Stuffed Animals</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Soft-Toys">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/toys-and-games/Sport-and-Outdoor">Sport &amp; Outdoor</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Sport-and-Outdoor/Balance-Boards">Balance Boards</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Sport-and-Outdoor/Ball-Pits-and-Accessories">Ball Pits &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Sport-and-Outdoor/Beanbags-and-Foot-Bags">Beanbags &amp; Foot Bags</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Sport-and-Outdoor/Blasters-and-Toy-Guns">Blasters &amp; Toy Guns</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Sport-and-Outdoor/Bubbles">Bubbles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Sport-and-Outdoor/Calisthenics-and-Ability">Calisthenics &amp; Ability</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/toys-and-games/Sport-and-Outdoor">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                            </ul>

                                    
                                    </li>

                                    
                                    

                                    
                                <li class="dropdown_list ">
                                                                    <div class="img">
                                        <img src="//localhost/oracle_old/assets/images/categories/1568708648motor.car.png" alt="">
                                    </div>
                                    <div class="link-area">
                                        <span><a href="//localhost/oracle_old/products/subcategories/automotive">Automotive</a></span>
                                                                                <a href="javascript:;">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                                                            </div>

                                                                    
                                                                        <ul class="categories_mega_menu row">
                                        <div class="backmenu">
                                        Back
                                        </div>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/automotive/automotive-enthusiast-merchandise">Automotive Enthusiast Merchandise</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/automotive-enthusiast-merchandise/Apparel">Apparel</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/automotive-enthusiast-merchandise">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/automotive/car-care">Car Care</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/car-care/Cleaning-Kits">Cleaning Kits</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/car-care/Exterior-Care">Exterior Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/car-care/Fillers-Adhesives-and-Sealants">Fillers, Adhesives &amp; Sealants</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/car-care/Finishing">Finishing</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/car-care/Glass-Care">Glass Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/car-care/Interior-Care">Interior Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/car-care">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/automotive/exterior-accessories">Exterior Accessories</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/exterior-accessories/Antenna-Toppers">Antenna Toppers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/exterior-accessories/Body-Armor">Body Armor</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/exterior-accessories/Bumper-Stickers-Decals-and-Magnets">Bumper Stickers, Decals &amp; Magnets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/exterior-accessories/Bumpers-and-Bumper-Accessories">Bumpers &amp; Bumper Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/exterior-accessories/Cargo-Management">Cargo Management</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/exterior-accessories/Covers">Covers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/exterior-accessories">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/automotive/heavy-duty-and-commercial-vehicle-equipment">Heavy Duty &amp; Commercial Vehicle Equipment</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/heavy-duty-and-commercial-vehicle-equipment/Heavy-Duty-and-Commercial-Vehicle-Accessories">Heavy Duty &amp; Commercial Vehicle Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/heavy-duty-and-commercial-vehicle-equipment/Heavy-Duty-and-Commercial-Vehicles-Parts">Heavy Duty &amp; Commercial Vehicles Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/heavy-duty-and-commercial-vehicle-equipment/Heavy-Duty-Fleet-Navigation-and-Communication-Supplies">Heavy Duty Fleet Navigation &amp; Communication Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/heavy-duty-and-commercial-vehicle-equipment/Heavy-Duty-Oils-and-Fluids">Heavy Duty Oils &amp; Fluids</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/heavy-duty-and-commercial-vehicle-equipment">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/automotive/interior-accessories">Interior Accessories</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/interior-accessories/Air-Fresheners">Air Fresheners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/interior-accessories/Anti-Theft">Anti-Theft</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/interior-accessories/Compasses">Compasses</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/interior-accessories/Consoles-and-Organizers">Consoles &amp; Organizers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/interior-accessories/Cup-Holders">Cup Holders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/interior-accessories/Door-Entry-Guard">Door Entry Guard</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/interior-accessories">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/automotive/lights-and-lighting-accessories">Lights &amp; Lighting Accessories</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/lights-and-lighting-accessories/Accent-and-Off-Road-Lighting">Accent &amp; Off Road Lighting</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/lights-and-lighting-accessories/Light-Covers">Light Covers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/lights-and-lighting-accessories/Lighting-Assemblies-and-Accessories-Bulbs">Lighting Assemblies &amp; Accessories Bulbs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/lights-and-lighting-accessories/Lighting-Conversion-Kits">Lighting Conversion Kits</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/lights-and-lighting-accessories/Towing-and-Trailer-Lighting">Towing &amp; Trailer Lighting</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/lights-and-lighting-accessories/Warning-and-Emergency-Lights">Warning &amp; Emergency Lights</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/lights-and-lighting-accessories">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/automotive/motorcycle-and-powersports">Motorcycle &amp; Powersports</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/motorcycle-and-powersports/Fluids-and-Maintenance">Fluids &amp; Maintenance</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/motorcycle-and-powersports/Parts">Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/motorcycle-and-powersports">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/automotive/oils-and-fluids">Oils &amp; Fluids</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/oils-and-fluids/Additives">Additives</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/oils-and-fluids/Antifreezes-and-Coolants">Antifreezes &amp; Coolants</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/oils-and-fluids/Brake-Fluids">Brake Fluids</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/oils-and-fluids/Cleaners">Cleaners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/oils-and-fluids/Flushes">Flushes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/oils-and-fluids/Greases-and-Lubricants">Greases &amp; Lubricants</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/oils-and-fluids">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/automotive/paint-and-paint-supplies">Paint &amp; Paint Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/paint-and-paint-supplies/Paint-Guns-and-Accessories">Paint Guns &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/paint-and-paint-supplies/Paints-and-Primers">Paints &amp; Primers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/paint-and-paint-supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/automotive/performance-parts-and-accessories">Performance Parts &amp; Accessories</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/performance-parts-and-accessories/Batteries-and-Accessories">Batteries &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/performance-parts-and-accessories/Bearings-and-Seals">Bearings &amp; Seals</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/performance-parts-and-accessories/Belts-Hoses-and-Pulleys">Belts, Hoses &amp; Pulleys</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/performance-parts-and-accessories/Brake-System">Brake System</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/performance-parts-and-accessories/Drive-Train">Drive Train</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/performance-parts-and-accessories/Emission-System">Emission System</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/performance-parts-and-accessories">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/automotive/replacement-parts">Replacement Parts</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/replacement-parts/Belts-Hoses-andPulleys">Belts, Hoses &amp; Pulleys</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/replacement-parts/Body-and-Trim">Body &amp; Trim</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/replacement-parts/Caps">Caps</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/replacement-parts/Engine-Cooling-and-Climate-Control">Engine Cooling &amp; Climate Control</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/replacement-parts/Exhaust-and-Emissions">Exhaust &amp; Emissions</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/replacement-parts/Ignition-Parts">Ignition Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/replacement-parts">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/automotive/rv-parts-and-accessories">RV Parts &amp; Accessories</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/rv-parts-and-accessories/Cleaning-and-Maintenance">Cleaning &amp; Maintenance</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/rv-parts-and-accessories/Exterior">Exterior</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/rv-parts-and-accessories/Gas-Supply">Gas Supply</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/rv-parts-and-accessories/Heating-Ventilation-and-Air-Conditioning">Heating, Ventilation &amp; Air Conditioning</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/rv-parts-and-accessories/Interior">Interior</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/rv-parts-and-accessories/Plumbing">Plumbing</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/rv-parts-and-accessories">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/automotive/tires-and-wheels">Tires &amp; Wheels</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/tires-and-wheels/Accessories-and-Parts">Accessories &amp; Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/tires-and-wheels/Tire-and-Wheel-Assemblies">Tire &amp; Wheel Assemblies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/tires-and-wheels/Tires">Tires</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/tires-and-wheels/Wheels">Wheels</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/tires-and-wheels">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/automotive/tools-and-equipment">Tools &amp; Equipment</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/tools-and-equipment/Air-Conditioning-Tools-and-Equipment">Air Conditioning Tools &amp; Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/tools-and-equipment/Applicators">Applicators</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/tools-and-equipment/Bags-and-Accessories">Bags &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/tools-and-equipment/Body-Repair-Tools">Body Repair Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/tools-and-equipment/Brake-Tools">Brake Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/tools-and-equipment/Bushing-Tools">Bushing Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/automotive/tools-and-equipment">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                            </ul>

                                    
                                    </li>

                                    
                                    

                                    
                                <li class="dropdown_list ">
                                                                    <div class="img">
                                        <img src="//localhost/oracle_old/assets/images/categories/1568708757home.png" alt="">
                                    </div>
                                    <div class="link-area">
                                        <span><a href="//localhost/oracle_old/products/subcategories/home-and-garden">Home &amp; Garden</a></span>
                                                                                <a href="javascript:;">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                                                            </div>

                                                                    
                                                                        <ul class="categories_mega_menu row">
                                        <div class="backmenu">
                                        Back
                                        </div>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/bath">Bath</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/bath/Bath-Linen-Sets">Bath Linen Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/bath/Bath-Rugs">Bath Rugs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/bath/Bathroom-Accessories">Bathroom Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/bath/Bathroom-Accessory-Mixed-Lots">Bathroom Accessory Mixed Lots</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/bath/Bathroom-Accessory-Sets">Bathroom Accessory Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/bath/Bathroom-Cabinets">Bathroom Cabinets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/bath">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/bedding">Bedding</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/bedding/Air-Mattresses-and-Accessories">Air Mattresses &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/bedding/Bed-In-a-Bag">Bed - In - a - Bag</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/bedding/Bed-Canopies-and-Drapes">Bed Canopies &amp; Drapes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/bedding/Bed-Pillows">Bed Pillows</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/bedding/Bed-Pillows-and-Positioners">Bed Pillows &amp; Positioners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/bedding/Bed-Runners-and-Scarves">Bed Runners &amp; Scarves</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/bedding">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/cleaning-supplies">Cleaning Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/cleaning-supplies/Air-Fresheners">Air Fresheners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/cleaning-supplies/Brushes">Brushes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/cleaning-supplies/Dusting">Dusting</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/cleaning-supplies/Gloves">Gloves</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/cleaning-supplies/Household-Cleaners">Household Cleaners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/cleaning-supplies/Mopping">Mopping</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/cleaning-supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/event-and-party-supplies">Event &amp; Party Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/event-and-party-supplies/Adult-Novelty">Adult Novelty</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/event-and-party-supplies/Cake-Decorating-Supplies">Cake Decorating Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/event-and-party-supplies/Ceremony-Supplies">Ceremony Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/event-and-party-supplies/Childrens-Party-Supplies">Children's Party Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/event-and-party-supplies/Event-Decorations">Decorations</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/event-and-party-supplies/Favors">Favors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/event-and-party-supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/food-and-beverages">Food &amp; Beverages</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/food-and-beverages/Alcohol-and-Alcohol-Mixers">Alcohol &amp; Alcohol Mixers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/food-and-beverages/Cheese">Cheese</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/food-and-beverages/Hampers-and-Gift-Assortments">Hampers &amp; Gift Assortments</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/food-and-beverages/Ice-Cream">Ice Cream</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/food-and-beverages/Non-Alcoholic-Drinks">Non-Alcoholic Drinks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/food-and-beverages/Other-Food-and-Beverages">Other Food &amp; Beverages</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/food-and-beverages">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/fresh-cut-flowers">Fresh Cut Flowers</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/fresh-cut-flowers/Bulk-Fresh-Flowers">Bulk Fresh Flowers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/fresh-cut-flowers/Fresh-Cut-Flower-Bouquets">Fresh Cut Flower Bouquets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/fresh-cut-flowers">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/Greeting-Cards-Party-Supply">Greeting Cards &amp; Party Supply</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Greeting-Cards-Party-Supply/Gift-and-Party-Supplies">Gift &amp; Party Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Greeting-Cards-Party-Supply/Gift-Baskets">Gift Baskets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Greeting-Cards-Party-Supply/Gift-Wrapping-Supplies">Gift Wrapping Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Greeting-Cards-Party-Supply/Greeting-Cards-and-Invitation">Greeting Cards &amp; Invitation</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Greeting-Cards-Party-Supply/Stationery-and-Note-Pads">Stationery &amp; Note Pads</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Greeting-Cards-Party-Supply">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/heating-cooling-and-air-quality">Heating, Cooling &amp; Air Quality</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/heating-cooling-and-air-quality/Air-Conditioners">Air Conditioners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/heating-cooling-and-air-quality/Air-Purifiers">Air Purifiers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/heating-cooling-and-air-quality/Heating-Dehumidifiers">Dehumidifiers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/heating-cooling-and-air-quality/Household-Fans">Household Fans</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/heating-cooling-and-air-quality/Heating-Humidifiers">Humidifiers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/heating-cooling-and-air-quality/Indoor-Thermometers">Indoor Thermometers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/heating-cooling-and-air-quality">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/Holiday-Seasonal-Decor">Holiday &amp; Seasonal Decor</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Holiday-Seasonal-Decor/Advent-Calendar">Advent Calendar</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Holiday-Seasonal-Decor/Candle-Holders">Candle Holders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Holiday-Seasonal-Decor/Candles">Candles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Holiday-Seasonal-Decor/Christmas-Crackers">Christmas Crackers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Holiday-Seasonal-Decor/Christmas-Trees">Christmas Trees</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Holiday-Seasonal-Decor/Figurines">Figurines</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Holiday-Seasonal-Decor">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/home-decor">Home Decor</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/home-decor/Afghans-and-Throw-Blankets">Afghans &amp; Throw Blankets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/home-decor/Artificial-Plants-and-Flowers">Artificial Plants &amp; Flowers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/home-decor/Ashtrays">Ashtrays</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/home-decor/Baskets">Baskets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/home-decor/Bookends">Bookends</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/home-decor/Bottles">Bottles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/home-decor">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/Home-Improvement">Home Improvement</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Home-Improvement/Building-and-Hardware">Building &amp; Hardware</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Home-Improvement/Electrical-Supplies">Electrical Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Home-Improvement/Heating-Cooling-and-Air">Heating, Cooling &amp; Air</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Home-Improvement/Home-Security">Home Security</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Home-Improvement/Plumbing-and-Fixtures">Plumbing &amp; Fixtures</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Home-Improvement">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/Household-Supplies-Cleaning">Household Supplies &amp; Cleaning</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Household-Supplies-Cleaning/Carpet-Cleaners">Carpet Cleaners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Household-Supplies-Cleaning/Cleaning-Products">Cleaning Products</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Household-Supplies-Cleaning/General-Household-Supplies">General Household Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Household-Supplies-Cleaning/Home-cleaning-Supplies">Home cleaning Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Household-Supplies-Cleaning/Home-Organization">Home Organization</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Household-Supplies-Cleaning/Laundry-Supplies">Laundry Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Household-Supplies-Cleaning">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/irons-and-steamers">Irons &amp; Steamers</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/irons-and-steamers/Carpet-and-Upholstery-Cleaners-and-Accessories">Carpet &amp; Upholstery Cleaners &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/irons-and-steamers/Garment-Steamer-Accessories">Garment Steamer Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/irons-and-steamers/Garment-Steamers">Garment Steamers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/irons-and-steamers/Ironing-Accessories">Ironing Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/irons-and-steamers/Ironing-Board-Covers">Ironing Board Covers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/irons-and-steamers/Ironing-Boards">Ironing Boards</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/irons-and-steamers">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/Kids-Teens-at-Home">Kids &amp; Teens at Home</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kids-Teens-at-Home/Bedding">Bedding</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kids-Teens-at-Home/Kids-Bedding">Kids' Bedding</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kids-Teens-at-Home/Kids-Furniture">Kids' Furniture</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kids-Teens-at-Home/Kitchen-and-Dining">Kitchen &amp; Dining</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kids-Teens-at-Home/Kitchen-Cabinets">Kitchen Cabinets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kids-Teens-at-Home/Lighting">Lighting</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kids-Teens-at-Home">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/kitchen-and-dining">Kitchen &amp; Dining</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/kitchen-and-dining/Bakeware">Bakeware</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/kitchen-and-dining/Coffee-Tea-and-Espresso">Coffee, Tea &amp; Espresso</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/kitchen-and-dining/Cookware">Cookware</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/kitchen-and-dining/Cutlery-and-Knife-Accessories">Cutlery &amp; Knife Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/kitchen-and-dining/Dining-and-Entertaining">Dining &amp; Entertaining</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/kitchen-and-dining/Food-Service-Equipment-and-Supplies">Food Service Equipment &amp; Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/kitchen-and-dining">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Fixtures">Kitchen Fixtures</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Fixtures/Kitchen-Cabinets-Drawer-Boxes">Kitchen Cabinets Drawer Boxes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Fixtures/Kitchen-Countertops">Kitchen Countertops</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Fixtures/Kitchen-Faucets">Kitchen Faucets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Fixtures/Kitchen-Sinks-Parts">Kitchen Sinks Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Fixtures/Kitchen-Units-and-Sets">Kitchen Units &amp; Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Fixtures">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Storage-and-Containers">Kitchen Storage &amp; Containers</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Storage-and-Containers/Bread-Bins">Bread Bins</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Storage-and-Containers/Cake-Boxes">Cake Boxes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Storage-and-Containers/Cookie-Jars">Cookie Jars</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Storage-and-Containers/Drizzlers-and-Dressing-Shakers">Drizzlers &amp; Dressing Shakers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Storage-and-Containers/Garbage-Bins">Garbage Bins</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Storage-and-Containers/Jars-and-Containers">Jars &amp; Containers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Storage-and-Containers">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Dining-Bar">Kitchen, Dining &amp; Bar</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Dining-Bar/Baking-Accessories-and-Cake-Decorating">Baking Accessories &amp; Cake Decorating</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Dining-Bar/Bar-Tools-and-Accessories">Bar Tools &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Dining-Bar/Brewing-Distilling-and-Wine-Making">Brewing, Distilling &amp; Wine Making</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Dining-Bar/Dinnerware-and-Serveware">Dinnerware &amp; Serveware</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Dining-Bar/Flatware-knives-and-Cutlery">Flatware, knives &amp; Cutlery</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Dining-Bar/Glassware-and-Drinkware">Glassware &amp; Drinkware</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Kitchen-Dining-Bar">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/Lamps-Lighting-Ceiling-Fans">Lamps, Lighting &amp; Ceiling Fans</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Lamps-Lighting-Ceiling-Fans/Chandeliers-and-Ceiling-Fixtures">Chandeliers &amp; Ceiling Fixtures</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Lamps-Lighting-Ceiling-Fans/Lamp-Shades">Lamp Shades</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Lamps-Lighting-Ceiling-Fans/Lamps">Lamps</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Lamps-Lighting-Ceiling-Fans/Light-Bulbs">Light Bulbs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Lamps-Lighting-Ceiling-Fans/Lighting-Accessories">Lighting Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Lamps-Lighting-Ceiling-Fans/Lighting-Parts">Lighting Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Lamps-Lighting-Ceiling-Fans">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/lighting-and-ceiling-fans">Lighting &amp; Ceiling Fans</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/lighting-and-ceiling-fans/Ceiling-Fans-and-Accessories">Ceiling Fans &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/lighting-and-ceiling-fans/Ceiling-Lights">Ceiling Lights</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/lighting-and-ceiling-fans/Lamps-and-Shades">Lamps &amp; Shades</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/lighting-and-ceiling-fans/Lighting-Accessories">Lighting Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/lighting-and-ceiling-fans/Novelty-Lighting">Novelty Lighting</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/lighting-and-ceiling-fans/Wall-Lights">Wall Lights</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/lighting-and-ceiling-fans">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/Major-Appliances">Major Appliances</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Major-Appliances/Dishwashers">Dishwashers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Major-Appliances/Major-Appliances-Parts-and-Accessories">Major Appliances Parts &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Major-Appliances/Ranges-and-Cooking-Appliances">Ranges &amp; Cooking Appliances</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Major-Appliances/Refrigerators-and-Freezers">Refrigerators &amp; Freezers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Major-Appliances/Washers-and-Dryers">Washers &amp; Dryers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Major-Appliances">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/pet-supplies">Pet supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/pet-supplies/Birds">Birds</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/pet-supplies/Cats">Cats</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/pet-supplies/Dogs">Dogs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/pet-supplies/Fish-and-Aquatic-Pets">Fish &amp; Aquatic Pets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/pet-supplies/Horses">Horses</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/pet-supplies/Reptiles-and-Amphibians">Reptiles &amp; Amphibians</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/pet-supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/Rugs-and-Carpets">Rugs &amp; Carpets</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Rugs-and-Carpets/Area-Rugs">Area Rugs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Rugs-and-Carpets/Carpet-Tiles">Carpet Tiles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Rugs-and-Carpets/Door-Mats-and-Floor-Mats">Door Mats &amp; Floor Mats</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Rugs-and-Carpets/Leather-Fur-and-Sheepskin-Rugs">Leather, Fur &amp; Sheepskin Rugs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Rugs-and-Carpets/Rugs-and-Carpet-Accessories">Rugs &amp; Carpet Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Rugs-and-Carpets/Rugs-and-Carpet-Tools">Rugs &amp; Carpet Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Rugs-and-Carpets">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/seasonal-decor">Seasonal Decor</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/seasonal-decor/Advent-Calendars">Advent Calendars</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/seasonal-decor/Artificial-Snow">Artificial Snow</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/seasonal-decor/Bows-and-Ribbons">Bows &amp; Ribbons</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/seasonal-decor/Candleholders">Candleholders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/seasonal-decor/Seasonal-Candles">Candles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/seasonal-decor/Collectible-Buildings-and-Accessories">Collectible Buildings &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/seasonal-decor">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/storage-and-organization">Storage &amp; Organization</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/storage-and-organization/Baskets-Bins-and-Containers">Baskets, Bins &amp; Containers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/storage-and-organization/Bathroom-Storage-and-Organization">Bathroom Storage &amp; Organization</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/storage-and-organization/Clothing-and-Closet-Storage">Clothing &amp; Closet Storage</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/storage-and-organization/Decorative-Wreath-Storage">Decorative Wreath Storage</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/storage-and-organization/Garage-Storage-and-Organization">Garage Storage &amp; Organization</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/storage-and-organization/Gift-Wrap-Storage">Gift Wrap Storage</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/storage-and-organization">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/tools-and-home-improvement">Tools &amp; Home Improvement</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/tools-and-home-improvement/Building-Supplies">Building Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/tools-and-home-improvement/Electrical-Equipment">Electrical Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/tools-and-home-improvement/Hardware">Hardware</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/tools-and-home-improvement/Home-Appliances">Home Appliances</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/tools-and-home-improvement/Home-Storage-and-Organization">Home Storage &amp; Organization</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/tools-and-home-improvement/Kitchen-and-Bath-Fixtures">Kitchen &amp; Bath Fixtures</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/tools-and-home-improvement">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/Tools-Workshop-Equipment">Tools &amp; Workshop Equipment</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Tools-Workshop-Equipment/Air-Tools-and-Air-Compressors">Air Tools &amp; Air Compressors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Tools-Workshop-Equipment/Hand-Tool-Accessories">Hand Tool Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Tools-Workshop-Equipment/Manuals-and-Guides">Manuals &amp; Guides</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Tools-Workshop-Equipment/Measuring-and-Layout-Tools">Measuring &amp; Layout Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Tools-Workshop-Equipment/Power-Tool-and-Air-Tool-Accessories">Power Tool &amp; Air Tool Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Tools-Workshop-Equipment/Power-Tool-and-Air-Tool-Replacement-Parts">Power Tool &amp; Air Tool Replacement Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/Tools-Workshop-Equipment">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/vacuums-and-floor-care">Vacuums &amp; Floor Care</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/vacuums-and-floor-care/Floor-Buffers-and-Parts">Floor Buffers &amp; Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/vacuums-and-floor-care/Steam-Cleaners-Steam-Mops-and-Accessories">Steam Cleaners, Steam Mops &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/vacuums-and-floor-care/Sweepers-and-Accessories">Sweepers &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/vacuums-and-floor-care/Vacuum-Parts-and-Accessories">Vacuum Parts &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/vacuums-and-floor-care/Vacuums">Vacuums</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/vacuums-and-floor-care">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/home-and-garden/wall-art">Wall Art</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/wall-art/Wall-Art-Drawings">Drawings</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/wall-art/Mixed-Media">Mixed Media</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/wall-art/Paintings">Paintings</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/wall-art/Photographs">Photographs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/wall-art/Posters-and-Prints">Posters &amp; Prints</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/home-and-garden/wall-art">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                            </ul>

                                    
                                    </li>

                                    
                                    

                                    
                                <li class="dropdown_list ">
                                                                    <div class="img">
                                        <img src="//localhost/oracle_old/assets/images/categories/1634365577paint-board-and-brush.png" alt="">
                                    </div>
                                    <div class="link-area">
                                        <span><a href="//localhost/oracle_old/products/subcategories/arts-crafts-and-books">Arts, Crafts &amp; Books</a></span>
                                                                                <a href="javascript:;">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                                                            </div>

                                                                    
                                                                        <ul class="categories_mega_menu row">
                                        <div class="backmenu">
                                        Back
                                        </div>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/arts-crafts-and-books/beading-and-jewelry-making">Beading &amp; Jewelry Making</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/beading-and-jewelry-making/Beading-Supplies">Beading Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/beading-and-jewelry-making/Beads-and-Bead-Assortments">Beads &amp; Bead Assortments</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/beading-and-jewelry-making/Charms">Charms</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/beading-and-jewelry-making/Engraving-Machines-and-Tools">Engraving Machines &amp; Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/beading-and-jewelry-making/Fusible-Glass-Supplies">Fusible Glass Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/beading-and-jewelry-making/Jewelry-Casting-Supplies">Jewelry Casting Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/beading-and-jewelry-making">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/arts-crafts-and-books/books">Books</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/books/Software-Architecture">Software Architecture</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/books/Software-Books">Software Books</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/books/Software-Design-and-Engineering">Software Design &amp; Engineering</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/books">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/arts-crafts-and-books/Collectibles-and-Fine-Art">Collectibles &amp; Fine Art</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/Collectibles-and-Fine-Art/Entertainment-Collectibles">Entertainment Collectibles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/Collectibles-and-Fine-Art/Fine-Art">Fine Art</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/Collectibles-and-Fine-Art/Sports-Collectibles">Sports Collectibles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/Collectibles-and-Fine-Art">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/arts-crafts-and-books/crafting">Crafting</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/crafting/Basket-Making">Basket Making</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/crafting/Candle-Making">Candle Making</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/crafting/Ceramics-and-Pottery">Ceramics &amp; Pottery</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/crafting/Craft-Supplies">Craft Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/crafting/Doll-Making">Doll Making</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/crafting/Fabric-Ribbons">Fabric Ribbons</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/crafting">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/arts-crafts-and-books/fabric-decorating">Fabric Decorating</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/fabric-decorating/Application-Tools">Application Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/fabric-decorating/Craft-Fabric">Craft Fabric</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/fabric-decorating/Dyes">Dyes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/fabric-decorating/Fabric-and-Textile-Paints">Fabric &amp; Textile Paints</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/fabric-decorating/Fabric-Decorating-Kits">Fabric Decorating Kits</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/fabric-decorating/Fixatives">Fixatives</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/fabric-decorating">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/arts-crafts-and-books/gift-wrapping-supplies">Gift Wrapping Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/gift-wrapping-supplies/Enclosure-Cards">Enclosure Cards</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/gift-wrapping-supplies/Gift-Bags">Gift Bags</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/gift-wrapping-supplies/Gift-Boxes">Gift Boxes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/gift-wrapping-supplies/Gift-Wrap-Bows">Gift Wrap Bows</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/gift-wrapping-supplies/Gift-Wrap-Cellophane">Gift Wrap Cellophane</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/gift-wrapping-supplies/Gift-Wrap-Cellophane-Bags">Gift Wrap Cellophane Bags</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/gift-wrapping-supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/arts-crafts-and-books/knitting-and-crochet">Knitting &amp; Crochet</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/knitting-and-crochet/Ball-Winders">Ball Winders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/knitting-and-crochet/Crochet-Hooks">Crochet Hooks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/knitting-and-crochet/Crochet-Kits">Crochet Kits</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/knitting-and-crochet/Crochet-Patterns">Crochet Patterns</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/knitting-and-crochet/Crochet-Thread">Crochet Thread</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/knitting-and-crochet/Knitting-and-Crochet-Notions">Knitting &amp; Crochet Notions</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/knitting-and-crochet">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/arts-crafts-and-books/needlework">Needlework</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/needlework/Cross-Stitch">Cross-Stitch</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/needlework/Embroidery">Embroidery</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/needlework/Felt-Applique-Kits">Felt Applique Kits</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/needlework/Latch-Hook">Latch Hook</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/needlework/Needle-Felting-Supplies">Needle Felting Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/needlework/Needlepoint">Needlepoint</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/needlework">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/arts-crafts-and-books/organization-storage-and-transport">Organization, Storage &amp; Transport</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/organization-storage-and-transport/Art-and-Poster-Tubes">Art &amp; Poster Tubes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/organization-storage-and-transport/Art-Tool-and-Sketch-Boxes">Art Tool &amp; Sketch Boxes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/organization-storage-and-transport/Beading-Storage">Beading Storage</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/organization-storage-and-transport/Craft-and-Sewing-Supplies-Storage">Craft &amp; Sewing Supplies Storage</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/organization-storage-and-transport/Drying-and-Print-Racks">Drying &amp; Print Racks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/organization-storage-and-transport/Flat-and-Vertical-Files">Flat &amp; Vertical Files</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/organization-storage-and-transport">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/arts-crafts-and-books/painting-drawing-and-art-supplies">Painting, Drawing &amp; Art Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/painting-drawing-and-art-supplies/Art-Paper">Art Paper</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/painting-drawing-and-art-supplies/Boards-and-Canvas">Boards &amp; Canvas</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/painting-drawing-and-art-supplies/Brush-Pen-Cleaners">Brush &amp; Pen Cleaners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/painting-drawing-and-art-supplies/Drawings">Drawings</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/painting-drawing-and-art-supplies/Easels">Easels</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/painting-drawing-and-art-supplies/Painting">Painting</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/painting-drawing-and-art-supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/arts-crafts-and-books/party-decorations-and-supplies">Party Decorations &amp; Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/party-decorations-and-supplies/Aisle-Runners">Aisle Runners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/party-decorations-and-supplies/Balloons">Balloons</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/party-decorations-and-supplies/Banners">Banners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/party-decorations-and-supplies/Card-Boxes">Card Boxes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/party-decorations-and-supplies/Cardboard-Cutouts">Cardboard Cutouts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/party-decorations-and-supplies/Centerpieces">Centerpieces</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/party-decorations-and-supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/arts-crafts-and-books/printmaking">Printmaking</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/printmaking/Etching-Supplies">Etching Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/printmaking/Heat-Press-Machines-and-Accessories">Heat Press Machines &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/printmaking/Printing-Presses-and-Accessories">Printing Presses &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/printmaking/Printmaking-Inks">Printmaking Inks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/printmaking/Relief-and-Block-Printing-Materials">Relief &amp; Block Printing Materials</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/printmaking/Screen-Printing">Screen Printing</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/printmaking">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/arts-crafts-and-books/scrapbooking-and-stamping">Scrapbooking &amp; Stamping</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/scrapbooking-and-stamping/Adhesive-Vinyl">Adhesive Vinyl</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/scrapbooking-and-stamping/Adhesives">Adhesives</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/scrapbooking-and-stamping/Albums-and-Refills">Albums &amp; Refills</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/scrapbooking-and-stamping/Chipboard">Chipboard</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/scrapbooking-and-stamping/Cutting-Mats">Cutting Mats</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/scrapbooking-and-stamping/Die-Cutting-and-Embossing">Die-Cutting &amp; Embossing</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/scrapbooking-and-stamping">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/arts-crafts-and-books/sewing">Sewing</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/sewing/Bow-Makers">Bow Makers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/sewing/Embroidery-Machines">Embroidery Machines</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/sewing/Industrial-Machines">Industrial Machines</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/sewing/Quilting">Quilting</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/sewing/Serger-and-Overlock-Machine-Accessories">Serger &amp; Overlock Machine Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/sewing/Sergers-and-Overlock-Machines">Sergers &amp; Overlock Machines</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/arts-crafts-and-books/sewing">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                            </ul>

                                    
                                    </li>

                                    
                                    

                                    
                                <li class="dropdown_list ">
                                                                    <div class="img">
                                        <img src="//localhost/oracle_old/assets/images/categories/1634627455fashion-design (1).png" alt="">
                                    </div>
                                    <div class="link-area">
                                        <span><a href="//localhost/oracle_old/products/subcategories/fashion">Fashion</a></span>
                                                                                <a href="javascript:;">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                                                            </div>

                                                                    
                                                                        <ul class="categories_mega_menu row">
                                        <div class="backmenu">
                                        Back
                                        </div>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/fashion/fashion-accessories">Accessories</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/fashion-accessories/Bags-and-Backpacks">Bags &amp; Backpacks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/fashion-accessories/Handbags-and-Clutches">Handbags &amp; Clutches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/fashion-accessories/Luggage">Luggage</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/fashion-accessories/Shopping-Bags-and-Baskets">Shopping Bags &amp; Baskets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/fashion-accessories/Travel-Accessories">Travel Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/fashion-accessories/Wallets-Card-Cases-and-Money-Organizer">Wallets, Card Cases &amp; Money Organisers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/fashion-accessories">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/fashion/jewelry">Jewelry</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/jewelry/Anklets">Anklets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/jewelry/Brooches-and-Pins">Brooches &amp; Pins</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/jewelry/Necklaces-and-Pendants">Necklaces &amp; Pendants</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/jewelry">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/fashion/mens-clothing">Men's Clothing</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-clothing/mens-activewear">Activewear</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-clothing/mens-coats-jackets-and-vests">Coats, Jackets &amp; Vests</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-clothing/Fashion-Hoodies-and-Sweatshirts">Fashion Hoodies &amp; Sweatshirts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-clothing/mens-jeans">Jeans</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-clothing/mens-pants">Pants</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-clothing/mens-shirts">Shirts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-clothing">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/fashion/mens-shoes">Men's Shoes</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-shoes/mens-athletic-shoes">Athletic Shoes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-shoes/mens-boots">Boots</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-shoes/mens-casual-shoes">Casual Shoes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-shoes/Mens-Dress-Shoes">Dress Shoes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-shoes/Fashion-Sneakers">Fashion Sneakers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-shoes/Loafers-and-Slip-Ons">Loafers &amp; Slip-Ons</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-shoes">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/fashion/mens-watches">Men's Watches</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-watches/Pocket-Watches">Pocket Watches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-watches/Watch-Bands">Watch Bands</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-watches/Wrist-Watches">Wrist Watches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/mens-watches">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/fashion/womens-accessories">Women's Accessories</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-accessories/accessory-sets">Accessory Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-accessories/belt-buckles">Belt Buckles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-accessories/belts">Belts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-accessories/fascinators-and-headpieces">Fascinators &amp; Headpieces</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-accessories/gloves-and-mittens">Gloves &amp; Mittens</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-accessories/hair-accessories">Hair Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-accessories">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/fashion/womens-clothing">Women's Clothing</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-clothing/activewear">Activewear</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-clothing/coats-jackets-and-vests">Coats, Jackets &amp; Vests</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-clothing/dresses">Dresses</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-clothing/hosiery-and-socks">Hosiery &amp; Socks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-clothing/intimates-and-sleep">Intimates &amp; Sleep</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-clothing/womens-jeans">Jeans</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-clothing">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/fashion/womens-handbags">Women's Handbags</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-handbags/Clutches-and-Evening-Bags">Clutches &amp; Evening Bags</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-handbags/Crossbody-Bags">Crossbody Bags</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-handbags/Fashion-Backpacks">Fashion Backpacks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-handbags/Hobo-Bags">Hobo Bags</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-handbags/Satchels">Satchels</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-handbags/Shoulder-Bags">Shoulder Bags</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-handbags">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/fashion/womens-shoes">Women's Shoes</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-shoes/athletic-shoes">Athletic Shoes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-shoes/boots">Boots</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-shoes/comfort-shoes">Comfort Shoes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-shoes/flats">Flats</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-shoes/heels">Heels</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-shoes/sandals">Sandals</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/fashion/womens-shoes">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                            </ul>

                                    
                                    </li>

                                    
                                    

                                    
                                <li class="dropdown_list ">
                                                                    <div class="img">
                                        <img src="//localhost/oracle_old/assets/images/categories/1634627524industrial.png" alt="">
                                    </div>
                                    <div class="link-area">
                                        <span><a href="//localhost/oracle_old/products/subcategories/industrial-and-scientific">Industrial &amp; Scientific</a></span>
                                                                                <a href="javascript:;">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                                                            </div>

                                                                    
                                                                        <ul class="categories_mega_menu row">
                                        <div class="backmenu">
                                        Back
                                        </div>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/abrasive-and-finishing-products">Abrasive &amp; Finishing Products</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/abrasive-and-finishing-products/Abrasive-Accessories">Abrasive Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/abrasive-and-finishing-products/Abrasiv--Belts">Abrasive Belts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/abrasive-and-finishing-products/Abrasive-Wheels-And-Discs">Abrasive Wheels &amp; Discs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/abrasive-and-finishing-products">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/additive-manufacturing-products">Additive Manufacturing Products</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/additive-manufacturing-products/3D-Printer-Parts-And-Accessories">3D Printer Parts &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/additive-manufacturing-products/3D-Printers">3D Printers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/additive-manufacturing-products/3D-Printing-Materials">3D Printing Materials</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/additive-manufacturing-products/3D-Printing-Pens">3D Printing Pens</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/additive-manufacturing-products">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/agriculture-and-forestry">Agriculture &amp; Forestry</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/agriculture-and-forestry/Forestry-Equipment-And-Supplies">Forestry Equipment &amp; Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/agriculture-and-forestry/forestry-equipment-and-supplies">Forestry Equipment &amp; Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/agriculture-and-forestry/GPS-And-Guidance-Equipment">GPS &amp; Guidance Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/agriculture-and-forestry/GPS-and-Guidance-Equipment">GPS &amp; Guidance Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/agriculture-and-forestry/Livestock-Supplies">Livestock Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/agriculture-and-forestry/Livestock-Supplies">Livestock Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/agriculture-and-forestry">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/Building-Materials-and-Supplies">Building Materials &amp; Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Building-Materials-and-Supplies/Cement-Concrete-And-Masonry">Cement, Concrete &amp; Masonry</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Building-Materials-and-Supplies/Commercial-Ceiling-Tiles-And-Supplies">Commercial Ceiling Tiles &amp; Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Building-Materials-and-Supplies/Commercial-Doors-And-Door-Hardware">Commercial Doors &amp; Door Hardware</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Building-Materials-and-Supplies/Commercial-Flooring-And-Tiles">Commercial Flooring &amp; Tiles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Building-Materials-and-Supplies/Contractor-Guides-And-Manuals">Contractor Guides &amp; Manuals</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Building-Materials-and-Supplies/Drywall-Construction">Drywall Construction</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Building-Materials-and-Supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/Cleaning-and-Janitorial-Supplies">Cleaning &amp; Janitorial Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Cleaning-and-Janitorial-Supplies/Cleaners-And-Disinfectants">Cleaners &amp; Disinfectants</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Cleaning-and-Janitorial-Supplies/Floor-And-Upholstery-Cleaning">Floor &amp; Upholstery Cleaning</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Cleaning-and-Janitorial-Supplies/Janitorial-And-Housekeeping-Carts">Janitorial &amp; Housekeeping Carts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Cleaning-and-Janitorial-Supplies/Janitorial-Cart-Bags">Janitorial Cart Bags</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Cleaning-and-Janitorial-Supplies/Laundry-Carts-Bags-And-Cleaners">Laundry Carts, Bags &amp; Cleaners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Cleaning-and-Janitorial-Supplies/Manual-Cleaning-Equipment">Manual Cleaning Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Cleaning-and-Janitorial-Supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/CNC-Metalworking-and-Manufacturing">CNC, Metalworking &amp; Manufacturing</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/CNC-Metalworking-and-Manufacturing/Metalworking-Equipment">Metalworking Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/CNC-Metalworking-and-Manufacturing/Metalworking-Equipment-Replacement-Parts">Metalworking Equipment Replacement Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/CNC-Metalworking-and-Manufacturing/Metalworking-Fluids-And-Coolants">Metalworking Fluids &amp; Coolants</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/CNC-Metalworking-and-Manufacturing/Metalworking-Inspection-And-Measurement">Metalworking Inspection &amp; Measurement</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/CNC-Metalworking-and-Manufacturing/Metalworking-Manuals-Books-And-Plans">Metalworking Manuals, Books &amp; Plans</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/CNC-Metalworking-and-Manufacturing/Metalworking-Software">Metalworking Software</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/CNC-Metalworking-and-Manufacturing">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/commercial-door-products">Commercial Door Products</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/commercial-door-products/Commercial-Access-Control">Commercial Access Control</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/commercial-door-products/Commercial-Door-Hardware">Commercial Door Hardware</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/commercial-door-products/Commercial-Doors">Commercial Doors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/commercial-door-products">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/cutting-tools">Cutting Tools</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/cutting-tools/Band-Saw-Blades">Band Saw Blades</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/cutting-tools/Boring-Bars">Boring Bars</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/cutting-tools/Brazed-Tools">Brazed Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/cutting-tools/Broaches">Broaches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/cutting-tools/Counterbores">Counterbores</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/cutting-tools/Countersinks">Countersinks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/cutting-tools">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/Electrical-Equipment-and-Supplies">Electrical Equipment &amp; Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Electrical-Equipment-and-Supplies/Circuit-Breakers-And-Disconnectors">Circuit Breakers &amp; Disconnectors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Electrical-Equipment-and-Supplies/Contactors">Contactors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Electrical-Equipment-and-Supplies/Electrical-Boxes-Panels-And-Boards">Electrical Boxes, Panels &amp; Boards</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Electrical-Equipment-and-Supplies/Electrical-Plugs-Outlets-And-Covers">Electrical Plugs, Outlets &amp; Covers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Electrical-Equipment-and-Supplies/Electronic-Components-And-Semiconductors">Electronic Components &amp; Semiconductors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Electrical-Equipment-and-Supplies/Fuses">Fuses</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Electrical-Equipment-and-Supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/Facility-Maintenance-and-Safety">Facility Maintenance &amp; Safety</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Facility-Maintenance-and-Safety/Access-Control-Equipment">Access Control Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Facility-Maintenance-and-Safety/Facility-Bathroom-And-Refuse">Facility Bathroom &amp; Refuse</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Facility-Maintenance-and-Safety/Facility-Lighting">Facility Lighting</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Facility-Maintenance-and-Safety/Facility-Safety-Equipment">Facility Safety Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Facility-Maintenance-and-Safety/Fire-Protection-Equipment">Fire Protection Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Facility-Maintenance-and-Safety/Lockout-Tagout-LOTO-Supplies">Lockout/Tagout (LOTO) Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Facility-Maintenance-and-Safety">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/fasteners">Fasteners</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/fasteners/Anchors">Anchors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/fasteners/Bolts">Bolts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/fasteners/Pins">Pins</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/fasteners/Screws">Screws</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/fasteners/Threaded-Rods-And-Studs">Threaded Rods &amp; Studs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/fasteners/Washers">Washers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/fasteners">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/Fasteners-and-Hardware">Fasteners &amp; Hardware</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Fasteners-and-Hardware/Brackets-And-Joining-Plates">Brackets &amp; Joining Plates</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Fasteners-and-Hardware/Clamps-Ties-And-Cords">Clamps, Ties &amp; Cords</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Fasteners-and-Hardware/Extension-And-Compression-Springs">Extension &amp; Compression Springs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Fasteners-and-Hardware/Fastener-Anchors">Fastener Anchors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Fasteners-and-Hardware/Fastener-Nuts">Fastener Nuts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Fasteners-and-Hardware/Fastening-Pins">Fastening Pins</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Fasteners-and-Hardware">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/filtration">Filtration</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/filtration/Hydraulic-Filtration">Hydraulic Filtration</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/filtration/Lab-Filters">Lab Filters</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/filtration">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/food-service-equipment-and-supplies">Food Service Equipment &amp; Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/food-service-equipment-and-supplies/Barware">Barware</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/food-service-equipment-and-supplies/Commercial-Sinks">Commercial Sinks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/food-service-equipment-and-supplies/Concession-And-Vending-Equipment">Concession &amp; Vending Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/food-service-equipment-and-supplies/Cooking-Equipment">Cooking Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/food-service-equipment-and-supplies/Dishwashing-Equipment">Dishwashing Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/food-service-equipment-and-supplies/Disposables">Disposables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/food-service-equipment-and-supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/Fuel-and-Energy">Fuel &amp; Energy</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Fuel-and-Energy/Alternative-Fuel-And-Energy">Alternative Fuel &amp; Energy</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Fuel-and-Energy/Oil-And-Gas">Oil &amp; Gas</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Fuel-and-Energy/Other-Fuel-And-Energy">Other Fuel &amp; Energy</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Fuel-and-Energy/Power-And-Utilities">Power &amp; Utilities</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Fuel-and-Energy">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/Healthcare-Lab-and-Dental">Healthcare, Lab &amp; Dental</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Healthcare-Lab-and-Dental/Handpieces-And-Instruments">Handpieces &amp; Instruments</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Healthcare-Lab-and-Dental/Medical-And-Lab-Equipment-Devices">Medical &amp; Lab Equipment, Devices</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Healthcare-Lab-and-Dental/Medical-Lab-And-Caregiving-Furniture">Medical, Lab &amp; Caregiving Furniture</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Healthcare-Lab-and-Dental/Medical-Lab-And-Dental-Supplies">Medical, Lab &amp; Dental Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Healthcare-Lab-and-Dental/Medical-Lab-Equipment-Attachments-And-Accessories">Medical/Lab Equipment Attachments &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Healthcare-Lab-and-Dental/Other-Healthcare-Lab-And-Dental">Other Healthcare, Lab &amp; Dental</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Healthcare-Lab-and-Dental">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/Heavy-Equipment-Parts-and-Attachments">Heavy Equipment, Parts &amp; Attachments</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Heavy-Equipment-Parts-and-Attachments/Heavy-Equipment">Heavy Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Heavy-Equipment-Parts-and-Attachments/Heavy-Equipment-Attachments">Heavy Equipment Attachments</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Heavy-Equipment-Parts-and-Attachments/Heavy-Equipment-Parts-And-Accessories">Heavy Equipment Parts &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Heavy-Equipment-Parts-and-Attachments">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/HVAC-and-Refrigeration">HVAC &amp; Refrigeration</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/HVAC-and-Refrigeration/Heating-And-Cooling-Appliances">Heating &amp; Cooling Appliances</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/HVAC-and-Refrigeration/HVAC-And-Refrigeration-Components">HVAC &amp; Refrigeration Components</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/HVAC-and-Refrigeration/HVAC-And-Refrigeration-Tools">HVAC &amp; Refrigeration Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/HVAC-and-Refrigeration/HVAC-And-Refrigeration-Parts-And-Accessories">HVAC &amp; Refrigeration: Parts &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/HVAC-and-Refrigeration/HVAC-Systems">HVAC Systems</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/HVAC-and-Refrigeration/Other-HVAC-And-Refrigeration">Other HVAC &amp; Refrigeration</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/HVAC-and-Refrigeration">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/hydraulics-pneumatics-and-plumbing">Hydraulics, Pneumatics &amp; Plumbing</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/hydraulics-pneumatics-and-plumbing/Fittings">Fittings</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/hydraulics-pneumatics-and-plumbing/Hydraulic-Equipment">Hydraulic Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/hydraulics-pneumatics-and-plumbing/Pneumatic-Equipment">Pneumatic Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/hydraulics-pneumatics-and-plumbing/Pumps-And-Accessories">Pumps &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/hydraulics-pneumatics-and-plumbing/Tubes-Pipes-And-Hoses">Tubes, Pipes &amp; Hoses</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/hydraulics-pneumatics-and-plumbing">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/Hydraulics-Pneumatics-Pumps-and-Plumbing">Hydraulics, Pneumatics, Pumps &amp; Plumbing</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Hydraulics-Pneumatics-Pumps-and-Plumbing/Air-Compressors-And-Blowers">Air Compressors &amp; Blowers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Hydraulics-Pneumatics-Pumps-and-Plumbing/Air-Pressure-Gauges">Air Pressure Gauges</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Hydraulics-Pneumatics-Pumps-and-Plumbing/Compressed-Air-Treatment">Compressed Air Treatment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Hydraulics-Pneumatics-Pumps-and-Plumbing/Faucet-And-Hydrant-Repair-Kits">Faucet &amp; Hydrant Repair Kits</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Hydraulics-Pneumatics-Pumps-and-Plumbing/Fittings-And-Adapters">Fittings &amp; Adapters</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Hydraulics-Pneumatics-Pumps-and-Plumbing/Hydraulic-And-Pneumatic-Cylinders">Hydraulic &amp; Pneumatic Cylinders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Hydraulics-Pneumatics-Pumps-and-Plumbing">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/Industrial-Automation-and-Motion-Controls">Industrial Automation &amp; Motion Controls</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Industrial-Automation-and-Motion-Controls/Drives-And-Starters">Drives &amp; Starters</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Industrial-Automation-and-Motion-Controls/Electric-Motors">Electric Motors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Industrial-Automation-and-Motion-Controls/Indicators-And-Signal-Towers">Indicators &amp; Signal Towers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Industrial-Automation-and-Motion-Controls/Industrial-Robot-Parts">Industrial Robot Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Industrial-Automation-and-Motion-Controls/Industrial-Robotic-Arms">Industrial Robotic Arms</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Industrial-Automation-and-Motion-Controls/Mechanical-Power-Transmission">Mechanical Power Transmission</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Industrial-Automation-and-Motion-Controls">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/industrial-hardware">Industrial Hardware</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/industrial-hardware/Biscuits-and-Plugs">Biscuits &amp; Plugs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/industrial-hardware/Braces-and-Joist-Hangers">Braces &amp; Joist Hangers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/industrial-hardware/Brackets">Brackets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/industrial-hardware/Bumpers">Bumpers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/industrial-hardware/Catches">Catches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/industrial-hardware/Chains">Chains</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/industrial-hardware">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/industrial-power-and-hand-tools">Industrial Power &amp; Hand Tools</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/industrial-power-and-hand-tools/Hand-Tools">Hand Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/industrial-power-and-hand-tools/Power-Tool-Accessories">Power Tool Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/industrial-power-and-hand-tools/Power-Tools">Power Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/industrial-power-and-hand-tools">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/janitorial-and-sanitation-supplies">Janitorial &amp; Sanitation Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/janitorial-and-sanitation-supplies/Cleaning-Tools">Cleaning Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/janitorial-and-sanitation-supplies/Floor-Care">Floor Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/janitorial-and-sanitation-supplies/Industrial-Cleaning-Chemicals">Industrial Cleaning Chemicals</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/janitorial-and-sanitation-supplies/Paper-Products">Paper Products</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/janitorial-and-sanitation-supplies/Personal-Care-Products">Personal Care Products</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/janitorial-and-sanitation-supplies/Restroom-Fixtures">Restroom Fixtures</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/janitorial-and-sanitation-supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/lab-and-scientific-products">Lab &amp; Scientific Products</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/lab-and-scientific-products/Glassware-And-Labware">Glassware &amp; Labware</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/lab-and-scientific-products/Lab-Chemicals">Lab Chemicals</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/lab-and-scientific-products/Lab-Furniture">Lab Furniture</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/lab-and-scientific-products/Lab-Instruments-And-Equipment">Lab Instruments &amp; Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/lab-and-scientific-products/Lab-Supplies-And-Consumables">Lab Supplies &amp; Consumables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/lab-and-scientific-products">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/Light-Equipment-and-Tools">Light Equipment &amp; Tools</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Light-Equipment-and-Tools/Air-Tools">Air Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Light-Equipment-and-Tools/Breakers-And-Demolition-Hammers">Breakers &amp; Demolition Hammers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Light-Equipment-and-Tools/Concrete-Stamps-Forms-And-Mats">Concrete Stamps, Forms &amp; Mats</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Light-Equipment-and-Tools/Concrete-Vibrators">Concrete Vibrators</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Light-Equipment-and-Tools/Drills-And-Hammers">Drills &amp; Hammers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Light-Equipment-and-Tools/Drywall-Tools">Drywall Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Light-Equipment-and-Tools">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/Material-Handling">Material Handling</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Material-Handling/Carts-And-Trucks">Carts &amp; Trucks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Material-Handling/Casters-And-Wheels">Casters &amp; Wheels</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Material-Handling/Conveyors-And-Conveyor-Parts">Conveyors &amp; Conveyor Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Material-Handling/Hoists-Winches-And-Rigging">Hoists, Winches &amp; Rigging</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Material-Handling/Industrial-Tarps">Industrial Tarps</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Material-Handling/Ladders-Scaffolding-And-Platforms">Ladders, Scaffolding &amp; Platforms</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Material-Handling">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/material-handling-products">Material Handling Products</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/material-handling-products/Cable-Ties">Cable Ties</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/material-handling-products/Casters">Casters</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/material-handling-products/Coil-Chains">Coil Chains</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/material-handling-products/Drum-and-Pail-Handling-Equipment">Drum &amp; Pail Handling Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/material-handling-products/Drywall-Lifts">Drywall Lifts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/material-handling-products/Forklift-Booms">Forklift Booms</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/material-handling-products">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/occupational-health-and-safety-products">Occupational Health &amp; Safety Products</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/occupational-health-and-safety-products/Facility-Safety-Products">Facility Safety Products</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/occupational-health-and-safety-products/Hazardous-Material-Handling">Hazardous Material Handling</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/occupational-health-and-safety-products/Safety-Signs-And-Signals">Safety Signs &amp; Signals</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/occupational-health-and-safety-products/Work-Safety-Equipment-And-Gear">Work Safety Equipment &amp; Gear</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/occupational-health-and-safety-products">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/office">Office</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/office/Microfilm-And-Microfiche">Microfilm &amp; Microfiche</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/office/Office-Equipment">Office Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/office/Office-Furniture">Office Furniture</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/office/Office-Supplies">Office Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/office/Other-Office">Other Office</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/office/Projectors-And-Presentation-Equipment">Projectors &amp; Presentation Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/office">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/packaging-and-shipping-supplies">Packaging &amp; Shipping Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/packaging-and-shipping-supplies/Corrugated-Boxes">Corrugated Boxes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/packaging-and-shipping-supplies/Labels-And-Labeling-Equipment">Labels &amp; Labeling Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/packaging-and-shipping-supplies/Poly-And-Plastic-Packaging-Bags">Poly &amp; Plastic Packaging Bags</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/packaging-and-shipping-supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/power-transmission-products">Power Transmission Products</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/power-transmission-products/Bearings">Bearings</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/power-transmission-products/Power-Transmission-Belts">Belts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/power-transmission-products/Brakes-and-Clutches">Brakes &amp; Clutches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/power-transmission-products/Power-Transmission-Chains">Chains</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/power-transmission-products/Control-Cables-and-Accessories">Control Cables &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/power-transmission-products/Couplings-Collars-and-Universal-Joiners">Couplings, Collars &amp; Universal Joiners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/power-transmission-products">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/Printing-and-Graphic-Arts">Printing &amp; Graphic Arts</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Printing-and-Graphic-Arts/Bindery-And-Finishing-Equipment">Bindery &amp; Finishing Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Printing-and-Graphic-Arts/Commercial-Printing-Essentials">Commercial Printing Essentials</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Printing-and-Graphic-Arts/Commercial-Printing-Presses">Commercial Printing Presses</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Printing-and-Graphic-Arts/Direct-Mail-Equipment">Direct Mail Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Printing-and-Graphic-Arts/Ink-Plates-And-Film">Ink, Plates &amp; Film</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Printing-and-Graphic-Arts/Other-Printing-And-Graphic-Arts">Other Printing &amp; Graphic Arts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Printing-and-Graphic-Arts">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/professional-dental-supplies">Professional Dental Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/professional-dental-supplies/Bonding-Agents-And-Adhesives">Bonding Agents &amp; Adhesives</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/professional-dental-supplies/Finishing-And-Polishing">Finishing &amp; Polishing</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/professional-dental-supplies/Oral-Hygiene-And-Preventive-Care">Oral Hygiene &amp; Preventive Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/professional-dental-supplies/Radiology-And-Imaging">Radiology &amp; Imaging</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/professional-dental-supplies/Recordkeeping-And-Labels">Recordkeeping &amp; Labels</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/professional-dental-supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/professional-medical-supplies">Professional Medical Supplies</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/professional-medical-supplies/Apparel-And-Gloves">Apparel &amp; Gloves</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/professional-medical-supplies/Diagnostics-And-Screening">Diagnostics &amp; Screening</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/professional-medical-supplies/Examination-Supplies-And-Consumables">Examination Supplies &amp; Consumables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/professional-medical-supplies/Fluid-Administration-And-Collection">Fluid Administration &amp; Collection</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/professional-medical-supplies/Furniture-And-Safety-Equipment">Furniture &amp; Safety Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/professional-medical-supplies/Instruments-and-Surgical-Tools">Instruments &amp; Surgical Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/professional-medical-supplies">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/Restaurant-and-Food-Service">Restaurant &amp; Food Service</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Restaurant-and-Food-Service/Bar-And-Beverage-Equipment">Bar &amp; Beverage Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Restaurant-and-Food-Service/Bulk-Food">Bulk Food</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Restaurant-and-Food-Service/Commercial-Kitchen-Equipment">Commercial Kitchen Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Restaurant-and-Food-Service/Food-Trucks-Trailers-And-Carts">Food Trucks, Trailers &amp; Carts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Restaurant-and-Food-Service/Furniture-Signs-And-Decor">Furniture, Signs &amp; Decor</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Restaurant-and-Food-Service/Other-Restaurant-And-Food-Service">Other Restaurant &amp; Food Service</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/Restaurant-and-Food-Service">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/retail-store-fixtures-and-equipment">Retail Store Fixtures &amp; Equipment</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/retail-store-fixtures-and-equipment/Mannequins">Mannequins</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/retail-store-fixtures-and-equipment/Retail-Displays-And-Racks">Retail Displays &amp; Racks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/retail-store-fixtures-and-equipment">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/robotics">Robotics</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/robotics/Breadboards">Breadboards</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/robotics/Glue-Guns">Glue Guns</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/robotics/Jumper-Wires">Jumper Wires</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/robotics/Microprocessors">Microprocessors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/robotics/Motors">Motors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/robotics/Printed-Circuit-Boards">Printed Circuit Boards</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/robotics">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/tapes-adhesives-and-sealants">Tapes, Adhesives &amp; Sealants</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/tapes-adhesives-and-sealants/adhesive-guns-and-dispensers">Adhesive Guns &amp; Dispensers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/tapes-adhesives-and-sealants/Adhesive-Sprays">Adhesive Sprays</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/tapes-adhesives-and-sealants/adhesive-tapes">Adhesive Tapes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/tapes-adhesives-and-sealants/Caulk">Caulk</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/tapes-adhesives-and-sealants/caulks-sealants-and-removers">Caulks, Sealants &amp; Removers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/tapes-adhesives-and-sealants/Epoxies">Epoxies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/tapes-adhesives-and-sealants">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/industrial-and-scientific/test-measure-and-inspect">Test, Measure &amp; Inspect</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/test-measure-and-inspect/Airflow-And-Air-Quality">Airflow &amp; Air Quality</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/test-measure-and-inspect/Dimensional-Measurement">Dimensional Measurement</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/test-measure-and-inspect/Electrical-Testing">Electrical Testing</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/test-measure-and-inspect/Inspection-And-Analysis">Inspection &amp; Analysis</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/test-measure-and-inspect/Light-Measurement">Light Measurement</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/test-measure-and-inspect/Motion-Speed-And-Force">Motion, Speed &amp; Force</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/industrial-and-scientific/test-measure-and-inspect">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                            </ul>

                                    
                                    </li>

                                    
                                    

                                    
                                <li class="dropdown_list ">
                                                                    <div class="img">
                                        <img src="//localhost/oracle_old/assets/images/categories/1634627591shampoo.png" alt="">
                                    </div>
                                    <div class="link-area">
                                        <span><a href="//localhost/oracle_old/products/subcategories/health-beauty">Health &amp; Beauty</a></span>
                                                                                <a href="javascript:;">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                                                            </div>

                                                                    
                                                                        <ul class="categories_mega_menu row">
                                        <div class="backmenu">
                                        Back
                                        </div>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/bath-and-body">Bath &amp; Body</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/bath-and-body/baby-bathing-and-grooming">Baby Bathing &amp; Grooming</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/bath-and-body/bath-and-body-mixed-items">Bath &amp; Body Mixed Items</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/bath-and-body/bath-bombs-and-fizzies">Bath Bombs &amp; Fizzies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/bath-and-body/bath-brushes-and-sponges">Bath Brushes &amp; Sponges</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/bath-and-body/bath-oils">Bath Oils</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/bath-and-body/bath-salts">Bath Salts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/bath-and-body">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/electronic-smoking-parts-and-accs">Electronic Smoking, Parts &amp; Accs</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/electronic-smoking-parts-and-accs/e-cigarette-and-vape-accessories">E-Cigarette &amp; Vape Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/electronic-smoking-parts-and-accs/e-cigarettes-vapes-and-mods">E-Cigarettes, Vapes &amp; Mods</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/electronic-smoking-parts-and-accs/e-liquids-and-e-cig-cartridges">E-Liquids &amp; E-Cig Cartridges</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/electronic-smoking-parts-and-accs/other-e-cigarette-and-vape-parts">Other E-Cigarette &amp; Vape Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/electronic-smoking-parts-and-accs">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/fragrances-and-perfumes">Fragrances &amp; Perfumes</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/fragrances-and-perfumes/childrens-fragrances">Children's Fragrances</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/fragrances-and-perfumes/men-fragrances">Men's Fragrances</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/fragrances-and-perfumes/unisex-fragrances">Unisex Fragrances</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/fragrances-and-perfumes/women-fragrances">Women's Fragrances</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/fragrances-and-perfumes">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/hair">Hair</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/hair/Hair-Accessories">Hair Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/hair/Hair-Coloring-Products">Hair Coloring Products</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/hair/Hair-Cutting-Tools">Hair Cutting Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/hair/Hair-Extensions-Wigs-and-Accessories">Hair Extensions, Wigs &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/hair/Hair-Loss-Products">Hair Loss Products</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/hair/Hair-Masks">Hair Masks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/hair">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/health-and-wellbeing">Health &amp; Wellbeing</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/health-and-wellbeing/diabetes-care">Diabetes Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/health-and-wellbeing/ear-care">Ear Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/health-and-wellbeing/feminine-care">Feminine Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/health-and-wellbeing/first-aid">First Aid</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/health-and-wellbeing/foot-creams-and-treatments">Foot Creams &amp; Treatments</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/health-and-wellbeing/hot-and-cold-therapies">Hot &amp; Cold Therapies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/health-and-wellbeing">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/makeup">Makeup</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/makeup/Eye-Makeup">Eye Makeup</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/makeup/Face-Makeup">Face Makeup</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/makeup/Lip-Makeup">Lip Makeup</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/makeup/Make-Up-Sets">Make Up Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/makeup/Makeup-Cases">Makeup Cases</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/makeup/Makeup-Organisation-and-Storage">Makeup Organisation &amp; Storage</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/makeup">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/massage-and-relaxation">Massage &amp; Relaxation</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/massage-and-relaxation/Aromatherapy">Aromatherapy</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/massage-and-relaxation/Massage-Accessories">Massage Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/massage-and-relaxation/Massage-Chairs">Massage Chairs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/massage-and-relaxation/Massage-Tables">Massage Tables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/massage-and-relaxation/Massagers">Massagers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/massage-and-relaxation">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/medical-and-mobility">Medical &amp; Mobility</a>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/nailcare-manicure-and-Pedicure">Nail Care, Manicure &amp; Pedicure</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/nailcare-manicure-and-Pedicure/Foot-and-Hand-Care">Foot &amp; Hand Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/nailcare-manicure-and-Pedicure/Nail-Art-and-Polish">Nail Art &amp; Polish</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/nailcare-manicure-and-Pedicure/Nail-Care">Nail Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/nailcare-manicure-and-Pedicure/Tools-and-Accessories">Tools &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/nailcare-manicure-and-Pedicure">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/natural-and-alternative-remedies">Natural &amp; Alternative Remedies</a>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/nutrition-and-supplements">Nutrition &amp; Supplements</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/nutrition-and-supplements/BCAA-and-Amino-Acids">BCAA &amp; Amino Acids</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/nutrition-and-supplements/Creatine">Creatine</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/nutrition-and-supplements/Endurance-and-Recovery">Endurance &amp; Recovery</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/nutrition-and-supplements/Nutritional-and-Dietary-Supplements">Nutritional &amp; Dietary Supplements</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/nutrition-and-supplements/Pre-Workout">Pre-Workout</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/nutrition-and-supplements/Protein-powders">Protein Powders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/nutrition-and-supplements">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/oral-care">Oral Care</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/oral-care/Breath-Fresheners">Breath Fresheners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/oral-care/Childrens-Dental-Care">Children's Dental Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/oral-care/Dental-Floss-and-Picks">Dental Floss &amp; Picks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/oral-care/Denture-Care">Denture Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/oral-care/Dry-Mouth-Relief">Dry Mouth Relief</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/oral-care/Gum-Stimulators">Gum Stimulators</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/oral-care">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/personal-care">Personal Care</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/personal-care/Bath-and-Bathing-Accessories">Bath &amp; Bathing Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/personal-care/Deodorants-and-Antiperspirants">Deodorants &amp; Antiperspirants</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/personal-care/Eye-Masks">Eye Masks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/personal-care/Foot-Care">Foot Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/personal-care/Lip-Care">Lip Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/personal-care/Oral-Care">Oral Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/personal-care">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/salon-and-spa-equipment">Salon &amp; Spa Equipment</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/salon-and-spa-equipment/Galvanic-Facial-Machines">Galvanic Facial Machines</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/salon-and-spa-equipment/Hair-Drying-Hoods">Hair Drying Hoods</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/salon-and-spa-equipment/Handheld-Mirrors">Handheld Mirrors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/salon-and-spa-equipment/High-Frequency-Facial-Machines">High Frequency Facial Machines</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/salon-and-spa-equipment/Manicure-Tables">Manicure Tables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/salon-and-spa-equipment/Professional-Massage-Equipment">Professional Massage Equipment</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/salon-and-spa-equipment">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/shaving-and-hair-removal">Shaving &amp; Hair Removal</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/shaving-and-hair-removal/Aftershave">Aftershave</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/shaving-and-hair-removal/Beard-Trimmers">Beard Trimmers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/shaving-and-hair-removal/Body-Groomers">Body Groomers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/shaving-and-hair-removal/Cut-Throat-Razors">Cut Throat Razors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/shaving-and-hair-removal/Electric-Shavers">Electric Shavers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/shaving-and-hair-removal/Epilators">Epilators</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/shaving-and-hair-removal">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/skin-care">Skin Care</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/skin-care/Body">Body</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/skin-care/cleansers">Cleansers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/skin-care/exfoliants">Exfoliants</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/skin-care/Eyes">Eyes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/skin-care/Face">Face</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/skin-care/Lip-Care">Lip Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/skin-care">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/sun-protection-and-tanning">Sun Protection &amp; Tanning</a>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/tattoos-and-body-art">Tattoos &amp; Body Art</a>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/vision-care">Vision Care</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/vision-care/Contact-Lens-Care">Contact Lens Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/vision-care/Contact-Lens-Care">Contact Lens Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/vision-care/Eye-Patches">Eye Patches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/vision-care/Eye-Patches">Eye Patches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/vision-care/Eyeglasses-Care">Eyeglasses Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/vision-care/Eyeglasses-Care">Eyeglasses Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/vision-care">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/vitamins-and-lifestyle-supplements">Vitamins &amp; Lifestyle Supplements</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/vitamins-and-lifestyle-supplements/Blended-Vitamin-and-Mineral-Supplements">Blended Vitamin &amp; Mineral Supplements</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/vitamins-and-lifestyle-supplements/Herbal-Supplements">Herbal Supplements</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/vitamins-and-lifestyle-supplements/Minerals">Minerals</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/vitamins-and-lifestyle-supplements/Supplements">Supplements</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/vitamins-and-lifestyle-supplements/Vitamins">Vitamins</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/vitamins-and-lifestyle-supplements/Weight-Loss">Weight Loss</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/health-beauty/vitamins-and-lifestyle-supplements">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/health-beauty/wholesale-lots">Wholesale Lots</a>
                                                                                            </li>
                                                                            </ul>

                                    
                                    </li>

                                    
                                    

                                    
                                <li class="dropdown_list ">
                                                                    <div class="img">
                                        <img src="//localhost/oracle_old/assets/images/categories/1634627638electrical-appliance.png" alt="">
                                    </div>
                                    <div class="link-area">
                                        <span><a href="//localhost/oracle_old/products/subcategories/appliances">Appliances</a></span>
                                                                                <a href="javascript:;">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                                                            </div>

                                                                    
                                                                        <ul class="categories_mega_menu row">
                                        <div class="backmenu">
                                        Back
                                        </div>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/appliances/air-treatment">Air Treatment</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/air-treatment/Air-Diffusers">Air Diffusers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/air-treatment/Dehumidifiers">Dehumidifiers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/air-treatment/Humidifiers">Humidifiers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/air-treatment">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/appliances/clothes-dryers">Clothes Dryers</a>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/appliances/Coffee-Makers">Coffee Makers</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Coffee-Makers/coffee-grinders">Coffee Grinders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Coffee-Makers/Coffee-Machine-Parts">Coffee Machine Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Coffee-Makers/Coffee-Making-Accessories">Coffee Making Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Coffee-Makers/coffee-plungers-and-french-presses">Coffee Plungers &amp; French Presses</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Coffee-Makers/Coffee-Supplies">Coffee Supplies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Coffee-Makers/Drip-Coffee-Makers">Drip Coffee Makers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Coffee-Makers">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/appliances/cooktops">Cooktops</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/cooktops/Electric-Cooktops">Electric Cooktops</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/cooktops/Gas-Cooktops">Gas Cooktops</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/cooktops/Induction-Cooktops">Induction Cooktops</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/cooktops">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/appliances/dishwashers">Dishwashers</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/dishwashers/Freestanding-Dishwashers">Freestanding Dishwashers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/dishwashers">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/appliances/fans">Fans</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/fans/Ceiling-Fans">Ceiling Fans</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/fans/Exhaust-Fans">Exhaust Fans</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/fans/Portable-Fans">Portable Fans</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/fans/Wall-Mounted-Fans">Wall Mounted Fans</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/fans">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/appliances/fridges-and-freezers">Fridges &amp; Freezers</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/fridges-and-freezers/Bar-Fridges">Bar Fridges</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/fridges-and-freezers/Beer-Fridges">Beer Fridges</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/fridges-and-freezers/Chest-Freezers">Chest Freezers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/fridges-and-freezers/fridge-parts-and-accessories">Fridge Parts &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/fridges-and-freezers/Fridges">Fridges</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/fridges-and-freezers/Wine-Fridges">Wine Fridges</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/fridges-and-freezers">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/appliances/heaters">Heaters</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/heaters/Electric-Fireplaces">Electric Fireplaces</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/heaters/Electric-Heaters">Electric Heaters</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/heaters/Fireplace-Accessories">Fireplace Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/heaters/Heater-Accessories">Heater Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/heaters">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/appliances/hot-water-systems">Hot Water Systems</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/hot-water-systems/LPG-Water-Heaters">LPG Water Heaters</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/hot-water-systems/Natural-Gas-Water-Heaters">Natural Gas Water Heaters</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/hot-water-systems">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/appliances/Ironing-Appliances">Ironing Appliances</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Ironing-Appliances/Garment-Steamers">Garment Steamers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Ironing-Appliances/Ironing-Boards">Ironing Boards</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Ironing-Appliances/Steam-Irons">Steam Irons</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Ironing-Appliances">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/appliances/Kitchen-Appliances">Kitchen Appliances</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Kitchen-Appliances/Air-Fryers">Air Fryers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Kitchen-Appliances/blendersand--soup-makers">Blenders &amp; Soup Makers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Kitchen-Appliances/Deep-Fryers">Deep Fryers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Kitchen-Appliances/Drink-Makers">Drink Makers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Kitchen-Appliances/Electric-Fireplaces">Electric Fireplaces</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Kitchen-Appliances/Electric-Food-Choppers">Electric Food Choppers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Kitchen-Appliances">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/appliances/ovens">Ovens</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/ovens/Mini-Convection-Ovens">Mini Convection Ovens</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/ovens/Pizza-Ovens">Pizza Ovens</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/ovens">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/appliances/rangehoods">Rangehoods</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/rangehoods/Canopy-Rangehoods">Canopy Rangehoods</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/rangehoods/Wall-Mount-Rangehoods">Wall Mount Rangehoods</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/rangehoods">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/appliances/Vacuum-Cleaners">Vacuum Cleaners</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Vacuum-Cleaners/Bagged-Vacuum-Cleaners">Bagged Vacuum Cleaners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Vacuum-Cleaners/Canister-Vacuums">Canister Vacuums</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Vacuum-Cleaners/Handheld-Vacuums">Handheld Vacuums</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Vacuum-Cleaners/Robot-Vacuum-Cleaners">Robot Vacuum Cleaners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Vacuum-Cleaners/Vacuum-Cleaner-Bags">Vacuum Cleaner Bags</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Vacuum-Cleaners/vacuum-parts-and-accessories">Vacuum Parts &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Vacuum-Cleaners">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/appliances/Washing-Machines">Washing Machines</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Washing-Machines/Top-Loader-Washing-Machines">Top Loader Washing Machines</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/appliances/Washing-Machines">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                            </ul>

                                    
                                    </li>

                                    
                                    

                                    
                                <li class="dropdown_list ">
                                                                    <div class="img">
                                        <img src="//localhost/oracle_old/assets/images/categories/1634627684furnitures.png" alt="">
                                    </div>
                                    <div class="link-area">
                                        <span><a href="//localhost/oracle_old/products/subcategories/furniture">Furniture</a></span>
                                                                                <a href="javascript:;">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                                                            </div>

                                                                    
                                                                        <ul class="categories_mega_menu row">
                                        <div class="backmenu">
                                        Back
                                        </div>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/furniture/Accent-Furniture">Accent Furniture</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Accent-Furniture/Display-and-Curio-Cabinets">Display &amp; Curio Cabinets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Accent-Furniture/End-Tables">End Tables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Accent-Furniture/Ladder-Shelves">Ladder Shelves</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Accent-Furniture/Nesting-Tables">Nesting Tables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Accent-Furniture/Ottomans">Ottomans</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Accent-Furniture/Pouf">Poufs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Accent-Furniture">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/furniture/Bathroom-Furniture">Bathroom Furniture</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Bathroom-Furniture/Bathroom-Mirrors">Bathroom Mirrors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Bathroom-Furniture/Bathroom-Sets">Bathroom Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Bathroom-Furniture/Medicine-Cabinets">Medicine Cabinets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Bathroom-Furniture/Over-the-Toilet-Storage">Over-the-Toilet Storage</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Bathroom-Furniture">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/furniture/bedroom-furniture">Bedroom Furniture</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/bedroom-furniture/Adjustable-Beds">Adjustable Beds</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/bedroom-furniture/Bed-Bases">Bed Bases</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/bedroom-furniture/Bed-Frames">Bed Frames</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/bedroom-furniture/Bed-Headboards">Bed Headboards</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/bedroom-furniture/Bedroom-Armoires">Bedroom Armoires</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/bedroom-furniture/Bedroom-Sets">Bedroom Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/bedroom-furniture">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/furniture/dining-furniture">Dining Furniture</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/dining-furniture/Bar-Carts">Bar Carts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/dining-furniture/Bar-Stools">Bar Stools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/dining-furniture/Bar-Tables-and-Sets">Bar Tables &amp; Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/dining-furniture/Dining-Benches">Dining Benches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/dining-furniture/Dining-Chairs">Dining Chairs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/dining-furniture/Dining-Sets">Dining Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/dining-furniture">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/furniture/entry-and-hallway-furniture">Entry &amp; Hallway Furniture</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/entry-and-hallway-furniture/Coat-Racks">Coat Racks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/entry-and-hallway-furniture/Entry-Tables">Entry Tables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/entry-and-hallway-furniture/Entryway-Benches">Entryway Benches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/entry-and-hallway-furniture/Hall-Trees">Hall Trees</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/entry-and-hallway-furniture/Hallway-Cabinets">Hallway Cabinets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/entry-and-hallway-furniture/Hallway-Tables">Hallway Tables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/entry-and-hallway-furniture">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/furniture/living-room-furniture">Living Room Furniture</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/living-room-furniture/Armchairs">Armchairs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/living-room-furniture/Bean-Bags">Bean Bags</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/living-room-furniture/Bookcases-and-Shelves">Bookcases &amp; Shelves</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/living-room-furniture/Chaise-Lounges">Chaise Lounges</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/living-room-furniture/Coffee-Tables">Coffee Tables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/living-room-furniture/Directors-Chairs">Directors Chairs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/living-room-furniture">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/furniture/mattresses">Mattresses</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/mattresses/Double-Mattress">Double Mattress</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/mattresses/King-Single-Mattress">King Single Mattress</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/mattresses/King-Size-Mattress">King Size Mattress</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/mattresses/Latex-Mattresses">Latex Mattresses</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/mattresses/Memory-Foam-Mattresses">Memory Foam Mattresses</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/mattresses/Queen-Mattress">Queen Mattress</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/mattresses">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/furniture/Nursery-Furniture">Nursery Furniture</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Nursery-Furniture/Baby-Cots">Baby Cots</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Nursery-Furniture/Bassinets-and-Carry-Cots">Bassinets &amp; Carry Cots</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Nursery-Furniture/Changing-and-Dressing">Changing &amp; Dressing</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Nursery-Furniture/Cribs-Beds-and-Mattresses">Cribs, Beds &amp; Mattresses</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Nursery-Furniture/Furniture-Collections">Furniture Collections</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Nursery-Furniture/Gliders-Ottomans-and-Rocking-Chairs">Gliders, Ottomans &amp; Rocking Chairs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Nursery-Furniture">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/furniture/office-furniture">Office Furniture</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/office-furniture/Boardroom-Tables">Boardroom Tables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/office-furniture/Computer-Armoires-and-Hutches-Drafting-Tables">Computer Armoires &amp; Hutches Drafting Tables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/office-furniture/Desks">Desks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/office-furniture/Drafting-Tables">Drafting Tables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/office-furniture/File-Cabinets">File Cabinets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/office-furniture/Filing-Cabinets-and-Pedestals">Filing Cabinets &amp; Pedestals</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/office-furniture">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/furniture/outdoor-furniture">Outdoor Furniture</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/outdoor-furniture/Outdoor-Bar-Furniture">Outdoor Bar Furniture</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/outdoor-furniture/Outdoor-Bean-Bags">Outdoor Bean Bags</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/outdoor-furniture/Outdoor-Benches">Outdoor Benches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/outdoor-furniture/Outdoor-Chairs">Outdoor Chairs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/outdoor-furniture/Outdoor-Day-Beds">Outdoor Day Beds</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/outdoor-furniture/Outdoor-Dining-Settings">Outdoor Dining Settings</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/outdoor-furniture">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/furniture/Furniture-Replacement-Parts">Replacement Parts</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Furniture-Replacement-Parts/Bed-Parts">Bed Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Furniture-Replacement-Parts/Recliner-Parts">Recliner Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Furniture-Replacement-Parts/Sofa-Parts">Sofa Parts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/Furniture-Replacement-Parts">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/furniture/replica-furniture">Replica Furniture</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/replica-furniture/Bentwood-Replica">Bentwood Replica</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/replica-furniture/Eames-Replica">Eames Replica</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/replica-furniture/Hans-Wegner-Replica">Hans Wegner Replica</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/replica-furniture/Noguchi-Replica">Noguchi Replica</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/replica-furniture/Tolix-Replica">Tolix Replica</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/furniture/replica-furniture">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                            </ul>

                                    
                                    </li>

                                    
                                    

                                    
                                <li class="dropdown_list ">
                                                                    <div class="img">
                                        <img src="//localhost/oracle_old/assets/images/categories/1634627797support.png" alt="">
                                    </div>
                                    <div class="link-area">
                                        <span><a href="//localhost/oracle_old/products/subcategories/tools-and-equipment">Tools &amp; Equipment</a></span>
                                                                                <a href="javascript:;">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                                                            </div>

                                                                    
                                                                        <ul class="categories_mega_menu row">
                                        <div class="backmenu">
                                        Back
                                        </div>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/tools-and-equipment/Automotive-Tools">Automotive Tools</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Automotive-Tools/Car-Accessories">Car Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Automotive-Tools/Car-Batteries-and-Electrical">Car Batteries &amp; Electrical</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Automotive-Tools/Car-Trailers">Car Trailers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Automotive-Tools/Lubricants">Lubricants</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Automotive-Tools/Trailer-Accessories">Trailer Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Automotive-Tools">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/tools-and-equipment/Hand-Tools">Hand Tools</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Hand-Tools/Chisels-Files-and-Sharpening">Chisels, Files &amp; Sharpening</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Hand-Tools/Clamps-Pliers-and-Vices">Clamps, Pliers &amp; Vices</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Hand-Tools/Hammers-and-Wreckers">Hammers &amp; Wreckers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Hand-Tools/Masonry-and-Plaster-Tools">Masonry &amp; Plaster Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Hand-Tools/Measuring-Tools">Measuring Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Hand-Tools/Saws-Knives-and-Cutting-Tools">Saws, Knives &amp; Cutting Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Hand-Tools">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/tools-and-equipment/Heavy-Lifting-Equipment">Heavy Lifting Equipment</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Heavy-Lifting-Equipment/Bow-Shackles">Bow Shackles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Heavy-Lifting-Equipment/Electric-Hoists">Electric Hoists</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Heavy-Lifting-Equipment/Lifting-Chains-and-Chain-Blocks">Lifting Chains &amp; Chain Blocks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Heavy-Lifting-Equipment/Lifting-Slings">Lifting Slings</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Heavy-Lifting-Equipment/Platform-Scales">Platform Scales</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Heavy-Lifting-Equipment/Winches">Winches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Heavy-Lifting-Equipment">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/tools-and-equipment/Plumbing-Tools">Plumbing Tools</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Plumbing-Tools/Flaring-Tools">Flaring Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Plumbing-Tools/Pipe-and-Strap-Wrenches">Pipe &amp; Strap Wrenches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Plumbing-Tools/Pipe-and-Tube-Benders">Pipe &amp; Tube Benders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Plumbing-Tools/Pipe-and-Tube-Cutting">Pipe &amp; Tube Cutting</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Plumbing-Tools/Tap-Reseating-Tools">Tap Reseating Tools</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Plumbing-Tools/Tap-Spanners">Tap Spanners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Plumbing-Tools">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/tools-and-equipment/Power-Tools">Power Tools</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Power-Tools/Air-Compressors">Air Compressors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Power-Tools/Batteries-and-Chargers">Batteries &amp; Chargers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Power-Tools/Biscuit-Joiners">Biscuit Joiners</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Power-Tools/Cordless-Fans-and-Blowers">Cordless Fans &amp; Blowers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Power-Tools/Drills">Drills</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Power-Tools/Power-Tools-Grinders">Grinders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Power-Tools">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/tools-and-equipment/Safety-Equipment-and-Workwear">Safety Equipment &amp; Workwear</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Safety-Equipment-and-Workwear/Ear-Protection">Ear Protection</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Safety-Equipment-and-Workwear/Face-and-Head-Protection">Face &amp; Head Protection</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Safety-Equipment-and-Workwear/Heated-Jackets">Heated Jackets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Safety-Equipment-and-Workwear/Hi-Vis-and-Safety-Vests">Hi Vis &amp; Safety Vests</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Safety-Equipment-and-Workwear/Knee-Pads">Knee Pads</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Safety-Equipment-and-Workwear/Respirators-and-Dust-Masks">Respirators &amp; Dust Masks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Safety-Equipment-and-Workwear">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Accessories">Tool Accessories</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Accessories/Air-Tool-Parts-and-Accessories">Air Tool Parts &amp; Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Accessories/Drill-Bits">Drill Bits</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Accessories/Drilling-Accessories">Drilling Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Accessories/Grinder-Accessories">Grinder Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Accessories/Multi-Tool-Accessories">Multi Tool Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Accessories/Nail-and-Glue-Gun-Accessories">Nail &amp; Glue Gun Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Accessories">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Storage">Tool Storage</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Storage/Cargo-and-Site-Boxes">Cargo &amp; Site Boxes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Storage/Metal-Tool-Boxes">Metal Tool Boxes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Storage/Plastic-Tool-Boxes">Plastic Tool Boxes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Storage/Tool-Bag-and-Belts">Tool Bag &amp; Belts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Storage/Tool-Chests-and-Trolleys">Tool Chests &amp; Trolleys</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Storage/Tool-Kits">Tool Kits</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Tool-Storage">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/tools-and-equipment/Welding-and-Soldering-Irons">Welding &amp; Soldering Irons</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Welding-and-Soldering-Irons/Arc-Welders">Arc Welders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Welding-and-Soldering-Irons/Inverter-Welders">Inverter Welders</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Welding-and-Soldering-Irons/Soldering-Irons">Soldering Irons</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/tools-and-equipment/Welding-and-Soldering-Irons">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                            </ul>

                                    
                                    </li>

                                    
                                    

                                    
                                <li class="dropdown_list ">
                                                                    <div class="img">
                                        <img src="//localhost/oracle_old/assets/images/categories/1634627858happy-children.png" alt="">
                                    </div>
                                    <div class="link-area">
                                        <span><a href="//localhost/oracle_old/products/subcategories/kids">Kids</a></span>
                                                                                <a href="javascript:;">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                                                            </div>

                                                                    
                                                                        <ul class="categories_mega_menu row">
                                        <div class="backmenu">
                                        Back
                                        </div>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/kids/Baby-and-Kids-Dinnerware">Baby &amp; Kid's Dinnerware</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-and-Kids-Dinnerware/Kids-Cutlery">Kid's Cutlery</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-and-Kids-Dinnerware/Kids-Cups-and-Bottles">Kids Cups &amp; Bottles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-and-Kids-Dinnerware">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/kids/Baby-and-Toddler-Clothing">Baby &amp; Toddler Clothing</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-and-Toddler-Clothing/Baby-and-Toddler-Swimwear">Baby &amp; Toddler Swimwear</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-and-Toddler-Clothing/Baby-Clothing-Sets">Baby Clothing Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-and-Toddler-Clothing/Baby-Headwear">Baby Headwear</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-and-Toddler-Clothing/Baby-Onesies">Baby Onesies</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-and-Toddler-Clothing/Baby-Shoes">Baby Shoes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-and-Toddler-Clothing/Kids-Bowls-and-Plates">Kids Bowls &amp; Plates</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-and-Toddler-Clothing">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/kids/Baby-Activity-Equipment">Baby Activity Equipment</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Activity-Equipment/Baby-Activity-Centers">Baby Activity Centers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Activity-Equipment/Baby-Bouncers-and-Jumpers">Baby Bouncers &amp; Jumpers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Activity-Equipment/Baby-Car-Accessories">Baby Car Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Activity-Equipment/Baby-Car-Seats">Baby Car Seats</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Activity-Equipment/Baby-Carriers">Baby Carriers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Activity-Equipment/Baby-Gyms-and-Play-Mats">Baby Gyms &amp; Play Mats</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Activity-Equipment">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/kids/Baby-Bathing-and-Grooming">Baby Bathing &amp; Grooming</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Bathing-and-Grooming/Baby-Bath-Seats">Baby Bath Seats</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Bathing-and-Grooming/Baby-Bathing-Accessories">Baby Bathing Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Bathing-and-Grooming/Baby-Bathtubs">Baby Bathtubs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Bathing-and-Grooming/Baby-Laundry-Detergents">Baby Laundry Detergents</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Bathing-and-Grooming/Baby-Oil-and-Skincare">Baby Oil &amp; Skincare</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Bathing-and-Grooming/Baby-Towels">Baby Towels</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Bathing-and-Grooming">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/kids/Baby-Bedding-and-Sleep">Baby Bedding &amp; Sleep</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Bedding-and-Sleep/Baby-Blankets">Baby Blankets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Bedding-and-Sleep/Baby-Sleep-Training">Baby Sleep Training</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Bedding-and-Sleep/Baby-Swaddles-and-Sleeping-Bags">Baby Swaddles &amp; Sleeping Bags</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Bedding-and-Sleep/Cot-Bedding">Cot Bedding</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Bedding-and-Sleep/Night-Lights-and-Light-Projectors">Night Lights &amp; Light Projectors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Bedding-and-Sleep/Noise-Machines">Noise Machines</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Baby-Bedding-and-Sleep">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/kids/baby-health-and-safety">Baby Health &amp; Safety</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/baby-health-and-safety/Baby-Monitors">Baby Monitors</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/baby-health-and-safety/Baby-Thermometers">Baby Thermometers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/baby-health-and-safety/Bed-Rails">Bed Rails</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/baby-health-and-safety/Child-Safety-Locks">Child Safety Locks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/baby-health-and-safety/Dummies-and-Teethers">Dummies &amp; Teethers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/baby-health-and-safety/Safety-Gates">Safety Gates</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/baby-health-and-safety">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/kids/baby-products">Baby Products</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/baby-products/Activity-and-Play-Time">Activity &amp; Play Time</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/baby-products/Baby-Accessories">Baby Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/baby-products/Baby-Bedding">Baby Bedding</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/baby-products/Baby-Car-Seats">Baby Car Seats</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/baby-products/Baby-Care">Baby Care</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/baby-products/Baby-Carriers">Baby Carriers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/baby-products">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/kids/Boys-Fashion">Boy's Fashion</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Boys-Fashion/Boys-Accessories">Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Boys-Fashion/Boys-Clothing">Clothing</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Boys-Fashion/Boys-Jewelry">Jewelry</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Boys-Fashion/School-Uniforms">School Uniforms</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Boys-Fashion/Boys-Shoes">Shoes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Boys-Fashion/Boys-Watches">Watches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Boys-Fashion">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/kids/Diapering-and-Nappy-Changing">Diapering &amp; Nappy Changing</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Diapering-and-Nappy-Changing/Baby-Wipes">Baby Wipes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Diapering-and-Nappy-Changing/Baby-Wipes">Baby Wipes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Diapering-and-Nappy-Changing/Changing-Mats-and-Pads">Changing Mats &amp; Pads</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Diapering-and-Nappy-Changing/Changing-Pads-and-Sets">Changing Pads &amp; Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Diapering-and-Nappy-Changing/Changing-Tables">Changing Tables</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Diapering-and-Nappy-Changing/Diaper-Backpacks">Diaper Backpacks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Diapering-and-Nappy-Changing">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/kids/Girls-Fashion">Girl's Fashion</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Girls-Fashion/Girls-Accessories">Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Girls-Fashion/Clothing">Clothing</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Girls-Fashion/Jewelry">Jewelry</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Girls-Fashion/School-Uniforms">School Uniforms</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Girls-Fashion/Shoes">Shoes</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Girls-Fashion/Watches">Watches</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Girls-Fashion">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/kids/Kids-Decor">Kid's Decor</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Kids-Decor/Baby-Memorabilia-and-Record-Books">Baby Memorabilia &amp; Record Books</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Kids-Decor/Growth-Charts">Growth Charts</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Kids-Decor/Kids-Blankets-and-Throws">Kid's Blankets &amp; Throws</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Kids-Decor/Kids-Clocks">Kid's Clocks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Kids-Decor/Kids-Decorative-Ornaments">Kid's Decorative Ornaments</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Kids-Decor/Kids-Wall-Art-and-Posters">Kid's Wall Art &amp; Posters</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Kids-Decor">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/kids/Kids-Furniture">Kid's Furniture</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Kids-Furniture/Armoires-and-Dressers">Armoires &amp; Dressers</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Kids-Furniture/Bed-Frames-Headboards-and-Footboards">Bed Frames, Headboards &amp; Footboards</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Kids-Furniture/Bookcases-Cabinets-and-Shelves">Bookcases, Cabinets &amp; Shelves</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Kids-Furniture/Chairs-and-Seats">Chairs &amp; Seats</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Kids-Furniture/Chests-and-Trunks">Chests &amp; Trunks</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Kids-Furniture/Desks-and-Desk-Sets">Desks &amp; Desk Sets</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Kids-Furniture">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/kids/Nursing-and-Feeding">Nursing &amp; Feeding</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Nursing-and-Feeding/Baby-Bibs">Baby Bibs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Nursing-and-Feeding/Baby-Bottle-Accessories">Baby Bottle Accessories</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Nursing-and-Feeding/Baby-Bottles">Baby Bottles</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Nursing-and-Feeding/Baby-Feeding-Utensils">Baby Feeding Utensils</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Nursing-and-Feeding/Baby-Foods">Baby Foods</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Nursing-and-Feeding/Bibs">Bibs</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/kids/Nursing-and-Feeding">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                            </ul>

                                    
                                    </li>

                                    
                                    

                                    
                                <li class="dropdown_list ">
                                                                    <div class="img">
                                        <img src="//localhost/oracle_old/assets/images/categories/1635945279gift.png" alt="">
                                    </div>
                                    <div class="link-area">
                                        <span><a href="//localhost/oracle_old/products/subcategories/Gifts">Gifts</a></span>
                                                                                <a href="javascript:;">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                                                            </div>

                                                                    
                                                                        <ul class="categories_mega_menu row">
                                        <div class="backmenu">
                                        Back
                                        </div>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/Gifts/Anniversary">Anniversary</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Anniversary/Gifts-For-Her">Gifts For Her</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Anniversary/Gifts-For-Him">Gifts For Him</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Anniversary/Personalised-Gift">Personalised Gift</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Anniversary">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/Gifts/Birthday">Birthday</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Birthday/Boyfriend">Boyfriend</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Birthday/Brother">Brother</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Birthday/Dad">Dad</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Birthday/Girlfriend">Girlfriend</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Birthday/Husband">Husband</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Birthday/Kids">Kids</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Birthday">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/Gifts/Occasions">Occasions</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Occasions/Christmas">Christmas</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Occasions/Easter">Easter</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Occasions/Fathers-Day">Father’s Day</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Occasions/International-Womens-Day">International Women’s Day</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Occasions/Mothers-Day">Mother’s Day</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Occasions/Thanksgiving-Day">Thanksgiving Day</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Occasions">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                                    <li class="col-md-3">
                                                <a href="//localhost/oracle_old/category/Gifts/Personalised">Personalised</a>
                                                                                                    <div class="categorie_sub_menu">
                                                        <ul>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Personalised/3D-Figurines">3D Figurines</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Personalised/Baby-Announcement">Baby Announcement</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Personalised/Gifts-Barware">Barware</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Personalised/Books">Books</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Personalised/Cards">Cards</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Personalised/Caricatures">Caricatures</a></li>
                                                                                                                        <li><a href="//localhost/oracle_old/category/Gifts/Personalised">View All</a></li>
                                                        </ul>
                                                    </div>
                                                                                            </li>
                                                                            </ul>

                                    
                                    </li>

                                    
                                                                            <li>
                                        <a href="//localhost/oracle_old/categories"><i class="fas fa-plus"></i> See All Categories </a>
                                        </li>
                                        
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-9 col-md-6 mainmenu-wrapper remove-padding">
                    <nav class="core-nav"><div class="full-container">
                        <div class="nav-header right">
                            <button class="toggle-bar core-nav-toggle"><span class="fa fa-bars"></span></button>
                        </div>
                        <div class="wrap-core-nav-list right"><ul class="menu core-nav-list">
                                                                                        <li><a href="//devfo.pauldaughters.com/auction">Auction</a></li>
                                                            <li><a href="//devfo.pauldaughters.com/category/furniture/bedroom-furniture">Bedroom Furniture</a></li>
                                                            <li><a href="//devfo.pauldaughters.com/products/filter/sale">Todays Deal</a></li>
                                                            <li><a href="//devfo.pauldaughters.com/products/subcategories/fashion">Fashion Gallery</a></li>
                                                            <li><a href="//devfo.pauldaughters.com/products/subcategories/health-beauty">Health &amp; Beauty</a></li>
                                                        
                            <li>
                                <a href="javascript:;" data-toggle="modal" data-target="#track-order-modal" class="track-btn">Track Order</a>
                            </li>
                        </ul></div>

                    </div></nav><div class="dropdown-overlay"></div>
                </div>
            </div>
        </div>
    </div>

@yield('content')
<footer class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="footer-info-area">
                        <div class="footer-logo">
                            <a href="//localhost/oracle_old" class="logo-link">
                                <img src="//localhost/oracle_old/assets/images/1621781385Logo white png.png" alt="">
                            </a>
                        </div>
                        <div class="text">
                            <p>
                                    Oracle marketplace will take your online shopping to the next level. In this competitive E-commerce market and digital revolution, shopping at Oracle marketplace associated with trustworthy sellers and value for money products would just win your heart instantly.
                            </p>
                        </div>
                    </div>
                    <div class="fotter-social-links">
                        <ul>

                                                                           <li>
                                        <a href="//www.facebook.com/" class="facebook" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                      </li>
                                      
                                                                            <li>
                                        <a href="//plus.google.com/" class="google-plus" target="_blank">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                      </li>
                                      
                                                                            <li>
                                        <a href="//twitter.com/" class="twitter" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                      </li>
                                      
                                                                            <li>
                                        <a href="//www.linkedin.com/" class="linkedin" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                      </li>
                                      
                                                                            <li>
                                        <a href="//dribbble.com/" class="dribbble" target="_blank">
                                            <i class="fab fa-dribbble"></i>
                                        </a>
                                      </li>
                                      
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget info-link-widget">
                        <h4 class="title">
                                Footer Links
                        </h4>
                        <ul class="link-list">
                            

                                                        <li>
                                <a href="//localhost/oracle_old/about">
                                    <i class="fas fa-angle-double-right"></i>About Us
                                </a>
                            </li>
                                                        <li>
                                <a href="//localhost/oracle_old/privacy">
                                    <i class="fas fa-angle-double-right"></i>Privacy &amp; Policy
                                </a>
                            </li>
                                                        <li>
                                <a href="//localhost/oracle_old/terms">
                                    <i class="fas fa-angle-double-right"></i>Terms &amp; Condition
                                </a>
                            </li>
                                                        <li>
                                <a href="//localhost/oracle_old/refund-policy">
                                    <i class="fas fa-angle-double-right"></i>Refund Policy
                                </a>
                            </li>
                                                        <li>
                                <a href="//localhost/oracle_old/advertising">
                                    <i class="fas fa-angle-double-right"></i>Advertising
                                </a>
                            </li>
                            
                            
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="footer-widget info-link-widget">
                        <h4 class="title">
                                Helpful links
                        </h4>
                        <ul class="link-list">
                            <li>
                                <a href="//localhost/oracle_old">
                                    <i class="fas fa-angle-double-right"></i>Home
                                </a>
                            </li>
                            <li>
                                <a href="//localhost/oracle_old/faq">
                                    <i class="fas fa-angle-double-right"></i>Faq
                                </a>
                            </li>
                            <li>
                                <a href="//localhost/oracle_old/contact">
                                    <i class="fas fa-angle-double-right"></i>Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="//localhost/oracle_old/helpdesk">
                                    <i class="fas fa-angle-double-right"></i> Helpdesk
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="copy-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                            <div class="content">
                                <div class="content">
                                    <p>COPYRIGHT © 2019. All Rights Reserved By PaulDaughters.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
{{-- <script src="{{asset('asset_old/front/js/all.js')}}"></script> --}}
    <script src="{{asset('asset_old/front/js/jquery.js')}}"></script>
    <script src="{{asset('asset_old/front/js/vue.js')}}"></script>
    <script src="{{asset('asset_old/front/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- popper -->
    <script src="{{asset('asset_old/front/js/popper.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('asset_old/front/js/bootstrap.min.js')}}"></script>
    <!-- plugin js-->
    <script src="{{asset('asset_old/front/js/plugin.js')}}"></script>

    <script src="{{asset('asset_old/front/js/xzoom.min.js')}}"></script>
    <script src="{{asset('asset_old/front/js/jquery.hammer.min.js')}}"></script>
    <script src="{{asset('asset_old/front/js/setup.js')}}"></script>

    <script src="{{asset('asset_old/front/js/toastr.js')}}"></script>
    <!-- main -->
    <script src="{{asset('asset_old/front/js/main.js')}}"></script>
    <!-- custom -->
    <script src="{{asset('asset_old/front/js/custom.js')}}"></script>
</body>
</html>