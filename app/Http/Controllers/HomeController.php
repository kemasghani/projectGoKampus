<?php

namespace App\Http\Controllers;

use App\Http\Resources\CourseCollection;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Ambil data course
        $coursesPath = database_path('json/courses.json');
        $json = json_decode(file_get_contents($coursesPath), true);
        $courses = collect($json['data']);
        $chunkedCourses = $courses->map(function ($course) {
            $course['total_lessons'] = $this->countTotalLessons($course['chapters']);
            return $course;
        })->chunk(4);

        $courses = $courses->map(function ($course) {
            $course['total_lessons'] = $this->countTotalLessons($course['chapters']);
            return $course;
        });

        $recommendedCourses = $courses->where('total_learners', '>=', 15000)
            ->sortByDesc('total_learners')
            ->take(2);

        $popularCourses = $courses->splice(2)
            ->filter(function ($course) {
                return optional($course['review_summary'])['star_avg'] > 4;
            })
            ->shuffle();

        // Ambil data institusi
        $institutionPath = database_path('json/institutions.json');
        $json = json_decode(file_get_contents($institutionPath), true);
        $institutions = collect($json['data']);

        // Ambil data course dengan kategori IT
        $ITCourses = $courses->filter(function ($course) {
            return optional($course['category'])['slug'] === 'it-tech';
        })->chunk(4);

        // Ambil data course dengan kategori Business & Enterpreneurship
        $businessCourses = $courses->filter(function ($course) {
            return optional($course['category'])['slug'] === 'business-entrepreneurship-2';
        })->chunk(4);

        return view('home', compact(
            'courses', 'chunkedCourses', 'recommendedCourses',
            'institutions', 'popularCourses', 'ITCourses',
            'businessCourses'
        ));
    }

    private function countTotalLessons($chapters)
    {
        $totalLessons = 0;
        foreach ($chapters as $chapter) {
            $totalLessons += count($chapter['lessons']);
        }

        return $totalLessons;
    }
}
