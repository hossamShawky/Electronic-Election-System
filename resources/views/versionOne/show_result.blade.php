 @extends('versionOne.layouts.add') 
@section('title', 'صفحه النتيجه')
@section('content')

<style>
 img{border-radius:50%;}
 .numberCircle {
    border-radius: 0% ;
    width: 100px ;
    height: 50px;
    padding: 10px;
    margin-left:-50px;
    margin-bottom:-10px;
    background: #2d4059;
    border: 1px solid #e59866;
    color: #e59866;
    text-align: center;
    font: 26px Arial, sans-serif;
}
.sur_name{
  color:#F1C40F; 
  padding-top:20px;
}

</style>
<div class="container-fluid text-center">
 
  <div class="row ">
      <div class="col-lg-1 " ></div>
      <div id="columnchart_values" class="col-lg-4" style="" ></div>
      <div class="col-lg-2 " ></div>
      <div id="piechart"class="col-lg-4" style="padding-left:40px" ></div>
      <div class="col-lg-1 " ></div>
    </div>  
  <div class="row"> 
     <div class="col-lg-1 " >
        
      </div>
     <div class="col-lg-10  " >
        <table class="table table-hover" style="background:#2d4059;"dir=rtl>
            <!-- <thead style="color:whitesmoke">
                <tr>
                    <td> صورة المرشح </td>
                    <td> اسم الشهره </td>
                    <td>  الاصوات المكتسبة </td>
                </tr>
            </thead> -->
            
             <tbody>
            @foreach($candidates as $index=>$candidate)
            <tr >
               
            <td ><img src="{{asset('images/'.$candidate->image)}}" alt="" width=70px height=70px></td>
            <td ><h4 class="sur_name" > {{$candidate->name}}</h4></span></td>
            <td ><h4 class="sur_name" > {{$candidate->id}}</h4></span></td>
            <td ><div class="numberCircle">
     
     {{$results[$index][1]}}

     
     </div></td>
             
            
            </tr>
            @endforeach
            </tbody>
        </table>
     </div>
  </div>
  
  

</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["candidate", "vote", { role: "style" } ],
        ['mohamed',     11000,'color:#e5e8e8'],
        ['ali',      20000,'color:#fadbd8'],
        ['hoda',  14502,'color:#fcf3cf'],
        ['ibrahim', 24404,'color: #cb4335'],
        ['omer',    71011,'color:#1a5276'],
        ['salah',  24444,'color:#e59866'],
       
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "number of votes for each candidate",
        width: 700,
        height: 400,
        bar: {groupWidth: "50%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
  <script type="text/javascript">
     google.charts.load('current', {'packages':['corechart']});
     google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ["candidate", "voter"],
        ['mohamed',     11000],
        ['ali',      20000],
        ['hoda',  14502],
        ['ibrahim', 24404],
        ['omer',    71011],
        ['salah',  24444]
       
      ]);

      var options = {
        title: 'percent of candidates votes',
        slices: {
            0: { color: '#e5e8e8' },
            1: { color: '#fadbd8' },
            2: { color: '#fcf3cf' },
            3: { color: '#cb4335' },
            4: { color: '#1a5276' },
            5: { color: '#e59866' }
        }
    };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>

<!-- <script src="https://www.gstataic.com/charts/loader.js"></script>
        <script>
           google.charts.load('current',{packages:['corechart']});
           google.charts.setOnLoadCallback(drawChart);

           function initialize() {
              var opts = {sendMethod: 'auto'};
              // Replace the data source URL on next line with your data source URL.
              var query = new google.visualization.Query('http://localhost:8000/api/citizens/9', opts);

              // Optional request to return only column C and the sum of column B, grouped by C members.
              query.setQuery('select C, sum(B) group by C');

              // Send the query with a callback function.
              query.send(handleQueryResponse);
            }

            function handleQueryResponse(response) {

              if (response.isError()) {
                alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
                return;
              }

              var data = response.getDataTable();
              var chart = new google.visualization.PieChart(document.getElementById('piechart'));
              chart.draw(data, {width: 500, height: 200, is3D: true});
            } 


        </script> -->
@endsection

