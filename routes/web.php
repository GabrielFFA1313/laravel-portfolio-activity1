<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('home');
})->name('home');

Route::get('/about', function () {
$name = 'Gabriel Francis F. Araneta'; // Replace with YOUR name
$course = 'Bachelor of Science in Information Technology';
$university = 'Central Mindanao University'; // Replace with YOUR university
return view('about', [
'name' => $name,
'course' => $course,
'university' => $university
]);
})->name('about');

Route::get('/projects', function () {
$projects = [
['title' => 'Gamified E-learning System for CMU Information Technology', 'description' => 'A e-learning system that is about information technology with gamification such as Badges, Levels, etc.'],
['title' => 'Mealroute', 'description' => 'A Navigation app that will show all of the eatery and shop in Central Mindanao University '],
['title' => 'Pick-me-up', 'description' => 'An mobile application that will allow user to book a motorela for transportation'],
];
return view('projects', ['projects' => $projects]);
})->name('projects');

Route::get('/contact', function () {
$email = 's.araneta.gabrielfrancis@cmu.edu.ph'; // Replace with YOUR email
$phone = '+63 9155620651'; // Replace with YOUR phone
return view('contact', [
'email' => $email,
'phone' => $phone
]);
})->name('contact');

Route::get('/hobbies',function(){
$hobbies = [
['title' => 'Drawing'],
['title' => 'Gaming'],
['title' => 'Computers']
];
return view('hobbies', ['hobbies' => $hobbies]);
})->name('hobbies');