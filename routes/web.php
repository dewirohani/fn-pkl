<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
});
// Route::get('/icons', function () {
//     return view('icons');
// });
Route::get('/master/dataSiswa', function () {
    return view('master/dataSiswa');
});
Route::get('/master/dataGuru', function () {
    return view('master/dataGuru');
});
Route::get('/master/dataKelas', function () {
    return view('master/dataKelas');
});
Route::get('/master/dataJurusan', function () {
    return view('master/dataJurusan');
});

/*create*/
Route::get('/master/createDatasiswa', function () {
    return view('master/createDatasiswa');
});
Route::get('/master/createDataguru', function () {
    return view('master/createDataguru');
});
Route::get('/master/createDatakelas', function () {
    return view('master/createDatakelas');
});
Route::get('/master/createDatajurusan', function () {
    return view('master/createDatajurusan');
});

/*pkl*/
Route::get('/pkl/dataInstansi', function () {
    return view('pkl/dataInstansi');
});
Route::get('/pkl/dataPeriode', function () {
    return view('pkl/dataPeriode');
});
Route::get('/pkl/dataPengajuan', function () {
    return view('pkl/dataPengajuan');
});
Route::get('/pkl/dataPenempatan', function () {
    return view('pkl/dataPenempatan');
});


/*create-pkl*/
Route::get('/pkl/createDatainstansi', function () {
    return view('pkl/createDatainstansi');
});
Route::get('/pkl/createDataperiode', function () {
    return view('pkl/createDataperiode');
});
Route::get('/pkl/createDatapengajuan', function () {
    return view('pkl/createDatapengajuan');
});
Route::get('/pkl/createDatapenempatan', function () {
    return view('pkl/createDatapenempatan');
});

/*attendance*/
Route::get('/attendance/dataAttendance', function () {
    return view('attendance/dataAttendance');
});
Route::get('/attendance/createDataattendance', function () {
    return view('attendance/createDataattendance');
});

/*logbook*/
Route::get('/logbook/dataLogbook', function () {
    return view('logbook/dataLogbook');
});
Route::get('/logbook/createDatalogbook', function () {
    return view('logbook/createDatalogbook');
});

/*sertifikat*/
Route::get('/sertifikat/dataSertifikat', function () {
    return view('sertifikat/dataSertifikat');
});
Route::get('/sertifikat/createDatasertifikat', function () {
    return view('sertifikat/createDatasertifikat');
});