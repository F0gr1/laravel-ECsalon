@extends('layouts/header')
@section('content')
    
<body>
    <div class="container">
        <div class="row">
            @foreach($stores as $store)
            <div class="card col-4 p-4">
                <img src="{{asset('storage/store/'.$store->icon)}}" class="card-img-top" style="width:340px; height:340px;">
                <div class="card-body">
                    <h5 class="card-title text-primary">{{$store->name}}</h5>
                    <p class="card-text">{{$store->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">電話番号:{{$store->phoneNumber}}</li>
                    <li class="list-group-item">都道府県:{{$store->prefrences}}</li>
                    <li class="list-group-item">市町村:{{$store->municipality}}</li>
                    <li class="list-group-item">住所:{{$store->adress}}</li>
                </ul>
                <div class="card-body">
                    <a href="/store/course/{{$store->id}}" class="card-link">詳細</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
@endsection('content')    