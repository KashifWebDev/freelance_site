<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance Site</title>
    <link rel="stylesheet" href="{{ route('index') }}/landing/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ route('index') }}/landing/css/fancybox.css" />
    <link rel="stylesheet" href="{{ route('index') }}/landing/css/style.min.css">
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

<script src="{{ route('index') }}/landing/js/jquery.min.js"></script>
<script src="{{ route('index') }}/landing/js//swiper-bundle.min.js"></script>
<script src="{{ route('index') }}/landing/js//fancybox.umd.js"></script>
<script src="{{ route('index') }}/landing/js//TweenMax.min.js"></script>
<script src="{{ route('index') }}/landing/js/main.min.js"></script>



</body>

</html>
