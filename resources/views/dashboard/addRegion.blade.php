@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sideBar')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<!----------------------- start ------------------------>

<!-- ------------------ form to add Regions ------------------->
<h1>إضَافِه دائرة</h1>

          <div class="col-md-2"></div>
        <div class="col-md-6 col-lg-8 text-center">
            <div id="form_content">                
                <form id="regionForm" method="POST" action="{{route('addRegion')}}" enctype="multipart/form-data" > 
                     @csrf
                    <div class="form-group">
                    <div class="form-group">
                        <label for="Input1"> كود الانتخابات</label>
                        <select class="custom-select" name="election_id">
                          <option value="" selected>اختر كود الحملة الأنتخابية</option>
                             @foreach ($elections as $key => $value)
                                  <option value="{{ $key }}">{{ decrypt($value)}}</option>
                             @endforeach 
                          </select>                    
                        </div>
                    <div class="form-group">
                        <label for="Input2"> اسم الدائرة</label>
                        <input type="text" class="form-control" placeholder ="ادخل اسم الدئرة"name="name">
                    </div>
                    <div class="form-group">
                        <label for="Input3">رقم الدائرة</label>
                        <input type="text" class="form-control" placeholder ="ادخل رقم الدئرة" name="serial_number">
                    </div>
                      <label>عدد المقاعد</label>
                      <select class="custom-select" name="number_of_seats">
                        @for($i=1; $i<10; $i++)
                        <option value="{{ $i }}">{{$i}}</option>
                        @endfor 
                      </select>
                    </div>
                      <label>اسم القطاع</label>
                      <select class="custom-select" name="sector_id">
                      <option disabled selected>اختر القطاع</option>
                      <option value="1" >قطاع غرب الدلتا</option>
                      <option value="2" >قطاع شمال ووسط وجنوب الصعيد</option>
                      <option value="3" >قطاع القاهرة وجنوب ووسط الدلتا</option>
                      <option value="4" >قطاع شرق الدلتا</option>
                      </select>
                    </div>
                  
                    <!-- added link and edited the button -->
                    <button class="btn"style="background-color:#ea5455;margin-top:30px;">إضَافِه</button>
                   </div></form>            
        </div>      
    </div>
<!------------------------------ end -- ------------------>

 <!----------------------- end ------------------------>
</main>
@endsection
@section('scripts')
<!-- <script type="text/javascript">
  
  $(document).ready(function(){
    
    $('#regionForm').on('submit' , function(e){
    e.preventDefault();
  // var formData =new FormData($('#regionForm')[0]);
    $.ajax({
      type:'POST',
      // enctype:'multipart/form-data',
      url: "{{url('api/addRegionsRequest')}}",
      data:$('#regionForm').serialize(),
      // proceessData: false,
      // contentType: false,
      // cache: false,
      success:function (response){
        console.log(response)
      },
      error:function(error){
        console.log(response)
       },
      });
});
});


</script> -->
@endsection