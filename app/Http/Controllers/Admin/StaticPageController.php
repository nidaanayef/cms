<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\StaticPage;
use App\Http\Requests\StaticPageRequest;
use Session;
class StaticPageController extends BaseController
{
    public function index(Request $request)
    {
        $q = $request->q;
        $items = StaticPage::whereRaw("deleted = 0");
        if($q){
            $items->whereRaw("(title like ?)", ["%$q%"]);
        }        
        $items =  $items->paginate(5)->appends([
            "q" => $q
        ]);
        return view("admin.staticpage.index", compact("items"));
    }
    public function trash(Request $request)
    {
        $q = $request->q;
        $items = StaticPage::whereRaw("deleted = 1");
        if($q){
            $items->whereRaw("(title like ?)", ["%$q%"]);
        }        
        $items =  $items->paginate(5)->appends([
            "q" => $q
        ]);
        return view("admin.staticpage.trash", compact("items"));
    }

    public function create()
    {
        return view("admin.staticpage.create");
    }

    public function store(StaticPageRequest $request)
    {
        StaticPage::create($request->all());
        Session::flash("msg","s: The Process Completed successfully   ");
        return redirect(route("staticpage.create"));
    }

    public function edit($id)
    {
        $item = StaticPage::find($id);
        if(!$item){
            Session::flash("msg", "e:Please Check The Url ");
            return redirect(route("staticpage.index"));
        }
        return view("admin.staticpage.edit", compact("item", "id"));
    }
    
    public function update(StaticPageRequest $request, $id)
    {
        StaticPage::find($id)->update($request->all());
        Session::flash("msg","s: The Process Completed successfully   ");
        return redirect(route("staticpage.index"));
    }

    public function destroy($id)
    {
        StaticPage::find($id)->update(['deleted' => 1]);
        Session::flash("msg","w: The Process Completed successfully   ");
        return redirect(route("staticpage.index"));
    }
    public function restore($id)
    {
        StaticPage::find($id)->update(['deleted' => 0]);
        Session::flash("msg","s: The Process Completed successfully   ");
        return redirect(route("staticpage.trash"));
    }
}