@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sideBar')
@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <form id="candidateForm" method="POST" action="{{route('addCandidatesRequest')}}" enctype="multipart/form-data" > 
          @csrf
              @if(Session::get('message'))
                    <div class="alert alert-info"
                    > {{Session::get('message')}}</div>
              @endif	<h1 class="text-center"> إضَافِه مرشحين</h1><hr>
	<!-- Form TO Enter Candidate Data -->
	<div class="form-group ">
		<!-- ----------------------------------- -->
		<div class="form-group">
        	
        	<label>كود  الانتخابات </label>
            <select class="custom-select" id="code" name="election_id" required>
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
        <div class="form-group">
        	<label>اختر الدائره</label>
            <select class="custom-select" name="region_id" id="region_id" required>
                <option value="" selected>-- Choose region --</option>
                @foreach ($regions as $key => $value)
                   <option value="{{$key}}">{{$value}}</option>
                 @endforeach 
            </select>
            @if(isset($errors))
                <div class="invalid-feedback">
                    {{ $errors->first('region_id') }}
                </div>
            @endif
        </div>
	    
		<input class="btn btn-lg" type="submit" id="submit" value="التالي" name="submit" style="background-color: #ea5455;float:right;margin-bottom:20px;">
	</div>
 </form>

</main>

  <!-- <script type="text/javascript">
jQuery(document).ready(function ()
    {
        console.log('name');
            jQuery('select[name="election_id"]').on('change',function(){
               var electionID = jQuery(this).val();
               if(electionID)
               {
                  jQuery.ajax({
                     enctype:'multipart/form-data',
                     url : 'getRegions/' + electionID,
                     type : "GET",
                     dataType : "json",
                     success:function (data) {
                        console.log(data);
                        jQuery('select[name="region_id"]').empty();
                        jQuery.each(data, function(key,value){
                           $('select[name="region_id"]').append(
                            '<option value="'+ key +'">'+ value +'</option>'
                            );
                        });
                     }
                  });
               }
               else
               {
                  $('select[name="region_id"]').empty();
               }
            });
    });
 </script> -->
@endsection