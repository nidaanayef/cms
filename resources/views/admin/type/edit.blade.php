@extends("layouts._admin")

@section("title", "Edit Realestate Type  ")

@section("content")
<form class="w-50" method="POST" action="{{ route('type.update', $item->id) }}">
@csrf
@method("put")
<!-- POST, PUT, Patch and Delete methods must have @csrf token in Laravel Web -->
  <div class="form-group">
    <label for="name">Realestate Type </label>
    <input autofocus value="{{ $item->name }}" type="text" class="form-control" id="name" name="name" placeholder="add type ">
    
</div>
  <button type="submit" class="btn btn-primary">Save</button>
  <a class="btn btn-dark" href="{{ route('type.index') }}">Cancle </a>
</form>
@endsection
