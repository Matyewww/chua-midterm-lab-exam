<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\comment_replies;
use App\Models\post_comments;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Database\Eloquent\Model;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', 'UserController'::class);
