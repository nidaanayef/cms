<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Http\Requests\TypeRequest;
use Session;
class TypeController extends BaseController
{
    public function index(Request $request)
    {
        $q = $request->q;
        $items = Type::whereRaw("deleted = 0");
        if($q){
            $items->whereRaw("(name like ?)", ["%$q%"]);
        }        
        $items =  $items->paginate(5)->appends([
            "q" => $q
        ]);
        return view("admin.type.index", compact("items"));
    }
    public function trash(Request $request)
    {
        $q = $request->q;
        $items = Type::whereRaw("deleted = 1");
        if($q){
            $items->whereRaw("(name like ?)", ["%$q%"]);
        }        
        $items =  $items->paginate(5)->appends([
            "q" => $q
        ]);
        return view("admin.type.trash", compact("items"));
    }

    public function create()
    {
        return view("admin.type.create");
    }

    public function store(TypeRequest $request)
    {
        Type::create($request->all());

        Session::flash("msg","s: Type Added Successfully");
        return redirect(route("type.create"));
    }

    public function edit($id)
    {
        $item = Type::find($id);
        if(!$item){
            Session::flash("msg", "e: Please Check The Link   ");
            return redirect(route("type.index"));
        }
        return view("admin.type.edit", compact("item", "id"));
    }
    
    public function update(TypeRequest $request, $id)
    {
        Type::find($id)->update($request->all());
        Session::flash("msg","s:  Type Updated Successfully  ");
        return redirect(route("type.index"));
    }

    public function destroy($id)
    {
        Type::find($id)->update(['deleted' => 1]);
        Session::flash("msg","w: Type Deleted Successfully   ");
        return redirect(route("type.index"));
    }
    public function restore($id)
    {
        Type::find($id)->update(['deleted' => 0]);
        Session::flash("msg","s: Type Recovered Successfully   ");
        return redirect(route("type.trash"));
    }
}