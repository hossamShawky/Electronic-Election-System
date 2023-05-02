<!DOCTYPE html>
<html>
<head>
	<title>محكم اللجنة</title>
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<style type="text/css">
	body{
		font-weight: bold;
		direction: rtl;
		font-family: "Droob7"
	}
	.nav-tabs
	{
	background-color: #2d4059;
	padding: 5px;

	}
	.search {background-color: #2d4059;}
	.nav-tabs>li>a	
	{
			color: white;
	}
	.tab-content
	{
		margin-top: 85px;
	}
	
	td>img {
		width: 30px;
		height: 30px;
	}

	.day1 {float: right; margin-left: 25px;text-align: center;}

	.day1>label ,.day2>label {margin-right: 20px;}
</style>

</head>
<body>



<div class="container-fluid">
		<!-- Nav tabs navbar-right -->	
<ul class="nav nav-tabs navbar-fixed-top">
  <li class="nav-item pull-right">
    <a class="nav-link active" data-toggle="tab" href="#employees">الموظفون</a>
  </li>
  <li class="nav-item pull-right">
    <a class="nav-link" data-toggle="tab" href="#candidate">المرشحين</a>
  </li>
  <li class="nav-item pull-right">
    <a class="nav-link" data-toggle="tab" href="#voters">الناخبين</a>
  </li>
  <li class="nav-item pull-right	">
    <a class="nav-link" data-toggle="tab" href="#results"> الاحصائيات</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane container active" id="employees">

<table class="table text-center table-dark table-striped" border="2">
	<tr>
		<td>اسم الموظف</td>
		<td>الرقم القومي</td>
		<td>العنوان</td>
		<td>رقم الهاتف</td> 
	</tr>
	<tr>
		<td>اسم الموظف الاول </td>
		<td>12698745962014</td>
		<td>المنيا - ......</td>
		<td>0110000000</td> 
	</tr>

	<tr>
		<td>اسم الموظف  الثاني </td>
		<td>12690005962014</td>
		<td>المنيا - ......</td>
		<td>0150000000</td> 
	</tr>

	<tr>
		<td>اسم الموظف الثالث </td>
		<td>12698780262014</td>
		<td>المنيا - ......</td>
		<td>0120000000</td> 
	</tr>
</table>

  </div>
  <div class="tab-pane container fade" id="candidate">
  	
<table class="table text-center table-dark " border="2">
	<tr>
		<td>اسم المرشح</td>
		<td>الرقم القومي</td>
		<td>العنوان</td>
		<td>رقم الهاتف</td> 
		<td>الوظيفه </td> 
		<td> رمز</td> 
		<td>الرقم الانتخابي </td> 
		<td>مرشح عن </td> 
		<td> دائره </td> 
	</tr>
	<tr>
		<td> اسم المرشح الاول</td>
		<td>12698745962014</td>
		<td>المنيا - ......</td>
		<td>0110000000</td> 
		<td>  طبيب بشري</td>
		<td>الكتاب  <img src="index.png"></td>
		<td>5</td>
		<td> فردي-مستقل</td>
		<td> المنيا </td> 

	</tr>

	<tr>
		<td>اسم المرشح الثاني</td>
		<td>12690005962014</td>
		<td>المنيا - ......</td>
		<td>0150000000</td> 
		<td>  طبيب بشري</td>
		<td>الكتاب  <img src="index.png"></td>
		<td>3</td>
		<td>  فردي-حزب1</td>
		<td> المنيا </td> 
	</tr>

	<tr>
		<td> اسم المرشح الثالث </td>
		<td>12698780262014</td>
		<td>المنيا - ......</td>
		<td>0120000000</td> 
		<td>رجل اعمال</td>
		<td>الكتاب  <img src="index.png"></td>
		<td>9</td>
		<td> فردي-حزب2</td>
		<td> المنيا </td> 
	</tr>
</table>


  </div>
  <div class="tab-pane container fade"  id="voters">

<div class="alert text-center search">
<form class="navbar-form " style="display: inline;" action="vote">

 <input type="number" id="nId" name="nId" placeholder="أدخل الرقم القومي للمواطن" class="form-control">  
<input type="submit" id="submit" value="بحث" class="form-control">  
</form>
 
</div>
<table class="table text-center table-dark table-striped" border="2">
	<tr>
		<td>اسم الناخب</td>
		<td>الرقم القومي</td>
		<td>العنوان</td>
		<td>مقر و رقم اللجنه</td> 
		<td> أضيف بواسطه الموظف</td> 
	</tr>
	<tr>
		<td>اسم الناخب الاول </td>
		<td>12698745962014</td>
		<td>المنيا - ......</td>
		<td>المنيا-2</td> 
		<td>اسم الموظف</td>
	</tr>

	<tr>
		<td>اسم الناخب  الثاني </td>
		<td>12690005962014</td>
		<td>المنيا - ......</td>
		<td>المنيا-6</td> 
		<td>اسم الموظف</td>
	</tr>

	<tr>
		<td>اسم الناخب الثالث </td>
		<td>12698780262014</td>
		<td>المنيا - ......</td>
		<td>المنيا--4</td> 
		<td>اسم الموظف</td>
	</tr>
</table>
        </div>



  <div class="tab-pane container fade"  id="results">
<div class="row">
<table class="table text-center" border="2">
	<tr>
		<td>رقم اللجنه</td>
		<td>اليوم  </td>
		<td>عدد الناخبين في  الثلاث ساعات الاولي</td>
		<td>عدد الناخبين ما بعد الظهر</td>
		<td>عدد الناخبين ما بعد العصر</td>
		<td>اجمالي عدد الناخبين</td>
		<td>نسبه الناخبين</td>
				<td>رسم توضيحي</td>

	</tr>
<tr>
		<td>45</td>
		<td> الاول</td>
		<td>198 ناخب</td>
		<td>345 ناخب</td>
		<td>598 ناخب</td>
		<td>4141 ناخب</td>
		<td>95.05%</td>

		<td style="max-width: 500px;overflow: hidden;">
			<div id="piechart"></div>
		 </td>
	</tr>


 

</table>




</div>


  </div>
</div>

</div>
<script type="text/javascript">

// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['عدد الناخبين ما بعد العصر', 7],
  ['عدد الناخبين ما بعد الظهر', 6],
  ['دد الناخبين في الثلاث ساعات الاولي', 2]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'متباعه حركه الانتخابات', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
   
  chart.draw(data, options);
}
</script>

</body>
</html>