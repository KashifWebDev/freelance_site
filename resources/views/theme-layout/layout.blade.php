<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<x-head />

<body>

<!-- ..::  header area start ::.. -->
@if(auth()->user()->role == 'client')
    <x-sidebar-client />
@else
    <x-sidebar />
@endif
<!-- ..::  header area end ::.. -->

<main class="dashboard-main">

    <!-- ..::  navbar start ::.. -->
    <x-navbar />
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
