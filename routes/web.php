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
    InternshipReportController
};
// use Http;
use Illuminate\Http\Request;

Route::get('/login', function (Request $request) {
    $auth = Http::withHeaders([
        'Authorization' => 'Bearer '.substr($request->Header('cookie'),'6' , strpos(substr($request->Header('cookie'),'6'), ";")),
        'ContentType' => 'application/json',
        'Accept' => 'application/json',
    ])->get('http://192.168.43.215:8000/api/user')->json();
    if ($auth['message'] != "Authenticated.") {
        return view('auth.login');
    }else{
        return redirect()->to('/home');
    }
});


Route::middleware(['authenticated'])->group(function (){

    Route::get('/home',                          [HomeController::class, 'index'])->name('home');   
    Route::get('/internship-places-siswa', [InternshipPlaceController::class, 'index'])->name('internship-places-siswa.index');
    Route::get('/logbooks-siswa', [LogbookController::class, 'index'])->name('logbooks-siswa.index');
    Route::get('/logbooks-siswa/create', [LogbookController::class, 'create'])->name('logbooks-siswa.create');
    Route::get('/logbooks-siswa/{id?}/edit', [LogbookController::class, 'edit'])->name('logbooks-siswa.edit');

    Route::get('/internship-submissions-siswa', [InternshipSubmissionController::class, 'index'])->name('internship-submissions-siswa.index');
    Route::get('/internship-submissions-siswa/create', [InternshipSubmissionController::class, 'create'])->name('internship-submissions-siswa.create');
    
    Route::get('/internship-placements-siswa', [InternshipPlacementController::class, 'index'])->name('internship-placements-siswa.index');
    Route::get('/internship-placements-siswa/create', [InternshipPlacementController::class, 'create'])->name('internship-placements-siswa.create');
    Route::get('/internship-placements-siswa/{id?}/edit', [InternshipPlacementController::class, 'edit'])->name('internship-placements-siswa.edit');
    
    Route::get('/internship-certificates-siswa', [InternshipCertificateController::class, 'index'])->name('internship-certificates-siswa.index');
    // Route::get('/internship-certificates-siswa/create', [InternshipCertificateController::class, 'create'])->name('internship-certificates-siswa.create');
    // Route::get('/internship-certificates-siswa/{id?}/edit', [InternshipCertificateController::class, 'edit'])->name('internship-certificates-siswa.edit');
    
    Route::get('/attendances-siswa', [AttendanceController::class, 'index'])->name('attendances-siswa.index');
    Route::get('/attendances-siswa/create', [AttendanceController::class, 'create'])->name('attendances-siswa.create');
    Route::get('/attendances-siswa/{id?}/edit', [AttendanceController::class, 'edit'])->name('attendances-siswa.edit');
    
    Route::get('/reports-siswa', [InternshipReportController::class, 'index'])->name('reports-siswa.index');
    Route::get('/reports-siswa/create', [InternshipReportController::class, 'create'])->name('reports-siswa.create');
    Route::get('/reports-siswa/{id?}/edit', [InternshipReportController::class, 'edit'])->name('reports-siswa.edit');
    
    
    Route::middleware(['guru'])->group(function () {
        Route::get('/attendances-guru', [AttendanceController::class, 'index'])->name('attendances-guru.index');
        
        Route::get('/reports-guru',          [InternshipReportController::class, 'index'])->name('reports-guru.index');              
        Route::get('/reports-guru/{id?}/edit',          [InternshipReportController::class, 'edit'])->name('reports-guru.edit');              
    
        Route::get('/logbooks-guru/{id?}/edit', [LogbookController::class, 'edit'])->name('logbooks-guru.edit');
        Route::get('/logbooks-guru', [LogbookController::class, 'index'])->name('logbooks-guru.index');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/students',                      [StudentController::class, 'index'])->name('students.index');
        Route::get('/students/create',               [StudentController::class, 'create'])->name('students.create');
        Route::get('/students/{id?}/edit',           [StudentController::class, 'edit'])->name('students.edit');
        Route::get('/majors',                        [MajorController::class, 'index'])->name('majors.index');
        Route::get('/majors/create',                 [MajorController::class, 'create'])->name('majors.create');
        Route::get('/majors/{id?}/edit',             [MajorController::class, 'edit'])->name('majors.edit');

        Route::get('/grades',                        [GradeController::class, 'index'])->name('grades.index');
        Route::get('/grades/create',                 [GradeController::class, 'create'])->name('grades.create');
        Route::get('/grades/{id?}/edit',             [GradeController::class, 'edit'])->name('grades.edit');


        Route::get('/teachers',                     [TeacherController::class, 'index'])->name('teachers.index');
        Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
        Route::get('/teachers/{id?}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
    
        Route::get('/periods', [PeriodController::class, 'index'])->name('periods.index');    
        Route::get('/periods/create', [PeriodController::class, 'create'])->name('periods.create');    
        Route::get('/periods/{id?}/edit', [PeriodController::class, 'edit'])->name('periods.edit');  

        Route::get('/internship-places', [InternshipPlaceController::class, 'index'])->name('internship-places.index');
        Route::get('/internship-places/create', [InternshipPlaceController::class, 'create'])->name('internship-places.create');
        Route::get('/internship-places/{id?}/edit', [InternshipPlaceController::class, 'edit'])->name('internship-places.edit');

        Route::get('/logbooks', [LogbookController::class, 'index'])->name('logbooks.index');
        Route::get('/logbooks/{id?}/edit', [LogbookController::class, 'edit'])->name('logbooks.edit');
        Route::get('/logbooks/create', [LogbookController::class, 'create'])->name('logbooks.create');

        Route::get('/internship-submissions', [InternshipSubmissionController::class, 'index'])->name('internship-submissions.index');
        Route::get('/internship-submissions/create', [InternshipSubmissionController::class, 'create'])->name('internship-submissions.create');
        Route::get('/internship-submissions/{id?}/edit', [InternshipSubmissionController::class, 'edit'])->name('internship-submissions.edit');
        
        Route::get('/internship-placements', [InternshipPlacementController::class, 'index'])->name('internship-placements.index');
        Route::get('/internship-placements/create', [InternshipPlacementController::class, 'create'])->name('internship-placements.create');
        Route::get('/internship-placements/{id?}/edit', [InternshipPlacementController::class, 'edit'])->name('internship-placements.edit');
        
        Route::get('/internship-certificates', [InternshipCertificateController::class, 'index'])->name('internship-certificates.index');
        Route::get('/internship-certificates/create', [InternshipCertificateController::class, 'create'])->name('internship-certificates.create');
        Route::get('/internship-certificates/{id?}/edit', [InternshipCertificateController::class, 'edit'])->name('internship-certificates.edit');
        
        Route::get('/attendances', [AttendanceController::class, 'index'])->name('attendances.index');
        Route::get('/attendances/create', [AttendanceController::class, 'create'])->name('attendances.create');
        Route::get('/attendances/{id?}/edit', [AttendanceController::class, 'edit'])->name('attendances.edit');

        Route::get('/reports', [InternshipReportController::class, 'index'])->name('reports.index');
        Route::get('/reports/create', [InternshipReportController::class, 'create'])->name('reports.create');
        Route::get('/reports/{id?}/edit', [InternshipReportController::class, 'edit'])->name('reports.edit');

       
       
    });
});
