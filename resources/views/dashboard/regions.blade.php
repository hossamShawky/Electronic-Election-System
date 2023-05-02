@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sideBar')
@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
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
}
</style>
<div >
    <h1 >إدارة الدوائر</h1>
    <!-- <a href="" id ="load" class="form-control btn-sm float-left btn bg-dark">Load employees</a> -->
    <input class="form-control btn-sm  " placeholder="ابحث" aria-label="Search" type="text" name="" id="search">
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
        <th>اسم الدائره</th>
        <th> رقم الدائره</th>
        <th>  عدد المقاعد </th>
        <th>العمليات</th>
      </tr>
    </thead>
    <tbody>
     @foreach($regions as $region)
     <tr style="color: white">
        <td>{{$region->name}}</td>
        @if($region->serial_number==NULL)
        <td style="color:red;">قطاع</td>
        @else
        <td>{{$region->serial_number}}</td>
        @endif
        @if($region->number_of_seats==NULL)
        <td style="color:red;">قطاع</td>
        @else
        <td>{{$region->number_of_seats}}</td>
        @endif
        <!-- serial_number -->
        <td><a href="#" class="btn btn-primary">حذف</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </main>
@endsection