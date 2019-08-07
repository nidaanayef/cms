@extends('layouts._homeland')

@section("title", $item->title)
@section ('css')
@endsection 
@section('content')
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url({{ asset("storage/images/" . $item->photos->file)  }});" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded"> Details of {{ $item->title }}</span>
            <h1 class="mb-2">{{ $item->address }}</h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold">${{ $item->price }}</strong></p>
          </div>
        </div>
      </div>
    </div>
<div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div>
              <div class="slide-one-item home-slider owl-carousel">
                <div><img src="{{ asset('thumb.php?size=730x487&src=storage/images/' . $item->photos->file) }}" alt="Image" class="img-fluid"></div>
              </div>
            </div>
            <div class="bg-white property-body border-bottom border-left border-right">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3">{{ $item->price }}</strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">{{ $item->beds }} </span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">{{ $item->paths }}</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Kitchens </span>
                    <span class="property-specs-number">{{ $item->kitchens }}</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Living</span>
                    <span class="property-specs-number">{{ $item->living_room }}</span>
                    
                  </li>
                </ul>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Type</span>
                
                  <strong class="d-block"></strong>
                  {{ $item->type->name }}
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Category</span>
                  <strong class="d-block"></strong>
                  {{ $item->category->name }}
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">City</span>
                  <strong class="d-block"></strong>
                  {{ $item->city->name }}
                </div>
              </div>
              <h2 class="h4 text-black">More Details</h2>
              <p>{{ $item->details }}</p>
       

            
            </div>
          </div>
          <div class="col-lg-4">

            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
              <form method="post" action="{{ route('homeland.postcontact', $item->id) }}" class="form-contact-agent">
                @csrf
                @include("_msg")
                <div class="form-group">
                  <label for="name">Name</label>
                  <input value='{{ old("name") }}' type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input value='{{ old("email") }}' type="email" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input value='{{ old("mobile") }}' type="text" id="mobile" name="mobile" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Send Message">
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Imporatant Message</h3>
              <p>
Be confident of the privacy of your data, and our staff will respond to you as soon as possible</p>
            </div>

          </div>
          
        </div>
      </div>
    </div>

@endsection
