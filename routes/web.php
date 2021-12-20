<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\TaskController;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use MailchimpMarketing;
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
Route::get('ping', function(){

$mailchimp = new \MailchimpMarketing\ApiClient();

$mailchimp->setConfig([
	'apiKey' => config('services.mailchimp.key'),
	'server' => 'us20'
]);

$response = $mailchimp->lists->addListMember('f41dc0ff8b', [
    'email_address' => "Hello@gmail.com",
    'status' => 'subscribed'
]);
ddd($response);

});

Route::get('/', [PostController::class, "index"])->name('home');
Route::get('posts/{post:slug}', [PostController::class, "show"]);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, "store"]);

Route::get('register', [RegisterController::class, "create"])->middleware('guest');
Route::post('register', [RegisterController::class, "store"])->middleware('guest');

Route::get('login', [SessionController::class, "create"])->middleware('guest');
Route::post('login', [SessionController::class, "store"])->middleware('guest');
Route::post('logout', [SessionController::class, "destroy"])->middleware('auth');

