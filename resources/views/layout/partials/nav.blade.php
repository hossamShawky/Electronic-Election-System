@section('navbar')
<!-- the admin link color edited and placeholder of search field -->
  <nav class="navbar navbar sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="dashboard">نظام الانتخابات الالكترونى </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span data-feather="chevrons-down"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="ابحث" aria-label="ابحث">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    </li>
      <!-- <a class="nav-link" href="#"> {{Auth::user()}}<span data-feather="log-out"></span></a> -->
      <li>
        <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout
            <span data-feather="log-out"></span></a>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
            @csrf
        </form>
     </li>
  </ul>
      <!-- ------------------------------------------- -->
  </ul>
</nav>
@endsection