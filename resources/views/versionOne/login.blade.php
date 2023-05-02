@extends('versionOne.layouts.add')
@section('title', 'تسجيل دخول')
@section('content')

<style type="text/css">
	body{ 
		/*e5e5e5-2d4059-decdc3-ea5455-f57575-5d728d*/
		background-color: #e5e5e5;
        max-height: 120px;
        font-weight: bold;
        direction: rtl;
}
.login-form{
    background: #fff;
    margin-top: 5%; 
    width: 70%;
}
.login-form .form-control{
    border-radius:2rem;
}
.login-image{
    text-align: center;
}
.login-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(30deg);
}
.login-form form{
    padding: 14%;
}
.login-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    color: #1c191b;
}
.login-form .btnLogin {
    width: 50%; 
    border: none;
    border-radius: 1rem;
    padding: 1.5%;   
    background-color: #2d4059;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
 
 
.login-form .label{padding-right: 15px; color: black; font-size: 15px}  
</style>


 
    <div class="container login-form " >
       

        <div class="login-image">
            <img src="images/rocket_contact.png" alt="image"/>
        </div>

        <form method="POST" action="/login" enctype="multipart/form-data" class="text-center"> 
             @csrf

           <h3>تسجيل الدخول</h3>
           <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    	<!-- col-sm-6 col-md-12 col-lg-6	 -->
                     <div class="form-group">
                         @error('fullName')
                            <span class="alert" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" class="form-control @error('fullName') is-invalid @enderror" required autocomplete="fullName" autofocus name="fullName" placeholder="أدخل الاسم رباعى" > 
                    </div>
                    <div class="form-group">
                       @error('national_id')
                        <span class="alert" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                       @enderror
                        <input type="text" name="national_id"  placeholder="أدخل الرقم القومي" class="form-control @error('national_id') is-invalid @enderror" required autocomplete="national_id" autofocus>
                       
                    </div>
                    <div class="form-group">
                         @error('electionCode')
                            <span class="alert" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                        <input type="text" class="form-control @error('electionCode') is-invalid @enderror" required autocomplete="electionCode" autofocus name="electionCode" placeholder="أدخل كود الحمله الانتخابيه" > 
                    </div>
                    <div class="form-group">
                        @error('password')
                            <span class="alert" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="password" name="password"class="form-control @error('password') is-invalid @enderror" required autocomplete="password" autofocus placeholder="أدخل الرقم السري" />
                    </div>
<!-- Select Type -->
<!-- 
                     <div class="options "> 
                        <input type="radio"  name="role" id="Advisor" value="Advisor"><label class="label" for="Advisor"> 
                        محكم لجنه </label>


                        <input type="radio" id="Employee"  name="role" value="Employee"> <label class="label" for="Employee">
                        موظف<label>

                      </div> -->

                      <hr>
                    <div class="form-group text-center">
                             <input type="submit"  class="btnLogin" value="تسجيل الدخول" />
                    </div>

                    </div>
                  
                </div>
            </form>
 
</div>
@stop