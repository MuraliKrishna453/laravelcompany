<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'CompanyController@industries');
Route::get('/industry/section/{section}', 'CompanyController@industryCompanies');
Route::get('/business/{slug}', 'CompanyController@company');
Route::get('/create', 'CompanyController@create');
Route::post('/industry', 'CompanyController@postIndustry');
Route::post('/company', 'CompanyController@postCompany');


