@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sidebar')
@section('title', 'إدارة الموظفين')
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
<main role="main"  class="col-md-9 ml-sm-auto col-lg-10  px-md-4">
  <div style="">
    <h1 >إدارة الموظفين</h1>
    <hr>
    <!-- <a href="" id ="load" class="form-control btn-sm float-left btn bg-dark">Load employees</a> -->
    <input class="form-control btn-sm float-right " placeholder="ابحث" aria-label="Search" type="text" name="" id="search">
  </div>
    <table  class="bg-dark table table-hover table-sm ">
        <thead>
            <th>اسم الموظف</th>
            <th>موظف\محكم</th>
            <th>الرقم القومي</th>
            <th>العمليات</th>
        </thead>
        <tbody>

        @foreach($employees as $employee)
        <tr>
            <td >{{$employee->name}}</td>  
            <td >{{$employee->role}}</td>  
            <td >{{$employee->national_id}}</td>  
            <td><a href="delemployee/{{$employee->id}}"  class="btn btn-primary">حذف</a></td>
        </tr>
        @endforeach
            
        </tbody>
    </table>
</main>
@endsection
