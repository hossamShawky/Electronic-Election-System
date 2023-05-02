@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sidebar')
@section('title', 'إدارة اللجان')
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
    <h1 >إدارة اللجان</h1>
    <!-- <a href="" id ="load" class="form-control btn-sm float-left btn bg-dark">Load Committees</a> -->
    <input class="form-control btn-sm float-right " placeholder="ابحث" aria-label="Search" type="text" name="" id="search">
  </div>
    <table  class="bg-dark table table-hover table-sm ">
        <thead>
            <th>اسم اللجنه</th>
            <th>وقت البداية</th>
            <th>وقت النهاية</th>
            <th>الاحداثي السيني</th>
            <th>الاحداثي الصادي</th>
            <th>العمليات</th>
        </thead>
        <tbody>

        @foreach($committees as $committee)
        <tr>
            <td >{{$committee->name}}</td>  
            <td >{{$committee->start_time}}</td>  
            <td >{{$committee->end_time}}</td> 
            <td >{{$committee->lat}}</td>  
            <td >{{$committee->lng}}</td>  

            <td><a href="delcommittee/{{$committee->id}}"  class="btn btn-primary">حذف</a></td>
        </tr>
        @endforeach
            
        </tbody>
    </table>
</main>
@endsection
