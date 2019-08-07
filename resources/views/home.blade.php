@extends('layouts._homeland')

@section('content')
@if($sliders->count()>0)
<div class="slide-one-item home-slider owl-carousel">
@foreach($sliders as $slider)
      <div class="site-blocks-cover overlay" style="background-image: url({{ asset("storage/images/" . $slider->image)  }});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
		
            <div class="col-md-10">
            
              <h1 class="mb-2">{{ $slider->title }}</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">$2,250,500</strong></p>
              <p><a href="http://localhost:8000/realestate/4" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">See Details</a></p>
			</div>
		
          </div>
        </div>
      </div>  

	  @endforeach
	</div>
	@endif

	<div class="site-section site-section-sm pb-0">
      <div class="container">
        <div class="row">
          <form class="form-search col-md-12" method="get" action="/realestates" style="margin-top: -100px;">
            <div class="row  align-items-end">
              <div class="col-md-3">
                <label for="list-types">Listing Types</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select class="form-control" id="types_id" name="types_id">
                <option value="">All Types </option>
                @foreach($types as $type)
                    <option {{ request()->types_id ==$type->id?"selected":"" }} value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="offer-Categories">Listing Categories</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
				  <select class="form-control" id="categories_id" name="categories_id">
                <option value="">All Categories </option>
                @foreach($categories as $category)
                    <option {{ request()->categories_id ==$category->id?"selected":"" }} value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
                </div>
              </div>
              <div class="col-md-2">
                <label for="select-city">Select City</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
				  <select class="form-control" id="cities_id" name="cities_id">
                <option value="">All Cities </option>
                @foreach($cities as $city)
                    <option {{ request()->cities_id ==$city->id?"selected":"" }} value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
                </select>
                </div>
              </div>
              <div class="col-md-2">
                <label for="select-sort">Select Sort</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
				  <select class="form-control" id="order_by" name="order_by">
                <option value="">Sort by </option>
                <option value="1" {{ request()->order_by=='1'?"selected":""}}>Price Asc</option>
                <option value="2" {{ request()->order_by=='2'?"selected":""}}>Price Desc</option>
            </select>
                </div>
              </div>
              <div class="col-md-2">
              <input type="submit" class="btn btn-success text-white btn-block rounded-0" value="Search" />
              </div>
            </div>
          </form>
        </div>  

      </div>
    </div>

    <div class="site-section site-section-sm bg-light">
      <div class="container">
      
        <div class="row mb-5">
		@foreach($realestates as $realestate)
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="{{ asset('realestate/' . $realestate->id ) }}" class="property-thumbnail">
          
                <img src="{{ asset('thumb.php?size=350x219&src=storage/images/'. $realestate->photos->file) }}" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
              
                <h2 class="property-title"><a href="{{ asset('realestate/' . $realestate->id ) }}">{{ $realestate->title }}</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> {{ $realestate->address }}</span>
                <strong class="property-price text-primary mb-3 d-block text-success">${{ $realestate->price }}</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">{{ $realestate->beds }} </span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">{{ $realestate->paths }}</span>
                    
                  </li>
                  
				  <li>
                    <span class="property-specs">kitchens</span>
                    <span class="property-specs-number">{{ $realestate->kitchens }}</span>
                    
				  </li>
				  
				  <li>
                    <span class="property-specs">Living</span>
                    <span class="property-specs-number">{{ $realestate->living_room }}</span>
                    
				  </li>
                </ul>

              </div>
            </div>
		  </div>
		  @endforeach

        </div>
      
        
      </div>
    </div>

    

    

    
    <div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
     
        <div class="col-md-7">
          <div class="site-section-title text-center">
            <h2>Our Agents</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero magnam officiis ipsa eum pariatur labore fugit amet eaque iure vitae, repellendus laborum in modi reiciendis quis! Optio minima quibusdam, laboriosam.</p>
          </div>
        </div>
      </div>
      <div class="row">
      @foreach($writers as $writer)
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">

              <img src="{{ asset("storage/images/" . $writer->photo)  }}" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">{{ $writer->name}}</h2>
                <span class="d-block mb-3 text-white-opacity-05">{{ $writer->job_title}}</span>
                <p>{{ $writer->details}}</p>
                <p>
                  <a href="{{ $writer->facebook_url}}" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="{{ $writer->twitter_url}}" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="{{ $writer->linkedin_url}}" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>
          @endforeach

         

    

          

        </div>
    </div>
   
  @endsection
  @section("js")

 


@endsection
