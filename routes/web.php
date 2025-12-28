<?php

use App\Livewire\Student\Dashboard;
use App\Livewire\UserLogin;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Livewire\Mentor\Dashboard as MentorDashboard;
use App\Livewire\Mentor\MyLocation;
use App\Livewire\Mentor\MyTopics;
use App\Livewire\Student\Dashboard as StudentDashboard;

Route::get('/', UserLogin::class);

Route::group(['middleware' => ['role:mentor']], function () {
    Route::get('/mentor/dashboard', MentorDashboard::class)->name('mentor-dashboard');
    Route::get('/mentor/my-location', MyLocation::class)->name('mentor-my-location');
    Route::get('/mentor/my-topics', MyTopics::class)->name('mentor-my-topics');
 }) ;

 Route::group(['middleware' => ['role:student']], function () {
    Route::get('/student', StudentDashboard::class)->name('student-dashboard');
 });

