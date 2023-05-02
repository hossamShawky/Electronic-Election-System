@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sideBar')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 " >
    <div class="col-lg-10">
        <h1 style="text-align:right;padding: 10px; font-weight: 500;">حدد اللجنه</h1>
        <form action="" id="Form" method="POST" enctype="multipart/form-data"> 
            @csrf
            <div class="row" > 
                <div class="col-lg-4 text-right" > 
                    <select class="custom-select{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name">
                        <option value="" selected>حدد المنطقه </option>
                        @foreach($regions as $region)
                            <option value="{{ $region['name']}}">{{$region['name']}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="col-lg-4 text-left" > 
                    <select class="custom-select{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name">
                        <option value="" selected>حدد اللجنه </option>
                        @foreach($regions as $region)
                            <option value="{{ $region['name']}}">{{$region['name']}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
            </div>
        </form>
    </div> 
                <!-- charts -->
                <div class="col-lg-10" >
                    <h1 style="text-align: center;padding-top: 30px; font-weight: 700;">لجنه مدرسه الحرية</h1>
                <div class="row">
                    <div class="col-lg-6 ">
                        <div id="piechart" style="width: 500px; height: 300px;"></div>
                    </div>
                    <div class="col-lg-6 col-lg-pull">
                        <div id="columnchart_values" style="width: 500px; height: 300px;"></div>
                    </div>
                </div>
                </div>
                <!-- commitee information -->
                <div class="col-lg-12 commitee-info" >
                    <h1 style="text-align: right;padding-top: 0px; font-weight: 700;">معلومات اللجنه</h1>
                    <div class="container">
                        <div class="row text-right">
                            <!-- row 1 -->
                            <div class="col-lg-3 column-right">رقم اللجنه</div>
                            <div class="col-lg-9 column-left"> 1</div>
                            <div class="col-lg-3 column-right">عدد مقاعد الدائره</div>
                            <div class="col-lg-9 column-left"> 4</div>
                           
                            <!-- row 2 -->
                            <div class="col-lg-3 column-left">المنطقه</div>
                            <div class="col-lg-9 column-right">المنيا</div>
                           
                            <!-- row 4 -->
                            <div class="col-lg-3 column-left">موعد البدء</div>
                            <div class="col-lg-9 column-right">7:00 صباحا </div>
                           
                            <!-- row 5 -->
                            <div class="col-lg-3 column-left">موعد الانتهاء</div>
                            <div class="col-lg-9 column-right">5:00 مساء</div>
                        </div>
                    </div>
                </div>
                <!-- commitee's employee information -->
                <div class="col-lg-12 commitee-e-info" >
                    <h1 style="text-align:right;padding-top: 0px; font-weight: 700;">معلومات موظفين اللجنه</h1>
                    <div class="container">
                        <div class="row text-right" >
                            <!-- row 1 -->
                            <div class="col-lg-6 column-right"> اسم الموظف</div>
                            <div class="col-lg-3 column-left"> نوع الموظف</div>
                            <div class="col-lg-3 column-left">التحكم </div>
                            <!-- row 2 -->
                            <div class="col-lg-6 column-right">محمد عبد الله</div>
                            <div class="col-lg-3 column-left">موظف 1</div>
                            <div class="col-lg-3 column-left"><button class="btn btn-danger">STOP</button></div>
                            <!-- row 3 -->
                            <div class="col-lg-6 column-right"> محمد عبد الله احمد</div>
                            <div class="col-lg-3 column-left">موظف 2</div>
                            <div class="col-lg-3 column-left"><button class="btn btn-danger">STOP</button></div>

                            <!-- row 4 -->
                            <div class="col-lg-6 column-right"> عبد الله احمد محمد</div>
                            <div class="col-lg-3 column-left">موظف 3</div>
                            <div class="col-lg-3 column-left"><button class="btn btn-danger">STOP</button></div>

                            <!-- row 5 -->
                            <div class="col-lg-6 column-right">احمد  عبد الله محمد</div>
                            <div class="col-lg-3 column-left">موظف 4</div>
                            <div class="col-lg-3 column-left"><button class="btn btn-danger">STOP</button></div>


                        </div>
                    </div>
                </div>

                    <!-- commitee's tabs information -->
                <div class="col-lg-12 commitee-e-info" >
                    <h1 style="text-align:right;padding-top: 0px; font-weight: 700;">معلومات اجهزه اللجنه اللجنه</h1>
                    <div class="container">
                        <div class="row text-right" >
                            <!-- row 1 -->
                            <div class="col-lg-6 column-right"> رقم الجهاز</div>
                            <div class="col-lg-3 column-left"> عنوان الجهاز</div>
                            <div class="col-lg-3 column-left">التحكم </div>
                            <!-- row 2 -->
                            <div class="col-lg-6 column-right"> 2 </div>
                            <div class="col-lg-3 column-left">A3:BD:23:3E:4E:22</div>
                            <div class="col-lg-3 column-left"><button class="btn btn-danger">disable</button></div>
                            <!-- row 3 -->
                            <div class="col-lg-6 column-right">1</div>
                            <div class="col-lg-3 column-left"> A3:BD:23:3E:4E:22 </div>
                            <div class="col-lg-3 column-left"><button class="btn btn-danger">disable</button></div>

                            <!-- row 4 -->
                            <div class="col-lg-6 column-right"> 3 </div>
                            <div class="col-lg-3 column-left"> A3:BD:23:3E:4E:22 </div>
                            <div class="col-lg-3 column-left"><button class="btn btn-danger">disable</button></div>

                        </div>
                    </div>
                </div>
                <!-- committe's tab information -->


                <!-- committe's voters information -->
                <div class="col-lg-12 commitee-v-info" >
                    <h1 style="text-align: right; font-weight: 700;">معلومات مصوتين اللجنه</h1>
                    <div class="container">
                        <div class="row text-right">
                            <!-- row 1 -->
                            <div class="col-lg-3 column-left" style="border-top:none;">نسبة الأصوات الصحيحة</div>
                            <div class="col-lg-9 column-right" style="border-top:none;">70%</div>
                            <!-- row 2 -->
                            <div class="col-lg-3 column-left">نسبة الأصوات المعارضة</div>
                            <div class="col-lg-9 column-right">20%</div>
                            <!-- row 3 -->
                            <div class="col-lg-3 column-left">نسبة الأصوات الباطلة </div>
                            <div class="col-lg-9 column-right">10%</div>
                            <!-- row 4 -->
                            <div class="col-lg-3 column-left">المصوتين ذو التعليم العالي </div>
                            <div class="col-lg-9 column-right">105</div>
                            <!-- row 5 --> 
                            <div class="col-lg-3 column-left">المصوتين ذو التعليم المتوسط</div>
                            <div class="col-lg-9 column-right">190</div>
                            <!-- row 6 --> 
                            <div class="col-lg-3 column-left">المصوتين الأميين</div>
                            <div class="col-lg-9 column-right">100</div>

                        </div>
                    </div>
                </div>
    @endsection

