@extends('versionOne.layouts.add')
@section('title', 'صفحه التصويت')
@section('content')
    <style>
        section{direction: rtl;text-align: center;}
        section h1 {;color: white;
            margin-bottom: 2%;}

        .styletable{
            font-weight: bold;
            background-color:#2d4059;
            color: white ;
            text-align: center;}
.voidVoting{
    margin: 5% 30% -1% auto;
    width: 40%;
    height:60px;
    font-size:26px; 
    font-family: 'Pacifico', cursive; 

}
.voteborder {
    width:80% ;
    height: 90%;
    padding:1% ;
    margin-top:2%;
    border: 1px solid #2d4059;
}
.votebtn{
    width: 40%;
    background-color:#D0D3D4 
    ;font-weight:bold;
    font-size:26px; 
    font-family: 'Pacifico', cursive; 
}
    </style>

{{--    <audio autoplay controls style="">--}}

{{--    </audio>--}}
    <section class="voting-page"  >

        @if ($warning = Session::get('warning'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <p class="text-center">
                    <strong> {{Session::get('warning')}} </strong>
                </p>

            </div>@endif




        {{--        Storing Opinions--}}


    <form class="col-lg-12  nav navbar-fixed container-fluid" method="post" action="/voidVoting">
        {{csrf_field() }}
        <input type="hidden"  name="voter_id" value="{{Session::get('voter_id')}}">
        {{--          <input type="submit" class="v-opinion-btn badvote" name="void" value="إبْطال الصوت" />--}}
        <input type="submit"  value="إبْطال الصوت"  class="btn btn-danger voidVoting" >
    </form>







<div class="container-fluid voteborder" >
<div class="row">

        <div class="col-lg-12 row  ">
            <div class="col-lg-12 col-md-12 col-sm-12 ">

<form method="post" action="/givevote">
<!-- <form onsubmit="Vottervote()"> -->
    {{csrf_field() }}

      <h1 style="color:#2C3E50">  قم باختيار مرشحين {{App\Voter::find(Session::get('voter_id'))->region->number_of_seats}} من الفردي</h1>
    <table class="table styletable" width="70%" border="2">
        <thead>

        <td>الرقم</td>
        <td>اسم المرشح / الشهره</td>
        <td>الانتماء</td>
        <td>الرمز</td>
        <td>ابداء الرأي</td>

        </thead>
        @foreach($candidates as $cand)
            @if(App\Voter::find(Session::get('voter_id'))->region->serial_number==
                        $cand->region->serial_number    )
              @if($cand->type=='individual')
            <tr>
                <td>{{$cand->serial_number}}</td>
                <td>
                    <b>{{$cand->name}}</b>
                    <br>
                    اسم الشهره / <span style="color: red">{{$cand-> sur_name }}</span>
                </td>
                <td>{{$cand->party}}</td>
                <td>{{$cand->symbol_name  }}</td>
                <td><input type="checkbox" class="form-control input-control"
                           name="vote[]" value="{{$cand->serial_number}}" id="voting"></td>
            </tr>
               @endif
           
            @endif

        @endforeach
     </table>

    <hr>
    <h1  >   قم باختيار قائمه واحده     </h1>
    <table  class="table styletable" width="100%" border="2">
        <thead>

        <td>الرقم</td>
        <td>اسم القائمه</td>
        <td>الرمز</td>
        <td>ابداء الرأي</td>

        </thead>
      <!--   {{App\Voter::find(Session::get('voter_id')) }}
        <hr>
        {{$lists}} -->
  
        @foreach($lists as $index => $list)
             <tr>
                <td>{{$list->id}}</td>
                <td> {{$list->name}} </td>
                <td>{{$list->symbol}}</td>
                <td><input type="radio" class="form-control input-control"
                           name="list"
                           value="{{$list->id}}"
                           id="{{$list->id}}"></td>
            </tr> 
        @endforeach
    </table>
    <input type="hidden"  name="voter_id" value="{{Session::get('voter_id')}}">

    <hr>
        <input type="submit" class="btn votebtn" name="Voting-completed" value="إنتخاب">

    </form>

                </div>

    </div>

    </div>
    </div>
        </section>

    @endsection
{{--    <script>--}}
{{--        function reject(){--}}
{{--            alert("اعترض علي الانتخابات");--}}
{{--        }function bad(){--}}
{{--            alert("ابطل صوتي");--}}
{{--        }--}}

{{--    </script>--}}
