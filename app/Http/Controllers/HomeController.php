<?php

namespace App\Http\Controllers;
use App\Models\Course;
use App\Models\VideoReviews;
use Illuminate\Http\Request;
use App\Models\CRMReviewLead;
use App\Models\linkedinStories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index(){

    $course = Course::first(); // returns a single model


    //  $videoReview = Cache::remember('video_review_list', 60 * 60 * 24, function () {
    //         return VideoReviews::whereIn('id', function ($query) {
    //             $query->selectRaw('MIN(id)')
    //                 ->from('video_review')
    //                 ->whereNotNull('course_id')
    //                 ->where('course_id', '!=', '')
    //                 ->groupBy('course_id');
    //         })
    //             ->limit(18)
    //             ->get();
    //     });

        $review = CRMReviewLead::
        whereIn('id', function ($query) {
            $query->selectRaw('MIN(id)')
                ->from('lead_reviews')
                ->whereNotNull('lead_id')
                ->where('lead_id', '!=', '')
                ->groupBy('lead_id');
        })
            ->limit(8)
            ->get();
// dd($review);

        // $course = Course::all();
        //  $academy_name = $course->academy;
        $linkdin = linkedinStories::orderBy('id', 'asc')->get();


        $userFeedback = [];
        $userFeedback = Cache::remember('userFeedback__', 60 * 60, function () {
            return $this->getUserFeedback();
        });

        $userFeedback = collect($userFeedback)->map(fn($item) => (object) $item);

 return view('course_review',compact('review', 'linkdin', 'userFeedback','course'));
    }
        public function getUserFeedback($limit = 50, $minCount = 9)
    {

        $feedback = $this->fetchFeedbackByCourse();

        // if ($feedback->count() < $minCount && $academyId) {

        if ($feedback->count() < $minCount) {

            $otherCourses = DB::connection('mysql2')->table('course')
                // ->where('academy_id', $academyId)
                // ->where('crm_course_id', '!=', $crmCourseId)
                ->pluck('crm_course_id');

            foreach ($otherCourses as $otherCourseId) {
                if ($feedback->count() >= $minCount) break;

                $extraFeedback = $this->fetchFeedbackByCourse($otherCourseId);
                $feedback = $feedback->merge($extraFeedback)->unique('email');
            }
        }

        if ($feedback->count() < $minCount) {
            $randomCourses = DB::connection('mysql2')->table('course')
                ->orderBy('id', 'ASC')
                ->take(1)
                ->pluck('crm_course_id');

            foreach ($randomCourses as $randomCourseId) {
                if ($feedback->count() >= $minCount) break;

                $extraFeedback = $this->fetchFeedbackByCourse($randomCourseId);
                $feedback = $feedback->merge($extraFeedback)->unique('email');
            }
        }

        return $feedback->take($limit)->values();
    }

//hii dear
    private function fetchFeedbackByCourse()
    {
        return DB::connection('mysql2')->table('registration2')
            ->join('enrollment', 'enrollment.registration_id', '=', 'registration2.id')
            ->join('course', 'course.id', '=', 'enrollment.course_id')
            // ->where('course.crm_course_id', $crmCourseId)
            ->whereNotNull('registration2.first_name')
            ->where('registration2.first_name', '!=', " ")
            ->whereNotNull('registration2.image')
            ->whereRaw("TRIM(registration2.image) != ''")
            ->where('registration2.image', 'NOT LIKE', '%.pdf')
            ->whereNotNull('registration2.linkedin_url')
            ->where('registration2.linkedin_url', '!=', " ")
            ->where('registration2.linkedin_url', 'LIKE', '%linkedin%')
            ->select(
                'registration2.id',
                'registration2.linkedin_url',
                'registration2.email',
                'registration2.first_name',
                'registration2.image'
            )
            ->get()
            ->unique('email');
    }
}
