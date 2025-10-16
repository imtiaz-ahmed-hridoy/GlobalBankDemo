<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController, adminController, homeController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
$controller_path = 'App\Http\Controllers';
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$controller_path = 'App\Http\Controllers';

Route::get('/',[homeController::class,'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
  // Main Page Route

  // pages
  // routes/web.php

  Route::get('/user_admin', [UserController::class, 'index'])->name('user_admin');

  Route::get('/user_info', [UserController::class, 'userinfo'])->name('user_info');
  Route::get('/banklist', [UserController::class, 'banklist'])->name('banklist');
  Route::post('/banklist', [UserController::class, 'transation'])->name('transation');
  Route::get('/cashout', [UserController::class, 'cashout'])->name('cashout');
  Route::get('/play_Game', [UserController::class, 'play_Game'])->name('play_Game');

  Route::get('/send_transaction', [UserController::class, 'send_transaction'])->name('send_transaction');

  Route::post('/send_transaction', [UserController::class, 'send_transaction_key'])->name('send_transaction_key');

  Route::get('/create_play_game/{id}', [adminController::class, 'create_play_game'])->name('create_play_game');

  Route::post('/create_play_game/{id}', [adminController::class, 'create_play_game_key'])->name('create_play_game_key');

  Route::group(['middleware' => ['role:admin', 'permission:edit']], function () {
    //

    //admin route

    Route::get('/admin_dashboard', [adminController::class, 'index'])->name('admin_dashboard');

    // Route::post('/admindashboard', [adminController::class, 'admin_user_apply'])->name('admindashboard');
    Route::get('/admin_user_list', [adminController::class, 'list'])->name('admin_user_list');

    Route::get('/admin_user_edit/{id}', [adminController::class, 'useredit'])->name('admin_user_edit');

    Route::patch('/update_user/{id}', [adminController::class, 'userupdate'])->name('user_update');

    Route::delete('/user_destroy/{id}', [adminController::class, 'destroy'])->name('user_destroy');

    Route::get('/update_play_game/{id}', [adminController::class, 'update_play_game'])->name('update_play_game');

    Route::patch('/update_play_game/{id}', [adminController::class, 'update_play_game_key'])->name(
      'update_play_game_key'
    );

    Route::get('/get_transaction', [adminController::class, 'get_transaction'])->name('get_transaction');
  });
});
// authentication

Route::get('/login', $controller_path . '\authentications\LoginBasic@index')->name('login');
Route::post('/loginpost', $controller_path . '\authentications\LoginBasic@login')->name('loginpost');
Route::get('/register', $controller_path . '\authentications\LoginBasic@register')->name('signup');

Route::post('/register', [adminController::class, 'admin_user_apply'])->name('register');

Route::post('/logout', $controller_path . '\authentications\LoginBasic@logout')->name('logout');
