<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Auth;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Vacancy;
use App\Role;
use App\CompanyProfile;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo()
    {
        if(Auth::user()->hasRole('admin'))
        {
            $this->redirectTo =  route('admin.dashboard');
            return $this->redirectTo;
        }
        else
            if(Auth::user()->hasRole('company'))
            {
                $this->redirectTo =  route('admin.dashboard');
                return $this->redirectTo;
            }

            $this->redirectTo =  route('jobseeker.levelSelection');
            return $this->redirectTo;
        }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if(in_array('company', $data))
        {
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'phone_number' => 'required',
                'contact_person' => ['required', 'string', 'max:255'],
                'company_type' => 'required',
                'industry_id' => 'required',
                'country_id' => 'required',
                'city_id' => 'required',
            ]);
        }elseif (in_array('JobPost', $data)) {
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'phone_number' => 'required',
                'contact_person' => ['required', 'string', 'max:255'],
                'company_type' => 'required',
                'industry_id' => 'required',
                'country_id' => 'required',
                'city_id' => 'required',
                'logo' => 'nullable',
                'subscription' => 'required',
                'job_title' => ['required', 'min:3'],
                'category' => 'required',
                'country' => 'required',
                'city' => 'required',
                'job_type' => 'required',
                'salary' => 'required',
                'description' => 'required',
            ]);
        }
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        if(in_array('company', $data))
        {
            CompanyProfile::create([    
                'user_id' => $user->id,            
                'phone_number' => $data['phone_number'],
                'contact_person' => $data['contact_person'],
                'company_type' => $data['company_type'],
                'industry_id' => $data['industry_id'],
                'country_id' => $data['country_id'],
                'city_id' => $data['city_id'],
            ]);

            $role = Role::select('id')->where('name', 'company')->first();
            $user->roles()->attach($role);
        }elseif (in_array('JobPost', $data)) {
            CompanyProfile::create([    
                'user_id' => $user->id,            
                'phone_number' => $data['phone_number'],
                'contact_person' => $data['contact_person'],
                'company_type' => $data['company_type'],
                'industry_id' => $data['industry_id'],
                'country_id' => $data['country_id'],
                'city_id' => $data['city_id'],
            ]);

            Vacancy::create([
                'user_id' => $user->id,
                'subscription' => $data['subscription'],
                'job_title' => $data['job_title'],
                'category' => $data['category'],
                'country' => $data['country'],
                'city' => $data['city'],
                'job_type' => $data['job_type'],
                'salary' => $data['salary'],
                'description' => $data['description'],
            ]);

            $role = Role::select('id')->where('name', 'company')->first();
            $user->roles()->attach($role);
        }

        $role = Role::select('id')->where('name', 'user')->first();
        $user->roles()->attach($role);

        return $user;
    }
}
