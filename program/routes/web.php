<?php
use App\Http\Controllers\mainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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
Route::get('/', function () {
    return view('form');
});
Route::post('/store', [mainController::class, 'store']) -> name('student_details'); 
//Route::get('/nestedView', [mainController::class, 'nestedView']) ;
Route::get('/if', [mainController::class, 'ifCondition']) ;
Route::get('/for', [mainController::class, 'forCondition']) ;
Route::get('/switch', [mainController::class, 'switchCondition']) ;
Route::get('/foreach', [mainController::class, 'foreachCondition']) ;
Route::get('/while', [mainController::class, 'whileCondition']) ;
Route::get('/users', [mainController::class, 'studentLists']) ->name('student_list');





Route::get('/form', [UserController::class, 'create']);
Route::post('/data', [UserController::class, 'store']) -> name('user_details');
Route::get('/userList', [UserController::class, 'index']) ->name('list');
Route::get('/edit', [UserController::class, 'edit']) ->name('edit_form');








