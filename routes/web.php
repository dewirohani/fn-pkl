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
// // Route::get('/icons', function () {
// //     return view('icons');
// // });

Route::get('/login', function(){
    return view('auth.login');
})->name('login');

Route::middleware(['authenticated'])->group(function (){

    // Route::group(['middleware' => 'authenticated'], function () {
    // admin
    Route::resource('home', HomeController::class)->only('index');
    Route::resource('majors', MajorController::class);
    Route::resource('grades', GradeController::class);
    Route::resource('students', StudentController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('periods', PeriodController::class);
    Route::resource('internship-places', InternshipPlaceController::class);
    Route::resource('internship-submissions', InternshipSubmissionController::class);
    Route::resource('internship-placements', InternshipPlacementController::class);
    Route::resource('internship-certificates', InternshipCertificateController::class);
    Route::resource('logbooks', LogbookController::class);
    Route::resource('attendances', AttendanceController::class);
});

// guru
Route::get('/guru/master/dataSiswa', function () {
    return view('guru.master.siswa.index');
});
Route::get('/guru/master/dataGuru', function () {
    return view('guru.master.guru.index');
});
Route::get('/guru/master/dataKelas', function () {
    return view('guru.master.kelas.index');
});
Route::get('/guru/master/dataJurusan', function () {
    return view('guru.master.jurusan.index');
});

/*pkl*/
Route::get('/guru/pkl/dataInstansi', function () {
    return view('guru.pkl.instansi.index');
});
Route::get('/guru/pkl/dataPeriode', function () {
    return view('guru.pkl.periode.index');
});
Route::get('/guru/pkl/dataPengajuan', function () {
    return view('guru.pkl.pengajuan.index');
});
Route::get('/guru/pkl/dataPenempatan', function () {
    return view('guru.pkl.penempatan.index');
});

//create-pkl
Route::get('/guru/pkl/createDatapenempatan', function () {
    return view('guru.pkl.penempatan.create');
});

/*attendance*/
Route::get('/guru/attendance/dataAttendance', function () {
    return view('guru.attendance.index');
});

/*logbook*/
Route::get('/guru/logbook/dataLogbook', function () {
    return view('guru.logbook.index');
});

/*sertifikat*/
Route::get('/guru/sertifikat/dataSertifikat', function () {
    return view('guru.sertifikat.index');
});
Route::get('/guru/sertifikat/createDatasertifikat', function () {
    return view('guru.sertifikat.create');
});


//siswa
Route::get('/siswa/master/dataSiswa', function () {
    return view('siswa.master.siswa.index');
});
Route::get('/siswa/master/dataGuru', function () {
    return view('siswa.master.guru.index');
});
Route::get('/siswa/master/dataKelas', function () {
    return view('siswa.master.kelas.index');
});
Route::get('/siswa/master/dataJurusan', function () {
    return view('siswa.master.jurusan.index');
});

/*pkl*/
Route::get('/siswa/pkl/dataInstansi', function () {
    return view('siswa.pkl.instansi.index');
});
Route::get('/siswa/pkl/dataPeriode', function () {
    return view('siswa.pkl.periode.index');
});
Route::get('/siswa/pkl/dataPengajuan', function () {
    return view('siswa.pkl.pengajuan.index');
});
Route::get('/siswa/pkl/dataPenempatan', function () {
    return view('siswa.pkl.penempatan.index');
});

//create-pkl
Route::get('/siswa/pkl/createDatapengajuan', function () {
    return view('siswa.pkl.pengajuan.create');
});

/*attendance*/
Route::get('/siswa/attendance/createDataattendance', function () {
    return view('siswa.attendance.create');
});

/*logbook*/
Route::get('/siswa/logbook/CreateDatalogbook', function () {
    return view('siswa.logbook.create');
});

/*sertifikat*/
Route::get('/siswa/sertifikat/dataSertifikat', function () {
    return view('siswa.sertifikat.index');
});



