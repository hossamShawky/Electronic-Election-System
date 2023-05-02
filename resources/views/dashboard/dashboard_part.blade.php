@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sideBar')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
  <h2 class="text-right"> إحصائيات الحمله</h2>
  <div id="chartDiv" style="width:100%; height:300px; margin:0 auto;" ></div>
  <hr><h2 class="text-right">دوائر الحمله الانتخابيه</h2>
  <table class="table table-striped table-sm ">
    <thead>
      <tr>
        <th>دائره</th>
        <th>عدد الناخبين</th>
        <th>نسبنها المئوية</th>
        <th>الاصوات المعارضه</th>
        <th>نسبنها المئوية</th>
        <th>التفاصيل</th>
      </tr>
    </thead>
    <tbody>
     <tr >
        <td>دائره 1</td>
        <td>322</td>
        <td>50%</td>
        <td>322</td>
        <td>50%</td>
        <td><a href="#" class="btn btn-primary"> التفاصيل</a></td>
      </tr>
      <tr>
        <td>دائره 2</td>
        <td>333</td>
        <td>33%</td>
        <td>333</td>
        <td>33%</td>
        <td><a href="#" class="btn btn-primary"> التفاصيل</a></td>
      </tr>
      <tr>
        <td>دائره 3</td>
        <td>887</td>
        <td>80%</td>
        <td>887</td>
        <td>80%</td>
        <td><a href="#" class="btn btn-primary"> التفاصيل</a></td>
      </tr>
      <tr >
        <td>دائره 4</td>
        <td>322</td>
        <td>50%</td>
        <td>322</td>
        <td>50%</td>
        <td><a href="#" class="btn btn-primary"> التفاصيل</a></td>
      </tr>
      <tr>
        <td>دائره 5</td>
        <td>333</td>
        <td>33%</td>
        <td>333</td>
        <td>33%</td>
        <td><a href="#" class="btn btn-primary"> التفاصيل</a></td>
      </tr>
      <tr>
        <td>دائره 6</td>
        <td>887</td>
        <td>80%</td>
        <td>887</td>
        <td>80%</td>
        <td><a href="#" class="btn btn-primary"> التفاصيل</a></td>
      </tr>
      <tr >
        <td>دائره 7</td>
        <td>322</td>
        <td>50%</td>
        <td>322</td>
        <td>50%</td>
        <td><a href="#" class="btn btn-primary"> التفاصيل</a></td>
      </tr>
      <tr>
        <td>دائره 8</td>
        <td>333</td>
        <td>33%</td>
        <td>333</td>
        <td>33%</td>
        <td><a href="#" class="btn btn-primary"> التفاصيل</a></td>
      </tr>
      <tr>
        <td>دائره 9</td>
        <td>887</td>
        <td>80%</td>
        <td>887</td>
        <td>80%</td>
        <td><a href="#" class="btn btn-primary"> التفاصيل</a></td>
      </tr>
    </tbody>
  </table>
</main>
<script src="https://code.jscharting.com/2.9.0/jscharting.js"></script>
<script src="index.js"></script>
@endsection