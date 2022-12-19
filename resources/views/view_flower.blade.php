<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view_flower</title>
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
</style>

<body>
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ URL::asset($flower->image) }}" alt="">
            </div>

            <div class="col-sm-6">
                <h1>{{ $flower->name }}</h1>
                __________________________________________
                <br>
                <br>
                <h3> Price : {{ $flower->price }}</h3>
                <h3> Old_price : {{ $flower->old_price }}</h3>
                <h3> Rival : {{ $flower->rival }}</h3>
                <h4>Details : {{ $flower->description }}</h4>
                <br><br>
                <form action="{{ route('add_to_cart') }}" method="POST">
                    @csrf
                    <input type="hidden" name="flowe_id" value="{{ $flower['id'] }}">
                    <button class="btn btn-primary">Add To Cart</button>
                </form>

                <br>
                <button class="btn btn-success">By No</button>
                <br><br>
            </div>
        </div>
    </div> {{-- end of div Container --}}
</body>

</html>
