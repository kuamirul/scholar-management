<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

// Landing Page
Route::get('/', function () {return view('welcome');});


Route::get('news/{slug}', \App\Http\Livewire\News::class);


// Admin pages
Route::middleware(['auth', 'admin'])->group(function() {

	Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
		
	//scholars
	Route::get('/scholars', function () {return view('scholars');})->name('scholars');
	Route::get('/scholars/manage-scholars', function () {return view('scholars.manage-scholars');})->name('manage-scholars');
	Route::get('/scholars/upload-document', function () {return view('scholars.upload-document');})->name('upload-document');
	Route::get('/scholars/scholar-invoice', function () {return view('scholars.scholar-invoice');})->name('scholar-invoice');
	Route::get('/scholars/manage-allowance', function () {return view('scholars.manage-allowance');})->name('manage-allowance');
	Route::get('/scholars/manage-scholarship', function () {return view('scholars.manage-scholarship');})->name('manage-scholarship');

	//claims
	Route::get('/claims', function () {return view('claims');})->name('claims');
	Route::get('/claims/download-claim-form', function () {return view('claims.download-claim-form');})->name('download-claim-form');
	Route::get('/claims/manage-claims', function () {return view('claims.manage-claims');})->name('manage-claims');
	Route::get('/claims/print-claim-template', function () {return view('claims.print-claim-template');})->name('print-claim-template');

	// reporting
	Route::get('/reporting', function () {return view('reporting');})->name('reporting');

	// semester
	Route::get('/academic-semester', function () {return view('academic-semester');})->name('academic-semester');
	Route::get('/academic-semester/manage-semester', function () {return view('academic-semester.manage-semester');})->name('manage-semester');
	Route::get('/academic-semester/manage-expenditure', function () {return view('academic-semester.manage-expenditure');})->name('manage-expenditure');

	Route::view('semester', 'semester');
	

	Route::get('news/create', \App\Http\Livewire\NewsCreate::class);


	Route::get('profile/{student_id}', \App\Http\Livewire\Profile::class);

});

// Scholar pages
Route::get('/scholar/dashboard', function () {return view('scholar.dashboard');})->middleware(['auth'])->name('scholar-dashboard');
Route::get('/scholar/profile', function () {return view('scholar.profile');})->middleware(['auth'])->name('scholar-profile');
Route::get('/scholar/claims', function () {return view('scholar.claims');})->middleware(['auth'])->name('scholar-claims');


// Send Email
// Route::get('send-mail', function () {
   
//   $details = [
//       'title' => 'Mail from Online Web Tutor',
//       'body' => 'Test mail sent by Laravel 8 using SMTP.'
//   ];
 
//   Mail::to('kuamirulkuamir@gmail.com')->send(new \App\Mail\SendMail($details));
 
//   dd("Email is Sent, please check your inbox.");
// });


require __DIR__.'/auth.php';
