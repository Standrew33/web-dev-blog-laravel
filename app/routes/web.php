<?php

use App\Http\Controllers\PostsController;
use App\Models\Task;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\DB;
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

//Route::get('/', function () {
//    $tasks = DB::table('tasks')->get();
//    return view('welcome', compact('tasks'));
//});

Route::get('hello', function () {
    return view('hello', [
        'name' => 'Alex'
    ]);
});

Route::get('hello2', function () {
    return view('hello')->with('name', 'John');
});

Route::get('hello3', function () {
    $name = 'Alex';
    return view('hello', [
        'name' => $name
    ]);
});

Route::get('hello4', function () {
    $name = 'Alexey';
    return view('hello', compact('name'));
});

Route::get('hello5', function () {
    $tasks = [
        'add task',
        'find_task',
        'review_task'
    ];
    return view('hello', compact('tasks'));
});

//Route::get('/tasks', function () {
//    //$tasks = DB::table('tasks')->get();
//    //$tasks = Task::all();
//    $tasks = Task::incomplete();
//    return view('tasks.index', compact('tasks'));
//});
//
//Route::get('/tasks/{task}', function ($id) {
//    //$task = DB::table('tasks')->find($id);
//    $task = Task::find($id);
//    return view('tasks.show', compact('task'));
//});

//Route::get('/tasks', 'TasksController@index');
//Route::get('/tasks/{task}', 'TasksController@show');

Route::get('tasks',[TasksController::class, 'index']);
Route::get('tasks/{task}',[TasksController::class, 'show']);

Route::get('/', [PostsController::class, 'index']);
Route::get('/posts/{post}', [PostsController::class, 'show']);
