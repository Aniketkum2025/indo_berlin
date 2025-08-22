<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Placedstudent;

class PlacedstudentshowController extends Controller
{
    /**
     * Display a listing of placed students with course filtering
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     // Get distinct courses for filter dropdown
    //     $groupCourse = Placedstudent::select('course')
    //                     ->whereNull('deleted_at')
    //                     ->groupBy('course')
    //                     ->get();

    //     // Filter placed students based on course selection
    //     $placedstudent = Placedstudent::when($request->course_id, function($query) use ($request) {
    //                         $query->whereIn('course', (array)$request->course_id);
    //                     })
    //                     ->orderBy('id', 'DESC')
    //                     ->get();

    //     return view('placed_student', [
    //         'placedstudent' => $placedstudent,
    //         'groupCourse' => $groupCourse,
    //         'i' => 0 // Initialize counter if needed for the view
    //     ]);
    // }
public function index(Request $request)
{
    // Get distinct Japanese courses for filter dropdown
    $groupCourse = Placedstudent::select('course')
                    ->whereNull('deleted_at')
                    ->where('course', 'like', 'Japanese%')
                    // ->where('course', 'like', 'post%')

                    
                    ->groupBy('course')
                    ->get();

    // Filter placed students based on course selection
    // $placedstudent = Placedstudent::when($request->course_id, function($query) use ($request) {
    //                     $query->whereIn('course', (array)$request->course_id);
    //                 })
    //                 ->orderBy('id', 'DESC')
    //                 ->get();
    // To this:
                $placedstudent = Placedstudent::whereNull('deleted_at')
                                ->where('course', 'like', 'Japanese%');
                                
                if ($request->course_id) {
                    $placedstudent->whereIn('course', (array)$request->course_id);
                }

                $placedstudent = $placedstudent->orderBy('id', 'DESC')->get();

                    return view('placed_student', [
                        'placedstudent' => $placedstudent,
                        'groupCourse' => $groupCourse,
                        'i' => 0 // Initialize counter if needed for the view
                    ]);
}

    /**
     * Display the specified placed student
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Placedstudent::findOrFail($id);
        return view('placed_student_show', compact('student'));
    }

    // Remove other unused methods if not needed
}