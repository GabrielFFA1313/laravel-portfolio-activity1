<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about', [
            'name' => 'Gabriel Francis F. Araneta',
            'course' => 'Bachelor of Science in Information Technology',
            'university' => 'Central Mindanao University'
        ]);
    }

    public function projects()
    {
        $projects = [
            [
                'title' => 'Gamified E-learning System for CMU Information Technology',
                'description' => 'A e-learning system that is about information technology with gamification such as Badges, Levels, etc.'
            ],
            [
                'title' => 'Mealroute',
                'description' => 'A Navigation app that will show all of the eatery and shop in Central Mindanao University'
            ],
            [
                'title' => 'Pick-me-up',
                'description' => 'A mobile application that will allow user to book a motorela for transportation'
            ],
        ];

        return view('projects', compact('projects'));
    }

    public function contact()
    {
        return view('contact', [
            'email' => 's.araneta.gabrielfrancis@cmu.edu.ph',
            'phone' => '+63 9155620651'
        ]);
    }

    public function hobbies()
    {
        $hobbies = [
            ['title' => 'Drawing'],
            ['title' => 'Gaming'],
            ['title' => 'Computers'],
        ];

        return view('hobbies', compact('hobbies'));
    }
}
