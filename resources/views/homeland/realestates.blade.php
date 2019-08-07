
@extends('layouts._homeland')
@section("title", 'Realestates')
@section('content')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image:  url({{asset('homeland-master/images/img_8.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Our Blog</h1>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section site-section-sm pb-0">
      <div class="container">
        <div class="row">
          <form class="form-search col-md-12" style="margin-top: -100px;">
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



    
<div class="site-section">
      <div class="container">
        <div class="row">
          @foreach($items as $item)
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <a href="#"><img src="{{ asset('thumb.php?size=350x219&src=storage/images/' . $item->photos->file) }}" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">{{ $item->created_at }}</span>
              <h2 class="h5 text-black mb-3"><a href="#">{{ $item->title}}</a></h2>
              <p><strong class="property-price text-primary mb-3 d-block text-success">{{ $item->price }}</strong></p>
              <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">{{ $item->beds }} </span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">{{ $item->paths }}</span>
                    
                  </li>
                  
				  <li>
                    <span class="property-specs">kitchens</span>
                    <span class="property-specs-number">{{ $item->kitchens }}</span>
                    
				  </li>
				  
				  <li>
                    <span class="property-specs">Living</span>
                    <span class="property-specs-number">{{ $item->living_room }}</span>
                    
				  </li>
                </ul>
            </div>
          </div>
          @endforeach
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-12 text-center">
            {{ $items->links() }}
          </div>  
        </div>
       
      </div>
    </div>
@endsection