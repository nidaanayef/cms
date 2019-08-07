@extends("layouts._homeland")

@section("title", "About")
@section("css")
  <style>
   
  </style>
@endsection

@section("content")
<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(homeland-master/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">About Us</h1>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mt-5 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="{{('homeland-master/images/about.jpg')}}" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 ml-auto mt-5"  data-aos="fade-up" data-aos-delay="200">
            <div class="site-section-title">
              <h2>Our Company</h2>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus in cum odio.</p>
            <p>Illum repudiandae ratione facere explicabo. Consequatur dolor optio iusto, quos autem voluptate ea? Sunt laudantium fugiat, mollitia voluptate? Modi blanditiis veniam nesciunt architecto odit voluptatum tempore impedit magnam itaque natus!</p>
         
          </div>
        </div>
      </div>
    </div>



    <div class="site-section bg-light">
      <div class="container" data-aos="fade">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7">
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