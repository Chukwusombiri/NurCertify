<?php

use App\Http\Controllers\AdminPagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CourseController;
Use Illuminate\Support\Facades\DB;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about',[PagesController::class, 'about'])->name('about');
Route::get('/team',[PagesController::class, 'team'])->name('team');
Route::get('/contact',[PagesController::class, 'contact'])->name('contact');
Route::post('/contactmail',[PagesController::class,'contactmail'])->name('contactmail');

Route::get('/getResource/{data}',[PagesController::class, 'getResource'])->name('getResource')->middleware('auth');



Route::get('/usersetting',[App\Http\Controllers\DashboardController::class, 'edit'])->name('usersetting');
Route::patch('/usersetting/{user}',[App\Http\Controllers\DashboardController::class, 'update'])->name('usersetting.update');
Route::get('/mycourse',[CourseController::class, 'index'])->name('mycourse');
Route::post('/p',[CourseController::class, 'store'])->name('p');
Route::get('/chat',[PagesController::class, 'chatting'])->name('chat');



Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/admindashboard', function (){

    if (! Gate::allows('seeAdminPages')) {
        abort(403);
    }

    $users = DB::table('users')
    ->whereNotIn('email', ['info@shiziacademy.com'])
    ->orderBy('id','desc')->get();

    $course = Course::orderBy('id','desc')->get();
    return view('adminDashboard')->with(['course'=> $course, 'users' => $users]);
})->middleware('auth')->name('admindashboard');


Route::resource('users','App\Http\Controllers\AdminDashboardController');

Route::resource('courses','App\Http\Controllers\AdminCourseController');

Route::get('/singleemail/{id?}',[AdminPagesController::class,'singleemail'])->name('singleemail');

Route::post('/email',[AdminPagesController::class,'sendmail'])->name('email');

Route::get('/resetpwd',[AdminPagesController::class,'resetpwd'])->name('resetpwd');

Route::patch('/reset',[AdminPagesController::class,'reset'])->name('reset');

require __DIR__.'/auth.php';
