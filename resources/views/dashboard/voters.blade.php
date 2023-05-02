@extends('layout.mainLayout')
@extends('layout.partials.nav')
@extends('layout.partials.sideBar')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
	
  <h2 class="text-right">Imported Voters </h2>
  @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif
  @if (Session::has('error'))
      <div class="alert alert-danger">{{ Session::get('error') }}</div>
  @endif
  <table class="bg-dark table table-hover table-sm">
    <thead>
      <tr>
        <th>المنتخبين</th>
        <th>الرقم القومى</th>
        <th>الحاله</th>
        <th>اسم اللجنه</th>
        <th> رقم اللجنه</th>
        <th>اسم الدائره</th>
        <th> رقم الدائره</th>
        <th>العمليات</th>
      </tr>
    </thead>
    <tbody>
     @foreach($voters as $voter)
     <tr style="color: white">
        <td>{{$voter->name}}</td>
        <td>{{$voter->national_id}}</td>
        <td>{{$voter->status ? ' صوت ' : 'لم يصوت' }}</td>
        <td>{{$voter->committee->name}}</td>
        <td>{{$voter->committee->id}}</td>
        <td>{{$voter->region->name}}</td>
        <td>{{$voter->region->serial_number}}</td>
        <!-- serial_number -->
        <td><a href="#" class="btn btn-primary">حذف</a></td>
      </tr>
      @endforeach 
    </tbody>
  </table>
  </main>
@endsection