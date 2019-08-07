@extends("layouts._admin")

@section("title", "ادارة  التصنيفات للفيديو")

@section("content")

    <form class="row">
        <div class="col-sm-3">
            <input type="text" value='{{ request()->q }}' placeholder="ادخل كلمة البحث" name="q" autofocus class="form-control" />
        </div>
        <div class="col-sm-3">
            <button type="submit" class="btn btn-primary"><i class='fa fa-search'></i> بحث</button>
        </div>
        <div class="col-sm-3">
         </div>
        
        <div class="col-sm-3">
            <a class="btn btn-success float-right mb-3" href="{{ route('video-category.create') }}"><i class='fa fa-plus'></i> اضافة تصنيف جديد</a>
        </div>
    </form>
    @if($items->total()>0)
        <div class="alert alert-info mb-3">يوجد {{ $items->total() }} نتائج لعملية البحث</div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>التصنيف</th>
                    
                    <th width="20%">آخر تعديل</th>
                    <th width="10%" >النشر</th>
                    <th width="25%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td><input type="checkbox" {{ $item->published?"checked":""}} disabled /></td>
                    <td class="text-right">           
                        <a class="btn btn-sm btn-primary" href='{{ route("video-category.edit", ["id" => $item->id]) }}'><i class='fa fa-edit'></i> تعديل</a>  
                        <a style="width:100px" class="btn btn-sm btn-{{ $item->published?"warning":"info" }} confirm" href='{{ route("video-category.published", ["id" => $item->id]) }}'><i class='fa fa-edit'></i> {{ $item->published?"الغاء النشر":"نشر" }}</a>  

                        <a class="btn btn-sm btn-danger confirm" href='{{ route("video-category.delete", $item->id) }}'><i class='fa fa-trash'></i> حذف</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $items->links() }}
    @else
        <div class="alert alert-warning">
            نأسف لا يوجد نتائج لعرضها  :(
        </div>
    @endif
@endsection
