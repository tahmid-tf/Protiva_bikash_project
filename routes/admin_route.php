<?php


// ------------------------------------ Admin Panel --------------------------

use App\Http\Controllers\GalleryController;

Route::get('dashboard', function(){
    return view('admin.admin-panel');
})->name('dashboard');

// ------------------------------------ Admin Panel --------------------------

    // -------------------------------- Blog --------------------------------

    Route::resource('blog',"BlogController");

// -------------------------------- Blog --------------------------------

    // -------------------------------- Activity --------------------------------

    Route::resource('activity', "ActivityController");

// -------------------------------- Activity --------------------------------

    // -------------------------------- Gallery --------------------------------

    Route::resource('gallery', "GalleryController");

// -------------------------------- Gallery --------------------------------
