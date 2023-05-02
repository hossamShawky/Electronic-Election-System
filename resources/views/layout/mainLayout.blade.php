<!doctype html>
<html lang="en">
  <!-- head -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content=" ">
    <meta name=" " content="">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>EES Dashboard </title>
    <!-- Bootstrap core CSS -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
/*khalid style*/
th{
  color:#A9A9A9;
  text-align:center;
}
td{
  text-align:center;
}
/* for all links */
a{
  color:#ea5455;
}
/* for all labels */
label{ 
  float:right;
  margin-right:10px;
}
input {
  text-align:right;
}
/*khalid style*/

    </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('dashboard.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dashboard-rtl.css')}}" rel="stylesheet">

  </head>
  <body>
<!-- navBar -->
        @yield('navbar')

        
        <div class="container-fluid" id="container-fluid">
            <div class="row">
                <!-- sideBar -->
                @yield('sidebar')
                <!-- Main content -->
                @yield('content')

            </div>
             
        </div>
        <!-- <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script> -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
        <script src="{{asset('js/bootstrap.bundle.min.js.map')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/loader.js')}}"></script>
    <script src="{{asset('js/JavaScript.js')}}"></script>
   
    </body>
</html>