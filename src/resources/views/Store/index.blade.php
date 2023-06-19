<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach($stores as $store)
            <div class="card col-4 p-4">
                <img src="{{asset('storage/'.$store->icon)}}" class="card-img-top" style="width:340px; height:340px;">
                <div class="card-body">
                    <h5 class="card-title">{{$store->name}}</h5>
                    <p class="card-text">{{$store->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">電話番号:{{$store->phoneNumber}}</li>
                    <li class="list-group-item">都道府県:{{$store->prefrences}}</li>
                    <li class="list-group-item">市町村:{{$store->municipality}}</li>
                    <li class="list-group-item">住所:{{$store->adress}}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">詳細</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
