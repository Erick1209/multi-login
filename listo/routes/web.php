<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Rutas de autenticación de administradores

Route::get('admin_login', 'AdminAuth\LoginController@showLoginForm');
Route::post('admin_login', 'AdminAuth\LoginController@login');
Route::post('admin_logout', 'AdminAuth\LoginController@logout');
Route::post('admin_password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('admin_password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('admin_password/reset', 'AdminAuth\ResetPasswordController@reset');
Route::get('admin_password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

// ******************** //

Route::get('applicant_login', 'ApplicantAuth\LoginController@showLoginForm');
Route::post('applicant_login', 'ApplicantAuth\LoginController@login');
Route::post('applicant_logout', 'ApplicantAuth\LoginController@logout');
Route::post('applicant_password/email', 'ApplicantAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('applicant_password/reset', 'ApplicantAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('applicant_password/reset', 'ApplicantAuth\ResetPasswordController@reset');
Route::get('applicant_password/reset/{token}', 'ApplicantAuth\ResetPasswordController@showResetForm');
Route::get('applicant_register', 'ApplicantAuth\RegisterController@showRegistrationForm');
Route::post('applicant_register', 'ApplicantAuth\RegisterController@register');

Route::get('/home', 'HomeController@index');

Route::get('/admin_home', 'AdminHomeController@index');

Route::get('/applicant_home', 'ApplicantHomeController@index');
