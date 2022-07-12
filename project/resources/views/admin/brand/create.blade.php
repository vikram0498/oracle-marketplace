@extends('layouts.load')



@section('content')



            <div class="content-area">



              <div class="add-product-content1">

                <div class="row">

                  <div class="col-lg-12">

                    <div class="product-description">

                      <div class="body-area">

                        @include('includes.admin.form-error')  

                      <form id="geniusformdata" action="{{route('admin-brand-create')}}" method="POST" enctype="multipart/form-data">

                        {{csrf_field()}}



                        <div class="row">

                          <div class="col-lg-4">

                            <div class="left-area">

                                <h4 class="heading">{{ __('Name') }} *</h4>

                                <p class="sub-heading">{{ __('(In Any Language)') }}</p>

                            </div>

                          </div>

                          <div class="col-lg-7">

                            <input type="text" class="input-field" name="name" placeholder="{{ __('Enter Name') }}" required="" value="">

                          </div>

                        </div>



                        <div class="row">

                          <div class="col-lg-4">

                            <div class="left-area">

                                <h4 class="heading">{{ __('Slug') }} *</h4>

                                <p class="sub-heading">{{ __('In English') }}</p>

                            </div>

                          </div>

                          <div class="col-lg-7">

                            <input type="text" class="input-field" name="slug" placeholder="{{ __('Enter Slug') }}" required="" value="">

                          </div>

                        </div>



                        <div class="row">

                          <div class="col-lg-4">

                            <div class="left-area">

                                <h4 class="heading">{{ __('Set Icon') }} *</h4>

                            </div>

                          </div>

                          <div class="col-lg-7">

                            <div class="img-upload">

                                <div id="image-preview" class="img-preview" style="background: url({{ asset('assets/admin/images/upload.png') }});">

                                    <label for="image-upload" class="img-label" id="image-label"><i class="icofont-upload-alt"></i>{{ __('Upload Icon') }}</label>

                                    <input type="file" name="photo" class="img-upload" id="image-upload" required="true">

                                  </div>

                            </div>



                          </div>

                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Featured') }} *</h4>
                                <p class="sub-heading">{{ __('Show In Home Page') }}</p>
                            </div>
                          </div>

                          <div class="col-lg-7">
                            <select name="featured">
                              <option value="0">No</option>
                              <option value="1">Yes</option>
                            </select>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Trending') }} *</h4>
                                <p class="sub-heading">{{ __('Show In Home Page') }}</p>
                            </div>
                          </div>

                          <div class="col-lg-7">
                            <select name="trending">
                              <option value="0">No</option>
                              <option value="1">Yes</option>
                            </select>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Hot') }} *</h4>
                                <p class="sub-heading">{{ __('Show In Home Page') }}</p>
                            </div>
                          </div>

                          <div class="col-lg-7">
                            <select name="hot">
                              <option value="0">No</option>
                              <option value="1">Yes</option>
                            </select>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Top') }} *</h4>
                                <p class="sub-heading">{{ __('Show In Home Page') }}</p>
                            </div>
                          </div>

                          <div class="col-lg-7">
                            <select name="top">
                              <option value="0">No</option>
                              <option value="1">Yes</option>
                            </select>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Latest') }} *</h4>
                                <p class="sub-heading">{{ __('Show In Home Page') }}</p>
                            </div>
                          </div>

                          <div class="col-lg-7">
                            <select name="latest">
                              <option value="0">No</option>
                              <option value="1">Yes</option>
                            </select>
                          </div>
                        </div>

                        
                        <br>

                        <div class="row">

                          <div class="col-lg-4">

                            <div class="left-area">

                              

                            </div>

                          </div>

                          <div class="col-lg-7">

                            <button class="addProductSubmit-btn" type="submit">{{ __('Create Brand') }}</button>

                          </div>

                        </div>

                      </form>

                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>



@endsection