<?php

Route::get('/', 'indexController@index');

Route::get('/login2', 'indexController@login');

Route::post('login2', 'indexController@authendatabase');

Route::get('register', function(){
				return View::make('register');
			});

Route::post('signup', 'indexController@signup');


Route::get('signout','indexController@signout');

Route::get('province/{province}','HotelController@gethotelname');

/*Route::get('มารวย',function(){
				return View::make('มารวย');
			});*/

Route::get('standard_room_มารวย_ไทย',function(){
				return View::make('standard_room_มารวย_ไทย');
			});

Route::get('addnewhotel',function(){
				return View::make('registerhotel');
			});

Route::get('addnewroom',function(){
				return View::make('registerroom');
			});

Route::post('addRoom','RoomController@addRoom');

Route::post('addHotel','HotelController@addHotel');

Route::get('hotel','HotelController@getpagehotel');

Route::get('room','RoomController@getpageroom');

Route::post('bookroom','RoomController@bookRoom');

Route::post('addcomment','HotelController@addComment');

Route::get('editprofile',function(){
				return View::make('editprofile');
			});
Route::post('editprofile','indexController@editUser');

Route::get('history',function(){
				return View::make('history');
			});
Route::post('cancelRoom','RoomController@cancelBook');

Route::get('userdetail',function(){
				return View::make('userdetail');
			});
?>