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
    return redirect('index');
});
Route::get('thu', function () {
    return view('admin.producttype.addnew');
});
Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSp'
	]);

Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChiTiet'
	]);

Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=>'PageController@getLienHe'
	]);
Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses'=>'PageController@getGioiThieu'
	]);

Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getAddtoCart'
	]);

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'producttype'],function(){

		//admin/producttype/list
		Route::get('list', 'ProductTypeController@getList');

		Route::get('addnew', 'ProductTypeController@getAddnew');
		Route::post('addnew', 'ProductTypeController@postAddnew');

		Route::get('update/{id}', 'ProductTypeController@getUpdate');
		Route::post('update/{id}', 'ProductTypeController@postUpdate');

		Route::get('delete/{id}', 'ProductTypeController@getDelete');
	});

	Route::group(['prefix'=>'product'],function(){

		//admin/producttype/list
		Route::get('list', 'ProductController@getList');

		Route::get('addnew', 'ProductController@getAddnew');
		Route::post('addnew', 'ProductController@postAddnew');

		Route::get('update/{id}', 'ProductController@getUpdate');
		Route::post('update/{id}', 'ProductController@postUpdate');

		Route::get('delete/{id}', 'ProductController@getDelete');
	});

	Route::group(['prefix'=>'user'],function(){

		//admin/user/list
		Route::get('list', 'UserController@getList');

		Route::get('addnew', 'UserController@getAddnew');
		Route::post('addnew', 'UserController@postAddnew');

		Route::get('update/{id}', 'UserController@getUpdate');
		Route::post('update/{id}', 'UserController@postUpdate');

		Route::get('delete/{id}', 'UserController@getDelete');
	});

	Route::group(['prefix'=>'slide'],function(){

		//admin/producttype/list
		Route::get('list', 'SlideController@getList');

		Route::get('addnew', 'SlideController@getAddnew');
		Route::post('addnew', 'SlideController@postAddnew');

		Route::get('update/{id}', 'SlideController@getUpdate');
		Route::post('update/{id}', 'SlideController@postUpdate');

		Route::get('delete/{id}', 'SlideController@getDelete');
	});

	Route::group(['prefix'=>'bill'],function(){

		//admin/producttype/list
		Route::get('list', 'BillController@getList');

		Route::get('addnew', 'BillController@getAddnew');
		Route::post('addnew', 'BillController@postAddnew');

		Route::get('update/{id}', 'BillController@getUpdate');
		Route::post('update/{id}', 'BillController@postUpdate');

		Route::get('delete/{id}', 'BillController@getDelete');
	});
});