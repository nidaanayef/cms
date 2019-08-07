@extends("layouts._admin_empty")

@section("title", " Select Photo ")

@section("content")
    <form class="row">
        <div class="col-sm-3">
            <input type="text" value='{{ request()->q }}' placeholder="enter your term  " name="q" autofocus class="form-control" />
        </div>
        <div class="col-sm-3">
            <select class="form-control" id="photo_categories_id" name="photo_categories_id">
                <option value="">All Categories </option>
                @foreach($categories as $photocategory)
                    <option {{ request()->photo_categories_id ==$photocategory->id?"selected":"" }} value="{{ $photocategory->id }}">{{ $photocategory->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">Search <i class='fa fa-search'></i></button>
        </div>
        <div class="col-sm-3">
            <a target="_blank" class="btn btn-success float-right mb-3" href="{{ route('photo.create') }}"><i class='fa fa-plus'></i> Add New Photo  </a>
        </div>
    </form>
    @if($items->total()>0)
        <div class="alert alert-info mb-3">There are {{ $items->total() }} results to show  </div>
        
        <div class="row">
            @foreach($items as $item)
                <div class="col-sm-4 mb-3">
                    <a data-id="{{ $item->id }}" href="#" class="card imgSelect bg-dark text-white">
                        <img src='{{ asset("storage/images/" . $item->file) }}' class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <h5 class="card-title">{{ $item->tag }}</h5>
                            <p class="card-text">{{ $item->photocategory->name }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        {{ $items->links() }}
    @else
        <div class="alert alert-warning">
        Sorry , There are no results to Show  :(
        </div>
    @endif
@endsection


@section("js")
    <script>
        $(function(){
            $(".imgSelect").click(function(){
                var imageId = $(this).data("id")
                var imageUrl = $(this).find("img").attr("src");
                parent.setImage(imageId, imageUrl);
            });
        })
    </script>
@endsection