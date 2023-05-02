@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sideBar')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<!----------------------- start ------------------------>

<!-- ------------------ form to add Regions ------------------->
<form id="regionForm" method="POST" enctype="multipart/form-data"> 
          @csrf
          <h1 class="text-center"> إضَافِه حمله انتخابية</h1><hr>
            @isset($errors)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endisset 
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
    </form>
    <button id="saveRegion" type="submit" class="btn btn-danger btn-lg btn-block" style="outline:none;">أَضَافَه
    </button><hr>
<!------------------------------ end -- ------------------>

<!----------------------- form to add Candidates ---------->

<form  id="candidateForm" method="POST" class="text-right" enctype="multipart/form-data"> 
  @csrf
    <h1 class="text-center"> إضَافِه مرشحين</h1><hr>
    <div class="form-group ">
      <div class="form-group">
            <label>كود  الانتخابات </label>
              <select class="custom-select"  name="election_id" required>
                  <option value="" selected>Choose election</option>
                  @foreach ($elections as $key => $value)
                    <option value="{{$key}}">{{decrypt($value)}}</option>
                  @endforeach 
              </select>
              @if(isset($errors))
                  <div class="invalid-feedback">
                      {{ $errors->first('election_id') }}
                  </div>
              @endif
          </div>
      <button class="btn btn-lg btn-danger btn-lg btn-block" style="outline:none;" id="saveCandidate">التالي</button><hr>
    </div>
  </form>
 <!----------------------- end ------------------------>


<!-- ------------------ form to add voter ------------------->
   <form id="voterForm"   method="POST" class="text-right" enctype="multipart/form-data"> 
      @csrf
      <h1 class="text-center"> إضَافِه  منتخبين </h1>
      <div class="form-group ">
        <div class="form-group">
            <label>كود  الانتخابات </label>
            <select class="custom-select"  name="code">
                <option value="" selected>Choose election</option>
                @foreach ($elections as $key => $value)
                  <option value="{{ $key }}">{{decrypt($value)}}</option>
                @endforeach 
            </select>
          </div>
    </div>
   </form>
    <button id="saveVoter" onClick="add" class="btn btn-danger btn-lg btn-block" style="outline:none;">أَضَافَه
    </button><hr>
<!------------------------------ end -- ------------------>

 <!----------------------- end ------------------------>
</main>
@endsection
@section('scripts')
<script type="text/javascript">
  $(document).on('click','#saveRegion',function(e){
    e.preventDefault();
  
  var formData =new FormData($('#regionForm')[0]);
  $.ajax({
    type:'POST',
    enctype:'multipart/form-data',
    url: "{{url('api/addRegionsRequest')}}",
    data:formData,
    proceessData: false,
    contentType: false,
    cache: false,
    success:function (data){
      console.log();
    },
    error:function(reject){ },
    });
});


$(document).on('click','#saveVoter',function(e){
    e.preventDefault();
  
  var formData =new FormData($('#voterForm')[0]);
  $.ajax({
    type:'POST',
    enctype:'multipart/form-data',
    url: "{{url('api/addVotersRequest')}}",
    data:formData,
    proceessData: false,
    contentType: false,
    cache: false,
    success:function (data){
      console.log();
    },
    error:function(reject){ },
    });
});


$(document).on('click','#savecandidate',function(e){
    e.preventDefault();
  
  var formData =new FormData($('#candidateForm')[0]);
  $.ajax({
    type:'POST',
    enctype:'multipart/form-data',
    url: "{{url('api/addCandidatesRequest')}}",
    data:formData,
    proceessData: false,
    contentType: false,
    cache: false,
    success:function (data){
      console.log();
    },
    error:function(reject){ },
    });
});

</script>
@endsection