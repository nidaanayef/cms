@extends("layouts._admin")

@section("title", "Edit Photo Categories  ")

@section("content")
<form class="w-50" method="POST" action="{{ route('photo-category.update', $item->id) }}">
@csrf
@method("put")
<!-- POST, PUT, Patch and Delete methods must have @csrf token in Laravel Web -->
  <div class="form-group">
    <label for="name">Category</label>
    <input autofocus value="{{ $item->name }}" type="text" class="form-control" id="name" name="name" placeholder="photo category ">
    
</div>

  
<div class="form-group">
  <div class="custom-control custom-checkbox">
    <input type="hidden" name="published" value="0" />
    <input  {{ $item->published?"checked":"" }} type="checkbox" value="1" name="published" class="custom-control-input" id="customCheck1">
    <label class="custom-control-label" for="customCheck1">Publish Album </label>
  </div>
</div>
  <button type="submit" class="btn btn-primary">Save</button>
  <a class="btn btn-dark" href="{{ route('photo-category.index') }}">Cancle </a>
</form>
@endsection
