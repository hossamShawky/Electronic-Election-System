@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sideBar')
@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        
<div class="col-md-2"></div>
    <div class="col-md-6 col-lg-8 text-center">
        <div id="form-content">                
          <form action="addVoters" method="POST">
            @csrf
           <h1 class="text-center"> إضَافِه الناخبين</h1><hr>
            <div class="form-group">
               <label for="inputlg"> أختر كود الانتخابات</label> 
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
            <label for="inputlg">عمرالناخب</label>
            <div class="row">
                <div class="col-md-2 col-lg-5"> <label for="inputlg">من</label> <input type="number" class=" form-control " dir="rtl" name="from"></div>
                <div class="col-md-2 col-lg-5"> <label for="inputlg">الى</label> <input type="number" class=" form-control " dir="rtl" name="to"></div>
             </div>
            </div>

            <div class="form-group">
                <label for="inputlg"> أختر شروط الاضافه</label>
              <div class="row">
                <div class="col-md-2 col-lg-2"> <label for="inputlg">اسم الناخب</label> <input type="checkbox" class=" form-control " dir="rtl" name="name"></div>
                <div class="col-md-2 col-lg-2"> <label for="inputlg">بصمه الناخب</label> <input type="checkbox" class=" form-control " dir="rtl" name="fingerprint"></div>
                <div class="col-md-2 col-lg-2"> <label for="inputlg">الرقم القومي</label> <input type="checkbox" class=" form-control " dir="rtl" name="national_id"></div>
                <div class="col-md-2 col-lg-2"> <label for="inputlg">الدائرة الانتخابيه</label> <input type="checkbox" class=" form-control " dir="rtl" name="region"></div>
                @error('number_of_seats')
                <span class="text-danger">{{$message}}</span>
                @enderror
             </div>
           </div>


         

            <div class="form-group">
            <input type="submit" value="اضافه الناخبين" class="btn btn-primary">
            </div>
          </form>
          </div>
        </div>
</main>

@endsection
