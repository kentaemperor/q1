<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Models\Person;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';//これが追加

Route::get('/home', [AuthorController::class, 'index']);

Route::get('/auth', [AuthorController::class,'check']);
Route::post('/auth', [AuthorController::class,'checkUser']);

Route::get('/softdelete', function () {
  $result = Person::find(1)->delete();
  dd($result);
  if($result){
    return "論理削除されました";
  }

});
