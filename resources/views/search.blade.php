<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/1bd4cddc08.js" crossorigin="anonymous"></script>
</head>
<style>
    .custom-login {
        height: 500px;
        padding-top: 100px
    }

    .detail-img {
        height: 300px
    }

    .list_dvider {
        border-bottom: 1px solid #CCC;
    }
</style>

<body>
    <div class="container custom-login">
        <div class="row">
            @foreach ($data as $daa)
                <div class="col-sm-6">
                    <img class="detail-img" src="{{ $daa['image'] }}" alt="">
                </div>
                <div class="col-sm-6">
                    <h1>{{ $daa['name'] }}</h1>
                    <div class="list_dvider"></div>
                    <h3> Price : {{ $daa['price'] }}</h3>
                    <h3> Old_price : {{ $daa['old_price'] }}</h3>
                    <h3> Rival : {{ $daa['rival'] }}</h3>
                    <h4>Details : {{ $daa['description'] }}</h4>
                    <br>
                </div>
            @endforeach
        </div>
    </div> {{-- end of div Container --}}
</body>

</html>
