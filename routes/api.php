<?php

use App\Http\Controllers\cms\EnquiryController;
use Illuminate\Support\Facades\Route;


Route::post('/store-enquiry', [EnquiryController::class, 'store']);
