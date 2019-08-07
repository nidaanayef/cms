<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Realestate;
use App\Models\StaticPage;
use App\Models\Slider;
use App\Models\Type;
use App\Models\Category;
use App\Models\City;
use App\Models\Photo;
use App\Models\PhotoCategory;
use App\Models\Contact;
use App\Models\Writer;

class HomeLandController extends Controller
{
    public function index ()
    {
        $sliders = Slider::where("deleted",0)->where("active",1)->inRandomOrder()->take(2)->get();
        $realestates = Realestate::where("deleted",0)->where("published",1)->orderBy('id','desc')->take(9)->get();
        $categories=Category::where("deleted",0)->get();
        $types=Type::where("deleted",0)->get();
        $cities=City::where("deleted",0)->get();
        $writers=Writer::where("deleted",0)->get();
        return view('home',compact('sliders','categories' ,'cities' ,'types','realestates','writers'));

    }
    
    public function realestates(Request $request)
    {  
        $types=Type::get();
        $categories=Category::get();
        $cities=City::get();
        $q = $request->q;
        $categories_id=$request->categories_id;
        $types_id=$request->types_id;
        $cities_id=$request->cities_id;
        $order_by = $request->order_by;
        $items = Realestate::whereRaw("deleted = 0 and published = 1");
        if($q){
            $items->whereRaw("(title like ? or price like ?)", ["%$q%","%$q%"]);
        }
        if($categories_id){
            $items->where("categories_id", $categories_id);
        }
        if($types_id){
            $items->where("types_id", $types_id);

        }  

        if($cities_id){
            $items->where("cities_id", $cities_id);
            
        }  


        $orderBy = 'price'; $orderByDirection = 'desc';
       
       if($order_by=='1'){
            $orderBy = 'price'; $orderByDirection = 'asc';
        }
        else if($order_by=='2'){
            $orderBy = 'price'; $orderByDirection = 'desc';
        }
        $items =  $items->orderBy($orderBy, $orderByDirection)->paginate(9)->appends([
            "q" => $q,
            'categories_id' =>$categories_id,
            'city' =>$cities_id,
            'order_by' =>$order_by,
            'type' => $types_id
        ]);
        return view("homeland.realestates" , compact("items","types","categories","cities"));
    }

    public function about ()

    {
        $writers=Writer::where("deleted",0)->get();
        return view ("homeland.about",compact('writers'));
    }

    public function contact ()
    {
        $writers=Writer::where("deleted",0)->get();
        return view ("homeland.contact" ,compact('writers'));
    }

    public function realestate($id)
    {
        $item = Realestate::find($id);
        if(!$item || $item->deleted || !$item->published){
            return redirect(route("home"));
        }
        $otherRealestates = Realestate::where('deleted',0)
            ->where('published',1)
            ->where('id','!=',$id)
            ->orderBy('id','desc')
            ->take(1)->get();
        return view('homeland.realestate')->withItem($item)->withRealestates($otherRealestates);
    }
    public function postContact(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
        ]);
        $request['realestate_id'] = $id;
        $request['deleted'] = 0;
        Contact::create($request->all());
        \Session::flash("msg", "s: Added successfully");
        return redirect(route('homeland.realestate', $id));
    }

    
   
}
