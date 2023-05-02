<!DOCTYPE html>
<html>
<head>
  <title>EES</title>

<meta charset="utf-8">
<meta name="viewport" content="width:device-width, initial-scale=1">



 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style type="text/css">
  body{font-weight: bold;direction:rtl;}
  img{width: 150px;height: 150px;border-radius: 50%;}
  .siteNav{background-color: #2d4059}
</style>



</head>
<body class="container">
<!-- Start NavBar -->

<nav class="navbar navbar-inverse navbar-fixed-top siteNav">
    <div class="cotainer">

    <div class="navbar-header">

<button type="button" class="navbar-toggle"
data-toggle="collapse" data-target="#nav1">
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</button>
  <a href="/employee" class="navbar-brand">EES.ORG</a>
  </div>

  <div class="collapse navbar-collapse" id="nav1">
    <ul class="nav navbar-nav ">
<li class=""><a href="/employee"> المواطنين</a></li>
<li><a href="#"> تقرير/بلاغ
<li><a href="/employees"> الزملاء</a></li>
<li><a href=""> المستشارين</a></li>

<!-- To Search Citizen Using National Number -->
<li style="margin: 0 auto;">
    <form class="navbar-form" method="post" action="{{url('/searchvoter')}}">

        {{csrf_field() }}
        <input type="text" id="nId" name="nId" placeholder="أدخل الرقم القومي للمواطن" class="form-control">
        <input type="submit" id="submit" value="بحث" class="form-control">

    </form>
      </li></ul>


<ul class="nav navbar-nav navbar-right">
 <li class="dropdown">
<a class="" data-toggle="dropdown"  href="prod"  data-toggle="tab">
  Employee Name <span class="caret"></span>
</a>
<ul class="dropdown-menu">
  <li><a href="">Profile</a></li>
  <li><a href="">LogOut</a></li>
</ul>
</li>
</ul>
</div>
 </div>

</nav>


<!-- End NavBar -->

<!--  -->
<div class="row">

  <div class="col-sm-9  col-md-6 col-lg-12" style="margin-top: 50px">
      <!--  -->
<div class="details alert" id="Employees">
  <h1 class="text-center"> محافظه : المنيا - مدينه : المنيا - رقم اللجنة : 4 </h1>

</div>

      <!--  -->
      <hr class="text-center">
          <div class="row">
            <div class="col-xs-6 col-sm-3 ">
              <img src="images/2.jpg" class="img-responsive" alt="img">
              <h4>(ME)Emp1</h4>
              <span class="text-muted"> Emp1 Name</span>
            </div>
            <div class="col-xs-6 col-sm-3 ">
              <img src="images/2.jpg" class="img-responsive" alt="img">
              <h4>Emp2</h4>
              <span class="text-muted"> Emp2 Name</span>
            </div>
            <div class="col-xs-6 col-sm-3">
              <img src="images/2.jpg" class="img-responsive" alt="img">
              <h4>Emp1</h4>
              <span class="text-muted"> Emp3 Name</span>
            </div>
            <div class="col-xs-6 col-sm-3 ">
              <img src="images/2.jpg"  class="img-responsive" alt="img">
              <h4>Emp4</h4>
              <span class="text-muted"> Emp4 Name</span>
            </div>
          </div>
<!--  -->
          <div>




{{--In Case Errorrs--}}
                  @if ($success = Session::get('search'))
                  <div class="alert alert-danger alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <p class="text-center">
                          <strong> {{Session::get('search')}} </strong>
                      </p>

                  </div>@endif

{{--In Case Success--}}
              @if ($success = Session::get('success'))
                  <div class="alert alert-info alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <p class="text-center">
                          <strong> {{Session::get('success')}} </strong>
                      </p>

                  </div>@endif

              {{--In Case Error--}}
              @if ($success = Session::get('error'))
                  <div class="alert alert-danger alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <p class="text-center">
                          <strong> {{Session::get('error')}} </strong>
                      </p>

                  </div>@endif

<table class="table table-striped  " >
              <thead >

                   <td>#</td>
                   <td>الرقم القومي </td>
                  <td>الأسم</td>
                  <td>مقر اللجنة</td>
{{--                  <th>أحقيه التصويت </th>--}}
{{--                  <th>أدلي بصوته</th>--}}

              </thead>
              <tbody>


@foreach($voters as $index => $voter)
    <tr>
        <td>{{$index+1}}</td>

        <td>{{$voter->national_id}}</td>
        <td>{{$voter->name}}</td>
{{--        <td>{{$voter->region->serial_number}}</td>--}}

        <td>{{\App\Voter::where('national_id','=',$voter->national_id)->first()->region->serial_number}}</td>

         </tr>
@endforeach


              </tbody>
            </table>
          </div>
        </div>
      </div>

<!--  -->
 <script type="text/javascript">

$('#submit').click(function(e){

var ID=document.getElementById('nId').value;
if(ID=="")
  alert('من فضلك أدخل الرقم القومي للمواطن ويجب أن يكون رقما فقط');
else ID.value="";

});
 </script>
</body>
</html>
