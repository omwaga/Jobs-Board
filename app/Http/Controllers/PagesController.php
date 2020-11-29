<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
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

        SEOMeta::setTitle('Recruitable Jobs In Kenya');
        SEOMeta::setDescription('Recruitable Jobs In Kenya');
        SEOMeta::addKeyword(['jobs in kenya', 'Accounting, Banking and Insurance jobs']);

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

        SEOMeta::setTitle('Jobs In Kenya');
        SEOMeta::setDescription('Recruitable Jobs In Kenya');

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
        SEOMeta::setDescription($job->job_title.' job in kenya');

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
        $popular_interviews = Interviews::limit(9)->get();

        SEOMeta::setTitle('Interview Questions and Answers');
        SEOMeta::setDescription('Interview Questions and Answers');

        return view('front.interviews', compact('categories', 'interviews', 'popular_interviews'));
    }

    public function interviewSubcategory($slug)
    {
        $page_banner = InterviewCategories::where('slug', $slug)->first();
        $subcategories = InterviewSubcategories::where('category_id', $page_banner->id)->paginate(12);
        $interviews = Interviews::where('category_id',  $page_banner->id)->limit(9)->orderBy('created_at', 'DESC')->get();
        $popular_interviews = Interviews::where('category_id',  $page_banner->id)->limit(9)->get();
        $all_interviews = Interviews::where('category_id',  $page_banner->id)->get();
        $categories = InterviewCategories::get();
        $recent_questions = Interviews::where('category_id',  $page_banner->category_id)->orderBy('created_at', 'DESC')->limit(10)->get();

        SEOMeta::setTitle($page_banner->name . ' - Interview Questions and Answers');
        SEOMeta::setDescription($page_banner->description);

        return view('front.interview-subcategories', compact('subcategories', 'interviews', 'popular_interviews', 'all_interviews', 'page_banner', 'categories', 'recent_questions'));
    }

    public function interviewCategory($name)
    {
        $page_banner = InterviewSubcategories::where('slug', $name)->first();
        $all_interviews = Interviews::where('subcategory_id',  $page_banner->id)->get();
        $categories = InterviewCategories::get();
        $recent_questions = Interviews::where('category_id',  $page_banner->category_id)->orderBy('created_at', 'DESC')->limit(10)->get();

        SEOMeta::setTitle($page_banner->name . ' - Interview Questions and Answers');
        SEOMeta::setDescription($page_banner->description);

        return view('front.interview', compact('all_interviews', 'page_banner', 'categories', 'recent_questions'));
    }

    public function interview($slug)
    {
        $page_banner = Interviews::where('slug', $slug)->first();
        $related_questions = Interviews::where('category_id',  $page_banner->category_id)->paginate(20);
        $recent_questions = Interviews::where('category_id',  $page_banner->category_id)->orderBy('created_at', 'DESC')->limit(10)->get();
        $categories = InterviewCategories::get();

        SEOMeta::setTitle($page_banner->question);
        SEOMeta::setDescription(Str::limit(strip_tags($page_banner->answer), 500));

        return view('front.single-interview', compact('related_questions', 'page_banner', 'categories', 'recent_questions'));
    }

    public function blog()
    {
        $categories = BlogCategory::paginate(12);
        $articles = BlogPost::limit(9)->orderBy('created_at', 'DESC')->get();
        $popular_articles = BlogPost::limit(9)->get();

        SEOMeta::setTitle('Insights');
        SEOMeta::setDescription('Career Insights');

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

        SEOMeta::setTitle($page_banner->name . ' - Interview Questions and Answers');
        SEOMeta::setDescription($page_banner->description);

        return view('front.blog.blog-subcategories', compact('subcategories', 'articles', 'popular_articles', 'all_articles', 'page_banner', 'categories', 'recent_articles'));
    }

    public function blogSubcategory($slug)
    {
        $page_banner = BlogSubcategories::where('slug', $slug)->first();
        $all_articles = BlogPost::where('subcategory_id',  $page_banner->id)->get();
        $articles = BlogPost::orderBy('created_at', 'DESC')->limit(4)->get();
        $categories = BlogCategory::get();

        SEOMeta::setTitle($page_banner->name . ' - Interview Questions and Answers');
        SEOMeta::setDescription($page_banner->description);

        return view('front.blog.articles', compact('all_articles', 'articles', 'page_banner', 'categories'));
    }

    public function article($slug)
    {
        $page_banner = BlogPost::where('slug', $slug)->first();
        $articles = BlogPost::orderBy('created_at', 'DESC')->limit(4)->get();
        $categories = BlogCategory::get();

        SEOMeta::setTitle($page_banner->title);
        SEOMeta::setDescription(Str::limit(strip_tags($page_banner->description), 80));

        return view('front.blog.blog-article', compact('articles', 'page_banner', 'categories'));
    }

}
