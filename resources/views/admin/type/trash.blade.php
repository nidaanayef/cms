@extends("layouts._admin")

@section("title", " Realestate Types - Recycle Bin ")

@section("content")
    
    <form class="row mb-3">
        <div class="col-sm-3">
            <input type="text" value='{{ request()->q }}' placeholder=" enter your term " name="q" autofocus class="form-control" />
        </div>
        <div class="col-sm-6">
            <button type="submit" class="btn btn-primary"><i class='fa fa-search'></i> Search</button>
        </div>
    </form>
    @if($items->total()>0)
        <div class="alert alert-info mb-3">There are {{ $items->total() }} results to show  </div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Realestate Type </th>
                    
                    <th width="20%">Last Modified </th>
                    <th width="15%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td class="text-right">           
                        <a class="btn btn-sm confirm btn-warning" href='{{ route("type.restore", ["id" => $item->id]) }}'><i class='fa fa-redo'></i> Recovery</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $items->links() }}
    @else
        <div class="alert alert-warning">
        Sorry , There Are No Results To Show :(
        </div>
    @endif
@endsection
