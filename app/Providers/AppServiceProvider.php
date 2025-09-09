<?php

namespace App\Providers;

use App\Models\Course;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $hhcourses = Cache::remember('hh_course_slug', 3600, function () {
        //     return Course::select('id', 'slug', 'course_name')
        //     ->where('slug', 'like', '%japan%')
        //     ->where('slug', 'not like', '%free%')
        //     ->get();
        // });

        $hhcourses = Cache::remember('hh_course_slug', 3600, function () {
            return Course::select('id', 'slug', 'course_name')
            ->where('website', 'kazumi')
            ->get();
        });

        $check_slug_website  = Course::select('id', 'slug', 'course_name', 'website')
            ->where('slug', request()->path())
            ->where('website', 'kazumi')
            ->first();


        View::share('hhcourses', $hhcourses);
        View::share('check_slug_website', $check_slug_website);
    }
}
