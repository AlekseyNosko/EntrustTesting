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

Route::get('/', function () {
    return view('welcome');
});// __yes__

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');// __yes__
Route::get('/home/article/{article}', 'HomeController@viewArticle')->name('homeArticle');// __no__
Route::get('/profile', 'ProfileController@index')->name('profile');// __yes__
Route::get('/notPermission', function (){
    return view('notPermission');
})->name('notPermission');// __yes__

Route::get('/createArticle', 'CreateArticleController@index')->name('creatArticle');// __yes__
Route::post('/createArticle', 'CreateArticleController@creat')->name('creatArticle');// __yes__

Route::group(['prefix'=>'management','middleware'=>'auth'], function() {
    Route::get('/', 'ManagementController@appealGet')->name('management');// __yes__

    Route::group(['prefix'=>'admins','middleware' =>'permission:edit-admin'], function() {
        Route::get('/', 'ManagementAdminsController@viewAll')->name('admins');// __yes__
        Route::get('/editAdmin/{edit}', 'ManagementAdminsController@viewEdit')->name('adminsEdit');// __yes__
        Route::post('/editAdmin/{edit}', 'ManagementAdminsController@edit')->name('adminsEdit');// __yes__
        Route::get('/deleteAdmin/{delete}', 'ManagementAdminsController@delete')->name('adminsDelete');// __yes__
    });

    Route::group(['prefix'=>'users','middleware' =>'permission:edit-users'], function() {
        Route::get('/', 'ManagementUsersController@viewAll')->name('users');// __yes__
        Route::get('/editUser/{edit}', 'ManagementUsersController@viewEdit')->name('userEdit');// __yes__
        Route::post('/editUser/{edit}', 'ManagementUsersController@edit')->name('userEdit');// __yes__
        Route::get('/deleteUser/{delete}', 'ManagementUsersController@delete')->name('userDelete');// __yes__
    });

    Route::group(['prefix'=>'articles','middleware' =>'permission:edit-post'], function() {
        Route::get('/', 'ManagementArticlesController@viewAll')->name('articles');// __yes__
        Route::get('/editPost/{edit}', 'ManagementArticlesController@edit')->name('articlesEdit');// __no__
        Route::post('/editPost/{edit}', 'ManagementArticlesController@edit')->name('articlesEdit');// __no__
        Route::get('/deletePost/{delete}', 'ManagementArticlesController@delete')->name('articlesDelete');// __yes__
    });

    Route::group(['prefix'=>'roles'], function() {
        Route::get('/', 'ManagementRolesController@viewAll')->name('roles');// __yes__
        Route::get('/addRole', 'ManagementRolesController@addView')->name('roleAdd');// __yes__
        Route::post('/addRole', 'ManagementRolesController@add')->name('roleAdd');// __yes__
        Route::get('/editRole/{edit}', 'ManagementRolesController@edit')->name('roleEdit');// __no__
        Route::post('/editRole/{edit}', 'ManagementRolesController@edit')->name('roleEdit');// __no__
        Route::get('/deleteRole/{delete}', 'ManagementRolesController@delete')->name('roleDelete');// __yes__
    });

    Route::group(['prefix'=>'permissions'], function() {
        Route::get('/', 'ManagementPermissionsController@viewAll')->name('permissions');// __yes__
    });
});