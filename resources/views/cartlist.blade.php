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

    .trending-img {
        height: 150px;
    }

    .trendin-wrapper {
        margin: 30px;
    }

    .cart_list_dvider {
        border-bottom: 1px solid #CCC;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
</style>

<body>
    <div class="custom-login">

        <div class="col-sm-10">
            <div class="trendin-wrapper">
                @foreach ($flowers as $item)
                    <div class=" row searched-item cart_list_dvider">
                        <div class="col-sm-3">
                            <a href="view-flower/{{ $item->id }}">
                                <img class="trending-img" src="{{ $item->image }}" alt="">
                            </a>
                        </div>

                        <div class="col-sm-4">
                            <div class="">
                                <h2>{{ $item->name }}</h2>
                                <h5> Price : {{ $item->price }}</h5>
                                <h5> Rival : {{ $item->rival }}</h5>
                                <h5> Description: {{ $item->description }}</h5>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <a href="/remove/{{ $item->cart_id }}" class="btn btn-warning">Remove to cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> {{-- end of div Container --}}

</body>

</html>
