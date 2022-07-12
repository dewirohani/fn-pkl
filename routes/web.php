<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    HomeController, 
    MajorController, 
    GradeController, 
    StudentController, 
    TeacherController, 
    AttendanceController, 
    PeriodController,
    LogbookController,
    InternshipPlaceController, 
    InternshipSubmissionController, 
    InternshipPlacementController, 
    InternshipCertificateController, 
    ProfileController,
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('admin/dashboard');
// });


Route::get('/login', function(){
    return view('auth.login');
})->name('login');

// Route::get('/logout', function(){
//     return view('auth.login');
// })->name('logout');

Route::middleware(['authenticated'])->group(function (){

    Route::resource('home', HomeController::class)->only('index');
    Route::get('/majors', [MajorController::class, 'index'])->name('majors.index');
    Route::get('/majors', [MajorController::class, 'create'])->name('majors.create');
    Route::get('/majors', [MajorController::class, 'edit'])->name('majors.edit');

    Route::get('/grades', [GradeController::class, 'index'])->name('grades.index');
    Route::get('/grades', [GradeController::class, 'create'])->name('grades.create');
    Route::get('/grades', [GradeController::class, 'edit'])->name('grades.edit');

    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::get('/students', [StudentController::class, 'create'])->name('students.create');
    Route::get('/students', [StudentController::class, 'edit'])->name('students.edit');

    Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
    Route::get('/teachers', [TeacherController::class, 'create'])->name('teachers.create');
    Route::get('/teachers', [TeacherController::class, 'edit'])->name('teachers.edit');
  
    Route::get('/periods', [PeriodController::class, 'index'])->name('periods.index');    
    Route::get('/periods', [PeriodController::class, 'create'])->name('periods.create');    
    Route::get('/periods', [PeriodController::class, 'edit'])->name('periods.edit');  

    Route::get('/internship-places', [InternshipPlaceController::class, 'index'])->name('internship-places.index');
    Route::get('/internship-places', [InternshipPlaceController::class, 'create'])->name('internship-places.create');
    Route::get('/internship-places', [InternshipPlaceController::class, 'edit'])->name('internship-places.edit');

    Route::get('/logbooks', [LogbookController::class, 'index'])->name('logbooks.index');
    Route::get('/logbooks', [LogbookController::class, 'create'])->name('logbooks.create');
    Route::get('/logbooks', [LogbookController::class, 'edit'])->name('logbooks.edit');

    Route::get('/internship-submissions', [InternshipSubmissionController::class, 'index'])->name('internship-submissions.index');
    Route::get('/internship-submissions', [InternshipSubmissionController::class, 'create'])->name('internship-submissions.create');
    Route::get('/internship-submissions', [InternshipSubmissionController::class, 'edit'])->name('internship-submissions.edit');
    
    Route::get('/internship-placements', [InternshipPlacementController::class, 'index'])->name('internship-placements.index');
    Route::get('/internship-placements', [InternshipPlacementController::class, 'create'])->name('internship-placements.create');
    Route::get('/internship-placements', [InternshipPlacementController::class, 'edit'])->name('internship-placements.edit');
    
    Route::get('/internship-certificates', [InternshipCertificateController::class, 'index'])->name('internship-certificates.index');
    Route::get('/internship-certificates', [InternshipCertificateController::class, 'create'])->name('internship-certificates.create');
    Route::get('/internship-certificates', [InternshipCertificateController::class, 'edit'])->name('internship-certificates.edit');
    
    Route::get('/attendances', [AttendanceController::class, 'index'])->name('internship-certificates.index');
    Route::get('/attendances', [AttendanceController::class, 'create'])->name('internship-certificates.create');
    Route::get('/attendances', [AttendanceController::class, 'edit'])->name('internship-certificates.edit');

    Route::get('profile/{$id}', [ProfileController::class, 'show']);
});

// Route::group(['middleware' => ['authenticated']], function () {
//     Route::group(['middleware' => ['admin']], function () {
//         Route::get('/home', [HomeController::class, 'index'])->name('home');
//     });
//     Route::resource('majors', MajorController::class);
//     Route::resource('grades', GradeController::class);
//     Route::resource('students', StudentController::class);
//     Route::resource('teachers', TeacherController::class);
//     Route::resource('periods', PeriodController::class);
//     Route::resource('internship-places', InternshipPlaceController::class);
//     Route::resource('internship-submissions', InternshipSubmissionController::class);
//     Route::resource('internship-placements', InternshipPlacementController::class);
//     Route::resource('internship-certificates', InternshipCertificateController::class);
//     Route::resource('logbooks', LogbookController::class);
//     Route::resource('attendances', AttendanceController::class);
//     Route::get('profile/{$id}', [ProfileController::class, 'show']);
// });

// Route::group(['middleware' => ['authenticated', 'guru']], function () {
//     Route::get('guru-view', 'HomeController@guruView')->name('guru.dashboard');
//     Route::resource('majors', MajorController::class);
//     Route::resource('grades', GradeController::class);
//     Route::resource('students', StudentController::class);
//     Route::resource('teachers', TeacherController::class);
//     Route::resource('periods', PeriodController::class);
//     Route::resource('internship-places', InternshipPlaceController::class);
//     Route::resource('internship-submissions', InternshipSubmissionController::class);
//     Route::resource('internship-placements', InternshipPlacementController::class);
//     Route::resource('internship-certificates', InternshipCertificateController::class);
//     Route::resource('logbooks', LogbookController::class);
//     Route::resource('attendances', AttendanceController::class);
//     Route::get('profile/{$id}', [ProfileController::class, 'show']);
// });
// Route::group(['middleware' => ['authenticated', 'siswa']], function () {
//     Route::get('siswa-view', 'HomeController@siswaView')->name('siswa.dashboard');
//     Route::resource('majors', MajorController::class);
//     Route::resource('grades', GradeController::class);
//     Route::resource('students', StudentController::class);
//     Route::resource('teachers', TeacherController::class);
//     Route::resource('periods', PeriodController::class);
//     Route::resource('internship-places', InternshipPlaceController::class);
//     Route::resource('internship-submissions', InternshipSubmissionController::class);
//     Route::resource('internship-placements', InternshipPlacementController::class);
//     Route::resource('internship-certificates', InternshipCertificateController::class);
//     Route::resource('logbooks', LogbookController::class);
//     Route::resource('attendances', AttendanceController::class);
//     Route::get('profile/{$id}', [ProfileController::class, 'show']);
// });


