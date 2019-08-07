@extends("layouts._admin")

@section("title","Edit Static Page   ")

@section("content")
<div id="app">
    <form class="w-50" method="POST" action="{{route('staticpage.update',$item->id)}}">
        @csrf
        @method("put")
        <div class="form-group">
            <label for="title">Title</label>
            <input autofocus value="{{ $item->title }}" type="text" class="form-control" id="title" name="title" placeholder="title">
        </div>
        
        
        <div class="form-group notCode">

            <input value="{{ $item->image }}" type="hidden" class="form-control" id="image" name="image" placeholder="photo">
            <a title=" Display Photos" href="{{ route('photo.browse') }}" class="btn mb-2 iframe btnSelectImage btn-primary"> <i class='flaticon-photo-camera'></i> <span>Choose Adv Photo  </span></a>
            <div class="imgShow"></div>
        </div>
        
    <!--add content of article-->
    <div class="form-group">
        <label for="details">Page Details </label>
          <textarea name="details" class="form-control" data-provide="markdown" rows="10">
          {{$item->details}}
          </textarea>    
    </div>
    <div class="form-group">
<div class="custom-control custom-checkbox">
  <input type="hidden" name="active" value="0" />
  <input  {{ $item->active?"checked":"" }} value="1" type="checkbox" name="active" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Page Activation </label>
</div>
</div>
        
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a class="btn btn-dark" href="{{ route('staticpage.index') }}">Cancle </a>		
    </form>
</div>
   
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
