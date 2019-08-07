<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect("/home");
});


Route::group(array('prefix' => 'admin'), function()
{
    Route::get("/","Admin\HomeController@index");
    Route::get("/no-access","Admin\HomeController@noAccess");

    Route::get("category/{id}/restore", "Admin\CategoryController@restore")->name("category.restore");
    Route::get("category/{id}/delete", "Admin\CategoryController@destroy")->name("category.delete");
    Route::get("category/trash", "Admin\CategoryController@trash")->name("category.trash");
    Route::resource("category","Admin\CategoryController");

    Route::get("type/{id}/restore", "Admin\TypeController@restore")->name("type.restore");
    Route::get("type/{id}/delete", "Admin\TypeController@destroy")->name("type.delete");
    Route::get("type/trash", "Admin\TypeController@trash")->name("type.trash");
    Route::resource("type","Admin\TypeController");

    Route::get("article/{id}/restore", "Admin\ArticleController@restore")->name("article.restore");
    Route::get("article/{id}/delete", "Admin\ArticleController@destroy")->name("article.delete");
    Route::get("article/trash", "Admin\ArticleController@trash")->name("article.trash");
    Route::resource("article","Admin\ArticleController");
    
    Route::get("photo-category/{id}/restore", "Admin\PhotoCategoryController@restore")->name("photo-category.restore");
    Route::get("photo-category/{id}/delete", "Admin\PhotoCategoryController@destroy")->name("photo-category.delete");
    Route::get("photo-category/trash", "Admin\PhotoCategoryController@trash")->name("photo-category.trash");
    Route::resource("photo-category","Admin\PhotoCategoryController");

    Route::get("photo/{id}/restore", "Admin\PhotoController@restore")->name("photo.restore");
    Route::get("photo/{id}/delete", "Admin\PhotoController@destroy")->name("photo.delete");
    Route::get("photo/trash", "Admin\PhotoController@trash")->name("photo.trash");
    Route::get("photo/browse", "Admin\PhotoController@browse")->name("photo.browse");
    Route::resource("photo","Admin\PhotoController");

    Route::get("video/{id}/restore", "Admin\VideoController@restore")->name("video.restore");
    Route::get("video/{id}/delete", "Admin\VideoController@destroy")->name("video.delete");
    Route::get("video/trash", "Admin\VideoController@trash")->name("video.trash");
    Route::get("video/{id}/published", "Admin\VideoController@published")->name("video.published");
    Route::resource("video","Admin\VideoController");

    Route::get("video-category/{id}/restore", "Admin\VideoCategoryController@restore")->name("video-category.restore");
    Route::get("video-category/{id}/delete", "Admin\VideoCategoryController@destroy")->name("video-category.delete");
    Route::get("video-category/trash", "Admin\VideoCategoryController@trash")->name("video-category.trash");
    Route::get("video-category/{id}/published", "Admin\VideoCategoryController@published")->name("video-category.published");
    Route::resource("video-category","Admin\VideoCategoryController");

    
    Route::get("adv/{id}/restore", "Admin\AdvController@restore")->name("adv.restore");
    Route::get("adv/{id}/delete", "Admin\AdvController@destroy")->name("adv.delete");
    Route::get("adv/trash", "Admin\AdvController@trash")->name("adv.trash");
    Route::resource("adv","Admin\AdvController");
    
    Route::get("writers/{id}/restore", "Admin\WritersController@restore")->name("writers.restore");
    Route::get("writers/{id}/delete", "Admin\WritersController@destroy")->name("writers.delete");
    Route::get("writers/trash", "Admin\WritersController@trash")->name("writers.trash");
    Route::resource("writers","Admin\WritersController");
    
    Route::get("users/{id}/restore", "Admin\UserController@restore")->name("users.restore");
    Route::get("users/{id}/delete", "Admin\UserController@destroy")->name("users.delete");
    Route::get("users/{id}/links", "Admin\UserController@links")->name("users.links");
    Route::post("users/{id}/links", "Admin\UserController@saveLinks")->name("users.post.links");
    Route::get("users/trash", "Admin\UserController@trash")->name("users.trash");
    
    Route::get("slider/{id}/restore", "Admin\SliderController@restore")->name("slider.restore");
    Route::get("slider/{id}/delete", "Admin\SliderController@destroy")->name("slider.delete");
    Route::get("slider/trash", "Admin\SliderController@trash")->name("slider.trash");
    Route::resource("slider","Admin\SliderController");
    
    
    Route::get("staticpage/{id}/restore", "Admin\StaticPageController@restore")->name("staticpage.restore");
    Route::get("staticpage/{id}/delete", "Admin\StaticPageController@destroy")->name("staticpage.delete");
    Route::get("staticpage/trash", "Admin\StaticPageController@trash")->name("staticpage.trash");
    Route::resource("staticpage","Admin\StaticPageController");

    Route::get("realestate/{id}/restore", "Admin\RealestateController@restore")->name("realestate.restore");
    Route::get("realestate/{id}/delete", "Admin\RealestateController@destroy")->name("realestate.delete");
    Route::get("realestate/{id}/messages", "Admin\RealestateController@messages")->name("realestate.message");
    Route::get("realestate/trash", "Admin\RealestateController@trash")->name("realestate.trash");
    Route::resource("realestate","Admin\RealestateController");

    Route::get("city/{id}/restore", "Admin\CityController@restore")->name("city.restore");
    Route::get("city/{id}/delete", "Admin\CityController@destroy")->name("city.delete");
    Route::get("city/trash", "Admin\CityController@trash")->name("city.trash");
    Route::resource("city","Admin\CityController");
   
    Route::resource("users","Admin\UserController");
});
Auth::routes();



Route::get('/home', 'HomelandController@index')->name('home');
Route::get('/realestates', 'HomelandController@realestates')->name('homeland.realestates');
Route::get('/realestate/{id}', 'HomelandController@realestate')->name('homeland.realestate');
Route::post('/realestate/{id}', 'HomelandController@postContact')->name('homeland.postcontact');
Route::get('/about', 'HomeLandController@about'); 
Route::get('/contact', 'HomeLandController@contact'); 
