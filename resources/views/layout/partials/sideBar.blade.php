@section('sidebar')
 <nav id="sidebarMenu" class=" text-right col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="dashboard">
              <span data-feather="home"></span>
              مركز التحكم <span class="sr-only">(current)</span>
            </a>
          </li>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>التحكم</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="chevrons-down">
            <span data-feather="chevrons-down"></span>
          </a>
        </h6>
<!-- links is ordered -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('addElection')}}">
              <span data-feather="plus-circle"></span>
              اضافه حمله انتخابيه
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{{url('api/addRegions')}}">
              <span data-feather="plus-circle"></span>
              اضافه  الدوائر انتخابيه
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('api/addCandidates')}}">
              <span data-feather="plus-circle"></span>
              اضافه مرشحين
            </a>
         
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('addVoters')}}">
              <span data-feather="plus-circle"></span>
              اضافه منتخبين
            </a>
          </li>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="{{url('data')}}">
              <span data-feather="plus-circle"></span>
              اضافه بيانات
            </a>
          </li>
         </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('result/1')}}">
              <span data-feather="plus-circle"></span>
              النتائج
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Voters')}}">
              <span data-feather="plus-circle"></span>
              المنتخبين
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('regions')}}">
              <span data-feather="plus-circle"></span>
              الدوائر
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Candidates')}}">
              <span data-feather="plus-circle"></span>
              المرشحين
            </a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="{{url('api/mcommittees')}}">
              <span data-feather="plus-circle"></span>
              اللجان
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{url('api/memployees')}}">
              <span data-feather="plus-circle"></span>
              الموظفين
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addCommittee">
              <span data-feather="plus-circle"></span>
              اضافه لجان
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="addEmployee">
              <span data-feather="plus-circle"></span>
              اضافه محكمين
            </a>
          </li>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>المحافظات</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="chevrons-down">
            <span data-feather="chevrons-down"></span>
          </a>
        </h6>
          <li class="nav-item">
            <a class="nav-link" href="committee">
              <span data-feather="users"></span>
              القاهره
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              الاسكندريه
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              سوهاج
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              المنيا
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              اسيوط
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              قنا
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              اسوان
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              البحر الاحمر
            </a>
          </li>
          
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>النتائج</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="chevrons-down">
            <span data-feather="chevrons-down"></span>
          </a>
          </h6>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              الاحصائيات
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              التقارير
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>التقارير المحفوظه</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              تقرير عام 2021 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              تقرير عام 2022 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              تقرير عام 2023 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              تقرير عام 2024 
            </a>
          </li>
             <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              تقرير عام 2025 
            </a>
          </li>
        </ul>
      </div>
    </nav>
@endsection