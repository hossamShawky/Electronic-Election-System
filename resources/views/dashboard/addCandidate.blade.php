@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sideBar')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <form action="/addCandidate" method="POST" class="text-right"> 
	    @csrf
                <h1 class="text-center"> إضَافِه مرشح</h1>
				<hr>
		<!-- Form TO Enter Candidate Data -->
		<div class="form-group ">
                <label>ادخل الاسم كاملا</label>
				<input  class="form-control text-right"type="text"  name="name" placeholder="ادخل الاسم رباعيا كما في البطاقه"><br>
		<label>ادخل اسم الشهره </label>
		<input  class="form-control text-right"type="text"  name="sur_name" placeholder="ادخل  اسم الشهره للمرشح"><br>
		<label >ادخل الرقم الانتخابي</label>
		<input type="nubmer" name="serial_number" class="form-control text-right" placeholder= "ادخل الرقم الانتخابي للمرشح"><br>
		
		<label>مرشح عن</label>
		<!-- dir="rtl" to make the select content in right -->
			<select name="party" class="form-control text-right" dir="rtl"> 
			<option value="مستقل">مستقل </option>
@foreach($lists as $l)
<option value="{{$l->id}}">{{$l->name}}</option>

@endforeach
		</select>
		<br>
		<label>ادخل البرنامج الانتخابي</label>
		<textarea name="program" class="form-control text-right" placeholder="ادخل البرنامج الانتخابي للمرشح والرؤيه والاهداف" ></textarea><br>
		<label >ارفق صوره المرشح</label>
		<input type="file" name="image" class="form-control text-right"><br>
		<label >ارفق صوره رمز المرشح</label>
		<input type="file" name="symbol" class="form-control text-right"><br>
		<label >  ادخل رمز المرشح</label>
		<input type="text" name="symbol_name" class="form-control text-right" placeholder="ادخل اسم رمز المرشح"  ><br>
		<label > ادخل الرقم القومي</label>
		<input type="nubmer" name="national_id" class="form-control text-right" placeholder="ادخل الرقم القومي للمرشح"><br>
		
		<label>دائرة الناخب</label>
		<!-- dir="rtl" to make the select content in right -->
			<select name="region_id" class="form-control text-right" dir="rtl"> 
  @foreach($regions as $r)
<option value="{{$r->id}}">{{$r->name}}</option>

@endforeach
		</select> 
		<label>الحملة الأنتخابية</label>
		<!-- dir="rtl" to make the select content in right -->
			<select name="election_id" class="form-control text-right" dir="rtl"> 
				@foreach($elections as $key=>$value)
					<option value="{{ $key }}">{{ decrypt($value)}}</option>
				@endforeach
		</select>
		
		
			<select name="collection_id" class="form-control text-right" dir="rtl"> 
			   <option value="مستقل">مستقل </option>
				@foreach($lists as $l)
				<option value="{{$l->id}}">{{$l->name}}</option>
				@endforeach
			</select>
		<!-- added the two links and style is edited -->
		<input type="submit" id="submit"  value="اضافه المرشح" class="btn" style="background-color: #ea5455;align:center;margin-bottom:20px;">
		
		<!-- <div class="actions">
		<input type="reset" name="reset"  value="الغاء / اعاده ادخال" class="btn btn-danger btn-lg btn-block"> <hr>
		
		</div> -->
  </form>

</main>
<script type="text/javascript">
 	
$('#submit').click(function(e){
	
var CID=document.getElementById('serial_id').value;
var EID=document.getElementById('election_id').value;

if(typeof(CID)!="nubmer" || typeof(EID)!="nubmer")
	alert('Erorr');

});
 </script>
  @endsection