@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sideBar')
@section('content')
<style>
th{
    text-align:center;
}
td{ 
    color:white;
}
#search{
    width:200px;
}
#load{
   color:white;
   width:200px;
}
h1{
    color:#bd4147;
}
</style>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
  
  <div style="">
    <h1 >إدارة المرشحين</h1>
    <hr>
    <!-- <a href="" id ="load" class="form-control btn-sm float-left btn bg-dark">Load employees</a> -->
    <input class="form-control btn-sm float-right " placeholder="ابحث" aria-label="Search" type="text" name="" id="search">
  </div>
  @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif
  @if (Session::has('error'))
      <div class="alert alert-danger">{{ Session::get('error') }}</div>
  @endif
  <table class="bg-dark table table-hover table-sm">
    <thead>
      <tr>
        <th>المرشح</th>
        <th>اسم شُهْرَة</th>
        <th>النوع</th>
        <th>اسم الدائره</th>
        <th> رقم الدائره</th>
        <th>الرمز</th>
        <th>البرنامح</th>
        <th>العمليات</th>
      </tr>
    </thead>
    <tbody>
     @foreach($candidates as $candidate)
     <tr style="color: white">
        <td>{{$candidate->name}}</td>
        <td>{{$candidate->sur_name}}</td>
        <td>{{$candidate->type}}</td>
        <td>{{$candidate->region->name}}</td>
        <td>{{$candidate->region->serial_number}}</td>
        <td>{{$candidate->symbol}}</td>
        <td>{{$candidate->program}}</td>
        <td><a href="#" class="btn btn-primary">حذف</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </main>
@endsection