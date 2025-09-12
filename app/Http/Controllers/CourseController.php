<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Models\Course;
use App\Models\CRMBatch;
use App\Models\CRMCourse1;
use App\Models\CrmcourseCourse;
use App\Models\Faq;
use App\Models\linkedinStories;
use App\Models\Meta;
use App\Models\See_more;
use App\Models\TitleCity;
use App\Models\Videoreviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CourseController extends Controller
{
    public function index(Request $request, $slug) {

        // if(!str_contains($slug, 'japan')){
        //     return abort(404);
        // }

         $course = Cache::remember('course_slug_' . $slug, 60 * 60, function () use ($slug) {
            return Course::where('slug', '=', $slug)->first();
        });

        if(!$course || $course->website != 'kazumi'){
            return abort(404);
        }

        
        if ($course) {
            $result = Cache::remember('result_slug_' . $course->crm_course_id, 60 * 60, function () use ($course) {

                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://crm.henryharvin.com/portal-new/api/fetch_course_details?crm_course_id=' . urlencode($course->crm_course_id),
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                ));

                $result = curl_exec($curl);

                curl_close($curl);
                return json_decode($result, TRUE);
            });
            $freecourse = null;
            $duration = null;
            $result2 = [];
            if ($result) {
                if ($result[0]['show_on_web'] == 1) {
                    $result2 = Cache::remember('result2_slug_' . $slug, 60 * 60, function () use ($result) {
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                            CURLOPT_URL => 'https://crm.henryharvin.com/api/get_course_module_list.php?id=' . $result[0]['id'],
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_ENCODING => '',
                            CURLOPT_MAXREDIRS => 10,
                            CURLOPT_TIMEOUT => 0,
                            CURLOPT_FOLLOWLOCATION => true,
                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                            CURLOPT_CUSTOMREQUEST => 'GET',
                        ));

                        $result1 = curl_exec($curl);

                        curl_close($curl);
                        return json_decode($result1, TRUE);
                    });
                } else {
                    $result2 = [];
                }

                if (!empty($result[0]['course_duration'])) {
                    $duration = $result[0]['course_duration'];
                } else {
                    $duration = null;
                }
                if (!empty($result[0]['free_course'])) {
                    $freecourse = $result[0]['free_course'];
                } else {
                    $freecourse = null;
                }
            }

            $batch = Cache::remember('batch_slug_' . $course->crm_course_id, 60 * 60, function () use ($course) {
                return Http::get('https://api.henryharvin.com/v1/batches/' . $course->crm_course_id)->json();
            });
            $event = $batch;

            $review = Cache::remember('review_slug_' . $slug, 60, function () use ($course) {
                return $course->review;
            });
            

            $feat = Cache::remember('feat_slug_' . $slug, 60, function () use ($course) {
                return $course->keyfeatures;
            });

            $aboutcourse = Cache::remember('aboutcourse_slug_' . $slug, 60, function () use ($course) {
                return $course->aboutcourse;
            });


            $module = Cache::remember('module_slug_' . $slug, 60, function () use ($course) {
                return $course->module;
            });


            $tools = Cache::remember('tools_slug_' . $slug, 60, function () use ($course) {
                return $course->tool;
            });


            $trainers = Cache::remember('trainers_slug_' . $slug, 60, function () use ($course) {
                return $course->trainer;
            });


            $gallery = Cache::remember('gallery_slug_' . $slug, 60, function () use ($course) {
                return $course->gallery;
            });


            $affiliations = Cache::remember('affiliations_slug_' . $slug, 60, function () use ($course) {
                return $course->affiliation;
            });

            $usps = Cache::remember('usps_slug_' . $slug, 60, function () use ($course) {
                return $course->usp;
            });


            $certificate = Cache::remember('certificate_slug_' . $slug, 60, function () use ($course) {
                return $course->certificate;
            });


            $newcertificateCourse = Cache::remember('newcertificateCourse_slug_' . $slug, 60, function () use ($course) {
                return $course->certificateCourse;
            });

            $process = Cache::remember('process_slug_' . $slug, 60, function () use ($course) {
                return $course->process;
            });

            $batch = Cache::remember('batch_slug' . $slug, 60, function () use ($course) {
                return $course->batch;
            });

            $faqs = Cache::remember('faq_slug_' . $slug, 60, function () use ($slug) {
                return Faq::where('slug', '=', $slug)->get();
            });
            $metas = Cache::remember('meta_slug_' . $slug, 60, function () use ($slug) {
                return Meta::where('slug', '=', $slug)->first();
            });
            $title = Cache::remember('title_slug_' . $slug, 60, function () use ($slug) {
                return TitleCity::where('slug', '=', $slug)->first();
            });


            $logos = Cache::remember('logos_slug_' . $slug, 60, function () use ($course) {
                return $course->logo;
            });


            $testimonials = Cache::remember('testimonials_slug_' . $slug, 60, function () use ($course) {
                return $course->testimonials;
            });

            $seemore = Cache::remember('seemore_slug_' . $slug, 60, function () use ($slug) {
                return See_more::where('slug', '=', $slug)->get();
            });

            $academy_name = Cache::remember('academy_name_slug_' . $slug, 60, function () use ($course) {
                return $course->academy;
            });

            $city_flag = 'non_related_city';


            $skills = Cache::remember('skills_slug_' . $slug, 60, function () use ($course) {
                return $course->skills;
            });


            $jobprofiles = Cache::remember('jobprofiles_slug_' . $slug, 60, function () use ($course) {
                return $course->jobprofiles;
            });


            $project = Cache::remember('project_slug_' . $slug, 60, function () use ($course) {
                return $course->project;
            });


            $alumniplaced = Cache::remember('alumniplaced_slug_' . $slug, 60, function () use ($course) {
                return $course->alumni_placed;
            });


            $alumnireview = Cache::remember('alumnireview_slug_' . $slug, 60, function () use ($course) {
                return $course->alumni_review;
            });


            $upcoming_batches = Cache::remember('upcoming_batches_slug_' . $slug, 60, function () use ($course) {
                return $course->crmcourses()->count();
            });


            $batch_crm = Cache::remember('batch_crm_slug_' . $slug, 60, function () use ($course) {
                return $course->batch_crm;
            });

            $placedlearner = Cache::remember('placedlearner_slug_' . $slug, 60, function () use ($course) {
                return $course->placedLearners()->get();
            });


            $affiliation_academy = Cache::remember('affiliation_academy_slug_' . $slug, 60, function () use ($academy_name) {
                return $academy_name->affiliationImage;
            });

            $academy_wise_course = Cache::remember('academy_wise_course_slug_' . $slug, 60, function () use ($academy_name) {
                return Academy::orderBy('total_enrollment', 'DESC')->where('id', $academy_name->id)->get()->map(function ($query) {
                    $query->setRelation('certificateCourse', $query->certificateCourse);
                    return $query;
                });
            });

            
            $crm_course_course = CrmcourseCourse::where('course_id', $course->id)->pluck('crmcourse_id');
            if (!$crm_course_course->isEmpty()) {
                $crm_coure_id = CRMCourse1::whereIn('id', $crm_course_course)->pluck('crm_course_id');
                if (!$crm_coure_id->isEmpty()) {
                    $batch = CRMBatch::whereIn('course', $crm_coure_id)->pluck('bid');
                }else{
                    $batch = CRMBatch::where('course', $course->crm_course_id)->pluck('bid');
                }
            }else{
                $batch = CRMBatch::where('course', $course->crm_course_id)->pluck('bid');
            }
            

            // Cache::forget('userFeedback__' . $batch);
            $userFeedback = [];
                
            if ($batch) {
                $userFeedback = Cache::remember('userFeedback__' . $batch, 60 * 60, function () use ($course) {
                    return $this->getUserFeedback($course->crm_course_id, $course->academy_id);
                });

                $userFeedback = collect($userFeedback)->map(fn($item) => (object) $item);
            }

            $linkdinData= "";


            $linkdinData = Cache::remember('linkdinData_slug_' . $slug, 60, function () use ($course) {
                return linkedinStories::join('linkedin_stories_course', 'linkedin_stories.id', '=', 'linkedin_stories_course.linkedin_stories_id')->where('linkedin_stories_course.course_id', '=', $course->id)->get();
            });

            $keywords = ['master-', 'masters-in-', 'diploma-', 'post-graduate-program-in-', 'post-graduate-program-'];
            $words = explode('-', $slug);
            $lastWord = end($words);
            $c_slug = preg_replace('/-(course|courses)$/', '', $slug);

            if ($lastWord == 'course' || $lastWord == 'courses') {
                $lastWord = $c_slug.'-'.$lastWord;
                foreach ($keywords as $keyword) {
                    if (strpos($lastWord, $keyword) === 0) {
                        $lastWord = substr($lastWord, strlen($keyword));
                    }
                }
            } else {
                foreach ($keywords as $keyword) {
                    if (strpos($c_slug, $keyword) === 0) {
                        $lastWord = substr($c_slug, strlen($keyword)) . '-course';
                        break;
                    }
                }
            }
            $likeConditions = [];
            foreach (['master','masters', 'masters-in', 'master-in', 'diploma', 'post-graduate-program', 'post-graduate-program-in'] as $keyword) {
                $likeConditions[] = "%$keyword-$c_slug%";
            }
            $likeConditions = array_map(function ($condition) {
                return preg_replace('/-(masters-in|diploma|post-graduate-program)/', '', $condition);
            }, $likeConditions);
            $likeConditions[] = "$lastWord";
            $matchCourses = Cache::remember('matchCourses_slug_'.$slug, 60, function () use ($likeConditions) {
                return Course::with('crmCoursePirce:id,crm_course_id,course_duration,price_inr,price_usd')
                ->select('slug', 'crm_course_id')
                ->where(function ($query) use ($likeConditions) {
                    foreach ($likeConditions as $condition) {
                        $query->orWhere('slug', 'like', $condition);
                    }
                })
                ->get();
            });
            $atualPriceInr = null;
            if($course->crm_course_id){
               $atualPriceInr = CRMCourse1::select('id','crm_course_id','actual_price_inr')->where('crm_course_id', $course->crm_course_id)->first();
            }

            $videoReview = Cache::remember('video_review_slug_' . $slug, 60, function () use ($course) {
                $video_reviews = $course->videoReviews->take(18);
            
                $count = $video_reviews->count();
            
                if ($count < 18) {
                    $remaining = 18 - $count;
            
                    $academy_course_ids = DB::connection('mysql_website')
                        ->table('academy_course')
                        ->where('academy_id', $course->academy_id)
                        ->where('course_id', '!=', $course->id)
                        ->pluck('course_id');
            
                    $academy_wise_course_id = [];
            
                    if ($academy_course_ids->isNotEmpty()) {
                        $additional_reviews = Videoreviews::whereIn('course_id', $academy_course_ids)
                            ->limit($remaining)
                            ->get();
            
                        $video_reviews = $video_reviews->merge($additional_reviews);
                        $academy_wise_course_id = $additional_reviews->pluck('course_id')->toArray();
            
                        $count = $video_reviews->count();
                    }
            
                    if ($count < 18) {
                        $remaining = 18 - $count;
            
                        $excluded_course_ids = array_merge([$course->id], $academy_wise_course_id);
            
                        $global_reviews = VideoReviews::whereNotIn('course_id', $excluded_course_ids)
                            ->inRandomOrder()
                            ->limit($remaining)
                            ->get();
            
                        $video_reviews = $video_reviews->merge($global_reviews);
                    }
                }
            
                return $video_reviews->unique('id')->take(18);
            });
            return view('courses', compact('atualPriceInr', 'matchCourses','jobprofiles', 'newcertificateCourse', 'academy_wise_course', 'affiliation_academy', 'title', 'metas', 'review', 'upcoming_batches', 'academy_name', 'testimonials', 'logos', 'faqs', 'batch', 'process', 'certificate', 'usps', 'course', 'feat', 'affiliations', 'aboutcourse', 'module', 'tools', 'trainers', 'gallery', 'seemore', 'city_flag', 'skills', 'project', 'alumniplaced', 'alumnireview', 'duration', 'result2', 'event', 'placedlearner', 'freecourse','userFeedback','linkdinData', 'videoReview'))->with('i');
        }
    }


    public function getUserFeedback($crmCourseId, $academyId = null, $limit = 50, $minCount = 9)
    {

        $feedback = $this->fetchFeedbackByCourse($crmCourseId);

        if ($feedback->count() < $minCount && $academyId) {
            $otherCourses = DB::connection('mysql2')->table('course')
                ->where('academy_id', $academyId)
                ->where('crm_course_id', '!=', $crmCourseId)
                ->pluck('crm_course_id');
            
            foreach ($otherCourses as $otherCourseId) {
                if ($feedback->count() >= $minCount) break;

                $extraFeedback = $this->fetchFeedbackByCourse($otherCourseId);
                $feedback = $feedback->merge($extraFeedback)->unique('email');
            }
        }

        if ($feedback->count() < $minCount) {
            $randomCourses = DB::connection('mysql2')->table('course')
                ->inRandomOrder()
                ->take(5)
                ->pluck('crm_course_id');

            foreach ($randomCourses as $randomCourseId) {
                if ($feedback->count() >= $minCount) break;

                $extraFeedback = $this->fetchFeedbackByCourse($randomCourseId);
                $feedback = $feedback->merge($extraFeedback)->unique('email');
            }
        }

        return $feedback->take($limit)->values();
    }

    private function fetchFeedbackByCourse($crmCourseId)
    {
        return DB::connection('mysql2')->table('registration2')
            ->join('enrollment', 'enrollment.registration_id', '=', 'registration2.id')
            ->join('course', 'course.id', '=', 'enrollment.course_id')
            ->where('course.crm_course_id', $crmCourseId)
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
