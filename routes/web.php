<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/cdn-cgi/rum/${id}',function (){
    
});

// contact
Route::get('/contact', function ()  {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');



// branches
Route::get('/branches', function ()  {
    return view('branches');
});

Route::get('/branches/{name}', [BranchController::class, 'show'])->name('branches.show');

// about
Route::get('/about', function ()  {
    return view('about');
});

// Branches review 
Route::get('/branch_overview', function(){
    return view('branch_overview');
});

//CSI Project
Route::get('/csi-project', function(){
    return view('csi-project');
});

//Promotions
Route::get('/promotions', function () {
    return view('promotions');
});

//Apply/Careers
Route::get('/apply', function () {
    return view('apply');
});