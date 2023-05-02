@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sideBar')
@section('content')
     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
         <!-- labels edited to arabic -->
        <h1>إضَافِه منتخب</h1>
        <div class="col-md-2"></div>
        <div class="col-md-6 col-lg-8 text-center">
            <div id="form_content">                
                <form method="post" action="{{route('addVoter')}}">
                @csrf
                    <div class="form-group">
                    <div class="form-group">
                        <label> كود الانتخابات</label>
                        <select class=" form-control " dir="rtl" name="election_id">
                <option  disabled selected>اختر الإنتخابات الحالية</option>
                  @isset($elections)
                      @foreach($elections as $key => $value )
                        <option value="{{$key}}">
                          {{decrypt($value)}}
                        </option>
                      @endforeach
                  @endisset
                  @error('election_id')
                  <span class="text-danger">{{$message}}</span>
                  @enderror

              </select>               
                    </div>
                    <div class="form-group">
                     <label for="inputlg">الدائرة الإنتخابية</label>
                    <select name="region_id" class="form-control text-right" dir="rtl"> 
                    @foreach($regions as  $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                        </select>                
                    </div>
                                  
                    <div class="form-group">
                     <label for="inputlg">اللجنة الإنتخابية</label>
                    <select name="committee_id" class="form-control text-right" dir="rtl"> 
                    @foreach($committees as  $key=>$value)
                    <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                        </select>                
                    </div>

                      <label for="Input1">الأسم</label>
                      <input type="text" name="name" class="form-control" id="Input1">
                    </div>
                    <div class="form-group">
                      <label for="Input2">الرقم القومي</label>
                      <input type="text" name="national_id" class="form-control" id="Input2">
                    </div>
                    <div class="form-group">
                        <label for="Input3"> بصمه الاصبع</label>
                        <input type="file" name="fingerprint" class="form-control" id="Input3">
                    </div>
                    
                    <!-- added link and edited the button -->
                    <button class="btn"style="background-color:#ea5455;margin-bottom:30px;">إضَافِه</button>
                </form>            
        </div>      
    </div>
</main>
@endsection
