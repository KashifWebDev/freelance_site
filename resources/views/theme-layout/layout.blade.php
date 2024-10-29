<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<x-head />

<body>


<main class="dashboard-main1">

    <!-- ..::  navbar start ::.. -->
    @if(auth()->guest())
        <x-navbar-guest />
    @else
        <x-navbar />
    @endif
    <!-- ..::  navbar end ::.. -->
    <div class="dashboard-main-body">

        <!-- ..::  breadcrumb  start ::.. -->
        <x-breadcrumb title='{{ $title }}' subTitle='{{ $subTitle }}' />
        <!-- ..::  header area end ::.. -->

        @yield('content')

    </div>
    <!-- ..::  footer  start ::.. -->
    <x-footer />
    <!-- ..::  footer area end ::.. -->

</main>

<!-- ..::  scripts  start ::.. -->
<x-scripts script="{{ isset($script) ? $script : '' }}" />

<!-- ..::  scripts  end ::.. -->

</body>

</html>
