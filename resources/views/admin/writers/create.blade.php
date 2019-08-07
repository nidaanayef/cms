@extends("layouts._admin")

@section("title", "  Add New Agent")

@section("content")
<form class="w-50" method="POST" action="{{ route('writers.store') }}" enctype="multipart/form-data">
{{ csrf_field() }}
<!-- POST, PUT, Patch and Delete methods must have @csrf token in Laravel Web -->
  <div class="form-group">
    <label for="name">Agent Name :</label>
    <input autofocus value="{{ old('name') }}" type="text" class="form-control" id="name" name="name" placeholder="agent name  ">
    
</div>
    <div class="form-group">
    <label for="name">Agent job title :</label>
    <input  value="{{ old('job_title') }}" type="text" class="form-control" id="name" name="job_title" placeholder="job title ">

</div>
    <div class="form-group">
    <label for="email">Email :</label>
    <input  value="{{ old('email') }}" type="email" class="form-control" id="name" name="email" placeholder=" email adderss  ">
</div>

    <div class="form-group">
        <label for="fle_photo">Personal Photo :</label>
        <input  type="file" class="form-control" id="name" name="fle_photo" placeholder="photo  ">
    </div>
    <div class="form-group">
    <label for="name">Details</label>
        <textarea type="text" class="form-control" id="name" name="details" placeholder="details">{{ old('details') }}</textarea>
</div>

    <div class="form-group">
        <label for="name">Facebook Url  :</label>
        <input  value="{{ old('facebook_url') }}" type="text" class="form-control" id="facebook_url" name="facebook_url" placeholder="  facebook link">

    </div>
    <div class="form-group">
        <label for="name"> Twitter Url:</label>
        <input  value="{{ old('twitter_url') }}" type="text" class="form-control" id="twitter_url" name="twitter_url" placeholder="twitter link ">

    </div>
    <div class="form-group">
        <label for="name"> Linkedin Url:</label>
        <input  value="{{ old('linkedin_url') }}" type="text" class="form-control" id="linkedin_url" name="linkedin_url" placeholder="linked in link ">

    </div>
    <div class="form-group">
        <label for="name"> Youtube Url:</label>
        <input  value="{{ old('youtube_url') }}" type="text" class="form-control" id="youtube_url" name="youtube_url" placeholder="youtube link ">

    </div>
  <button type="submit" class="btn btn-primary">Create</button>
  <a class="btn btn-dark" href="{{ route('writers.index') }}">Cancle </a>
</form>
@endsection
