@extends('versionOne.layouts.add')
@section('title', 'صفحه التصويت')
@section('content')
<section class="voting-page">
        <div class="vision-message">
            <div class="message-header">
                <div class="vision-cand">رؤيه المرشح للمقعد</div>
                <span class="close-vision">X</span>
            </div>
            <div class="container-fluid">    
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="container-fluid opac">
            <h1>التصوبت</h1>
            <div class="row">
                <div class="col-lg-8 row Candidates">
                    <div class="col-lg-4 col-md-6 col-sm-12 Candidate">
                        <div class="card-bg">
                            <div class="card">
                                <div class="card-front">
                                </div>
                                <div class="card-open">
                                  <div id="tick-mark"></div>
                                </div>
                          </div>
                          <h4>اسم المرشح:</h4>
                          <h5> الرقم التسلسلى:<span>1</span></h5>
                          <h5>الرمز: <span><i>المنزل</i></span></h5>
                          <h5>النوع: <span>plapla</span></h5>
                          <button class="vision-btn" name="">البرنامج الانتخابى</button>
                          <button class="vote-btn" name="">انتخاب</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 Candidate">
                        <div class="card-bg">
                            <div class="card">
                                <div class="card-front">
                                </div>
                                <div class="card-open">
                                  <div id="tick-mark"></div>
                                </div>
                          </div>
                          <h4>اسم المرشح:</h4>
                          <h5> الرقم التسلسلى:<span>1</span></h5>
                          <h5>الرمز: <span><i>المنزل</i></span></h5>
                          <h5>النوع: <span>plapla</span></h5>
                          <button class="vision-btn" name="">البرنامج الانتخابى</button>
                          <button class="vote-btn" name="">انتخاب</button>
                        </div>
                    </div>
                   <div class="col-lg-4 col-md-6 col-sm-12 Candidate">
                        <div class="card-bg">
                            <div class="card">
                                <div class="card-front">
                                </div>
                                <div class="card-open">
                                  <div id="tick-mark"></div>
                                </div>
                          </div>
                          <h4>اسم المرشح:</h4>
                          <h5> الرقم التسلسلى:<span>1</span></h5>
                          <h5>الرمز: <span><i>المنزل</i></span></h5>
                          <h5>النوع: <span>plapla</span></h5>
                          <button class="vision-btn" name="">البرنامج الانتخابى</button>
                          <button class="vote-btn" name="">انتخاب</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 Candidate">
                        <div class="card-bg">
                            <div class="card">
                                <div class="card-front">
                                </div>
                                <div class="card-open">
                                  <div id="tick-mark"></div>
                                </div>
                          </div>
                          <h4>اسم المرشح:</h4>
                          <h5> الرقم التسلسلى:<span>1</span></h5>
                          <h5>الرمز: <span><i>المنزل</i></span></h5>
                          <h5>النوع: <span>plapla</span></h5>
                          <button class="vision-btn" name="">البرنامج الانتخابى</button>
                          <button class="vote-btn" name="">انتخاب</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 Candidate">
                        <div class="card-bg">
                            <div class="card">
                                <div class="card-front">
                                </div>
                                <div class="card-open">
                                  <div id="tick-mark"></div>
                                </div>
                          </div>
                          <h4>اسم المرشح:</h4>
                          <h5> الرقم التسلسلى:<span>1</span></h5>
                          <h5>الرمز: <span><i>المنزل</i></span></h5>
                          <h5>النوع: <span>plapla</span></h5>
                          <button class="vision-btn" name="">البرنامج الانتخابى</button>
                          <button class="vote-btn" name="">انتخاب</button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 Candidate">
                        <div class="card-bg">
                            <div class="card">
                                <div class="card-front">
                                </div>
                                <div class="card-open">
                                  <div id="tick-mark"></div>
                                </div>
                          </div>
                          <h4>اسم المرشح:</h4>
                          <h5> الرقم التسلسلى:<span>1</span></h5>
                          <h5>الرمز: <span><i>المنزل</i></span></h5>
                          <h5>النوع: <span>plapla</span></h5>
                          <button class="vision-btn" name="">البرنامج الانتخابى</button>
                          <button class="vote-btn" name="">انتخاب</button>
                        </div>
                    </div>
                </div>
                <form class="col-lg-4 Voter-opinion">
                    <button class="v-opinion-btn" name="object">اعترض</button>
                    <button class="v-opinion-btn" name="void">أُبْطِلَ الصوت</button>
                    <button class="v-opinion-btn" name="Voting-completed"> انتخب</button>
                </form>
            </div>
        </div>
    </section>
            @endsection