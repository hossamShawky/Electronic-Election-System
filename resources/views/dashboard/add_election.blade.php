@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sideBar')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"> 
    <div class="col-md-2"></div>
        <div class="col-md-6 col-lg-8 text-center">
            <div id="form_content">  
        <form action="" id="electionForm" method="POST" enctype="multipart/form-data"> 
          @csrf
            <h1 class="text-center"> إضَافِه حمله انتخابية</h1><hr>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif 
              <div class="form-group">
                  <label for="inputlg" > كود الإنتخابات</label>
                  <input class="form-control input-lg{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code"  id="inputlg" type="text" placeholder="ادخل كود الحمله الإنتخابية"dir="rtl">
            </div>
             <div class="form-group">
                  <label for="inputlg" >نوع  الانتخابات </label>
                      
                      <select class="custom-select{{ $errors->has('type') ? ' is-invalid' : '' }}" id="type" name="type">
                          <option value="" selected>Choose election</option>
                          @foreach($elections as $election)
                              <option value="{{ $election['type']}}">{{$election['type']}}</option>
                          @endforeach
                      </select>
                      @if($errors->has('type'))
                          <div class="invalid-feedback">
                              {{ $errors->first('type') }}
                          </div>
                      @endif
                  </div>
              <div class="form-group">
                  <label for="inputlg">تاريخ البداية</label>
                  <input class="form-control input-lg date{{ $errors->has('start_date') ? ' is-invalid' : '' }}" type="date" name="startDay" min="2020-01-01"
                  max="3000-12-31" placeholder="yyyy/mm/dd" style="text-align:right" required>
            </div>
                  <div class="form-group">
                  <label for="inputlg">تاريخ النهاية</label>
                  <input class="form-control input-lg date{{ $errors->has('end_date') ? ' is-invalid' : '' }}" type="date" placeholder="yyyy/mm/dd" name="endDay" min="2020-01-01"
                  max="3000-12-31" style="text-align:right" required>
            </div> 
            <!-- added the link -->
            <button class="btn btn-lg" id="saveElection" style="background-color: #ea5455;float:right">
             التالي
            </button>
          </form>
        </div>
    </div>
</main> 
    
@endsection
@section('scripts')
<script type="text/javascript">
  $(document).on('click','#saveElection',function(e){
    e.preventDefault();
  
  var formData =new FormData($('#electionForm')[0]);
  $.ajax({
    type:'POST',
    enctype:'multipart/form-data'
    url: "{{route('addElection')}}",
    data:formData,
    proceessData: false,
    contentType: false,
    cache: false,
    success:function (data){
      console.log();
          // $("#container-fluid").load($(this).attr(url:'addRegion/'));
        //$(function ()
        //  {
        //     jQuery.ajax({
        //        // enctype:'multipart/form-data',
        //        url : 'addRegion',
        //        type : "GET",
        //        dataType : "json",
        //        success:function (data) {}
        //     });
        // }
      
    },
    error:function(reject){ },
    });
});

</script>
@endsection
