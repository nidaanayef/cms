
@extends("layouts._admin")

@section("title", "Show All Messages")

@section("content")



        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                  
                    <th width="10%">Name </th>
                    <th width="10%">Email Address  </th>
                    <th width="10%"> Mobile </th>
              
                    <th width="15%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($realestates as $realestate)
                <tr>
            
                    <td>{{ $realestate->name }}</td>
                    <td>{{ $realestate->email}}</td>
                    <td>{{ $realestate->mobile }}</td>
                   
                    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="col-sm-3">
            <a class="btn btn-info mb-3" href="{{ route('realestate.index') }}"><i class=''></i> Back  </a>
        </div>
    
   
@endsection



  