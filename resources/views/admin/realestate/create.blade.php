@extends("layouts._admin")

@section("title","Add New Realestate")

@section("content")

<form class="w-50" method="POST" action="{{route('realestate.store')}}">
@csrf
                  <!--add article title-->
                  <div class="form-group">
										<label for="title">Add Title</label>
										<input autofocus value="{{ old('title') }}" id="title" class="form-control" type="text" name="title" placeholder="realestate title">
                  </div>
                 
                  <div class="form-group ">
												<label class=" col-form-label">Add Address</label>
										
													<div class="m-input-icon m-input-icon--right">
														<input value="{{ old('address') }}" id="address" class="form-control"  name="address" type="text" class="form-control m-input" placeholder="add an address">
														<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
													</div>
										
												</div>

							
                  <!--add photo to article-->
                  <div class="form-group">
								
                      <input type="hidden" value='{{ old("photos_url") }}' id="photos_url" name="photos_url" />
                      <input type="hidden" value='{{ old("photos_id") }}' id="photos_id" name="photos_id" />
                      <a title=" Browse Photos" href="{{ route('photo.browse') }}" class="btn mb-2 iframe btnSelectImage btn-primary"> <i class='flaticon-photo-camera'></i> <span>Choose Photo  </span></a>
                      <div class="imgShow"></div>
                  </div>

									<div class="form-group">
										<label for="categories_id"> Realestate Categories </label>
											<select class="form-control"  id="categories_id" name="categories_id">
												<option value=""> Choose Realestate Categories </option>
                        @foreach($categories as $category)
													<option {{ old("categories_id")==$category->id?"selected":"" }} value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
											</select>
                  </div>
                  <!--add type to article-->
									<div class="form-group">
										<label for="types_id">Realestate Type </label>
											<select class="form-control" id="types_id" name="types_id">
                        <option value=""> Choose Realestate Type </option>
                        @foreach($types as $type)
													<option {{ old("types_id")==$type->id?"selected":"" }} value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
											</select>
                  </div>
                  <!--add category to article-->
								

									<div class="form-group">
										<label for="cities_id">Realestate City</label>
											<select class="form-control" id="cities_id" name="cities_id">
                        <option value=""> Choose Realestate City </option>
                        @foreach($cities as $city)
													<option {{ old("cities_id")==$city->id?"selected":"" }} value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
											</select>
                  </div>

               
                          <div class="form-group ">
												<label class=" col-form-label">Price in $USD</label>
										
													<div class="m-input-icon m-input-icon--right">
														<input value="{{ old('price') }}" id="price" class="form-control"  name="price" type="text" class="form-control m-input" placeholder="add price">
														<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="	la la-usd"></i></span></span>
													</div>
										
												</div>
                        <div class="form-group ">
												<label class=" col-form-label">Realestate Area in (Square meters)</label>
										
													<div class="m-input-icon m-input-icon--right">
														<input value="{{ old('area') }}" id="area" class="form-control"  name="area" type="text" class="form-control m-input" placeholder="realestate area">
														<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="flaticon-home-1"></i></span></span>
													</div>
										
												</div>

                        <div class="form-group m-form__group">
												<label for="paths">Number Of beds</label>
												<select class="form-control" id="beds" name="beds">
                        <option value="1"  {{ old('beds') == 1 ? 'selected' : '' }}> 1</option>
                        <option value="2"  {{ old('beds') == 2 ? 'selected' : '' }}> 2</option>
                        <option value="3"  {{ old('beds') == 3 ? 'selected' : '' }}> 3</option>
                        <option value="4"  {{ old('beds') == 4 ? 'selected' : '' }}> 4</option>
                        <option value="5"  {{ old('beds') == 5 ? 'selected' : '' }}> 5 or 5+</option>
   
                               
                               
											</select>
											</div>
											<div class="form-group m-form__group">
												<label for="paths">Number Of Paths</label>
												<select class="form-control" id="paths" name="paths">
											 
                        <option value="1"  {{ old('paths') == 1 ? 'selected' : '' }}> 1</option>
                        <option value="2"  {{ old('paths') == 2 ? 'selected' : '' }}> 2</option>
                        <option value="3"  {{ old('paths') == 3 ? 'selected' : '' }}> 3</option>
                        <option value="4"  {{ old('paths') == 4 ? 'selected' : '' }}> 4</option>
                        <option value="5"  {{ old('paths') == 5 ? 'selected' : '' }}> 5 or 5+</option>
   
                                 
											</select>
											</div>

											<div class="form-group m-form__group">
												<label for="paths">Number Of Living Rooms</label>
												<select class="form-control" id="living_room" name="living_room">
											 
                        <option value="1"  {{ old('living_room') == 1 ? 'selected' : '' }}> 1</option>
                        <option value="2"  {{ old('living_room') == 2 ? 'selected' : '' }}> 2</option>
                        <option value="3"  {{ old('living_room') == 3 ? 'selected' : '' }}> 3</option>
                        <option value="4"  {{ old('living_room') == 4 ? 'selected' : '' }}> 4</option>
                        <option value="5"  {{ old('living_room') == 5 ? 'selected' : '' }}> 5 or 5+</option>
   
   
                                 
											</select>
											</div>

											<div class="form-group m-form__group">
												<label for="paths">Number Of Kitchens</label>
												<select class="form-control" id="kitchens" name="kitchens">
											 
                        <option value="1"  {{ old('kitchens') == 1 ? 'selected' : '' }}> 1</option>
                        <option value="2"  {{ old('kitchens') == 2 ? 'selected' : '' }}> 2</option>
                        <option value="3"  {{ old('kitchens') == 3 ? 'selected' : '' }}> 3</option>
                        <option value="4"  {{ old('kitchens') == 4 ? 'selected' : '' }}> 4</option>
                        <option value="5"  {{ old('kitchens') == 5 ? 'selected' : '' }}> 5 or 5+</option>
   
											</select>
											</div>
										
										


                     


              
                  <!--add content of article-->
             <div class="form-group">
                  <label for="details"> More Details </label>
                    <textarea name="details" class="form-control" data-provide="markdown" rows="10">
                    {{old('details')}}
                    </textarea>    
              </div>
                <!--add date & time of article-->
                <div class="form-group">
                  <label for="date"> Add Date </label> 
                  <input type='text' class="form-control " name="date" placeholder=" Add Date" id='date' value="{{old('date')}}" />
												
                </div>
                
                 <!--add article summary-->
                 
               
                      
                <!--make article published-->
                <div class="form-group">
<div class="custom-control custom-checkbox">
  <input type="hidden" name="published" value="0" />
  <input  {{ old("published")?"checked":"" }} value="1" type="checkbox" name="published" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Publish </label>
</div>
</div>
                  <!--make article in home-->
                  <div class="form-group">
<div class="custom-control custom-checkbox">
  <input type="hidden" name="in_home" value="0" />
  <input  {{ old("in_home")?"checked":"" }} value="1" type="checkbox" name="in_home" class="custom-control-input" id="customCheck2">
  <label class="custom-control-label" for="customCheck2"> Publish In Home    </label>
</div>
</div>
								
										
												<button type="submit" class="btn btn-success">Create</button>
												<a class="btn btn-dark" href="{{ route('realestate.index') }}">Cancel </a>
										
									
							</form>

              <!--end::Form-->
             
                        

@endsection
@section("js")
<script src="{{ asset('metronic/assets/demo/default/custom/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>

  <script>
    function setImage(imageId, imageUrl){
      $("#photos_id").val(imageId);
      $("#photos_url").val(imageUrl);
      $(".imgShow").html('<img src="'+imageUrl+'" class="img-thumbnail w-50" />');
      $("#iframeModal").modal("hide");
    }
    if($("#photos_url").val()!=''){
      $(".imgShow").html('<img src="'+$("#photos_url").val()+'" class="img-thumbnail w-50" />');
    }
  </script>
@endsection



