<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\City;
use App\Http\Requests\CityRequest;
use Session;
class CityController extends BaseController
{
    public function index(Request $request)
    {
        $q = $request->q;
        $items = City::whereRaw("deleted = 0");
        if($q){
            $items->whereRaw("(name like ?)", ["%$q%"]);
        }        
        $items =  $items->paginate(5)->appends([
            "q" => $q
        ]);
        return view("admin.city.index", compact("items"));
    }
    public function trash(Request $request)
    {
        $q = $request->q;
        $items = City::whereRaw("deleted = 1");
        if($q){
            $items->whereRaw("(name like ?)", ["%$q%"]);
        }        
        $items =  $items->paginate(5)->appends([
            "q" => $q
        ]);
        return view("admin.city.trash", compact("items"));
    }

    public function create()
    {
        return view("admin.city.create");
    }

    public function store(CityRequest $request)
    {
        City::create($request->all());

        Session::flash("msg","s: City Added Successfully");
        return redirect(route("city.create"));
    }

    public function edit($id)
    {
        $item = City::find($id);
        if(!$item){
            Session::flash("msg", "e: Please Check The Link   ");
            return redirect(route("city.index"));
        }
        return view("admin.city.edit", compact("item", "id"));
    }
    
    public function update(CityRequest $request, $id)
    {
        City::find($id)->update($request->all());
        Session::flash("msg","s:  City Updated Successfully  ");
        return redirect(route("city.index"));
    }

    public function destroy($id)
    {
        City::find($id)->update(['deleted' => 1]);
        Session::flash("msg","w: City Deleted Successfully   ");
        return redirect(route("city.index"));
    }
    public function restore($id)
    {
        City::find($id)->update(['deleted' => 0]);
        Session::flash("msg","s: City Recovered Successfully   ");
        return redirect(route("city.trash"));
    }
}