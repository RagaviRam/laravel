<?php
use App\Http\Controllers\mainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

/* Route::get('/', function () {
    return view('welcome');
});
Route::get('/greeting', function () {
    return 'welcome';
}); */
/*  Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
}); */
/* Route::get('/', function () {
    return view('form');
}); */
Route::post('/store', [mainController::class, 'store']) -> name('student_details'); 
//Route::get('/nestedView', [mainController::class, 'nestedView']) ;
Route::get('/if', [mainController::class, 'ifCondition']) ;
Route::get('/for', [mainController::class, 'forCondition']) ;
Route::get('/switch', [mainController::class, 'switchCondition']) ;
Route::get('/foreach', [mainController::class, 'foreachCondition']) ;
Route::get('/while', [mainController::class, 'whileCondition']) ;
Route::get('/users', [mainController::class, 'studentLists']) ->name('student_list');





Route::get('/create', [UserController::class, 'create']);
Route::post('/store', [UserController::class, 'store']) -> name('user_details');
Route::get('/list', [UserController::class, 'index']) ->name('list');
Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::put('update/{id}',[UserController::class,'update'])->name('update');
Route::delete('destroy/{id}',[UserController::class,'destroy'])->name('delete');
Route::get('dashboard/create', [UserController::class, 'dashboardCreate'])->name('dashboard');
Route::get('dashboard/user', [UserController::class, 'dashboardUser'])->name('dashboard_user');
Route::get('dashboard/manager', [UserController::class, 'dashboardManager'])->name('dashboard_manager');
Route::get('dashboard/admin', [UserController::class, 'dashboardAdmin'])->name('dashboard_admin');



Route::get('/create', [EmployeeController::class, 'create']) ;/* middleware=>['auth','admin'];  */
Route::post('/store', [EmployeeController::class, 'store']) -> name('employee_details');
Route::get('/list', [EmployeeController::class, 'index']) ->name('list')/* ->middleware("auth") */;
Route::get('edit/{id}', [EmployeeController::class, 'edit'])->name('edit');
Route::put('update/{id}', [EmployeeController::class, 'update'])->name('update');
Route::delete('destroy/{id}',[EmployeeController::class,'destroy'])->name('delete');
Route::get('/upload', [EmployeeController::class,'upload']);



/* Route::get('/create', [ImageController::class, 'create']);
Route::post('/store', [ImageController::class, 'store']) -> name('file.image_details'); */

Route::resource('products', ProductController::class);
Route::get('/dd/new', [ProductController::class, 'new']);









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







