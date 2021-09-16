<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instructor\CourseController;
use App\Http\Livewire\Instructor\CoursesCurriculum;
use App\Http\Livewire\Instructor\CoursesStudents;

//プロヴァイダー>RouteServiceProvider内でprefix('instructor')やname('instructor')を設定している

Route::redirect('','instructor/courses');

Route::resource('courses',CourseController::class)->middleware('can:Actualizar curse')->names('courses');

Route::get('courses/{course}/curriculum',CoursesCurriculum::class)->name('courses.curriculum');

Route::get('courses/{course}/goals',[CourseController::class,'goals'])->name('courses.goals');

Route::get('courses/{course}/students',CoursesStudents::class)->middleware('can:Actualizar curse')->name('courses.students');

Route::post('courses/{course}/status',[CourseController::class,'status'])->name('courses.status');

Route::get('courses/{course}/observation',[CourseController::class,'observation'])->name('courses.observation');
