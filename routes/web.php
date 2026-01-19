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

Route::livewire('/', Welcome::class)->name('welcome-page');
Route::livewire('/login', UserLogin::class)->name('login');
Route::livewire('/role-selection', UserSelectionRole::class)->name('role-selection');
Route::livewire('/register-student', RegisterStudent::class)->name('register-student');
Route::livewire('/register-mentor', RegisterMentor::class)->name('register-mentor');

Route::middleware(['auth'])->group(function () {
    Route::group(['middleware' => ['role:mentor']], function () {
        Route::livewire('/mentor/dashboard', MentorDashboard::class)->name('mentor-dashboard');
        Route::livewire('/mentor/my-profile', MyProfile::class)->name('mentor-my-profile');
        Route::livewire('/mentor/my-location', MyLocation::class)->name('mentor-my-location');
        Route::livewire('/mentor/my-topics', MyTopics::class)->name('mentor-my-topics');
    });

    Route::group(['middleware' => ['role:student']], function () {
        Route::livewire('/student', StudentDashboard::class)->name('student-dashboard');
        Route::livewire('/student/my-profile', MyProfile::class)->name('mentor-my-profile');
    });
});
