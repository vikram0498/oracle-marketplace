@extends('layouts.load')

@section('content')

            <div class="content-area">

              <div class="add-product-content1">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="product-description">
                      <div class="body-area">
                        @include('alerts.admin.form-error')  
                      <form id="geniusformdata" action="{{route('admin-childcat-create')}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}

												<div class="row">
													<div class="col-lg-4">
													  <div class="left-area">
														  <h4 class="heading">{{ __('Select Language') }}*</h4>
													  </div>
													</div>
													<div class="col-lg-7">
														<select name="language_id" required="">
                                @foreach(DB::table('languages')->get() as $ldata)
                                  @if($ldata->language == 'English')
                                    <option value="{{ $ldata->id }}">{{ $ldata->language }}</option>
                                  @endif
															  @endforeach
														  </select>
													</div>
												</div>

                        
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Category') }} *</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select id="cat" required="">
                                  <option value="">{{ __('Select Category') }}</option>
                                    @foreach($cats as $cat)
                                      <option data-href="{{ route('admin-subcat-load',$cat->id) }}" value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Sub Category') }} *</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select id="subcat" name="subcategory_id" required="" disabled=""></select>
                          </div>
                        </div>
                        

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
                                <p class="sub-heading">{{ __('(In English)') }}</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="slug" placeholder="{{ __('Enter Slug') }}" required="" value="">
                          </div>
                        </div>
      
                        <div class="row">

                          <div class="col-lg-4">

                            <div class="left-area">

                              <h4 class="heading">{{ __('Set Feature Image') }} *</h4>

                            </div>

                          </div>

                          <div class="col-lg-7">

                            <div class="img-upload">

                              <div id="image-preview" class="img-preview" style="background: url({{ asset('assets/admin/images/upload.png') }});">

                                <label for="image-upload" class="img-label"><i class="icofont-upload-alt"></i>{{ __('Upload Image') }}</label>

                                <input type="file" name="image" class="img-upload">

                              </div>

                            </div>

                          </div>

                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Allow Featured Category') }}*</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select name="is_featured" required="">
                                  <option value="0" >{{ __('No') }}</option>
                                  <option value="1" >{{ __('Yes') }}</option>
                                </select>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Allow Popular Category') }}*</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select name="is_popular" required="">
                                  <option value="0" >{{ __('No') }}</option>
                                  <option value="1" >{{ __('Yes') }}</option>
                                </select>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Allow Best Seller Category') }}*</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select name="is_best" required="">
                                  <option value="0" >{{ __('No') }}</option>
                                  <option value="1" >{{ __('Yes') }}</option>
                                </select>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Allow Hot Category') }}*</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select name="is_hot" required="">
                                  <option value="0" >{{ __('No') }}</option>
                                  <option value="1" >{{ __('Yes') }}</option>
                                </select>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Allow New Category') }}*</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select name="is_new" required="">
                                  <option value="0" >{{ __('No') }}</option>
                                  <option value="1" >{{ __('Yes') }}</option>
                                </select>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Allow Trending Collection Category') }}*</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select name="is_trending" required="">
                                  <option value="0" >{{ __('No') }}</option>
                                  <option value="1" >{{ __('Yes') }}</option>
                                </select>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Allow Top Category') }}*</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select name="is_top" required="">
                                  <option value="0" >{{ __('No') }}</option>
                                  <option value="1" >{{ __('Yes') }}</option>
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
                            <button class="addProductSubmit-btn" type="submit">{{ __('Create') }}</button>
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