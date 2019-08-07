@extends("layouts._admin")

@section("title", "Add New City   ")

@section("content")
<form class="w-50" method="POST" action="{{ route('city.store') }}">
@csrf
<!-- POST, PUT, Patch and Delete methods must have @csrf token in Laravel Web -->
  <div class="form-group">
    <label for="name"> City Name </label>
    <input autofocus value="{{ old('name') }}" type="text" class="form-control" id="name" name="name" placeholder="add city ">
    
</div>
  <button type="submit" class="btn btn-primary">create</button>
  <a class="btn btn-dark" href="{{ route('city.index') }}">Cancle </a>
</form>
@endsection
