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
['title' => 'Project 1', 'description' => 'My first web project'],
['title' => 'Project 2', 'description' => 'E-commerce website'],
['title' => 'Project 3', 'description' => 'Mobile app design'],
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