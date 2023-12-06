<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;

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
    return view('frontend/menu/main');
});

//User
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Frontend
Route::get('/about-us', [FrontendController::class, 'aboutus'])->name('aboutus');
Route::get('/mision-and-vision', [FrontendController::class, 'misionvision'])->name('misionvision');
Route::get('/product-services', [FrontendController::class, 'productservices'])->name('productservices');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/contact-us', [FrontendController::class, 'contactus'])->name('contact');


//Admin
Route::group(['prefix'=>'admin', 'middleware'=>['admin:admin']], function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:admin'])->group(function(){
    Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
        return view('backend/menu/dashboard');
    })->name('dashboard');
    
    Route::get('/admin/dashboard', [BackendController::class, 'index']);
    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
    
    
    //Backend
    Route::get('/about-us/view', [BackendController::class, 'aboutusView'])->name('aboutus.view');
    Route::get('/about-us/add', [BackendController::class, 'aboutusAdd'])->name('aboutus.add');
    Route::post('/about-us/store', [BackendController::class, 'aboutusStore'])->name('aboutus.store');
    Route::get('/about-us/edit/{id}', [BackendController::class, 'aboutusEdit'])->name('aboutus.edit');
    Route::post('/about-us/update', [BackendController::class, 'aboutusUpdate'])->name('aboutus.update');
    Route::get('/about-us/delete/{id}', [BackendController::class, 'aboutusDelete'])->name('aboutus.delete');

    Route::get('/team/view', [BackendController::class, 'teamView'])->name('team.view');
    Route::get('/team/add', [BackendController::class, 'teamAdd'])->name('team.add');
    Route::post('/team/store', [BackendController::class, 'teamStore'])->name('team.store');
    Route::get('/team/edit/{id}', [BackendController::class, 'teamEdit'])->name('team.edit');
    Route::post('/team/update', [BackendController::class, 'teamUpdate'])->name('team.update');
    Route::get('/team/delete/{id}', [BackendController::class, 'teamDelete'])->name('team.delete');
    
    Route::get('/misionvision/view', [BackendController::class, 'misionvisionView'])->name('misionvision.view');
    Route::get('/misionvision/add', [BackendController::class, 'misionvisionAdd'])->name('misionvision.add');
    Route::post('/misionvision/store', [BackendController::class, 'misionvisionStore'])->name('misionvision.store');
    Route::get('/misionvision/edit/{id}', [BackendController::class, 'misionvisionEdit'])->name('misionvision.edit');
    Route::post('/misionvision/update', [BackendController::class, 'misionvisionUpdate'])->name('misionvision.update');
    Route::get('/about-us/delete/{id}', [BackendController::class, 'misionvisionDelete'])->name('misionvision.delete');

    Route::get('/prodandservices/view', [BackendController::class, 'prodandservicesView'])->name('prodandservices.view');
    Route::get('/prodandservices/add', [BackendController::class, 'prodandservicesAdd'])->name('prodandservices.add');
    
    Route::get('/contact/view', [BackendController::class, 'contactView'])->name('contact.view');
    Route::get('/contact/add', [BackendController::class, 'contactAdd'])->name('contact.add');
    
    Route::get('/blog/view', [BackendController::class, 'blogView'])->name('blog.view');
    Route::get('/blog/add', [BackendController::class, 'blogAdd'])->name('blog.add');
});