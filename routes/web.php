<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;

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

Route::get('/',[WelcomeController::class , 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Carousel

Route::get('carousel',[CarouselController::class , 'index'])->name('carousel.index');
Route::get('carousel/create',[CarouselController::class , 'create'])->name('carousel.create');
Route::post('carousel/store',[CarouselController::class , 'store'])->name('carousel.store');
Route::get('carousel/{id}/edit',[CarouselController::class , 'edit'])->name('carousel.edit');
Route::post('carousel/{id}/update',[CarouselController::class , 'update'])->name('carousel.update');
Route::get('carousel/{id}/delete',[CarouselController::class , 'delete'])->name('carousel.delete');

//Service

Route::get('service',[ServiceController:: class , 'index'])->name('service.index');
Route::get('service/create',[ServiceController:: class , 'create'])->name('service.create');
Route::post('service/store',[ServiceController:: class , 'store'])->name('service.store');
Route::get('service/{id}/edit',[ServiceController::class , 'edit'])->name('service.edit');
Route::post('service/{id}/update',[ServiceController::class , 'update'])->name('service.update');
Route::get('service/{id}/delete',[ServiceController::class , 'delete'])->name('service.delete');

//Team

Route::get('team',[TeamController:: class , 'index'])->name('team.index');
Route::get('team/create',[TeamController:: class , 'create'])->name('team.create');
Route::post('team/store',[TeamController:: class , 'store'])->name('team.store');
Route::get('team/{id}/edit',[TeamController::class , 'edit'])->name('team.edit');
Route::post('team/{id}/update',[TeamController::class , 'update'])->name('team.update');
Route::get('team/{id}/delete',[TeamController::class , 'delete'])->name('team.delete');

//client
Route::get('client',[ClientController:: class , 'index'])->name('client.index');
Route::get('client/create',[ClientController:: class , 'create'])->name('client.create');
Route::post('client/store',[ClientController:: class , 'store'])->name('client.store');
Route::get('client/{id}/edit',[ClientController::class , 'edit'])->name('client.edit');
Route::post('client/{id}/update',[ClientController::class , 'update'])->name('client.update');
Route::get('client/{id}/delete',[ClientController::class , 'delete'])->name('client.delete');

//post
Route::get('post',[PostController:: class , 'index'])->name('post.index');
Route::get('post/create',[PostController:: class , 'create'])->name('post.create');
Route::post('post/store',[PostController:: class , 'store'])->name('post.store');
Route::get('post/{id}/edit',[PostController::class , 'edit'])->name('post.edit');
Route::post('post/{id}/update',[PostController::class , 'update'])->name('post.update');
Route::get('post/{id}/delete',[PostController::class , 'delete'])->name('post.delete');

//Contact
Route::get('contact',[ContactController:: class , 'index'])->name('contact.index');
Route::get('contact/create',[ContactController:: class , 'create'])->name('contact.create');
Route::post('contact/store',[ContactController:: class , 'store'])->name('contact.store');
Route::get('contact/{id}/delete',[ContactController::class , 'delete'])->name('contact.delete');

//Category
Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('categories/create' , [CategoryController::class , 'create'])->name('category.create');
Route::post('category/store' , [CategoryController::class , 'store'])->name('category.store');
Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('category/{id}/delete', [CategoryController::class, 'delete'])->name('category.delete');

//Blog
Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/create',[BlogController::class, 'create'])->name('blog.create');
Route::post('blog/store',[BlogController::class , 'store'])->name('blog.store');
Route::get('blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('blog/{id}/update', [BlogController::class, 'update'])->name('blog.update');
Route::get('blog/{id}/delete', [BlogController::class, 'delete'])->name('blog.delete');
