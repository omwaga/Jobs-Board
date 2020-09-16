<?php

use Illuminate\Support\Facades\Route;

use RealRashid\SweetAlert\Facades\Alert;


Route::name('front.')->group(function(){
	Route::get('/', 'PagesController@home')->name('home');
	Route::get('/candidates', 'PagesController@candidates')->name('candidates');
	Route::get('/vacancies', 'PagesController@vacancies')->name('vacancies');
	Route::get('/post', 'PagesController@post')->name('post');
	Route::get('/employer/register', 'PagesController@employerregister')->name('employer.register');
	Route::get('/jobseeker/register', 'PagesController@jobseekerregister')->name('jobseeker.register');
});

Route::namespace('Admin')->prefix('recruitment')->name('admin.')->group(function(){
	Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
	Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store'] ]);
	Route::resource('/categories', 'CategoryController');
	Route::resource('/industries', 'IndustryController');
	Route::resource('/cities', 'CityController');
	Route::resource('/countries', 'CountryController');
	Route::resource('/companies', 'CompanyTypeController');
	Route::resource('/jobtypes', 'JobTypeController');
	Route::resource('/postingsubscriptions', 'PostingSubscriptionController');
	Route::resource('vacancies', 'VacancyController');
});

Route::get('/portfolio', function () {
	Alert::Success('Success!', 'Project Created ')->position('top-right')->toToast();
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

