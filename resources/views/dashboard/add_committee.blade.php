@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sideBar')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <form action="{{ route('addCommittee') }}" method="POST"> 
         {{ csrf_field() }}
                <h1 class="text-center"> إضَافِه لجنه</h1><hr>
              <!-- labels edited to arabic -->
              <!-- --------------------------------------- -->
              
                        <!-- ---------------------------------------- -->

                  <div class="form-group">
                  <label for="inputlg" >اسم اللجنة</label>
                  <input name="name" class="form-control input-lg date" type="text" >
                </div>
                <!-- <div class="form-group">
                  <label for="inputlg" >وقت البداية</label>
                  <input name="start_time" class="form-control input-lg date" type="time" >
                </div>
                <div class="form-group">
                  <label for="inputlg" >وقت النهاية</label>
                  <input name="end_time" class="form-control input-lg date" type="time"  >
                </div> -->
                 <div class="form-group">
                  <label for="inputlg">الدائرة الإنتخابية</label>
                  <select name="region_id" class="form-control text-right" dir="rtl"> 
                   @foreach($regions as  $key=>$value)
                 <option value="{{$key}}">{{$value}}</option>
                   @endforeach
		             </select>                
                 </div>
                <div class="form-group">
                  <label for="inputlg">عنوان الدائرة الإنتخابية</label>
                  <input class="form-control input-lg" id="inputlg" type="text">
                </div>

                <!-- will change  -->
                <div class="form-group">
                  <label for="inputlg" >langtuide</label>
                  <input name="lat" class="form-control input-lg date" type="decimal" >
                </div>
                <div class="form-group">
                  <label for="inputlg" >latituide</label>
                  <input name="lng" class="form-control input-lg date" type="decimal"  >
                </div>
                
                <input name="election_id" value="4" class="form-control input-lg date" type="number"  hidden>
                <!-- added two links -->
                <input type="submit" id="submit"  value="اضافه اللجنة" class="btn" style="background-color: #ea5455;float:right;margin-bottom:20px;">

              </form>

              <div id="googleMap" style="width:100%;height:400px;"></div>


          </main>

          <script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script
            @endsection

