@extends('layouts.load')

@section('content')

            <div class="content-area">

              <div class="add-product-content1">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="product-description">
                      <div class="body-area">
                        @include('alerts.admin.form-error')  
                      <form id="geniusformdata" action="{{route('admin-childcat-update',$data->id)}}" method="POST" enctype="multipart/form-data">
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
																<option value="{{ $ldata->id }}" {{ $ldata->id == $data->language_id ? 'selected' : '' }}>{{ $ldata->language }}</option>
                                @endif
															  @endforeach
														  </select>
													</div>
												</div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Category') }}*</h4>
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <select id="cat" required="">
                                  <option value="">{{ __('Select Category') }}</option>
                                    @foreach($cats as $cat)
                                      <option data-href="{{ route('admin-subcat-load',$cat->id) }}" value="{{ $cat->id }}" {{ $cat->id == $data->subcategory->category->id ? "selected":"" }}>{{ $cat->name }}</option>
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
                              <select id="subcat"  name="subcategory_id" required="">
                                <option value="">{{ __('Select Sub Category') }}</option>
                                @foreach($data->subcategory->category->subs as $sub)
                                  <option value="{{$sub->id}}" {{$sub->id == $data->subcategory->id ? "selected":""}}>{{$sub->name}}</option>
                                @endforeach
                              </select>
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
                            <input type="text" class="input-field" name="name" placeholder="{{ __('Enter Name') }}" required="" value="{{$data->name}}">
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
                            <input type="text" class="input-field" name="slug" placeholder="{{ __('Enter Slug') }}" required="" value="{{$data->slug}}">
                          </div>
                        </div>
                        <div class="row">

                          <div class="col-lg-4">

                            <div class="left-area">

                                <h4 class="heading">{{ __('Current Icon') }} *</h4>

                            </div>

                          </div>

                          <div class="col-lg-7">

                            <div class="img-upload">

                                <div id="image-preview" class="img-preview" style="background: url({{ $data->image ? asset('assets/images/childcategories/'.$data->image):asset('assets/images/noimage.png') }});">

                                    <label for="image-upload" class="img-label" id="image-label"><i class="icofont-upload-alt"></i>{{ __('Upload Icon') }}</label>

                                    <input type="file" name="image" class="img-upload" id="image-upload">

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
                                  <option value="0" {{ $data->is_featured == 0 ? "selected":"" }}>{{ __('No') }}</option>
                                  <option value="1" {{ $data->is_featured == 1 ? "selected":"" }}>{{ __('Yes') }}</option>
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
                                  <option value="0" {{ $data->is_popular == 0 ? "selected":"" }}>{{ __('No') }}</option>
                                  <option value="1" {{ $data->is_popular == 1 ? "selected":"" }}>{{ __('Yes') }}</option>
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
                                  <option value="0" {{ $data->is_best == 0 ? "selected":"" }}>{{ __('No') }}</option>
                                  <option value="1" {{ $data->is_best == 1 ? "selected":"" }}>{{ __('Yes') }}</option>
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
                                  <option value="0" {{ $data->is_hot == 0 ? "selected":"" }}>{{ __('No') }}</option>
                                  <option value="1" {{ $data->is_hot == 1 ? "selected":"" }}>{{ __('Yes') }}</option>
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
                                  <option value="0" {{ $data->is_new == 0 ? "selected":"" }}>{{ __('No') }}</option>
                                  <option value="1" {{ $data->is_new == 1 ? "selected":"" }}>{{ __('Yes') }}</option>
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
                                  <option value="0" {{ $data->is_trending == 0 ? "selected":"" }}>{{ __('No') }}</option>
                                  <option value="1" {{ $data->is_trending == 1 ? "selected":"" }}>{{ __('Yes') }}</option>
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
                                  <option value="0" {{ $data->is_top == 0 ? "selected":"" }}>{{ __('No') }}</option>
                                  <option value="1" {{ $data->is_top == 1 ? "selected":"" }}>{{ __('Yes') }}</option>
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
                            <button class="addProductSubmit-btn" type="submit">{{ __('Save') }}</button>
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