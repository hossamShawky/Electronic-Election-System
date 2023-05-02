@extends('versionOne.layouts.add')
@section('title', 'التحقق')
@section('content')
<div class="container" style="margin-top: 10%;">
        <span class="d-block p-2 mb-2" style="text-align: center; height: 50px;background-color: #decdc3; font-weight: bold; font-size: larger; color: #ea5455; ">يستحق له الانتخاب </span>
</div>

        <div class="container" >
       
          <table class="table table-striped table-responsive-sm " style="color: white;" lang="ar" dir= "rtl" >
            <thead >
              <tr>
                <th  style="text-align: center;">#</th>
                <th style="text-align: center;">الاسم</th>
                <th style="text-align: center;">اسم_الاب</th>
               
                <th style="text-align: center;">لجنه</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" style="text-align: center;">1</th>
                <td style="text-align: center;">ايه</td>
                <td style="text-align: center;">محمود</td>
                <td style="text-align: center;">المنيا</td>
              </tr>
              <tr>
                <th scope="row" style="text-align: center;">2</th>
                <td style="text-align: center;">ايه</td>
                <td style="text-align: center;">محمود</td>
                <td style="text-align: center;">المنيا</td>
              </tr>
              
              
            </tbody>
          </table>
        
        </div>
        <img src="{{asset('images/download.jpg')}}" alt="Girl in a jacket" width="130" height="150" style="margin-left: 45%;">
        <div class="container" style="margin-top: 5%;;">
          <span class="d-block p-2 mb-2" style="text-align: center; height: 50px;background-color: #decdc3; font-weight: bold; font-size: larger; color: #ea5455; ">رقم الكبينه : 1 </span>
  </div>
    @endsection
   