<header class="header">
    <div class="container">
        <div class="header__inner">
            <a class="header__logo logo" href="#">
                <img class="logo__text" src="https://www.edigitalagency.com.au/wp-content/uploads/ESPN-logo-png.png" alt="img">
            </a>
            <div class="header__wrapper">
                <div class="header__user-nav user-menu">
                    <ul>
                        <li>

                            <a class="menu__link" href="{{ route('guests.freelancers') }}">
                                Freelancers
                            </a>

                        </li>
                        <li>

                            <a class="menu__link" href="{{ route('guests.clients') }}">
                                Clients
                            </a> </li>
                        <li>
                        <li>

                            <a class="menu__link" href="{{ route('gigs') }}">
                                Gigs
                            </a> </li>
                        <li>

                            <a class="menu__link" href="{{ route('login') }}">
                                Login
                            </a> </li>
                        <li>

                            <a class="menu__link" href="{{ route('register') }}">
                                Sign Up
                            </a> </li>
                    </ul>
                    <a href="" class="act-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</header>
