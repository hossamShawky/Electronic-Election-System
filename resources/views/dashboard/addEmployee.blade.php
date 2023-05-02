@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sideBar')
@section('content')
     <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
         <!-- labels edited to arabic -->
        <h1>إضَافِه اعضاء اللجنه</h1>
        <div id="back">
            <div id="form_content">                
                <form method="post" action="{{route('addEmployee')}}" > 
                @csrf
               
                 <input type="text " hidden name ="election_id" value="4">
                 <div class="form-group">
                  <label for="inputlg">اللجنه</label>
                  <select name="committee_id" class="form-control text-right" dir="rtl"> 
                   @foreach($committees as  $key=>$value)
                 <option value="{{$key}}">{{$value}}</option>
                   @endforeach  
		             </select>                
                 </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">الأسم</label>
                      <input type="text" name="name" class="form-control" id="Input1">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput2">الرقم القومي</label>
                      <input type="text" class="form-control"name="national_id" id="Input2">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">كلمة المرور</label>
                        <input type="password" class="form-control" id="Input3" name="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput4">نوع العضو</label>
                        <select class=" form-control " dir="rtl" name ="role">
                            <option  disabled selected>اختر عضو</option>
                            <option value="Advisor">محكم لجنه</option>
                            <option value="Employee">موظف</option>
                        </select>                
                    </div>
                    <!-- added link and edited the button -->
                    <input type="submit" id="submit"  value="اضافه اللجنة" class="btn" style="background-color: #ea5455;float:right;margin-bottom:20px;">

                </form>            
            </div> 
        </div>      
</main>
@endsection