@extends("layouts._admin")

@section("title", "Edit City  ")

@section("content")
<form class="w-50" method="POST" action="{{ route('city.update', $item->id) }}">
@csrf
@method("put")
<!-- POST, PUT, Patch and Delete methods must have @csrf token in Laravel Web -->
  <div class="form-group">
    <label for="name">City Name </label>
    <input autofocus value="{{ $item->name }}" type="text" class="form-control" id="name" name="name" placeholder="add city ">
    
</div>
  <button type="submit" class="btn btn-primary">Save</button>
  <a class="btn btn-dark" href="{{ route('city.index') }}">Cancle </a>
</form>
@endsection
