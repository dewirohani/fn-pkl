<ul class="nav">
    <li class="">
      <a href="{{url('/')}}">
        <i class="nc-icon nc-book-bookmark"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li class="dropdown dropleft sidebar-item" >
      <a class="sidebar-link waves-effect waves-dark" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <i class="nc-icon nc-app"></i> <span>Master</span>
      </a>
        <div class="dropdown-menu" style="width: 75%;" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{ url('master/dataSiswa') }}">{{ __("Data Siswa") }}</a>
              <a class="dropdown-item" href="{{ url('master/dataGuru') }}">{{ __("Data Guru") }}</a>
              <a class="dropdown-item" href="{{ url('master/dataKelas') }}">{{ __("Data Kelas") }}</a>
              <a class="dropdown-item" href="{{ url('master/dataJurusan') }}">{{ __("Data Jurusan") }}</a>
        </div>
    </li>
    <li class="dropdown dropleft sidebar-item">
      <a class="sidebar-link waves-effect waves-dark" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <i class="nc-icon nc-bank"></i>
        <span>PKL</span>
      </a>
      <div class="dropdown-menu" style="width: 75%;" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{ url('pkl/dataInstansi') }}"><span> {{ __("Data Instansi") }}</span></a>
              <a class="dropdown-item" href="{{ url('pkl/dataPeriode') }}"><span> {{ __("Data Periode") }} </span></a>
              <a class="dropdown-item" href="{{ url('pkl/dataPengajuan') }}"><span> {{ __("Pengajuan PKL") }} </span></a>
              <a class="dropdown-item" href="{{ url('pkl/dataPenempatan') }}"><span> {{ __("Data Penempatan") }} </span></a>
        </div>
    </li>
    <li>
      <a href="{{ url('attendance/dataAttendance') }}">
        <i class="nc-icon nc-touch-id"></i>
        <p>Attendance</p>
      </a>
    </li>
    <li>
      <a href="{{ url('logbook/dataLogbook') }}">
        <i class="nc-icon nc-tile-56"></i>
        <p>Logbook</p>
      </a>
    </li>
    <li>
      <a href="{{url('sertifikat/dataSertifikat')}}">
        <i class="nc-icon nc-trophy"></i>
        <p>Sertifikat</p>
      </a>
    </li>
  </ul>