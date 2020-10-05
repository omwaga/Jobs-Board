<?php

use Illuminate\Support\Facades\Route;

use RealRashid\SweetAlert\Facades\Alert;


Route::name('front.')->group(function(){
	Route::get('/', 'PagesController@home')->name('home');
	Route::get('/candidates', 'PagesController@candidates')->name('candidates');
	Route::get('/vacancies', 'PagesController@vacancies')->name('vacancies');
	Route::get('/post', 'PagesController@post')->name('post');
	Route::get('/job/{slug}', 'PagesController@singlejob')->name('singlejob');
	Route::get('/category/{categorySlug}', 'PagesController@categorySlug')->name('category');
	Route::get('/location/{locationSlug}', 'PagesController@locationSlug')->name('location');
	Route::get('/type/{typeSlug}', 'PagesController@typeSlug')->name('type');
	Route::get('/employer/register', 'PagesController@employerregister')->name('employer.register');
	Route::get('/jobseeker/register', 'PagesController@jobseekerregister')->name('jobseeker.register');
});

Route::namespace('Jobseeker')->prefix('user')->name('jobseeker.')->group(function(){
	Route::get('/profile', 'PagesController@userProfile')->name('profile');
	Route::get('/level-selection', 'HomeController@levelSelection')->name('levelSelection');
	Route::get('/fresher-profile', 'HomeController@fresherProfile')->name('fresherProfile');
	Route::get('/professional-profile', 'HomeController@professionalProfile')->name('professionalProfile');
	Route::get('/vacancies', 'PagesController@vacancies')->name('vacancies');
	Route::get('/job/{slug}', 'PagesController@singleJob')->name('singlejob');
	Route::resource('applications', 'ApplicationController');
	Route::resource('details', 'JobseekerDetailController');
	Route::resource('educations', 'EducationController');
	Route::resource('internships', 'InternshipController');
	Route::resource('projects', 'ProjectController');
	Route::get('/fill-details', 'PagesController@fillDetails')->name('fillDetails');
	Route::get('/dashboard', 'HomeController@index')->name('home');
	Route::get('/category/{categorySlug}', 'PagesController@categorySlug')->name('category');
});

Route::namespace('Admin')->prefix('recruitment')->name('admin.')->group(function(){
	Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
	Route::resource('/users', 'UsersController');
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


