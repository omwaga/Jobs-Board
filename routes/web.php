<?php

use Illuminate\Support\Facades\Route;

use RealRashid\SweetAlert\Facades\Alert;


Route::name('front.')->group(function(){
	Route::get('/', 'PagesController@home')->name('home');
	Route::get('/candidates', 'PagesController@candidates')->name('candidates');
	Route::get('/jobs-in-kenya', 'PagesController@vacancies')->name('vacancies');
	Route::get('/job/{slug}', 'PagesController@singlejob')->name('singlejob');
	Route::get('/category/{categorySlug}', 'PagesController@categorySlug')->name('category');
	Route::get('/location/{locationSlug}', 'PagesController@locationSlug')->name('location');
	Route::get('/type/{typeSlug}', 'PagesController@typeSlug')->name('type');
	Route::get('/employer/register', 'PagesController@employerregister')->name('employer.register');
	Route::get('/jobseeker/register', 'PagesController@jobseekerregister')->name('jobseeker.register');
	Route::get('/search', 'PagesController@search')->name('jobseeker.search');
	Route::get('/interview-questions', 'PagesController@interviews')->name('interviews');
	Route::get('/interviews/category/{name}', 'PagesController@interviewCategory')->name('interviewCategory');
	Route::get('/interviews/{slug}', 'PagesController@interviewSubcategory')->name('interviewSubcategory');
	Route::get('/blog', 'PagesController@blog')->name('blog');
	Route::get('/blog/{slug}', 'PagesController@blogCategory')->name('blogSubcategory');
	Route::get('/blog/category/{slug}', 'PagesController@blogSubcategory')->name('blog.articles');
	Route::get('/article/{slug}', 'PagesController@article')->name('blog.article');
	Route::POST('/emails', 'EmailSubscriptionController@store')->name('emails.store');
});

Route::namespace('Jobseeker')->prefix('user')->name('jobseeker.')->group(function(){
	Route::get('/profile', 'PagesController@userProfile')->name('profile');
	Route::get('/level-selection', 'HomeController@levelSelection')->name('levelSelection');
	Route::get('/fresher-profile', 'HomeController@fresherProfile')->name('fresher');
	Route::get('/professional-profile', 'HomeController@professionalProfile')->name('professional');
	Route::get('/vacancies', 'PagesController@vacancies')->name('vacancies');
	Route::get('/job/{slug}', 'PagesController@singleJob')->name('singlejob');
	Route::get('/applications', 'ApplicationController@index')->name('applications.index');
	Route::get('/application/{job}', 'ApplicationController@create')->name('application.create');
	Route::POST('/application/{job}', 'ApplicationController@store')->name('application.store');
	Route::get('/job-application/success', 'ApplicationController@success')->name('application.success');
	Route::resource('details', 'JobseekerDetailController');
	Route::resource('levels', 'UserLevelController');
	Route::resource('educations', 'EducationController');
	Route::resource('internships', 'InternshipController');
	Route::resource('experiences', 'ExperienceController');
	Route::resource('projects', 'ProjectController');
	Route::resource('certifications', 'CertificationController');
	Route::resource('awards', 'AwardController');
	Route::resource('skills', 'SkillController');
	Route::resource('documents', 'DocumentsController');
	Route::get('/fill-details', 'PagesController@fillDetails')->name('fillDetails');
	Route::get('/dashboard', 'HomeController@index')->name('home');
	Route::get('/category/{categorySlug}', 'PagesController@categorySlug')->name('category');
	Route::get('/type/{typeSlug}', 'PagesController@typeSlug')->name('type');
	Route::get('/location/{locationSlug}', 'PagesController@locationSlug')->name('location');
	Route::resource('savedjobs', 'SavedJobsController');
	Route::patch('/user/{id}', 'HomeController@updateUser')->name('updateUser');
});

Route::namespace('Admin')->prefix('recruitment')->name('admin.')->group(function(){
	Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
	Route::get('/companys', 'AdminController@companys')->name('companys');
	Route::resource('/users', 'UsersController');
	Route::resource('/categories', 'CategoryController');
	Route::resource('/industries', 'IndustryController');
	Route::resource('/cities', 'CityController');
	Route::resource('/countries', 'CountryController');
	Route::resource('/companies', 'CompanyTypeController');
	Route::resource('/jobtypes', 'JobTypeController');
	Route::resource('/talents', 'TalentPoolController');
	Route::resource('/postingsubscriptions', 'PostingSubscriptionController');
	Route::resource('vacancies', 'VacancyController');
	Route::patch('vacancy/publish/{id}', 'VacancyController@publish')->name('vacancies.publish');
	Route::get('applications', 'AdminController@applications')->name('applications');
	Route::resource('/interviewCategories', 'InterviewCategoriesController');
	Route::resource('/subcategories', 'InterviewSubcategoriesController');
	Route::resource('/interviews', 'InterviewsController');
	Route::resource('/blogcategories', 'BlogCategoryController');
	Route::resource('/blogsubcategories', 'BlogSubcategoriesController');
	Route::resource('/blogposts', 'BlogPostController');
	Route::get('/applicant/{id}', 'AdminController@applicant')->name('applicant');
});

Route::get('/portfolio', function () {
	Alert::Success('Success!', 'Project Created ')->position('top-right')->toToast();
	return view('welcome');
});

Auth::routes();


