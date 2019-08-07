@extends("layouts._admin")

@section("title", "Add New Type   ")

@section("content")
<form class="w-50" method="POST" action="{{ route('type.store') }}">
@csrf
<!-- POST, PUT, Patch and Delete methods must have @csrf token in Laravel Web -->
  <div class="form-group">
    <label for="name">Realestate Type </label>
    <input autofocus value="{{ old('name') }}" type="text" class="form-control" id="name" name="name" placeholder="add type ">
    
</div>
  <button type="submit" class="btn btn-primary">create</button>
  <a class="btn btn-dark" href="{{ route('type.index') }}">Cancle </a>
</form>
@endsection
