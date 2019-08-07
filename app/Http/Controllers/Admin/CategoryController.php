<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use Session;
class CategoryController extends BaseController
{
    public function index(Request $request)
    {
        $q = $request->q;
        $items = Category::whereRaw("deleted = 0");
        if($q){
            $items->whereRaw("(name like ?)", ["%$q%"]);
        }        
        $items =  $items->paginate(5)->appends([
            "q" => $q
        ]);
        return view("admin.category.index", compact("items"));
    }
    public function trash(Request $request)
    {
        $q = $request->q;
        $items = Category::whereRaw("deleted = 1");
        if($q){
            $items->whereRaw("(name like ?)", ["%$q%"]);
        }        
        $items =  $items->paginate(5)->appends([
            "q" => $q
        ]);
        return view("admin.category.trash", compact("items"));
    }

    public function create()
    {
        return view("admin.category.create");
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->all());

        Session::flash("msg","s: The Process Completed successfully   ");
        return redirect(route("category.create"));
    }

    public function edit($id)
    {
        $item = Category::find($id);
        if(!$item){
            Session::flash("msg", "e: Please Check The Url  ");
            return redirect(route("category.index"));
        }
        return view("admin.category.edit", compact("item", "id"));
    }
    
    public function update(CategoryRequest $request, $id)
    {
        Category::find($id)->update($request->all());
        Session::flash("msg","s: The Process Completed successfully");
        return redirect(route("category.index"));
    }

    public function destroy($id)
    {
        Category::find($id)->update(['deleted' => 1]);
        Session::flash("msg","w: The Process Completed successfully   ");
        return redirect(route("category.index"));
    }
    public function restore($id)
    {
        Category::find($id)->update(['deleted' => 0]);
        Session::flash("msg","s: The Process Completed successfully   ");
        return redirect(route("category.trash"));
    }
}