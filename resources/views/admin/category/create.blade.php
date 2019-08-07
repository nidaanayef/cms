@extends("layouts._admin")

@section("title", "Add New Category  ")

@section("content")
<form class="w-50" method="POST" action="{{ route('category.store') }}">
@csrf
<!-- POST, PUT, Patch and Delete methods must have @csrf token in Laravel Web -->
  <div class="form-group">
    <label for="name">Category</label>
    <input autofocus value="{{ old('name') }}" type="text" class="form-control" id="name" name="name" placeholder="add category ">
    
</div>
  <button type="submit" class="btn btn-primary">Create</button>
  <a class="btn btn-dark" href="{{ route('category.index') }}">Cancle </a>
</form>
@endsection
