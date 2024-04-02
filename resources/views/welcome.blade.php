@extends('layouts.welcomecss')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="wave">
            <img src="/products/bg1.svg" alt="">
        </div>

        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="#">Types</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
            <img src="/products/logo.png" alt="Logo" class="logo">
        </nav>

        <div class="main-content">

            <div class="image-pista">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="/products/19bg.png" alt=""></div>
                        <div class="swiper-slide"><img src="/products/9bg.png" alt=""></div>
                        <div class="swiper-slide"><img src="/products/0.png" alt=""></div>    
                    </div> 
                </div>
            </div>
            <div class="main-text">
        <h1>Gwentsilyo Marketplace</h1>
        <p> A premier crochet marketplace, offers a delightful options of 100% handmade products renowned for their quality and affordability</p>
        <button>Know More</button>
    </div>
        </div>

        <div class="right">
            <div class="box">
                <div class="image">
                    <img src="products/knitt.png" alt="">
                </div>
                <div class="inner-box">
                    <h3>100% Hnadmade</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="products/affordable.png" alt="">
                </div>
                <div class="inner-box">
                    <h3>Affordable</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="products/superb1.png" alt="">
                </div>
                <div class="inner-box">
                    <h3>Superb Quality</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>

        <div class="social-links">
            <i class="fab fa-instagram"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="far fa-envelope"></i>
        </div>
    </div>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
        });
      </script>
</body>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 5000, // Adjust the delay as needed (in milliseconds)
            disableOnInteraction: false, // Allows interaction (like clicking on slides) to stop autoplay
        },
    });
</script>


</html>