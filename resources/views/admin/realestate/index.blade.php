@extends("layouts._admin")

@section("title", "Show All Realestates")

@section("content")
<div class="col-sm-3">
            <a class="btn btn-success mb-3" href="{{ route('realestate.create') }}"><i class='fa fa-plus'></i> Add New Realestate  </a>
        </div>
<form>
        <div class="row">
        <div class="col-sm-4">
            <input type="text" value='{{ request()->q }}' placeholder="enter your term  " name="q" autofocus class="form-control" />
        </div>
        <div class="form-group col-sm-4">
          <select class="form-control" id="categories_id" name="categories_id">
          <option value="">choose Category </option>
            @foreach($categories as $category)
             <option {{ request()->categories_id==$category->id?"selected":"" }} value="{{ $category->id }}">{{ $category->name }} </option>
            @endforeach
         </select>
        </div>
        <div class="form-group col-sm-4">
          <select class="form-control" id="types_id" name="types_id">
          <option value=""> choose type </option>
            @foreach($types as $type)
             <option {{ request()->types_id==$type->id?"selected":"" }} value="{{ $type->id }}">{{ $type->name }} </option>
            @endforeach
         </select>
        </div>
       




        </div>
        <div class="row">
            <div class="col-sm-5">
            <div class="input-daterange input-group" id="m_datepicker_5"  data-date-format="yyyy-mm-dd">
												<input type="text" value="{{request()->start}}" class="form-control m-input" name="start" />
												<div class="input-group-append">
													<span class="input-group-text"><i class="la la-ellipsis-h"></i></span>
												</div>
												<input type="text" value="{{request()->end}}" class="form-control" name="end" />
											</div>
            </div>
        
        <div class="col-sm-4">
            <button type="submit" class="btn btn-primary"><i class='fa fa-search'></i> Search </button>
        </div>
        </div>
        
    </form>
    @if($items->total()>0)
        <div class="alert alert-info mb-3">There are  {{ $items->total() }} results to show  </div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Title </th>
                    <th width="10%">Realestate Category  </th>
                    <th width="10%">Realestate Type  </th>
                    <th width="10%"> Activation </th>
                    <th width="10%">Publish  </th>
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
                    <div class="btn-group" role="group" aria-label="Basic example">   
                    <a class="btn btn-sm btn-info" href='{{ route("realestate.message", $item->id) }}'><i class='flaticon-email'></i> messages</a>       
                        <a class="btn btn-sm btn-primary" href='{{ route("realestate.edit", ["id" => $item->id]) }}'><i class='fa fa-edit'></i> Update</a>  
                        <a class="btn btn-sm btn-danger confirm" href='{{ route("realestate.delete", $item->id) }}'><i class='fa fa-trash'></i> Delete</a>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $items->links() }}
    @else
        <div class="alert alert-warning">
              Sorry , There are no results to show     :(
        </div>
    @endif
@endsection

