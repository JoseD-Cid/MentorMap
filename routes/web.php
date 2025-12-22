<?php

use App\Livewire\Student\Dashboard;
use App\Livewire\UserLogin;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Livewire\Mentor\Dashboard as MentorDashboard;
use App\Livewire\Student\Dashboard as StudentDashboard;

Route::get('/', UserLogin::class);

Route::group(['middleware' => ['role:mentor']], function () {
    Route::get('/mentor', MentorDashboard::class)->name('mentor-dashboard');
 }) ;

 Route::group(['middleware' => ['role:student']], function () {
    Route::get('/student', StudentDashboard::class)->name('student-dashboard');
 });

