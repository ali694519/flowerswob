<?php
use App\Http\Controllers\flowerController;
use Illuminate\Support\Facades\Session;
$totlal = 0;
if (Session::has('User')) {
    $totlal = flowerController::cartItem();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers</title>
    <link href="{{ url('Css/index.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/1bd4cddc08.js" crossorigin="anonymous"></script>

</head>
<style>
    #inpo {
        display: inline-block;
        margin-top: 1rem;
        border-radius: 5rem;
        color: rgb(17, 16, 16);
        padding: .5rem 3.2rem;
        font-size: 1.7rem;
    }
</style>

<body>
    <!-- header section starts  -->
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">flowers<span>.</span></a>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#products">products</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>
        <div class="icons">
            <span class="cart">
                Cart ({{ $totlal }})
            </span>
            <a href="{{ route('cartlist') }}" class="fas fa-shopping-cart ">
            </a>
            <a href="#" class="fas fa-heart"></a>
            <a href="/login" class="fas fa-user"></a>
            @if (Session::has('User'))
                <span class="dropdown">
                    <button class="link" id="drope">
                        {{ Session::get('User')['name'] }}
                    </button>
                    <div class="dropdown-menu">
                        <a href="/logout">Logout</a>
                    </div>
                </span>
            @else
                <span class="loreg">
                    <a class="link" href="/login">Login</a>
                </span>
            @endif
        </div>
    </header>
    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>fresh flowers</h3>
            <span> We Are Proud To Present Our Wonderful Goods </span>
            <p>Here you can find many wonderful examples because our collection is one of the biggest among flower
                stores.</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </section>
    <!-- home section ends -->

    <!-- about section starts  -->
    <section class="about" id="about">

        <h1 class="heading"> <span> about </span> us </h1>

        <div class="row">

            <div class="video-container">
                <video src=" {{ url('images/about-vid.mp4') }}" loop autoplay muted></video>
                <h3>best flower sellers</h3>
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>Flowers to create innovative and beautiful floral designs using the finest quality flowers. Using
                    techniques and styles from France, these gorgeous flower bouquets are the perfect gift for any
                    special occasion with fast delivery guaranteed. Sebastien have mastered the unique balance between
                    current trends and his own French twist on all of his flower bouquets.</p>

                <a href="#" class="btn">learn more</a>
            </div>

        </div>

    </section>
    <!-- about section ends -->


    <!-- icons section starts  -->
    <section class="icons-container">

        <div class="icons">
            <img src="images/icon-1.png" alt="">
            <div class="info">
                <h3>free delivery</h3>
                <span>on all orders</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/icon-2.png" alt="">
            <div class="info">
                <h3>10 days returns</h3>
                <span>moneyback guarantee</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/icon-3.png" alt="">
            <div class="info">
                <h3>offer & gifts</h3>
                <span>on all orders</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/icon-4.png" alt="">
            <div class="info">
                <h3>secure paymens</h3>
                <span>protected by paypal</span>
            </div>
        </div>

    </section>
    <!-- icons section ends -->

    <!-- prodcuts section starts  -->

    <section class="products" id="products">
        <div class="search">
            <form action="{{ route('search') }}" role="search">
                @csrf
                <input id="inpo" name="query" type="search" class="serachinp" placeholder="Search"
                    autocomplete="off">
                <button id="ptn" class="btn" type="submit">Search</button>
            </form>
        </div>
        <h1 class="heading"> latest <span>products</span> </h1>


        <div class="box-container">
            @foreach ($flowers as $flow)
                <div class="box">
                    <span class="discount">{{ $flow->rival }}</span>
                    <div class="image">
                        <a href="{{ url('view-flower/' . $flow->id) }}">
                            <img src="{{ $flow->image }}" alt="">
                        </a>
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="{{ url('add_to_cartt') }}/{{ $flow->id }}" class="cart-btn">add to cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>{{ $flow->name }}</h3>
                        <div class="price"> {{ $flow->old_price }} <span>{{ $flow->price }}</span> </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>

    <!-- prodcuts section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>The florist choice arrangement was beautiful. It was sent to a friend not only did she love it but
                    the rest of her office were in awe of how beautiful it was. As always a great job by the ladies at
                    Pearsons’s. Thank You Patrick.</p>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>happy customer</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>I have used Person's Flower Shop for years to deliver plants and flowers to my mother. She is always
                    highly satisfied and brags about the plants. She has also been able to keep most of them alive after
                    delivery.</p>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="user-info">
                        <h3>Octevia deo</h3>
                        <span>happy customer</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>I called and ordered flowers for a friends birthday and they were delivered promptly the next day.
                    Really pleasant to speak with when I called and looked at the arrangement online that I had found
                    and we discussed.</p>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="user-info">
                        <h3>Belime deo</h3>
                        <span>happy customer</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span> contact </span> us </h1>

        <div class="row">

            <form action="">
                <input type="text" placeholder="name" class="box">
                <input type="email" placeholder="email" class="box">
                <input type="number" placeholder="number" class="box">
                <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>

            <div class="image">
                <img src="images/pexels-matheus-bertelli-573259.jpg" alt="">
            </div>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">about</a>
                <a href="#">products</a>
                <a href="#">review</a>
                <a href="#">contact</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#">my account</a>
                <a href="#">my order</a>
                <a href="#">my favorite</a>
            </div>

            <div class="box">
                <h3>locations</h3>
                <a href="#">india</a>
                <a href="#">USA</a>
                <a href="#">japan</a>
                <a href="#">france</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#">+123-456-7890</a>
                <a href="#">example@gmail.com</a>
                <a href="#">mumbai, india - 400104</a>
                <img src="images/payment.png" alt="">
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#">+123-456-7890</a>
                <a href="#">example@gmail.com</a>
                <a href="#">mumbai, india - 400104</a>
                <img src="images/payment.png" alt="">
            </div>

        </div>

        <div class="credit"> &copy; 2022 created by <span> moraAli </span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->
</body>

</html>
