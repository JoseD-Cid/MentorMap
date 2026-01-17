<?php

use App\Livewire\User\UserLogin;
use Illuminate\Support\Facades\Route;
use App\Livewire\Mentor\Dashboard as MentorDashboard;
use App\Livewire\Mentor\MyLocation;
use App\Livewire\Mentor\MyProfile;
use App\Livewire\Mentor\MyTopics;
use App\Livewire\Student\Dashboard as StudentDashboard;
use App\Livewire\User\RegisterMentor;
use App\Livewire\User\RegisterStudent;
use App\Livewire\User\RoleSelection as UserSelectionRole;
use App\Livewire\Welcome;

Route::get('/', Welcome::class)->name('welcome');
Route::get('/login', UserLogin::class)->name('login');
Route::get('/role-selection', UserSelectionRole::class)->name('role-selection');
Route::get('/register-student', RegisterStudent::class)->name('register-student');
Route::get('/register-mentor', RegisterMentor::class)->name('register-mentor');

Route::middleware(['auth'])->group(function () {
    Route::group(['middleware' => ['role:mentor']], function () {
        Route::get('/mentor/dashboard', MentorDashboard::class)->name('mentor-dashboard');
        Route::get('/mentor/my-profile', MyProfile::class)->name('mentor-my-profile');
        Route::get('/mentor/my-location', MyLocation::class)->name('mentor-my-location');
        Route::get('/mentor/my-topics', MyTopics::class)->name('mentor-my-topics');
    });

    Route::group(['middleware' => ['role:student']], function () {
        Route::get('/student', StudentDashboard::class)->name('student-dashboard');
        Route::get('/student/my-profile', MyProfile::class)->name('mentor-my-profile');
    });
});
