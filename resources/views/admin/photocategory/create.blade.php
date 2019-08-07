@extends("layouts._admin")

@section("title", "Add Photos category   ")

@section("content")
<form class="w-50" method="POST" action="{{ route('photo-category.store') }}">
@csrf
<!-- POST, PUT, Patch and Delete methods must have @csrf token in Laravel Web -->
  <div class="form-group">
    <label for="name"></label>
    <input autofocus value="{{ old('name') }}" type="text" class="form-control" id="name" name="name" placeholder="Photo Categories ">
    
</div>

  
<div class="form-group">
  <div class="custom-control custom-checkbox">
    <input type="hidden" name="published" value="0" />
    <input  {{ old("published")?"checked":"" }} type="checkbox" value="1" name="published" class="custom-control-input" id="customCheck1">
    <label class="custom-control-label" for="customCheck1">Publish </label>
  </div>
</div>
   
  <button type="submit" class="btn btn-primary">Create</button>
  <a class="btn btn-dark" href="{{ route('photo-category.index') }}"> Cancle</a>
</form>
@endsection
