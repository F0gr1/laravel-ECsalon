@extends('layouts/header')
@section('content')
    
<body>
    @foreach($courses as $course)
    <div class="container">
        <div class="card" style="width: 22rem;">
            <img src="{{asset('storage/course/'.$course->icon)}}" class="card-img-top" style="width:340px; height:340px;">
               <div class="card-body">
              <h5 class="card-title"> {{$course -> name}} </h5>
              <p class="card-text">{{$course -> price}} 円 </p>
              <a href="#" class="btn btn-primary">詳細</a>
            </div>
          </div>
    @endforeach
    </div>
</body>
</html>
@endsection('content')    