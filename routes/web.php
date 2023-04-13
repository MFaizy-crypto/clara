<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
//use App\Http\Controllers\Admin\DashboardController;
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

// Route::get('/', function () {
//     return view('front.welcome');
// });
Route::get('/',[App\Http\Controllers\Front\DashboardController::class, 'index']);
Route::get('/contact-us', function () {
    return view('front.contact-us');
});
Route::get('/user-register',[App\Http\Controllers\Front\DashboardController::class, 'viewRegister'])->name('view.front.register');
Route::get('/user-login',[App\Http\Controllers\Front\DashboardController::class, 'viewLogin'])->name('view.front.login');
Route::get('/user-profile',[App\Http\Controllers\Front\DashboardController::class, 'viewProfile'])->name('view.front.viewProfile');

Route::post('/store_registration',[App\Http\Controllers\Front\DashboardController::class, 'register'])->name('store.user');
Route::post('/store_lead',[App\Http\Controllers\Front\LeadController::class, 'store'])->name('store.lead');
Route::post('/store_home_lead',[App\Http\Controllers\Front\LeadController::class, 'storeLead'])->name('store.home.lead');
Route::post('/update_profile',[App\Http\Controllers\Front\DashboardController::class, 'updateProfile'])->name('update.user');
Route::get('/request-quote', function () {
    return view('front.request_quote');
});
Route::get('/about-us', function () {
    return view('front.about_us');
});
Route::get('/investor-relations', function () {
    return view('front.investor_relations');
});
Route::get('/investor-relations',[App\Http\Controllers\Front\InvestorRelationsController::class, 'index']);
Route::get('/impressum', function () {
    return view('front.impressum');
});
Route::get('/datenschutz', function () {
    return view('front.datenschutz');
});
Route::get('/b2e', function () {
    return view('front.b2e');
});
Route::get('/cookies', function () {
    return view('front.cookies');
});
Route::get('/kontakt', function () {
    return view('front.kontakt');
});
Route::get('/konzept', function () {
    return view('front.konzept');
});
Route::get('/services', function () {
    return view('front.services');
});
Route::get('/services-single-service', function () {
    return view('front.services_single_service');
});
Route::get('/projects-single-project', function () {
    return view('front.projects_single_project');
});
Route::get('/blog-single-post', function () {
    return view('front.blog_single_post');
});
 Route::get('/blog-single-post/{id}',[App\Http\Controllers\Front\NewsArticlesController::class, 'details'])->name('blog-single-post');

// Route::get('/news', function () {
//     return view('front.news');
// })->name('news');
 Route::get('/news',[App\Http\Controllers\Front\NewsArticlesController::class, 'index'])->name('news');
 Route::group(['middleware'=>['guest']],function(){  
 Route::get('/admin', function () {
        return view('admin.login');
    }); 
   Route::get('/admin/login', function () {
        return view('admin.login');
    })->name('adminlogin'); 
    Route::post('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
});
 Auth::routes();
Route::group(['middleware'=>['auth','adminAuth']],function(){
    Route::get('/admin/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/logout',[App\Http\Controllers\Admin\DashboardController::class, 'logout']);
    Route::get('/admin/news-articles',[App\Http\Controllers\Admin\NewsArticlesController::class, 'index'])->name('news-artical');
    Route::get('/admin/news-articles/add',[App\Http\Controllers\Admin\NewsArticlesController::class, 'add'])->name('news-artical-add');
    Route::post('/admin/news-articles/store',[App\Http\Controllers\Admin\NewsArticlesController::class, 'store'])->name('news-artical-store');
    Route::post('/admin/news-articles/delete',[App\Http\Controllers\Admin\NewsArticlesController::class, 'delete'])->name('news-artical-delete');
    Route::get('/admin/news-articles/edit/{id}',[App\Http\Controllers\Admin\NewsArticlesController::class, 'edit'])->name('news-artical-edit');
    Route::post('/admin/news-articles/update',[App\Http\Controllers\Admin\NewsArticlesController::class, 'update'])->name('news-artical-update');

    Route::get('/admin/investor-relations',[App\Http\Controllers\Admin\InvestorRelationsController::class, 'index'])->name('investor-relations');
    Route::post('/admin/investor-relations/delete',[App\Http\Controllers\Admin\InvestorRelationsController::class, 'delete'])->name('investor-relations-delete');
    Route::get('/admin/investor-relations/add',[App\Http\Controllers\Admin\InvestorRelationsController::class, 'add'])->name('investor-relations-add');
    Route::post('/admin/investor-relations/store',[App\Http\Controllers\Admin\InvestorRelationsController::class, 'store'])->name('investor-relations-store');
    Route::get('/admin/investor-relations/edit/{id}',[App\Http\Controllers\Admin\InvestorRelationsController::class, 'edit'])->name('investor-relations-edit');
    Route::post('/admin/investor-relations/update',[App\Http\Controllers\Admin\InvestorRelationsController::class, 'update'])->name('investor-relations-update');

    Route::get('/admin/projects',[App\Http\Controllers\Admin\ProjectsController::class, 'index'])->name('projects');
    Route::get('/admin/projects/add',[App\Http\Controllers\Admin\ProjectsController::class, 'add'])->name('projects-add');
    Route::post('/admin/projects/store',[App\Http\Controllers\Admin\ProjectsController::class, 'store'])->name('projects-store');
    Route::post('/admin/projects/delete',[App\Http\Controllers\Admin\ProjectsController::class, 'delete'])->name('projects-delete');
    Route::get('/admin/projects/edit/{id}',[App\Http\Controllers\Admin\ProjectsController::class, 'edit'])->name('projects-edit');
    Route::post('/admin/projects/update',[App\Http\Controllers\Admin\ProjectsController::class, 'update'])->name('projects-update');

    ##############User##############
    Route::group(['prefix' => 'admin/users', 'as' => 'admin.user.'], function () {
        Route::get('', ['as' => 'index', 'uses' => 'App\Http\Controllers\Admin\UserController@index']); //Get Client Impact Browse
        Route::get('list', ['as' => 'list', 'uses' => 'App\Http\Controllers\Admin\UserController@getList']);
    });
    Route::get('admin/users/{id}/edit', 'App\Http\Controllers\Admin\UserController@edit')->name("admin.user.edit");
    Route::post('admin/users/update', 'App\Http\Controllers\Admin\UserController@update')->name("admin.user.update");
    Route::post('admin/users/{id}/delete', 'App\Http\Controllers\Admin\UserController@destroy')->name("admin.user.delete");
    ################################

    ##############User##############
    Route::group(['prefix' => 'admin/lead', 'as' => 'admin.lead.'], function () {
        Route::get('', ['as' => 'index', 'uses' => 'App\Http\Controllers\Admin\LeadController@index']); //Get Client Impact Browse
        Route::get('list', ['as' => 'list', 'uses' => 'App\Http\Controllers\Admin\LeadController@getList']);
    });
    Route::get('admin/lead/{id}/edit', 'App\Http\Controllers\Admin\LeadController@edit')->name("admin.lead.edit");
    Route::post('admin/lead/update', 'App\Http\Controllers\Admin\LeadController@update')->name("admin.lead.update");
    Route::post('admin/lead/{id}/delete', 'App\Http\Controllers\Admin\LeadController@destroy')->name("admin.lead.delete");
    ################################
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
