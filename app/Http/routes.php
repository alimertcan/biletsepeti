<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[ 
	'uses' =>'ProductController@getIndex',
	'as' =>'product.index'
 ]);  
 
 Route::get('/product/{id}',[ 
	'uses' =>'ProductController@getticketindex',
	'as' =>'ticket'
 ]);  
 
 Route::get('/search',[ 
	'uses' =>'SearchController@getsearch',
	'as' =>'search.index'
 ]);  
 
 Route::post('/search',[ 
	'uses' =>'SearchController@postsearch',
	'as' =>'search'
 ]);  
 
  Route::get('/searchres',[ 
	'uses' =>'SearchController@postsearch',
	'as' =>'searchres'
 ]);  
 

 
 
Route::get('/add-to-cart/{id}',[ 
	'uses' =>'ProductController@getAddToCart',
	'as' =>'product.addToCart'
 ]);  
 
 Route::get('/removeone/{id}',[ 
	'uses' =>'ProductController@getremoveone',
	'as' =>'product.removeone'
 ]);  
 
  Route::get('/remove/{id}',[ 
	'uses' =>'ProductController@getremoveitem',
	'as' =>'product.remove'
 ]);  
 
 
Route::get('/shopping-cart',[ 
	'uses' =>'ProductController@getCart',
	'as' =>'product.shoppingCart'
 ]);  
Route::get('/checkout',[ 
	'uses' =>'ProductController@getCheckout',
	'as' =>'checkout',
	'middleware'=>'auth'
 ]);  
 Route::post('/checkout',[ 
	'uses' =>'ProductController@postCheckout',
	'as' =>'checkout',
	'middleware'=>'auth'
 ]); 
 Route::get('/checkout2',[ 
	'uses' =>'ProductController@getCheckout2',
	'as' =>'checkout2',
	'middleware'=>'auth'
 ]);  
 Route::post('/checkout2',[ 
	'uses' =>'ProductController@postCheckout2',
	'as' =>'checkout2',
	'middleware'=>'auth'
 ]); 
Route::group(['prefix'=>'user'],function(){

 Route::get('/admin',[ 
	'uses' =>'AppController@getAdminPage',
	'as' =>'admin',
	'middleware'=>'roles',
	'roles'=>['Admin']
 ]);  
 Route::post('/admin/assign-roles',[ 
	'uses' =>'AppController@PostAdminAssignRoles',
	'as' =>'admin.assign',
	'middleware'=>'roles',
	'roles'=>['Admin']
 ]); 
  Route::post('/staffcancelticket',[ 
	'uses' =>'AppController@staffcancelticket',
	'as' =>'staffcancelticket',
	'middleware'=>'roles',
	'roles'=>['Admin',['Staff']]
 ]); 
 
   Route::get('/staffcancelticket',[ 
	'uses' =>'AppController@getstaffcancelpage',
	'as' =>'staffcancelticket',
	'middleware'=>'roles',
	'roles'=>['Admin','Staff']
 ]);  
 
  Route::get('/staff',[ 
	'uses' =>'AppController@getstaffpage',
	'as' =>'staff',
	'middleware'=>'roles',
	'roles'=>['Admin','Staff']
 ]);  
 
  Route::post('/staff',[ 
	'uses' =>'ProductController@addTicket',
	'as' =>'staff',
	'middleware'=>'roles',
	'roles'=>['Admin','Staff']
 ]); 
 

Route::group(['middleware'=>'guest'],function(){
    Route::get('/signup',[ 
	'uses' =>'UserController@getSignup',
	'as' =>'user.signup'
	
 ]);  

Route::post('/signup',[ 
	'uses' =>'UserController@postSignup',
	'as' =>'user.signup'
	
 ]);  

 Route::get('/signin',[ 
	'uses' =>'UserController@getSignin',
	'as' =>'user.signin'
	
 ]);  

Route::post('/signin',[ 
	'uses' =>'UserController@postSignin',
	'as' =>'user.signin'
	
 ]);  
 });  
Route::group(['middleware'=>'auth'],function(){	


 Route::get('/profile',[ 
	'uses' =>'UserController@getProfile',
	'as' =>'user.profile'
	
 ]);  
  Route::get('/editprofile',[ 
	'uses' =>'UserController@geteditProfile',
	'as' =>'user.editprofile'
	
 ]);  
 
   Route::post('/editprofile',[ 
	'uses' =>'UserController@posteditProfile',
	'as' =>'user.editprofile'
	
 ]);  
 
 Route::get('/logout',[ 
	'uses' =>'UserController@getLogout',
	'as' =>'user.logout'
	 ]);
 });
 
 });