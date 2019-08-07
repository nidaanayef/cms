@extends("layouts._admin")

@section("title", "Add New Slide  ")

@section("content")
<form class="w-50" method="POST" action="{{ route('slider.store') }}">
@csrf
<!-- POST, PUT, Patch and Delete methods must have @csrf token in Laravel Web -->
  <div class="form-group">
    <label for="title">Title</label>
    <input autofocus value="{{ old('title') }}" type="text" class="form-control" id="title" name="title" placeholder="title">
    </div>
    <div class="form-group">
    <label for="title">Address </label>
    <input value="{{ old('subtitle') }}" type="text" class="form-control" id="subtitle" name="subtitle" placeholder="address  ">
    </div>
    <div class="form-group">
    <label for="button_text">Button Text </label>
    <input value="{{ old('button_text') }}" type="text" class="form-control" id="button_text" name="button_text" placeholder="text inside button  ">
    </div>
     <div class="form-group">
    <label for="url">Url</label>
    <input value="{{ old('url') }}" type="text" class="form-control" id="url" name="url" placeholder="url">
    </div>
     <div class="form-group">

      <input value="{{ old('image') }}" type="hidden" class="form-control" id="image" name="image" placeholder="photo">
      <a title=" Display Photos" href="{{ route('photo.browse') }}" class="btn mb-2 iframe btnSelectImage btn-primary"> <i class='flaticon-photo-camera'></i> <span>Choose Adv Photo  </span></a>
      <div class="imgShow"></div>
    </div>
    <div class="form-group">
<div class="custom-control custom-checkbox">
  <input type="hidden" name="active" value="0" />
  <input  {{ old("active")?"checked":"" }} value="1" type="checkbox" name="active" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Slide Active </label>
</div>
</div>
    
  <button type="submit" class="btn btn-primary">Create</button>
  <a class="btn btn-dark" href="{{ route('slider.index') }}">Cancle </a>
</form>
@endsection

@section("js")
  <script>
    function setImage(imageId, imageUrl){
      imageUrl = imageUrl.replace(/^.*[\\\/]/, '')
      $("#image").val(imageUrl);
      $(".imgShow").html('<img src="/storage/images/'+imageUrl+'" class="img-thumbnail w-50" />');
      $("#iframeModal").modal("hide");
    }
    if($("#image").val()!=''){
      $(".imgShow").html('<img src="/storage/images/'+$("#image").val()+'" class="img-thumbnail w-50" />');
    }
  </script>
@endsection
