@extends("layouts._admin")

@section("title", " Manage Photo Categories  ")

@section("content")
    
    <form class="row">
        <div class="col-sm-3">
            <input type="text" value='{{ request()->q }}' placeholder="enter your term  " name="q" autofocus class="form-control" />
        </div>
        <div class="col-sm-6">
            <button type="submit" class="btn btn-primary"><i class='fa fa-search'></i> Search</button>
        </div>
        <div class="col-sm-3">
            <a class="btn btn-success float-right mb-3" href="{{ route('photo-category.create') }}"><i class='fa fa-plus'></i> Add New Category  </a>
        </div>
    </form>
    @if($items->total()>0)
        <div class="alert alert-info mb-3">There are  {{ $items->total() }}  results to show </div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Category</th>
                    <th width="20%">Publised</th>
                    <th width="30%">Last Modified </th>
                    <th width="20%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td><input type="checkbox" {{ $item->published?"checked":""}} disabled /></td>
                    <td>{{ $item->created_at }}</td>
                    <td class="text-right">           
                        <a class="btn btn-sm btn-primary" href='{{ route("photo-category.edit", ["id" => $item->id]) }}'><i class='fa fa-edit'></i> Update</a>  
                        <a class="btn btn-sm btn-danger confirm" href='{{ route("photo-category.delete", $item->id) }}'><i class='fa fa-trash'></i> Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $items->links() }}
    @else
        <div class="alert alert-warning">
             Sorry , There are no results to Show     :(
        </div>
    @endif
@endsection
