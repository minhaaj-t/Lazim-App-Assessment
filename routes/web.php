<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormValidationController;

/*
Web Routes
*/

Route :: get('/',[FormValidationController ::class,'form']);
Route :: post('/',[FormValidationController ::class,'register']);