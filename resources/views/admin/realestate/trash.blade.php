@extends("layouts._admin")

@section("title", " Realestate - Recycle Bin")

@section("content")
<form class="row">
        <div class="col-sm-3">
            <input type="text" value='{{ request()->q }}' placeholder="enter your term  " name="q" autofocus class="form-control" />
        </div>
        <div class="form-group col-sm-3">
          <select class="form-control" id="categories_id" name="categories_id">
          <option value="">Choose Category </option>
            @foreach($categories as $category)
             <option {{ $category->categories_id==$category->id?"selected":"" }} value="{{ $category->id }}">{{ $category->name }} </option>
            @endforeach
         </select>
        </div>
        <div class="form-group col-sm-3">
          <select class="form-control" id="types_id" name="types_id">
          <option value="">Choose Type </option>
            @foreach($types as $type)
             <option {{ $type->types_id==$type->id?"selected":"" }} value="{{ $type->id }}">{{ $type->name }} </option>
            @endforeach
         </select>
        </div>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-primary"><i class='fa fa-search'></i> Search</button>
        </div>
        
    </form>
    @if($items->total()>0)
        <div class="alert alert-info mb-3">There are  {{ $items->total() }} results to show  </div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Title  </th>
                    <th width="10%">Realestate Category  </th>
                    <th width="10%">Realestate Type  </th>
                    <th width="10%"> Published </th>
                    <th width="10%">published in Home  </th>
                    <th width="10%"> Last Modified  </th>
                    <th width="15%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->type->name }}</td>
                    <td><input type="checkbox" disabled {{ $item->published?"checked":""}} /></td>
                    <td><input type="checkbox" disabled {{ $item->in_home?"checked":""}} /></td>
                    <td>{{ $item->date }}</td><td> 
                    <td> 
                    <div class="btn-group" role="group" aria-label="Basic example">          
                        <a class="btn btn-sm confirm btn-warning" href='{{ route("realestate.restore", ["id" => $item->id]) }}'><i class='fa fa-redo'></i> Recovery</a>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $items->links() }}
    @else
        <div class="alert alert-warning">
             Sorry , There are no results to show      :(
        </div>
    @endif
@endsection


  

