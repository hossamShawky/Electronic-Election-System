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
                <form>
                    <div class="form-group">
                    <div class="form-group">
                        <label> كود الانتخابات</label>
                        <select class=" form-control " dir="rtl" >
                            <option  disabled selected>مجلس شعب-001 </option>
                        </select>                
                    </div>
                    <div class="form-group">
                        <label> المنطقه الانتخابيه</label>
                        <select class=" form-control " dir="rtl" >
                            <option  disabled selected>شمال الدلتا</option>
                        </select>                
                    </div>
                    <div class="form-group">
                        <label> اللجنه الانتخابيه</label>
                        <select class=" form-control " dir="rtl" >
                            <option  disabled selected> مدرسه الحريه بنبن</option>
                        </select>                
                    </div>
                      <label for="Input1">الأسم</label>
                      <input type="email" class="form-control" id="Input1">
                    </div>
                    <div class="form-group">
                      <label for="Input2">الرقم القومي</label>
                      <input type="text" class="form-control" id="Input2">
                    </div>
                    <div class="form-group">
                        <label for="Input3"> بصمه الاصبع</label>
                        <input type="file" class="form-control" id="Input3">
                    </div>
                    
                    <!-- added link and edited the button -->
                    <button class="btn"style="background-color:#ea5455;margin-bottom:30px;">إضَافِه</button>
                </form>            
        </div>      
    </div>
</main>
@endsection
