@extends("layouts._homeland")

@section("title", "Contact Us ")
@section("css")
  <style>
   
  </style>
@endsection

@section("content")

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(homeland-master/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section">
      <div class="container">
        <div class="row  mb-5 justify-content-center">
       
       
         
          <div class="col-md-7 mt-5">
            <div class=" mb-3 bg-white title text-center">
              <h3 class="h6 text-black mb-3 text-uppercase">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">rimal St . Gaza, Gazastrip, Palestine</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="tel:+970 598 280 517">+970 598 280 517</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">Realestate@gmail.com</a></p>

            </div>

            <div class="col-sm">
        </div>
            
          </div>
        </div>
      </div>
    </div>









<div class="site-section bg-light">
      <div class="container" data-aos="fade">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 ">
            <div class="site-section-title text-center mt-3">
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

@endsection





@section("js")

 

 
@endsection