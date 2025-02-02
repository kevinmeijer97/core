<?php

use Rapidez\Core\Http\Controllers\UrlRewriteController;

Route::middleware('web')->group(function () {
    Route::view('cart', 'rapidez::cart.overview')->name('cart');
    Route::view('checkout', 'rapidez::checkout.overview')->name('checkout');
    Route::view('search', 'rapidez::search.overview')->name('search');
    Route::fallback(UrlRewriteController::class);
});
