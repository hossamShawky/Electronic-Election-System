@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sideBar')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<!----------------------- start ------------------------>

<!-- ------------------ form to add Regions ------------------->
<form id="regionForm" method="POST" action="{{route('addRegionsRequest')}}" enctype="multipart/form-data" > 
          @csrf
          <h1 class="text-center"> إضَافِه حمله انتخابية</h1><hr>
              @if(Session::get('message'))
                    <div class="alert alert-info"
                    > {{Session::get('message')}}</div>
              @endif
            <!-- @isset($errors)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endisset  -->
      <h1 class="text-center"> إضَافِه دوائر</h1>
      <div class="form-group">
      <label>كود  الانتخابات </label>
        
          <select class="custom-select" name="code">
              <option value="" selected>Choose election</option>
                @foreach ($elections as $key => $value)
                  <option value="{{ $key }}">{{decrypt($value)}}</option>
                @endforeach 
          </select>
          @if(isset($errors))
              <div class="invalid-feedback">
                  {{ $errors->first('code') }}
              </div>
          @endif
      </div>
      <div class="row">

      <div class="form-group col-lg-4">
                      <label for="Input2">اسم الدائرة</label>
                      <input type="checkbox" class="form-control" placeholder ="ادخل اسم الدئرة" id="Input2">
      </div>
      <div class="form-group col-lg-4 ">
                      <label for="Input2">رقم الدائرة</label>
                      <input type="checkbox" class="form-control"  placeholder ="ادخل رقم الدئرة" id="Input2">
      </div>
      <div class="form-group col-lg-4 ">
                      <label for="Input2">عدد المقاعد</label>
                      <select class="custom-select" name="code">
                        @for($i=1; $i<10; $i++)
                        <option value="{{ $i }}">{{$i}}</option>
                        @endfor 
                      </select>
                      
                            </div>


      </div>
      <input id="saveRegion" type="submit" value="أَضَافَه" class="btn btn-danger btn-lg btn-block" style="outline:none;">
    </form>
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