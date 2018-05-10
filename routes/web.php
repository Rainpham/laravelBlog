<?php

/*
|--------------------------------------------------------------------------
| Web Routes|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('login',['as'=>'getLogin','uses'=>'LoginController@getLogin']);
Route::post('login',['as'=>'postLogin','uses'=>'LoginController@postLogin']);
Route::get('getLogout',['as'=>'getLogout','uses'=>'LoginController@getLogout']);

//Admin
Route::group(['middleware' => 'adminlogin','namespace'=>'admin'], function () {

  Route::group(['prefix'=>'admin'],function(){
    Route::get('/',function(){
      return view('admin.master');
    });
    // CATEGORY
    Route::group(['prefix'=>'category'],function(){
      Route::get('add',['as'=>'getAdd','uses'=>'CategoryController@getAdd']);
      Route::post('add',['as'=>'postAdd','uses'=>'CategoryController@postAdd']);
      
      Route::get('list',['as'=>'getlistCate','uses'=>'CategoryController@getlistCate']);
      Route::get('delete/{id}',['as'=>'getDelete','uses'=>'CategoryController@getDelete']);

      Route::get('edit/{id}',['as'=>'getEditCate','uses'=>'CategoryController@getEditCate']);
      Route::post('edit/{id}',['as'=>'postEditCate','uses'=>'CategoryController@postEditCate']);
    });
    //USER
    Route::group(['prefix'=>'user'],function(){

        Route::get('add',['as'=>'getAddUser','uses'=>'UserController@getUserAdd']);
        Route::post('add',['as'=>'postAddUser','uses'=>'UserController@postUserAdd']);

        Route::get('list',['as'=>'getlistUser','uses'=>'UserController@getlistUser']);
        Route::get('delete/{id}',['as'=>'getDeleteUser','uses'=>'UserController@getDeleteUser']);

        Route::get('edit/{id}',['as'=>'getEditUser','uses'=>'UserController@getEditUser']);
        Route::post('edit/{id}',['as'=>'postEditUser','uses'=>'UserController@postEditUser']);
      });
    //News
    Route::group(['prefix'=>'news'],function(){

        Route::get('add',['as'=>'getAddNews','uses'=>'NewsController@getAddNews']);
        Route::post('add',['as'=>'postAddNews','uses'=>'NewsController@postAddNews']);

        Route::get('list',['as'=>'getlistNews','uses'=>'NewsController@getlistNews']);
        Route::get('delete/{id}',['as'=>'getDeleteNews','uses'=>'NewsController@getDeleteNews']);

        Route::get('edit/{id}',['as'=>'getEditNews','uses'=>'NewsController@getEditNews']);
        Route::post('edit/{id}',['as'=>'postEditNews','uses'=>'NewsController@postEditNews']);
      });
    //Product
    Route::group(['prefix'=>'product'],function(){

        Route::get('add',['as'=>'getAddProduct','uses'=>'ProducController@getAddProduct']);
        Route::post('add',['as'=>'postAddProduct','uses'=>'ProducController@postAddProduct']);

        Route::get('list',['as'=>'getlistProduct','uses'=>'ProducController@getlistProduct']);
        Route::get('delete/{id}',['as'=>'getDeleteProduct','uses'=>'ProducController@getDeleteProduct']);

        Route::get('edit/{id}',['as'=>'getEditProduct','uses'=>'ProducController@getEditProduct']);
        Route::post('edit/{id}',['as'=>'postEditProduct','uses'=>'ProducController@postEditProduct']);
      });
    //Slider
    Route::group(['prefix'=>'slider'],function(){

        Route::get('add',['as'=>'getAddSlider','uses'=>'SliderController@getAddSlider']);
        Route::post('add',['as'=>'postAddSlider','uses'=>'SliderController@postAddSlider']);

        Route::get('list',['as'=>'getlistSlider','uses'=>'SliderController@getlistSlider']);
        Route::get('delete/{id}',['as'=>'getDeleteSlider','uses'=>'SliderController@getDeleteSlider']);

        Route::get('edit/{id}',['as'=>'getEditSlider','uses'=>'SliderController@getEditSlider']);
        Route::post('edit/{id}',['as'=>'postEditSlider','uses'=>'SliderController@postEditSlider']);
      });
    //contact
    Route::group(['prefix'=>'contact'],function(){

        Route::get('add',['as'=>'getAddContact','uses'=>'ContactController@getAddContact']);
        Route::post('add',['as'=>'postAddContact','uses'=>'ContactController@postAddContact']);

        Route::get('list',['as'=>'getlistContact','uses'=>'ContactController@getlistContact']);
        Route::get('delete/{id}',['as'=>'getDeleteContact','uses'=>'ContactController@getDeleteContact']);

        Route::get('edit/{id}',['as'=>'getEditContact','uses'=>'ContactController@getEditContact']);
        Route::post('edit/{id}',['as'=>'postEditContact','uses'=>'ContactController@postEditContact']);
      });
    //About
    Route::group(['prefix'=>'about'],function(){

        Route::get('add',['as'=>'getAddAbout','uses'=>'AboutController@getAddAbout']);
        Route::post('add',['as'=>'postAddAbout','uses'=>'AboutController@postAddAbout']);

        Route::get('list',['as'=>'getlistAbout','uses'=>'AboutController@getlistAbout']);
        Route::get('delete/{id}',['as'=>'getDeleteAbout','uses'=>'AboutController@getDeleteAbout']);

        Route::get('edit/{id}',['as'=>'getEditAbout','uses'=>'AboutController@getEditAbout']);
        Route::post('edit/{id}',['as'=>'postEditAbout','uses'=>'AboutController@postEditAbout']);
      });
    //partner
    Route::group(['prefix'=>'partner'],function(){

        Route::get('add',['as'=>'getAddPartner','uses'=>'PartnerController@getAddPartner']);
        Route::post('add',['as'=>'postAddPartner','uses'=>'PartnerController@postAddPartner']);

        Route::get('list',['as'=>'getlistPartner','uses'=>'PartnerController@getlistPartner']);
        Route::get('delete/{id}',['as'=>'getDeletePartner','uses'=>'PartnerController@getDeletePartner']);

        Route::get('edit/{id}',['as'=>'getEditPartner','uses'=>'PartnerController@getEditPartner']);
        Route::post('edit/{id}',['as'=>'postEditPartner','uses'=>'PartnerController@postEditPartner']);
      });
    //comment
    Route::group(['prefix'=>'comment'],function(){

        Route::get('add',['as'=>'getAddComment','uses'=>'CommentController@getAddComment']);
        Route::post('add',['as'=>'postAddComment','uses'=>'CommentController@postAddComment']);

        Route::get('list',['as'=>'getlistComment','uses'=>'CommentController@getlistComment']);
        Route::get('delete/{id}',['as'=>'getDeleteComment','uses'=>'CommentController@getDeleteComment']);

        Route::get('edit/{id}',['as'=>'getEditComment','uses'=>'CommentController@getEditComment']);
        Route::post('edit/{id}',['as'=>'postEditComment','uses'=>'CommentController@postEditComment']);
      });
    // END GRUOD ADMIN
  });

  // the end
});
//Font-end

Route::group(['prefix'=>'/','namespace'=>'User'],function(){
  //Route::get('/','IndexController@index');
  Route::get('/','IndexController@trangchu');
});

