<header class="header">
    <div class="container">
        <div class="header__inner">
            <a class="header__logo logo" href="/">
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

                            <a class="menu__link" href="{{ route('gigs') }}">
                                Gigs
                            </a> </li>
                        <li>

                            <a class="menu__link" href="{{ route('my-profile') }}">
                                My Profile
                            </a> </li>
                        <li>
                    </ul>
                </div>
                <form class="header__search search" action="#">
                    <button class="search__btn" type="button">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 19C15.4182 19 19 15.4183 19 11C19 6.58172 15.4182 3 11 3C6.58169 3 2.99997 6.58172 2.99997 11C2.99997 15.4183 6.58169 19 11 19Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21 21L16.65 16.65" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                        </svg>
                    </button>
                    <input class="search__input" type="text" placeholder="Search...">
                </form>
                <div class="header__user-nav user-nav">
                    <a class="user-nav__link" href="{{ route('chat') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.99997 10H16M7.99997 14H12M21 12C21 16.9706 16.9705 21 12 21C10.843 21 9.73698 20.7817 8.72092 20.384C8.33906 20.2345 7.92595 20.1704 7.52157 20.2385L3.69273 20.8833C3.35371 20.9404 3.05954 20.6463 3.11664 20.3072L3.76144 16.4784C3.82954 16.074 3.76544 15.6609 3.61598 15.279C3.21829 14.263 2.99997 13.157 2.99997 12C2.99997 7.02944 7.02941 3 12 3C16.9705 3 21 7.02944 21 12Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        <span>
                                1
                            </span>
                    </a>
                    <a class="user-nav__link" href="{{ route('chat') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.99997 8C5.99997 6.4087 6.63211 4.88258 7.75733 3.75736C8.88255 2.63214 10.4087 2 12 2C13.5913 2 15.1174 2.63214 16.2426 3.75736C17.3678 4.88258 18 6.4087 18 8C18 15 21 17 21 17H2.99997C2.99997 17 5.99997 15 5.99997 8Z"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M10.3 21C10.4673 21.3044 10.7134 21.5583 11.0124 21.7352C11.3115 21.912 11.6525 22.0053 12 22.0053C12.3474 22.0053 12.6884 21.912 12.9875 21.7352C13.2865 21.5583 13.5326 21.3044 13.7 21"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>
                                71
                            </span>
                    </a>
                </div>
            </div>
            <form class="header__form header-form" action="#">
                <div class="header-form__img">
                    <img class="header-form__img-image" src="{{ route('index') }}/landing/images/member-icon-3.png" alt="img">
                </div>
                <div class="header-form__select custom-select">
                    <select>
                        <option value="0">Eveline</option>
                        <option value="1">Eveline</option>
                        <option value="2">Logout</option>
                    </select>
                </div>
            </form>
            <button class="header__burger burger" type="button">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>
