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
              <a class="dropdown-item" style="color:black" href="{{ route('students.index') }}">{{ __("Data Siswa") }}</a>
              <a class="dropdown-item" style="color:black" href="{{ route('teachers.index') }}">{{ __("Data Guru") }}</a>
              <a class="dropdown-item" style="color:black" href="{{ route('grades.index') }}">{{ __("Data Kelas") }}</a>
              <a class="dropdown-item" style="color:black" href="{{ route('majors.index') }}">{{ __("Data Jurusan") }}</a>
        </div>
    </li>
    <li class="dropdown dropleft sidebar-item">
      <a class="sidebar-link waves-effect waves-dark" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <i class="nc-icon nc-bank"></i>
        <span>PKL</span>
      </a>
      <div class="dropdown-menu" style="width: 75%;" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" style="color:black" href="{{ route('internship-places.index') }}"><span> {{ __("Data Instansi") }}</span></a>
              <a class="dropdown-item" style="color:black" href="{{ route('periods.index') }}"><span> {{ __("Data Periode") }} </span></a>
              <a class="dropdown-item" style="color:black" href="{{ route('internship-submissions.index') }}"><span> {{ __("Pengajuan PKL") }} </span></a>
              <a class="dropdown-item" style="color:black" href="{{ route('internship-placements.index') }}"><span> {{ __("Data Penempatan") }} </span></a>
        </div>
    </li>
    <li>
      <a href="{{ route('attendances.index') }}">
        <i class="nc-icon nc-touch-id"></i>
        <p>Attendance</p>
      </a>
    </li>
    <li>
      <a href="{{ route('logbooks.index') }}">
        <i class="nc-icon nc-tile-56"></i>
        <p>Logbook</p>
      </a>
    </li>
    <li>
      <a href="{{route('internship-certificates.index')}}">
        <i class="nc-icon nc-trophy"></i>
        <p>Sertifikat</p>
      </a>
    </li>
  </ul>