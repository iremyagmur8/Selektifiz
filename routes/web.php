<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;




Route::get('/',[HomepageController::class,'index'])->name('index')->defaults('page',2);
Route::get('/ne-yapiyoruz',[HomepageController::class,'neyapiyoruz'])->name('neyapiyoruz')->defaults('page',3);
Route::get('/projects/{title}/{id}',[HomepageController::class,'post'])->name('post')->defaults('page',6);
Route::get('/blog',[HomepageController::class,'blog'])->name('blog')->defaults('page',8);
Route::get('/blog/{title}/{id}',[HomepageController::class,'blogDetail'])->name('blogDetail')->defaults('page',8);


require __DIR__.'/auth.php';
require __DIR__.'/solaris.php';
