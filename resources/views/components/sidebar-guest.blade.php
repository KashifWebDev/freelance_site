
    <div>
        <a href="{{ route('index') }}" class="sidebar-logo" style="border-bottom: 1px solid white;">
            <img src="https://www.edigitalagency.com.au/wp-content/uploads/ESPN-logo-png.png" alt="site logo" class="light-logo">
            <img src="https://www.edigitalagency.com.au/wp-content/uploads/ESPN-logo-png.png" alt="site logo" class="dark-logo">
            <img src="https://www.edigitalagency.com.au/wp-content/uploads/ESPN-logo-png.png" alt="site logo" class="logo-icon">
        </a>
    </div>
    <div class="">
        <ul class="d-flex top_nav">
            <li>
                <a href="{{ route('guests.clients') }}">
                    <span>Search Clients</span>
                </a>
            </li>
            <li>
                <a href="{{ route('guests.freelancers') }}">
                    <span>Search Freelancers</span>
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}">
                    <span>Login</span>
                </a>
            </li>
            <li>
                <a href="{{ route('register') }}">
                    <span>Register</span>
                </a>
            </li>
        </ul>
    </div>
