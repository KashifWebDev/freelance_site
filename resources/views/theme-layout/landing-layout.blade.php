<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Lab</title>
    <link rel="stylesheet" href="landing/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="landing/css/fancybox.css" />
    <link rel="stylesheet" href="landing/css/style.min.css">
</head>

<body >


<div class="cursor"></div>
<div class="cursor-follower"></div>

@if(auth()->guest())
    <x-header-landing-guest />
@else
    <x-header-landing-auth />
@endif

@yield('content')


<script src="landing/js/jquery.min.js"></script>
<script src="landing/js//swiper-bundle.min.js"></script>
<script src="landing/js//fancybox.umd.js"></script>
<script src="landing/js//TweenMax.min.js"></script>
<script src="landing/js/main.min.js"></script>



</body>

</html>
