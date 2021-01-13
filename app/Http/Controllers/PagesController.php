<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use DB;
use Str;
use App\Country;
use App\City;
use App\Industry;
use App\CompanyType;
use App\Category;
use App\JobType;
use App\PostingSubscription;
use App\Vacancy;
use App\InterviewCategories;
use App\InterviewSubcategories;
use App\Interviews;
use App\BlogPost;
use App\BlogCategory;
use App\BlogSubcategories;

class PagesController extends Controller
{
    public function home()
    {
        $vacancies = Vacancy::where('status', 'published')->orderBy('created_at', 'DESC')->paginate(10);
        $top_categories1 = Category::all()->random(4);
        $top_categories2 = Category::all()->random(4);
        $top_categories3 = Category::all()->random(4);
        $top_categories4 = Category::all()->random(4);
        $articles = BlogPost::orderBy('created_at', 'DESC')->limit(4)->get();
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

        SEOMeta::setTitle('Recruitable - Latest Jobs in Kenya');
        SEOMeta::setDescription(' Search for jobs, prepare for job interviews read career advice and sign up for alerts on the latest vacancies from top international and local companies.');
        SEOMeta::addKeyword(['Recruitable', 'jobs in kenya', 'job application letter', 'job vacancies in kenya', 'latest jobs in kenya', 'job opportuinities in kenya', 'job sites in kenya', 'careers kenya', 'careers in kenya', 'interview questions', 'interview questions and answers', 'interview preparation', 'common interview questions', 'career advice', 'interview']);
        SEOMeta::addMeta('jobs:jobs', 'Find the best job vacancies in kenya', 'property');
        OpenGraph::setTitle('Jobs in Kenya');
        OpenGraph::setDescription('Search  and apply for the latest jobs in kenya');
        OpenGraph::addProperty('type', 'WebPage');
        OpenGraph::addProperty('locale', 'en-ke');
        OpenGraph::addProperty('locale:alternate', ['en-ke', 'en-ke']);

        return view('front.index', compact('vacancies', 'top_categories1', 'top_categories2', 'top_categories3', 'top_categories4', 'categories', 'locations', 'job_types', 'articles'));
    }


    public function candidates()
    {
    	return view('front.candidates');
    }


    public function vacancies()
    {
        $vacancies = Vacancy::where('status', 'published')->orderBy('created_at', 'DESC')->paginate(15);
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();
        $top_categories1 = Category::all()->random(4);
        $top_categories2 = Category::all()->random(4);
        $top_categories3 = Category::all()->random(4);
        $top_categories4 = Category::all()->random(4);

        SEOMeta::setTitle('Jobs vacancies in Kenya');
        SEOMeta::setDescription('Search and apply for job opportuinities in Kenya');
        SEOMeta::addKeyword(['apply for jobs', 'jobs in kenya', 'job application letter', 'job vacancies in kenya', 'latest jobs in kenya', 'job opportuinities in kenya', 'job sites in kenya', 'careers kenya', 'careers in kenya', 'interview questions', 'interview questions and answers', 'interview preparation', 'common interview questions', 'career advice', 'interview']);
        SEOMeta::addMeta('jobs:jobs', 'Find the best job vacancies in kenya', 'property');
        OpenGraph::setTitle('Job vacancies in Kenya');
        OpenGraph::setDescription('Search and apply for the latest job vacancies in kenya');
        OpenGraph::addProperty('type', 'Page');
        OpenGraph::addProperty('locale', 'en-ke');
        OpenGraph::addProperty('locale:alternate', ['en-ke', 'en-ke']);

        return view('front.vacancies', compact('vacancies', 'top_categories1', 'top_categories2', 'top_categories3', 'top_categories4', 'categories', 'locations', 'job_types'));
    }

    public function singlejob($slug)
    {
        $job = Vacancy::where('slug', '=', $slug)->first();
        $page_banner = Vacancy::where('slug', '=', $slug)->first();
        $related_jobs = Vacancy::orderBy('created_at', 'DESC')->limit(8)->get();
        $similar_jobs = Vacancy::orderBy('created_at', 'DESC')->limit(8)->get();
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();


        SEOMeta::setTitle($job->job_title);
        SEOMeta::setDescription($job->job_title.' job');
        SEOMeta::addKeyword([$job->job_title, $job->postcategory->name.' jobs', $job->postcategory->name.' jobs in kenya', 'jobs in kenya', 'job application letter', 'job vacancies in kenya', 'latest jobs in kenya', 'job opportuinities in kenya', 'job sites in kenya', 'careers kenya', 'careers in kenya']);
        SEOMeta::addMeta('jobpost:title', $job->job_title, 'property');
        SEOMeta::addMeta('jobpost:category', $job->postcategory->name, 'property');
        OpenGraph::setTitle($job->job_title);
        OpenGraph::setDescription($job->description);
        OpenGraph::addProperty('type', 'job');
        OpenGraph::addProperty('locale', 'en-ke');
        OpenGraph::addProperty('locale:alternate', ['en-ke', 'en-ke']);

        return view('front.single-job', compact('related_jobs', 'page_banner', 'categories', 'locations', 'job_types', 'job', 'similar_jobs'));
    }

    public function categorySlug($categorySlug)
    {
        $categoryId = Category::where('slug', $categorySlug)->value('id');
        $category= Category::where('slug', $categorySlug)->first();
        $page_banner = Category::where('slug', $categorySlug)->first();
        $vacancies = Vacancy::where([['category', $categoryId],['status', 'published']])->orderBy('created_at', 'DESC')->paginate(15);
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

        SEOMeta::setTitle($page_banner->name.' Jobs in Kenya');
        SEOMeta::setDescription($category->description);
        SEOMeta::addKeyword([$page_banner->name, $page_banner->name.' jobs', $page_banner->name.' jobs in kenya', 'jobs in kenya', 'job application letter', 'job vacancies in kenya', 'latest jobs in kenya', 'job opportuinities in kenya', 'job sites in kenya', 'careers kenya', 'careers in kenya']);
        SEOMeta::addMeta('jobs:category', $page_banner->name.' jobs', 'property');
        OpenGraph::setTitle($page_banner->name);
        OpenGraph::setDescription($page_banner->description);
        OpenGraph::addProperty('type', 'Category');
        OpenGraph::addProperty('locale', 'en-ke');
        OpenGraph::addProperty('locale:alternate', ['en-ke', 'en-ke']);

        return view('front.categories', compact('vacancies', 'page_banner', 'categories', 'locations', 'job_types'));
    }

    public function locationSlug($locationSlug)
    {
        $locationId = City::where('slug', $locationSlug)->value('id');
        $location = City::where('slug', $locationSlug)->first();
        $vacancies = Vacancy::where([['city', $locationId],['status', 'published']])->orderBy('created_at', 'DESC')->paginate(15);
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();

        SEOMeta::setTitle(' Jobs in '. $location->name);
        SEOMeta::setDescription($location->description);
        SEOMeta::addKeyword([$location->name.' county jobs', 'jobs in '.$location->name, 'jobs in kenya', 'job application letter', 'job vacancies in kenya', 'latest jobs in kenya', 'job opportuinities in kenya', 'job sites in kenya', 'careers kenya', 'careers in kenya']);
        SEOMeta::addMeta('jobs:location', 'jobs in '.$location->name);
        OpenGraph::setTitle('Job vacancies in '.$location->name);
        OpenGraph::setDescription($location->description);
        OpenGraph::addProperty('type', 'location');
        OpenGraph::addProperty('locale', 'en-ke');
        OpenGraph::addProperty('locale:alternate', ['en-ke', 'en-ke']);

        return view('front.locations', compact('vacancies', 'categories', 'locations', 'job_types'));
    }

    public function typeSlug($typeSlug)
    {
        $typeId = JobType::where('slug', $typeSlug)->value('id');
        $type = JobType::where('slug', $typeSlug)->first();
        $vacancies = Vacancy::where([['job_type', $typeId ],['status', 'published']])->orderBy('created_at', 'DESC')->paginate(15);
        $categories = Category::all();
        $locations = City::all();
        $job_types = JobType::all();


        SEOMeta::setTitle($type->name. ' Jobs in Kenya');
        SEOMeta::setDescription($type->description);
        SEOMeta::addKeyword([$type->name.' jobs', $type->name.' jobs in kenya', 'jobs in kenya', 'job application letter', 'job vacancies in kenya', 'latest jobs in kenya', 'job opportuinities in kenya', 'job sites in kenya', 'careers kenya', 'careers in kenya']);
        SEOMeta::addMeta('jobs:type', $type->name.' jobs', 'property');
        OpenGraph::setTitle($type->name. ' jobs in kenya');
        OpenGraph::setDescription($type->description);
        OpenGraph::addProperty('type', 'job type');
        OpenGraph::addProperty('locale', 'en-ke');
        OpenGraph::addProperty('locale:alternate', ['en-ke', 'en-ke']);

        return view('front.job-types', compact('vacancies', 'categories', 'locations', 'job_types'));
    }

    public function employerregister()
    {
        $countries = DB::table('countries')->pluck("name","id");
        $cities = City::all();
        $industries = Industry::all();
        $company_types =  CompanyType::all();

        return view('auth.employer-register', compact('countries', 'cities', 'industries', 'company_types'));
    }

    public function jobseekerregister()
    {
        return view('auth.jobseeker-register');
    }

    public function search(Request $request)
    {
        if($request->search === null && $request->category === null && $request->location === null && $request->job_type === null)
        {
            $vacancies = Vacancy::orderBy('created_at', 'DESC')->paginate(15);
            $categories = Category::all();
            $locations = City::all();
            $job_types = JobType::all();
            $top_categories1 = Category::all()->random(4);
            $top_categories2 = Category::all()->random(4);
            $top_categories3 = Category::all()->random(4);
            $top_categories4 = Category::all()->random(4);

            SEOMeta::setTitle('Jobs In Kenya');

            return view('front.search-result', compact('vacancies', 'top_categories1', 'top_categories2', 'top_categories3', 'top_categories4', 'categories', 'locations', 'job_types'));
        }
        else if($request->search !== null && $request->category === null && $request->location === null && $request->job_type === null)
        {
            $vacancies = Vacancy::where('job_title', 'LIKE', "%{$request->search}%")->orderBy('created_at', 'DESC')->paginate(15);
            $categories = Category::all();
            $locations = City::all();
            $job_types = JobType::all();
            $top_categories1 = Category::all()->random(4);
            $top_categories2 = Category::all()->random(4);
            $top_categories3 = Category::all()->random(4);
            $top_categories4 = Category::all()->random(4);

            SEOMeta::setTitle('Jobs In Kenya');

            return view('front.search-result', compact('vacancies', 'top_categories1', 'top_categories2', 'top_categories3', 'top_categories4', 'categories', 'locations', 'job_types'));
        }
        else if($request->category !== null && $request->search === null && $request->location === null && $request->job_type === null)
        {
            $vacancies = Vacancy::where('category', $request->category)->orderBy('created_at', 'DESC')->paginate(15);
            $categories = Category::all();
            $locations = City::all();
            $job_types = JobType::all();
            $top_categories1 = Category::all()->random(4);
            $top_categories2 = Category::all()->random(4);
            $top_categories3 = Category::all()->random(4);
            $top_categories4 = Category::all()->random(4);

            SEOMeta::setTitle('Jobs In Kenya');

            return view('front.search-result', compact('vacancies', 'top_categories1', 'top_categories2', 'top_categories3', 'top_categories4', 'categories', 'locations', 'job_types'));
        }
        else if($request->location !== null  && $request->category === null && $request->search === null && $request->job_type === null)
        {
            $vacancies = Vacancy::where('city', $request->location)->orderBy('created_at', 'DESC')->paginate(15);
            $categories = Category::all();
            $locations = City::all();
            $job_types = JobType::all();
            $top_categories1 = Category::all()->random(4);
            $top_categories2 = Category::all()->random(4);
            $top_categories3 = Category::all()->random(4);
            $top_categories4 = Category::all()->random(4);

            SEOMeta::setTitle('Jobs In Kenya');

            return view('front.search-result', compact('vacancies', 'top_categories1', 'top_categories2', 'top_categories3', 'top_categories4', 'categories', 'locations', 'job_types'));  
        }
        else if($request->job_type !== null && $request->category === null && $request->location === null && $request->search === null)
        {
            $vacancies = Vacancy::where('job_type', $request->job_type)->orderBy('created_at', 'DESC')->paginate(15);
            $categories = Category::all();
            $locations = City::all();
            $job_types = JobType::all();
            $top_categories1 = Category::all()->random(4);
            $top_categories2 = Category::all()->random(4);
            $top_categories3 = Category::all()->random(4);
            $top_categories4 = Category::all()->random(4);

            SEOMeta::setTitle('Jobs In Kenya');

            return view('front.search-result', compact('vacancies', 'top_categories1', 'top_categories2', 'top_categories3', 'top_categories4', 'categories', 'locations', 'job_types')); 
        }
    }

    public function interviews()
    {
        $categories = InterviewCategories::paginate(12);
        $interviews = Interviews::limit(9)->orderBy('created_at', 'DESC')->get();
        $popular_interviews = Interviews::all()->random(9);

        SEOMeta::setTitle('Top Interview Questions and Answers');
        SEOMeta::setDescription('Interview Questions and Answers');
        SEOMeta::addKeyword(['interview answers', 'interviews in kenya', 'interview questions', 'interview questions in Kenya', 'interview questions and answers', 'interview preparation', 'common interview questions']);
        SEOMeta::addMeta('interviews:interviews', 'Best interview questions and answers');
        OpenGraph::setTitle('Top interview questions and answers');
        OpenGraph::setDescription('prepare for your interview  with the best interview questions and answers');
        OpenGraph::addProperty('type', 'interviews');
        OpenGraph::addProperty('locale', 'en-ke');
        OpenGraph::addProperty('locale:alternate', ['en-ke', 'en-ke']);

        return view('front.interviews', compact('categories', 'interviews', 'popular_interviews'));
    }

    public function interviewSubcategory($slug)
    {
        $page_banner = InterviewCategories::where('slug', $slug)->first();
        $subcategories = InterviewSubcategories::where('category_id', $page_banner->id)->paginate(12);
        $interviews = Interviews::where('category_id',  $page_banner->id)->limit(9)->orderBy('created_at', 'DESC')->get();
        $popular_interviews = Interviews::where('category_id',  $page_banner->id)->limit(9)->get();
        $all_interviews = Interviews::where('category_id',  $page_banner->id)->paginate(20);
        $categories = InterviewCategories::get();
        $recent_questions = Interviews::where('category_id',  $page_banner->id)->orderBy('created_at', 'DESC')->limit(10)->get();

        SEOMeta::setTitle('Top '.$page_banner->name . ' Interview Questions and Answers');
        SEOMeta::setDescription($page_banner->description);
        SEOMeta::addKeyword([$page_banner->name, $page_banner->name.' interview questions', $page_banner->name. ' interview preparation', 'interview for '.$page_banner->name, 'interview questions', 'interview questions and answers', 'interview preparation', 'common interview questions']);
        SEOMeta::addMeta('interview:category', $page_banner->name.' job interview', 'property');
        OpenGraph::setTitle($page_banner->name.' interview questions');
        OpenGraph::setDescription($page_banner->description);
        OpenGraph::addProperty('type', 'category');
        OpenGraph::addProperty('locale', 'en-ke');
        OpenGraph::addProperty('locale:alternate', ['en-ke', 'en-ke']);

        return view('front.interview-subcategories', compact('subcategories', 'interviews', 'popular_interviews', 'all_interviews', 'page_banner', 'categories', 'recent_questions'));
    }

    public function interviewCategory($name)
    {
        $page_banner = InterviewSubcategories::where('slug', $name)->first();
        $all_interviews = Interviews::where('subcategory_id',  $page_banner->id)->paginate(20);
        $categories = InterviewCategories::get();
        $recent_questions = Interviews::where('category_id',  $page_banner->category_id)->orderBy('created_at', 'DESC')->limit(10)->get();

        SEOMeta::setTitle('Top '.$page_banner->name . ' Interview Questions and Answers');
        SEOMeta::setDescription($page_banner->description);
        SEOMeta::addKeyword([$page_banner->name, $page_banner->name.' interview questions', $page_banner->name. ' interview preparation', 'interview for '.$page_banner->name, 'interview questions', 'interview questions and answers', 'interview preparation', 'common interview questions']);
        SEOMeta::addMeta('interview:category', $page_banner->name.' job interview', 'property');
        OpenGraph::setTitle($page_banner->name.' interview questions');
        OpenGraph::setDescription($page_banner->description);
        OpenGraph::addProperty('type', 'category');
        OpenGraph::addProperty('locale', 'en-ke');
        OpenGraph::addProperty('locale:alternate', ['en-ke', 'en-ke']);

        return view('front.interview', compact('all_interviews', 'page_banner', 'categories', 'recent_questions'));
    }

    public function interview($slug)
    {
        $page_banner = Interviews::where('slug', $slug)->first();
        $related_questions = Interviews::where('category_id',  $page_banner->category_id)->paginate(20);
        $recent_questions = Interviews::where('category_id',  $page_banner->category_id)->orderBy('created_at', 'DESC')->limit(10)->get();
        $categories = InterviewCategories::get();

        SEOMeta::setTitle($page_banner->question);
        SEOMeta::setDescription(Str::limit(strip_tags($page_banner->answer), 100));
        SEOMeta::addKeyword([$page_banner->question, 'interview questions', 'interview questions and answers', 'interview preparation', 'common interview questions']);
        SEOMeta::addMeta('interview:question', $page_banner->question, 'property');
        OpenGraph::setTitle($page_banner->question);
        OpenGraph::setDescription(Str::limit(strip_tags($page_banner->answer), 100));
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'en-ke');
        OpenGraph::addProperty('locale:alternate', ['en-ke', 'en-ke']);

        return view('front.single-interview', compact('related_questions', 'page_banner', 'categories', 'recent_questions'));
    }

    public function blog()
    {
        $categories = BlogCategory::paginate(12);
        $articles = BlogPost::limit(9)->orderBy('created_at', 'DESC')->get();
        $popular_articles = BlogPost::limit(9)->get();

        SEOMeta::setTitle('Career Advice');
        SEOMeta::setDescription('Career Insights');
        SEOMeta::addKeyword(['insights', 'careers', 'jobs in kenya', 'job application letter', 'job vacancies in kenya', 'latest jobs in kenya', 'job opportuinities in kenya', 'job sites in kenya', 'careers kenya', 'careers in kenya', 'interview questions', 'interview questions and answers', 'interview preparation', 'common interview questions', 'career advice', 'interview']);
        OpenGraph::setTitle('Career Advice');
        OpenGraph::setDescription('Best career advice for your next job opportuinity');
        OpenGraph::addProperty('type', 'blog');
        OpenGraph::addProperty('locale', 'en-ke');
        OpenGraph::addProperty('locale:alternate', ['en-ke', 'en-ke']);

        return view('front.blog.blog-articles', compact('categories', 'articles', 'popular_articles'));
    }

    public function blogCategory($slug)
    {
        $page_banner = BlogCategory::where('slug', $slug)->first();
        $subcategories = BlogSubcategories::where('category_id', $page_banner->id)->paginate(12);
        $articles = BlogPost::where('category_id',  $page_banner->id)->limit(9)->orderBy('created_at', 'DESC')->get();
        $popular_articles = BlogPost::where('category_id',  $page_banner->id)->limit(9)->get();
        $all_articles = BlogPost::where('category_id',  $page_banner->id)->get();
        $categories = BlogCategory::get();
        $recent_articles = BlogPost::orderBy('created_at', 'DESC')->limit(4)->get();

        SEOMeta::setTitle($page_banner->name . ' - Career Advice');
        SEOMeta::setDescription($page_banner->description);
        SEOMeta::addKeyword([$page_banner->name, $page_banner->name.' career advice', $page_banner->name.' jobs']);
        SEOMeta::addMeta('career:category', $page_banner->name, 'property');
        OpenGraph::setTitle($page_banner->name . ' - Career Advice');
        OpenGraph::setDescription($page_banner->description);
        OpenGraph::addProperty('type', 'category');
        OpenGraph::addProperty('locale', 'en-ke');
        OpenGraph::addProperty('locale:alternate', ['en-ke', 'en-ke']);

        return view('front.blog.blog-subcategories', compact('subcategories', 'articles', 'popular_articles', 'all_articles', 'page_banner', 'categories', 'recent_articles'));
    }

    public function blogSubcategory($slug)
    {
        $page_banner = BlogSubcategories::where('slug', $slug)->first();
        $all_articles = BlogPost::where('subcategory_id',  $page_banner->id)->get();
        $articles = BlogPost::orderBy('created_at', 'DESC')->limit(4)->get();
        $categories = BlogCategory::get();

        SEOMeta::setTitle($page_banner->name . ' - Career Advice');
        SEOMeta::setDescription($page_banner->description);
        SEOMeta::addKeyword([$page_banner->name, $page_banner->name.' career advice', $page_banner->name.' careers']);
        SEOMeta::addMeta('career:category', $page_banner->name, 'property');
        SEOMeta::addMeta('career:category', $page_banner->name, 'property');
        OpenGraph::setTitle($page_banner->name . ' - Career Advice');
        OpenGraph::setDescription($page_banner->description);
        OpenGraph::addProperty('type', 'category');
        OpenGraph::addProperty('locale', 'en-ke');
        OpenGraph::addProperty('locale:alternate', ['en-ke', 'en-ke']);

        return view('front.blog.articles', compact('all_articles', 'articles', 'page_banner', 'categories'));
    }

    public function article($slug)
    {
        $page_banner = BlogPost::where('slug', $slug)->first();
        $articles = BlogPost::orderBy('created_at', 'DESC')->limit(4)->get();
        $categories = BlogCategory::get();

        SEOMeta::setTitle($page_banner->title);
        SEOMeta::setDescription(Str::limit(strip_tags($page_banner->description), 80));
        SEOMeta::addKeyword([$page_banner->title]);
        SEOMeta::addMeta('career:category', $page_banner->category->name, 'property');
        SEOMeta::addMeta('career:category', $page_banner->name, 'property');
        OpenGraph::setTitle($page_banner->title);
        OpenGraph::setDescription(strip_tags($page_banner->description), 80);
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'en-ke');
        OpenGraph::addProperty('locale:alternate', ['en-ke', 'en-ke']);

        return view('front.blog.blog-article', compact('articles', 'page_banner', 'categories'));
    }

}
