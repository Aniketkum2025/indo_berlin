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
        $hhcourses = Cache::remember('hh_course_slug', 3600, function () {
            return Course::select('id', 'slug', 'course_name')
            ->where('slug', 'like', '%japan%')
            ->where('slug', 'not like', '%free%')
            ->get();
        });
        View::share('hhcourses', $hhcourses);
    }
}
