<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page;


Route::get('/', [ Page::class, 'Page' ] );