<?php

use Illuminate\Database\Seeder;
use App\Models\Link;
class LinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //realestates
        // $link = Link::create(['title'=>'Realestates','icon'=>'flaticon-layers','parent_id'=>0]);
        // Link::create(['title'=>'Add New Realestate  ','route_name'=>'realestate.create','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>' Manage Realestate  ','route_name'=>'realestate.index','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'Realestates - Recycle Bin  ','route_name'=>'realestate.trash','icon'=>'','parent_id'=>$link->id]);
    
        // //realestate categories
        // $link = Link::create(['title'=>'Realestate   ','icon'=>'fa fa-list-alt','parent_id'=>0]);
        // Link::create(['title'=>' Add New Realestate Category  ','route_name'=>'category.create','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'Manage Realestate categories  ','route_name'=>'category.index','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'Realestate categories - Recycle Bin ','route_name'=>'category.trash','icon'=>'','parent_id'=>$link->id]);

        //realestate types
        // $link = Link::create(['title'=>'Realestate Types','icon'=>'fa fa-align-justify','parent_id'=>0]);
        // Link::create(['title'=>'Add New Type','route_name'=>'type.create','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>' Manage All Types ','route_name'=>'type.index','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>' Types - Recycle Bin','route_name'=>'type.trash','icon'=>'','parent_id'=>$link->id]);
        

         // //photos
        // $link = Link::create(['title'=>'Photos','icon'=>'fa fa-list','parent_id'=>0]);
        // Link::create(['title'=>'Add New Photos  ','route_name'=>'photo.create','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'Manage Photos ','route_name'=>'photo.index','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'Photos -  Recycle Bin ','route_name'=>'photo.trash','icon'=>'','parent_id'=>$link->id]);

        

        // //photos categories
        // $link = Link::create(['title'=>'Photos Categories ','icon'=>'fa fa-file-image','parent_id'=>0]);
        // Link::create(['title'=>'Add New Photo Category   ','route_name'=>'photo-category.create','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'Manage Photos Categories  ','route_name'=>'photo-category.index','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'Photos Categories - Recycle Bin ','route_name'=>'photo-category.trash','icon'=>'','parent_id'=>$link->id]);
        

        // //users
        // $link = Link::create(['title'=>'Users','icon'=>'fa fa-user','parent_id'=>0]);
        // Link::create(['title'=>'Add New User  ','route_name'=>'users.create','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'Manage Users ','route_name'=>'users.index','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'Users - Recycle Bin ','route_name'=>'users.trash','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'User Permissions ','route_name'=>'users.links','show_in_menu'=>0,'icon'=>'','parent_id'=>$link->id]);
        
        
        // //Slider
        // $link = Link::create(['title'=>'Slides','icon'=>'fa fa-desktop','parent_id'=>0]);
        // Link::create(['title'=>'Add New Slide   ','route_name'=>'slider.create','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'Manage Slides ','route_name'=>'slider.index','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'Slides - Recycle Bin ','route_name'=>'slider.trash','icon'=>'','parent_id'=>$link->id]);

     
        // //Static Pages
        // $link = Link::create(['title'=>'Static Pages ','icon'=>'fa fa-book-open','parent_id'=>0]);
        // Link::create(['title'=>' Add New page ','route_name'=>'staticpage.create','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'Manage Static Pages  ','route_name'=>'staticpage.index','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'Static Pages - Recycle Bin ','route_name'=>'staticpage.trash','icon'=>'','parent_id'=>$link->id]);
        
        
        // //Cities    
        // $link = Link::create(['title'=>' Cities','icon'=>'la la-map-marker','parent_id'=>0]);
        // Link::create(['title'=>'Add New City  ','route_name'=>'city.create','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'Manage Cities  ','route_name'=>'city.index','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'Cities - Recycle Bin ','route_name'=>'city.trash','icon'=>'','parent_id'=>$link->id]);


        // //articles types
        // $link = Link::create(['title'=>'أنواع المقالات','icon'=>'fa fa-align-justify','parent_id'=>0]);
        // Link::create(['title'=>'اضافة نوع جديد','route_name'=>'type.create','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'ادارة أنواع المقالات','route_name'=>'type.index','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'سلة المهملات','route_name'=>'type.trash','icon'=>'','parent_id'=>$link->id]);
    
        
       
        
        
        
        // //Videos
        // $link = Link::create(['title'=>'الفيديو','icon'=>'fa fa-video','parent_id'=>0]);
        // Link::create(['title'=>'اضافة فيديو جديد','route_name'=>'video.create','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'ادارة الصور','route_name'=>'video.index','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'سلة المهملات','route_name'=>'video.trash','icon'=>'','parent_id'=>$link->id]);

        
        // //Videos categories
        // $link = Link::create(['title'=>'تصنيفات الفيديو','icon'=>'fa fa-file-video','parent_id'=>0]);
        // Link::create(['title'=>'اضافة تصنيف فيديو جديد','route_name'=>'video-category.create','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'ادارة تصنيفات الصور','route_name'=>'video-category.index','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'سلة المهملات','route_name'=>'video-category.trash','icon'=>'','parent_id'=>$link->id]);

        // //adv
        // $link = Link::create(['title'=>'الاعلانات','icon'=>'flaticon-laptop','parent_id'=>0]);
        // Link::create(['title'=>'اضافة اعلان جديد','route_name'=>'adv.create','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'ادارة الاعلانات','route_name'=>'adv.index','icon'=>'','parent_id'=>$link->id]);
        // Link::create(['title'=>'سلة المهملات','route_name'=>'adv.trash','icon'=>'','parent_id'=>$link->id]);

        //writers
        $link = Link::create(['title'=>'Agentes','icon'=>'fa fa-users','parent_id'=>0]);
        Link::create(['title'=>'Add New Agent  ','route_name'=>'writers.create','icon'=>'','parent_id'=>$link->id]);
        Link::create(['title'=>'Manage Agents ','route_name'=>'writers.index','icon'=>'','parent_id'=>$link->id]);
        Link::create(['title'=>'Agents - Recycle Bin ','route_name'=>'writers.trash','icon'=>'','parent_id'=>$link->id]);

        
             
        
       
    }
}
