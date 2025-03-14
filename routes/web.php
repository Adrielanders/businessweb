<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;


// Route to display the Login page
Route::get('/login', [AdminController::class, 'showLogin'])->name('login');
Route::post('/login', [AdminController::class, 'login'])->name('login.submit');


// Route for homepage
Route::get('/', [HomeController::class, 'index']);

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

// Route to display the Services page to users
Route::get('/services', [AdminController::class, 'showServices'])->name('services');

// Route to display the Contact page
Route::get('/contact', [AdminController::class, 'showContact'])->name('contact');

// Route to display the Get Involved page
Route::get('/get-involved', [AdminController::class, 'showInvolved'])->name('involved');

// Route to display the Impact page
Route::get('/impact', [AdminController::class, 'showImpact'])->name('impact');

// Routes that require authentication
Route::middleware(['auth'])->group(function () {

    // CMS - Edit About Page
    Route::get('/admin/edit-about', [AdminController::class, 'editAbout'])->name('admin.edit-about');
    Route::post('/admin/update-about', [AdminController::class, 'updateAbout'])->name('admin.update-about');

    // CMS - Edit Home Page
    Route::get('/admin/edit-home', [AdminController::class, 'editHome'])->name('admin.edit-home');
    Route::post('/admin/update-home', [AdminController::class, 'updateHome'])->name('admin.update-home');

    // CMS - Edit Services Page
    Route::get('/admin/edit-services', [AdminController::class, 'editServices'])->name('admin.edit-services');
    Route::post('/admin/update-services', [AdminController::class, 'updateServices'])->name('admin.update-services');

    // CMS - Edit Contact Page
    Route::get('/admin/edit-contact', [AdminController::class, 'editContact'])->name('admin.edit-contact');
    Route::post('/admin/update-contact', [AdminController::class, 'updateContact'])->name('admin.update-contact');

    // CMS - Edit Get Involved Page
    Route::get('/admin/edit-involved', [AdminController::class, 'editInvolved'])->name('admin.edit-involved');
    Route::post('/admin/update-involved', [AdminController::class, 'updateInvolved'])->name('admin.update-involved');

    // CMS - Edit Impact Page
    Route::get('/admin/edit-impact', [AdminController::class, 'editImpact'])->name('admin.edit-impact');
    Route::post('/admin/update-impact', [AdminController::class, 'updateImpact'])->name('admin.update-impact');

    // Admin Dashboard Route
    Route::get('/admin/', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/logout/', [AdminController::class, 'logout'])->name('logout');
});

