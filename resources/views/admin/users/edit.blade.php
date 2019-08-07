@extends("layouts._admin")

@section("title", " Edit User ")

@section("content")
<form class="w-50" method="POST" action="{{ route('users.update', $item->id) }}">
@csrf
@method("put")
  <div class="form-group">
    <label for="name">User Name </label>
    <input autofocus value="{{ $item->name }}" type="text" class="form-control" id="name" name="name" placeholder="user name  ">
    
</div>

<div class="form-group">
    <label for="email"> Email</label>
    <input autofocus value="{{ $item->email }}" type="text" class="form-control" id="email" name="email" placeholder=" email adderss ">
    
</div>
  <button type="submit" class="btn btn-primary">Save</button>
  <a class="btn btn-dark" href="{{ route('users.index') }}">Cancle </a>
</form>
@endsection
