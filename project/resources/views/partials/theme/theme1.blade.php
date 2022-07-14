@extends('layouts.front_home_page')
@section('css')
<style>
   h2.main-title.mb-4.text-center.text-secondary {
    font-size: 36px;
    font-weight: bolder;
    color: #1f1f1f !important;
    font-family: sans-serif;
   }
   span.text-secondary.pb-2.d-table.tagline.mx-auto.text-uppercase.text-center {
       color: black !important;
       font-weight: bold;
   }
   .row {
       --bs-gutter-x: 1.5rem;
       --bs-gutter-y: 0;
       display: flex;
       flex-wrap: wrap;
       margin-top: calc(1.5 * -1);
       margin-right: calc(1.5/ -2);
       margin-left: calc(1.5/ -2);
   }
   .row-cols-xl-4>* {
       flex: 0 0 auto;
       width: 25%;
   }
   .product-wrapper .product-info .product-title, .product-wrapper .product-info .product-title a {
       font-weight: 400;
       font-size: 16px;
       color: #1f1f1f !important;
   }
   [class*="e-image-bg-"] .product-wrapper .product-info {
       padding: 15px 0;
   }
   .e-info-center .product-wrapper .shipping-feed-back, .e-info-center .product-wrapper .product-info .product-price {
       justify-content: center;
   }
   .e-info-center .product-wrapper .shipping-feed-back, .e-info-center .product-wrapper .product-info .product-price {
       justify-content: center;
   }
   .full-row {
       padding-top: 70px;
       padding-bottom: 70px;
   }
   .sub-title {
    font-size: 18px !important;
       font-weight: 400 !important;
       color: #a59893;
   }

   /*style.css file start amit*/
   [class*="btn-link"],
   [class*="btn-link"]::after,
   .product-wrapper,
   .product-wrapper:hover .product-image .wishlist-view,
   .product-wrapper:hover .product-variations,
   .product-wrapper:hover .hover-area,
   .owl-nav-hover-primary .owl-nav button:hover .nav-btn,
   .e-border-one .product-wrapper:hover,
   .product-style-3 .product-wrapper .hover-area,
   .product-style-1 .product-wrapper .hover-area,
   .product-style-7 .product-wrapper .hover-area,
   [class*="swatch-filter-"] li,
   [class*="swatch-filter-"].show-more li,
   [class*="nav-arrow-middle"] .owl-nav button,
   [class*="header-cart-"] .cart-popup,
   .my-account-popup,
   [class*="accordion-plus-"] .ac-toggle::after {
      -moz-transition: all 300ms ease-in-out 0s;
      -webkit-transition: all 300ms ease-in-out 0s;
      -o-transition: all 300ms ease-in-out 0s;
      -ms-transition: all 300ms ease-in-out 0s;
      transition: all 300ms ease-in-out 0s;
   }
   .container,
   .container-fluid,
   .container-lg-fluid {
      position: relative;
   }
   .woocommerce-ordering select {
      background: auto;
   }
   .pb-8 {
      padding-bottom: 80px !important;
   }
   .mb-8 {
      margin-bottom: 80px !important;
   }
   .pb-7 {
      padding-bottom: 70px !important;
   }
   .py-100 {
      padding: 100px 0 !important;
   }
   .checkout {
      padding: 70px 0px 70px;
   }
   .checkout {
      overflow: hidden;
   }
   a.btn.btn-secondary.rounded-0.checkout {
      padding: 0 25px !important;
   }
   .checkout-area .checkout-process {
      display: block;
      margin-bottom: 40px;
      text-align: center;
   }
   .checkout-area .checkout-process ul {
      display: inline-block;
   }
   .checkout-area .checkout-process li {
      display: inline-block;
      margin-right: 20px;
      text-align: left;
      margin-bottom: 10px;
   }
   ul li {
      list-style: none;
   }
   .checkout-area .checkout-process li a.active {
      background: #c9030f;
      color: #fff !important;
   }
   .checkout-area .checkout-process li a {
      background: #e9ecef;
      padding: 0px;
      margin: 0px;
      line-height: 70px;
      padding-left: 35px;
      font-weight: 600;
      width: 200px;
      height: 70px;
      position: relative;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   a,
   a:hover,
   a:focus,
   a:active {
      text-decoration: none;
      outline: none;
   }
   .checkout-area .checkout-process li a.active::before {
      border-left: 20px solid #c9030f;
   }
   .checkout-area .checkout-process li a::before {
      position: absolute;
      content: "";
      left: 100%;
      top: 0px;
      border-top: 35px solid transparent;
      border-left: 20px solid #e9ecef;
      border-bottom: 35px solid transparent;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .checkout-area .checkout-process li a.active span,
   .checkout-area .checkout-process li a:hover span {
      background: #333;
   }
   .checkout-area .checkout-process li a span {
      width: 30px;
      height: 30px;
      text-align: center;
      line-height: 30px;
      background: #666;
      color: #fff;
      display: inline-block;
      border-radius: 50%;
      margin-right: 7px;
      -webkit-box-shadow: 3px 3px 7px 1px rgb(0 0 0 / 25%);
      box-shadow: 3px 3px 7px 1px rgb(0 0 0 / 25%);
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .checkout-area .checkout-process li a.active i,
   .checkout-area .checkout-process li a:hover i {
      opacity: 0.7;
      right: 0px;
      font-size: 34px;
   }
   .checkout-area .checkout-process li a i {
      position: absolute;
      top: 50%;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      font-size: 45px;
      opacity: 0.1;
      right: 30px;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .checkout-area .checkout-process li a::after {
      position: absolute;
      content: "";
      left: 0px;
      top: 0px;
      border-top: 35px solid transparent;
      border-left: 20px solid #ffffff;
      border-bottom: 35px solid transparent;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .checkout-area .tab-content {
      -webkit-box-shadow: 3px 3px 5px 0px rgb(0 0 0 / 5%);
      box-shadow: 3px 3px 5px 0px rgb(0 0 0 / 5%);
      border: 1px solid rgba(0, 0, 0, 0.1);
   }
   .checkout-area .content-box .content {
      padding: 20px 20px 20px;
   }
   .closed a {
      width: 30px;
      height: 30px;
      background-color: var(--theme-white-color);
      border: 1px solid var(--theme-gray-color);
      color: var(--theme-dark-color);
      margin-top: 4px;
      margin-bottom: 4px;
      display: block;
      font-size: 10px;
      font-weight: 500;
      line-height: 30px;
      padding-left: 0px;
   }
   .autocomplete {
      display: block;
   }
   .autocomplete-items {
      -webkit-box-shadow: 0px 2px 7px rgb(0 0 0 / 11%);
      box-shadow: 0px 2px 7px rgb(0 0 0 / 11%);
   }
   .autocomplete-items {
      position: absolute;
      border-top: none;
      z-index: 99;
      top: 100%;
      background: #fff;
      right: 22%;
      -webkit-box-shadow: 0px 2px 7px rgb(0 0 0 / 11%);
      box-shadow: 0px 2px 7px rgb(0 0 0 / 11%);
      width: 27%;
      margin-top: 2px;
   }
   @media screen and (max-width: 991px) {
      .autocomplete-items {
         width: 100%;
         max-width: 320px;
      }
   }
   @media screen and (max-width: 450px) {
      .autocomplete-items {
         max-width: 100%;
         right: 0;
      }
   }
   .border-dash {
      border-bottom: 1px dotted grey;
   }
   a.active {
      color: var(--theme-primary-color);
   }
   .docname {
      width: 100% !important;
      border-bottom: 1px solid rgba(84, 82, 82, 0.09) !important;
      padding: 13px 8px;
   }
   .user-info p {
      line-height: 15px;
   }
   .post {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
   }
   .post .post-img {
      margin-right: 15px;
   }
   .post .post-img img {
      width: 50px;
      height: 50px;
   }
   .post .post-details {
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
   }
   .post .post-details .date {
      font-size: 12px;
      line-height: 20px;
      color: #8798b8;
      font-weight: 400;
      margin-bottom: 0px;
   }
   .docname a {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
   }
   .docname a img {
      width: 50px;
      height: 50px;
   }
   .search-content p {
      margin-top: 0;
      margin-bottom: 0rem;
   }
   .search-content {
      padding-left: 10px;
   }
   .closed a:hover {
      background-color: var(--theme-primary-color);
      border: 1px solid var(--theme-primary-color);
      color: var(--theme-white-color);
   }
   .submit-loader {
      background: rgba(251, 251, 251, 0.52);
      top: 0;
      width: 100%;
      height: 100%;
      z-index: 999;
      position: absolute;
   }
   .submit-loader img {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
   }
   img {
      max-width: 100%;
   }
   .checkout-area .content-box .content .title {
      display: block;
      padding-bottom: 5px;
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 20px;
      border-bottom: 1px solid rgba(0, 0, 0, 0.3);
   }
   .checkout-area .content-box .content .form-control {
      height: 45px;
      width: 100%;
      font-size: 14px;
      line-height: 30px;
      border: 1px solid #bdccdb;
      border-radius: 0.25rem;
   }
   input[type="checkbox"] {
      content: "\2714";
      border: 1px solid rgba(0, 0, 0, 0.2);
      border-radius: 0.2em;
      display: inline-block;
      width: 20px;
      height: 20px;
      text-align: center;
      vertical-align: bottom;
      color: transparent;
      -webkit-transition: 0.2s;
      transition: 0.2s;
      margin-right: 5px;
      margin-top: 3px;
   }
   input[type="checkbox"] + label {
      display: block;
      cursor: pointer;
      font-size: 14px !important;
      margin-top: 2px;
   }
   .checkout-area .content-box .content label {
      font-size: 16px;
      font-weight: 600;
   }

   .form-check {
      display: flex;
      padding-left: 5px;
   }
   .form-check-input:checked {
      background-color: #a439ee;
      border: none !important;
   }
   .form-check .form-check-input {
      float: left;
      width: 14px;
      height: 14px;
      margin: 0;
      margin-top: -2px;
   }
   .form-check .form-check-label {
      width: calc(100% - 20px);
      margin-left: 0;
      padding-left: 15px;
   }
   .checkout-area .content-box .content .set-account-pass {
      margin-top: 10px;
   }
   .checkout-area .content-box .content .billing-address {
      margin-top: 25px;
   }
   .checkout-area .content-box .content .billing-address input,
   .checkout-area .content-box .content .ship-diff-addres-area input {
      margin-bottom: 10px;
   }
   .checkout-area .content-box .content .ship-diff-addres-area {
      margin-top: 20px;
   }
   .mybtn1 {
      font-size: 16px;
      font-weight: 400;
      padding: 8px 18px;
      display: inline-block;
      color: #fff;

      border: 0px;
      cursor: pointer;
      border-radius: 3px;

      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .mybtn1:hover {
      background: #fff;
      color: #c9030f;
   }
   .order-table {
      color: #767c89;
   }
   .c-info-box-area {
      padding: 40px 30px 38px;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .card {
      position: relative;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, 0.125);
      border-radius: 0.25rem;
   }
   .c-info-box-area .c-info-box.box2 {
      border-color: #90ebf5;
   }
   .c-info-box-content {
      text-align: center;
      margin-top: 20px;
   }
   .c-info-box-area .c-info-box.box1 {
      border-color: #f5c765;
   }
   .c-info-box-area .c-info-box p {
      font-size: 30px;
      font-weight: 600;
      line-height: 160px;
   }
   .c-info-box-area .c-info-box {
      width: 200px;
      height: 200px;
      margin: 0 auto;
      border-width: 20px;
      border-style: solid;
      text-align: center;
      border-radius: 50%;
   }
   .order-status {
      color: #fff;
      border-radius: 50px;
      text-align: center;
      display: inline-block;
      padding: 1px 15px;
   }
   .process-steps-area {
      margin-bottom: 100px;
      display: block;
   }
   .process-steps {
      margin: 0;
      padding: 0;
      list-style: none;
      display: block;
   }
   .user-dashbord .user-profile-details .order-details .header-area {
      display: block;
      margin-top: 80px;
   }
   a.back-btn.theme-bg {
      background: #a439ee;
      padding: 5px 20px;
      color: white;
   }
   table.dataTable tbody tr {
      background-color: #f8f8f8;
   }
   input#code {
      margin-right: 3%;
   }
   .upload-img {
      padding: 18px 0px 20px;
      display: flex;
      align-items: center;
   }
   .upload-img .img {
      width: 100px;
      height: 100px;
      border: 1px solid rgba(0, 0, 0, 0.4);
      border-radius: 50%;
      margin-right: 30px;
      overflow: hidden;
   }
   .upload-img .file-upload-area {
      flex: 1;
   }
   .upload-img .file-upload-area .upload-file {
      width: 150px !important;
      height: 40px;
      cursor: pointer;
      position: relative;
   }
   .edit-info-area .upload-img .img img {
      border-radius: 50%;
      width: 100%;
      height: 100%;
   }
   .upload-file label {
      padding: 10px;
      background: red;
      display: table;
      color: #fff;
      text-align: center;
      cursor: pointer;
   }
   .upload-file input[type="file"] {
      display: none;
   }
   .message-modal .modal-dialog {
      position: absolute;
      right: 0;
      width: 100%;
      bottom: 0;
   }
   .message-modal .modal .modal-dialog .modal-header {
      padding: 12px 30px !important;
      text-align: right;
   }
   .message-modal .modal .modal-dialog .modal-header .modal-title {
      color: #fff;
      font-size: 18px;
      font-weight: 600;
      display: inline-block;
   }
   .message-modal .modal .contact-form .submit-btn {
      width: 100%;
      height: 50px;
      background: #c9030f;
      color: #fff;
      font-size: 14px;
      line-height: 50px;
      font-weight: 600;
      text-align: center;
      border: 0px;
      border-radius: 5px;
      cursor: pointer;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .process-steps li {
      width: 25%;
      float: left;
      text-align: center;
      position: relative;
   }
   .print-order.text-right {
      text-align: right;
   }
   .process-steps li .title {
      font-weight: 600;
      font-size: 13px;
      color: #777;
      margin-top: 8px;
   }
   a.print-order-btn {
      background: #a439ee;
      padding: 10px 20px;
      color: white;
   }
   .process-steps li .icon {
      height: 30px;
      width: 30px;
      margin: auto;
      background: #efefef;
      border-radius: 50%;
      line-height: 30px;
      font-size: 14px;
      font-weight: 700;
      color: #000000;
      position: relative;
   }
   .process-steps li:after {
      position: absolute;
      content: "";
      height: 3px;
      width: calc(100% - 30px);
      background: #efefef;
      top: 21px;
      z-index: 0;
      right: calc(50% + 15px);
   }
   .process-steps li:first-child::after {
      display: none;
   }
   .process-steps li.done .icon {
      color: transparent;
   }
   .process-steps li.done:after,
   .process-steps li.active:after,
   .process-steps li.active .icon {
      color: #fff;
      background: #a439ee;
   }
   .process-steps li.done .icon:before {
      position: absolute;
      content: "";
      left: 11px;
      top: 7px;
      width: 8px;
      height: 14px;
      border: solid #fff;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
   }

   .order-status.pending {
      background: rgb(243, 188, 85);
   }
   .order-status.decline {
      background: rgb(248, 107, 107);
   }
   .order-status.completed {
      background: rgb(74, 163, 74);
   }
   .order-status.processing {
      background: #73cbf6;
   }
   div#example_length {
      margin-bottom: 20px;
   }
   .order-status.on.delivery {
      background: #ce8bee;
   }
   [type="button"]:not(:disabled),
   [type="reset"]:not(:disabled),
   [type="submit"]:not(:disabled),
   button:not(:disabled) {
      cursor: pointer;
   }
   @media (max-width: 1649px) {
      .mybtn1 {
         padding: 8px 12px;
         margin-bottom: 10px;
      }
   }
   .checkout-area .content-box .content .order-area .order-item {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      padding-bottom: 5px;
      margin-bottom: 5px;
   }
   .checkout-area .content-box .content .order-area .order-item .product-img img {
      width: 135px;
      height: auto;
      margin-right: 20px;
   }
   .checkout-area .content-box .content .order-area .order-item .product-content {
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
   }
   .checkout-area
      .content-box
      .content
      .order-area
      .order-item
      .product-content
      .name {
      margin-bottom: 5px;
   }
   .right-area .order-box {
      -webkit-box-shadow: 3px 3px 5px 0px rgb(0 0 0 / 5%);
      box-shadow: 3px 3px 5px 0px rgb(0 0 0 / 5%);
      border: 1px solid rgba(0, 0, 0, 0.1);
      padding: 40px 25px 40px;
   }
   .right-area .order-box .title {
      font-size: 16px;
      font-weight: 700;
      color: #143250;
      line-height: 28px;
      margin-bottom: 15px;
   }
   .right-area .order-box .order-list {
      border-bottom: 1px solid rgba(0, 0, 0, 0.3);
   }
   .right-area .order-box .order-list li {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
   }
   .right-area .order-box .order-list li p {
      font-size: 14px;
      font-weight: 600;
   }
   .right-area .order-box .order-list li p b {
      font-weight: 700;
   }
   .right-area .order-box .order-list {
      border-bottom: 1px solid rgba(0, 0, 0, 0.3);
   }
   .right-area .order-box .total-price {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
      font-weight: 600;
      padding-top: 5px;
   }
   .right-area .order-box .cupon-box {
      text-align: center;
      margin-bottom: 30px;
   }
   .cupon-box #coupon-link img {
      width: 25px;
      margin-right: 5px;
   }
   .right-area .order-box .cupon-box #coupon-link {
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 25px;
      text-decoration: underline;
      cursor: pointer;
   }
   .cupon-box #check-coupon-form {
      display: none;
   }
   .cupon-box #check-coupon-form input {
      width: 190px;
      height: 35px;
      background: #f3f8fc;
      border: 1px solid rgba(0, 0, 0, 0.1);
      padding: 0px 10px;
      font-size: 14px;
   }
   .cupon-box #check-coupon-form button {
      width: 80px;
      height: 35px;
      background: #fff;
      border: 1px solid rgba(0, 0, 0, 0.15);
      font-size: 14px;
      text-transform: uppercase;
      cursor: pointer;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .right-area .order-box .title {
      font-size: 16px;
      font-weight: 700;
      color: #143250;
      line-height: 28px;
      margin-bottom: 15px;
   }
   .radio-design {
      display: block;
      position: relative;
      padding-left: 0px;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      margin-bottom: 7px;
   }
   .radio-design input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      z-index: 9;
      width: 100%;
      height: 100%;
   }
   .sub-categori .left-area .filter-result-area .body-area .price-range-block {
      text-align: center;
      margin-top: 34px;
   }
   .price-range-block #slider-range {
      margin-bottom: 21px;
   }
   .ui-widget.ui-widget-content {
      border: none;
      border-radius: 0px;
      background: #d2d2d2;
   }
   .ui-slider-horizontal .ui-slider-range {
      top: 0;
      height: 100%;
   }
   .ui-slider .ui-slider-range {
      position: absolute;
      z-index: 1;
      font-size: 0.7em;
      display: block;
      border: 0;
      background-position: 0 0;
   }
   .radio-design .checkmark {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      display: inline-block;
      position: absolute;
      border: 1px solid rgba(0, 0, 0, 0.2);
      top: -2px;
   }
   .radio-design input:checked ~ .checkmark::after {
      width: 80%;
      height: 80%;
   }
   .sliderText {
      margin-bottom: 30px;
      border-bottom: 2px solid #c48272;
      padding: 10px 0 10px 0px;
      font-weight: bold;
   }
   .ui-slider-horizontal {
      height: 5px;
   }
   .ui-slider-horizontal {
      margin-bottom: 15px;
   }
   .ui-widget-header {
      background: #c48272;
   }
   .price-range-search {
      width: 70px;
      background-color: #f9f9f9;
      border: 1px solid #6e6666;
      display: inline-block;
      height: 30px;
      margin-bottom: 20px;
      font-size: 16px;
   }
   .price-range-field {
      width: 100px;
      background-color: none;
      border: 1px solid rgba(0, 0, 0, 0.15);
      color: black;
      height: 30px;
      text-align: center;
   }
   .search-results-block {
      position: relative;
      display: block;
      clear: both;
   }
   .price-range-block #slider-range {
      margin-bottom: 21px;
   }
   button.filter-btn.btn.btn-primary {
      margin-left: 24%;
   }
   .ui-slider-horizontal .ui-slider-handle {
      top: -7px;
      margin-left: -0.6em;
   }
   .ui-slider .ui-slider-handle {
      position: absolute;
      z-index: 2;
      width: 18px;
      height: 18px;
      background: #c48272;
      border-radius: 50%;
      cursor: default;
      -ms-touch-action: none;
      touch-action: none;
      border: 3px solid #fff;
      -webkit-box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.25);
      box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.25);
   }
   .ui-slider .ui-slider-handle:focus {
      outline: 0px;
   }
   .ui-widget.ui-widget-content {
      border: none;
      border-radius: 0px;
      background: #d2d2d2;
   }
   .radio-design label {
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 0px;
      position: relative;
      top: -4px;
      left: 35px;
   }
   .radio-design label small {
      display: block;
   }
   .order-box .final-price {
      border-top: 1px solid rgba(0, 0, 0, 0.3);
      margin-top: 10px;
      padding-top: 5px;
      font-weight: 600;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
   }
   .wallet-price {
      margin-top: 10px;
      padding-top: 5px;
      font-weight: 600;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
   }
   .radio-design .checkmark::after {
      position: absolute;
      content: "";
      width: 0%;
      height: 0%;
      border-radius: 50%;
      top: 50%;
      left: 50%;
      z-index: 99;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      background: #c9030f;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   select.form-control,
   select {
      -webkit-appearance: none;
      -moz-appearance: none;
      background: url(../images/icon/chevron-down.png) calc(100% - 15px) 52%/8px
         no-repeat;
      padding: 5px 30px 5px 10px;
      cursor: pointer;
   }
   .form-boder .form-control {
      padding: 10px 15px;
   }
   textarea.form-control {
      height: auto;
   }
   select:focus {
      outline: none;
   }
   .product-slide-thumb .active img {
      background-color: var(--theme-light-color);
   }
   body {
      font-size: 16px;
      font-family: var(--theme-general-font);
      font-weight: 400;
   }
   header.fixed-top {
      position: static !important;
      animation: none;
   }
   header.nav-on-banner.fixed-top {
      position: absolute !important;
      animation: none;
   }
   header.fixed-top .header-sticky {
      position: fixed !important;
      top: -1px;
      right: 0;
      left: 0;
      z-index: 99;
      animation-duration: 1s;
      animation-name: menu-sticky;
      animation-timing-function: ease-in-out;
      margin: 0;
      box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2);
      border: none;
   }
   ul {
      list-style: none;
      margin: 0;
      padding: 0;
   }
   img {
      max-width: 100%;
   }
   .d-ruby {
      display: ruby !important;
   }
   sup {
      left: 2px;
      top: -5px;
   }
   .placeholder-white::placeholder,
   .placeholder-white {
      color: var(--theme-white-color) !important;
   }
   select,
   select option,
   select.form-control,
   select.form-control option,
   input::placeholder,
   input.form-control::placeholder {
      font-family: var(--theme-extra-font);
      font-size: 15px !important;
      font-weight: 400 !important;
   }
   select.language.selectors.nice,
   select.currency.selectors.nice {
      border: none;
   }
   .extra2-font {
      font-family: var(--theme-extra2-font);
   }
   button {
      border-radius: 0;
      background-color: transparent;
      border: none;
   }
   a,
   a:hover {
      text-decoration: none !important;
   }
   p {
      line-height: 30px;
   }
   h1,
   .h1 {
      font-size: 48px;
      font-weight: 500;
      font-family: var(--theme-highlight-font);
   }
   h2,
   .h2 {
      font-size: 36px;
      font-weight: 500;
      font-family: var(--theme-highlight-font);
   }
   h3,
   .h3 {
      font-size: 30px;
      font-weight: 500;
      font-family: var(--theme-highlight-font);
   }
   h4,
   .h4 {
      font-size: 24px;
      font-weight: 500;
      font-family: var(--theme-highlight-font);
   }
   h5,
   .h5 {
      font-size: 18px;
      font-weight: 500;
      font-family: var(--theme-highlight-font);
      line-height: inherit;
   }
   h6,
   .h6 {
      font-size: 15px;
      font-weight: 500;
      font-family: var(--theme-highlight-font);
      line-height: inherit;
   }
   .full-row {
      padding-top: 70px;
      padding-bottom: 70px;
   }
   .line-height-40 {
      line-height: 40px;
   }
   .z-index-1 {
      z-index: 1;
   }
   .z-index-9 {
      z-index: 9;
   }
   .font-general {
      font-size: 15px !important;
   }
   .font-twelve {
      font-size: 12px !important;
   }
   .font-fifteen {
      font-size: 15px !important;
   }
   .font-sixteen {
      font-size: 16px !important;
   }
   .font-seventeen {
      font-size: 17px !important;
   }
   .font-400 {
      font-weight: 400 !important;
   }
   .font-700 {
      font-weight: 700 !important;
   }
   .btn {
      font-size: 14px;
      font-weight: 400;
   }
   .btn.two-corner-round {
      border-radius: 0 15px !important;
   }
   .btn-light {
      background-color: var(--theme-light-color);
      border-color: var(--theme-light-color);
   }
   .btn-light:hover {
      background-color: var(--theme-light-color);
      border-color: var(--theme-light-color);
   }
   .btn-outline-primary {
      border: 1px solid var(--theme-primary-color);
      color: var(--theme-primary-color);
   }
   .btn-outline-primary:hover {
      background-color: var(--theme-primary-color);
      border-color: var(--theme-primary-color);
      color: var(--theme-white-color);
   }
   .btn-outline-secondary {
      border: 1px solid var(--theme-secondary-color);
      color: var(--theme-secondary-color);
   }
   .btn-outline-secondary:hover {
      background-color: var(--theme-secondary-color);
      border-color: var(--theme-secondary-color);
      color: var(--theme-white-color);
   }
   [class*="btn-link"] {
      font-size: 15px;
      color: var(--theme-dark-color);
      display: table;
      position: relative;
   }
   .btn-link-left-line,
   .btn-link-right-line {
      font-size: 15px;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 2px;
   }
   .btn-link-left-line {
      padding-left: 50px;
   }
   .btn-link-right-line {
      padding-right: 50px;
   }
   .btn-link-down-line::after {
      position: absolute;
      content: "";
      top: 100%;
      left: 0;
      width: 100%;
      height: 2px;
      background-color: var(--theme-secondary-color);
   }
   .btn-link-down-line.text-dark::after {
      background-color: var(--theme-dark-color);
   }
   .btn-link-right-line::after,
   .btn-link-left-line::after {
      position: absolute;
      content: "";
      width: 40px;
      top: 50%;
      height: 2px;
      background-color: var(--theme-secondary-color);
   }
   .btn-link-left-line::after {
      left: 0;
   }
   .btn-link-right-line::after {
      right: 0;
   }
   .btn-link-down-line:hover {
      color: var(--theme-primary-color) !important;
   }
   .btn-link-down-line:hover::after {
      width: 70%;
      background-color: var(--theme-primary-color);
   }
   .btn-link-down-line.text-white::after {
      background-color: var(--theme-white-color);
   }
   .btn-extra1 {
      background-color: var(--theme-extra1-color);
      color: var(--theme-dark-color) !important;
   }
   .font-small {
      font-size: 13px !important;
   }
   .list-style-circle {
      list-style-type: circle;
      list-style-position: inside;
   }
   .list-style-circle li {
      font-weight: 500;
      line-height: 30px;
   }
   .media-icon-secondary a:hover {
      color: var(--theme-primary-color) !important;
   }
   .text-extra {
      color: var(--theme-extra-color) !important;
   }
   .text-extra1 {
      color: var(--theme-extra1-color) !important;
   }
   .text-extra2 {
      color: var(--theme-extra2-color) !important;
   }
   .hover-text-dark:hover {
      color: var(--theme-dark-color) !important;
   }
   .bg-extra {
      background-color: var(--theme-extra-color) !important;
   }
   .bg-extra1 {
      background-color: var(--theme-extra1-color) !important;
   }
   .bg-extra2 {
      background-color: var(--theme-extra2-color) !important;
   }
   .zoomWindow {
      background-color: var(--theme-light-color);
   }
   .list-ml-30 li + li {
      margin-left: 30px;
   }
   .list-ml-5 li + li {
      margin-left: 5px;
   }
   .list-mt-10 li + li {
      margin-top: 10px;
   }
   [class*="after-right-border-"]::after {
      content: "";
      top: 50%;
      right: 0;
      width: 1px;
      height: 60%;
      position: absolute;
      transform: translateY(-50%);
   }
   .after-right-border-extra1::after {
      background-color: var(--theme-extra1-color);
   }
   [class*="after-border-"] .owl-item .product-wrapper::after,
   [class*="after-border-"] .product-wrapper::after {
      content: "";
      width: 1px;
      display: block;
      position: absolute;
      z-index: 10;
      background-color: var(--theme-gray-color);
   }
   .after-border-one .owl-item .product-wrapper::after,
   .after-border-one .product-wrapper::after {
      top: 50%;
      height: 70%;
      transform: translateY(-50%);
   }
   [class*="after-border-"] {
      position: relative;
   }
   .after-border-two::after {
      content: "";
      position: absolute;
      width: 1px;
      height: 100%;
      background: #fff;
      left: 0;
      top: 0;
   }
   .after-border-two .owl-item .product-wrapper::after,
   .after-border-two .product-wrapper::after {
      height: 100%;
      top: 0;
   }
   [class*="e-hover-shadow"][class*="after-border-"]
      .owl-item
      .product-wrapper::after {
      right: -10px;
   }
   [class*="e-hover-shadow"][class*="after-border-"]
      .owl-item
      .product-wrapper:hover::after {
      display: none;
   }
   [class*="after-border-"].e-bg-white::after {
      width: 1px;
      height: 100%;
      content: "";
      position: absolute;
      left: 0px;
      top: 0;
      background-color: var(--theme-white-color);
      z-index: 99;
   }
   .owl-carousel.after-border-one.e-bg-white::after {
      right: 0;
   }
   [class*="right-line-"] {
      position: relative;
      height: 100%;
   }
   [class*="right-line-"]::after {
      width: 1px;
      position: absolute;
      top: 0;
      right: 0;
      height: 100%;
      content: "";
      background-color: #d1d1d1;
   }
   .col:last-child [class*="right-line-"]::after {
      display: none;
   }
   [class*="primary-right-line-"]::after {
      background-color: var(--theme-primary-color);
   }
   [class*="gray-right-line-"]::after {
      background-color: #d1d1d1;
   }
   .border-mb-one {
      padding-bottom: 15px;
      margin-bottom: 15px;
      border-bottom: 1px solid #dee2e6;
   }
   .col:last-child .border-mb-one {
      margin-bottom: 0;
      padding-bottom: 0;
      border: none;
   }
   img.nav-logo {
      min-width: 124px;
   }
   .sign-in {
      font-size: 13px;
      line-height: 30px;
      font-weight: 400;
   }
   .box-80px {
      width: 80px;
      height: 80px;
   }
   .w-30 {
      width: 30%;
   }
   .w-40 {
      width: 40%;
   }
   .flat-mini::before {
      position: relative;
      top: 3px;
   }
   .flat-small::before {
      position: relative;
      top: 5px;
   }
   .flat-medium::before {
      position: relative;
      top: 5px;
   }
   .sale-upto {
      letter-spacing: 3px;
      margin: 20px 0 30px;
   }
   .sale-upto span:last-child {
      background-color: var(--theme-primary-color);
      color: var(--theme-white-color);
      padding: 2px 10px;
   }
   .custom-class-133 .sale-upto {
      letter-spacing: 0;
      margin: 0 0 20px;
   }
   .custom-class-133 .sale-upto span:last-child {
      background-color: transparent;
      color: var(--theme-primary-color);
      padding: 0;
   }
   .border-general {
      border-color: var(--theme-general-color) !important;
   }
   /* Cart popup Style */
   .my-account-popup,
   .cart-popup {
      position: absolute;
      z-index: 999;
      background-color: #fff;
      box-shadow: 0 5px 5px 0 rgba(50, 50, 50, 0.2);
      width: 400px;
      right: 0;
      top: calc(100% + 10px);
      border-radius: 0;
      padding: 15px;
      opacity: 0;
      visibility: hidden;
   }
   .cart-popup {
      width: 370px;
   }
   .my-account-dropdown.show .my-account-popup,
   [class*="header-cart-"].show .cart-popup {
      opacity: 1;
      visibility: visible;
      top: 100%;
      border: 1px solid var(--theme-light-color);
   }
   .cart-popup .mini-cart-item {
      position: relative;
      padding-right: 20px;
   }
   .cart-popup .mini-cart-item:last-child {
      margin-bottom: 0;
   }
   .cart-popup .mini-cart-item .remove {
      position: absolute;
      right: 0;
      top: 2px;
      color: var(--theme-dark-color);
      font-size: 13px;
   }
   .cart-popup .mini-cart-item .product-image {
      width: 100px;
      float: left;
      margin-right: 20px;
   }
   .cart-popup .mini-cart-item .product-name {
      margin-bottom: 10px;
      color: var(--theme-secondary-color);
      font-size: 15px;
   }
   .cart-popup .mini-cart-item .rating-wrap a {
      display: flex;
   }
   .cart-popup .mini-cart-item .rating-wrap a:hover {
      color: var(--theme-general-color);
   }
   .cart-popup .mini-cart-item .rating-wrap a i {
      margin-right: 5px;
   }
   .cart-popup .mini-cart-item span:first-child {
      margin-right: 5px;
      font-size: 15px;
      font-weight: 500;
   }
   .cart-popup .mini-cart-item span:last-child {
      font-size: 14px;
   }
   .cart-popup .total-cart {
      display: flex;
      font-size: 20px;
      color: var(--theme-secondary-color);
      font-weight: 500;
      margin: 20px 0;
   }
   .cart-popup .total-cart .title {
      margin-right: 10px;
   }
   .cart-popup .buttons {
      display: flex;
      flex-wrap: wrap;
   }
   .cart-popup .buttons .btn {
      line-height: 40px;
      text-transform: uppercase;
      font-size: 13px;
      font-weight: 400;
      margin: 3px 0;
   }
   .cart-popup .buttons .btn:first-child {
      margin-right: 10px;
   }
   /* My Account Popup */
   .my-account-popup {
      display: table;
      width: max-content;
      line-height: 30px;
      padding: 10px 20px;
   }
   .my-account-popup li {
      border: 0 !important;
   }
   .ecommerce-header .top-header .my-account-popup li a {
      color: var(--theme-general-color) !important;
   }
   .my-account-popup li a:hover {
      color: var(--theme-primary-color);
   }
   /*==================================================================== Icons Style Start ====================================================================*/
   [class*="unicode-icon"] {
      width: 16px;
      height: 16px;
   }
   .unicode-icon-2x {
      width: 32px;
      height: 32px;
   }
   .unicode-icon-3x {
      width: 48px;
      height: 48px;
   }
   .unicode-icon-4x {
      width: 64px;
      height: 64px;
   }
   .col .simple-icon-thumb {
      position: relative;
   }
   .col .simple-icon-thumb .icon-shape {
      position: absolute;
      width: 160px;
      height: 40px;
      top: 50px;
      right: 25px;
   }
   .col:last-child .simple-icon-thumb .icon-shape {
      display: none;
   }
   /* Category Icon Thumb */
   .category-icon-thumb {
      display: flex;
      flex-direction: column;
      padding: 20px;
      align-items: center;
   }
   .category-icon-thumb img {
      width: 32px;
   }
   .category-icon-thumb a {
      color: var(--theme-dark-color);
      text-transform: uppercase;
      font-size: 14px;
      margin-top: 10px;
   }
   .img-list-one .content {
      width: 80%;
   }
   /*==================================================================== Time Counting Style Start ====================================================================*/
   .time-count ul {
      display: flex;
      align-items: center;
   }
   .time-count.flex-between ul {
      justify-content: space-between;
   }
   .time-count.flex-around ul {
      justify-content: space-around;
   }
   .time-count li span:first-child {
      color: var(--theme-dark-color);
      font-weight: 500;
      font-size: 15px;
      width: 45px;
      height: 45px;
      line-height: 45px;
      border-radius: 100%;
      display: block;
   }
   .time-count li span:last-child {
      font-weight: 400;
      color: var(--theme-general-color);
      margin-top: 10px;
      display: block;
      text-align: center;
   }
   .type-4.time-count li span:first-child {
      color: var(--theme-white-color);
      width: auto;
   }
   .type-4.time-count li span:last-child {
      color: var(--theme-white-color);
      width: auto;
   }
   .custom-class-119 .time-count li span:last-child {
      color: var(--theme-white-color) !important;
      font-weight: 400;
      text-transform: uppercase;
   }
   .type-two .time-count li span:last-child,
   .type-two .time-count li:last-child span:first-child:after {
      display: none;
   }
   .type-two .time-count li span:first-child {
      background-color: transparent;
      position: relative;
      line-height: inherit;
      width: auto;
      height: auto;
      padding-right: 16px;
   }
   .type-two .time-count li span:first-child:after {
      position: absolute;
      content: ":";
      top: calc(50% - 2px);
      right: 6px;
      transform: translateY(-50%);
      color: var(--theme-dark-color);
   }
   .deal-out-time {
      display: flex;
      align-items: center;
   }
   .deal-out-time .time-count.type-three ul li:first-child {
      display: none;
   }
   .deal-out-time .time-count.type-three ul li {
      display: flex;
      align-items: center;
      position: relative;
      padding: 0px 10px;
   }
   .deal-out-time .time-count.type-three ul li::before {
      position: absolute;
      content: ":";
      top: 50%;
      transform: translateY(-50%);
      right: 0;
      color: var(--theme-white-color);
   }
   .deal-out-time .time-count.type-three ul li:last-child:before {
      display: none;
   }
   .deal-out-time .time-count.type-three ul li span {
      color: var(--theme-white-color) !important;
      margin: 0;
      padding: 0;
      line-height: 18px;
   }
   .deal-out-time .time-count.type-three ul li span:first-child {
      width: auto;
      height: auto;
      background-color: transparent;
      margin-right: 5px;
   }
   .time-box ul {
      flex-wrap: wrap !important;
   }
   .deal {
      background-color: rgb(223, 245, 250);
      padding: 50px 0px;
   }
   /* 
   .time-count.time-box li {
      border: 2px solid var(--theme-secondary-color);
      width: 80px;
      height: 80px;
      text-align: center;
      padding: 10px;
   }
   .time-box li span {
      display: block;
      text-align: center;
      color: var(--theme-secondary-color);
   }
   .time-count.time-box li span:first-child {
      font-size: 20px;
      font-weight: 400;
      margin: 0 auto;
      line-height: initial;
      height: auto;
      color: var(--theme-secondary-color);
   }
   .time-count.time-box li span:last-child {
      font-size: 15px;
      font-weight: 500;
      text-transform: uppercase;
      margin-top: -8px;
      color: var(--theme-secondary-color);
   } */

   .time-box ul {
      flex-wrap: wrap !important;
   }

   .time-count.time-box li {
      border: 2px solid var(--theme-secondary-color);
      width: 80px;
      height: 80px;
      text-align: center;
      padding: 5px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
   }

   .time-box li span {
      display: block;
      text-align: center;
      color: var(--theme-secondary-color);
   }

   .time-count.time-box li span:first-child {
      font-size: 24px;
      font-weight: 400;
      margin: 0 auto;
      line-height: initial;
      height: auto;
      color: var(--theme-secondary-color);
   }

   .time-count.time-box li span:last-child {
      font-size: 15px;
      font-weight: 500;
      text-transform: uppercase;
      margin-top: 0;
      color: var(--theme-secondary-color);
   }
   /*==================================================================== Form Style Start ====================================================================*/
   .form-control,
   .form-control:focus {
      margin-bottom: 0;

      box-shadow: none;
   }
   input.text-white::placeholder {
      color: var(--theme-white-color) !important;
   }
   input.text-dark::placeholder {
      color: var(--theme-dark-color) !important;
   }
   [class*="product-search-"] .form-inline.search-pill-shape {
      background-color: var(--theme-light-color);
      border: 0;
   }
   [class*="product-search-"] .search-line-shape.form-inline {
      border: 0;
      padding: 0;
      border-bottom: 1px solid var(--theme-dark-color);
   }
   [class*="product-search-"] .search-line-shape.form-inline input.search-field {
      padding-left: 25px;
      font-size: 16px !important;
   }
   [class*="product-search-"]
      .search-line-shape.form-inline
      input.search-field::placeholder {
      color: var(--theme-secondary-color);
      font-size: 16px !important;
   }
   [class*="product-search-"] .search-line-shape.form-inline button {
      background-color: transparent;
      color: var(--theme-dark-color) !important;
      left: 0;
      padding: 0;
      right: inherit;
   }
   [class*="product-search-"] {
      position: relative;
   }
   [class*="product-search-"] .form-inline.search-box-shape {
      border-radius: 0;
   }
   [class*="product-search-"] .form-inline.search-round-shape {
      border-radius: 5px;
   }
   [class*="product-search-"] .form-inline.search-pill-shape {
      border-radius: 50rem;
   }
   [class*="product-search-"] .form-inline {
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      padding-right: 53px;
   }
   .form-inline input.search-field {
      padding: 0 20px;
      line-height: 50px !important;
      height: 50px;
   }
   .product-search-two .form-inline input.search-field {
      order: 2 !important;
      border-radius: 0;
   }
   .search-box-shape input.search-field {
      border-radius: 0 !important;
   }
   .product-search-one .search-round-shape input.search-field {
      border-radius: 5px 0 0 5px !important;
   }
   .product-search-one .search-pill-shape input.form-control {
      border-radius: 50rem 0 0 50rem !important;
   }
   .form-inline select {
      border-radius: 0;
   }
   select#category_select {
      border: none;
   }
   .product-search-two .select-appearance-none {
      order: 1 !important;
   }
   .product-search-two .search-box-shape .select-appearance-none select {
      border-radius: 0 !important;
   }
   .product-search-two .search-round-shape .select-appearance-none select {
      border-radius: 5px 0 0 5px !important;
   }
   .product-search-two .search-pill-shape .select-appearance-none select {
      border-radius: 50rem 0 0 50rem !important;
   }
   .form-inline select::-ms-expand {
      display: none;
   }
   [class*="product-search-"] .select-appearance-none {
      position: relative;
      min-width: 140px;
   }
   [class*="product-search-"] .select-appearance-none::before {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 1px;
      height: 60%;
      content: "";
      background-color: #dcd9d9;
   }
   .product-search-one .select-appearance-none::before {
      left: 0;
   }
   .product-search-two .select-appearance-none::before {
      right: 0;
   }
   [class*="product-search-"] .form-inline button {
      background-color: #bd2222;
      padding: 0 20px;
      position: absolute;
      top: -1px;
      right: -2px;
      height: calc(100% + 1px);
   }
   .product-search-two .form-inline button {
      order: 3 !important;
   }
   .search-box-shape button {
      border-radius: 0 !important;
   }
   .search-round-shape button {
      border-radius: 0 5px 5px 0 !important;
   }
   .search-pill-shape button,
   .rounded-right-pill {
      border-radius: 0 50rem 50rem 0 !important;
   }
   .subscribe-form .form-control {
      padding: 10px 120px 10px 20px;
   }
   .margin-top-minus-one {
      margin-top: -125px;
      position: relative;
   }
   .subscribe-form-2 form {
      width: 100%;
   }
   .subscribe-form-2 .mc4wp-form-fields,
   .subscribe-form-2 {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
   }
   .subscribe-form-2 .mc4wp-form-fields input,
   .subscribe-form-2 input {
      border: 0;
      border-bottom: 1px solid var(--theme-secondary-color);
      border-radius: 0 !important;
      padding: 10px 0;
      width: auto;
      flex-grow: 1;
   }
   .subscribe-form-2 .mc4wp-form-fields button,
   .subscribe-form-2 button {
      border-bottom: 1px solid var(--theme-secondary-color);
      border-radius: 0 !important;
      margin-left: 20px;
      padding: 0;
   }
   /* ==================================================================== Popular Categories in Electronic Style Start =====================================================================*/
   .product-category {
      display: flex;
   }
   .product-category .caregory-image {
      margin-right: 30px;
   }
   .product-category .caregory-image img {
      width: 100px;
   }
   .product-category .popular-categories-menu li {
      line-height: 28px;
   }
   .product-category .popular-categories-menu li a {
      color: var(--theme-general-color);
   }
   .product-category .popular-categories-menu h4 > a {
      color: var(--theme-secondary-color);
   }
   .product-category .popular-categories-menu h4 > a:hover,
   .product-category .popular-categories-menu li a:hover {
      color: var(--theme-primary-color);
   }
   .product-category .btn-link {
      color: var(--theme-secondary-color);
      margin-top: 20px;
   }
   /*==================================================================== Category's Sub Categories in fashion store Style Start ====================================================================*/
   ul.sub-categories li a {
      font-weight: 400;
      color: var(--theme-general-color);
      padding: 5px 0;
      display: block;
   }
   ul.sub-categories li a:hover {
      color: var(--theme-primary-color);
   }
   /*==================================================================== Categroy List in Grocery Store Style Start =====================================================================*/
   .categroy-list ul {
      display: flex;
      flex-wrap: wrap;
   }
   .categroy-list ul li + li {
      position: relative;
      padding-left: 10px;
   }
   .categroy-list ul li + li::after {
      content: "|";
      position: absolute;
      left: 3px;
      top: 0;
   }
   .categroy-list ul li a {
      color: var(--theme-general-color);
   }
   .categroy-list ul li a:hover {
      color: var(--theme-primary-color);
   }
   /*==================================================================== Furniture Category =====================================================================*/
   .category-inner .categories-menu {
      position: static;
   }
   /*==================================================================== Side push nav and category Style Start =====================================================================*/
   .nav-leftpush-overlay .categories-menu {
      position: inherit;
   }
   /*Hide scrollbar for Chrome, Safari and Opera*/
   .navbar-slide-push .push-navbar::-webkit-scrollbar,
   .navbar-slide-push .categories-menu::-webkit-scrollbar {
      display: none;
   }
   /*Hide scrollbar for IE, Edge and Firefox*/
   .navbar-slide-push .push-navbar,
   .navbar-slide-push .categories-menu {
      -ms-overflow-style: none;
      /*IE and Edge*/
      scrollbar-width: none;
      /*Firefox*/
      height: 100vh;
      display: block;
   }
   .categories-menu {
      position: absolute;
      top: 100%;
      z-index: 90;
      width: 100%;
      left: 0;
      display: table;
   }
   .categories-menu ul.menu {
      padding: 20px 0;
      position: relative;
   }
   .menu-and-category ul.navbar-nav > li,
   .categories-menu > ul.menu > li {
      padding: 0 20px;
   }
   .navbar-slide-push .navbar-nav .nav-item .nav-link,
   .categories-menu ul.menu li a {
      border-bottom: 1px solid #ddd !important;
   }
   .navbar-slide-push .navbar-nav .nav-item:last-child .nav-link,
   .categories-menu ul.menu li:last-child a {
      border-bottom: none !important;
   }
   .categories-menu ul.menu li.highlight a {
      color: var(--theme-secondary-color);
   }
   .categories-menu .menu-item-has-children > a::after {
      position: absolute;
      content: "\f054";
      font-weight: 900;
      font-family: "Font Awesome 5 Free";
      right: 0;
      top: 50%;
      transform: translateY(-50%);
      font-size: 10px;
      color: var(--theme-general-color);
   }
   .categories-menu .menu-item-has-children:hover::after {
      color: var(--theme-primary-color);
   }
   .navbar-slide-push .navbar-nav .nav-item .nav-link,
   .categories-menu ul.menu li a {
      font-family: var(--theme-general-font);
      color: var(--theme-general-color);
      font-size: 15px;
      font-weight: 400;
      display: block;
      padding: 8px 0;
      line-height: 24px;
   }
   .categories-menu ul.menu li a:hover {
      color: var(--theme-primary-color);
   }
   #page_wrapper.overlay::before {
      background-color: var(--theme-dark-opacity-color);
      z-index: 50;
   }
   .nav-leftpush-overlay .navbar-expand-lg .navbar-slide-push {
      padding: 0;
   }
   .slide-nav-close {
      position: inherit;
      top: inherit;
      left: inherit;
   }
   #menu-and-category .nav-item,
   #menu-and-category2 .nav-item {
      width: 50%;
   }
   #menu-and-category .nav-link,
   #menu-and-category2 .nav-link {
      border-radius: 0;
      text-transform: uppercase;
      font-weight: 500;
      text-align: center;
      font-size: 14px;
   }
   #menu-and-category .nav-link.active,
   #menu-and-category2 .nav-link.active {
      background-color: var(--theme-primary-color);
      color: var(--theme-white-color) !important;
   }
   .nav-leftpush-overlay .navbar-expand-lg .navbar-slide-push {
      background-color: var(--theme-white-color);
   }
   .categories-menu-wrapper > i {
      padding: 10px;
      background: var(--theme-dark-color);
      color: var(--theme-primary-color);
   }
   .dropdown-item {
      font-size: 14px;
      font-weight: 500;
   }
   .category-hover-open .categories-menu {
      visibility: hidden;
      opacity: 0;
      -webkit-transition: -webkit-transform 0.3s ease, opacity 0.3s ease,
         visibility 0.3s ease;
      transition: transform 0.3s ease, opacity 0.3s ease, visibility 0.3s ease;
      transform: translateY(20px);
      -ms-transform: translateY(20px);
   }
   .category-hover-open:hover .categories-menu {
      visibility: visible;
      opacity: 1;
      transform: translateY(0);
      -ms-transform: translateY(0);
   }
   .category-title-wrapper {
      cursor: pointer;
   }
   /*==================================================================== Mega Menu Navigation Style Start ====================================================================*/
   .menu-and-category .dropdown.mega-dropdown {
      position: relative;
   }
   .categories-menu ul.menu li a {
      position: relative;
   }
   .categories-menu .unicode-megamenu-wrapper {
      background-color: #ffffff;
      border-top: 2px solid;
      border-color: var(--theme-primary-color);
   }
   .categories-menu .unicode-megamenu-wrapper {
      background-color: #fff;
      left: 0;
      opacity: 0;
      position: absolute;
      top: 100%;
      visibility: hidden;
      z-index: 98;
      -webkit-transition: -webkit-transform 0.3s ease, opacity 0.3s ease,
         visibility 0.3s ease;
      transition: transform 0.3s ease, opacity 0.3s ease, visibility 0.3s ease;
      -webkit-transform: translateX(20px);
      transform: translateX(20px);
   }
   .categories-menu .unicode-megamenu-wrapper {
      left: 100%;
      top: 0;
   }
   .categories-menu ul.menu > li:hover .unicode-megamenu-wrapper {
      opacity: 1;
      visibility: visible;
      -webkit-transform: translateX(0);
      transform: translateX(0);
   }
   .categories-menu .unicode-megamenu-item-full-width .unicode-megamenu-holder {
      width: 848px !important;
   }
   .unicode-megamenu-list .nav-link {
      padding: 6px 5px;
   }
   .unicode-megamenu-holder {
      padding: 1.5em;
   }
   .categories-menu ul.menu .unicode-megamenu-list > li > a {
      font-weight: 600;
      font-size: 15px;
      color: var(--theme-general-color);
      text-transform: uppercase;
      letter-spacing: 1px;
      position: relative;
   }
   .categories-menu ul.menu .unicode-megamenu-list > li > a:after {
      content: "";
      position: absolute;
      bottom: 5px;
      width: 50px;
      height: 1px;
      left: 0;
      background-color: var(--theme-primary-color);
   }
   /*==================================================================== Header Section =====================================================================*/
   header.fixed-top {
      z-index: 999999;
   }
   .ecommerce-header.fixed-top .header-sticky {
      display: block;
   }
   @media screen and (min-width: 992px) {
      .ecommerce-header .header-sticky {
         display: none;
      }
   }
   /* ==================================================================== Top Header Section Style Start =====================================================================*/
   .ecommerce-header .top-links li {
      position: relative;
   }
   .border-bottom-one {
      border-bottom-color: #20277c !important;
   }
   .border-bottom-two {
      border-bottom-color: #eaeaed !important;
   }
   /* ==================================================================== Quick View Modal Style Start =====================================================================*/
   .quick-view-modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1040;
      width: 100%;
      height: 100%;
      overflow: hidden scroll !important;
      z-index: 9991;
   }
   .view-close {
      cursor: pointer;
      position: absolute;
      right: 15px;
      top: 15px;
      width: 20px;
      height: 20px;
      background-color: var(--theme-extra-color);
      color: var(--theme-white-color);
      line-height: 15px;
      text-align: center;
      border-radius: 50%;
      font-weight: 700;
      z-index: 9;
   }
   .view-close i:before {
      font-size: 7px;
   }
   .property-block {
      position: relative;
      overflow: hidden;
   }
   .property-block .cata {
      left: 15px;
      top: 15px;
      z-index: 9;
   }
   .quick-meta {
      right: 15px;
      bottom: 15px;
   }
   .quick-meta li {
      width: 42px;
      height: 42px;
      border-radius: 5px;
      background-color: var(--theme-secondary-opacity-color);
      display: inline-block;
      margin: 2px;
      text-align: center;
   }
   .quick-meta li a {
      padding: 11px;
      display: block;
   }
   .product-status {
      line-height: 25px;
      height: 25px;
   }
   .rounded {
      border-radius: 0.3rem !important;
   }
   /* ==================================================================== Main Header Section Style Start =====================================================================*/
   [class*="header-cart-"] .cart {
      display: flex;
      align-items: center;
   }
   .wishlist-view span.header-wishlist-count,
   .refresh-view span.header-compare-count,
   [class*="header-cart-"] .cart .cart-icon .header-cart-count {
      position: absolute;
      width: 24px;
      height: 24px;
      background-color: #bd2222;
      color: var(--theme-white-color);
      border-radius: 50%;
      text-align: center;
      font-size: 11px;
      line-height: 25px;
      top: -4px;
      left: -4px;
   }
   [class*="header-cart-"] .cart .cart-wrap {
      display: flex;
      flex-direction: column;
      color: var(--theme-dark-color);
   }
   .header-cart-7 .cart .cart-wrap {
      flex-direction: row;
   }
   .header-cart-7 .cart .cart-wrap .header-cart-count {
      margin-right: 5px;
   }
   [class*="header-cart-"] .cart .cart-wrap .cart-text,
   [class*="header-cart-"] .cart .cart-wrap .header-cart-count,
   [class*="header-cart-"] .cart .cart-wrap .woocommerce-Price-amount {
      font-size: 13px;
   }
   [class*="header-cart-"] .cart .cart-wrap .woocommerce-Price-amount {
      font-size: 13px;
      font-weight: 600;
   }
   .header-cart-3 .cart .cart-icon .header-cart-count,
   .header-cart-6 .cart .cart-icon .header-cart-count,
   .header-cart-7 .cart .cart-icon .header-cart-count,
   .header-cart-1 .cart .cart-wrap,
   .header-cart-4 .cart .cart-wrap,
   .header-cart-2 .cart .cart-wrap .header-cart-count,
   .header-cart-5 .cart .cart-wrap .header-cart-count,
   .header-cart-3 .cart .cart-wrap .cart-text,
   .header-cart-6 .cart .cart-wrap .cart-text,
   .header-cart-7 .cart .cart-wrap .cart-text,
   .header-cart-3 .cart .cart-wrap .woocommerce-Price-amount,
   .header-cart-5 .cart .cart-wrap .woocommerce-Price-amount {
      display: none;
   }
   .header-cart-3 .cart .cart-wrap .header-cart-count {
      font-size: 14px;
      font-weight: 600;
   }
   .header-cart-5 .cart .cart-wrap .cart-text {
      text-transform: uppercase;
      font-weight: 600;
   }
   .navbar-nav .tooltip {
      background-color: var(--theme-primary-color);
      color: var(--theme-white-color);
      top: -5px;
   }
   .search-view .flat-mini::before,
   .wishlist-view .flat-mini::before,
   .refresh-view .flat-mini::before,
   [class*="header-cart-"] .flat-mini::before {
      font-size: 17px;
      line-height: 17px;
   }
   .navbar-nav .tooltip::after {
      border-top: 5px solid var(--theme-primary-color);
   }
   .main-nav .navbar {
      position: static;
   }
   .navbar .navbar-nav li > ul.dropdown-menu.mega-dropdown-menu {
      width: calc(100% - 20px);
      left: 10px;
   }
   .navbar
      .navbar-slide-push
      .navbar-nav
      li
      > ul.dropdown-menu.mega-dropdown-menu {
      left: 100%;
      width: 100%;
   }
   .nav-extra1-hover .navbar-nav .nav-link:hover {
      color: var(--theme-extra1-color) !important;
   }
   .navbar-expand-lg.nav-border-active .navbar-nav .nav-item {
      margin: 0;
   }
   .navbar .navbar-nav li > ul.dropdown-menu li {
      margin: 2px 0;
   }
   .navbar .navbar-nav li > ul.dropdown-menu li.active > a,
   .dropdown-item:focus
   {
      color: var(--theme-secondary-color) !important;
      
   }
   .dropdown-item:hover {
      color: var(--theme-secondary-color) !important;
      background-color: var(--theme-light-color) !important;
   }
   .margin-right-1 > div:not(:last-child) {
      margin-right: 10px;
   }
   .margin-right-3 > div:not(:last-child) {
      margin-right: 30px;
   }
   .header-cart-1 .cart-icon,
   .header-cart-6 .cart-icon {
      background-color: var(--theme-light-color);
   }
   [class*="header-cart-"] .cart-icon,
   .search-view > a,
   .wishlist-view > a,
   .refresh-view > a,
   .sign-in > a {
      line-height: 50px;
      text-align: center;
      width: 50px;
      height: 50px;
      border-radius: 100%;
      color: var(--theme-dark-color);
      position: relative;
   }
   .top-header [class*="header-cart-"] .cart-icon,
   .search-view > a,
   .top-header .wishlist-view > a,
   .top-header .refresh-view > a,
   .top-header .sign-in > a {
      width: 30px;
      height: 30px;
   }
   [class*="header-cart-"] .cart-icon [class*="flaticon-"]:before,
   .search-view > a [class*="flaticon-"]:before,
   .wishlist-view > a [class*="flaticon-"]:before,
   .refresh-view > a [class*="flaticon-"]:before,
   .sign-in > a [class*="flaticon-"]:before {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      -o-transform: translate(-50%, -50%);
   }
   [class*="header-cart-"] .cart .cart-wrap .cart-text {
      font-weight: 500;
      margin-bottom: -4px;
   }
   .top-header [class*="header-cart-"] .cart-icon {
      width: 30px;
      height: 30px;
   }
   .header-cart-6 .header-cart-item-text {
      margin-bottom: -5px;
   }
   /*==================================================================== Slider banner part css Style Start =====================================================================*/
   .slider-banner {
      width: 380px;
   }
   .slide-title {
      font-size: 42px;
      line-height: 50px;
      font-family: var(--theme-highlight-font);
      color: var(--theme-dark-color);
      margin-bottom: 10px;
      font-weight: 600;
      text-transform: uppercase;
   }
   /*==================================================================== Optical Shop Index Style Start =====================================================================*/
   /* Glass Models Section Style Start */
   .glass-models .col:nth-child(2) {
      margin-top: 100px;
   }
   /* Limited Products Section Style Start */
   .limited-stock {
      padding: 150px 0;
   }
   .limited-stock .product-tag {
      font-size: 17px;
      font-weight: 500;
      text-transform: uppercase;
      color: var(--theme-general-color);
      margin-bottom: 15px;
      display: block;
      letter-spacing: 5px;
   }
   .limited-stock h2 {
      color: var(--theme-dark-color);
      line-height: 50px;
      margin-bottom: 40px;
   }
   /* ==================================================================== Extra Banner Style Start =====================================================================*/
   .banner-wrapper {
      position: relative;
      min-height: 100px;
   }
   .banner-wrapper.text-right .banner-content {
      text-align: right;
   }
   .banner-wrapper.text-right .banner-content > * {
      margin-right: auto;
      display: inline-block;
   }
   .banner-wrapper.text-center .banner-content {
      text-align: center;
   }
   .banner-wrapper.text-center .banner-content > * {
      margin: 0 auto;
      display: inline-block;
   }
   .banner-three.banner-wrapper {
      overflow: hidden;
      max-height: 300px;
   }
   .banner-wrapper .banner-image,
   .banner-wrapper .banner-image img {
      width: 100%;
   }
   .custom-class-101 .banner-content {
      top: 85%;
      transform: translateY(-100%);
      left: 40px;
   }
   .custom-class-102 .banner-content {
      top: 10%;
      transform: translate(-50%);
      left: 50%;
      text-align: center;
   }
   .custom-class-102 .banner-content .btn-border {
      margin-left: auto;
      margin-right: auto;
      color: var(--theme-secondary-color);
      text-transform: uppercase;
      font-size: 12px;
   }
   .custom-class-103 .banner-content {
      top: 85%;
      transform: translateY(-100%);
      left: auto;
      right: 40px;
      text-align: right;
   }
   .custom-class-104 .banner-content {
      top: 40px;
      left: 40px;
   }
   .custom-class-103 .banner-content .btn-link-down-line {
      margin-left: auto;
   }
   .custom-class-104 .banner-content .btn-link,
   .custom-class-105 .banner-content .btn-link {
      color: var(--theme-white-color);
      border-bottom-color: var(--theme-white-color);
   }
   .custom-class-105 .banner-content {
      text-align: center;
      width: 75% !important;
      height: 80%;
      border: 3px solid var(--theme-white-color);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
   }
   .custom-class-106 .banner-content {
      top: 5%;
      left: 9%;
      width: 75%;
   }
   .custom-class-107 .banner-content {
      left: 60px;
      width: 60%;
   }
   .custom-class-108 .banner-content {
      left: 50px;
   }
   .custom-class-115 {
      height: 100%;
      position: relative;
   }
   .custom-class-115 .content {
      padding: 50px;
      width: 75%;
      color: var(--theme-white-color);
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
   }
   .custom-class-116 .banner-content {
      width: 500px;
      color: var(--theme-white-color);
      text-align: center;
   }
   .btn-border,
   .btn-border:hover {
      border: 2px solid;
      border-color: var(--theme-dark-color);
      padding: 0 15px;
      line-height: 37px;
      display: table;
      color: var(--theme-dark-color);
   }
   .custom-class-117 .banner-content {
      text-align: center;
      width: 60%;
   }
   .custom-class-117 .banner-content a.price {
      font-family: var(--theme-highlight-font);
      color: var(--theme-white-color);
      font-size: 20px;
      font-weight: 600;
   }
   .custom-class-118 .banner-content {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
   }
   .custom-class-118 .banner-image {
      width: 90%;
      margin-left: auto;
   }
   .custom-class-118 .banner-content .product-tag {
      position: absolute;
      top: 165px;
      left: -160px;
      width: 350px;
      height: 23px;
      transform: rotate(90deg);
   }
   .custom-class-118 .banner-content .product-tag span {
      position: absolute;
      top: 0;
      left: 40px;
      color: var(--theme-general-color);
      font-size: 12px;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 3px;
   }
   .custom-class-118 .banner-content .product-tag span::after {
      content: "";
      position: absolute;
      width: 30px;
      height: 2px;
      top: 50%;
      left: -40px;
      background-color: var(--theme-general-color);
      transform: translateY(-50%);
   }
   .custom-class-118 .banner-content .content-bottom {
      position: absolute;
      bottom: 30px;
      left: 0;
   }
   .thumb-blog-simple .post-content .btn-link-down-line,
   .custom-class-118 .banner-content .content-bottom .btn-link-down-line {
      color: var(--theme-general-color);
      text-transform: uppercase;
      font-size: 13px;
      font-weight: 500;
      letter-spacing: 2px;
   }
   .thumb-blog-simple .post-content .btn-link-down-line::after,
   .custom-class-118 .banner-content .content-bottom .btn-link-down-line::after {
      background-color: var(--theme-general-color);
   }
   .thumb-blog-simple .post-content .btn-link-down-line:hover,
   .custom-class-118 .banner-content .content-bottom .btn-link-down-line:hover {
      color: var(--theme-primary-color);
   }
   .thumb-blog-simple .post-content .btn-link-down-line:hover::after,
   .custom-class-118
      .banner-content
      .content-bottom
      .btn-link-down-line:hover::after {
      background-color: var(--theme-primary-color);
   }
   .custom-class-109 .banner-content {
      left: 50px;
      width: 40%;
   }
   .banner-three .banner-content span {
      font-size: 16px;
      font-weight: 500;
   }
   .banner-three .banner-content a.btn-link {
      font-size: 16px;
      font-weight: 500;
      margin-top: 30px;
      text-decoration: underline !important;
   }
   .banner-four .off {
      width: 80px;
      height: 80px;
      line-height: 80px;
      font-size: 24px;
      left: -40px;
      top: 40%;
      transform: translateY(-40%);
   }
   .banner-five img {
      width: 100%;
   }
   .custom-class-110 .banner-content {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      width: 210px;
   }
   .banner-five .banner-content h5 {
      font-size: 21px;
   }
   .custom-class-111 .banner-content {
      right: 10%;
      width: 45%;
   }
   .custom-class-112 .banner-content {
      left: 8%;
      width: 58%;
      bottom: 15%;
   }
   .custom-class-113 {
      margin-bottom: 25px;
   }
   .custom-class-113 .banner-content {
      left: 7%;
      width: 60%;
      top: 15%;
   }
   .custom-class-114 .banner-content {
      left: 50px;
      width: 41%;
   }
   .banner-six sup {
      top: -12px;
      left: -10px;
   }
   .banner-seven {
      padding: 50px;
      display: flex;
      align-items: center;
   }
   .banner-seven .banner-image {
      width: 230px;
      display: inline-table;
   }
   .banner-seven .banner-content {
      padding-left: 20px;
   }
   .banner-seven .product-cats a {
      color: var(--theme-general-color);
      font-family: var(--theme-extra-font);
      font-size: 15px;
   }
   .banner-seven h4 {
      line-height: 36px;
      font-weight: 500;
   }
   .banner-seven .price-offer {
      font-size: 15px;
      font-weight: 500;
      display: flex;
      align-items: center;
   }
   .banner-seven .price-offer .off {
      font-family: var(--theme-highlight-font);
      font-weight: 600;
      font-size: 24px;
      margin: 0 6px;
   }
   .banner-seven sup {
      top: -10px;
      left: 0px;
      font-size: 20px;
   }
   .banner-eight {
      display: flex;
      padding: 40px 30px;
      height: 100%;
      align-items: center;
   }
   .banner-eight .banner-content {
      width: 370px;
   }
   .banner-eight h4 {
      font-size: 21px;
      text-transform: uppercase;
   }
   .banner-eight .price-from {
      font-weight: 600;
      font-size: 15px;
   }
   .banner-eight .price-from .amount {
      font-size: 30px;
      font-family: var(--theme-highlight-font);
      margin-left: 15px;
   }
   .banner-eight .price-from .amount sup {
      top: -12px;
      left: -4px;
      font-size: 20px;
   }
   .banner-eight .banner-image {
      width: 120px;
      margin-left: auto;
   }
   .categories-banner ul {
      display: flex;
      flex-wrap: wrap;
   }
   .categories-banner ul li a {
      color: var(--theme-white-color);
      margin-right: 10px;
      padding: 5px 0;
      line-height: 25px;
      font-weight: 500;
   }
   .banner-nine ul.categories-banner {
      display: flex;
      flex-wrap: wrap;
   }
   .banner-nine ul.categories-banner li a {
      color: var(--theme-secondary-color);
      margin-right: 5px;
      line-height: 25px;
      font-size: 15px;
      font-weight: 500;
   }
   .banner-nine .banner-content {
      position: absolute;
      top: 50%;
      left: 40px;
      width: 240px;
      transform: translateY(-50%);
   }
   .banner-ten .banner-content {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      padding: 30px;
      width: 250px;
      display: flex;
      flex-direction: column;
   }
   .banner-ten .banner-content h4 {
      line-height: 28px;
   }
   .banner-ten .banner-content span {
      width: 170px;
      display: block;
   }
   .banner-ten .banner-content .start-form {
      width: 150px;
   }
   .banner-ten .banner-content .start-form span {
      display: block;
      font-family: var(--theme-highlight-font);
      font-weight: 600;
   }
   .banner-ten .banner-content .start-form span:first-child {
      font-size: 18px;
      color: var(--theme-extra1-color);
   }
   .banner-ten .banner-content .start-form span:last-child {
      font-size: 21px;
      color: var(--theme-dark-color);
   }
   .banner-ten .banner-content .btn-link {
      font-size: 16px;
      font-family: var(--theme-highlight-font);
      margin-top: 20px;
      color: var(--theme-primary-color);
   }
   .banner-eleven .banner-content {
      padding: 30px;
      width: 260px;
   }
   .slider.banner-eleven .banner-content {
      width: 350px;
   }
   .banner-thirteen .banner-content {
      width: 400px;
   }
   .banner-thirteen .banner-tagline {
      font-size: 17px;
      font-weight: 500;
      letter-spacing: 3px;
      text-transform: uppercase;
   }
   /* ==================================================================== Extra Category Banner Style Start =====================================================================*/
   .coustom-categories-banner-1 .product-info {
      position: absolute !important;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: var(--theme-white-color);
      width: 90%;
      text-align: center;
   }
   .coustom-categories-banner-1 .product-wrapper .product-info .product-title,
   .coustom-categories-banner-1 .product-wrapper .product-info .product-title a {
      font-weight: 500;
      font-size: 15px;
   }
   .coustom-categories-banner-1 .product-wrapper .product-info .strok {
      font-size: 13px;
      font-weight: 400;
      display: block;
   }
   .coustom-categories-banner-2 .product-info {
      position: absolute !important;
      bottom: 0;
      left: 0;
      background-color: var(--theme-white-color);
      display: flex;
      margin-left: 20px;
      margin-bottom: 20px;
      padding: 10px 20px !important;
   }
   .coustom-categories-banner-2 .product-info .product-title {
      margin-right: 10px;
   }
   /*==================================================================== Offer Section Style Start =====================================================================*/
   .off-item .content {
      margin-left: -15px;
   }
   /*==================================================================== Flash Deal Section Style Start =====================================================================*/
   .section-head.border-bottom {
      border-bottom: 1px solid #dddddd !important;
      position: relative;
   }
   .section-head-side-title {
      border-bottom: 2px solid var(--theme-primary-color);
      margin-bottom: -2px;
      padding: 5px 0;
      width: max-content;
      align-items: center;
   }
   .trand-ronud {
      width: 30px;
      height: 30px;
      text-align: center;
      line-height: 30px;
      margin-right: 10px;
   }
   .flash-deal-2 a.add_to_cart_button:hover {
      color: #fff;
      background-color: var(--theme-dark-color);
      border-color: transparent;
      filter: none;
   }
   .flash-deal-2 .product-wrapper .btn-cart-wishlist [class*="-button"] {
      margin: 5px 5px 5px 0;
   }
   .flash-deal-2
      .product-wrapper
      .btn-cart-wishlist
      [class*="-button"]:not(.cart-button)
      a::after {
      color: var(--theme-dark-color);
   }
   .flash-deal-2 .product-wrapper .product-info .product-price .price ins {
      font-size: 20px;
   }
   .flash-deal-2 .product-wrapper .product-info .product-price .price del {
      font-size: 18px;
   }
   /* ==================================================================== Product Type One Style Start =====================================================================*/
   .today-deal .product-wrapper {
      display: flex;
      align-items: center;
   }
   .today-deal .product-wrapper .product-info .product-price {
      align-items: start;
   }
   .today-deal .product-wrapper .product-info .product-price .price {
      flex-direction: column;
      margin-right: 10px;
   }
   .today-deal .product-wrapper .product-info .product-price .price del {
      margin-left: -8px;
   }
   .today-deal .product-wrapper .product-info .available-items {
      font-family: var(--theme-extra-font);
      font-size: 13px;
      margin: 5px 0;
   }
   .border-light {
      border-color: var(--theme-light-color) !important;
   }
   .border-gray {
      border-color: var(--theme-gray-color) !important;
   }
   .e-border-one .product-wrapper {
      border-bottom: 1px solid var(--theme-gray-color);
      border-right: 1px solid var(--theme-gray-color);
   }
   .e-border-one .product-wrapper:hover {
      border-color: transparent;
   }
   .e-border-three .product-wrapper {
      border: 2px solid var(--theme-gray-color);
   }
   .e-border-around .product-wrapper {
      border: 1px solid var(--theme-gray-color);
   }
   .e-hover-border-around .product-wrapper {
      border: 1px solid transparent;
   }
   .e-hover-image-zoom .product-wrapper .product-image {
      overflow: hidden;
   }
   .e-hover-image-zoom .product-wrapper .product-image img {
      -moz-transition: all 300ms ease-in-out 0s;
      -webkit-transition: all 300ms ease-in-out 0s;
      -o-transition: all 300ms ease-in-out 0s;
      -ms-transition: all 300ms ease-in-out 0s;
      transition: all 300ms ease-in-out 0s;
   }
   .e-hover-image-zoom .product-wrapper:hover .product-image img {
      transform: scale(1.1);
   }
   .e-hover-border-around .product-wrapper:hover {
      border-color: var(--theme-gray-color);
   }
   .e-wrapper-hover-all-white
      .product-wrapper:hover
      .product-info
      .product-price
      .price
      ins,
   .e-wrapper-hover-all-white .product-wrapper:hover .product-info .star-rating a,
   .e-wrapper-hover-all-white .product-wrapper:hover .product-title a {
      color: var(--theme-white-color) !important;
   }
   .e-title-dark .product-wrapper .product-title a {
      color: var(--theme-dark-color) !important;
   }
   .e-title-white .product-wrapper .product-title a {
      color: var(--theme-white-color) !important;
   }
   .e-title-secondary .product-wrapper .product-title a {
      color: var(--theme-secondry-color) !important;
   }
   .e-title-general .product-wrapper .product-title a {
      color: var(--theme-general-color) !important;
   }
   .e-title-hover-primary .product-wrapper .product-title a:hover {
      color: #c9030f;
   }
   .short-info .product-wrapper {
      margin-bottom: 20px;
   }
   .short-info.owl-carousel .product-wrapper {
      margin-bottom: 0;
   }
   .short-info .product-wrapper .product-info {
      text-align: center;
   }
   .short-info .product-wrapper .product-info .product-title {
      margin-bottom: 2px;
      margin-top: 10px;
   }
   .short-info .product-wrapper .product-info .product-title a {
      font-family: var(--theme-highlight-font);
      font-size: 16px;
   }
   .short-info .product-wrapper .product-info .strok {
      font-family: var(--theme-extra-font);
      font-size: 12px;
      color: #a1a1a1;
      font-weight: 500;
   }
   .e-info-center .product-wrapper .product-info {
      text-align: center;
   }
   .e-info-center .product-wrapper .product-info .hover-area {
      margin-top: 10px;
      justify-content: center;
   }
   .e-info-center .product-wrapper .shipping-feed-back,
   .e-info-center .product-wrapper .product-info .product-price {
      justify-content: center;
   }
   .e-my-one .product-wrapper {
      margin: 15px 0 !important;
   }
   .e-mb-one .product-wrapper {
      margin-bottom: 15px !important;
   }
   .e-mb-two .product-wrapper {
      margin-bottom: 50px !important;
   }
   .e-p-one .product-wrapper {
      padding: 15px 15px 0 !important;
   }
   .e-p-one .product-wrapper .product-info {
      padding: 15px 0;
   }
   .e-p-30 .product-wrapper {
      padding: 30px;
   }
   .e-mb-last-one .product.type-product:last-child .product-wrapper,
   .e-mb-last-one .item .product.type-product:last-child .product-wrapper {
      margin-bottom: 50px !important;
   }
   .e-hover-border-one .product.type-product {
      border-left: 1px solid transparent;
      border-right: 1px solid transparent;
   }
   .e-hover-border-one .product.type-product:hover {
      border-color: var(--theme-gray-color);
   }
   .e-bg-primary .product-wrapper,
   .e-hover-bg-primary .product-wrapper:hover {
      background-color: var(--theme-primary-color) !important;
   }
   .e-bg-white .product-wrapper,
   .e-hover-bg-white .product-wrapper:hover {
      background-color: var(--theme-white-color) !important;
   }
   .bg-light{
   	background-color: #e7e7e8 !important;
   }
   .e-bg-light .product-wrapper,
   .e-hover-bg-light .product-wrapper:hover {
      background-color: var(--theme-light-color) !important;
   }
   .e-image-bg-light .product-wrapper .product-image {
      background-color: var(--theme-light-color);
   }
   .e-image-bg-gray .product-wrapper .product-image {
      background-color: var(--theme-gray-color);
   }
   .e-image-bg-white .product-wrapper .product-image {
      background-color: var(--theme-white-color);
   }
   [class*="e-image-bg-"].e-hover-shadow-one .product-wrapper {
      padding: 10px 10px 0;
   }
   [class*="e-image-bg-"].e-hover-shadow-one .owl-item {
      margin-top: 5px;
   }
   [class*="e-image-bg-"].e-hover-shadow-one .owl-stage-outer {
      padding-left: 10px;
      padding-right: 10px;
      margin-left: -10px;
      margin-right: -10px;
   }
   [class*="e-image-bg-"]:has(.e-bg-light) .product-wrapper .product-info,
   [class*="e-image-bg-"]:has(.e-bg-white) .product-wrapper .product-info,
   [class*="e-image-bg-"]:has(.e-bg-gray) .product-wrapper .product-info {
      padding: 15px;
   }
   .e-image-pill .product-wrapper .product-image,
   .e-image-pill .product-wrapper .product-image a,
   .e-image-pill .product-wrapper .product-image a img {
      border-radius: 50%;
   }
   .e-hover-shadow-one .product-wrapper:hover {
      -webkit-box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
   }
   .e-hover-shadow-one .hover-position-inherit .product-wrapper:hover {
      position: inherit !important;
      height: 100%;
   }
   .e-hover-wrapper-absolute .product-wrapper:hover {
      position: absolute;
      height: auto;
      z-index: 11;
      border-radius: 3px;
   }
   .product.type-product {
      position: relative;
   }
   .product-wrapper {
      height: 100%;
      width: 100%;
      display: table;
   }
   .product-wrapper .product-image {
      position: relative;
   }
   .product-wrapper .product-image .woocommerce-LoopProduct-link {
      display: block;
   }
   .product-wrapper .product-image img {
      width: 100%;
   }
   .single-product-wrapper .images-inner [class*="product-labels"],
   .product-wrapper .product-image [class*="product-labels"] {
      left: 15px;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
      -ms-flex-align: start;
      align-items: flex-start;
      position: absolute;
      top: 15px;
      z-index: 9;
   }
   .yith-wcwl-add-to-wishlist {
      width: auto;
      flex-wrap: wrap;
      display: flex;
   }
   .yith-wcwl-add-to-wishlist > [class*="-button"]:not(:last-child) {
      margin-right: 20px;
      margin-bottom: 20px;
   }
   .yith-wcwl-add-to-wishlist > [class*="-button"] a {
      color: var(--theme-dark-color);
   }
   .e-p-30 .product-wrapper .product-image [class*="product-labels"] {
      left: 0;
      top: 0;
   }
   .product-wrapper .product-image [class*="product-labels"] [class*="box-badge"] {
      padding: 1px 7px !important;
   }
   .product-wrapper .product-image [class*="product-labels"] [class*="badge"] {
      padding: 1px 7px 1px 7px;
      background-color: var(--theme-primary-color);
      color: var(--theme-white-color);
      margin-bottom: 5px;
      font-family: var(--theme-extra-font);
      font-size: 12px;
      font-weight: 400;
      text-transform: uppercase;
   }
   .single-product-wrapper
      .images-inner
      [class*="product-labels"]
      [class*="shape"],
   .product-wrapper .product-image [class*="product-labels"] [class*="shape"] {
      padding: 1px 0px 1px 7px;
   }
   .product-wrapper
      .product-image
      [class*="product-labels"]
      [class*="badge"]:last-child {
      margin-bottom: 0;
   }
   .product-wrapper
      .product-image
      [class*="product-labels"]
      [class*="shape1-badge"] {
      position: relative;
   }
   .single-product-wrapper
      .images-inner
      [class*="product-labels"]
      [class*="shape1-badge"]::before,
   .product-wrapper
      .product-image
      [class*="product-labels"]
      [class*="shape1-badge"]::before {
      content: "";
      position: absolute;
      left: 100%;
      bottom: 0;
      height: 100%;
      border-top: 20px solid var(--theme-light-color);
      border-right: 15px solid transparent;
   }
   .single-product-wrapper
      .images-inner
      [class*="product-labels"]
      [class*="shape1-badge"]::after,
   .product-wrapper
      .product-image
      [class*="product-labels"]
      [class*="shape1-badge"]::after {
      content: "";
      position: absolute;
      left: 100%;
      bottom: 0;
      width: 0;
      height: 100%;
      border-bottom: 20px solid var(--theme-light-color);
      border-right: 15px solid transparent;
   }
   .product-wrapper
      .product-image
      [class*="product-labels"]
      [class*="badge1"]::before {
      border-top-color: var(--theme-primary-color);
   }
   .product-wrapper
      .product-image
      [class*="product-labels"]
      [class*="badge1"]::after {
      border-bottom-color: var(--theme-primary-color);
   }
   .product-wrapper .product-image [class*="product-labels"] [class*="badge2"] {
      background-color: var(--theme-secondary-color);
      color: var(--theme-white-color);
   }
   .product-wrapper
      .product-image
      [class*="product-labels"]
      [class*="badge2"]::before {
      border-top-color: var(--theme-secondary-color);
   }
   .product-wrapper
      .product-image
      [class*="product-labels"]
      [class*="badge2"]::after {
      border-bottom-color: var(--theme-secondary-color);
   }
   .single-product-wrapper
      .images-inner
      [class*="product-labels"]
      [class*="badge3"],
   .product-wrapper .product-image [class*="product-labels"] [class*="badge3"] {
      background-color: var(--theme-extra-color);
      color: var(--theme-white-color);
   }
   .single-product-wrapper
      .images-inner
      [class*="product-labels"]
      [class*="badge3"]::before,
   .product-wrapper
      .product-image
      [class*="product-labels"]
      [class*="badge3"]::before {
      border-top-color: var(--theme-extra-color);
   }
   .single-product-wrapper
      .images-inner
      [class*="product-labels"]
      [class*="badge3"]::after,
   .product-wrapper
      .product-image
      [class*="product-labels"]
      [class*="badge3"]::after {
      border-bottom-color: var(--theme-extra-color);
   }
   .product-wrapper .product-image [class*="product-labels"] [class*="badge4"] {
      background-color: var(--theme-extra2-color);
      color: var(--theme-white-color);
   }
   .product-wrapper
      .product-image
      [class*="product-labels"]
      [class*="badge4"]::before {
      border-top-color: var(--theme-extra2-color);
   }
   .product-wrapper
      .product-image
      [class*="product-labels"]
      [class*="badge4"]::after {
      border-bottom-color: var(--theme-extra2-color);
   }
   .product-wrapper .product-image [class*="product-labels"] [class*="badge5"] {
      background-color: var(--theme-extra3-color);
      color: var(--theme-white-color);
   }
   .product-wrapper
      .product-image
      [class*="product-labels"]
      [class*="badge5"]::before {
      border-top-color: var(--theme-extra3-color);
   }
   .product-wrapper
      .product-image
      [class*="product-labels"]
      [class*="badge5"]::after {
      border-bottom-color: var(--theme-extra3-color);
   }
   .product-wrapper .hover-area [class*="-button"],
   .product-wrapper .wishlist-view [class*="-button"] {
      text-indent: -9999px;
      position: relative !important;
      top: 0;
      left: 0;
   }
   .yith-wcwl-add-to-wishlist [class*="-button"] a,
   .product-wrapper .wishlist-view [class*="-button"] a,
   .product-wrapper .hover-area [class*="-button"] a {
      padding-left: 20px;
      line-height: inherit;
      display: block;
      font-size: 12px;
      font-weight: 500;
      background: transparent;
   }
   .product-wrapper > .product-image > .wishlist-view [class*="-button"] a {
      width: 25px;
      height: 25px;
   }
   .product-wrapper > .product-image > .wishlist-view [class*="-button"] a:after {
      left: 50%;
      transform: translate(-50%, -50%);
   }
   .yith-wcwl-add-to-wishlist [class*="-button"] a {
      position: relative;
   }
   .product-wrapper .wishlist-view [class*="-button"] a {
      color: var(--theme-general-color);
   }
   .product-wrapper .wishlist-view [class*="-button"] a:hover {
      color: var(--theme-primary-color);
   }
   .product-wrapper .wishlist-button a.add_to_wishlist::after,
   .yith-wcwl-add-to-wishlist [class*="-button"] a::after,
   .product-wrapper .hover-area [class*="-button"] a::after,
   .product-wrapper .wishlist-view [class*="-button"] a::after,
   .product-wrapper .btn-cart-wishlist [class*="-button"] a::after {
      text-indent: 0px;
      transform: translateY(-50%);
      position: absolute;
      left: 0;
      top: 50%;
      font-family: Flaticon;
   }
   .product-wrapper .product-image .quickview-button a.quickview-btn::after,
   .product-wrapper .product-image .cart-button a.add_to_cart_button::after,
   .product-wrapper .product-image .wishlist-button a.add_to_wishlist::after,
   .product-wrapper .product-image .compare-button a.compare::after,
   .product-wrapper .product-image [class*="-button"] a:after {
      font-weight: 500;
   }
   .product-style-7
      .product-wrapper
      .product-image
      .quickview-button
      a.quickview-btn::after,
   .product-style-7
      .product-wrapper
      .product-image
      .cart-button
      a.add_to_cart_button::after,
   .product-style-7
      .product-wrapper
      .product-image
      .wishlist-button
      a.add_to_wishlist::after,
   .product-style-7
      .product-wrapper
      .product-image
      .compare-button
      a.compare::after,
   .product-style-7 .product-wrapper .product-image [class*="-button"] a:after {
      font-weight: 500;
      font-size: 18px;
   }
   .yith-wcwl-add-to-wishlist .quickview-button a.quickview-btn::after,
   .product-wrapper .quickview-button a.quickview-btn::after,
   .yith-wcwl-add-to-wishlist .wishlist-button a.add_to_wishlist::after,
   .product-wrapper .wishlist-button a.add_to_wishlist::after,
   .yith-wcwl-add-to-wishlist .compare-button a.compare::after,
   .product-wrapper .compare-button a.compare::after,
   .yith-wcwl-add-to-wishlist .cart-button a.add_to_cart_button::after,
   .product-wrapper .cart-button a.add_to_cart_button::after,
   .yith-wcwl-add-to-wishlist .size-guide-button a::after {
      font-size: 15px;
      font-weight: 600;
   }
   .yith-wcwl-add-to-wishlist .quickview-button a.quickview-btn::after,
   .product-wrapper .quickview-button a.quickview-btn::after {
      content: "\f12f";
   }
   .yith-wcwl-add-to-wishlist .wishlist-button a.add_to_wishlist::after,
   .product-wrapper .wishlist-button a.add_to_wishlist::after {
      content: "\f111";
   }
   .yith-wcwl-add-to-wishlist .compare-button a.compare::after,
   .product-wrapper .compare-button a.compare::after {
      content: "\f181";
   }
   .yith-wcwl-add-to-wishlist .cart-button a.add_to_cart_button::after,
   .product-wrapper .cart-button a.add_to_cart_button::after {
      content: "\f18a";
   }
   .yith-wcwl-add-to-wishlist .buynow a.add_to_cart_button::after,
   .product-wrapper .buynow a.add_to_cart_button::after {
      content: "\f10c" !important;
   }
   .flash a::after {
      content: "" !important;
   }
   .yith-wcwl-add-to-wishlist .size-guide-button a::after {
      content: "\f101";
   }
   .product-style-2 .product-wrapper .product-image .wishlist-view {
      position: absolute;
      top: 10px;
      right: 10px;
      display: flex;
      opacity: 0;
      visibility: hidden;
   }
   .product-style-2 .product-wrapper:hover .product-image .wishlist-view {
      opacity: 1;
      visibility: visible;
   }
   .icon-hover-primary .product-wrapper .product-image .wishlist-view a:hover {
      color: var(--theme-primary-color) !important;
   }
   .add_to_cart_button {
      visibility: visible;
      opacity: 1;
      position: inherit !important;
      margin-left: -9px;
   }
   a.add_to_cart_button:hover {
      color: inherit;
      background-color: transparent;
      border-color: transparent;
      filter: brightness(110%);
   }
   a.add_to_cart_button:hover,
   .btn-primary:not(:disabled):not(.disabled):active,
   .btn-primary:hover {
      filter: brightness(100%);
   }
   .product-style-3 .product-wrapper {
      overflow: hidden;
   }
   .product-style-3 .product-wrapper .product-info .hover-area {
      position: absolute;
      bottom: -100px;
      left: 50%;
      width: 100%;
      transform: translateX(-50%);
      padding: 0 15px;
   }
   .product-style-3
      [class*="e-image-bg-"]
      .product-wrapper
      .product-info
      .hover-area,
   .product-style-3[class*="e-image-bg-"]
      .product-wrapper
      .product-info
      .hover-area {
      padding: 0;
   }
   .product-style-3 a.button.product_type_variable,
   .product-style-3 a.button.add_to_cart_button {
      font-size: 12px;
      font-weight: 500;
      height: 35px;
      line-height: 36px;
   }
   .product-style-3 .product-wrapper .wishlist-button a::after,
   .product-style-3 .product-wrapper .compare-button a::after {
      left: initial;
      right: 0;
   }
   .product-style-3 .product-wrapper:hover .shipping-feed-back,
   .product-style-3 .product-wrapper:hover .fancy-star-rating,
   .product-style-5 .product-wrapper:hover .shipping-feed-back,
   .product-style-5 .product-wrapper:hover .fancy-star-rating {
      opacity: 0;
   }
   .product-style-3 .product-wrapper:hover .product-info .hover-area {
      bottom: 7px;
   }
   .product-style-5 .product-wrapper {
      overflow: hidden;
   }
   .product-style-5 .product-wrapper .product-info {
      padding: 15px 0;
   }
   .product-style-5 .product-wrapper .product-info .hover-area {
      bottom: -50px;
      position: absolute;
   }
   .product-style-5 .product-wrapper:hover .product-info .hover-area {
      bottom: 5px;
   }
   .product-style-5 .product-wrapper .hover-area > [class*="-button"] {
      margin-right: 5px;
   }
   .product-style-5 .product-wrapper .hover-area [class*="-button"] a {
      background-color: var(--theme-dark-color);
      color: var(--theme-white-color);
      line-height: 38px;
      font-size: 12px;
      font-weight: 400;
   }
   .product-style-5
      .yith-wcwl-add-to-wishlist
      .cart-button
      a.add_to_cart_button::after,
   .product-style-5
      .yith-wcwl-add-to-wishlist
      .wishlist-button
      a.add_to_wishlist::after,
   .product-style-5 .yith-wcwl-add-to-wishlist .compare-button a.compare::after,
   .product-style-5
      .yith-wcwl-add-to-wishlist
      .quickview-button
      a.quickview-btn::after,
   .product-style-5 .product-wrapper .cart-button a.add_to_cart_button::after,
   .product-style-5 .product-wrapper .wishlist-button a.add_to_wishlist::after,
   .product-style-5 .product-wrapper .compare-button a.compare::after,
   .product-style-5 .product-wrapper .quickview-button a.quickview-btn::after {
      font-weight: 400;
   }
   .product-style-5
      .product-wrapper
      .hover-area
      [class*="-button"]:not(.cart-button)
      a {
      width: 35px;
      height: 35px;
   }
   .product-style-5 .cart-button .button.add_to_cart_button {
      text-indent: 0;
      height: 35px;
      padding: 0 10px 0 28px;
      text-align: left;
   }
   .product-style-5
      .product-wrapper
      .hover-area
      [class*="-button"]:not(.cart-button)
      a::after {
      left: 50%;
      transform: translate(-50%, -50%);
   }
   .product-style-5 .product-wrapper .hover-area .cart-button a::after {
      left: 10px;
   }
   .product-style-5 .product-wrapper .hover-area .quickview-button {
      order: 4;
   }
   .product-wrapper .btn-cart-wishlist {
      margin-top: 25px;
      display: flex;
      align-items: center;
      flex-wrap: wrap;
   }
   .product-wrapper .btn-cart-wishlist .quickview-button {
      display: none;
   }
   .product-wrapper .btn-cart-wishlist [class*="-button"] a {
      position: relative !important;
      display: block;
   }
   .product-wrapper .btn-cart-wishlist [class*="-button"] {
      margin: 5px 10px 5px 0;
   }
   .product-wrapper .btn-cart-wishlist [class*="-button"]:last-child {
      margin-right: 0;
   }
   .product-wrapper .btn-cart-wishlist [class*="-button"]:not(.cart-button) {
      text-indent: -9999999px;
   }
   .product-wrapper .btn-cart-wishlist [class*="-button"]:not(.cart-button) a {
      width: 40px;
      height: 40px;
      background-color: var(--theme-primary-color);
      color: var(--theme-white-color);
   }
   .product-wrapper .btn-cart-wishlist [class*="-button"] a::after {
      left: 50%;
      transform: translate(-50%, -50%);
      color: var(--theme-white-color);
   }
   .product-wrapper
      .btn-cart-wishlist
      .cart-button
      .button.add_to_cart_button::after {
      left: 30px;
   }
   .product-wrapper .btn-cart-wishlist .cart-button .button.add_to_cart_button {
      color: var(--theme-white-color);
      padding: 0 25px 0 45px;
      text-transform: uppercase;
      top: 0;
      font-weight: 500;
   }
   .product-style-3 .product-wrapper .hover-area .cart-button {
      margin-right: auto;
      text-indent: 0;
   }
   .product-style-3 .product-wrapper .hover-area .wishlist-button,
   .product-style-3 .product-wrapper .hover-area .compare-button {
      margin-left: 10px;
   }
   .product-style-3 .product-wrapper .hover-area [class*="-button"] a {
      color: var(--theme-dark-color);
      font-size: 12px;
      text-transform: uppercase;
   }
   /*============================================ Product Button Style =============================================*/
   .e-btn-set-one .product-wrapper .product-info .hover-area {
      margin-top: 10px;
   }
   .e-btn-set-one .product-wrapper .hover-area .quickview-button {
      order: 4;
   }
   .e-btn-set-one .product-wrapper .hover-area [class*="-button"] a {
      color: var(--theme-dark-color);
      line-height: 36px;
      font-size: 12px;
      border: 1px solid var(--theme-gray-color);
      background-color: var(--theme-light-color);
   }
   .e-btn-set-one
      .product-wrapper
      .hover-area
      [class*="-button"]:not(:last-child) {
      margin-right: 5px;
   }
   .e-btn-set-one
      .product-wrapper
      .hover-area
      [class*="-button"]:not(.cart-button)
      a {
      width: 36px;
      height: 36px;
   }
   .e-btn-set-one
      .product-wrapper
      .hover-area
      [class*="-button"]:not(.cart-button)
      a::after {
      left: 50%;
      transform: translate(-50%, -50%);
   }
   .e-btn-set-one .cart-button .button.add_to_cart_button {
      text-indent: 0;
      height: 36px;
      padding: 0 10px 0 32px;
      text-align: left;
   }
   .e-btn-set-one .product-wrapper .hover-area .cart-button a::after {
      left: 10px;
   }
   .e-btn-set-two .product-wrapper .product-info .hover-area {
      margin-top: 10px;
   }
   .e-btn-set-two .product-wrapper .product-info .hover-area .add_to_cart_button {
      text-transform: uppercase;
      text-indent: 0;
      color: var(--theme-dark-color);
      background-color: var(--theme-white-color);
      border: 1px solid var(--theme-gray-color);
      padding: 0 15px;
      line-height: 36px;
      font-size: 12px;
   }
   .e-btn-set-two
      .product-wrapper
      .product-info
      .hover-area
      [class*="-button"]:not(.cart-button),
   .e-btn-set-two
      .product-wrapper
      .product-info
      .hover-area
      .add_to_cart_button::after {
      display: none;
   }
   .e-btn-set-three .product-wrapper .product-info .hover-area {
      margin-top: 10px;
   }
   .e-btn-set-three .product-wrapper .hover-area .quickview-button {
      order: 4;
   }
   .e-btn-set-three .product-wrapper .hover-area [class*="-button"] a {
      color: var(--theme-dark-color);
      line-height: 38px;
      font-size: 12px;
      border: 1px solid var(--theme-gray-color);
      background-color: var(--theme-light-color);
   }
   .e-btn-set-three
      .product-wrapper
      .hover-area
      [class*="-button"]:not(:last-child) {
      margin-right: 5px;
   }
   .e-btn-set-three .product-wrapper .hover-area [class*="-button"] a {
      width: 35px;
      height: 35px;
   }
   .e-btn-set-three .product-wrapper .hover-area [class*="-button"] a::after {
      left: 50%;
      transform: translate(-50%, -50%);
   }
   .product-style-1 [class*="-button"] a {
      opacity: 1;
      visibility: visible;
   }
   .product-wrapper .hover-area [class*="-button"] a {
      top: 0;
      left: 0;
   }
   .product-style-1 .product-wrapper .hover-area [class*="-button"] a {
      width: 30px;
      height: 30px;
      background-color: var(--theme-white-color);
      color: #ffff;
   }
   .product-style-1 .product-wrapper .hover-area [class*="-button"] a::after {
      left: 50%;
      transform: translate(-50%, -50%);
   }
   .product-style-1 .product-wrapper .hover-area [class*="-button"] a:hover {
      background-color: #fff !important;
      border: 1px solid var(--theme-primary-color);
      color: rgb(229, 17, 17);
   }
   .product-style-2
      .product-wrapper
      .hover-area
      [class*="-button"]:not(:last-child) {
      margin-right: 5px;
   }
   .product-style-3 .hover-area .wishlist-button a,
   .product-style-3 .hover-area .compare-button a {
      background-color: transparent;
      border: none;
      line-height: 36px;
   }
   .e-btn-set-six .cart-button a {
      display: table;
      padding: 10px 20px;
      background-color: var(--theme-secondary-color);
      font-size: 12px;
      text-transform: uppercase;
      color: var(--theme-white-color) !important;
      font-weight: 400 !important;
      margin-top: 15px;
   }
   .e-btn-set-six.e-btn-set-primary [class*="-button"] a {
      background: var(--theme-primary-color);
   }
   .e-btn-set-six.e-info-center .cart-button a {
      margin: 15px auto 0;
   }
   .product-style-5 .product-wrapper .hover-area {
      border-top: none;
      padding: 0;
   }
   .product-style-3 .product-wrapper .hover-area,
   .product-style-1 .product-wrapper .hover-area {
      border-top: none;
      padding: 0;
   }
   .product-style-3 .product-wrapper .hover-area,
   .product-style-1 .product-wrapper .hover-area {
      justify-content: initial;
   }
   .product-style-1 .product-wrapper .product-image .hover-area {
      flex-direction: column;
      position: absolute;
      right: -40px;
      bottom: 8px;
      width: auto;
      margin: 0;
   }
   .product-style-1 .product-wrapper:hover .product-image .hover-area {
      right: 15px;
   }
   .product-style-1
      .product-wrapper
      .product-image
      .hover-area
      [class*="-button"]
      + [class*="-button"] {
      margin-top: 5px;
   }
   .e-btn-set-hover-primary [class*="-button"] a:hover {
      color: var(--theme-primary-color) !important;
   }
   .product-wrapper .product-image .product-variations {
      padding: 5px 10px;
      width: max-content;
      position: absolute;
      top: calc(100% - 35px);
      left: 10px;
      display: none;
      align-items: center;
   }
   .product-wrapper .product-image .product-variations span {
      border: 1px solid transparent;
      padding: 2px;
   }
   .product-wrapper .product-image .product-variations span:hover,
   .product-wrapper .product-image .product-variations span.active {
      border-color: #000;
      background-color: var(--theme-white-color);
   }
   .product-wrapper .product-image .product-variations span + span {
      margin-left: 5px;
   }
   .product-wrapper .product-image .product-variations span a {
      width: 10px;
      height: 10px;
      display: block;
   }
   .product-wrapper .product-info {
      padding: 15px;
      position: relative;
   }
   .e-bg-light.e-image-bg-light .product-wrapper .product-info,
   .e-bg-white.e-image-bg-white .product-wrapper .product-info,
   .e-bg-gray.e-image-bg-gray .product-wrapper .product-info,
   [class*="e-bg-"] .product-wrapper .product-info {
      padding: 15px;
   }
   .e-bg-light.e-image-bg-light .product-wrapper .product-info .hover-area,
   .e-bg-white.e-image-bg-white .product-wrapper .product-info .hover-area,
   .e-bg-gray.e-image-bg-gray .product-wrapper .product-info .hover-area,
   [class*="e-bg-"] .product-wrapper .product-info .hover-area {
      padding-left: 15px;
      padding-right: 15px;
   }
   [class*="e-image-bg-"] .product-wrapper .product-info {
      padding: 15px 0;
   }
   [class*="e-image-bg-"] .product-wrapper .product-info .hover-area {
      padding: 0;
   }
   .product-wrapper .product-info .product-cats {
      margin-bottom: 5px;
   }
   .product-wrapper .product-info .product-cats a {
      font-family: var(--theme-extra-font);
      font-size: 14px;
      color: var(--theme-general-color);
      font-weight: 400;
   }
   .product-wrapper .product-info .product-title,
   .product-wrapper .product-info .product-title a {
      font-family: var(--theme-general-font);
      color: var(--theme-secondary-color);
      font-weight: 500;
      font-size: 16px;
      overflow: hidden;
      line-height: initial;
      margin-bottom: 5px;
   }
   .short-info .product-wrapper .product-info {
      padding: 0;
   }
   .short-info .product-wrapper .product-info .product-title,
   .short-info .product-wrapper .product-info .product-title a {
      height: auto;
      margin-bottom: 0;
      display: block;
   }
   .product-wrapper .product-info .product-title a:hover {
      text-decoration: none;
   }
   .product-wrapper .product-info .product-price {
      display: flex;
      align-items: center;
      min-height: 25px;
      flex-wrap: wrap;
   }
   .product-wrapper .product-info .product-price .price {
      display: flex;
      align-items: center;
   }
   .product-wrapper .product-info .product-price .price ins {
      font-size: 14px;
      font-weight: 500;
      font-family: var(--theme-general-font);
      color: var(--theme-extra-color);
      text-decoration: none;
   }
   .product-wrapper .product-info .product-price .price del {
      font-size: 13px;
      font-weight: 400;
      font-family: var(--theme-general-font);
      color: #abadae;
      margin-left: 5px;
   }
   div.summary .product-price-discount,
   .product-wrapper .on-sale {
      font-family: var(--theme-extra-font);
      font-size: 12px;
      font-weight: 400;
      margin-left: 5px;
      background-color: #f9eaea;
      color: #ffff;
   }
   div.summary .product-price-discount .on-sale,
   .product-wrapper .on-sale {
      padding: 2px 5px;
   }
   .product-wrapper .product-image .on-sale {
      position: absolute;
      top: 15px;
      right: 15px;
      font-family: var(--theme-general-font);
      background-color: var(--theme-extra-color);
      margin: 0;
      color: var(--theme-white-color);
      padding: 1px 7px;
   }
   .product-wrapper .shipping-feed-back {
      display: flex;
      justify-content: space-between;
      color: var(--theme-dark-color);
      margin-top: 10px;
      -moz-transition: all 300ms ease-in-out 0s;
      -webkit-transition: all 300ms ease-in-out 0s;
      -o-transition: all 300ms ease-in-out 0s;
      -ms-transition: all 300ms ease-in-out 0s;
      transition: all 300ms ease-in-out 0s;
   }
   .shipping-cost {
      color: var(--theme-dark-color);
      font-weight: 600;
      font-size: 12px;
      font-family: var(--theme-extra-font);
      display: none;
   }
   .product-wrapper .shipping-feed-back .sold-items {
      font-family: var(--theme-extra-font);
      font-size: 14px;
      color: var(--theme-general-color);
      font-weight: 400;
   }
   .product-wrapper .shipping-feed-back .shipping-cost,
   .product-wrapper .shipping-feed-back .star-rating {
      display: flex;
      align-items: center;
      font-family: var(--theme-extra-font);
   }
   .product-wrapper .product-info .star-rating a,
   .product-wrapper .product-info .star-rating a:hover {
      color: #787878;
      text-decoration: none;
   }
   .product-wrapper .product-info .star-rating a {
      font-size: 14px;
      font-weight: 400;
   }
   .product-wrapper .product-info .star-rating .rating-counts-wrap {
      margin-left: 2px;
   }
   .sold-items span:last-child {
      margin-left: 2px;
   }
   .product-wrapper .product-info .bar-progress {
      margin: 15px 0 30px;
   }
   .product-wrapper .product-info .progress .skill-percent {
      display: flex;
   }
   .product-wrapper .hover-area {
      font-size: 14px;
      font-weight: 400;
      width: 100%;
      display: flex;
   }
   .e-btn-set-six .product-wrapper .cart-button a::after {
      left: 20px;
   }
   .product-wrapper .product-image .savings {
      position: absolute;
      top: 15px;
      right: 15px;
      background-color: var(--theme-primary-color);
      text-align: center;
      width: 70px;
      height: 70px;
      border-radius: 50%;
   }
   .product-wrapper .product-image .savings span {
      display: block;
      font-family: var(--theme-general-font);
      color: var(--theme-dark-color);
      font-weight: 500;
   }
   .product-wrapper .product-image .savings span.savings-text {
      font-size: 14px;
      font-weight: 500;
   }
   .product-wrapper .product-image .savings span.woocommerce-Price-amount {
      font-size: 21px;
   }
   .product-utilities {
      display: flex;
      justify-content: space-between;
      margin: 25px 0;
      flex-wrap: wrap;
   }
   .product-utilities .weight,
   .product-utilities .time,
   .product-utilities .delivery {
      display: flex;
      align-items: center;
   }
   .product-style-1 .product-wrapper .shipping-feed-back .sold-items,
   .product-style-1 .product-wrapper .product-info .product-cats,
   .product-style-1 .product-wrapper .product-info .hover-area,
   .product-style-1 .product-wrapper .product-price .on-sale,
   .product-style-1 .product-wrapper .product-image .wishlist-view {
      display: none;
   }
   .product-style-2 .product-wrapper .product-image .hover-area,
   .product-style-2 .product-wrapper .product-image .on-sale,
   .product-style-2 .product-wrapper .product-info .hover-area,
   .product-style-2 .product-wrapper .product-info .hover-area .quickview-button,
   .product-style-2 .product-wrapper .product-info .hover-area .wishlist-button {
      display: none;
   }
   .product-style-2 .product-wrapper:hover .product-image .product-variations,
   .product-style-3 .product-wrapper:hover .product-image .product-variations {
      display: flex;
   }
   .product-style-2 .hidden-hover-area .product-wrapper .product-info .hover-area {
      display: flex;
      opacity: 0;
      visibility: hidden;
   }
   .product-style-2
      .hidden-hover-area
      .product-wrapper:hover
      .product-info
      .hover-area {
      opacity: 1;
      visibility: visible;
   }
   .product-style-2 .show-hover-area .product-wrapper .product-info .hover-area {
      display: flex;
   }
   .product-style-2 .product-wrapper .product-info .hover-area {
      padding-top: 10px;
      justify-content: space-between;
      margin-top: 10px;
      border-top: 1px solid #ececec;
      padding-left: 0;
      padding-right: 0;
   }
   .product-style-2 .product-wrapper:hover .product-info .hover-area {
      display: flex;
   }
   .product-style-2 .product-wrapper .product-info .hover-area [class*="-button"] {
      text-indent: 0;
   }
   .product-style-2
      .product-wrapper
      .product-info
      .hover-area
      [class*="-button"]
      a {
      color: var(--theme-dark-color);
      text-transform: uppercase;
   }
   .product-style-2
      .product-wrapper
      .product-info
      .hover-area
      [class*="-button"]
      a:hover {
      color: var(--theme-primary-color);
   }
   .product-style-3 .product-wrapper .product-image .wishlist-view,
   .product-style-3 .product-wrapper .product-image .hover-area,
   .product-style-3 .product-wrapper .product-info .product-cats,
   .product-style-3 .product-wrapper .product-info .product-price .on-sale,
   .product-style-3 .product-wrapper .product-info .shipping-cost,
   .product-style-3 .product-wrapper .product-info .hover-area .quickview-button {
      display: none;
   }
   .product-style-4 .product-wrapper .product-image .wishlist-view,
   .product-style-4 .product-wrapper .product-image .product-variations,
   .product-style-4 .product-wrapper .product-image .hover-area,
   .product-style-4 .product-wrapper .product-info .product-cats,
   .product-style-4 .product-wrapper .product-info .product-price .on-sale,
   .product-style-4 .product-wrapper .product-info .shipping-cost,
   .product-style-4 .product-wrapper .product-info .shipping-feed-back,
   .product-style-4
      .product-wrapper
      .product-info
      .hover-area
      [class*="-button"]:not(.cart-button),
   .product-style-4
      .product-wrapper
      .product-info
      .hover-area
      .add_to_cart_button::after {
      display: none;
   }
   .product-style-4
      .product-wrapper
      .product-info
      .hover-area
      .add_to_cart_button {
      text-transform: uppercase;
      font-size: 13px;
      font-weight: 500;
      padding: 0 20px;
      line-height: 35px;
      background-color: var(--theme-light-color);
      text-indent: 0;
      color: var(--theme-dark-color);
   }
   .product-style-5 .product-wrapper .product-image .wishlist-view,
   .product-style-5 .product-wrapper .product-image .product-variations,
   .product-style-5 .product-wrapper .product-image .hover-area,
   .product-style-5 .product-wrapper .product-info .product-cats,
   .product-style-5 .product-wrapper .product-info .product-price .on-sale,
   .product-style-5 .product-wrapper .product-info .shipping-cost {
      display: none;
   }
   .product-style-6 .product-wrapper .product-image .wishlist-view,
   .product-style-6 .product-wrapper .product-image .product-variations,
   .product-style-6 .product-wrapper .product-image .on-sale,
   .product-style-6 .product-wrapper .product-image .hover-area,
   .product-style-6 .product-wrapper .product-info .product-cats,
   .product-style-6 .product-wrapper .product-info .product-price .price del,
   .product-style-6 .product-wrapper .product-info .product-price .on-sale,
   .product-style-6 .product-wrapper .product-info .shipping-cost,
   .product-style-6 .product-wrapper .product-info .shipping-feed-back .sold-items,
   .product-style-6
      .product-wrapper
      .product-info
      .hover-area
      [class*="-button"]:not(.cart-button) {
      display: none;
   }
   .product-style-6 .product-wrapper {
      padding: 30px;
      border-radius: 0 0 30px 0;
   }
   .product-style-6 .product-wrapper .product-image {
      border-radius: 50%;
      overflow: visible;
   }
   .product-style-6 .product-wrapper:hover .product-info .product-title a,
   .product-style-6 .product-wrapper:hover .product-info .product-price .price ins,
   .product-style-6 .product-wrapper:hover .product-info .star-rating a {
      color: var(--theme-white-color) !important;
   }
   .product-style-6
      .product-wrapper
      .product-info
      .hover-area
      .add_to_cart_button {
      text-transform: uppercase;
      font-size: 13px;
      font-weight: 500;
      padding: 0 20px 0 40px;
      line-height: 40px;
      background-color: var(--theme-dark-color);
      text-indent: 0;
      color: var(--theme-white-color);
   }
   .product-style-6
      .product-wrapper
      .product-info
      .hover-area
      .add_to_cart_button::after {
      left: 20px;
   }
   .product-style-7 .product-wrapper .product-image .hover-area {
      flex-direction: row;
      position: absolute;
      bottom: -40px;
      width: auto;
      margin: 0;
      left: 50%;
      transform: translateX(-50%);
      background: #fff;
      padding: 5px 10px;
      box-shadow: 0 0.15rem 1rem rgb(0 0 0 / 8%);
      z-index: 100;
   }
   .product-style-7 .product-wrapper:hover .product-image .hover-area {
      bottom: 15px;
   }
   .product-style-7 .product-wrapper .hover-area [class*="-button"] a {
      width: 35px;
      height: 30px;
      background-color: var(--theme-white-color);
      border-right: 1px solid var(--theme-gray-color);
      color: var(--theme-dark-color);
   }
   .product-style-7
      .product-wrapper
      .hover-area
      > [class*="-button"]:last-child
      a {
      border: none;
   }
   .product-style-7 .product-wrapper .hover-area [class*="-button"] a::after {
      left: 50%;
      transform: translate(-50%, -50%);
   }
   .product-style-7 .product-wrapper .hover-area [class*="-button"] a:hover {
      color: var(--theme-primary-color);
   }
   .product-style-7 .product-wrapper .product-image .wishlist-view,
   .product-style-7 .product-wrapper .product-image .product-variations,
   .product-style-7 .product-wrapper .product-info .product-cats,
   .product-style-7 .product-wrapper .product-info .product-price .on-sale,
   .product-style-7 .product-wrapper .product-info .shipping-cost,
   .product-style-7 .product-wrapper .product-info .shipping-feed-back .sold-items,
   .product-style-7 .product-wrapper .product-info .hover-area {
      display: none;
   }
   /*==================================================================== Team Member =====================================================================*/
   .team-carousel.owl-mx-15 {
      display: flex;
      flex-wrap: wrap;
      margin-left: -15px;
      margin-right: -15px;
   }
   /*==================================================================== Food Corner Page Style Start =====================================================================*/
   .custom-class-119 .taste-content,
   .custom-class-120 .taste-content {
      padding: 10px 25px;
      color: var(--theme-white-color);
      outline: 2px dashed;
      display: table;
      font-size: 21px;
      font-weight: 400;
   }
   .custom-class-120 .taste-content {
      font-size: 30px;
      font-weight: 500;
      font-family: var(--theme-highlight-font);
      padding: 15px 30px;
      margin-top: 20px;
   }
   .custom-class-119 .display-1 {
      font-size: 100px;
      font-weight: 700;
      margin: 30px 0 20px;
      color: var(--theme-extra2-color);
      text-transform: uppercase;
   }
   .custom-class-119 .display-2 {
      font-size: 48px;
      font-weight: 700;
      color: var(--theme-white-color);
      text-transform: uppercase;
   }
   .custom-class-120 .display-5 {
      font-size: 30px;
      font-weight: 500;
      margin: 40px 0;
   }
   .custom-class-119 p,
   .custom-class-120 p {
      font-size: 18px;
      color: var(--theme-white-color);
      line-height: 30px;
      margin-top: 20px;
   }
   .custom-class-119 .display-3 {
      font-size: 24px;
      color: var(--theme-white-color);
      margin: 20px 0;
   }
   .custom-class-119 .delivary-express {
      position: relative;
      padding: 5px 25px;
      background-color: var(--theme-primary-color);
      font-weight: 500;
      font-size: 20px;
      display: flex;
      width: max-content;
      color: var(--theme-white-color);
      align-items: center;
      margin: 30px 0;
   }
   .custom-class-119 .delivary-express::before,
   .custom-class-119 .delivary-express::after {
      content: "";
      position: absolute;
      left: 100%;
      bottom: 0;
      height: 100%;
      border-right: 30px solid transparent;
   }
   .custom-class-119 .delivary-express::before {
      border-top: 40px solid var(--theme-primary-color);
   }
   .custom-class-119 .delivary-express::after {
      border-bottom: 40px solid var(--theme-primary-color);
   }
   .custom-class-119 .delivary-express .delivery-number {
      display: flex;
      flex-direction: column;
      justify-content: center;
   }
   .custom-class-119 .email {
      font-size: 21px;
      font-weight: 400;
      color: var(--theme-white-color);
      text-align: right;
      margin-top: 30px;
   }
   .custom-class-122 .banner-content {
      top: 50%;
      right: 12%;
      text-align: right;
      height: 320px;
      width: 130px;
   }
   .custom-class-122 .banner-content::before {
      content: "";
      width: 100%;
      height: 100%;
      border: 3px solid var(--theme-primary-color);
      background-color: transparent;
      right: 0;
      top: 0;
      position: absolute;
   }
   .custom-class-122 .banner-content::after {
      content: "";
      position: absolute;
      top: 50%;
      left: 0;
      width: 3px;
      height: 70%;
      transform: translateY(-50%);
      background: var(--theme-light-color);
   }
   .custom-class-122 .middle-content {
      position: absolute;
      top: 50%;
      right: 50px;
      width: max-content;
      transform: translateY(-50%);
      z-index: 9;
   }
   .custom-class-122 .up-to-sale {
      font-size: 17px;
      font-weight: 500;
      color: var(--theme-extra-color);
      letter-spacing: 3px;
      text-transform: uppercase;
   }
   .custom-class-122 h3 {
      letter-spacing: 2px;
      text-transform: uppercase;
      margin: 20px 0;
   }
   .custom-class-122 .category {
      font-weight: 500;
      font-size: 15px;
      color: var(--theme-secondary-color);
      text-transform: uppercase;
   }
   .custom-class-123 .banner-content,
   .custom-class-126 .banner-content {
      width: 90%;
      height: 90%;
      background-color: var(--theme-white-opacity90-color);
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
   }
   .custom-class-123 .banner-content .middle-content,
   .custom-class-126 .banner-content .middle-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
   }
   .custom-class-123 .banner-content .category {
      font-size: 18px;
      font-weight: 500;
      color: var(--theme-secondary-color);
      letter-spacing: 2px;
   }
   .custom-class-123 .banner-content .sale,
   .custom-class-126 .banner-content .sale {
      font-size: 100px;
      font-weight: 600;
      text-transform: uppercase;
      color: var(--theme-extra-color);
      letter-spacing: 10px;
      display: block;
   }
   .custom-class-123 .banner-content .up-to-sale {
      font-size: 15px;
      font-weight: 500;
      text-transform: uppercase;
      color: var(--theme-secondary-color);
      display: block;
      margin-bottom: 25px;
   }
   .custom-class-124 .banner-content {
      top: 0;
      left: 0;
      padding: 50px;
   }
   .custom-class-124 .banner-content .category {
      font-size: 18px;
      font-weight: 500;
      color: var(--theme-secondary-color);
      letter-spacing: 3px;
      margin-bottom: 10px;
   }
   .custom-class-124 .banner-content h3 {
      margin: 10px 0 30px;
   }
   .custom-class-124 .banner-content h3 a {
      color: var(--theme-primary-color);
      text-transform: uppercase;
      letter-spacing: 5px;
   }
   .custom-class-123 .banner-content .btn,
   .custom-class-124 .banner-content .btn {
      text-transform: uppercase;
      font-size: 13px;
      letter-spacing: 2px;
   }
   .custom-class-125 .banner-content {
      left: 30px;
      bottom: 30px;
   }
   .custom-class-125 .banner-content .category {
      font-weight: 500;
      text-transform: uppercase;
   }
   .custom-class-125 .banner-content .title,
   .custom-class-127 .banner-content .title,
   .custom-class-128 .banner-content .title,
   .custom-class-130 .banner-content .title,
   .custom-class-131 .banner-content .title,
   .custom-class-132 .banner-content .title {
      position: relative;
      padding-bottom: 10px;
      margin: 0 0 20px;
   }
   .custom-class-130 .banner-content .title,
   .custom-class-131 .banner-content .title {
      margin-left: auto;
      display: table;
   }
   .custom-class-125 .banner-content .title::after,
   .custom-class-127 .banner-content .title::after,
   .custom-class-128 .banner-content .title::after,
   .custom-class-130 .banner-content .title::after,
   .custom-class-131 .banner-content .title::after {
      position: absolute;
      content: "";
      width: 50px;
      height: 2px;
      background-color: var(--theme-secondary-color);
      top: 100%;
      left: 0;
   }
   [class*="custom-class-"].text-left .banner-content .title::after {
      left: 0;
      right: inherit;
   }
   [class*="custom-class-"].text-right .banner-content .title::after {
      left: inherit;
      right: 0;
   }
   .custom-class-126 .banner-content .category {
      font-size: 17px;
      font-weight: 400;
      color: var(--theme-secondary-color);
      letter-spacing: 2px;
      font-family: var(--theme-highlight-font);
   }
   .custom-class-126 .banner-content .sale {
      color: var(--theme-primary-color);
   }
   .custom-class-126 .banner-content .up-to-sale {
      font-size: 24px;
      font-weight: 500;
      text-transform: uppercase;
      color: var(--theme-secondary-color);
      display: block;
      margin-bottom: 25px;
      letter-spacing: 6px;
   }
   .custom-class-126 .banner-content .btn {
      border-radius: 0;
   }
   .custom-class-127 .banner-content {
      top: 0;
      left: 0;
      padding: 20px;
   }
   .custom-class-128 .banner-content,
   .custom-class-132 .banner-content {
      bottom: 0;
      left: 0;
      padding: 20px;
   }
   .custom-class-129 .banner-content {
      top: 0;
      left: 0;
      padding: 50px;
   }
   .custom-class-130 .banner-content {
      top: 0;
      right: 0;
      padding: 20px;
   }
   .custom-class-131 .banner-content {
      bottom: 0;
      right: 0;
      padding: 20px;
   }
   .custom-class-130 .banner-content,
   .custom-class-131 .banner-content {
      text-align: right;
   }
   .custom-class-133 .banner-content {
      bottom: 0;
      left: 0;
      padding: 20px;
   }
   .custom-class-134 .banner-content {
      width: 450px;
      text-align: center;
   }
   .custom-class-135 .banner-image {
      scale: 1.1;
      margin-left: -20px;
   }
   .food-menu-list {
      position: relative;
   }
   .food-menu-list .quantity {
      position: absolute;
      top: 30px;
      right: 0;
      background-color: var(--theme-light-color);
      color: var(--theme-dark-color);
      margin: 0 !important;
      padding: 5px 10px;
      font-size: 13px;
      font-weight: 500;
   }
   .food-menu-list a {
      color: var(--theme-white-color);
      font-size: 17px;
      text-transform: uppercase;
      font-weight: 500;
      display: flex;
      justify-content: space-between;
      margin-bottom: 15px;
   }
   .food-menu-list a span {
      color: var(--theme-primary-color);
   }
   .food-menu-list > p {
      font-size: 15px;
      padding-right: 70px;
   }
   .family-food-image {
      margin-bottom: -130px;
      position: relative;
      z-index: 1;
   }
   /*==================================================================== Classic Fashion Page Style Start =====================================================================*/
   .down-line-secondary {
      padding-bottom: 15px;
      position: relative;
   }
   .down-line-secondary::before {
      width: 100px;
      height: 2px;
      background: var(--theme-secondary-color);
      content: "";
      top: 100%;
      left: 0;
      position: absolute;
   }
   .custom-class-121 .banner-image {
      width: 80%;
   }
   .custom-class-121.image-right .banner-image {
      margin-left: auto;
   }
   .custom-class-121 .banner-content {
      bottom: 10%;
      right: 0;
      width: 225px;
   }
   .custom-class-121.image-right .banner-content {
      left: 0;
      width: 250px;
      text-align: right;
      right: auto;
   }
   .custom-class-121 .product-tag {
      font-size: 15px;
      text-transform: uppercase;
      color: var(--theme-secondary-color);
      letter-spacing: 3px;
   }
   .custom-class-121 h2 {
      margin: 10px 0 20px;
   }
   .custom-class-121.image-right .btn-link-right-line {
      margin-left: auto;
   }
   .products-avilable-number {
      background: url("../images/shape/4.png") no-repeat center right;
      display: flex;
      flex-direction: column;
      min-height: 540px;
      height: 100%;
   }
   .products-avilable-number .counting,
   .products-avilable-number .title {
      font-weight: 400;
      color: var(--theme-secondary-color);
      display: block;
      text-align: right;
      letter-spacing: 5px;
      font-weight: 900;
   }
   .products-avilable-number .counting {
      font-size: 72px;
      display: flex;
      justify-content: end;
      align-items: center;
   }
   .products-avilable-number .title {
      font-size: 30px;
   }
   .offer-product .product-wrapper .product-info {
      padding: 0;
   }
   .offer-product .product-wrapper .product-info .product-cats a {
      font-family: var(--theme-extra-font);
      font-size: 15px;
      color: var(--theme-general-color);
   }
   .offer-product .product-wrapper .product-info .product-cats {
      margin-bottom: 10px;
   }
   .offer-product .product-wrapper .product-info .product-title,
   .offer-product .product-wrapper .product-info .product-title a {
      font-weight: 500;
      font-size: 18px;
      text-transform: uppercase;
   }
   .offer-product .product-wrapper .product-info .product-price {
      margin: 10px 0;
   }
   /*==================================================================== Products list Style Start =====================================================================*/
   .product-list.e-bg-white .product-wrapper::before {
      background: var(--theme-white-color);
   }
   .product-list.e-bg-light .product-wrapper::before {
      background: var(--theme-light-color);
   }
   .product-list .product-wrapper:hover::before {
      display: block;
   }
   .product-list .product-wrapper .product-image .wishlist-view {
      top: 10px;
      right: 0px;
   }
   .product-list .product-wrapper .product-image {
      width: 34.5%;
      height: 100%;
   }
   .product-list .product-wrapper .product-info {
      width: 65.5%;
      height: 100%;
   }
   .product-list .product-wrapper:hover .hover-area {
      box-shadow: none;
   }
   /*==================================================================== Breadcrumb Style Start =====================================================================*/
   .breadcrumb-divider-arrow .breadcrumb-item + .breadcrumb-item::before {
      content: var(--bs-breadcrumb-divider, ">");
      color: var(--theme-secondary-color);
   }
   .breadcrumb-divider-slash .breadcrumb-item + .breadcrumb-item::before {
      content: var(--bs-breadcrumb-divider, "/");
      color: var(--theme-secondary-color);
   }
   .breadcrumb-divider-dot .breadcrumb-item + .breadcrumb-item::before {
      content: var(--bs-breadcrumb-divider, ".");
      color: var(--theme-secondary-color);
   }
   /*==================================================================== Woocommerce Products Header Style Start =====================================================================*/
   .woocommerce-products-header__title.page-title {
      margin-bottom: 0;
      margin-right: 10px;
   }
   .woocommerce-result-count {
      font-size: 15px;
   }
   .products-header-right {
      display: flex;
      align-items: center;
   }
   .products-header-right select {
      border-radius: 50rem;
      border: 1px solid var(--theme-gray-color);
      margin-left: 10px;
      background-color: var(--theme-white-color);
      height: 40px;
   }
   .woocommerce-ordering {
      margin: 0 25px 0 0;
   }
   .products-view a {
      color: var(--theme-secondary-color);
   }
   .products-view a:last-child {
      margin-left: 10px;
   }
   /*==================================================================== Woocommerce Single Shop Style Start =====================================================================*/
   .woocommerce-Reviews {
      display: flex;
      justify-content: space-between;
      padding-top: 30px;
   }
   .woocommerce-tabs #reviews #respond #reply-title {
      font-weight: 500;
      color: var(--theme-dark-color);
      font-size: 24px;
      padding-bottom: 25px;
      display: inline-block;
      text-transform: capitalize;
   }
   .comment-form-rating label {
      margin-right: 15px;
   }
   .submit.btn {
      height: 45px;
      font-weight: 600 !important;
   }
   .stars {
      display: inline-block;
   }
   .stars .star {
      float: left;
   }
   .stars .star + .star {
      padding-left: 10px;
   }
   .star.hover {
      color: #fcc400;
   }
   .comment-form-rating {
      display: flex;
   }
   .product_title.entry-title {
      font-size: 24px;
   }
   .bigbazar-arrow::before {
      top: 0;
      right: 30px;
      content: "\f177";
      position: absolute;
      font-family: flaticon !important;
   }
   .summary.entry-summary {
      max-width: 100% !important;
   }
   .product-navigation-share {
      position: absolute;
      right: 0;
      top: 0;
   }
   .product-navigation-share .product-share {
      margin-right: 15px;
      width: 30px;
      height: 30px;
   }
   .product-navigation-share .bigbazar-social {
      box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
      position: absolute;
      opacity: 0;
      right: -20px;
      top: 100%;
      visibility: hidden;
      transition: transform 0.4s ease, opacity 0.4s ease, visibility 0.4s ease;
      display: flex;
      background-color: var(--theme-white-color);
   }
   .product-navigation-share .product-share:hover .bigbazar-social {
      opacity: 1;
      visibility: visible;
   }
   .product-navigation-share .product-share .bigbazar-social a {
      font-size: 12px;
      line-height: 30px;
      width: 30px;
      text-align: center;
      display: block;
      color: var(--theme-dark-color);
   }
   .product-navigation-share .product-share .bigbazar-social a:hover {
      color: var(--theme-primary-color);
   }
   div.summary-inner > p.price,
   div.summary-inner > span.price {
      font-size: 24px;
      margin-bottom: 0;
      display: inline-flex !important;
      font-weight: 500;
      color: var(--theme-dark-color);
   }
   .woocommerce-product-rating .fancy-star-rating {
      display: flex;
      align-items: center;
   }
   .fancy-star-rating .fancy-rating.good {
      background-color: var(--theme-extra-color);
      border-radius: 2px;
      color: #fff;
      font-weight: 400;
      font-size: 13px;
      padding: 0px 4px;
   }
   .rating-counts-wrap {
      cursor: pointer;
      padding-left: 5px;
   }
   .pro-details {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      margin: 15px -10px 5px;
   }
   .pro-details .pro-info {
      width: 268px;
      margin: 10px;
      flex-grow: 1;
   }
   .pro-summary {
      width: 100%;
   }
   @media screen and (max-width: 767px) {
      .pro-details .pro-info {
         width: 260px;
         flex-grow: 1;
         max-width: 100%;
      }
   }
   div.summary .product-price-discount,
   div.summary .product-price-summary {
      display: inline-flex;
      vertical-align: super;
   }
   div.summary .product-price-summary {
      cursor: pointer;
      position: relative;
      margin-left: 10px;
   }
   .price-summary {
      box-shadow: 0 0 4px rgba(0, 0, 0, 0.15);
      opacity: 666;
      width: 100%;
      background: var(--theme-white-color);
      border-radius: 0 0 5px 5px;
   }
   .price-summary .price-summary-content h5 {
      background: #bd2222;
      color: #fff;
      padding: 10px;
      border-radius: 5px 5px 0 0;
   }
   .price-summary .price-summary-content .price-summary-list {
      padding: 5px 20px 15px;
   }
   .price-summary label {
      -ms-flex: auto;
      flex: auto;
      padding-right: 24px;
   }
   .price-summary label span {
      font-size: 10px;
   }
   .price-summary li {
      font-size: 13px;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-pack: justify;
      justify-content: space-between;
      margin: 10px 0;
      font-weight: 500;
   }
   .price-summary .discount span {
      color: var(--theme-primary-color);
   }
   .price-summary .total-discount {
      border-top: 1px solid var(--theme-gray-color);
      border-bottom: 1px solid var(--theme-gray-color);
      padding: 5px 0;
   }
   .price-summary .overall-discount {
      display: block;
      font-weight: 600;
      padding-top: 5px;
      color: var(--theme-secondary-color);
   }
   .price-summary.bigbazar-arrow::before {
      right: auto;
      transform: translateX(-50%);
      left: 50%;
   }
   .product-price-summary:hover .price-summary {
      opacity: 1;
      visibility: visible;
   }
   .product-price-summary > i {
      box-sizing: border-box;
      border: 1px solid var(--theme-gray-color);
      background-color: var(--theme-white-color);
      font-size: 12px;
      width: 20px;
      height: 20px;
      text-align: center;
      line-height: 20px;
      border-radius: 50%;
   }
   div.summary .stock-availability.in-stock {
      color: #388e3c;
      margin: 15px 0;
      font-weight: 500;
      font-size: 13px;
   }
   .product-offer-item {
      margin: 10px 0;
   }
   .product-offer-item::before {
      content: "\f02b";
      font-weight: 900;
      font-family: "Font Awesome 5 Free";
      margin-right: 10px;
      color: var(--theme-primary-color);
   }
   div.summary .product-term-wrap {
      display: inline-block;
      margin-left: 5px;
      color: var(--theme-secondary-color);
      font-weight: 600;
      cursor: pointer;
   }
   div.summary .woocommerce-product-details__short-description,
   div.summary .product-services {
      display: flex;
      margin-top: 1.5em;
   }
   form.cart .variations td.label,
   div.summary .woocommerce-product-details__short-description > span,
   div.summary .product-services > span {
      width: 115px;
      font-weight: 600;
      padding-right: 0;
   }
   form.cart .variations td.label label {
      width: 115px;
      font-weight: 600;
   }
   div.summary .woocommerce-product-details__short-description .short-description,
   div.summary .product-services .product-services-list {
      flex: 0 0 calc(100% - 115px);
   }
   div.summary .product-services .product-services-list,
   div.summary
      .woocommerce-product-details__short-description
      .short-description
      ul {
      list-style: disc;
      line-height: 28px;
   }
   div.summary .product-brands,
   div.summary .variations_form.cart {
      margin-top: 1.5em;
   }
   form.cart .variations {
      width: 100%;
   }
   .variations_form table tr {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
   }
   .variations_form table tr form.cart table td {
      padding: 10px 10px 10px 0;
   }
   .entry-summary form div {
      margin-bottom: 0 !important;
   }
   .bigbazar-swatches {
      display: flex;
   }
   .bigbazar-swatches .swatch.swatch-selected {
      border-color: #2370f4;
      display: -ms-inline-flexbox;
      display: inline-flex;
   }
   .bigbazar-swatches .swatch {
      border: 2px solid transparent;
      margin-right: 5px;
      margin-bottom: 2px;
      margin-top: 2px;
      padding: 2px;
      text-align: center;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: row;
      flex-direction: row;
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
      -ms-flex-align: center;
      align-items: center;
   }
   .bigbazar-swatches .swatch.swatch-color span {
      text-indent: -99999px;
   }
   .bigbazar-swatches .swatch.swatch-circle,
   .bigbazar-swatches .swatch.swatch-circle span,
   .bigbazar-swatches .swatch.swatch-circle img {
      border-radius: 50%;
      width: 30px;
      height: 30px;
   }
   .bigbazar-swatches .swatch span,
   .bigbazar-swatches .swatch img {
      display: inline-block;
      cursor: pointer;
      width: 24px !important;
      height: 24px !important;
      line-height: 24px;
      transition: all 0.3s;
   }
   input[type="number"]::-webkit-inner-spin-button,
   input[type="number"]::-webkit-outer-spin-button {
      -webkit-appearance: none;
      margin: 0;
   }
   input[type="number"] {
      -moz-appearance: textfield;
   }
   .quantity {
      display: inline-block;
      margin: 0 0px;
      position: relative;
      /* margin-bottom: 30px !important;
       */
   }
   ul.info-list p {
      line-height: 10px !important;
   }
   .fas:before {
      margin-right: 6px;
   }
   .preload-close .fas:before {
      margin-right: 0px;
   }
   .entry-summary form div input,
   .entry-summary select,
   .quantity input {
      display: table;
      width: 70px;
      height: 40px;
      text-align: center;
      margin-right: 1px;
      margin-left: 1px;
      position: relative;
      z-index: 10;
   }
   .quantity-nav {
      position: absolute;
      height: 42px;
      width: calc(100% + 90px);
      left: -45px;
      display: flex;
      justify-content: space-between;
      top: 0;
   }
   .quantity .quantity-button {
      cursor: pointer;
      border: 1px solid var(--theme-gray-color);
      width: 40px;
      text-align: center;
      color: var(--theme-general-color);
      font-size: 15px;
      line-height: 36px;
      height: 40px;
      background: transparent;
   }
   .reset_variations {
      border: 1px solid var(--theme-gray-color);
      padding: 7px 10px;
      font-weight: 600;
      color: var(--theme-dark-color);
   }
   .entry-summary form,
   .single_variation_wrap {
      display: flex;
      align-items: center;
      margin-bottom: 30px;
      flex-wrap: wrap;
      margin-top: 30px;
      margin-left: 45px;
   }
   button#addcrt {
      background: black;
      color: white;
      padding: 8px 20px;
      margin-left: 45px;
   }
   .pro-cart {
      background: black;
      color: white;
      padding: 0px 10px;
      margin-left: 45px;
   }
   a.add-cart.button.add_to_cart_button.pro-cart:hover {
      background: black;
      color: rgb(246, 180, 125);
      padding: 0px 10px;
      margin-left: 45px;
   }
   .pro-check {
      background: black;
      color: white;
      padding: 0px 10px;
      margin-left: 57px;
      justify-content: center;
      text-align: center;
      padding: 8px 19px;
   }
   button.bigbazar_quick_buy_button.bigbazar_quick_buy_variable.bigbazar_quick_buy_58 {
      background: black;
      color: white;
      padding: 8px 20px;
   }
   .bigbazar-quick-buy {
      margin-left: 10px;
   }
   .woocommerce-variation-add-to-cart {
      display: flex;
      width: max-content;
      margin-left: -15%;
   }
   img.img-fluid.user {
      border-radius: 50%;
   }
   .product-subtotal p {
      margin-bottom: 1px;
   }
   .entry-summary form button,
   .entry-summary form div button {
      height: 40px;
      line-height: 30px;
   }
   div.product form.variations_form.cart .single_variation {
      margin-bottom: 1em;
   }
   div.summary .woocommerce-variation-price span.price {
      font-size: 22px;
   }
   div.summary .woocommerce-variation-price span.price del {
      font-size: 14px;
      opacity: 0.5;
      display: inline-block;
      font-weight: 400;
      margin-left: 8px;
      order: 2;
   }
   .product span.price ins {
      background: none;
      padding: 0;
      color: inherit;
      border-radius: 0;
      order: 1;
   }
   .summary.entry-summary .price ins {
      font-size: 25px;
      color: var(--theme-dark-color);
      font-weight: 600;
   }
   .product_meta {
      display: flex;
      flex-direction: column;
   }
   .product_meta > span {
      font-size: 14px;
      font-weight: 600;
      color: var(--theme-dark-color);
      margin: 5px 0;
   }
   .product_meta > span span,
   .product_meta > span a {
      font-weight: 400;
      color: var(--theme-general-color);
   }
   .product_meta > span a:hover {
      color: var(--theme-primary-color);
   }
   .product-tab-table {
      border: 1px solid var(--theme-gray-color);
      display: table;
   }
   .comment-form label {
      margin-bottom: 10px;
      display: block;
   }
   .summary.entry-summary,
   .woocommerce-product-gallery {
      max-width: 100%;
      padding: 0;
   }
   .brand-image {
      display: block;
      width: 200px;
   }
   .detail-desc-decorate-title {
      margin-bottom: 9px;
   }
   .detail-desc-decorate-content li {
      margin-bottom: 10px;
   }
   table.shop_attributes {
      width: 100%;
   }
   table.shop_attributes tr {
      border: 1px solid var(--theme-gray-color);
   }
   table.shop_attributes th {
      width: 200px;
      padding: 8px;
   }
   table.shop_attributes td p {
      margin: 0;
      padding: 8px 0;
   }
   table.shop_attributes tr:nth-child(2n) td,
   table.shop_attributes tr:nth-child(2n) th {
      background: rgba(0, 0, 0, 0.025);
   }
   /* Single Shop elevateZoom Style Start*/
   .woocommerce-product-gallery__wrapper {
      background-color: transparent;
   }
   .product-slide-thumb {
      display: flex;
      margin-top: 30px;
   }
   .product-slide-thumb a:not(:last-child) {
      margin-right: 20px;
   }
   /*==================================================================== Left sidebar Style Start =====================================================================*/
   #sidebar .widget:last-child {
      margin-bottom: 0 !important;
   }
   .widget_search input,
   .search-widget input {
      padding: 13px 35px 13px 20px;
   }
   .widget-padding-one .widget {
      padding: 25px 20px;
      border: none;
   }
   .widget_product_categories ul li {
      border: none;
      position: relative;
   }
   .widget_product_categories ul li a {
      font-size: 14px;
      font-weight: 500;
   }
   .widget_product_categories .cat-item.cat-parent.open > a,
   .widget_product_categories ul li a:hover {
      color: var(--theme-primary-color);
   }
   .widget_product_categories .cat-item.cat-parent > a {
      position: relative;
      display: table;
   }
   .widget_product_categories .cat-item.cat-parent .has-child {
      display: block;
      position: absolute;
      top: 10px;
      right: 0;
      cursor: pointer;
      transition: all ease 0.3s;
      -webkit-transition: all ease 0.3s;
      -moz-transition: all ease 0.3s;
   }
   .widget_product_categories .cat-item.cat-parent .has-child::after {
      font-family: "Font Awesome 5 Free";
      content: "\f078";
      font-size: 10px;
      width: 20px;
      height: 20px;
      display: block;
      font-weight: 900;
      transition: all ease 0.3s;
      -webkit-transition: all ease 0.3s;
      text-align: center;
      -moz-transition: all ease 0.3s;
      text-align: center;
   }
   .cat-item.cat-parent.open > .has-child {
      transform: rotate(-180deg);
   }
   .cat-item.cat-parent ul.children {
      margin-left: 15px;
      margin-top: 5px;
      display: none;
   }
   .widget_product_categories .cat-item.cat-parent a span {
      float: inherit;
      margin-left: 3px;
   }
   .widget.widget_layered_nav li.wc-layered-nav-term {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: row;
      flex-direction: row;
      -ms-flex-align: center;
      align-items: center;
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      position: relative;
      color: var(--theme-general-color);
      cursor: pointer;
   }
   .widget.widget_layered_nav li.wc-layered-nav-term.chosen,
   .widget.widget_layered_nav li:hover {
      color: var(--theme-secondary-color);
   }
   .widget.widget_layered_nav li.wc-layered-nav-term.chosen::before,
   .widget.widget_layered_nav li.wc-layered-nav-term:hover::before {
      border: 5px solid;
      border-color: #2370f4;
   }
   .widget.widget_layered_nav li.wc-layered-nav-term::before {
      border: 1px solid #e9e9e9;
      background-color: #fff;
      border-radius: 50%;
      content: "";
      display: inline-table;
      height: 16px;
      margin-right: 8px;
      width: 16px;
   }
   .widget.widget_layered_nav ul li:not(:last-child) {
      margin-bottom: 15px !important;
   }
   .widget-title-bordered-full .widget-title {
      font-size: 18px;
      margin-bottom: 20px;
      position: relative;
      font-weight: 500;
      border-bottom: 2px solid var(--theme-gray-color);
   }
   .widget-toggle .widget-title {
      position: relative;
      cursor: pointer;
   }
   .widget-toggle .widget-title::after {
      position: absolute;
      top: 7px;
      right: 0;
      font-family: "Font Awesome 5 Free";
      content: "\f078";
      font-size: 10px;
      font-weight: 900;
   }
   .widget-toggle.closed ul {
      display: none;
   }
   .maxlist-more {
      margin-top: 15px;
      display: table;
      cursor: pointer;
      color: var(--theme-secondary-color);
      font-weight: 600;
   }
   .widget.widget_layered_nav [class*="swatch-filter-"] li:nth-child(n + 6) {
      opacity: 0;
      visibility: hidden;
      height: 0;
      display: none;
      margin-bottom: 0 !important;
   }
   .widget.widget_layered_nav
      [class*="swatch-filter-"].show-more
      li:nth-child(n + 6) {
      opacity: 1;
      visibility: visible;
      height: 100%;
      display: flex;
      margin-bottom: 15px !important;
   }
   .widget.widget_layered_nav
      [class*="swatch-filter-"].show-more
      .maxlist-more
      span:first-child,
   .widget.widget_layered_nav
      [class*="swatch-filter-"]
      .maxlist-more
      span:last-child {
      display: none;
   }
   .widget.widget_layered_nav
      [class*="swatch-filter-"].show-more
      .maxlist-more
      span:last-child {
      display: block;
   }
   /* ==================================================================== About Page Style Start =====================================================================*/
   .history-tab .nav-item {
      padding: 0;
   }
   .history-tab .nav-item a {
      border-width: 0 0 2px 0 !important;
      border-style: solid !important;
      border-color: var(--theme-primary-color) !important;
      padding: 10px 20px;
      color: var(--theme-dark-color) !important;
      background-color: transparent !important;
      border-radius: 0;
      font-size: 20px;
      font-weight: 600;
      letter-spacing: 2px;
      position: relative;
   }
   .history-tab .nav-item + .nav-item a {
      margin-left: 3px;
   }
   .history-tab .nav-item a.active::after {
      content: "";
      position: absolute;
      width: 10px;
      height: 10px;
      border: 2px solid;
      border-color: var(--theme-primary-color);
      background-color: var(--theme-light-color);
      border-top: transparent;
      border-left: transparent;
      bottom: -7px;
      left: 50%;
      transform: translateX(-50%) rotate(45deg) !important;
   }
   .history-tab #pills-tab-one {
      justify-content: center;
   }
   /* ==================================================================== Blog Page Style Start =====================================================================*/
   .embed-responsive iframe {
      width: 100%;
      height: 400px;
      border: 0;
   }
   .media {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: start;
      align-items: flex-start;
   }
   .single-post-page .post-meta > span {
      border: none;
   }
   .single-post-page .post-meta > span {
      margin: 0;
      padding: 0;
   }
   .single-post-page .post-meta > span:after {
      font-weight: 600;
      padding: 0 6px;
   }
   .single-post-page .post-meta > *:last-child:after {
      content: none;
   }
   .meta-separator-slash .post-meta > span:after {
      content: "\002F";
   }
   .meta-separator-colon .post-meta > span:after {
      content: "\003A";
   }
   .meta-separator-dot .post-meta > span:after {
      content: "\002E";
   }
   .meta-separator-bar .post-meta > span:after {
      content: "\007C";
   }
   .meta-separator-hyphen .post-meta > span:after {
      content: "\002D";
   }
   .meta-separator-tilde .post-meta > span:after {
      content: "\007E";
   }
   /* ==================================================================== Service Page Style Start =====================================================================*/
   .frame1 {
      border: 5px solid #fcf8f5;
      border-bottom: none;
   }
   .frame1::before,
   .frame1::after {
      content: "";
      position: absolute;
      bottom: -15px;
      width: 58px;
      height: 5px;
      background: #fcf8f5;
   }
   .frame1::before {
      left: -8px;
      transform: rotate(30deg);
   }
   .frame1::after {
      right: -8px;
      transform: rotate(-30deg);
   }
   .btn-circle {
      width: 46px;
      height: 46px;
      border: 1px solid #d8a15a;
      line-height: 46px;
      text-align: center;
      display: block;
      border-radius: 50%;
      margin: 30px auto 0;
   }
   /* ==================================================================== Portfolio Page Style Start =====================================================================*/
   .mix-tab .nav-link {
      margin: 5px 0;
   }
   .portfolio-carousel .owl-carousel .owl-nav button,
   .single-image-carousel .owl-carousel .owl-nav button {
      background-color: transparent;
   }
   .nav-tab-border-active .mixitup-control-active {
      border: 2px solid;
      border-color: var(--theme-primary-color);
      border-radius: 20px;
   }
   .mix-tab ul li,
   .tab-simple ul li {
      font-weight: 500;
      font-size: 17px;
      letter-spacing: 1px;
   }
   .mix-tab ul.nav-tab-border-active li {
      padding: 5px 25px;
   }
   .nav-tab-border-active li {
      border: 2px solid;
      border-color: transparent;
   }
   /* ==================================================================== General Support Page Style Start =====================================================================*/
   .support-thumbnail li {
      line-height: 40px;
   }
   /* ==================================================================== Support Article Detail Page Style Start =====================================================================*/
   .artical-list li a {
      padding: 8px 0;
      display: inline-block;
   }
   /* ==================================================================== Contact Page Style Start =====================================================================*/
   form#contact-form label {
      font-weight: 600;
      margin-bottom: 10px;
   }
   /* ==================================================================== Pagination Style Start =====================================================================*/
   .pagination-style-one .page-item {
      margin-right: 5px;
   }
   .pagination-style-one .page-item .page-link {
      border-radius: 50%;
      width: 40px;
      height: 40px;
      line-height: 38px;
      font-size: 14px;
      text-align: center;
      padding: 0;
   }
   .pagination-style-one .page-item .page-link:hover {
      background-color: var(--theme-primary-color);
      border-color: var(--theme-primary-color);
      color: var(--theme-dark-color);
   }
   /* ==================================================================== Fact Counter Style Start =====================================================================*/
   .bar-progress {
      font-weight: 400;
      font-size: 15px;
      color: var(--theme-general-color) !important;
   }
   .bar-progress span {
      margin-bottom: 5px;
      display: inline-block;
   }
   .progress-bar {
      transition: all 3000ms linear 0s;
      height: 5px;
      border-radius: 5px;
   }
   .fact-counter .progress {
      height: 5px;
      border-radius: 5px;
   }
   .bar-progress .skill-percent {
      font-size: 14px;
      padding-top: 5px;
   }
   .bar-progress .skill-percent span {
      color: var(--theme-extra-color);
   }
   .bar-progress .skill-percent span {
      color: var(--theme-general-color);
   }
   .bar-progress .skill-percent .count-num {
      font-size: 15px;
   }
   /* ==================================================================== Owl carousel Style Start =====================================================================*/
   .owl-dots-my-one .owl-dots {
      margin-top: 20px;
      margin-bottom: 20px;
   }
   .flash a:hover {
      background: #fff !important;
      color: #c9030f;
      border: 1px solid #c9030f;
   }
   .e-hover-border-one.owl-carousel .owl-stage-outer {
      padding-top: 0;
   }
   .owl-outer-border-light .owl-stage-outer {
      border: 1px solid var(--theme-gray-color);
   }
   .outer-bg-white .owl-stage-outer {
      background-color: var(--theme-white-color);
   }
   .owl-m-one .owl-item > div {
      margin: 3px;
   }
   .owl-mx-5 .owl-item.active > div {
      margin: 0 5px;
   }
   .owl-mx-15 .owl-item.active > div {
      margin: 0 15px;
   }
   .owl-mx-20 .owl-item > div {
      margin: 0 20px;
   }
   .products.owl-mx-20 {
      display: flex;
      flex-wrap: wrap;
      margin-left: -20px;
      margin-right: -20px;
   }
   .products.owl-mx-15 {
      display: flex;
      flex-wrap: wrap;
      margin-left: -15px;
      margin-right: -15px;
   }
   .products.owl-mx-5 {
      display: flex;
      flex-wrap: wrap;
      margin-left: -5px;
      margin-right: -5px;
   }
   .owl-item-mb-50 .owl-item {
      margin-bottom: 50px;
   }
   .owl-item-mb-40 .owl-item {
      margin-bottom: 40px;
   }
   .owl-item-mb-30 .owl-item {
      margin-bottom: 30px;
   }
   .owl-item-mb-20 .owl-item {
      margin-bottom: 20px;
   }
   .owl-item-mb-10 .owl-item {
      margin-bottom: 10px;
   }
   .owl-item-mb-5 .owl-item {
      margin-bottom: 5px;
   }
   .owl-dots-mt-10.owl-carousel .owl-dots {
      margin-top: 10px;
   }
   .owl-carousel .owl-dots {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
      top: 100%;
      margin-top: 0;
   }
   .owl-carousel.owl-dot-mt-50 .owl-dots {
      margin-top: 50px;
   }
   .owl-carousel .owl-prev.disabled,
   .owl-carousel .owl-next.disabled,
   .owl-carousel button.owl-prev.disabled:hover,
   .owl-carousel button.owl-next.disabled:hover {
      opacity: 0.6;
      cursor: no-drop;
   }
   .owl-nav-hover-primary .owl-nav button:not(.disabled):hover .nav-btn {
      color: var(--theme-primary-color);
   }
   .dot-active-one .owl-dots button.owl-dot {
      width: 15px;
      height: 15px;
      border-radius: 50px;
      border: 2px solid transparent;
      background-color: transparent !important;
   }
   .dot-active-one .owl-dots button.owl-dot.active {
      border-color: var(--theme-dark-color);
      background-color: var(--theme-white-color) !important;
      outline: none;
   }
   .dot-active-one .owl-dots button.owl-dot span {
      background-color: var(--theme-dark-color);
      width: 5px;
      height: 5px;
      display: table;
      border-radius: 50%;
      margin: 0 auto;
   }
   .nav-top-right .owl-nav {
      top: -40px;
      right: 0;
      position: absolute;
   }
   .nav-top-right .owl-nav .nav-btn {
      font-size: 13px;
      color: var(--theme-dark-color);
      font-weight: 600;
      font-family: var(--theme-highlight-font);
      margin-left: -14px;
   }
   .nav-top-right .owl-nav .nav-btn i {
      font-weight: 500;
      font-size: 11px;
   }
   .nav-top-right .owl-nav .nav-btn.next-slide i {
      margin-left: 3px;
   }
   .nav-top-right .owl-nav .nav-btn.prev-slide {
      margin-right: 20px;
   }
   [class*="nav-arrow-middle"] .owl-nav button {
      position: absolute;
      z-index: 9999;
      top: 50%;
      transform: translateY(-50%);
      box-shadow: none;
   }
   [class*="nav-arrow-middle"] .owl-nav .nav-btn {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: var(--theme-gray-color);
      line-height: 50px;
      text-align: center;
   }
   [class*="nav-arrow-middle"] .owl-nav .nav-btn span {
      display: none;
   }
   .nav-arrow-middle-show:hover .owl-nav button.owl-next,
   .owl-carousel .owl-nav button.owl-next {
      right: -25px;
   }
   .nav-arrow-middle-show:hover .owl-nav button.owl-prev,
   .owl-carousel .owl-nav button.owl-prev {
      left: -25px;
   }
   .nav-arrow-middle-show .owl-nav button.owl-prev {
      left: -30px;
   }
   .nav-arrow-middle-show .owl-nav button.owl-next {
      right: -30px;
   }
   .nav-arrow-middle-show .owl-nav button {
      opacity: 0;
      visibility: hidden;
   }
   .nav-arrow-middle-show:hover .owl-nav button {
      opacity: 1;
      visibility: visible;
   }
   .testimonial-slider .owl-nav {
      position: absolute;
      left: 0;
      top: 50%;
      width: max-content;
   }
   .testimonial-slider .owl-nav button {
      position: relative;
   }
   .testimonial-slider .owl-nav button.owl-prev {
      margin-right: 10px;
      left: 0;
   }
   .testimonial-slider .owl-nav button span {
      background-color: var(--theme-primary-color);
      color: var(--theme-footer-color);
      font-size: 25px;
      width: 40px;
      height: 40px;
      display: block;
      border: 1px solid var(--theme-primary-color);
      border-radius: 50%;
      line-height: 34px;
      text-indent: 99999999px;
      overflow: hidden;
   }
   .testimonial-slider .owl-nav button i {
      text-indent: inherit;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
   }
   .testimonial-slider .testimonial-item {
      color: var(--theme-white-color);
   }
   .fact-counter .border-top:first-child {
      border-top: none !important;
   }
   .count-num.w-7 {
      width: 70px;
   }
   .bg-light-half::before {
      background-color: var(--theme-light-color);
      left: 0;
   }
   .bg-light-half::before,
   .bg-primary-half-right::before,
   .bg-primary-half-right::after {
      width: 50%;
      height: 100%;
      position: absolute;
      top: 0;
      content: "";
   }
   /* ==================================================================== Bootstrap Slider Style Start =====================================================================*/
   .carousel-indicators.type-one {
      margin-bottom: 0;
      bottom: -20px;
      background-color: var(--theme-white-color);
      padding: 10px;
   }
   .carousel-indicators.type-one li {
      width: 13px;
      height: 13px;
      border-radius: 50%;
      margin: 0 5px;
      background-color: transparent;
      border: 2px solid transparent;
      position: relative;
   }
   .carousel-indicators.type-one li::after {
      width: 5px;
      height: 5px;
      position: absolute;
      content: "";
      left: 4px;
      top: 4px;
      background-color: var(--theme-dark-color) !important;
      border-radius: 50%;
   }
   .carousel-indicators.type-one li.active {
      border-color: var(--theme-dark-color);
      background-color: var(--theme-white-color) !important;
      outline: none;
   }
   /* ==================================================================== Testimonial Style Start =====================================================================*/
   .testimonial-classic {
      display: flex;
      flex-direction: column;
      flex-wrap: wrap;
   }
   .testimonial-classic img {
      width: 60px;
      height: 60px;
   }
   .testimonial-classic q {
      font-size: 25px;
      font-weight: 500;
      margin: 20px 0;
      color: var(--theme-dark-color);
   }
   .testimonial-classic .author span {
      font-size: 15px;
   }
   /* ==================================================================== Accordion Style Start =====================================================================*/
   .ac-card {
      background-color: var(--theme-light-color);
      padding: 15px 20px;
      margin-bottom: 15px;
   }
   .ac-collapse {
      margin-top: 20px;
   }
   .bb-accordion .ac-toggle i {
      background-color: var(--theme-secondary-color);
      width: 30px;
      height: 30px;
      display: block;
      border-radius: 50rem;
      font-size: 12px;
      text-align: center;
      line-height: 33px;
      margin-right: 10px;
      color: var(--theme-white-color);
      float: left;
   }
   [class*="accordion-plus-"] .ac-toggle {
      position: relative;
   }
   .accordion-plus-right .ac-toggle {
      padding-right: 30px;
      line-height: 30px;
      display: block;
   }
   .accordion-plus-left .ac-toggle {
      padding-left: 30px;
   }
   [class*="accordion-plus-"] .ac-toggle::before,
   [class*="accordion-plus-"] .ac-toggle::after {
      content: "";
      position: absolute;
      width: 16px;
      height: 2px;
      right: 0;
      background-color: var(--theme-dark-color);
      top: 50%;
      transform: translateY(-50%);
   }
   .accordion-plus-left .ac-toggle.active::before {
      content: "";
   }
   .accordion-plus-left .ac-toggle::before,
   .accordion-plus-left .ac-toggle::after {
      left: 0;
   }
   [class*="accordion-plus-"] .ac-toggle:not(.active):after {
      transform: rotate(90deg);
   }
   /* ==================================================================== Pricing Table Style Start =====================================================================*/
   .pricing-table .item {
      padding: 45px;
      background-color: #f7ebdf;
      border-radius: 10px;
   }
   .pricing-table .item.active {
      background-color: var(--theme-secondary-color);
      -moz-transform: scale(1.1);
      -o-transform: scale(1.1);
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
   }
   .pricing-table .item .type {
      font-weight: 500;
      font-size: 15px;
      text-transform: uppercase;
      color: var(--theme-primary-color);
      display: block;
   }
   .pricing-table .item .time {
      font-size: 30px;
      font-weight: 500;
      color: var(--theme-dark-color);
   }
   .pricing-table .item ul {
      margin: 30px 0;
   }
   .pricing-table .item ul li {
      color: var(--theme-dark-color);
      line-height: 40px;
   }
   .pricing-table .item ul li i {
      float: right;
      color: var(--theme-secondary-color);
   }
   .pricing-table .item ul li i.flaticon-cancel {
      color: var(--theme-dark-color);
   }
   .pricing-table .item .price {
      font-size: 36px;
      font-weight: 600;
      color: var(--theme-dark-color);
   }
   .pricing-table .item .price sup {
      left: 10px;
      top: -15px;
      font-size: 20px;
   }
   .pricing-table .item.active .type,
   .pricing-table .item.active .time,
   .pricing-table .item.active ul li,
   .pricing-table .item.active ul li i,
   .pricing-table .item.active .price {
      color: var(--theme-white-color);
   }
   /* ==================================================================== Tab Style Start =====================================================================*/
   .nav-pills .nav-item .nav-link:focus,
   .nav-pills .nav-item .nav-link.active {
      outline: none;
   }
   .top-collection-tab .nav-pills .nav-item .nav-link {
      font-size: 14px;
      font-weight: 500;
      text-transform: uppercase;
   }
   .top-collection-tab .nav-pills .nav-item .nav-link i {
      margin: 0 auto;
   }
   .top-collection-tab .nav-pills .nav-item .nav-link span {
      margin-top: 10px;
      display: block;
   }
   .tab-active-pill.woocommerce-tabs .nav-pills .nav-link {
      color: var(--theme-dark-color);
      border-bottom-color: transparent;
      padding: 10px 20px;
      border-radius: 50rem;
      margin-bottom: 7px;
      margin-right: 5px;
      border-bottom: none;
   }
   .tab-active-pill.woocommerce-tabs .nav-pills .nav-link:hover::before,
   .tab-active-pill.woocommerce-tabs .nav-pills .nav-link.active::before {
      display: none;
   }
   .section-head .woocommerce-tabs {
      margin: 0 0 -1px 0;
      position: relative;
      width: auto;
   }
   .section-head .woocommerce-tabs ul {
      display: flex;
      align-items: center;
   }
   .woocommerce-tabs .tab-content {
      padding: 0 0;
   }
   .woocommerce-tabs .tab-content h2 {
      font-size: 24px;
   }
   .woocommerce-tabs .nav-pills .nav-link {
      color: var(--theme-general-color);
      font-weight: 400;
      font-size: 17px;
      padding: 0 0 5px 0;
      margin-right: 20px;
      position: relative;
      border: none;
      border-bottom: 2px solid transparent;
      border-radius: 0;
      font-family: var(--theme-highlight-font);
   }
   .woocommerce-tabs .nav-pills .nav-item:last-child .nav-link {
      margin-right: 0;
   }
   .woocommerce-tabs .nav-pills .nav-link:hover,
   .woocommerce-tabs .nav-pills .nav-link.active {
      color: var(--theme-secondary-color);
      border-bottom-color: var(--theme-primary-color);
      background-color: transparent;
   }
   .woocommerce-tabs .tab-content {
      border: none;
   }
   .nav-tab-active-primary .nav-item + .nav-item,
   .nav-tab-active-dark .nav-item + .nav-item,
   .nav-tab-active-secondary .nav-item + .nav-item {
      margin-left: 30px;
   }
   .nav-tab-active-primary .nav-item .nav-link,
   .nav-tab-active-primary .nav-item .nav-link.active,
   .nav-tab-active-secondary .nav-item .nav-link,
   .nav-tab-active-secondary .nav-item .nav-link.active,
   .nav-tab-active-dark .nav-item .nav-link,
   .nav-tab-active-dark .nav-item .nav-link.active {
      background-color: transparent;
      border-bottom: 1px solid transparent;
      padding: 0;
      border-radius: 0;
   }
   .nav-tab-active-primary .nav-item .nav-link:hover,
   .nav-tab-active-primary .nav-item .nav-link.active {
      color: var(--theme-primary-color) !important;
   }
   .nav-tab-active-dark .nav-item .nav-link:hover,
   .nav-tab-active-dark .nav-item .nav-link.active {
      color: var(--theme-dark-color) !important;
   }
   .nav-tab-active-secondary .nav-item .nav-link:hover,
   .nav-tab-active-secondary .nav-item .nav-link.active {
      color: var(--theme-secondary-color) !important;
      border-bottom-color: var(--theme-general-color);
   }
   /* ==================================================================== Sign In Page Style Start =====================================================================*/
   .sign-in-form .required,
   .registration-form .required {
      color: var(--theme-extra-color);
   }
   .sign-in-form,
   .registration-form {
      padding: 50px;
      background-color: var(--theme-white-color);
      width: 100%;
   }
   .sign-in-form label,
   .registration-form label {
      margin-bottom: 5px;
   }
   .sign-in-form input:focus,
   .sign-in-form input,
   .registration-form input:focus,
   .registration-form input {
      width: 100%;
      background: var(--theme-light-color);
      padding: 5px 20px;
      border: 1px solid var(--theme-gray-color);
      border-radius: 0;
   }
   .woocommerce .woocommerce-form-login .woocommerce-form-login__submit {
      float: left;
      margin-right: 1em;
   }
   .woocommerce .woocommerce-form-login input[type="checkbox"],
   .woocommerce .woocommerce-form-login input[type="radio"] {
      width: 18px;
      cursor: pointer;
   }
   label.woocommerce-form__label-for-checkbox {
      margin: 6px 0;
   }
   /* ==================================================================== Cart Page Style Start =====================================================================*/
   .coupon > label {
      display: none;
   }
   table.cart .actions .coupon {
      align-items: center !important;
      justify-content: flex-start !important;
      display: flex !important;
   }
   .actions-button .coupon label {
      width: auto;
   }
   .actions-button .coupon input {
      padding: 8px 12px;
      border: 1px solid #e1e1e1;
   }
   .actions-button .coupon button {
      line-height: 40px;
      border: 0;
      background-color: var(--theme-primary-color);
      padding: 0 15px;
      color: #fff;
      display: inline-block;
      left: auto;
      float: none;
   }
   .actions-button button:disabled[disabled] {
      background-color: #ebe9eb;
   }
   .actions-button button {
      line-height: 40px;
      border: 0;
      background-color: var(--theme-primary-color);
      padding: 0 15px;
      color: #fff;
      display: inline-block;
      left: auto;
   }
   .shipping-calculator-form .button,
   .wc-proceed-to-checkout .checkout-button {
      line-height: 40px;
      color: var(--theme-white-color);
      background-color: #c9030f;
      padding: 0 15px;
      display: table;
   }
   table .product-thumbnail a img {
      width: 80px;
      height: 80px;
   }
   table .product-remove a.remove {
      position: relative;
      text-align: center;
   }
   .woocommerce-cart-form__cart-item .product-name > a {
      color: var(--theme-secondary-color);
      font-weight: 500;
   }
   .woocommerce-cart-form__cart-item .product-name .variation {
      display: flex;
      align-items: center;
      margin: 0;
      font-size: 13px;
   }
   .woocommerce-cart-form__cart-item .product-name .variation dd.variation-Vendor {
      margin-bottom: 0;
      margin-left: 10px;
   }
   table.shop_table.cart td {
      padding: 15px;
      width: 10%;
   }
   table.shop_table.cart td.product-quantity {
      vertical-align: middle;
   }
   table.shop_table.cart td.product-quantity .quantity {
      margin-bottom: 0 !important;
   }
   .cart-collaterals .cart_totals h2 {
      font-size: 15px;
      color: var(--theme-dark-color);
      text-transform: uppercase;
      padding: 12px 20px;
      background: var(--theme-light-color);
      margin: 0;
      border: 1px solid var(--theme-gray-color);
      border-bottom: 0;
      font-weight: 600;
      font-family: var(--theme-general-font);
   }
   .cart_totals table th {
      color: var(--theme-secondary-color);
      vertical-align: baseline;
   }
   .woocommerce-shipping-destination {
      font-size: 14px;
      margin-top: 10px;
   }
   input.shipping_method {
      margin-right: 5px;
   }
   .cart_totals table {
      border-radius: 0;
      border-top: 0;
   }
   .shipping-calculator-button {
      padding: 0;
   }
   .woocommerce-shipping-calculator .shipping-calculator-form {
      margin-top: 10px;
      display: none;
   }
   .woocommerce-shipping-calculator.active .shipping-calculator-form {
      display: block;
   }
   .woocommerce-shipping-calculator .country_to_state,
   .woocommerce-shipping-calculator .input-text {
      border: 1px solid var(--theme-gray-color);
      width: 100%;
   }
   .woocommerce-shipping-calculator .input-text {
      padding: 5px 15px;
   }
   /* ==================================================================== Checkout Page Style Start =====================================================================*/
   .woocommerce form .form-row input.input-text,
   .woocommerce form .form-row select,
   .woocommerce form .form-row textarea {
      box-sizing: border-box;
      width: 100%;
      margin: 0;
      outline: 0;
      border: 2px solid var(--theme-gray-color);
      padding: 5px 15px;
   }
   h3#ship-to-different-address {
      font-size: 16px;
      font-weight: 600;
   }
   .woocommerce-checkout-review-order {
      padding: 35px;
      background-color: var(--theme-light-color);
   }
   .woocommerce-checkout-review-order-table {
      background-color: #fff;
   }
   .woocommerce-checkout-review-order-table > thead {
      background: #fff;
      border: 0;
      border-bottom-color: currentcolor;
      border-bottom-style: none;
      border-bottom-width: 0px;
      border-bottom: 1px solid hsla(0, 0%, 90%, 0.25);
   }
   .woocommerce-checkout-review-order-table th.product-name,
   .woocommerce-checkout-review-order-table th.product-total {
      color: #000;
      font-weight: 700;
      text-transform: capitalize;
   }
   .woocommerce-checkout-review-order-table > thead > tr > th {
      padding: 15px;
   }
   .woocommerce-checkout-review-order-table .woocommerce-Price-amount {
      color: #000;
      font-weight: 700;
   }
   .woocommerce-checkout-review-order-table > tfoot > tr > td:last-child,
   .woocommerce-checkout-review-order-table tfoot th:last-child,
   .woocommerce-checkout-review-order-table > tbody > tr > td:last-child {
      min-width: 170px;
   }
   .woocommerce-checkout-review-order-table > tfoot > tr > td,
   .woocommerce-checkout-review-order-table tfoot th,
   .woocommerce-checkout-review-order-table > tbody > tr > td {
      padding: 15px;
      border: 0;
      border-bottom-color: currentcolor;
      border-bottom-style: none;
      border-bottom-width: 0px;
      border-bottom: 1px solid hsla(0, 0%, 90%, 0.5);
      line-height: 1.6;
      vertical-align: top;
   }
   .checkout
      .woocommerce-shipping-methods
      .shipping_method:checked
      + label::before {
      background: #ff871d;
      border-color: #ff871d;
   }
   .checkout .woocommerce-shipping-methods .shipping_method {
      display: none;
   }
   .checkout .woocommerce-shipping-methods label::before {
      position: absolute;
      left: 0;
      top: calc(50% - 6px);
      width: 12px;
      height: 12px;
      border: 1px solid #969696;
      border-top-color: rgb(150, 150, 150);
      border-right-color: rgb(150, 150, 150);
      border-bottom-color: rgb(150, 150, 150);
      border-left-color: rgb(150, 150, 150);
      content: "";
      border-radius: 50%;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      -o-border-radius: 50%;
   }
   .checkout .woocommerce-checkout-payment .payment_methods img {
      height: 1.5625em;
      vertical-align: middle;
      margin: 0 16px;
   }
   .wc_payment_methods {
      padding: 20px 0;
   }
   .wc_payment_method {
      padding: 15px 0;
      border-bottom: 1px solid var(--theme-gray-color);
   }
   .wc_payment_method .payment_box {
      display: none;
   }
   .wc_payment_method.active .payment_box {
      display: block;
   }
   .woocommerce-shipping-methods label {
      margin: 0;
      margin-bottom: 0px;
      margin-left: 0px;
      margin-left: 5px;
      font-weight: 400;
      margin-bottom: 0;
      position: relative;
      padding-left: 18px;
      cursor: pointer;
   }
   .woocommerce-info {
      padding: 10px 20px;
      margin: 0 0 30px;
      position: relative;
      background-color: var(--theme-light-color);
      color: var(--theme-general-color);
      border-top: 3px solid #a46497;
   }
   .woocommerce-info > a {
      color: var(--theme-secondary-color);
   }
   .woocommerce-info::before {
      content: "\f49e";
      font-family: "Font Awesome 5 Free";
      margin-right: 10px;
      font-weight: 900;
   }
   .woocommerce-form-coupon-toggle .woocommerce-info::before {
      content: "\f12a";
   }
   .woocommerce-billing-fields__field-wrapper label {
      margin-bottom: 5px;
      font-weight: 500;
      font-size: 14px;
      color: var(--theme-dark-color);
   }
   .woocommerce form .form-row .required {
      color: red;
      font-weight: 700;
      border: 0 !important;
      text-decoration: none;
      visibility: visible;
   }
   .checkout .woocommerce-checkout-payment .payment_methods input.input-radio {
      display: none;
   }
   .checkout .woocommerce-checkout-payment .payment_methods li > label {
      float: unset;
      margin: 0;
      padding-left: 18px;
      position: relative;
      cursor: pointer;
      width: 100%;
   }
   .checkout .woocommerce-checkout-payment .payment_methods li.active > label {
      margin-bottom: 15px;
   }
   .checkout .woocommerce-checkout-payment .payment_methods li > label::before {
      position: absolute;
      left: 0;
      top: 6px;
      width: 12px;
      height: 12px;
      border: 1px solid #969696;
      content: "";
      border-radius: 50%;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      -o-border-radius: 50%;
   }
   .checkout
      .woocommerce-checkout-payment
      .payment_methods
      li
      .input-radio:checked
      + label::before {
      background: #ff871d;
      border-color: #ff871d;
   }
   #place_order {
      line-height: 40px;
      padding: 0 35px;
      font-family: var(--theme-hiperlink-font);
      font-weight: 500;
      font-size: 15px;
      background-color: var(--theme-primary-color);
      color: var(--theme-white-color);
   }
   .about_paypal {
      color: var(--theme-dark-color) !important;
      float: right;
      border-bottom: 1px solid var(--theme-dark-color);
   }
   /* ==================================================================== Wishlist Page Style Start =====================================================================*/
   .cart_totals table,
   table.cart {
      border-collapse: collapse;
   }
   .product-name a {
      color: var(--theme-dark-color);
   }
   .product-add-to-cart .add_to_cart_button {
      line-height: 40px;
      padding: 0 35px;
      font-family: var(--theme-hiperlink-font);
      font-weight: 400;
      text-transform: capitalize;
      font-size: 15px;
      background-color: var(--theme-primary-color);
      color: var(--theme-white-color);
      opacity: 1;
      visibility: visible;
      position: inherit;
      display: table;
      float: right;
   }
   /* ==================================================================== Wishlist Page Style Start =====================================================================*/
   .bg-white-9::after {
      width: 70%;
      height: 100%;
      left: 0;
      top: 0;
      background-color: var(--theme-white-color);
      position: absolute;
      content: "";
      z-index: 1;
   }
   .fat-loss-suggestion h3 {
      text-transform: uppercase;
      letter-spacing: 6px;
   }
   .product-quality-info h6 {
      font-family: var(--theme-general-font);
      color: var(--theme-primary-color);
      text-transform: uppercase;
      letter-spacing: 3px;
   }
   .organic-item {
      border: 15px solid var(--theme-primary-color);
      padding: 400px 200px 30px 30px;
      position: relative;
   }
   .organic-item .organit-text {
      position: absolute;
      top: 50px;
      left: -227px;
      width: 153%;
      max-width: inherit;
   }
   .organic-item .organit-package {
      position: absolute;
      bottom: -60px;
      right: -108px;
      width: 25%;
      max-width: inherit;
   }
   .organic-item .product-price {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      margin-bottom: 20px;
   }
   .organic-item .product-price .title {
      font-family: var(--theme-general-font);
      text-transform: uppercase;
      color: var(--theme-primary-color);
      letter-spacing: 3px;
      width: 100%;
   }
   .organic-item .product-price .price {
      display: flex;
      align-items: center;
   }
   .organic-item .product-price .price ins {
      font-size: 15px;
      font-weight: 500;
      color: var(--theme-secondary-color);
      text-decoration: none;
   }
   .organic-item .product-price .price del {
      font-size: 15px;
      font-weight: 400;
      color: var(--theme-general-color);
      margin-left: 5px;
   }
   .organic-item .product-price .on-sale {
      font-size: 12px;
      margin-left: 5px;
      background-color: var(--theme-primary-color);
      color: var(--theme-white-color);
      padding: 2px 5px;
   }
   .organic-item .star-rating {
      display: flex;
      align-items: center;
      color: var(--theme-secondary-color);
      margin-bottom: 20px;
   }
   .organic-item .star-rating a {
      font: 13px;
   }
   .organic-item .package {
      margin-bottom: 20px;
   }
   .organic-item .package span {
      font-weight: 500;
      font-size: 13px;
      color: var(--theme-secondary-color);
      padding: 5px 10px;
   }
   .organic-item .package span.active {
      color: var(--theme-white-color);
      background-color: var(--theme-primary-color);
   }
   .blog-big-title {
      font-family: var(--theme-general-font);
      letter-spacing: 4px;
      text-transform: uppercase;
      line-height: 40px;
      padding-right: 170px;
      margin-bottom: 30px;
   }
   /* ==================================================================== Footer Section Style Start =====================================================================*/
   .footer-widget .widget-title {
      color: var(--theme-dark-color);
      font-family: var(--theme-highlight-font);
      font-weight: 500;
      font-size: 15px;
      text-transform: uppercase;
   }
   .footer-widget li a {
      color: #818181;
      line-height: 28px;
      font-weight: 400;
      font-size: 15px;
   }
   .border-footer {
      border-top: 2px solid var(--theme-gray-color);
      border-bottom: 2px solid var(--theme-gray-color);
   }
   .border-footer .col + .col {
      border-left: 2px solid var(--theme-gray-color);
      padding-left: 40px;
   }
   /*============================================== Newslatter ==============================================*/
   .subscribe-form button {
      background-color: #c9030f;
   }
   /* .subscribe-form:hover button {
       background-color: #fff;
       color:#c9030f !important;
       border: 1px solid #c9030f;
   } */
   @media screen and (min-width: 400px) {
      .product-list .product-wrapper .product-image,
      .product-list .product-wrapper .product-info {
         float: left;
         margin: 0;
      }
      .product-list .product-wrapper .product-info {
         padding-left: 15px;
      }
   }
   @media screen and (min-width: 1200px) {
      .navbar-expand-lg.nav-border-active .navbar-nav > .nav-item a.nav-link {
         padding: 0 15px;
      }
   }
   @media screen and (min-width: 992px) {
      .container {
         max-width: 940px;
      }
      .navbar-expand-lg.nav-border-active .navbar-nav > .nav-item a.nav-link {
         padding: 0 10px;
      }
      .ecommerce-header .navbar-expand-lg .navbar-nav > li.nav-item {
         line-height: 50px;
      }
      .nav-line-active .navbar-nav .active > .nav-link:before {
         bottom: 10px;
      }
      /*=================================== Mega Menu ====================================*/
      .navbar .navbar-nav li:hover > .unicode-megamenu-wrapper {
         visibility: visible;
         opacity: 1;
      }
      .navbar .navbar-nav li > .unicode-megamenu-wrapper {
         position: absolute;
         visibility: hidden;
         width: calc(100% - 30px);
         display: block;
         background-color: #fff;
         box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
         opacity: 0;
         border: 0;
         border-top: 1px solid;
         border-color: var(--theme-light-color);
         border-radius: 3px;
         left: 15px;
         top: 100%;
         padding-top: 20px;
         padding-bottom: 20px;
         z-index: 100;
      }
      .navbar .navbar-nav li:hover > .unicode-megamenu-wrapper {
         -moz-transition: all 300ms ease-in-out 0s;
         -ms-transition: all 300ms ease-in-out 0s;
         -o-transition: all 300ms ease-in-out 0s;
         -webkit-transition: all 300ms ease-in-out 0s;
         transition: all 300ms ease-in-out 0s;
      }
   }
   @media screen and (min-width: 1200px) {
      .container {
         max-width: 1180px;
      }
   }
   @media screen and (min-width: 1320px) {
      .container {
         max-width: 1240px;
      }
   }
   @media screen and (min-width: 1500px) {
      .container {
         max-width: 1440px;
      }
   }
   @media screen and (max-width: 1500px) {
      .bg-img-sizing-1 {
         background-size: 55% !important;
      }
   }
   @media screen and (max-width: 1399px) {
      .product-list .product-wrapper .product-image {
         width: 40%;
      }
      .product-list .product-wrapper .product-info {
         width: 60%;
      }
      .banner-seven .banner-image {
         width: 200px;
      }
      .custom-class-114 .banner-content {
         width: 48%;
      }
      .bg-img-sizing-1 {
         background-size: 55% !important;
      }
   }
   @media screen and (max-width: 1350px) {
      .banner-six .banner-content {
         right: 20px;
      }
      .banner-seven .banner-image {
         width: 180px;
      }
      .banner-seven .banner-content {
         padding-left: 0;
      }
      .product-list .product-wrapper .product-image {
         width: 34.75%;
      }
      .product-list .product-wrapper .product-info {
         width: 65.25%;
      }
      .product-wrapper .product-image .product-variations span a {
         width: 13px;
         height: 13px;
      }
      .product-wrapper .product-image .product-variations span + span {
         margin-left: 3px;
      }
   }
   @media screen and (max-width: 1199px) {
      .header-cart-1 .cart .cart-icon,
      .header-cart-6 .cart .cart-icon {
         line-height: 40px;
         width: 40px;
         height: 40px;
      }
      .touch-screen-view {
         position: fixed;
         width: 100%;
         height: 130px;
         background: #fff;
         top: 0;
         left: 0;
         z-index: 110;
         visibility: hidden;
         opacity: 0;
         -moz-transition: all 300ms ease-in-out 0s;
         -webkit-transition: all 300ms ease-in-out 0s;
         -o-transition: all 300ms ease-in-out 0s;
         -ms-transition: all 300ms ease-in-out 0s;
         transition: all 300ms ease-in-out 0s;
      }
      .touch-screen-view.visible {
         visibility: visible;
         opacity: 1;
      }
      .touch-screen-view .form-inline {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         width: 80%;
      }
      .main-nav .navbar {
         position: static;
      }
      .navbar .navbar-nav li > ul.dropdown-menu.mega-dropdown-menu {
         width: calc(100% - 20px);
         left: 10px;
      }
      .dropdown-menu.mega-dropdown-menu .row .col {
         padding: 20px 15px;
      }
      .product-add-to-cart .add_to_cart_button {
         display: block;
      }
      .woocommerce-result-count {
         font-size: 12px;
      }
      .woocommerce-products-header__title.page-title,
      .nav-item.highlight-item {
         display: none;
      }
      .categories-menu .unicode-megamenu-item-full-width .unicode-megamenu-holder {
         width: 745px !important;
      }
      .banner-one .banner-content h3 {
         font-size: 22px;
      }
      .banner-three .banner-content {
         width: 215px;
      }
      .banner-three .banner-content h3 {
         font-size: 25px;
      }
      .banner-five .banner-content {
         left: 30px;
      }
      .banner-six {
         padding: 20px 0;
      }
      .banner-six .banner-content {
         width: 185px;
      }
      .banner-seven {
         padding: 25px;
      }
      .banner-eight {
         padding: 20px;
      }
      .banner-eight .banner-image {
         width: 90px;
      }
      .slider-banner {
         width: 360px;
      }
      .product-list .product-wrapper .product-image {
         width: 34.4%;
      }
      .product-list .product-wrapper .product-info {
         width: 65.6%;
      }
      .custom-class-115 .banner-content {
         width: 100%;
      }
      .custom-class-134 h1 {
         font-size: 30px;
      }
      .shop-list.product-style-1 .hover-area [class*="-button"] a {
         width: 30px;
         height: 30px;
      }
      .lg-d-none {
         display: none;
      }
      .bg-img-sizing-1 {
         background-size: 50% !important;
      }
   }
   @media screen and (max-width: 991.98px) {
      .nav-leftpush-overlay .navbar-expand-lg .navbar-slide-push {
         height: 100%;
         overflow-y: scroll;
      }
      .payment_method_paypal img {
         width: 100px;
      }
      .shop-list.product-style-1 .hover-area [class*="-button"] a {
         width: 35px;
         height: 35px;
      }
      .custom-class-121 {
         margin: 20px 0 !important;
      }
      .md-bg-img-none {
         background-image: none !important;
      }
      .md-pb-100 {
         padding-bottom: 100px !important;
      }
      .md-pt-100 {
         padding-top: 100px !important;
      }
      .md-py-100 {
         padding: 100px 0 !important;
      }
      .bg-light-half::before {
         width: 100%;
      }
      .nav-leftpush-overlay .navbar-expand-lg .navbar-slide-push {
         min-height: auto !important;
      }
      .navbar-slide-push .push-navbar,
      .navbar-slide-push .categories-menu {
         height: auto !important;
      }
      .custom-class-115 .banner-content {
         position: inherit;
      }
      .md-pb-50 {
         padding-bottom: 50px !important;
      }
      .owl-item-mb-50 .owl-item {
         margin-bottom: 5px;
      }
      .banner-three .banner-content {
         width: 280px;
      }
      .banner-three .banner-content h3 {
         font-size: 30px;
      }
      .banner-six .banner-content {
         right: 10px;
      }
      .banner-seven .banner-image {
         width: 130px;
      }
      .banner-seven h4 {
         line-height: 30px;
         font-weight: 500;
         font-size: 20px;
      }
      .banner-seven .price-offer {
         font-size: 12px;
         font-weight: 500;
         display: flex;
         align-items: center;
      }
      .banner-seven .price-offer .off {
         font-family: var(--theme-highlight-font);
         font-weight: 600;
         font-size: 24px;
         margin: 0 6px;
      }
      .banner-nine .banner-content {
         width: 280px;
      }
      .custom-class-116 h3 {
         font-size: 25px;
      }
      .custom-class-116 span.h3 {
         font-size: 20px;
      }
      .banner-twelve > img {
         display: none;
      }
      .banner-twelve .banner-content {
         position: inherit !important;
         transform: translate(0);
         padding: 30px 0;
      }
      .banner-thirteen .banner-content {
         width: 300px;
      }
      .banner-thirteen .banner-content .text-one {
         font-size: 36px;
      }
      .banner-thirteen .banner-content .text-two {
         font-size: 20px;
      }
      .custom-class-113 .banner-content {
         width: 55%;
      }
      .custom-class-134 h1 {
         font-size: 22px;
      }
      .custom-class-134 span {
         font-size: 16px;
         text-transform: capitalize !important;
      }
      header.fixed-top .header-sticky {
         position: static !important;
      }
      .nav-pills#pills-tab {
         overflow: scroll;
         max-width: 570px;
         display: block ruby;
      }
      .col:nth-child(2n) [class*="right-line-one"]::after {
         display: none;
      }
      .e-hover-shadow-one .product-wrapper:hover {
         position: inherit;
         height: 100%;
      }
      .product-list .product-wrapper .product-image .product-variations {
         top: calc(100% - 40px);
      }
      .e-hover-wrapper-absolute .product-wrapper .hover-area {
         display: flex;
      }
      .product-list .product-wrapper .product-image {
         width: 40%;
      }
      .product-list .product-wrapper .product-info {
         width: 60%;
      }
      .wishlist_table.wishlist_view {
         width: 100%;
         overflow: scroll;
      }
      .nav-arrow-middle-show .owl-nav button.owl-prev {
         left: -20px;
      }
      .nav-arrow-middle-show .owl-nav button.owl-next {
         right: -20px;
      }
      .category-inner .categories-menu {
         display: none;
      }
      .mix-tab ul.nav-tab-border-active li {
         padding: 5px 18px;
      }
      .mix-tab ul li,
      .tab-simple ul li {
         font-weight: 500;
         font-size: 15px;
         letter-spacing: 0;
      }
      .bg-img-sizing-1 {
         background: none !important;
      }
      .navbar-slide-push .navbar-nav .nav-item .nav-link,
      .categories-menu ul.menu li a {
         font-size: 13px;
         font-weight: 500;
      }
   }
   @media screen and (max-width: 767px) {
      .pricing-table .item.active {
         -moz-transform: scale(1);
         -o-transform: scale(1);
         -webkit-transform: scale(1);
         transform: scale(1);
      }
      .form-inline input.search-field {
         line-height: 40px !important;
         height: 40px;
      }
      .custom-class-121 .banner-content {
         width: 190px;
      }
      .custom-class-121 h2 {
         font-size: 30px;
      }
      .glass-models .col {
         margin: 20px 0 !important;
      }
      .sm-bg-img-none {
         background-image: none !important;
      }
      .sm-justify-content-center {
         justify-content: center;
      }
      .navbar
         .navbar-slide-push
         .navbar-nav
         li
         > ul.dropdown-menu.mega-dropdown-menu {
         width: auto;
      }
      .dropdown-menu.mega-dropdown-menu .row .col {
         padding: 10px 0px;
      }
      .woocommerce-products-header__title.page-title {
         display: block;
      }
      .products-header-left .woocommerce-result-count,
      .products-header-right .product-show,
      .products-header-right .products-view {
         display: none;
      }
      .section-head-side-title {
         display: ruby !important;
         margin-right: 10px;
      }
      .custom-class-107 .banner-content {
         left: 60px;
      }
      .custom-class-116 .banner-image,
      .custom-class-117 .banner-image {
         display: none;
      }
      .custom-class-116 .banner-content,
      .custom-class-117 .banner-content {
         position: inherit !important;
         background: var(--theme-secondary-color);
         padding: 20px 10px;
         width: 100%;
         left: 0;
         top: 0;
         transform: translate(0);
      }
      .banner-one .banner-content h3 {
         font-size: 25px;
      }
      .banner-four-content {
         text-align: center !important;
         margin-top: 30px;
      }
      .banner-four {
         margin: 30px auto !important;
      }
      .banner-five .banner-content {
         left: 50px;
      }
      .banner-six .banner-content {
         right: 30px;
         width: 280px;
      }
      .banner-seven {
         height: auto;
         margin: 10px 0;
      }
      .banner-seven .banner-image {
         width: 180px;
      }
      .banner-eight {
         height: auto;
      }
      .banner-thirteen .banner-content {
         width: 100%;
      }
      .custom-class-104 .banner-content {
         width: 100% !important;
      }
      .custom-class-134 {
         background-color: var(--theme-light-color);
      }
      .custom-class-134 .banner-image {
         display: none;
      }
      .custom-class-134 .banner-content {
         position: inherit !important;
         transform: translate(0, 0);
         top: 0;
         left: 0;
         width: 100%;
         padding: 30px;
      }
      .nav-pills#pills-tab {
         max-width: 400px;
      }
      .nav-pills#pills-tab4 {
         overflow: scroll;
         display: block ruby;
         max-width: 270px;
      }
      .product-list .product-wrapper .product-image {
         width: 34.3%;
      }
      .product-list .product-wrapper .product-info {
         width: 65.7%;
      }
      .slide-title {
         font-size: 25px;
         line-height: 40px;
      }
      .slider-banner {
         width: 260px;
      }
      .copyright {
         text-align: left;
      }
      .margin-top-minus-one {
         margin-top: 0;
      }
      .nav-leftpush-overlay .navbar-expand-lg .navbar-slide-push {
         height: 100vh;
      }
   }
   @media screen and (max-width: 575px) {
      h1,
      .h1 {
         font-size: 30px;
      }
      h2,
      .h2 {
         font-size: 24px;
      }
      h3,
      .h3 {
         font-size: 21px;
      }
      h4,
      .h4 {
         font-size: 18px;
      }
      .border-footer .col + .col {
         border-left: none;
         padding-left: 15px;
      }
      .limited-stock {
         padding: 100px 0;
      }
      .single_variation_wrap {
         display: inherit;
      }
      .single_variation_wrap .quantity {
         margin-bottom: 15px !important;
      }
      .product-navigation-share,
      div.summary .product-price-summary {
         display: none;
      }
      .woocommerce-Reviews {
         display: inherit;
      }
      .single_variation_wrap .woocommerce-variation-add-to-cart {
         margin-left: -70px;
         margin-top: 15px;
      }
      .banner-three .banner-content {
         width: 210px;
         left: 30px;
      }
      .banner-three .banner-content h3 {
         font-size: 25px;
      }
      .banner-six .banner-content {
         right: 20px;
         width: 210px;
      }
      .banner-nine h3 {
         font-size: 24px;
      }
      .banner-eleven {
         min-height: 200px;
      }
      .banner-twelve .banner-content {
         padding: 30px;
      }
      .banner-thirteen .banner-content {
         top: 0;
         transform: translate(0);
         left: 0;
      }
      .banner-thirteen .banner-content .text-one {
         font-size: 30px;
      }
      [class*="right-line-one"]::after {
         display: none;
      }
      .product-list .product-wrapper .product-image {
         width: 30%;
      }
      .product-list .product-wrapper .product-info {
         width: 70%;
      }
      .nav-pills#pills-tab {
         max-width: 250px;
      }
      .nav-pills#pills-tab5,
      .nav-pills#pills-tab6,
      .nav-pills#pills-tab7,
      .nav-pills#pills-tab9 {
         display: block ruby;
         overflow: scroll;
         max-width: 200px;
      }
      .nav-pills#pills-tab7 {
         max-width: 170px;
      }
      [class*="nav-arrow-middle"] .owl-nav button.owl-prev {
         left: 0;
      }
      [class*="nav-arrow-middle"] .owl-nav button.owl-next {
         right: 0;
      }
      .hover-nav-show .owl-nav {
         display: flex;
      }
      .woocommerce-checkout-review-order-table > tfoot > tr > td:last-child,
      .woocommerce-checkout-review-order-table tfoot th:last-child,
      .woocommerce-checkout-review-order-table > tbody > tr > td:last-child {
         min-width: auto;
      }
      .time-box li {
         margin-bottom: 10px;
      }
      .sign-in-form,
      .registration-form {
         padding: 50px 10px;
      }
      .custom-class-135 {
         padding: 30px !important;
      }
      .custom-class-135 .banner-image {
         scale: 1;
         width: 70%;
         margin: 0 auto;
      }
      .custom-class-135 .banner-content {
         padding-bottom: 20px !important;
      }
   }
   @media screen and (max-width: 420px) {
      .navbar-brand {
         display: none;
      }
      .xxs-text-primary {
         color: var(--theme-primary-color) !important;
      }
      .xxs-text-secondary {
         color: var(--theme-secondary-color) !important;
      }
      .xxs-text-gray {
         color: var(--theme-light-color) !important;
      }
      .xxs-text-white {
         color: var(--theme-white-color) !important;
      }
      .xxs-text-extra1 {
         color: var(--theme-extra1-color) !important;
      }
      .xxs-bg-primary {
         background-color: var(--theme-primary-color);
      }
      .xxs-bg-secondary {
         background-color: var(--theme-secondary-color);
      }
      .xxs-bg-gray {
         background-color: var(--theme-light-color);
      }
      .xxs-bg-white {
         background-color: var(--theme-white-color);
      }
      .xxs-bg-extra1 {
         background-color: var(--theme-extra1-color);
      }
      .custom-class-107 .btn-border,
      .custom-class-107 .btn-border:hover {
         border: 0;
         padding: 0;
         line-height: inherit;
         margin-top: 10px !important;
      }
      .custom-class-107 .banner-content {
         left: 25px;
         width: 80%;
      }
      .banner-one .banner-content h3 {
         font-size: 18px;
      }
      .banner-three .banner-content {
         width: 200px;
         left: 15px;
      }
      .banner-three .banner-content h3 {
         font-size: 24px;
         margin-bottom: 7px !important;
      }
      .banner-three .banner-content span {
         font-size: 14px;
         font-weight: 400;
      }
      .banner-three .banner-content a.btn-link {
         font-size: 14px;
         font-weight: 500;
         margin-top: 15px;
      }
      .banner-four .off {
         left: 0;
      }
      .banner-five .banner-content {
         left: 30px;
      }
      .banner-six {
         padding: 35px 0;
      }
      .banner-six .banner-content {
         right: 10px;
         width: 170px;
      }
      .banner-seven .banner-image {
         width: 100%;
      }
      .banner-seven {
         display: block !important;
      }
      .banner-nine .banner-content {
         left: 20px;
         width: 260px;
      }
      .banner-seven .banner-content {
         width: 100%;
      }
      .banner-eleven .banner-content {
         width: 100%;
      }
      .slider.banner-eleven {
         min-height: 300px;
      }
      .banner-wrapper.banner-thirteen {
         min-height: auto;
      }
      .banner-thirteen .banner-content .text-one {
         font-size: 22px;
      }
      .banner-thirteen .banner-content .text-two {
         font-size: 18px;
      }
      [class*="product-search-"] .select-appearance-none {
         display: none;
      }
      .product-list .product-wrapper .product-image,
      .product-list .product-wrapper .product-info {
         width: 100%;
         height: auto;
      }
      .product-list .product-wrapper .product-image .product-variations {
         top: calc(100% - 25px);
      }
      .product-list .product-wrapper .product-image .wishlist-view {
         top: 20px;
         right: 20px;
      }
      .section-head-side-title h4 {
         font-size: 18px;
      }
      .header-sticky .flat-small::before {
         font-size: 20px;
         line-height: 30px;
         top: 0;
      }
      .header-sticky .refresh-view.ml-30 {
         margin-left: 20px !important;
      }
      .ecommerce-header .wishlist-view a.top-quantity span,
      .ecommerce-header .refresh-view a.top-quantity span {
         top: -5px;
         left: -10px;
         padding: 0 5px;
         line-height: 18px;
         font-size: 12px;
      }
      .nav-pills#pills-tab {
         max-width: 195px;
      }
      .nav-pills#pills-tab2 {
         overflow: scroll;
         display: block ruby;
         max-width: 180px;
      }
      .nav-pills#pills-tab4 {
         max-width: 190px;
      }
      .nav-top-right .owl-nav {
         display: none;
      }
      .cart-popup {
         width: 300px;
      }
      /*PAGINATION DESIGN*/
      .page-center ul.pagination li {
         width: 35px;
         height: 35px;
         background: #ff55001a;
         border-radius: 50%;
         text-align: center;
         font-size: 14px;
         line-height: 35px;
         margin: 0px 5px;
         transition: all 0.3s;
         display: inline-block;
         color: #000;
         cursor: pointer;
      }
      .page-center ul.pagination li a:hover {
         color: #000 !important;
      }
      .page-center ul.pagination {
         display: inline-block;
         margin: 0 auto;
      }
      .page-center ul.pagination li.active {
         background: #ff5500;
         color: #fff;
         cursor: no-drop;
      }
      .page-center {
         text-align: center;
      }
      .tempcart {
         background: #e9ecef;
         padding: 70px 0px 70px;
      }
      /*PAGINATION DESIGN ENDS*/
   }
   /* yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy */
   .checkout-area .content-box .content.form-control {
      font-size: 14px !important;
      border: 1px solid rgba(0, 0, 0, 0.2);
   }
   .checkout-area .content-box .content .form-control::-webkit-input-placeholder {
      /* WebKit browsers */
      color: rgba(24, 42, 17, 0.5);
   }
   .checkout-area .content-box .content .form-control:-moz-placeholder {
      /* Mozilla Firefox 4 to 18 */
      color: rgba(24, 42, 17, 0.5);
   }
   .checkout-area .content-box .content .form-control::-moz-placeholder {
      /* Mozilla Firefox 19+ */
      color: rgba(24, 42, 17, 0.5);
   }
   .checkout-area .content-box .content .form-control:-ms-input-placeholder {
      /* Internet Explorer 10+ */
      color: rgba(24, 42, 17, 0.5);
   }
   .checkout-area .content-box .content .set-account-pass {
      margin-top: 10px;
   }
   .checkout-area .content-box .content .billing-address {
      margin-top: 25px;
   }
   .checkout-area .content-box .content .ship-diff-addres-area {
      margin-top: 20px;
   }
   .checkout-area .content-box .content .billing-address input,
   .checkout-area .content-box .content .ship-diff-addres-area input {
      margin-bottom: 10px;
   }
   .checkout-area .content-box .content .order-area .order-item {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      padding-bottom: 5px;
      margin-bottom: 5px;
   }
   /* .checkout-area .content-box .content .order-area .order-item:last-child{
       border-bottom: 0px;
   }
   */
   .checkout-area .content-box .content .order-area .order-item .product-img img {
      width: 135px;
      height: auto;
      margin-right: 20px;
   }
   .checkout-area .content-box .content .order-area .order-item .product-content {
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
   }
   .checkout-area
      .content-box
      .content
      .order-area
      .order-item
      .product-content
      .name {
      margin-bottom: 5px;
   }
   .checkout-area
      .content-box
      .content
      .order-area
      .order-item
      .product-content
      .name
      a {
      font-size: 17px;
      line-height: 24px !important;
      color: #333;
      font-weight: 600;
      margin-bottom: 5px;
      display: inline-block;
   }
   .checkout-area
      .content-box
      .content
      .order-area
      .order-item
      .product-content
      .unit-price,
   .checkout-area
      .content-box
      .content
      .order-area
      .order-item
      .product-content
      .quantity,
   .checkout-area
      .content-box
      .content
      .order-area
      .order-item
      .product-content
      .total-price {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
   }
   .checkout-area
      .content-box
      .content
      .order-area
      .order-item
      .product-content
      .unit-price
      .label,
   .checkout-area
      .content-box
      .content
      .order-area
      .order-item
      .product-content
      .quantity
      .label,
   .checkout-area
      .content-box
      .content
      .order-area
      .order-item
      .product-content
      .total-price
      .label {
      font-weight: 700;
      font-size: 14px;
      margin-right: 7px;
      margin-bottom: 0px;
      color: #666;
   }
   .checkout-area
      .content-box
      .content
      .order-area
      .order-item
      .product-content
      .unit-price
      p,
   .checkout-area
      .content-box
      .content
      .order-area
      .order-item
      .product-content
      .quantity
      .qttotal,
   .checkout-area
      .content-box
      .content
      .order-area
      .order-item
      .product-content
      .total-price
      p {
      font-weight: 600;
      font-size: 14px;
      margin-bottom: 0px;
      color: #777;
   }
   .checkout-area
      .content-box
      .content
      .order-area
      .order-item
      .product-content
      .color
      .item-color,
   .checkout-area
      .content-box
      .content
      .order-area
      .order-item
      .product-content
      .color
      .item-color
      span {
      width: 30px;
      height: 20px;
      display: block;
      margin-bottom: 0px;
   }
   .checkout-area .content-box .content .billing-info-area .info-list li p {
      position: relative;
      padding-left: 25px;
      margin-bottom: 20px;
   }
   .checkout-area .content-box .content .billing-info-area .info-list li p i {
      position: absolute;
      left: 0px;
      top: -1px;
      color: #c9030f;
      line-height: 30px;
      font-size: 14px;
   }
   .order-de {
      text-align: center;
      margin-bottom: 20px;
   }
   /*----------------------------------------- SUPPORT AREA DESIGN STARTS -------------------------------------------- */
   .support-ticket-wrapper .panel-body img {
      height: 60px;
      width: 60px;
      border-radius: 100%;
   }
   .support-ticket-wrapper .panel-heading {
      font-size: 16px;
   }
   .support-ticket-wrapper button {
      border: 0px;
   }
   .support-ticket-wrapper .panel-footer {
      background-color: #ffffff;
      padding: 20px 0px 0px;
   }
   .support-ticket-wrapper table tr > td {
      width: 100%;
      border-top: none;
   }
   .support-ticket-wrapper .panel {
      border-color: #dddddd;
   }
   .support-ticket-wrapper .panel,
   .support-ticket-wrapper .panel-heading,
   .support-ticket-wrapper textarea,
   .support-ticket-wrapper button {
      border-radius: 0;
   }
   .support-ticket-wrapper .ticket-date {
      font-size: 14px;
      color: #737373;
      margin-bottom: 0px;
   }
   .single-reply-area.user {
      background-color: #ddd;
      padding: 10px;
   }
   .support-ticket-wrapper .panel-body img {
      height: 60px;
      width: 60px;
      border-radius: 100%;
   }
   .support-ticket-wrapper .single-reply-area.user {
      padding: 20px 30px;
   }
   .support-ticket-wrapper .single-reply-area.user .reply-area {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
   }
   .support-ticket-wrapper .single-reply-area.user .reply-area .left {
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
   }
   .support-ticket-wrapper .single-reply-area.user .reply-area .right {
      text-align: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      margin-left: 30px;
   }
   .support-ticket-wrapper .single-reply-area.admin {
      padding: 20px 30px;
      background: #f1f1f1;
   }
   .support-ticket-wrapper .single-reply-area.admin .reply-area {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
   }
   .support-ticket-wrapper .single-reply-area.admin .reply-area .left {
      text-align: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      margin-right: 30px;
   }
   .support-ticket-wrapper .single-reply-area.admin .reply-area .right {
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
      text-align: right;
   }
   /*----------------------------------------- SUPPORT AREA DESIGN ENDS -------------------------------------------- */
   .checkout-area .content-box .content .payment-information {
      margin-top: 15px;
   }
   .checkout-area .content-box .content .payment-information .nav a img {
      width: 80px;
      height: 40px;
   }
   .checkout-area .content-box .content .payment-information .nav a {
      padding: 6px 0px 0px 30px;
      position: relative;
   }
   .checkout-area .content-box .content .payment-information .nav a .icon {
      position: absolute;
      left: 0px;
      margin-top: 1px;
   }
   .checkout-area .content-box .content .payment-information .nav a span {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      display: inline-block;
      position: relative;
      border: 1px solid rgba(0, 0, 0, 0.2);
   }
   .checkout-area .content-box .content .payment-information .nav a p small {
      display: block;
   }
   .checkout-area .content-box .content .payment-information .nav a span::after {
      position: absolute;
      content: "";
      width: 0%;
      height: 0%;
      border-radius: 50%;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      background: #c9030f;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .checkout-area
      .content-box
      .content
      .payment-information
      .nav
      a.active
      span:after {
      width: 80%;
      height: 80%;
   }
   .checkout-area .content-box .content .payment-information .nav a p {
      display: inline-block;
      margin-bottom: 0px;
      position: relative;
      top: -5px;
      left: 5px;
      font-weight: 600;
      color: #767678;
   }
   .checkout-area .content-box .content .payment-information .tab-content {
      margin-top: 20px;
      -webkit-box-shadow: unset;
      box-shadow: unset;
      padding: 20px 20px 20px 20px;
   }
   .checkout-area .content-box .content .payment-information .tab-content input {
      margin-bottom: 15px;
   }
   .order-box .final-price {
      border-top: 1px solid rgba(0, 0, 0, 0.3);
      margin-top: 10px;
      padding-top: 5px;
      font-weight: 600;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
   }
   span#color-bar {
      border-radius: 50% !important;
   }
   input[type="checkbox"] + label {
      display: block;
      cursor: pointer;
      font-size: 14px !important;
      margin-top: 4px;
   }
   input[type="checkbox"] {
      display: none;
   }
   input[type="checkbox"] + label:before {
      content: "\2714";
      border: 1px solid rgba(0, 0, 0, 0.2);
      border-radius: 0.2em;
      display: inline-block;
      width: 20px;
      height: 20px;
      text-align: center;
      vertical-align: bottom;
      color: transparent;
      -webkit-transition: 0.2s;
      transition: 0.2s;
      margin-right: 10px;
   }
   input[type="checkbox"] + label:active:before {
      -webkit-transform: scale(0);
      transform: scale(0);
   }
   input[type="checkbox"]:checked + label:before {
      background-color: #c9030f;
      border-color: #c9030f;
      color: #fff;
   }
   input[type="checkbox"]:disabled + label:before {
      -webkit-transform: scale(1);
      transform: scale(1);
   }
   input[type="checkbox"]:checked:disabled + label:before {
      -webkit-transform: scale(1);
      transform: scale(1);
      background-color: #9e9e9e;
      border-color: #9e9e9e;
   }
   .checkout {
      padding: 70px 0px 70px;
   }
   .radio-design {
      display: block;
      position: relative;
      padding-left: 0px;
      cursor: pointer;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      margin-bottom: 7px;
   }
   .radio-design label {
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 0px;
      position: relative;
      top: -4px;
      left: 35px;
   }
   .radio-design label small {
      display: block;
   }
   /* Hide the browser's default radio button */
   .radio-design input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      z-index: 9;
      width: 100%;
      height: 100%;
   }
   .cupon-box #coupon-link img {
      width: 25px;
      margin-right: 5px;
   }
   /* Create a custom radio button */
   .radio-design .checkmark {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      display: inline-block;
      position: absolute;
      border: 1px solid rgba(0, 0, 0, 0.2);
      top: -2px;
   }
   .radio-design .checkmark::after {
      position: absolute;
      content: "";
      width: 0%;
      height: 0%;
      border-radius: 50%;
      top: 50%;
      left: 50%;
      z-index: 99;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      background: #c9030f;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   /* On mouse-over, add a grey background color */
   /* When the radio button is checked, add a blue background */
   .radio-design input:checked ~ .checkmark::after {
      width: 80%;
      height: 80%;
   }
   .tempcart {
      background: #e9ecef;
      padding: 70px 0px 70px;
   }
   .tempcart .content-box {
      background: #fff;
      padding: 50px 50px 50px;
      -webkit-box-shadow: 3px 3px 14px 3px rgba(0, 0, 0, 0.1);
      box-shadow: 3px 3px 14px 3px rgba(0, 0, 0, 0.1);
   }
   #tempview {
      margin-left: 0px !important;
   }
   .tempcart .view-order-page h5 {
      font-weight: 600;
      font-size: 16px;
   }
   .tempcart .view-order-page h4 {
      font-weight: 600;
      font-size: 20x;
   }
   #comment-area {
      margin-top: 43px;
   }
   .top-header-area .title {
      font-size: 24px;
      font-weight: 600;
      margin-bottom: 25px;
   }
   .all-comment {
      margin-top: 18px;
      width: 100%;
   }
   a.btn.login-btn {
      background: #c48272;
      color: white;
   }
   div#comments {
      margin-top: 50px;
   }
   .all-comment li {
      margin-bottom: 30px;
      width: 100%;
   }
   .all-comment li .single-comment {
      position: relative;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      border-bottom: 1px solid rgba(0, 0, 0, 0.3);
      padding-bottom: 16px;
      margin-bottom: 20px;
   }
   .all-comment li .single-comment .left-area {
      text-align: center;
      padding-right: 30px;
      margin-right: 30px;
      position: relative;
   }
   .all-comment li .single-comment .left-area::before {
      position: absolute;
      content: "";
      height: 70%;
      width: 1px;
      background: rgba(0, 0, 0, 0.3);
      right: 0px;
      top: 50%;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
   }
   .all-comment li .single-comment .left-area img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      border: 2px solid #c9030f;
      -webkit-box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
      box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
   }
   .all-comment li .single-comment .left-area .name {
      margin-top: 15px;
      font-size: 14px;
      color: #143250;
      font-weight: 600;
      margin-bottom: 0px;
   }
   .all-comment li .single-comment .left-area .date {
      font-size: 12px;
      color: #143250;
      margin-bottom: 0px;
   }
   .all-comment li .single-comment .right-area {
      -webkit-box-flex: 1;
      -ms-flex: 1;
      flex: 1;
   }
   .all-comment li .single-comment .right-area .header-area .stars-area {
      margin-left: 0px;
   }
   .all-comment li .single-comment .right-area .header-area .stars-area .stars {
      padding: 0px;
      margin-bottom: 5px;
      display: inline-block;
   }
   .all-comment li .single-comment .right-area .header-area .stars-area .stars li {
      display: inline-block;
      width: auto;
      font-size: 12px;
      margin-right: -2px;
      color: #fc9715;
      margin-bottom: 0px;
   }
   .all-comment li .single-comment .right-area .header-area .title {
      font-size: 16px;
      font-weight: 600;
      color: #143250;
      margin-top: 0px;
   }
   .all-comment li .single-comment .right-area .comment-body p {
      font-size: 16px;
      line-height: 26px;
   }
   .all-comment li .single-comment .right-area .comment-footer .links a {
      display: inline-block;
      font-size: 14px;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
      padding: 10px;
      color: red;
   }
   .all-comment li .single-comment .right-area .comment-footer .links a:hover {
      color: #c9030f;
   }
   .all-comment li .replay-review {
      margin-left: 100px;
   }
   .all-comment li .replay-area {
      position: relative;
      padding-left: 127px;
      margin-bottom: 30px;
   }
   .all-comment li .replay-area textarea {
      width: 100%;
      height: 50px;
      padding: 10px 20px;
      border: 1px solid rgba(0, 0, 0, 0.3);
   }
   .all-comment li .replay-area button {
      width: 120px;
      height: 35px;
      line-height: 34px;
      border: 0px;
      background: #c9030f;
      border: 1px solid #c9030f;
      color: #fff;
      border-radius: 3px;
      font-size: 14px;
      margin-top: 10px;
      display: inline-block;
      text-align: center;
      margin-right: 10px;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .all-comment li .replay-area button:hover {
      background: none;
      color: #c9030f;
   }
   .all-comment li .replay-area .remove {
      width: 120px;
      height: 35px;
      border: 0px;
      background: #c9030f;
      border: 1px solid #c9030f;
      color: #fff;
      border-radius: 3px;
      font-size: 14px;
      line-height: 35px;
      display: inline-block;
      text-align: center;
      margin-top: 0px;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .all-comment li .replay-area .remove:hover {
      background: none;
      color: #c9030f;
   }
   .review-area .title {
      font-size: 24px;
      font-weight: 600;
      margin-bottom: 5px;
   }
   .write-comment-area {
      padding-top: 20px;
   }
   .write-comment-area input {
      width: 100%;
      height: 55px;
      background: #fff;
      color: #555;
      border: 1px solid rgba(0, 0, 0, 0.2);
      padding: 0px 20px;
      font-size: 14px;
      margin-bottom: 15px;
   }
   .write-comment-area input::-webkit-input-placeholder {
      /* WebKit browsers */
      color: #555;
   }
   .write-comment-area input:-moz-placeholder {
      /* Mozilla Firefox 4 to 18 */
      color: #555;
   }
   .write-comment-area input::-moz-placeholder {
      /* Mozilla Firefox 19+ */
      color: #555;
   }
   .write-comment-area input:-ms-input-placeholder {
      /* Internet Explorer 10+ */
      color: #555;
   }
   .write-comment-area textarea {
      width: 100%;
      height: 190px;
      background: #fff;
      color: #888888;
      border: 1px solid rgba(0, 0, 0, 0.2);
      padding: 10px 20px;
      font-size: 14px;
      margin-bottom: 15px;
      resize: none;
   }
   .write-comment-area textarea::-webkit-input-placeholder {
      /* WebKit browsers */
      color: #888888;
   }
   .write-comment-area textarea:-moz-placeholder {
      /* Mozilla Firefox 4 to 18 */
      color: #888888;
   }
   .write-comment-area textarea::-moz-placeholder {
      /* Mozilla Firefox 19+ */
      color: #888888;
   }
   .write-comment-area textarea:-ms-input-placeholder {
      /* Internet Explorer 10+ */
      color: #888888;
   }
   .write-comment-area .submit-btn {
      background: #c9030f;
      border: 0px;
      color: #fff;
      padding: 15px 30px;
      border-radius: 0px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .write-comment-area .submit-btn:hover {
      background: #fa7c22;
   }
   .write-comment-area .submit-btn:focus {
      outline: 0px;
   }
   .review-area .star-area .star-list li {
      display: inline-block;
      margin-right: 20px;
      font-size: 14px;
      color: #bdbdbd;
      position: relative;
   }
   .review-area .star-area .star-list li i {
      margin-right: -3px;
      -webkit-transition: all 0.3s linear;
      transition: all 0.3s linear;
      cursor: pointer;
   }
   .review-area .star-area .star-list li::after {
      position: absolute;
      content: "||";
      top: 0px;
      right: -18px;
   }
   .review-area .star-area .star-list li:last-child::after {
      display: none;
   }
   .review-area .star-area .star-list li:hover i {
      color: #fac451;
   }
   .review-area .star-area .star-list li.active i {
      color: #fac451;
   }
   div#review_form_wrapper {
      padding-bottom: 30px;
   }
   del.ml-3 {
      margin-left: 12px;
   }
   .product-size {
      padding: 9px 0px 0px;
   }
   .product-size .title {
      display: inline-block;
      margin-right: 20px;
      font-size: 16px;
      font-weight: 600;
   }
   .product-size .siz-list {
      display: inline-block;
   }
   .product-size .siz-list li {
      display: inline-block;
      margin-right: 5px;
   }
   .product-size .siz-list li.active .box,
   .product-size .siz-list li:hover .box {
      border: 1px solid #117ecc;
      background: #117ecc;
      color: white;
   }
   .product-size .siz-list li .box {
      border: 1px solid rgba(0, 0, 0, 0.1);
      display: inline-block;
      text-align: center;
      font-size: 14px;
      cursor: pointer;
      font-weight: 600;
      padding: 1px 5px;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .product-color {
      margin-top: 3px;
      margin-bottom: 5px;
      position: relative;
   }
   .product-color .title {
      display: inline-block;
      position: absolute;
      top: 50%;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      font-size: 16px;
      font-weight: 600;
   }
   .product-color .color-list {
      display: inline-block;
      padding-left: 70px;
   }
   .product-color .color-list li {
      display: none;
      margin-right: 10px;
   }
   .product-color .color-list li .box {
      width: 16px;
      height: 16px;
      border-radius: 50%;
      display: inline-block;
      position: relative;
      cursor: pointer;
   }
   .product-color .color-list li .box::after {
      position: absolute;
      content: "";
      border: 1px solid rgba(0, 0, 0, 0.3);
      width: 26px;
      height: 26px;
      border-radius: 50%;
      top: -5px;
      left: -5px;
      opacity: 0;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .product-color .color-list li.active .box::after,
   .product-color .color-list li:hover .box::after {
      opacity: 1;
   }
   .product-color .color-list li:last-child {
      margin-right: 0px;
   }
   .mproduct-color {
      margin-top: 13px;
      margin-bottom: 5px;
      position: relative;
   }
   .mproduct-color .title {
      display: inline-block;
      position: absolute;
      top: 50%;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      font-size: 16px;
      font-weight: 600;
   }
   .mproduct-color .title {
      display: inline-block;
      position: absolute;
      top: 50%;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      font-size: 16px;
      font-weight: 600;
   }
   .mproduct-color .color-list {
      display: inline-block;
      padding-left: 70px;
   }
   .mproduct-color .color-list li {
      display: none;
      margin-right: 10px;
   }
   .mproduct-color .color-list li .box {
      width: 16px;
      height: 16px;
      border-radius: 50%;
      display: inline-block;
      position: relative;
      cursor: pointer;
   }
   .mproduct-color .color-list li .box::after {
      position: absolute;
      content: "";
      border: 1px solid rgba(0, 0, 0, 0.3);
      width: 26px;
      height: 26px;
      border-radius: 50%;
      top: -5px;
      left: -5px;
      opacity: 0;
      -webkit-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .mproduct-color .color-list li.active .box::after,
   .mproduct-color .color-list li:hover .box::after {
      opacity: 1;
   }
   .mproduct-color .color-list li:last-child {
      margin-right: 0px;
   }
   li.show-colors {
      display: inline-block !important;
   }
   .qty {
      display: block;
      margin-bottom: 10px;
   }
   .qty ul li {
      margin-right: -4px;
      display: inline-block;
   }
   .qty ul li:first-child {
      margin-left: 0px;
   }
   .qty ul li .qttotal,
   .qty ul li .qtminus,
   .qty ul li .qtplus,
   .qty ul li .modal-plus,
   .qty ul li .modal-total,
   .qty ul li .modal-minus {
      display: inline-block;
      width: 30px;
      height: 30px;
      border: 1px solid rgba(144, 144, 144, 0.4);
      text-align: center;
      line-height: 30px;
      font-size: 14px;
      cursor: pointer;
      font-weight: 500;
   }
   .product-details-page
      .right-area
      .product-info
      .info-meta-3
      .meta-list
      li.count
      .qty
      ul
      li
      .qttotal:focus,
   .product-details-page
      .right-area
      .product-info
      .info-meta-3
      .meta-list
      li.count
      .qty
      ul
      li
      .qtminus:focus,
   .product-details-page
      .right-area
      .product-info
      .info-meta-3
      .meta-list
      li.count
      .qty
      ul
      li
      .qtplus:focus {
      outline: 0px;
   }
   .product-details-page
      .right-area
      .product-info
      .info-meta-3
      .meta-list
      li.count
      .qty
      ul
      li
      .qttotal {
      width: 40px;
   }
   .product-details-page
      .right-area
      .product-info
      .info-meta-3
      .meta-list
      li.count
      .qty
      ul
      li:last-child {
      margin-right: 10px;
   }
   li.addtocart {
      display: inline-block;
      margin-bottom: 20px;
      margin-top: 10px;
   }
   ul li {
      list-style: none;
   }
   li.addtocart a:hover {
      color: #e8135c;
   }
   li.addtocart a:hover {
      background: #d48c72;
      color: #f8f2f2;
      border: 1px solid #fcfcfa;
   }
   li.addtocart a {
      border: 1px solid #e8135c;
      background: #e8135c;
   }
   li.addtocart a {
      font-size: 14px;
      color: #fff;
      display: inline-block;
      border: 1px solid #5c5c5b;
      background: #181818;
      padding: 0px 18px;
      height: 30px;
      line-height: 30px;
      font-weight: 600;
      border-radius: 50px;
      -webkit-transition: all 0.3s ease-in;
      -o-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   span.on-sale {
      background: #f3d8d0;
      padding: 2px 5px;
   }
   /* Pricing Plan Area End */

   .elegant-pricing-tables h3 .price-sticker,
   .elegant-pricing-tables:hover,
   .elegant-pricing-tables.active,
   .elegant-pricing-tables:hover .price,
   .elegant-pricing-tables.active .price,
   .elegant-pricing-tables.style-2 .price,
   .elegant-pricing-tables .btn {
      background: #143250;
   }

   .elegant-pricing-tables .price {
      color: #143250;
      border-color: #143250;
   }

   .user-profile-details .elegant-pricing-tables {
      margin-bottom: 30px;
   }

   .elegant-pricing-tables:hover h3 .price-sticker,
   .elegant-pricing-tables.active h3 .price-sticker,
   .elegant-pricing-tables:hover .btn,
   .elegant-pricing-tables.active .btn,
   .elegant-pricing-tables.style-2:hover .price,
   .elegant-pricing-tables.style-2.active .price {
      color: #143250;
   }

   .elegant-pricing-tables:hover li:nth-child(odd),
   .elegant-pricing-tables.active li:nth-child(odd) {
      background: #0c96c3;
   }

   .elegant-pricing-tables.style-2:hover,
   .elegant-pricing-tables.style-2.active {
      border-color: #0c96c3;
   }

   .elegant-pricing-tables {
      background: #fff;
      color: #333;
      border-radius: 3px;
      overflow: hidden;
   }

   .elegant-pricing-tables * {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
   }

   .elegant-pricing-tables .pricing-head {
      position: relative;
      padding: 25px 0 0px;
   }

   .elegant-pricing-tables h3 {
      font-size: 24px;
      line-height: 30px;
      font-weight: bold;
      color: #333;
      margin: 8px 0 17px;
      letter-spacing: -0.05em;
      /* text-transform: uppercase; */
   }

   .elegant-pricing-tables h3 .price-sticker {
      display: inline-block;
      padding: 4px 6px;
      margin: -5px 0 0 3px;
      font-size: 12px;
      line-height: 12px;
      color: #fff;
      border-radius: 3px;
      letter-spacing: 0;
      vertical-align: middle;
   }

   .elegant-pricing-tables .price {
      display: inline-block;
      line-height: 17px;
      border: 2px solid #fff;
      background: #fff;
      border-radius: 50%;
      width: 122px;
      height: 122px;
      padding-top: 43px;
   }

   .elegant-pricing-tables .price sup {
      top: -18px;
      font-size: 20px;
   }

   .elegant-pricing-tables .price-digit {
      font-size: 40px;
      font-weight: bold;
   }

   .elegant-pricing-tables .btn {
      display: inline-block;
      padding: 10px 20px;
      margin: 25px 0;
      color: #fff;
      border: 0;
      border-radius: 3px;
      font-weight: bold;
      /* text-transform: uppercase */
   }

   .elegant-pricing-tables:hover h3,
   .elegant-pricing-tables.active h3 {
      color: #fff;
   }

   .elegant-pricing-tables:hover h3 .price-sticker,
   .elegant-pricing-tables.active h3 .price-sticker {
      background: #fff;
   }

   .elegant-pricing-tables:hover .price,
   .elegant-pricing-tables.active .price {
      color: #fff;
      border-color: #fff;
      -webkit-animation: toRightFromLeft 0.5s forwards;
      animation: toRightFromLeft 0.5s forwards;
   }

   .elegant-pricing-tables:hover .btn,
   .elegant-pricing-tables.active .btn {
      background-color: #fff;
   }

   @-webkit-keyframes toRightFromLeft {
      49% {
         -webkit-transform: translate(100%);
         transform: translate(100%);
      }

      50% {
         opacity: 0;
         -webkit-transform: translate(-100%);
         transform: translate(-100%);
      }

      51% {
         opacity: 1;
      }
   }

   @keyframes toRightFromLeft {
      49% {
         -webkit-transform: translate(100%);
         transform: translate(100%);
      }

      50% {
         opacity: 0;
         -webkit-transform: translate(-100%);
         transform: translate(-100%);
      }

      51% {
         opacity: 1;
      }
   }

   .elegant-pricing-tables.style-2 {
      border: 1px solid rgba(0, 0, 0, 0.15);
   }

   .elegant-pricing-tables.style-2 .price {
      color: #fff;
      border: 0;
   }

   .elegant-pricing-tables.style-2 .btn {
      border-radius: 20px;
   }

   .elegant-pricing-tables.style-2:hover .price,
   .elegant-pricing-tables.style-2.active .price,
   .elegant-pricing-tables.style-2.active .pricing-detail span {
      background: #fff !important;
   }

   .elegant-pricing-tables.style-2:hover li:nth-child(odd),
   .elegant-pricing-tables.style-2.active li:nth-child(odd) {
      background: inherit;
   }

   .elegant-pricing-tables.style-2 .price .price-month {
      padding-top: 5px;
      display: inline-block;
   }

   .elegant-pricing-tables .pricing-detail {
      padding-top: 25px;
   }

   .elegant-pricing-tables .pricing-detail li {
      /* display: block; */
      padding: 10px 0;
      margin: 0 20px;
   }

   .elegant-pricing-tables:hover .pricing-detail li,
   .elegant-pricing-tables.active .pricing-detail li,
   .elegant-pricing-tables.style-2.active .pricing-detail span,
   .elegant-pricing-tables:hover small,
   .elegant-pricing-tables:hover a.hover-white {
      color: #fff !important;
   }

   .elegant-pricing-tables .pricing-detail li:nth-child(odd) {
      background: #f9f9f9;
   }

   .elegant-pricing-tables,
   .elegant-pricing-tables .btn,
   .elegant-pricing-tables .pricing-detail li,
   .elegant-pricing-tables .price {
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
   }

   .elegant-pricing-tables.style-2 .pricing-detail li {
      padding: 6px 0;
      margin: 0px 35px;
   }

   .elegant-pricing-tables.style-2 .pricing-detail li:nth-child(odd) {
      background: inherit;
   }

   .elegant-pricing-tables.style-2 .pricing-detail li:last-child {
      padding-bottom: 0;
   }

   .elegant-pricing-tables.style-2 .pricing-detail li > i {
      color: #aaa;
      margin-right: 5px;
   }

   .elegant-pricing-tables.style-2:hover .pricing-detail li > i,
   .elegant-pricing-tables.style-2.active .pricing-detail li > i,
   .elegant-pricing-tables.style-2:hover .pricing-detail span {
      color: #fff !important;
   }
   p.text-left {
      margin-bottom: -10px;
   }
   /* Pricing Plan Area End */
   .flash a {
      width: 40%;
   }
   .flash a:hover {
      background: #000;
      color: #fff;
   }
   .nice-select::after {
      border-bottom: 2px solid #fff;
      border-right: 2px solid #fff;
      content: "";
      display: block;
   }
   .nice-select::after {
      border-bottom: 2px solid rgb(7, 7, 7);
      border-right: 2px solid rgb(17, 17, 17);
      content: "";
      display: block;
      height: 8px;
      margin-top: -4px;
      pointer-events: none;
      position: absolute;
      right: 12px;
      top: 50%;
      -webkit-transform-origin: 66% 66%;
      -ms-transform-origin: 66% 66%;
      transform-origin: 66% 66%;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
      -webkit-transition: all 0.15s ease-in-out;
      transition: all 0.15s ease-in-out;
      width: 8px;
   }
   /*--------------05. Start of subscribe-pre-loader CSS------------------*/
   .subscribe-preloader-wrap {
      position: fixed;
      width: 100%;
      height: 100%;
      background: #00000080;
      z-index: 999;
   }
   .subscribePreloader__thumb {
      width: 50%;
      height: 50%;
      position: absolute;
      left: 50%;
      top: 50%;
      background-repeat: no-repeat;
      background-position: center center;
      background-size: cover;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
   }
   @media screen and (max-width: 1199px) {
      .subscribePreloader__thumb {
         width: 90vw;
      }
   }
   .subscribePreloader__text {
      background: #c9030f;
      width: 80%;
      margin: auto;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      top: 50%;
      position: relative;
      padding: 30px;
      opacity: 0.9;
   }
   @media screen and (max-width: 1199px) {
      .subscribePreloader__text {
         width: 90vw;
         height: 100%;
      }
   }
   @media screen and (max-width: 550px) {
      .subscribeform .form-group input,
      .subscribeform .form-group button {
         width: 100%;
         margin: 5px;
      }
      .subscribePreloader__text h1 {
         font-size: 27px;
         line-height: 1.4;
      }
      .subscribePreloader__text p {
         font-size: 14px;
         line-height: 1.6;
      }
   }

   .subscribePreloader__text form {
      margin-top: 30px;
   }
   .subscribePreloader__text h1,
   .subscribePreloader__text p {
      color: #ffffff;
   }
   .subscribePreloader__text input,
   .subscribePreloader__text button {
      border: none;
      height: 40px;
   }
   .subscribePreloader__text input {
      width: 70%;
      margin-right: 5px;
      padding-left: 10px;
   }
   .subscribePreloader__text button {
      font-weight: 600;
      width: 26%;
      background: #333333;
      color: #ffffff;
      -webkit-transition: all 400ms ease-in;
      transition: all 400ms ease-in;
   }
   .subscribePreloader__text button:hover {
      background: #ffffff;
      color: #333333;
   }
   .subscribePreloader__thumb span {
      display: block;
      position: absolute;
      right: -10px;
      top: -10px;
      background: #ffffff;
      height: 25px;
      width: 25px;
      line-height: 25px;
      text-align: center;
      color: #333333;
      font-size: 12px;
      border-radius: 100%;
      cursor: pointer;
      z-index: 999;
   }
   /*--------------05. End of subscribe-pre-loader CSS------------------*/
   .cookie-bar-wrap.show {
      opacity: 1;
      visibility: visible;
      -webkit-transform: translateY(-200px);
      transform: translateY(-200px);
   }

   .cookie-bar-wrap {
      position: fixed;
      left: 0;
      right: 0;
      bottom: -200px;
      background: #3b4045;
      -webkit-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.1);
      box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.1);
      opacity: 0;
      visibility: hidden;
      -webkit-transform: translateY(0);
      transform: translateY(0);
      z-index: 50;
      -webkit-transition: 0.6s ease;
      transition: 0.6s ease;
      padding: 10px 30px;
   }

   .cookie-bar {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-wrap: wrap;
      flex-wrap: wrap;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      padding: 15px 0;
      text-align: center;
   }

   .cookie-bar .cookie-bar-text {
      font-size: 14px;
      color: #f9f9f9;
      flex-grow: 1;
      margin: 20px 0;
   }

   .cookie-bar .cookie-bar-action {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      white-space: nowrap;
   }
   button.btn.btn-secondary.rounded-right-pill.text-white:hover {
      color: #c9030f;
   }
   .nav-line-active .navbar-nav .active > .nav-link::before {
      width: 100%;
      bottom: 10px;
      left: 0;
   }

   element.style {
   }
   li.addtocart a:hover {
      background: #d48c72;
      color: #f8f2f2;
      border: 1px solid #fcfcfa;
   }
   li.addtocart a:hover {
      color: #e8135c;
   }
   li.addtocart a:hover {
      background: #fff !important;
   }

   @media (max-width: 992px) {
      .hide1 {
         display: none;
      }
   }

   .social-icons {
      display: flex;
      flex-wrap: wrap;
      margin: -3px;
   }

   .social-icons li {
      padding: 3px;
   }

   .social-icons li a i {
      width: 30px;
      height: 30px;
      line-height: 30px;
      text-align: center;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
      border: 1px solid rgba(255, 255, 255, 0.1);
      color: #fff;
      -webkit-transition: all ease 0.3s;
      -moz-transition: all ease 0.3s;
      transition: all ease 0.3s;
      background: #e8135c;
   }
   .text--base {
      color: #e8135c;
   }
   .report-item {
      font-family: var(--theme-hiperlink-font);
      font-weight: 500;
   }
   .social-icons li a i[class*="facebook"] {
      background: #3b5998;
   }

   .social-icons li a i[class*="whatsapp"] {
      background: #25d366;
   }

   .social-icons li a i[class*="twitter"] {
      background: #55acee;
   }

   .social-icons li a i[class*="linkedin"] {
      background: #007bb5;
   }

   .social-icons li a i[class*="instagram"] {
      background: #e4405f;
   }

   .social-icons li a i[class*="google"] {
      background: #dd4b39;
   }

   .social-icons li a i[class*="youtube"] {
      background: #cd201f;
   }

   .social-icons li a i[class*="camera"] {
      background: #e4405f;
   }

   .social-icons li a i[class*="pinterest"] {
      background: #007bb5;
   }

   .social-icons li a i[class*="tumblr"] {
      background: #34465d;
   }

   .social-icons li a i[class*="behance"] {
      background: #1769ff;
   }

   .social-icons li a i[class*="skype"] {
      background: #2fb7df;
   }

   .social-icons li a i[class*="vimeo"] {
      background: #1ab7ea;
   }
   .pro-details-sidebar-item {
      text-align: center;
      box-shadow: 0 0 4px rgb(0 0 0 / 15%);
      width: 100%;
      background: var(--theme-white-color);
      border-radius: 5px;
      padding: 30px 15px 25px;
   }
   .pro-details-sidebar-item h3 {
      color: #ff5500;
   }
   .pro-details-sidebar-item .btn--base {
      padding: 4px 20px;
      border-radius: 5px;
   }
   .btn--base {
      line-height: 40px;
      text-align: center;
      font-size: 13px;
      font-family: var(--theme-hiperlink-font);
      background-color: #bd2222;
      color: #fff !important;
      width: 100%;
      text-transform: uppercase;
      font-weight: 500;
   }
   @media screen and (max-width: 991px) {
      .product-images {
         max-width: 450px;
         margin: 0 auto;
      }
   }

   .time-box ul li {
      border-color: #e5e5e5 !important;
      background: #fff;
   }
   .time-box ul li span:first-child {
      color: #bd2222;
   }
   .post-title {
      font-size: 16px;
      line-height: 1.2;
   }
   .cnt-sell {
      list-style: none;
   }
   .message-modal .modal .modal-dialog {
      position: fixed;
      bottom: 0;
      right: 0;
      width: 100%;
      max-width: 600px;
      margin: 0px;
      z-index: 999;
   }
   .message-modal .modal .modal-dialog .modal-header {
      background: #ff5500;
      padding: 12px 30px !important;
      text-align: right;
   }
   .message-modal .modal .modal-dialog .modal-header .modal-title {
      color: #fff;
      font-size: 18px;
      font-weight: 600;
      display: inline-block;
   }
   .message-modal .modal .contact-form {
      margin-top: 12px;
      padding: 10px 10px 10px;
   }
   .message-modal .modal .contact-form ul {
      padding-left: 0px;
      margin-bottom: 0px;
   }
   .message-modal .modal .contact-form ul li {
      list-style: none;
   }
   .message-modal .modal .contact-form ul li .input-field {
      margin-bottom: 20px !important;
      background: none !important;
      border-radius: 0px !important;
      border: 0px !important;
      font-size: 16px;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1) !important;
   }
   .message-modal .modal .contact-form ul li .input-field:focus {
      border: 0px !important;
      border-bottom: 1px solid #ff5500 !important;
   }
   .message-modal .modal .contact-form ul li .input-field.textarea {
      margin-bottom: 35px !important;
   }
   .message-modal .modal .contact-form .submit-btn {
      width: 100%;
      height: 50px;
      background: #ff5500;
      color: #fff;
      font-size: 14px;
      line-height: 50px;
      font-weight: 600;
      text-align: center;

      border: 0px;
      border-radius: 5px;
      cursor: pointer;
      -webkit-transition: all 0.3s ease-in;
      -o-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
   }
   .message-modal .modal .contact-form .submit-btn:hover {
      background: #333333;
   }
   .message-modal .modal-backdrop {
      background: none !important;
   }
   .message-modal .modal-header .close {
      right: 27px;
      top: 26px;
      color: #000;
      border: 1px solid #fff;
      display: inline-block;
   }
   .message-modal .modal-header .close span {
      color: #333;
   }
   .message-modal .modal-header .close:hover span {
      color: #fff;
   }

   .report {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1050;
      display: none;
      width: 100%;
      height: 100%;
      overflow: hidden;
      outline: 0;
   }
   .report.fade .modal-dialog {
      transition: -webkit-transform 0.3s ease-out;
      transition: transform 0.3s ease-out;
      transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
      -webkit-transform: translate(0, -50px);
      transform: translate(0, -50px);
   }
   @media only screen and (max-width: 575px) {
      .message-modal .modal .modal-dialog {
         width: 100%;
      }
   }
   @media (min-width: 576px) {
      .report .modal-dialog-centered {
         min-height: calc(100% - 3.5rem);
      }
   }
   @media (min-width: 576px) {
      .report .modal-dialog {
         max-width: 500px;
         margin: 1.75rem auto;
      }
   }
   .report .modal-dialog-centered {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      min-height: calc(100% - 1rem);
   }
   .report .modal-dialog {
      position: relative;
      width: auto;

      pointer-events: none;
   }
   .report .modal-content {
      position: relative;
      display: -ms-flexbox;
      display: flex;
      -ms-flex-direction: column;
      flex-direction: column;
      width: 100%;
      pointer-events: auto;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid rgba(0, 0, 0, 0.2);
      border-radius: 0.3rem;
      outline: 0;
   }
   .report .modal-header {
      border: none !important;
      padding: 0px 15px !important;
   }
   .report .modal-header {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: start;
      align-items: flex-start;
      -ms-flex-pack: justify;
      justify-content: space-between;
      padding: 1rem 1rem;
      border-bottom: 1px solid #dee2e6;
      border-top-left-radius: 0.3rem;
      border-top-right-radius: 0.3rem;
   }
   .report .modal-header .close {
      position: absolute;
      right: 5px;
      top: 4px;
      background: #fff;
      opacity: 1 !important;
      width: 25px;
      height: 25px;
      text-align: center;
      line-height: 25px;
      padding: 0px;
      border-radius: 50%;
      font-size: 18px;
      font-weight: 600 !important;
      box-shadow: 0px 0px 10px rgb(0 0 0 / 20%);
   }
   .report .modal-header .close {
      margin: -1rem -1rem -1rem auto;
   }
   .report .modal-body {
      position: relative;
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      padding: 1rem;
   }
   .report .login-area .header-area {
      text-align: center;
      margin-bottom: 40px;
   }
   .report .login-area .header-area .title {
      font-size: 30px;
      font-weight: 700;
      text-transform: uppercase;
      line-height: 40px;
      color: #ff5500;
   }
   .report .login-area .header-area .text {
      font-size: 18px;
      color: #919191;
   }
   .report .login-area .submit-btn {
      width: 100%;
      height: 50px;
      text-align: center;
      background: #ff5500;
      border: 0px;
      color: #fff;
      font-weight: 700;
      text-transform: uppercase;
      margin-top: 20px;
      -webkit-transition: all 0.3s ease-in;
      -o-transition: all 0.3s ease-in;
      transition: all 0.3s ease-in;
      cursor: pointer;
   }
   .banner-content {
      max-width: 90%;
   }
   .banner-content .subtitle {
      font-size: 24px;
      line-height: 1.4;
      margin-bottom: 8px;
      cursor: text;
   }
   .banner-content .title {
      font-size: 70px;
      line-height: 80px;
      margin-bottom: 12px;
      cursor: text;
      font-weight: 900;
   }
   .banner-content p {
      font-size: 16px;
      line-height: 30px;
      font-weight: 600;
      margin-bottom: 35px;
      cursor: text;
   }
   .cmn--btn {
      cursor: pointer;
      padding: 9px 25px;
      font-size: 14px;
      top: 517px;
      font-weight: 400;
      left: 383.5px;
      color: #fff;
      line-height: 28px;
      margin: 0px;
      z-index: auto;
      border-radius: 5px;
      opacity: 1;
      background: #a439ee;
      text-transform: uppercase;
      border-radius: 3px;
      display: inline-block;
   }

   .cmn--btn:hover {
      color: #fff !important;
   }
   .banner-wrapper-item {
      display: flex;
      flex-direction: column;
      justify-content: center;
      position: relative;
      z-index: 3;
      min-height: 540px;
      padding: 50px 0;
   }
   @media (min-width: 768px) {
      .banner-wrapper-item {
         min-height: 620px;
         padding: 100px 0;
      }
   }
   @media (min-width: 992px) {
      .banner-wrapper-item {
         min-height: 780px;
         padding: 100px 0;
      }
   }
   @media (min-width: 1200px) {
      .banner-wrapper-item {
         margin-left: 140px;
         min-height: 100vh;
      }
   }

   @media (max-width: 991px) {
      .banner-content .subtitle {
         font-size: 20px;
         margin-bottom: 25px;
      }
      .banner-content .title {
         font-size: 38.4px;
         line-height: 44.8px;
         margin-bottom: 25px;
      }
      .banner-content p {
         margin-bottom: 35px;
      }
   }
   .home-slider .owl-dots {
      position: absolute;
      bottom: 20px;
      top: unset;
   }

   @-webkit-keyframes fadeInDown {
      0% {
         opacity: 0;
         -webkit-transform: translate3d(0, -20%, 0);
         transform: translate3d(0, -20%, 0);
      }
      to {
         opacity: 1;
         -webkit-transform: translateZ(0);
         transform: translateZ(0);
      }
   }
   @keyframes fadeInDown {
      0% {
         opacity: 0;
         -webkit-transform: translate3d(0, -20%, 0);
         transform: translate3d(0, -20%, 0);
      }
      to {
         opacity: 1;
         -webkit-transform: translateZ(0);
         transform: translateZ(0);
      }
   }
   .fadeInDown {
      -webkit-animation-name: fadeInDown;
      animation-name: fadeInDown;
   }
   @-webkit-keyframes fadeOutUp {
      0% {
         opacity: 1;
      }
      to {
         opacity: 0;
         -webkit-transform: translate3d(0, -20%, 0);
         transform: translate3d(0, -20%, 0);
      }
   }
   @keyframes fadeOutUp {
      0% {
         opacity: 1;
      }
      to {
         opacity: 0;
         -webkit-transform: translate3d(0, -20%, 0);
         transform: translate3d(0, -20%, 0);
      }
   }
   .fadeOutUp {
      -webkit-animation-name: fadeOutUp;
      animation-name: fadeOutUp;
   }
   .nextBtn,
   .prevBtn {
      position: absolute;
      top: 50%;
      width: 60px;
      height: 60px;
      border-right: 2px solid #fff;
      border-top: 2px solid #fff;
      z-index: 9;
      cursor: pointer;
   }
   .nextBtn {
      right: 25px;
      transform: rotate(45deg);
   }
   .prevBtn {
      left: 25px;
      transform: rotate(-135deg);
   }

   @media screen and (max-width: 991px) {
      .nextBtn,
      .prevBtn {
         width: 40px;
         height: 40px;
      }
      .nextBtn {
         right: 10px;
      }
      .prevBtn {
         left: 10px;
      }
   }

   @media screen and (max-width: 575px) {
      .nextBtn,
      .prevBtn {
         display: none;
      }
   }

   .loader {
      position: fixed;
      inset: 0;
      z-index: 99999999;
      background: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
   }
   .spinner {
      display: block;
      width: 44px;
      height: 44px;
      border-radius: 50%;
      border: 4px solid #161616;
      border-left-color: #fff;
      animation: spin 3s linear infinite;
   }
   @keyframes spin {
      0% {
         transform: rotate(-720deg);
      }
      100% {
         transform: rotate(0);
      }
   }
   .sell-btn {
      font-size: 13px;
      font-weight: 600;
      color: rgb(17, 17, 17);
      border: 1px solid rgb(17, 17, 17);
   }
   .sell-btn:hover {
      background: #fff;
   }

   a.sell-btn {
      padding: 3px 15px;
      border-radius: 50px;
      font-weight: 600;
      margin-left: 15px;
   }
   .sell {
      margin-top: 7px;
   }
   .social-links {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin: -2px;
   }
   .social-links li {
      width: 40px;
      height: 40px;
      padding: 2px;
   }
   .social-links li a {
      width: 36px;
      height: 36px;
      line-height: 36px;
      text-align: center;
      border-radius: 50%;
      background: #a439ee;
      display: block;
      color: #fff;
   }
   .social-links li a:hover {
      color: #fff !important;
   }
   .slide-h5 {
      display: block !important;
   }
   .fashion-banner-wrapper > .row:nth-child(even) {
      flex-direction: row-reverse;
   }
   .fashion-banner-wrapper > .row:nth-child(even) .banner-image {
      margin-left: auto;
   }
   .fashion-banner-wrapper > .row:nth-child(even) .banner-content {
      left: 0;
      right: unset;
   }
   .fashion-banner-wrapper {
      padding: 50px 0;
   }
   @media screen and (min-width: 992px) {
      .fashion-banner-wrapper > .row:not(:first-child) {
         margin-top: -175px;
      }
   }
   .products-avilable-number {
      text-align: right;
   }
   .fashion-banner-wrapper > .row:nth-child(even) .products-avilable-number {
      text-align: left;
   }
   .fashion-banner-wrapper > .row:nth-child(even) .products-avilable-number {
      background: url("../images/shape/4.png") no-repeat center left;
   }
   .counting {
      margin-left: auto;
   }
   .fashion-banner-wrapper > .row:nth-of-type(even) .counting {
      margin-right: auto;
      margin-left: 0;
      text-align: left;
   }
   .counting-bottom {
      margin: 0;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
   }
   select.form-control {
      appearance: button;
      -webkit-appearance: button;
   }
   [class*="product-search-"] .form-inline.search-pill-shape {
      background: var(--theme-white-color);
   }
   .fixed-top [class*="product-search-"] .form-inline.search-pill-shape {
      border: 1px solid var(--theme-dark-color) !important;
   }
   [class*="product-search-"] .form-inline button {
      background: var(--theme-secondary-color) !important;
   }

   .dashboard-sidebar-btn {
      border-radius: 4px;
      text-align: center;
      color: #fff !important;
      font-size: 18px;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 35px;
      height: 40px;
      box-shadow: none !important;
      outline: none;
   }
   .dashboard-sidebar-btn i {
      display: inline-flex;
   }
   @media screen and (max-width: 1199px) {
      #sidebar {
         position: fixed;
         top: 0;
         left: 0;
         height: 100%;
         width: 100%;
         max-width: 340px;
         z-index: 99999;
         transform: translateX(-101%);
         transition: all ease 0.3s;
         border-right: 1px solid #e5e5e5;
         background: #fff;
         overflow-y: auto;
      }
      #sidebar.active {
         transform: translateX(0);
      }
   }
   @media screen and (max-width: 991px) {
      .header-sticky {
         background: #fff !important;
      }
   }
   @media screen and (max-width: 500px) {
      .widget.p-40,
      .widget.p-30 {
         padding: 20px !important;
      }
   }
   .dashbaord-sidebar-close {
      font-size: 18px;
      color: #c9030f;
      position: absolute;
      top: 5px;
      right: 5px;
      width: 40px;
      height: 40px;
      line-height: 40px;
      text-align: center;
   }
   .dashboard-overlay {
      inset: 0;
      position: fixed;
      z-index: 99;
      background: rgba(0, 0, 0, 0.775);
      display: none;
   }
   .dashboard-overlay.active {
      display: block;
      animation: fadeIn 0.5s;
      -webkit-animation: fadeIn 0.5s;
      -moz-animation: fadeIn 0.5s;
   }
   .h--150 {
      height: 150px;
   }



/*style file end*/
:root {
    --theme-secondary-color: #1f1f1f;
}
.simple-service{
   		margin-top: 30px;
   }

.time-count.time-box li {
    border: 2px solid var(--theme-secondary-color);
    width: 80px;
    height: 80px;
    text-align: center;
    padding: 5px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.time-box ul li {
    border-color: #e5e5e5 !important;
    background: #fff;
}
.time-count.time-box li span:first-child {
    font-size: 24px;
    font-weight: 400;
    margin: 0 auto;
    line-height: initial;
    height: auto;
    color: #1f1f1f;
}
.time-count.time-box li span:last-child {
    font-size: 15px;
    font-weight: 500;
    text-transform: uppercase;
    margin-top: 0;
    color: #1f1f1f;
}


.my-30, .m-30, .mb-30 {
    margin-bottom: 30px !important;
}
</style>
@endsection
@section('content')
<!-- section 1 -->
      
<section class="hero-area">
   <div class="container">
      <div class="hero-area-slider">
         <div class="slide-progress"></div>
         <div class="intro-carousel">
            <div class="containerss slide-one ">
            
               <div class="intro-content desktop-banner" style="background-image: url({{asset('asset_old/images/sliders/1654586862BigWinterSaleBanner.jpg')}})">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="slider-content">
                           <!-- layer 1 -->
                           <div class="layer-1">
                              <h4 style="font-size: 24px; color: #ffffff" class="subtitle subtitle8" data-animation="animated slideInUp"></h4>
                              <h2 style="font-size: 60px; color: #ffffff;" class="title title8" data-animation="animated slideInDown"></h2>
                           </div>
                           <!-- layer 2 -->
                           <div class="layer-2">
                              <p style="font-size: 16px; color: #ffffff;"  class="text text8" data-animation="animated slideInDown">nvfskj jkbcsdk</p>
                           </div>
                           <!-- layer 3 -->
                           <div class="layer-3">
                              <a href="#" target="_blank" class="mybtn1"><span>shop now <i class="fas fa-chevron-right"></i></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            
            
               <div class="intro-content mobile-banner" style="background-image: url({{asset('asset_old/images/sliders/1654586862BigWinterSaleBanner.jpg')}})">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="slider-content">
                           <!-- layer 1 -->
                           <div class="layer-1">
                              <h4 style="font-size: 24px; color: #c32d2d;" class="subtitle subtitle8" data-animation="animated slideInDown">nvfsjn lkjdkl</h4>
                              <h2 style="font-size: 60px; color: #ffffff;" class="title title8" data-animation="animated slideInDown">ndsj</h2>
                           </div>
                           <!-- layer 2 -->
                           <div class="layer-2">
                              <p style="font-size: 16px; color: #ffffff;"  class="text text8" data-animation="animated slideInDown">vfsvs</p>
                           </div>
                           <!-- layer 3 -->
                           <div class="layer-3">
                              <a href="#" target="_blank" class="mybtn1"><span>shop now <i class="fas fa-chevron-right"></i></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="containerss slide-two ">
            
               <div class="intro-content desktop-banner" style="background-image: url({{asset('asset_old/images/sliders/1654586862BigWinterSaleBanner.jpg')}})">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="slider-content">
                           <!-- layer 1 -->
                           <div class="layer-1">
                              <h4 style="font-size: 24px; color: #ffffff" class="subtitle subtitle8" data-animation="animated slideInUp"></h4>
                              <h2 style="font-size: 60px; color: #ffffff;" class="title title8" data-animation="animated slideInDown"></h2>
                           </div>
                           <!-- layer 2 -->
                           <div class="layer-2">
                              <p style="font-size: 16px; color: #ffffff;"  class="text text8" data-animation="animated slideInDown">nvfskj jkbcsdk</p>
                           </div>
                           <!-- layer 3 -->
                           <div class="layer-3">
                              <a href="#" target="_blank" class="mybtn1"><span>shop now <i class="fas fa-chevron-right"></i></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            
            
               <div class="intro-content mobile-banner" style="background-image: url({{asset('asset_old/images/sliders/1654586862BigWinterSaleBanner.jpg')}})">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="slider-content">
                           <!-- layer 1 -->
                           <div class="layer-1">
                              <h4 style="font-size: 24px; color: #c32d2d;" class="subtitle subtitle8" data-animation="animated slideInDown">nvfsjn lkjdkl</h4>
                              <h2 style="font-size: 60px; color: #ffffff;" class="title title8" data-animation="animated slideInDown">ndsj</h2>
                           </div>
                           <!-- layer 2 -->
                           <div class="layer-2">
                              <p style="font-size: 16px; color: #ffffff;"  class="text text8" data-animation="animated slideInDown">vfsvs</p>
                           </div>
                           <!-- layer 3 -->
                           <div class="layer-3">
                              <a href="#" target="_blank" class="mybtn1"><span>shop now <i class="fas fa-chevron-right"></i></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="containerss slide-three ">
            
               <div class="intro-content desktop-banner" style="background-image: url({{asset('asset_old/images/sliders/1654586862BigWinterSaleBanner.jpg')}})">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="slider-content">
                           <!-- layer 1 -->
                           <div class="layer-1">
                              <h4 style="font-size: 24px; color: #ffffff" class="subtitle subtitle8" data-animation="animated slideInUp"></h4>
                              <h2 style="font-size: 60px; color: #ffffff;" class="title title8" data-animation="animated slideInDown"></h2>
                           </div>
                           <!-- layer 2 -->
                           <div class="layer-2">
                              <p style="font-size: 16px; color: #ffffff;"  class="text text8" data-animation="animated slideInDown">nvfskj jkbcsdk</p>
                           </div>
                           <!-- layer 3 -->
                           <div class="layer-3">
                              <a href="#" target="_blank" class="mybtn1"><span>shop now <i class="fas fa-chevron-right"></i></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            
            
               <div class="intro-content mobile-banner" style="background-image: url({{asset('asset_old/images/sliders/1654586862BigWinterSaleBanner.jpg')}})">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="slider-content">
                           <!-- layer 1 -->
                           <div class="layer-1">
                              <h4 style="font-size: 24px; color: #c32d2d;" class="subtitle subtitle8" data-animation="animated slideInDown">nvfsjn lkjdkl</h4>
                              <h2 style="font-size: 60px; color: #ffffff;" class="title title8" data-animation="animated slideInDown">ndsj</h2>
                           </div>
                           <!-- layer 2 -->
                           <div class="layer-2">
                              <p style="font-size: 16px; color: #ffffff;"  class="text text8" data-animation="animated slideInDown">vfsvs</p>
                           </div>
                           <!-- layer 3 -->
                           <div class="layer-3">
                              <a href="#" target="_blank" class="mybtn1"><span>shop now <i class="fas fa-chevron-right"></i></span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>



    <!-- section 2 -->
<section class="trending">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 rem-padding">
            <div class="section-top">
               <h2 class="section-title">
                  Shop by Category
               </h2>
               <a href="#" class="link">View All</a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12 rem-padding">
         	<div class="trending-item-slider_category">
               <a href="#">
                  <div class="item-img">
	                     <img class="img-fluid" src="{{asset('asset_old/images/categories/1622787564ElectronicsCategory.jpg')}}" alt="">
                  </div>
               </a>

               <a href="#">
                  <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/categories/1622787564ElectronicsCategory.jpg')}}" alt="">
                  </div>
               </a>

               <a href="#">
                  <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/categories/1622787564ElectronicsCategory.jpg')}}" alt="">
                  </div>
               </a>

               <a href="#">
                  <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/categories/1622787564ElectronicsCategory.jpg')}}" alt="">
                  </div>
               </a>


               <a href="#">
                  <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/categories/1622787564ElectronicsCategory.jpg')}}" alt="">
                  </div>
               </a>

               <a href="#">
                  <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/categories/1622787564ElectronicsCategory.jpg')}}" alt="">
                  </div>
               </a>

               <a href="#">
                  <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/categories/1622787564ElectronicsCategory.jpg')}}" alt="">
                  </div>
               </a>


               <a href="#">
                  <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/categories/1622787564ElectronicsCategory.jpg')}}" alt="">
                  </div>
               </a>

               <a href="#">
                  <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/categories/1622787564ElectronicsCategory.jpg')}}" alt="">
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
	 <!-- section 3  -->

<div class="full-row">
   	<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <span class="text-secondary pb-2 d-table tagline mx-auto text-uppercase text-center">Featured Products</span>
            <h2 class="main-title mb-4 text-center text-secondary">Our Featured Products</h2>
        </div>
    </div>
    <div class="products product-style-1">
       <div class="row g-4 row-cols-xl-4 row-cols-md-3 row-cols-sm-2 row-cols-1 e-title-general e-title-hover-primary e-image-bg-light e-hover-image-zoom e-info-center">

        <div class="col">
            <div class="product type-product">
                <div class="product-wrapper">
                <div class="product-image">
                    <a href="#" class="woocommerce-LoopProduct-link">
                     <img class="lazy" alt="Product Image" src="{{asset('assets/images/thumbnails/1648013376Q0pmYfnP.jpg')}}" style="">
                    </a>
                     <div class="on-sale">- 48%</div>
                    
                    <div class="hover-area">
                                            <div class="cart-button">
                        <a href="javascript:;" data-href="http://localhost/oracle-marketplace/addcart/175" class="add-cart button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add To Cart" aria-label="Add To Cart"></a>
                    </div>
                    <div class="cart-button buynow">
                        <a class="button add_to_cart_button add-to-cart-quick" href="javascript:;" data-bs-toggle="tooltip" data-href="http://localhost/oracle-marketplace/addtocart/175" data-bs-placement="right" title="Buy Now" data-bs-original-title="Buy Now"></a>
                    </div>
                                                        <div class="wishlist-button">
                        <a class="add_to_wishlist button add_to_cart_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                    </div>
                                <div class="compare-button">
                        <a class="compare button add_to_cart_button" data-href="http://localhost/oracle-marketplace/item/compare/add/175" href="javascrit:;" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                    </div>
                    </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title"><a href="#">Physical Product Title Title will Be Here 102</a></h3>
                    <div class="product-price">
                        <div class="price">
                        <ins>115$ </ins>
                        <del>220$</del>
                        </div>
                    </div>
                    <div class="shipping-feed-back">
                        <div class="star-rating">
                        <div class="rating-wrap">
                            <p><i class="fas fa-star"></i><span> 0 (0)</span></p>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="product type-product">
                <div class="product-wrapper">
                <div class="product-image">
                    <a href="#" class="woocommerce-LoopProduct-link">
                     <img class="lazy" alt="Product Image" src="{{asset('assets/images/thumbnails/1648013376Q0pmYfnP.jpg')}}" style="">
                    </a>
                     <div class="on-sale">- 48%</div>
                    
                    <div class="hover-area">
                                            <div class="cart-button">
                        <a href="javascript:;" data-href="http://localhost/oracle-marketplace/addcart/175" class="add-cart button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add To Cart" aria-label="Add To Cart"></a>
                    </div>
                    <div class="cart-button buynow">
                        <a class="button add_to_cart_button add-to-cart-quick" href="javascript:;" data-bs-toggle="tooltip" data-href="http://localhost/oracle-marketplace/addtocart/175" data-bs-placement="right" title="Buy Now" data-bs-original-title="Buy Now"></a>
                    </div>
                                                        <div class="wishlist-button">
                        <a class="add_to_wishlist button add_to_cart_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                    </div>
                                <div class="compare-button">
                        <a class="compare button add_to_cart_button" data-href="http://localhost/oracle-marketplace/item/compare/add/175" href="javascrit:;" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                    </div>
                    </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title"><a href="#">Physical Product Title Title will Be Here 102</a></h3>
                    <div class="product-price">
                        <div class="price">
                        <ins>115$ </ins>
                        <del>220$</del>
                        </div>
                    </div>
                    <div class="shipping-feed-back">
                        <div class="star-rating">
                        <div class="rating-wrap">
                            <p><i class="fas fa-star"></i><span> 0 (0)</span></p>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        

        <div class="col">
            <div class="product type-product">
                <div class="product-wrapper">
                <div class="product-image">
                    <a href="#" class="woocommerce-LoopProduct-link">
                     <img class="lazy" alt="Product Image" src="{{asset('assets/images/thumbnails/1648013376Q0pmYfnP.jpg')}}" style="">
                    </a>
                     <div class="on-sale">- 48%</div>
                    
                    <div class="hover-area">
                                            <div class="cart-button">
                        <a href="javascript:;" data-href="http://localhost/oracle-marketplace/addcart/175" class="add-cart button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add To Cart" aria-label="Add To Cart"></a>
                    </div>
                    <div class="cart-button buynow">
                        <a class="button add_to_cart_button add-to-cart-quick" href="javascript:;" data-bs-toggle="tooltip" data-href="http://localhost/oracle-marketplace/addtocart/175" data-bs-placement="right" title="Buy Now" data-bs-original-title="Buy Now"></a>
                    </div>
                                                        <div class="wishlist-button">
                        <a class="add_to_wishlist button add_to_cart_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                    </div>
                                <div class="compare-button">
                        <a class="compare button add_to_cart_button" data-href="http://localhost/oracle-marketplace/item/compare/add/175" href="javascrit:;" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                    </div>
                    </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title"><a href="#">Physical Product Title Title will Be Here 102</a></h3>
                    <div class="product-price">
                        <div class="price">
                        <ins>115$ </ins>
                        <del>220$</del>
                        </div>
                    </div>
                    <div class="shipping-feed-back">
                        <div class="star-rating">
                        <div class="rating-wrap">
                            <p><i class="fas fa-star"></i><span> 0 (0)</span></p>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="product type-product">
                <div class="product-wrapper">
                <div class="product-image">
                    <a href="#" class="woocommerce-LoopProduct-link">
                     <img class="lazy" alt="Product Image" src="{{asset('assets/images/thumbnails/1648013376Q0pmYfnP.jpg')}}" style="">
                    </a>
                     <div class="on-sale">- 48%</div>
                    
                    <div class="hover-area">
                                            <div class="cart-button">
                        <a href="javascript:;" data-href="http://localhost/oracle-marketplace/addcart/175" class="add-cart button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add To Cart" aria-label="Add To Cart"></a>
                    </div>
                    <div class="cart-button buynow">
                        <a class="button add_to_cart_button add-to-cart-quick" href="javascript:;" data-bs-toggle="tooltip" data-href="http://localhost/oracle-marketplace/addtocart/175" data-bs-placement="right" title="Buy Now" data-bs-original-title="Buy Now"></a>
                    </div>
                                                        <div class="wishlist-button">
                        <a class="add_to_wishlist button add_to_cart_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                    </div>
                                <div class="compare-button">
                        <a class="compare button add_to_cart_button" data-href="http://localhost/oracle-marketplace/item/compare/add/175" href="javascrit:;" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                    </div>
                    </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title"><a href="#">Physical Product Title Title will Be Here 102</a></h3>
                    <div class="product-price">
                        <div class="price">
                        <ins>115$ </ins>
                        <del>220$</del>
                        </div>
                    </div>
                    <div class="shipping-feed-back">
                        <div class="star-rating">
                        <div class="rating-wrap">
                            <p><i class="fas fa-star"></i><span> 0 (0)</span></p>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="product type-product">
                <div class="product-wrapper">
                <div class="product-image">
                    <a href="#" class="woocommerce-LoopProduct-link">
                     <img class="lazy" alt="Product Image" src="{{asset('assets/images/thumbnails/1648013376Q0pmYfnP.jpg')}}" style="">
                    </a>
                     <div class="on-sale">- 48%</div>
                    
                    <div class="hover-area">
                                            <div class="cart-button">
                        <a href="javascript:;" data-href="http://localhost/oracle-marketplace/addcart/175" class="add-cart button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add To Cart" aria-label="Add To Cart"></a>
                    </div>
                    <div class="cart-button buynow">
                        <a class="button add_to_cart_button add-to-cart-quick" href="javascript:;" data-bs-toggle="tooltip" data-href="http://localhost/oracle-marketplace/addtocart/175" data-bs-placement="right" title="Buy Now" data-bs-original-title="Buy Now"></a>
                    </div>
                                                        <div class="wishlist-button">
                        <a class="add_to_wishlist button add_to_cart_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                    </div>
                                <div class="compare-button">
                        <a class="compare button add_to_cart_button" data-href="http://localhost/oracle-marketplace/item/compare/add/175" href="javascrit:;" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                    </div>
                    </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title"><a href="#">Physical Product Title Title will Be Here 102</a></h3>
                    <div class="product-price">
                        <div class="price">
                        <ins>115$ </ins>
                        <del>220$</del>
                        </div>
                    </div>
                    <div class="shipping-feed-back">
                        <div class="star-rating">
                        <div class="rating-wrap">
                            <p><i class="fas fa-star"></i><span> 0 (0)</span></p>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="product type-product">
                <div class="product-wrapper">
                <div class="product-image">
                    <a href="#" class="woocommerce-LoopProduct-link">
                     <img class="lazy" alt="Product Image" src="{{asset('assets/images/thumbnails/1648013376Q0pmYfnP.jpg')}}" style="">
                    </a>
                     <div class="on-sale">- 48%</div>
                    
                    <div class="hover-area">
                                            <div class="cart-button">
                        <a href="javascript:;" data-href="http://localhost/oracle-marketplace/addcart/175" class="add-cart button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add To Cart" aria-label="Add To Cart"></a>
                    </div>
                    <div class="cart-button buynow">
                        <a class="button add_to_cart_button add-to-cart-quick" href="javascript:;" data-bs-toggle="tooltip" data-href="http://localhost/oracle-marketplace/addtocart/175" data-bs-placement="right" title="Buy Now" data-bs-original-title="Buy Now"></a>
                    </div>
                                                        <div class="wishlist-button">
                        <a class="add_to_wishlist button add_to_cart_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                    </div>
                                <div class="compare-button">
                        <a class="compare button add_to_cart_button" data-href="http://localhost/oracle-marketplace/item/compare/add/175" href="javascrit:;" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                    </div>
                    </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title"><a href="#">Physical Product Title Title will Be Here 102</a></h3>
                    <div class="product-price">
                        <div class="price">
                        <ins>115$ </ins>
                        <del>220$</del>
                        </div>
                    </div>
                    <div class="shipping-feed-back">
                        <div class="star-rating">
                        <div class="rating-wrap">
                            <p><i class="fas fa-star"></i><span> 0 (0)</span></p>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="product type-product">
                <div class="product-wrapper">
                <div class="product-image">
                    <a href="#" class="woocommerce-LoopProduct-link">
                     <img class="lazy" alt="Product Image" src="{{asset('assets/images/thumbnails/1648013376Q0pmYfnP.jpg')}}" style="">
                    </a>
                     <div class="on-sale">- 48%</div>
                    
                    <div class="hover-area">
                                            <div class="cart-button">
                        <a href="javascript:;" data-href="http://localhost/oracle-marketplace/addcart/175" class="add-cart button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add To Cart" aria-label="Add To Cart"></a>
                    </div>
                    <div class="cart-button buynow">
                        <a class="button add_to_cart_button add-to-cart-quick" href="javascript:;" data-bs-toggle="tooltip" data-href="http://localhost/oracle-marketplace/addtocart/175" data-bs-placement="right" title="Buy Now" data-bs-original-title="Buy Now"></a>
                    </div>
                                                        <div class="wishlist-button">
                        <a class="add_to_wishlist button add_to_cart_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                    </div>
                                <div class="compare-button">
                        <a class="compare button add_to_cart_button" data-href="http://localhost/oracle-marketplace/item/compare/add/175" href="javascrit:;" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                    </div>
                    </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title"><a href="#">Physical Product Title Title will Be Here 102</a></h3>
                    <div class="product-price">
                        <div class="price">
                        <ins>115$ </ins>
                        <del>220$</del>
                        </div>
                    </div>
                    <div class="shipping-feed-back">
                        <div class="star-rating">
                        <div class="rating-wrap">
                            <p><i class="fas fa-star"></i><span> 0 (0)</span></p>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="product type-product">
                <div class="product-wrapper">
                <div class="product-image">
                    <a href="#" class="woocommerce-LoopProduct-link">
                     <img class="lazy" alt="Product Image" src="{{asset('assets/images/thumbnails/1648013376Q0pmYfnP.jpg')}}" style="">
                    </a>
                     <div class="on-sale">- 48%</div>
                    
                    <div class="hover-area">
                                            <div class="cart-button">
                        <a href="javascript:;" data-href="http://localhost/oracle-marketplace/addcart/175" class="add-cart button add_to_cart_button" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add To Cart" aria-label="Add To Cart"></a>
                    </div>
                    <div class="cart-button buynow">
                        <a class="button add_to_cart_button add-to-cart-quick" href="javascript:;" data-bs-toggle="tooltip" data-href="http://localhost/oracle-marketplace/addtocart/175" data-bs-placement="right" title="Buy Now" data-bs-original-title="Buy Now"></a>
                    </div>
                                                        <div class="wishlist-button">
                        <a class="add_to_wishlist button add_to_cart_button" href="#" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Add to Wishlist" aria-label="Add to Wishlist">Wishlist</a>
                    </div>
                                <div class="compare-button">
                        <a class="compare button add_to_cart_button" data-href="http://localhost/oracle-marketplace/item/compare/add/175" href="javascrit:;" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-bs-original-title="Compare" aria-label="Compare">Compare</a>
                    </div>
                    </div>
                </div>
                <div class="product-info">
                    <h3 class="product-title"><a href="#">Physical Product Title Title will Be Here 102</a></h3>
                    <div class="product-price">
                        <div class="price">
                        <ins>115$ </ins>
                        <del>220$</del>
                        </div>
                    </div>
                    <div class="shipping-feed-back">
                        <div class="star-rating">
                        <div class="rating-wrap">
                            <p><i class="fas fa-star"></i><span> 0 (0)</span></p>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        

    </div>
   </div>
	</div>
</div>
    <!-- section 4  -->
<section class="trending-new-sec">
   <div class="container">
      <div class="trending-new-inn">
         <div class="row">
            <div class="col-lg-4 sidebar-spacing">
               <div class="section-top">
                  <h2 class="section-title">
                     Featured Brands
                  </h2>
               </div>
               <!-- Sidebar map list tab start here -->
               <div class="side-tabsss">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="map-tab" data-toggle="tab" href="#featured_map" role="tab" aria-controls="map" aria-selected="true">Map</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="list-tab" data-toggle="tab" href="#featured_list" role="tab" aria-controls="featured_list" aria-selected="false">List</a>
                     </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="featured_map" role="tabpanel" aria-labelledby="map-tab">
                        <!-- Map Content-->
                        <div class="map-social">
                           <div class="map-social-inner">
                              <ul>
                                 <li>
                                    <a href="#">
                                       <span>
                                       <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg') }}" alt="">
                                       </span>
                                       <p>Brand Name </p>
                                    </a>
                                 </li>

                                 <li>
                                    <a href="#">
                                       <span>
                                       <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg') }}" alt="">
                                       </span>
                                       <p>Brand Name </p>
                                    </a>
                                 </li>

                                 <li>
                                    <a href="#">
                                       <span>
                                       <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg') }}" alt="">
                                       </span>
                                       <p>Brand Name </p>
                                    </a>
                                 </li>

                                 <li>
                                    <a href="#">
                                       <span>
                                       <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg') }}" alt="">
                                       </span>
                                       <p>Brand Name </p>
                                    </a>
                                 </li>

                                 <li>
                                    <a href="#">
                                       <span>
                                       <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg') }}" alt="">
                                       </span>
                                       <p>Brand Name </p>
                                    </a>
                                 </li>

                                 <li>
                                    <a href="#">
                                       <span>
                                       <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg') }}" alt="">
                                       </span>
                                       <p>Brand Name </p>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#">
                                       <span>
                                       <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg') }}" alt="">
                                       </span>
                                       <p>Brand Name </p>
                                    </a>
                                 </li>

                                 <li>
                                    <a href="#">
                                       <span>
                                       <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg') }}" alt="">
                                       </span>
                                       <p>Brand Name </p>
                                    </a>
                                 </li>

                                 <li>
                                    <a href="#">
                                       <span>
                                       <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg') }}" alt="">
                                       </span>
                                       <p>Brand Name </p>
                                    </a>
                                 </li>

                                 <li>
                                    <a href="#">
                                       <span>
                                       <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg') }}" alt="">
                                       </span>
                                       <p>Brand Name </p>
                                    </a>
                                 </li>

                                 <li>
                                    <a href="#">
                                       <span>
                                       <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg') }}" alt="">
                                       </span>
                                       <p>Brand Name </p>
                                    </a>
                                 </li>

                                 <li>
                                    <a href="#">
                                       <span>
                                       <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg') }}" alt="">
                                       </span>
                                       <p>Brand Name </p>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="featured_list" role="tabpanel" aria-labelledby="list-tab">
                        <!-- List Content-->
                        <div class="cat-sidebar">
                           <div class="cat-sidebar-content">   
                              <div class="cat-sidebar-img">
                                 <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg')}}" alt="">
                              </div>
                              <div class="cat-sidebar-text">
                                 <h4>Brand Name</h4>
                                 <p>94 Products </p>
                              </div>
                              <div class="cat-sidebar-like">
                                 <a href="#">
                                    <!-- <img src="assets/front/images/like-icon.png" alt=""> -->
                                    <i class="fas fa-info-circle"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="cat-sidebar-content">   
                              <div class="cat-sidebar-img">
                                 <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg')}}" alt="">
                              </div>
                              <div class="cat-sidebar-text">
                                 <h4>Brand Name</h4>
                                 <p>94 Products </p>
                              </div>
                              <div class="cat-sidebar-like">
                                 <a href="#">
                                    <!-- <img src="assets/front/images/like-icon.png" alt=""> -->
                                    <i class="fas fa-info-circle"></i>
                                 </a>
                              </div>
                           </div>

                           <div class="cat-sidebar-content">   
                              <div class="cat-sidebar-img">
                                 <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg')}}" alt="">
                              </div>
                              <div class="cat-sidebar-text">
                                 <h4>Brand Name</h4>
                                 <p>94 Products </p>
                              </div>
                              <div class="cat-sidebar-like">
                                 <a href="#">
                                    <!-- <img src="assets/front/images/like-icon.png" alt=""> -->
                                    <i class="fas fa-info-circle"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="cat-sidebar-content">   
                              <div class="cat-sidebar-img">
                                 <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg')}}" alt="">
                              </div>
                              <div class="cat-sidebar-text">
                                 <h4>Brand Name</h4>
                                 <p>94 Products </p>
                              </div>
                              <div class="cat-sidebar-like">
                                 <a href="#">
                                    <!-- <img src="assets/front/images/like-icon.png" alt=""> -->
                                    <i class="fas fa-info-circle"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="cat-sidebar-content">   
                              <div class="cat-sidebar-img">
                                 <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg')}}" alt="">
                              </div>
                              <div class="cat-sidebar-text">
                                 <h4>Brand Name</h4>
                                 <p>94 Products </p>
                              </div>
                              <div class="cat-sidebar-like">
                                 <a href="#">
                                    <!-- <img src="assets/front/images/like-icon.png" alt=""> -->
                                    <i class="fas fa-info-circle"></i>
                                 </a>
                              </div>
                           </div>
                           <div class="cat-sidebar-content">   
                              <div class="cat-sidebar-img">
                                 <img src="{{asset('asset_old/images/brands/164561755612-Most-Famous-Chocolate-Brands-and-Logos.jpg')}}" alt="">
                              </div>
                              <div class="cat-sidebar-text">
                                 <h4>Brand Name</h4>
                                 <p>94 Products </p>
                              </div>
                              <div class="cat-sidebar-like">
                                 <a href="#">
                                    <!-- <img src="assets/front/images/like-icon.png" alt=""> -->
                                    <i class="fas fa-info-circle"></i>
                                 </a>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
                  <div class="sideviewall">
                     <a href="#">View All</a>
                  </div>
               </div>
               <!-- Sidebar map list tab start end -->
            </div>
            <div class="col-lg-8 side-right ">
               <div class="col-lg-12 rem-padding">
                  <div class="section-top">
                     <h2 class="primary-heading primary-heading1 m-1 pt-1">
                     Top 50 Deals</hh2>
                  </div>
               </div>
               <div class="row">
               </div>
               <div class="topfifty-pr-new mt-3">
                 
                  <!-- TOP 50 Today Sectin start-->
                  <div class="topfifty-today">
                     <div class="topfifty-inner">
                        <div class="row">
                           <div class="col-lg-2">
                              <div class="topfifty-left">
                                 <div class="topfifty-left-in">
                                    <span><strong>TOP</strong> 50 FOR TODAY </span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-10">
                              <div class="topfifty-product">
                                 <div class="row">
                                    <div class="col-lg-12 rem-padding">
                                       <div class="trending-item-slider">
                                          <div class="item fifty_hover">
                                             <a href="#">
                                                <div class="cup-img">
                                                   <span>1</span>
                                                   <img src="{{asset('asset_old/front/images/cup.png')}}" alt="">
                                                </div>
                                                <div class="item-img">
                                                   <img class="img-fluid" src="{{ asset('asset_old/images/thumbnails/1631337539qGdIHcAu.jpg')}}" alt="">
                                                </div>
                                                <div class="info">
                                                   <div class="stars">
                                                      <div class="ratings">
                                                         <div class="empty-stars"></div>
                                                         <div class="full-stars" style="width:0%"></div>
                                                      </div>
                                                   </div>
                                                   <h4 class="price">$832.26 <del><small></small></del></h4>
                                                   <h5 class="name">Apple iPhone 12 - 128GB - Black</h5>
                                                   
                                                </div>
                                             </a>

                                             <a href="#">
                                                <div class="cup-img">
                                                   <span>1</span>
                                                   <img src="{{asset('asset_old/front/images/cup.png')}}" alt="">
                                                </div>
                                                <div class="item-img">
                                                   <img class="img-fluid" src="{{ asset('asset_old/images/thumbnails/1631337539qGdIHcAu.jpg')}}" alt="">
                                                </div>

                                                <div class="info">
                                                   <div class="stars">
                                                      <div class="ratings">
                                                         <div class="empty-stars"></div>
                                                         <div class="full-stars" style="width:0%"></div>
                                                      </div>
                                                   </div>
                                                   <h4 class="price">$832.26 <del><small></small></del></h4>
                                                   <h5 class="name">Apple iPhone 12 - 128GB - Black</h5>
                                                   
                                                </div>
                                             </a>
                                          </div>

                                          <div class="item fifty_hover">
                                             <a href="#">
                                                <div class="cup-img">
                                                   <span>1</span>
                                                   <img src="{{asset('asset_old/front/images/cup.png')}}" alt="">
                                                </div>
                                                <div class="item-img">
                                                   <img class="img-fluid" src="{{ asset('asset_old/images/thumbnails/1631337539qGdIHcAu.jpg')}}" alt="">
                                                </div>
                                                <div class="info">
                                                   <div class="stars">
                                                      <div class="ratings">
                                                         <div class="empty-stars"></div>
                                                         <div class="full-stars" style="width:0%"></div>
                                                      </div>
                                                   </div>
                                                   <h4 class="price">$832.26 <del><small></small></del></h4>
                                                   <h5 class="name">Apple iPhone 12 - 128GB - Black</h5>
                                                   
                                                </div>
                                             </a>

                                             <a href="#">
                                                <div class="cup-img">
                                                   <span>1</span>
                                                   <img src="{{asset('asset_old/front/images/cup.png')}}" alt="">
                                                </div>
                                                <div class="item-img">
                                                   <img class="img-fluid" src="{{ asset('asset_old/images/thumbnails/1631337539qGdIHcAu.jpg')}}" alt="">
                                                </div>

                                                <div class="info">
                                                   <div class="stars">
                                                      <div class="ratings">
                                                         <div class="empty-stars"></div>
                                                         <div class="full-stars" style="width:0%"></div>
                                                      </div>
                                                   </div>
                                                   <h4 class="price">$832.26 <del><small></small></del></h4>
                                                   <h5 class="name">Apple iPhone 12 - 128GB - Black</h5>
                                                   
                                                </div>
                                             </a>
                                          </div>

                                          <div class="item fifty_hover">
                                             <a href="#">
                                                <div class="cup-img">
                                                   <span>1</span>
                                                   <img src="{{asset('asset_old/front/images/cup.png')}}" alt="">
                                                </div>
                                                <div class="item-img">
                                                   <img class="img-fluid" src="{{ asset('asset_old/images/thumbnails/1631337539qGdIHcAu.jpg')}}" alt="">
                                                </div>
                                                <div class="info">
                                                   <div class="stars">
                                                      <div class="ratings">
                                                         <div class="empty-stars"></div>
                                                         <div class="full-stars" style="width:0%"></div>
                                                      </div>
                                                   </div>
                                                   <h4 class="price">$832.26 <del><small></small></del></h4>
                                                   <h5 class="name">Apple iPhone 12 - 128GB - Black</h5>
                                                   
                                                </div>
                                             </a>

                                             <a href="#">
                                                <div class="cup-img">
                                                   <span>1</span>
                                                   <img src="{{asset('asset_old/front/images/cup.png')}}" alt="">
                                                </div>
                                                <div class="item-img">
                                                   <img class="img-fluid" src="{{ asset('asset_old/images/thumbnails/1631337539qGdIHcAu.jpg')}}" alt="">
                                                </div>

                                                <div class="info">
                                                   <div class="stars">
                                                      <div class="ratings">
                                                         <div class="empty-stars"></div>
                                                         <div class="full-stars" style="width:0%"></div>
                                                      </div>
                                                   </div>
                                                   <h4 class="price">$832.26 <del><small></small></del></h4>
                                                   <h5 class="name">Apple iPhone 12 - 128GB - Black</h5>
                                                   
                                                </div>
                                             </a>
                                          </div>


                                          <div class="item fifty_hover">
                                             <a href="#">
                                                <div class="cup-img">
                                                   <span>1</span>
                                                   <img src="{{asset('asset_old/front/images/cup.png')}}" alt="">
                                                </div>
                                                <div class="item-img">
                                                   <img class="img-fluid" src="{{ asset('asset_old/images/thumbnails/1631337539qGdIHcAu.jpg')}}" alt="">
                                                </div>
                                                <div class="info">
                                                   <div class="stars">
                                                      <div class="ratings">
                                                         <div class="empty-stars"></div>
                                                         <div class="full-stars" style="width:0%"></div>
                                                      </div>
                                                   </div>
                                                   <h4 class="price">$832.26 <del><small></small></del></h4>
                                                   <h5 class="name">Apple iPhone 12 - 128GB - Black</h5>
                                                   
                                                </div>
                                             </a>

                                             <a href="#">
                                                <div class="cup-img">
                                                   <span>1</span>
                                                   <img src="{{asset('asset_old/front/images/cup.png')}}" alt="">
                                                </div>
                                                <div class="item-img">
                                                   <img class="img-fluid" src="{{ asset('asset_old/images/thumbnails/1631337539qGdIHcAu.jpg')}}" alt="">
                                                </div>

                                                <div class="info">
                                                   <div class="stars">
                                                      <div class="ratings">
                                                         <div class="empty-stars"></div>
                                                         <div class="full-stars" style="width:0%"></div>
                                                      </div>
                                                   </div>
                                                   <h4 class="price">$832.26 <del><small></small></del></h4>
                                                   <h5 class="name">Apple iPhone 12 - 128GB - Black</h5>
                                                   
                                                </div>
                                             </a>
                                          </div>


                                          <div class="item fifty_hover">
                                             <a href="#">
                                                <div class="cup-img">
                                                   <span>1</span>
                                                   <img src="{{asset('asset_old/front/images/cup.png')}}" alt="">
                                                </div>
                                                <div class="item-img">
                                                   <img class="img-fluid" src="{{ asset('asset_old/images/thumbnails/1631337539qGdIHcAu.jpg')}}" alt="">
                                                </div>
                                                <div class="info">
                                                   <div class="stars">
                                                      <div class="ratings">
                                                         <div class="empty-stars"></div>
                                                         <div class="full-stars" style="width:0%"></div>
                                                      </div>
                                                   </div>
                                                   <h4 class="price">$832.26 <del><small></small></del></h4>
                                                   <h5 class="name">Apple iPhone 12 - 128GB - Black</h5>
                                                   
                                                </div>
                                             </a>

                                             <a href="#">
                                                <div class="cup-img">
                                                   <span>1</span>
                                                   <img src="{{asset('asset_old/front/images/cup.png')}}" alt="">
                                                </div>
                                                <div class="item-img">
                                                   <img class="img-fluid" src="{{ asset('asset_old/images/thumbnails/1631337539qGdIHcAu.jpg')}}" alt="">
                                                </div>

                                                <div class="info">
                                                   <div class="stars">
                                                      <div class="ratings">
                                                         <div class="empty-stars"></div>
                                                         <div class="full-stars" style="width:0%"></div>
                                                      </div>
                                                   </div>
                                                   <h4 class="price">$832.26 <del><small></small></del></h4>
                                                   <h5 class="name">Apple iPhone 12 - 128GB - Black</h5>
                                                   
                                                </div>
                                             </a>
                                          </div>

                                          <div class="item fifty_hover">
                                             <a href="#">
                                                <div class="cup-img">
                                                   <span>1</span>
                                                   <img src="{{asset('asset_old/front/images/cup.png')}}" alt="">
                                                </div>
                                                <div class="item-img">
                                                   <img class="img-fluid" src="{{ asset('asset_old/images/thumbnails/1631337539qGdIHcAu.jpg')}}" alt="">
                                                </div>
                                                <div class="info">
                                                   <div class="stars">
                                                      <div class="ratings">
                                                         <div class="empty-stars"></div>
                                                         <div class="full-stars" style="width:0%"></div>
                                                      </div>
                                                   </div>
                                                   <h4 class="price">$832.26 <del><small></small></del></h4>
                                                   <h5 class="name">Apple iPhone 12 - 128GB - Black</h5>
                                                   
                                                </div>
                                             </a>

                                             <a href="#">
                                                <div class="cup-img">
                                                   <span>1</span>
                                                   <img src="{{asset('asset_old/front/images/cup.png')}}" alt="">
                                                </div>
                                                <div class="item-img">
                                                   <img class="img-fluid" src="{{ asset('asset_old/images/thumbnails/1631337539qGdIHcAu.jpg')}}" alt="">
                                                </div>

                                                <div class="info">
                                                   <div class="stars">
                                                      <div class="ratings">
                                                         <div class="empty-stars"></div>
                                                         <div class="full-stars" style="width:0%"></div>
                                                      </div>
                                                   </div>
                                                   <h4 class="price">$832.26 <del><small></small></del></h4>
                                                   <h5 class="name">Apple iPhone 12 - 128GB - Black</h5>
                                                   
                                                </div>
                                             </a>
                                          </div>

                                          <div class="item fifty_hover">
                                             <a href="#">
                                                <div class="cup-img">
                                                   <span>1</span>
                                                   <img src="{{asset('asset_old/front/images/cup.png')}}" alt="">
                                                </div>
                                                <div class="item-img">
                                                   <img class="img-fluid" src="{{ asset('asset_old/images/thumbnails/1631337539qGdIHcAu.jpg')}}" alt="">
                                                </div>
                                                <div class="info">
                                                   <div class="stars">
                                                      <div class="ratings">
                                                         <div class="empty-stars"></div>
                                                         <div class="full-stars" style="width:0%"></div>
                                                      </div>
                                                   </div>
                                                   <h4 class="price">$832.26 <del><small></small></del></h4>
                                                   <h5 class="name">Apple iPhone 12 - 128GB - Black</h5>
                                                   
                                                </div>
                                             </a>

                                             <a href="#">
                                                <div class="cup-img">
                                                   <span>1</span>
                                                   <img src="{{asset('asset_old/front/images/cup.png')}}" alt="">
                                                </div>
                                                <div class="item-img">
                                                   <img class="img-fluid" src="{{ asset('asset_old/images/thumbnails/1631337539qGdIHcAu.jpg')}}" alt="">
                                                </div>

                                                <div class="info">
                                                   <div class="stars">
                                                      <div class="ratings">
                                                         <div class="empty-stars"></div>
                                                         <div class="full-stars" style="width:0%"></div>
                                                      </div>
                                                   </div>
                                                   <h4 class="price">$832.26 <del><small></small></del></h4>
                                                   <h5 class="name">Apple iPhone 12 - 128GB - Black</h5>
                                                   
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- TOP 50 Today Section End-->
   
               </div>
            </div>
         </div>
      </div>
   </div>
</section>



	<!-- section 5 -->
   <!--  <div class="mb-2 mt-4 pt-1">
	   <div class="container">
	      <div class="homefurnishig homefurnishig1">
	         
	         <a href="">
	            <img src="//localhost/oracle_old/assets/images/banners/1645877106cosmetic weekend sale.jpg" alt="" class="desktop-banner">
	            <img src="//localhost/oracle_old/assets/images/banners/1655373050352x144cosmeticbanner.jpg" alt="" class="mobile-banner"> 
	         </a>
	         <a href="" class="btn shop-now">SHOP NOW</a>
	        
	      </div>
	   </div>
	</div> -->

<section class="topstories-new-sec mt-4 pt-2">
   <div class="container">
      <div class="topstories-new-inn">
         <div class="row">
            <div class="col-lg-12">
               <div class="most-view-prtabs">
                  <!-- Most Viewed Start-->
                 <!-- <div class="mostview">
                     <h2 class="most-view-prtabs-text">MOST VIEWED & TOP RATED, PREMIUM PRODUCTS</h2>
                  </div> -->
                  <div class="most-view-banner v-align-flex">
                     <div class="w-50">
                        <div class="viewd-slider">
                           <div class="slider-img">
                              <div class="owl-item">
                                 <a href="javascript:void(0)">
                                    <img src="{{asset('asset_old/images/banners/Fashion.jpg')}}"/>
                                 </a>
                              </div>
                              <div class="owl-item">
                                 <a href="javascript:void(0)">
                                    <img src="{{asset('asset_old/images/banners/Health-and-Beauty.jpg')}}"/>
                                 </a>
                              </div>
                              <div class="owl-item">
                                 <a href="javascript:void(0)">
                                    <img src="{{asset('asset_old/images/banners/Toys-and-Games.jpg')}}"/>
                                 </a>
                              </div>
                              <div class="owl-item">
                                 <a href="javascript:void(0)">
                                    <img src="{{asset('asset_old/images/banners/Home-and-Kitchen.jpg')}}"/>
                                 </a>
                              </div>
                           </div>
                        </div>   
                     </div>
                     <div class="w-50">
                        <div class="col-50 m-col-100 pad-tb-30 pad-lr-6p m-pad-lr-20 t-align-l m-t-align-c">
                           <div class="freight fs-45x book lh-1em mrgn-b-20">
                              <h2 class="most-view-prtabs-text">MOST VIEWED & TOP RATED, PREMIUM PRODUCTS </h2>
                              <div class="short-des"><p>Oracle marketplace will take your online shopping to the next level. </p></div>
                              <div class="view-title">
                                 <h4>SHOP NEW IN</h4>
                                 <ul>
                                    <li><a href="javascript:void(0)">Fashion</a></li>
                                    <li><a href="javascript:void(0)">Health & Beauty</a></li>
                                    <li><a href="javascript:void(0)">Toys & Games</a></li>
                                    <li><a href="javascript:void(0)">Home & Kitchen Products</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</section>

<!-- section 6 Popular Gifts -->
<section id="tw-column-add">
   <div class="container">
      <div class="two-column-inner">
         <div class="row">
            <div class="col-md-7">
               <div class="inner-section">
                  <div class="column-title"><a href="#"><h2 class="section-title">Popular Gift Ideas</h2></a></div>
                  <a href="#"><img src="{{asset('asset_old/images/banners/gift.jpg')}}"></a>
                  <div class="column-des">
                     <h3 class="add-sub-title">Attention Gift Ideas</h3>
                     <p>We’ve got the glow-down on the best of the best skincare including Crème De La Mer, Sisley Black Rose Mask, Guerlain Abeille Royale Serum and more, these are the skin saviours you need to find your glow this Winter.</p>
                     <div class="view-title">
                        <ul>
                           <li>
                              <a href="javascript:void(0)">Anniversary</a>
                           </li>
                           <li>
                              <a href="javascript:void(0)">Birthday</a>
                           </li>
                           <li>
                              <a href="javascript:void(0)">Wedding</a>
                           </li>
                           <li>
                              <a href="javascript:void(0)">Father’s Day</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-5">
               <div class="inner-section">
                  <div class="column-title"><a href="#"><h2 class="section-title">A SPECIAL GIFT</h2></a></div>
                  <a href="#"><img src="{{asset('asset_old/images/subcategories/5361c069-1502-4586-9c62-39b91753c8a3.jpeg')}}"></a>
                  <div class="column-des">
                     <h3 class="add-sub-title">Attention Glow Getters</h3>
                     <p>We’ve got the glow-down on the best of the best skincare including Crème De La Mer, Sisley Black Rose Mask, Guerlain Abeille Royale Serum and more, these are the skin saviours you need to find your glow this Winter.</p>
                     <div class="view-title">
                        <ul>
                           <li>
                              <a href="javascript:void(0)">Shop Now</a>
                           </li>
                           <li>
                              <a href="javascript:void(0)">Shop Toys &amp; Games</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>   
      </div>
   </div>
</section>


<!-- section 7  used product slider -->
<section  class="trending pt-4 mb-3">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 rem-padding">
            <div class="section-top">
               <h2 class="section-title">
               Used Products
               </h2>
               <a href="#" class="link">View All</a>
            </div>
         </div>
      </div>
   </div>
      <div class="row mt-3" >
         <div class="col-lg-12 rem-padding">
            <div class="container">
               <div class="trending-item-slider">
               
                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1570876503XgLFnuQi.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>

                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1570876503XgLFnuQi.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>


                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1570876503XgLFnuQi.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>

                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1570876503XgLFnuQi.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>

                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1570876503XgLFnuQi.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>
                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1570876503XgLFnuQi.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>
                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1570876503XgLFnuQi.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>

               </div>
            </div>
         </div>
      </div>
</section>
<!-- section 8  Smart watch banner -->
<div class="best-seller-after-banner">
   <div class="container">
      <div class="homefurnishig pt-1">
         <a href="#">
            <img src="{{asset('asset_old/images/banners/1655109065Smart-Watch.jpg')}}" alt="" class="desktop-banner">
            <img src="{{asset('asset_old/images/banners/1655372994352x144smartwatch.jpg')}}" alt="" class="mobile-banner"> 
         </a>
      </div>
   </div>
</div>

<!-- section 9  Deal of the day -->

<div class="full-row bg-light" style="margin: 50px 0px;">
    <div class="container">
        <div class="row offer-product align-items-center">
            <div class="col-xl-5 col-lg-7">
                <h1 class="down-line-secondary text-dark text-uppercase mb-30">Deal <br> of the Day</h1>
                <div class="product type-product">
                    <div class="product-wrapper">
                        <div class="product-info">

                            <h3 class="product-title">CLICK SHOP NOW FOR ALL DEAL OF THE PRODUCT</h3>
                            <div class="product-price">

                                <div class="on-sale" style="background-color: #424a4d !important" ><span>50</span><span>% off</span></div>
                            </div>
                            <div class="font-fifteen">
                                <p>Donec condimentum Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras cursus pretium sapien, in pulvinar ipsum molestie id. Aliquam erat volutpat. Duis quam tellus, ullamcorper.....</p>
                            </div>
                            <div class="time-count time-box text-center my-30 flex-between w-75"><ul><li><span>00</span><span>Day</span></li> <li><span>00</span><span>Hour</span></li> <li><span>00</span><span>Min</span></li> <li><span>00</span><span>Sec</span></li></ul></div>
                            <a href="#" class="btn btn-dark text-uppercase rounded-0">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 offset-xl-1">
               
                <div class="xs-mt-30"><img src="{{asset('assets/images/164743040383png.png')}}" alt=""></div>

            </div>
        </div>
    </div>
</div>
<!-- section 10  Two banners section -->

<section class="banner-section">
   <div class="container">
            <div class="row">
                  <div class="col-lg-6 remove-padding">
            <div class="left m-1">
               <a class="banner-effect1" href="//devfo.pauldaughters.com/products/filter/sale" target="_blank">
                  <img src="{{asset('asset_old/images/banners/1644648708kitchen-utensils 2.jpg')}}" alt="" class="desktop-banner">
                  <img src="{{asset('asset_old/images/banners/1644648708kitchen-utensils 2.jpg')}}" alt="" class="mobile-banner"> 
               </a>
               <a href="#" target="_blank" class="btn shop-now1 ">SHOP NOW</a>
            </div>
         </div>
                  <div class="col-lg-6 remove-padding">
            <div class="left m-1">
               <a class="banner-effect1" href="" target="_blank">
                  <img src="{{asset('asset_old/images/banners/1644648847shoes banner.jpg')}}" alt="" class="desktop-banner">
                  <img src="{{asset('asset_old/images/banners/1644648847shoes banner.jpg')}}" alt="" class="mobile-banner"> 
               </a>
               <a href="#" target="_blank" class="btn shop-now1 ">SHOP NOW</a>
            </div>
         </div>
               </div>
         </div>
</section>


<!-- section 11   Flash Deal of the day -->

<section class="categori-item electronics-section mt-4 trending">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 rem-padding">
            <div class="section-top">
               <h2 class="section-title">
                  Flash Deal
               </h2>
               <a href="#" class="link">View All</a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="flash-deals">
               <div class="flas-extra-deal-slider owl-carousel owl-theme owl-loaded">
                                    





				


												



                                                                        





				


												



                                                                                                                                                                                                                     <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 532px;"><div class="owl-item active" style="width: 256px; margin-right: 10px;"><a href="//localhost/oracle_old/item/thinkpad-x380-yoga-hidden-product-attributes-hiddenattr01" class="item">
								
				
					<div class="item-img">

						
							

						<img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1632584534g1tc2bS5.jpg')}}" alt="">

					</div>

					<div class="info">

						<div class="stars">

							<div class="ratings">

									<div class="empty-stars"></div>

									<div class="full-stars" style="width:0%"></div>

							</div>

						</div>

						<h4 class="price">$2393.97 <del><small>$2393.97</small></del></h4>

								<h5 class="name">ThinkPad X380 Yoga [hidden product attributes]</h5>

								

					</div>

					

		<div class="deal-counter">

		<div data-countdown="07/27/2022"><span>13 : <small>Days</small></span> <span>06 : <small>Hrs</small></span>  <span>41 : <small>Min</small></span> <span>12 <small>Sec</small></span></div>

		</div>

				</a></div><div class="owl-item active" style="width: 256px; margin-right: 10px;"><a href="#" class="item">
								
				
					<div class="item-img">

						
							

						<img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1631337539qGdIHcAu.jpg')}}" alt="">

					</div>

					<div class="info">

						<div class="stars">

							<div class="ratings">

									<div class="empty-stars"></div>

									<div class="full-stars" style="width:0%"></div>

							</div>

						</div>

						<h4 class="price">$702.7 <del><small>$702.7</small></del></h4>

								<h5 class="name">Belle of the Ball - Glamour Makeup Mirror</h5>

								

					</div>

					

		<div class="deal-counter">

		<div data-countdown="09/22/2022"><span>70 : <small>Days</small></span> <span>06 : <small>Hrs</small></span>  <span>41 : <small>Min</small></span> <span>12 <small>Sec</small></span></div>

		</div>

				</a></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style=""><i class="fas fa-angle-left"></i></div><div class="owl-next" style=""><i class="fas fa-angle-right"></i></div></div><div class="owl-dots" style="display: none;"></div></div></div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- 12 section  4 sections banners -->

<div class="container">
   <section class="banner-section mt-2">
            <div class="row">
                  <div class="col-lg-3 rem-padding col-md-6 mb-4">
            <div class="left">
               
               <a class="banner-effect" href="#" target="_blank">
                  <img src="{{asset('asset_old/images/banners/1644648314Desktop_7769_1643308071079.jpg')}}" alt="" class="desktop-banner w-100">
                  <img src="{{asset('asset_old/images/banners/1644648314Desktop_7769_1643308071079.jpg')}}" alt="" class="mobile-banner w-100"> 
               </a>
            </div>
            <div class="trending-item-slider-text"><a href="#">SHOP NOW</a></div>
         </div>
                  <div class="col-lg-3 rem-padding col-md-6 mb-4">
            <div class="left">
               
               <a class="banner-effect" href="#" target="_blank">
                  <img src="{{asset('asset_old/images/banners/1644648285Desktop_7760_1643308578255.jpg')}}" alt="" class="desktop-banner w-100">
                  <img src="{{asset('asset_old/images/banners/1644648285Desktop_7760_1643308578255.jpg')}}" alt="" class="mobile-banner w-100"> 
               </a>
            </div>
            <div class="trending-item-slider-text"><a href="#">SHOP NOW</a></div>
         </div>
                  <div class="col-lg-3 rem-padding col-md-6 mb-4">
            <div class="left">
               
               <a class="banner-effect" href="#" target="_blank">
                  <img src="{{asset('asset_old/images/banners/1644648266Desktop_7767_1643307943518.jpg')}}" alt="" class="desktop-banner w-100">
                  <img src="{{asset('asset_old/images/banners/1644648266Desktop_7767_1643307943518.jpg')}}" alt="" class="mobile-banner w-100"> 
               </a>
            </div>
            <div class="trending-item-slider-text"><a href="#">SHOP NOW</a></div>
         </div>
                  <div class="col-lg-3 rem-padding col-md-6 mb-4">
            <div class="left">
               
               <a class="banner-effect" href="#" target="_blank">
                  <img src="{{asset('asset_old/images/banners/1644648244Desktop_7761_1643307357980.jpg')}}" alt="" class="desktop-banner w-100">
                  <img src="{{asset('asset_old/images/banners/1644648244Desktop_7761_1643307357980.jpg')}}" alt="" class="mobile-banner w-100"> 
               </a>
            </div>
            <div class="trending-item-slider-text"><a href="#">SHOP NOW</a></div>
         </div>
               </div>
         </section>
</div>

<!-- 13 section  Best Sellers Slider  -->


<section class="trending pt-2 mb-4">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 rem-padding">
            <div class="section-top">
               <h2 class="section-title">
                   Best Seller
               </h2>
               <a href="#" class="link">View All</a>
            </div>
         </div>
      </div>
   </div>
      <div class="row">
         <div class="col-lg-12 rem-padding">
            <div class="container">
               <div class="item-slider-childcategories">
                  <a href="#" class="single-category item">
                      <div class="item-img">
                          <img class="img-fluid" src="{{asset('asset_old/images/childcategories/1654440904Shampoo&Conditioner.jpg')}}" alt="">
                      </div>
                  </a>

                  <a href="#" class="single-category item">
                      <div class="item-img">
                          <img class="img-fluid" src="{{asset('asset_old/images/childcategories/1654440904Shampoo&Conditioner.jpg')}}" alt="">
                      </div>
                  </a>

                  <a href="#" class="single-category item">
                      <div class="item-img">
                          <img class="img-fluid" src="{{asset('asset_old/images/childcategories/1654440904Shampoo&Conditioner.jpg')}}" alt="">
                      </div>
                  </a>

                  <a href="#" class="single-category item">
                      <div class="item-img">
                          <img class="img-fluid" src="{{asset('asset_old/images/childcategories/1654440904Shampoo&Conditioner.jpg')}}" alt="">
                      </div>
                  </a>

                  <a href="#" class="single-category item">
                      <div class="item-img">
                          <img class="img-fluid" src="{{asset('asset_old/images/childcategories/1654440904Shampoo&Conditioner.jpg')}}" alt="">
                      </div>
                  </a>

                  <a href="#" class="single-category item">
                      <div class="item-img">
                          <img class="img-fluid" src="{{asset('asset_old/images/childcategories/1654440904Shampoo&Conditioner.jpg')}}" alt="">
                      </div>
                  </a>
                  <a href="#" class="single-category item">
                      <div class="item-img">
                          <img class="img-fluid" src="{{asset('asset_old/images/childcategories/1654440904Shampoo&Conditioner.jpg')}}" alt="">
                      </div>
                  </a>

               </div>
            </div>
         </div>
      </div>
   
</section>


<!-- 14 section  New Arrivals -->

<section class="newproduct-new mt-4">
   <div class="container">
      <div class="section-top">
         <h2 class="section-title">New Arrival</h2>
         <a href="#" class="link">View All</a>
      </div>
   </div>
   <div class="container">
      <div class="newproduct-sec">
         <div class="row">
            <div class="col-lg-4">
               <div class="newproduct-sec-head">
                  <h2>NEW<br>
                     COLLECTION<br>
                     ADDED<br>
                     FOR YOU
                  </h2>
               </div>
            </div>
            <div class="col-lg-8">
               <div class="newproduct-sec-prd hot-and-new-item">
                  <div id="new-item-slider" class=" new-item-slider">
                        
                    <a href="#" class="item">
                     <div class="item-img">

                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1632584534g1tc2bS5.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>

                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1632584534g1tc2bS5.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>


                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1632584534g1tc2bS5.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>

                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1632584534g1tc2bS5.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>

                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1570876503XgLFnuQi.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>


                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1570876503XgLFnuQi.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>

                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1570876503XgLFnuQi.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>

                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1570876503XgLFnuQi.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>


                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1570876503XgLFnuQi.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>
                    
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- 15 section  Top Products -->



<!-- 16 section  Kitchen Banner  -->
<div class="mt-3">
   <div class="container">
      <div class="homefurnishig">
        
         <a class="banner-effect" href="//devfo.pauldaughters.com/products/filter/sale" target="_blank">
            <img src="{{asset('asset_old/images/banners/1632662607kitchen-banner.png')}}" alt="" class="desktop-banner">
            <img src="{{asset('asset_old/images/banners/1632662607kitchen-banner.png')}}" alt="" class="mobile-banner "> 
         </a>
      </div>
   </div>
</div>

<!-- 17 section Trending Collection Slider  -->
<section class="hottrend-new-sec mt-2">
   <div class="container">
      <div class="hottrend-new-inn">
         <div class="row">
            <div class="col-lg-12">
               <div class="hot-and-new-item trendingnew">
                  
                  <div class="row">
                     <div class="col-lg-12 rem-padding">
                        <div class="section-top">
                           <h2 class="section-title">
                              TRENDING COLLECTION
                           </h2>
                           <a href="#" class="link">View All</a>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 rem-padding">
                        <div class="item-slider-childcategories">
                           <a href="#" class="single-category item">
                               <div class="item-img">
                                   <img class="img-fluid" src="{{asset('asset_old/images/childcategories/1654440816Makeupbags.jpg')}}" alt="">
                               </div>
                           </a>

                           <a href="#" class="single-category item">
                               <div class="item-img">
                                   <img class="img-fluid" src="{{asset('asset_old/images/childcategories/1654440816Makeupbags.jpg')}}" alt="">
                               </div>
                           </a>

                           <a href="#" class="single-category item">
                               <div class="item-img">
                                   <img class="img-fluid" src="{{asset('asset_old/images/childcategories/1654440816Makeupbags.jpg')}}" alt="">
                               </div>
                           </a>

                           <a href="#" class="single-category item">
                               <div class="item-img">
                                   <img class="img-fluid" src="{{asset('asset_old/images/childcategories/1654440816Makeupbags.jpg')}}" alt="">
                               </div>
                           </a>

                           <a href="#" class="single-category item">
                               <div class="item-img">
                                   <img class="img-fluid" src="{{asset('asset_old/images/childcategories/1654440816Makeupbags.jpg')}}" alt="">
                               </div>
                           </a>

                           <a href="#" class="single-category item">
                               <div class="item-img">
                                   <img class="img-fluid" src="{{asset('asset_old/images/childcategories/1654440816Makeupbags.jpg')}}" alt="">
                               </div>
                           </a>
                           <a href="#" class="single-category item">
                               <div class="item-img">
                                   <img class="img-fluid" src="{{asset('asset_old/images/childcategories/1654440816Makeupbags.jpg')}}" alt="">
                               </div>
                           </a>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- 20 section  Auction Products Slider -->

<section class="trending pt-4 mb-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 rem-padding">
				<div class="section-top">
					<h2 class="section-title">
					AUCTION PRODUCTS
					</h2>
					<a href="#" class="link">View All</a>
				</div>
			</div>
		</div>
	</div>
		<div class="row mt-3">
			<div class="col-lg-12 rem-padding">
				<div class="container">
					<div class="trending-item-slider">
               
                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1654450972mJk4Vbhr.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>

                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1654450972mJk4Vbhr.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>


                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1654450972mJk4Vbhr.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>

                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1654450972mJk4Vbhr.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>

                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1654450972mJk4Vbhr.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>
                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1654450972mJk4Vbhr.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>
                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1654450972mJk4Vbhr.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>

               </div>
				</div>
			</div>
		</div>
</section>


<!-- 21 section -->

<section class="hot-and-new-item mt-4">
   <!-- sale products -->
      <div class="container">
         <div class="row">
            <div class="col-lg-12 rem-padding">

               <div class="section-top">

                  <h2 class="section-title">
                     Premium Product

                  </h2>

                  <a href="#" class="link">View All</a>

               </div>

            </div>
         </div>
         <div class="row"> 
            
            <div class="col-lg-12">
               <div class="row"> 
                  <div class="col-lg-3 col-md-3 col-6 five-colm ">
                     <a class="item" href="#">
                        <div class="item-img">
                           <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1632576897BjVaOf0E.jpg')}}" alt="">
                        </div>

                        <div class="info">
                           <div class="stars">
                              <div class="ratings">
                                 <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:0%"></div>
                                 </div>
                           </div>
                           <h4 class="price">$19.72 <del><small>$19.72</small></del></h4>
                           <h5 class="name">Simple Product Example</h5>
                        </div>
                     </a>
                  </div>

                  <div class="col-lg-3 col-md-3 col-6 five-colm ">
                     <a class="item" href="#">
                        <div class="item-img">
                           <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1632576897BjVaOf0E.jpg')}}" alt="">
                        </div>

                        <div class="info">
                           <div class="stars">
                              <div class="ratings">
                                 <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:0%"></div>
                                 </div>
                           </div>
                           <h4 class="price">$19.72 <del><small>$19.72</small></del></h4>
                           <h5 class="name">Simple Product Example</h5>
                        </div>
                     </a>
                  </div>

                  <div class="col-lg-3 col-md-3 col-6 five-colm ">
                     <a class="item" href="#">
                        <div class="item-img">
                           <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1632576897BjVaOf0E.jpg')}}" alt="">
                        </div>

                        <div class="info">
                           <div class="stars">
                              <div class="ratings">
                                 <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:0%"></div>
                                 </div>
                           </div>
                           <h4 class="price">$19.72 <del><small>$19.72</small></del></h4>
                           <h5 class="name">Simple Product Example</h5>
                        </div>
                     </a>
                  </div>

                  <div class="col-lg-3 col-md-3 col-6 five-colm ">
                     <a class="item" href="#">
                        <div class="item-img">
                           <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1632576897BjVaOf0E.jpg')}}" alt="">
                        </div>

                        <div class="info">
                           <div class="stars">
                              <div class="ratings">
                                 <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:0%"></div>
                                 </div>
                           </div>
                           <h4 class="price">$19.72 <del><small>$19.72</small></del></h4>
                           <h5 class="name">Simple Product Example</h5>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-3 col-6 five-colm ">
                     <a class="item" href="#">
                        <div class="item-img">
                           <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1632576897BjVaOf0E.jpg')}}" alt="">
                        </div>

                        <div class="info">
                           <div class="stars">
                              <div class="ratings">
                                 <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:0%"></div>
                                 </div>
                           </div>
                           <h4 class="price">$19.72 <del><small>$19.72</small></del></h4>
                           <h5 class="name">Simple Product Example</h5>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-3 col-6 five-colm ">
                     <a class="item" href="#">
                        <div class="item-img">
                           <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1632576897BjVaOf0E.jpg')}}" alt="">
                        </div>

                        <div class="info">
                           <div class="stars">
                              <div class="ratings">
                                 <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:0%"></div>
                                 </div>
                           </div>
                           <h4 class="price">$19.72 <del><small>$19.72</small></del></h4>
                           <h5 class="name">Simple Product Example</h5>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-3 col-6 five-colm ">
                     <a class="item" href="#">
                        <div class="item-img">
                           <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1632576897BjVaOf0E.jpg')}}" alt="">
                        </div>

                        <div class="info">
                           <div class="stars">
                              <div class="ratings">
                                 <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:0%"></div>
                                 </div>
                           </div>
                           <h4 class="price">$19.72 <del><small>$19.72</small></del></h4>
                           <h5 class="name">Simple Product Example</h5>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-3 col-6 five-colm ">
                     <a class="item" href="#">
                        <div class="item-img">
                           <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1632576897BjVaOf0E.jpg')}}" alt="">
                        </div>

                        <div class="info">
                           <div class="stars">
                              <div class="ratings">
                                 <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:0%"></div>
                                 </div>
                           </div>
                           <h4 class="price">$19.72 <del><small>$19.72</small></del></h4>
                           <h5 class="name">Simple Product Example</h5>
                        </div>
                     </a>
                  </div>
                  <div class="col-lg-3 col-md-3 col-6 five-colm ">
                     <a class="item" href="#">
                        <div class="item-img">
                           <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1632576897BjVaOf0E.jpg')}}" alt="">
                        </div>

                        <div class="info">
                           <div class="stars">
                              <div class="ratings">
                                 <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:0%"></div>
                                 </div>
                           </div>
                           <h4 class="price">$19.72 <del><small>$19.72</small></del></h4>
                           <h5 class="name">Simple Product Example</h5>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </section>




   <!-- section 22 Popular Category Slider  -->

<section class="hot-and-new-item pt-2">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 rem-padding">
            <div class="section-top">
               <h2 class="section-title">
                  Popular categories
               </h2>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12 rem-padding">
            <div class="trending-item-slider">
               <a href="#" class="single-category">
                  <div class="item-img p-1">
                     <img class="img-fluid" src="{{ asset('asset_old/images/subcategories/1636049687Nursery Furniture.jpg') }}" alt="">
                  </div>
                  <div class="bottomright d-flex flex-column align-items-center justify-content-center text-center">
                     <h4 class="blog_title">Nursery Furniture</h4>
                  </div>
               </a>

               <a href="#" class="single-category">
                  <div class="item-img p-1">
                     <img class="img-fluid" src="{{ asset('asset_old/images/subcategories/1636049687Nursery Furniture.jpg') }}" alt="">
                  </div>
                  <div class="bottomright d-flex flex-column align-items-center justify-content-center text-center">
                     <h4 class="blog_title">Nursery Furniture</h4>
                  </div>
               </a>

               <a href="#" class="single-category">
                  <div class="item-img p-1">
                     <img class="img-fluid" src="{{ asset('asset_old/images/subcategories/1636049687Nursery Furniture.jpg') }}" alt="">
                  </div>
                  <div class="bottomright d-flex flex-column align-items-center justify-content-center text-center">
                     <h4 class="blog_title">Nursery Furniture</h4>
                  </div>
               </a>

               <a href="#" class="single-category">
                  <div class="item-img p-1">
                     <img class="img-fluid" src="{{ asset('asset_old/images/subcategories/1636049687Nursery Furniture.jpg') }}" alt="">
                  </div>
                  <div class="bottomright d-flex flex-column align-items-center justify-content-center text-center">
                     <h4 class="blog_title">Nursery Furniture</h4>
                  </div>
               </a>

               <a href="#" class="single-category">
                  <div class="item-img p-1">
                     <img class="img-fluid" src="{{ asset('asset_old/images/subcategories/1636049687Nursery Furniture.jpg') }}" alt="">
                  </div>
                  <div class="bottomright d-flex flex-column align-items-center justify-content-center text-center">
                     <h4 class="blog_title">Nursery Furniture</h4>
                  </div>
               </a>

               <a href="#" class="single-category">
                  <div class="item-img p-1">
                     <img class="img-fluid" src="{{ asset('asset_old/images/subcategories/1636049687Nursery Furniture.jpg') }}" alt="">
                  </div>
                  <div class="bottomright d-flex flex-column align-items-center justify-content-center text-center">
                     <h4 class="blog_title">Nursery Furniture</h4>
                  </div>
               </a>
               <a href="#" class="single-category">
                  <div class="item-img p-1">
                     <img class="img-fluid" src="{{ asset('asset_old/images/subcategories/1636049687Nursery Furniture.jpg') }}" alt="">
                  </div>
                  <div class="bottomright d-flex flex-column align-items-center justify-content-center text-center">
                     <h4 class="blog_title">Nursery Furniture</h4>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- section 23. Our partners - new ( old brands)  -->


<div class="full-row bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">

                <h2 class="main-title mb-4 text-center text-secondary">Our Partners</h2>
                <span class="mb-30 sub-title text-general font-medium ordenery-font font-400 text-center" style="text-align: center !important;display: block;">Cillum eu id enim aliquip aute ullamco anim. Culpa deserunt nostrud excepteur voluptate velit ipsum esse enim.</span>
            </div>
        </div>
        <div class="row g-3">
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="simple-service">
                    <img class="lazy" alt="" src="{{asset('assets/images/partner/1571289583p1.jpg')}}" style="">

                </div>
            </div>
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="simple-service">
                    <img class="lazy" alt="" src="{{asset('assets/images/partner/1571289601p2.jpg')}}" style="">

                </div>
            </div>
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="simple-service">
                    <img class="lazy" alt="" src="{{asset('assets/images/partner/1571289608p3.jpg')}}" style="">

                </div>
            </div>
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="simple-service">
                    <img class="lazy" alt="" src="{{asset('assets/images/partner/1571289614p4.jpg')}}" style="">

                </div>
            </div>
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="simple-service">
                    <img class="lazy" alt="" src="{{asset('assets/images/partner/1571289621p5.jpg')}}" style="">

                </div>
            </div>
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="simple-service">
                    <img class="lazy" alt="" src="{{asset('assets/images/partner/1571289627p6.jpg')}}" style="">

                </div>
            </div>
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="simple-service">
                    <img class="lazy" alt="" src="{{asset('assets/images/partner/1571289634p7.jpg')}}" style="">

                </div>
            </div>
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="simple-service">
                    <img class="lazy" alt="" src="{{asset('assets/images/partner/1571289642p8.jpg')}}" style="">

                </div>
            </div>
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="simple-service">
                    <img class="lazy" alt="" src="{{asset('assets/images/partner/1571289650p9.jpg')}}" style="">

                </div>
            </div>
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="simple-service">
                    <img class="lazy" alt="" src="{{asset('assets/images/partner/1571289657p10.jpg')}}" style="">

                </div>
            </div>
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="simple-service">
                    <img class="lazy" alt="" src="{{asset('assets/images/partner/1571289669p12.jpg')}}" style="">

                </div>
            </div>
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                <div class="simple-service">
                    <img class="lazy" alt="" src="{{asset('assets/images/partner/1571289675p13.jpg')}}" style="">

                </div>
            </div>
                    </div>
    </div>
</div>
<!-- section 24  Recently viewed Slider  -->

<section class="trending"> 
   <div class="trending">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 rem-padding">
               <div class="section-top">
                  <h2 class="section-title">
                     Recently Viewed
                  </h2>
                  <a href="//devfo.pauldaughters.com/products/filter/recently" class="link">View All</a>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-12 rem-padding">
               <div class="trending-item-slider">
                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1654450972mJk4Vbhr.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>
                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1654450972mJk4Vbhr.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>
                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1654450972mJk4Vbhr.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>
                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1654450972mJk4Vbhr.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>
                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1654450972mJk4Vbhr.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>
                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1654450972mJk4Vbhr.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>
                  <a href="#" class="item">
                     <div class="item-img">
                        <img class="img-fluid" src="{{asset('asset_old/images/thumbnails/1654450972mJk4Vbhr.jpg') }}" alt="">
                     </div>

                     <div class="info">
                        <div class="stars">
                          <div class="ratings">
                              <div class="empty-stars"></div>
                              <div class="full-stars" style="width:0%"></div>
                          </div>

                        </div>
                        <h4 class="price">$176.03 <del><small>$323.89</small></del></h4>
                        <h5 class="name">Physical Product Title Title will Be Here 102</h5>  
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<!-- section 25 Newsletter   -->


@endsection