<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route for homepage
Route::get('/', [HomeController::class, 'index']);

// Route for admin CMS to edit homepage content
Route::get('/admin/edit-home', [AdminController::class, 'editHome'])->name('admin.edit-home');
Route::post('/admin/edit-home', [AdminController::class, 'updateHome'])->name('admin.update-home');



// Display the About Page
Route::get('/about', function () {
    $contentPath = 'about.json'; 
    if (Storage::exists($contentPath)) {
        $content = json_decode(Storage::get($contentPath), true);
    } else {
        $content = ['title' => '', 'heading' => '', 'description' => '', 'team' => []];
    }

    return view('about', compact('content'));
});

// CMS - Edit About Page
Route::get('/admin/edit-about', [AdminController::class, 'editAbout'])->name('admin.edit-about');
Route::post('/admin/update-about', [AdminController::class, 'updateAbout'])->name('admin.update-about');




// Route to show the CMS form for editing services
Route::get('/admin/edit-services', [AdminController::class, 'editServices'])->name('admin.edit-services');

// Route to update the services
Route::post('/admin/update-services', [AdminController::class, 'updateServices'])->name('admin.update-services');

// Route to display the Services page to users
Route::get('/services', [AdminController::class, 'showServices'])->name('services');


Route::get('/contact', [AdminController::class, 'showContact'])->name('contact');

// Route to show the CMS form for editing services
Route::get('/admin/edit-contact', [AdminController::class, 'editContact'])->name('admin.edit-contact');

// Route to update the services
Route::post('/admin/edit-services', [AdminController::class, 'updateContact'])->name('admin.update-contact');

Route::get('/get-involved', [AdminController::class, 'showInvolved'])->name('involved');

Route::get('/impact', [AdminController::class, 'showImpact'])->name('impact');
