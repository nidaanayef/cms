@extends("layouts._admin")

@section("title", "Update Agent  ")

@section("content")
<form class="w-50" method="POST" action="{{ route('writers.update', $item->id) }}">
@csrf
@method("put")
<!-- POST, PUT, Patch and Delete methods must have @csrf token in Laravel Web -->
    <div class="form-group">
        <label for="name">Agent Name  :</label>
        <input autofocus value="{{ $item->name }}" type="text" class="form-control" id="name" name="name" placeholder="agent name  ">

    </div>
    <div class="form-group">
        <label for="name">Agent job title :</label>
        <input  value="{{ $item->job_title }}" type="text" class="form-control" id="name" name="job_title" placeholder="job title ">

    </div>
    <div class="form-group">
        <label for="email">Email :</label>
        <input  value="{{ $item->email }}" type="email" class="form-control" id="name" name="email" placeholder="email address   ">
    </div>

    <div class="form-group">
        <label for="fle_photo"> Agent Photo:</label>
        <input type="file" class="form-control" id="fle_photo" name="fle_photo" placeholder="photo  ">
        @if($item->photo)
            <img src='{{ asset("storage/images/" . $item->photo) }}' class="mt-2 w-50 img-fluid img-thumbnail" />
        @endif
    </div>
    <div class="form-group">
        <label for="name">Details</label>
        <textarea type="text" class="form-control" id="name" name="details" placeholder="details">{{ $item->details }}</textarea>
    </div>

    <div class="form-group">
        <label for="name">Facebook Url  :</label>
        <input  value="{{$item->facebook_url }}" type="text" class="form-control" id="name" name="facebook_url" placeholder="facebook link  ">

    </div>
    <div class="form-group">
        <label for="name">Twitter Url  :</label>
        <input  value="{{ $item->twitter_url }}" type="text" class="form-control" id="name" name="twitter_url" placeholder="twitter link ">

    </div>
    <div class="form-group">
        <label for="name">Linkedin Url  :</label>
        <input  value="{{$item->linkedin_url }}" type="text" class="form-control" id="name" name="linkedin_url" placeholder="linked in link ">

    </div>
    <div class="form-group">
        <label for="name"> Youttube Url :</label>
        <input  value="{{ $item->youtube_url }}" type="text" class="form-control" id="name" name="youtube_url" placeholder="youtube link ">

    </div>
  <button type="submit" class="btn btn-primary">Save</button>
  <a class="btn btn-dark" href="{{ route('writers.index') }}">Cancle </a>
</form>
@endsection
