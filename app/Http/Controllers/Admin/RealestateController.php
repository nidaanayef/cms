<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Realestate;
use App\Models\Category;
use App\Models\Type;
use App\Models\Photo;
use App\Models\City;
use App\Models\Contact;
use App\User;
use App\Models\PhotoCategory;


use App\Models\Writer;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\WriterRequest;
use App\Http\Requests\ContactRequest;
use Session;
use App\Http\Requests\RealestateRequest;
use Carbon\Carbon;

class RealestateController extends BaseController
{
    
    public function index(Request $request)
    {
    
        $start = $request->start;
        $end = $request->end;
        //$dd = new Carbon($start);
        //dd($dd->addHour(15));
        //dd($dd->addDay(15));
        $types=Type::get();
        $categories=Category::get();
        $cities=City::get();
        $photos=Photo::get();
        $q = $request->q;
        $categories_id=$request->categories_id;
        $types_id=$request->types_id;
        $cities_id=$request->cities_id;
        $items = Realestate::whereRaw("deleted = 0");
        if($q){
            $items->whereRaw("(title like ? or address like ?)", ["%$q%","%$q%"]);
        }
        if($categories_id){
            $items->where("categories_id", $categories_id);
        }
        if($types_id){
            $items->where("types_id", $types_id);
        }       
        if($start){
            $items->where("date",'>=', date('Y-m-d',strtotime($start)));
        }     
        if($end){
            //$items->where("date",'<=', date('Y-m-d',strtotime($end)));
            $items->where("date",'<=',$end);
        } 
        $items =  $items->orderBy("id","desc")->paginate(5)->appends([
            "q" => $q
        ]);
        $categories=Category::get();
        $types=Type::get();
        $cities=City::get();
        return view("admin.realestate.index",compact('categories','types','cities','items'));
    }
    public function trash(Request $request)
    {
        $photos=Photo::get();
       $types=Type::get();
       $cities=City::get();
        $categories=Category::get();
        $q = $request->q;
        $categories_id=$request->categories_id;
        $types_id=$request->types_id;
        $items = Realestate::whereRaw("deleted = 1");
        if($q){
            $items->whereRaw("(title like ? or address like ?)", ["%$q%","%$q%"]);
        }
        if($categories_id){
            $items->where("categories_id", $categories_id);
        }
        if($types_id){
            $items->where("types_id", $types_id);
        }        
        $items =  $items->paginate(5)->appends([
            "q" => $q
        ]);
        return view("admin.realestate.trash", compact("items","types","categories","photos","cities"));
        
    }

    public function create()
    {
    
        $types=Type::where('deleted',0)->get();
        $cities=City::where('deleted',0)->get();
        $users=User::where('deleted',0)->get();
        $categories=Category::where('deleted',0)->get();
        $photos=Photo::where('deleted',0)->get();
     
        return view("admin.realestate.create",compact("types","cities","categories","users","photos"  ));
    }

    public function store(RealestateRequest $request)
    {
        Realestate::create($request->all());
        Session::flash("msg","s: The Process Completed successfully   ");
        return redirect(route("realestate.create"));
    }

    public function edit($id){
       $types=Type::where('deleted',0)->get();
        $cities=City::where('deleted',0)->get();
        $categories=Category::where('deleted',0)->get();
        $photos=Photo::where('deleted',0)->get();
        $item = Realestate::find($id);
        if(!$item){
            Session::flash("msg", "e:Please Check The Url ");
            return redirect(route("realestate.index"));
        }
        return view("admin.realestate.edit", compact("item", "id","photos","cities","types","categories"));
    }
    
    public function update(RealestateRequest $request, $id)
    {
        Realestate::find($id)->update($request->all());
        Session::flash("msg","s: The Process Completed successfully   ");
        return redirect(route("realestate.index"));
    }

    public function destroy($id)
    {
        Realestate::find($id)->update(['deleted' => 1]);
        Session::flash("msg","w: The Process Completed successfully   ");
        return redirect(route("realestate.index"));
    }
    public function restore($id)
    {
        Realestate::find($id)->update(['deleted' => 0]);
        Session::flash("msg","s: The Process Completed successfully   ");
        return redirect(route("realestate.trash"));
    }


    public function messages($id)
    {
        $realestates=Contact::where('realestate_id','=',$id)->get();
        return view("admin.realestate.messages" , compact("realestates" ));
       
       
    }
}
