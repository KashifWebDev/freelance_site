@extends('theme-layout.landing-layout')


@section('content')
    <div class="wrapper">
        <main class="main">
            <aside class="main__aside aside">
                <div class="aside__resize">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_114_19355)">
                            <path
                                d="M14 5.25C13.5858 5.25 13.25 5.58579 13.25 6C13.25 6.41421 13.5858 6.75 14 6.75V5.25ZM18 6H18.75C18.75 5.58579 18.4142 5.25 18 5.25V6ZM17.25 10C17.25 10.4142 17.5858 10.75 18 10.75C18.4142 10.75 18.75 10.4142 18.75 10H17.25ZM13.4697 9.46967C13.1768 9.76256 13.1768 10.2374 13.4697 10.5303C13.7626 10.8232 14.2374 10.8232 14.5303 10.5303L13.4697 9.46967ZM10 18.75C10.4142 18.75 10.75 18.4142 10.75 18C10.75 17.5858 10.4142 17.25 10 17.25V18.75ZM6 18H5.25C5.25 18.1989 5.32902 18.3897 5.46967 18.5303C5.61032 18.671 5.80109 18.75 6 18.75V18ZM6.75 14C6.75 13.5858 6.41421 13.25 6 13.25C5.58579 13.25 5.25 13.5858 5.25 14H6.75ZM10.5303 14.5303C10.8232 14.2374 10.8232 13.7626 10.5303 13.4697C10.2374 13.1768 9.76256 13.1768 9.46967 13.4697L10.5303 14.5303ZM3.73005 22.455L4.07054 21.7868L3.73005 22.455ZM1.54497 20.27L2.21322 19.9295L1.54497 20.27ZM22.455 20.27L21.7868 19.9295L22.455 20.27ZM20.27 22.455L19.9295 21.7868L20.27 22.455ZM20.27 1.54497L19.9295 2.21322L20.27 1.54497ZM22.455 3.73005L21.7868 4.07054L22.455 3.73005ZM3.73005 1.54497L4.07054 2.21322L3.73005 1.54497ZM1.54497 3.73005L2.21322 4.07054L1.54497 3.73005ZM14 6.75H18V5.25H14V6.75ZM17.25 6V10H18.75V6H17.25ZM17.4697 5.46967L13.4697 9.46967L14.5303 10.5303L18.5303 6.53033L17.4697 5.46967ZM10 17.25H6V18.75H10V17.25ZM6.75 18L6.75 14H5.25L5.25 18H6.75ZM6.53033 18.5303L10.5303 14.5303L9.46967 13.4697L5.46967 17.4697L6.53033 18.5303ZM9 1.75H15V0.25H9V1.75ZM22.25 9V15H23.75V9H22.25ZM15 22.25H9V23.75H15V22.25ZM1.75 15V9H0.25V15H1.75ZM9 22.25C7.58749 22.25 6.57322 22.2494 5.77708 22.1844C4.9897 22.12 4.48197 21.9964 4.07054 21.7868L3.38955 23.1233C4.04768 23.4586 4.77479 23.6075 5.65494 23.6794C6.52632 23.7506 7.61224 23.75 9 23.75V22.25ZM0.25 15C0.25 16.3878 0.249417 17.4737 0.320612 18.3451C0.392522 19.2252 0.541378 19.9523 0.876713 20.6104L2.21322 19.9295C2.00359 19.518 1.87996 19.0103 1.81563 18.2229C1.75058 17.4268 1.75 16.4125 1.75 15H0.25ZM4.07054 21.7868C3.27085 21.3793 2.62068 20.7291 2.21322 19.9295L0.876713 20.6104C1.42798 21.6924 2.30762 22.572 3.38955 23.1233L4.07054 21.7868ZM22.25 15C22.25 16.4125 22.2494 17.4268 22.1844 18.2229C22.12 19.0103 21.9964 19.518 21.7868 19.9295L23.1233 20.6104C23.4586 19.9523 23.6075 19.2252 23.6794 18.3451C23.7506 17.4737 23.75 16.3878 23.75 15H22.25ZM15 23.75C16.3878 23.75 17.4737 23.7506 18.3451 23.6794C19.2252 23.6075 19.9523 23.4586 20.6104 23.1233L19.9295 21.7868C19.518 21.9964 19.0103 22.12 18.2229 22.1844C17.4268 22.2494 16.4125 22.25 15 22.25V23.75ZM21.7868 19.9295C21.3793 20.7291 20.7291 21.3793 19.9295 21.7868L20.6104 23.1233C21.6924 22.572 22.572 21.6924 23.1233 20.6104L21.7868 19.9295ZM15 1.75C16.4125 1.75 17.4268 1.75058 18.2229 1.81563C19.0103 1.87996 19.518 2.00359 19.9295 2.21322L20.6104 0.876713C19.9523 0.541378 19.2252 0.392522 18.3451 0.320612C17.4737 0.249417 16.3878 0.25 15 0.25V1.75ZM23.75 9C23.75 7.61224 23.7506 6.52632 23.6794 5.65494C23.6075 4.77479 23.4586 4.04768 23.1233 3.38955L21.7868 4.07054C21.9964 4.48197 22.12 4.9897 22.1844 5.77708C22.2494 6.57322 22.25 7.58749 22.25 9H23.75ZM19.9295 2.21322C20.7291 2.62068 21.3793 3.27085 21.7868 4.07054L23.1233 3.38955C22.572 2.30762 21.6924 1.42798 20.6104 0.876713L19.9295 2.21322ZM9 0.25C7.61224 0.25 6.52632 0.249417 5.65494 0.320612C4.77479 0.392522 4.04768 0.541378 3.38955 0.876713L4.07054 2.21322C4.48197 2.00359 4.9897 1.87996 5.77708 1.81563C6.57322 1.75058 7.58749 1.75 9 1.75V0.25ZM1.75 9C1.75 7.58749 1.75058 6.57322 1.81563 5.77708C1.87996 4.9897 2.00359 4.48197 2.21322 4.07054L0.876713 3.38955C0.541378 4.04768 0.392522 4.77479 0.320612 5.65494C0.249417 6.52632 0.25 7.61224 0.25 9H1.75ZM3.38955 0.876713C2.30762 1.42798 1.42798 2.30762 0.876713 3.38955L2.21322 4.07054C2.62068 3.27085 3.27085 2.62068 4.07054 2.21322L3.38955 0.876713Z"
                                fill="#7D838C" />
                        </g>
                        <defs>
                            <clipPath id="clip0_114_19355">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <nav class="aside__menu menu">
                    <ul class="menu__list">
                        <li class="menu__list-item">
                            <a class="menu__list-link menu__list-link--active" href="index.html"s>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 10.5256L10.4993 3.49031C11.382 2.83656 12.618 2.83656 13.5007 3.49031L23 10.5256M4.66667 8.19795V18.6724C4.66667 19.9579 5.76108 21 7.11111 21H16.8889C18.2389 21 19.3333 19.9579 19.3333 18.6724V8.19795M10.7778 16.3447H13.2222C13.8972 16.3447 14.4444 15.8236 14.4444 15.1809V12.8532C14.4444 12.2105 13.8972 11.6894 13.2222 11.6894H10.7778C10.1028 11.6894 9.55556 12.2105 9.55556 12.8532V15.1809C9.55556 15.8236 10.1028 16.3447 10.7778 16.3447Z"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                                <span>
                                    Home
                                </span>
                            </a>

                            <div class="popup_menu">  Home </div>

                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="blog.html">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons">
                                        <path id="Vector"
                                              d="M4 22H20C20.5304 22 21.0391 21.7893 21.4142 21.4142C21.7893 21.0391 22 20.5304 22 20V4C22 3.46957 21.7893 2.96086 21.4142 2.58579C21.0391 2.21071 20.5304 2 20 2H8C7.46957 2 6.96086 2.21071 6.58579 2.58579C6.21071 2.96086 6 3.46957 6 4V20C6 20.5304 5.78929 21.0391 5.41421 21.4142C5.03914 21.7893 4.53043 22 4 22ZM4 22C3.46957 22 2.96086 21.7893 2.58579 21.4142C2.21071 21.0391 2 20.5304 2 20V11C2 9.9 2.9 9 4 9H6"
                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                        <path id="Vector_2" d="M18 14H10" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Vector_3" d="M15 18H10" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Vector_4" d="M10 6H18V10H10V6Z" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                </svg>
                                <span>
                                    News
                                </span>
                            </a>
                            <div class="popup_menu">  News </div>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="shop.html">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons">
                                        <path id="Icon"
                                              d="M8.99998 10V6C8.99998 4.34315 10.3431 3 12 3C13.6568 3 15 4.34315 15 6V10M4.99998 18H19M6.14793 22H17.852C19.0127 22 19.9296 21.0152 19.8469 19.8575L19.1327 9.8575C19.0579 8.81089 18.187 8 17.1377 8H6.86222C5.81294 8 4.94206 8.81089 4.8673 9.85751L4.15301 19.8575C4.07032 21.0152 4.98725 22 6.14793 22Z"
                                              stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                    </g>
                                </svg>

                                <span>
                                    Shop
                                </span>
                            </a>
                            <div class="popup_menu">  Shop </div>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="groups.html">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons">
                                        <path id="Vector"
                                              d="M6 14L7.45 11.1C7.61696 10.7687 7.87281 10.4903 8.18893 10.296C8.50504 10.1018 8.86897 9.99927 9.24 10H20M20 10C20.3055 9.99946 20.6071 10.0689 20.8816 10.2031C21.1561 10.3372 21.3963 10.5325 21.5836 10.7739C21.7709 11.0152 21.9004 11.2963 21.9622 11.5956C22.024 11.8948 22.0164 12.2042 21.94 12.5L20.39 18.5C20.279 18.9299 20.0281 19.3106 19.6769 19.5822C19.3256 19.8538 18.894 20.0008 18.45 20H4C3.46957 20 2.96086 19.7893 2.58579 19.4142C2.21071 19.0391 2 18.5304 2 18V5C2 3.9 2.9 3 4 3H7.93C8.25941 3.0017 8.58331 3.08475 8.8729 3.24176C9.1625 3.39877 9.40882 3.62488 9.59 3.9L10.41 5.1C10.5912 5.37512 10.8375 5.60123 11.1271 5.75824C11.4167 5.91525 11.7406 5.9983 12.07 6H18C18.5304 6 19.0391 6.21071 19.4142 6.58579C19.7893 6.96086 20 7.46957 20 8V10Z"
                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                    </g>
                                </svg>
                                <span>
                                    Groups
                                </span>
                            </a>
                            <div class="popup_menu">  Groups </div>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="members.html">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons">
                                        <path id="Vector"
                                              d="M16 21V19C16 17.9391 15.5786 16.9217 14.8284 16.1716C14.0783 15.4214 13.0609 15 12 15H6C4.93913 15 3.92172 15.4214 3.17157 16.1716C2.42143 16.9217 2 17.9391 2 19V21"
                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                        <path id="Vector_2"
                                              d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z"
                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                        <path id="Vector_3"
                                              d="M22 21V19C21.9993 18.1137 21.7044 17.2528 21.1614 16.5523C20.6184 15.8519 19.8581 15.3516 19 15.13"
                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                        <path id="Vector_4"
                                              d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88"
                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                    </g>
                                </svg>
                                <span>
                                    Members
                                </span>
                            </a>
                            <div class="popup_menu">  Members </div>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="courses.html">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons">
                                        <path id="Vector" d="M22 10V16M22 10L12 5L2 10L12 15L22 10Z" stroke="white"
                                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Vector_2" d="M6 12V17C9 20 15 20 18 17V12" stroke="white"
                                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                </svg>
                                <span>
                                    Courses
                                </span>
                            </a>

                            <div class="popup_menu">  Courses </div>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" href="events.html">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons">
                                        <path id="Vector"
                                              d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round" />
                                        <path id="Vector_2" d="M16 2V6" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Vector_3" d="M8 2V6" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Vector_4" d="M3 10H21" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Vector_5" d="M17 14H11" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Vector_6" d="M13 18H7" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Vector_7" d="M7 14H7.01" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Vector_8" d="M17 18H17.01" stroke="white" stroke-width="1.5"
                                              stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                </svg>
                                <span>
                                    Events
                                </span>
                            </a>

                            <div class="popup_menu">  Events </div>

                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" data-fancybox="" href="#faq-popup" >
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons">
                                        <path id="Icon"
                                              d="M12 18V18.01M8 10C8 7.79086 9.79086 6 12 6C14.2091 6 16 7.79086 16 10C16 11.8675 14.7202 13.4361 12.9899 13.8766C12.4547 14.0128 12 14.4477 12 15M23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z"
                                              stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                    </g>
                                </svg>
                                <span>
                                    FAQ
                                </span>
                            </a>
                            <div class="popup_menu">  FAQ </div>
                        </li>
                        <li class="menu__list-item">
                            <a class="menu__list-link" data-fancybox="" href="#report-popup" >
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons">
                                        <path id="Icon"
                                              d="M6 13V5C6 3.89543 6.89543 3 8 3H16C17.1046 3 18 3.89543 18 5V13M10 7H14M10 11H14M5 21H19C20.1046 21 21 20.1046 21 19V13.5388C21 12.8151 20.2551 12.331 19.5939 12.625L12.8123 15.639C12.2951 15.8688 11.7049 15.8688 11.1877 15.639L4.40614 12.625C3.74485 12.331 3 12.8151 3 13.5388V19C3 20.1046 3.89543 21 5 21Z"
                                              stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                    </g>
                                </svg>
                                <span>
                                    Report
                                </span>
                            </a>

                            <div class="popup_menu">  Report </div>

                        </li>
                    </ul>
                </nav>

            </aside>
            <section class="main__heading heading">
                <div class="container">
                    <h1 class="heading__title">
                        <span>
                            Join
                        </span>
                        the Ultimate Community for Designers
                        <span>
                            and
                        </span>
                        Creatives
                    </h1>
                </div>
            </section>
            <section class="main__count count">
                <div class="container">
                    <div class="count__inner">
                        <a class="count__item count-item" href="members.html">
                            <div class="count-item__icon">
                                <svg width="16" height="16" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons">
                                        <path id="Icon"
                                              d="M2.5 6H9M6.5 3L9.14645 5.64645C9.34171 5.84171 9.34171 6.15829 9.14645 6.35355L6.5 9"
                                              stroke="#fff" stroke-width="1.5" stroke-linecap="round" />
                                    </g>
                                </svg>
                            </div>
                            <p class="count-item__text">
                                <span>
                                    39K+
                                </span>
                            </p>
                            <p class="count-item__subtext">
                                Freelancers
                            </p>
                        </a>
                        <a class="count__item count-item" href="groups.html">
                            <div class="count-item__icon">
                                <svg width="16" height="16" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons">
                                        <path id="Icon"
                                              d="M2.5 6H9M6.5 3L9.14645 5.64645C9.34171 5.84171 9.34171 6.15829 9.14645 6.35355L6.5 9"
                                              stroke="#fff" stroke-width="1.5" stroke-linecap="round" />
                                    </g>
                                </svg>
                            </div>
                            <p class="count-item__text">
                                <span>
                                    25k+
                                </span>
                            </p>
                            <p class="count-item__subtext">
                                Clients
                            </p>
                        </a>
                        <a class="count__item count-item" href="courses.html">
                            <div class="count-item__icon">
                                <svg width="16" height="16" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons">
                                        <path id="Icon"
                                              d="M2.5 6H9M6.5 3L9.14645 5.64645C9.34171 5.84171 9.34171 6.15829 9.14645 6.35355L6.5 9"
                                              stroke="#fff" stroke-width="1.5" stroke-linecap="round" />
                                    </g>
                                </svg>
                            </div>
                            <p class="count-item__text">
                                <span>
                                    50+
                                </span>
                            </p>
                            <p class="count-item__subtext">
                                Countries
                            </p>
                        </a>
                        <a class="count__item count-item" href="#">
                            <div class="count-item__icon">
                                <svg width="16" height="16" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons">
                                        <path id="Icon"
                                              d="M2.5 6H9M6.5 3L9.14645 5.64645C9.34171 5.84171 9.34171 6.15829 9.14645 6.35355L6.5 9"
                                              stroke="#fff" stroke-width="1.5" stroke-linecap="round" />
                                    </g>
                                </svg>
                            </div>
                            <p class="count-item__text">
                                <span>
                                    4.9
                                </span>
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons" clip-path="url(#clip0_114_9488)">
                                        <path id="Vector"
                                              d="M11.9687 4.60317C11.8902 4.36018 11.6746 4.1876 11.4197 4.16462L7.95614 3.85013L6.58656 0.644511C6.48558 0.40958 6.25559 0.257507 6.00006 0.257507C5.74453 0.257507 5.51454 0.40958 5.41356 0.64506L4.04399 3.85013L0.579908 4.16462C0.325385 4.18815 0.110414 4.36018 0.0314019 4.60317C-0.0476102 4.84616 0.0253592 5.11267 0.2179 5.28068L2.83592 7.5767L2.06392 10.9773C2.00744 11.2274 2.10448 11.4858 2.31195 11.6358C2.42346 11.7164 2.55393 11.7574 2.68549 11.7574C2.79893 11.7574 2.91145 11.7268 3.01244 11.6664L6.00006 9.88077L8.98659 11.6664C9.20513 11.7978 9.48062 11.7858 9.68762 11.6358C9.89518 11.4854 9.99214 11.2268 9.93565 10.9773L9.16366 7.5767L11.7817 5.28113C11.9742 5.11267 12.0477 4.84661 11.9687 4.60317Z"
                                              fill="#F9D442" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_114_9488">
                                            <rect width="12" height="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </p>
                            <p class="count-item__subtext">
                                32k+ ratings
                            </p>
                        </a>
                    </div>
                </div>
            </section>
            <section class="main__groups-section groups-section">
                <div class="container">
                    <div class="groups-section__top groups-section-top">
                        <h2 class="groups-section-top__title">
                            Popular Gigs
                        </h2>
                        <div class="groups-section__buttons swiper-buttons">
                            <div class="groups-section__buttons-prev swiper-buttons-prev-btn">
                                <svg width="16" height="16" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons">
                                        <path id="Icon"
                                              d="M2.5 6H9M6.5 3L9.14645 5.64645C9.34171 5.84171 9.34171 6.15829 9.14645 6.35355L6.5 9"
                                              stroke="#fff" stroke-width="1.5" stroke-linecap="round" />
                                    </g>
                                </svg>
                            </div>
                            <div class="groups-section__buttons-next swiper-buttons-next-btn">
                                <svg width="16" height="16" viewBox="0 0 12 12" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons">
                                        <path id="Icon"
                                              d="M2.5 6H9M6.5 3L9.14645 5.64645C9.34171 5.84171 9.34171 6.15829 9.14645 6.35355L6.5 9"
                                              stroke="#fff" stroke-width="1.5" stroke-linecap="round" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="groups-section__swiper groups-section-swiper swiper">
                        <div class="swiper-wrapper">
                            <div class="groups-section-swiper__slide groups-section-slide swiper-slide">
                                <div class="groups-section__card card">
                                    <div class="card__inner">
                                        <p class="card__suptext card__suptext--green">
                                            private Group
                                        </p>
                                        <div class="card__options card-options">
                                            <div class="card-options__btn">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="card-options__inner">
                                                <a class="card-options__link" href="group-profile.html">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z"
                                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <span>
                                                        Leave Group
                                                    </span>
                                                </a>
                                                <a class="card-options__link" href="group-profile.html">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <span>
                                                        Subscribe
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <a class="card__title" href="group-profile.html">
                                            Mobile Apps
                                        </a>
                                        <ul class="card__list card-list">
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    Active 2 days ago
                                                </p>
                                            </li>
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    10k Members
                                                </p>
                                            </li>
                                        </ul>
                                        <a class="card-box__poster" href="group-profile.html">
                                            <img class="card-box__poster-img" src="landing/images/new/1-1.jpg" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="groups-section-swiper__slide groups-section-slide swiper-slide">
                                <div class="groups-section__card card">
                                    <div class="card__inner">
                                        <p class="card__suptext card__suptext--green">
                                            private Group
                                        </p>
                                        <div class="card__options card-options">
                                            <div class="card-options__btn">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="card-options__inner">
                                                <a class="card-options__link" href="group-profile.html">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z"
                                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                    <span>
                                                        Leave Group
                                                    </span>
                                                </a>
                                                <a class="card-options__link" href="group-profile.html">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <span>
                                                        Subscribe
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <a class="card__title" href="group-profile.html">
                                            Readymag
                                        </a>
                                        <ul class="card__list card-list">
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    Active 19 days ago
                                                </p>
                                            </li>
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    872 Members
                                                </p>
                                            </li>
                                        </ul>
                                        <a class="card-box__poster" href="group-profile.html">
                                            <img class="card-box__poster-img" src="landing/images/new/1-2.jpg" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="groups-section-swiper__slide groups-section-slide swiper-slide">
                                <div class="groups-section__card card">
                                    <div class="card__inner">
                                        <p class="card__suptext card__suptext--pink">
                                            Public Group
                                        </p>
                                        <div class="card__options card-options">
                                            <div class="card-options__btn">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="card-options__inner">
                                                <a class="card-options__link" href="group-profile.html">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z"
                                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                    <span>
                                                        Leave Group
                                                    </span>
                                                </a>
                                                <a class="card-options__link" href="group-profile.html">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                                            stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <span>
                                                        Subscribe
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <a class="card__title" href="group-profile.html">
                                            UX-research
                                        </a>
                                        <ul class="card__list card-list">
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    Active 1 month ago
                                                </p>
                                            </li>
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    300 Members
                                                </p>
                                            </li>
                                        </ul>
                                        <a class="card-box__poster" href="group-profile.html">
                                            <img class="card-box__poster-img" src="landing/images/new/1-3.jpg" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main__elevate elevate">
                <div class="container">
                    <div class="elevate__inner">
                        <div class="elevate__content elevate-content">
                            <h2 class="elevate-content__title">
                                Elevate Your Design Game <br>
                                and
                                <span>
                                    Connect <br>
                                    with Like-Minded <br>
                                    Professionals <br>
                                </span>
                                at Design Lab
                            </h2>
                            <a class="elevate-content__link" data-fancybox="" href="#login-popup">
                                Search Freelancers
                            </a>
                        </div>
                        <div class="elevate__view elevate-view">
                            <div class="elevate-view__box">
                                <p class="elevate-view__box-text">
                                    17K+
                                </p>
                                <p class="elevate-view__box-subtext">
                                    professionals
                                </p>
                            </div>
                            <img class="elevate-view__img" src="landing/images/member-icon-2.png" alt="img">
                            <img class="elevate-view__img" src="landing/images/member-icon-16.png" alt="img">
                            <img class="elevate-view__img" src="landing/images/member-icon-8.png" alt="img">
                            <img class="elevate-view__img" src="landing/images/member-icon-3.png" alt="img">
                            <img class="elevate-view__img" src="landing/images/member-icon-25.png" alt="img">
                        </div>
                    </div>
                </div>
            </section>

            <section class="main__members members">
                <div class="container">
                    <h1 class="members__title title">
                        Top Creaters
                    </h1>
                    <div class="members__inner">
                        <div class="members__card card">
                            <div class="card__inner">
                                <p class="card__suptext">
                                    3d artist
                                </p>
                                <div class="card__options card-options">
                                    <div class="card-options__btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="card-options__inner">
                                        <a class="card-options__link" href="#">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Add Friend
                                            </span>
                                        </a>
                                        <a class="card-options__link" href="#">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Follow
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="card__title">
                                    Anthony
                                    <span>
                                        Clark
                                    </span>
                                </h3>
                                <a class="card__text" href="members-page.html">
                                    @anthony-clark
                                </a>
                                <p class="card__subtext">
                                    Joined April 2019
                                </p>
                                <div class="card__box card-box">
                                    <div class="card-box__person-img card-person-img">
                                        <img class="card-person-img__image" src="landing/images/member-icon-2.png" alt="img">
                                        <span class="card-person-img__status">

                                        </span>
                                    </div>
                                    <a class="card-box__link" href="members-page.html">
                                        Send Message
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="members__card card">
                            <div class="card__inner">
                                <p class="card__suptext">
                                    ux/ui designer
                                </p>
                                <div class="card__options card-options">
                                    <div class="card-options__btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="card-options__inner">
                                        <a class="card-options__link" href="members-page.html">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Add Friend
                                            </span>
                                        </a>
                                        <a class="card-options__link" href="members-page.html">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Follow
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="card__title">
                                    Valerie
                                    <span>
                                        Ferguson
                                    </span>
                                </h3>
                                <a class="card__text" href="members-page.html">
                                    @valerie_ui
                                </a>
                                <p class="card__subtext">
                                    Joined Oct 2020
                                </p>
                                <div class="card__box card-box">
                                    <div class="card-box__person-img card-person-img">
                                        <img class="card-person-img__image" src="landing/images/member-icon-3.png" alt="img">
                                        <span class="card-person-img__status card-person-img__status--disabled">

                                        </span>
                                    </div>
                                    <a class="card-box__link" href="members-page.html">
                                        Send Message
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="members__card card">
                            <div class="card__inner">
                                <p class="card__suptext">
                                    illustrator
                                </p>
                                <div class="card__options card-options">
                                    <div class="card-options__btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="card-options__inner">
                                        <a class="card-options__link" href="members-page.html">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Add Friend
                                            </span>
                                        </a>
                                        <a class="card-options__link" href="members-page.html">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Follow
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="card__title">
                                    Lilly-Rose
                                    <span>
                                        Holland
                                    </span>
                                </h3>
                                <a class="card__text" href="members-page.html">
                                    @lillyrose.flower
                                </a>
                                <p class="card__subtext">
                                    Joined Jan 2015
                                </p>
                                <div class="card__box card-box">
                                    <div class="card-box__person-img card-person-img">
                                        <img class="card-person-img__image" src="landing/images/member-icon-7.png" alt="img">
                                        <span class="card-person-img__status">

                                        </span>
                                    </div>
                                    <a class="card-box__link" href="members-page.html">
                                        Send Message
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="members__card card">
                            <div class="card__inner">
                                <p class="card__suptext">
                                    graphic designer
                                </p>
                                <div class="card__options card-options">
                                    <div class="card-options__btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="card-options__inner">
                                        <a class="card-options__link" href="members-page.html">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Add Friend
                                            </span>
                                        </a>
                                        <a class="card-options__link" href="members-page.htmls">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Follow
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="card__title">
                                    Tina
                                    <span>
                                        Alvarez
                                    </span>
                                </h3>
                                <a class="card__text" href="members-page.html">
                                    @tina.alvarez
                                </a>
                                <p class="card__subtext">
                                    Joined Aug 2021
                                </p>
                                <div class="card__box card-box">
                                    <div class="card-box__person-img card-person-img">
                                        <img class="card-person-img__image" src="landing/images/member-icon-8.png" alt="img">
                                        <span class="card-person-img__status">

                                        </span>
                                    </div>
                                    <a class="card-box__link" href="members-page.html">
                                        Send Message
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="members__card card">
                            <div class="card__inner">
                                <p class="card__suptext">
                                    ux/ui designer
                                </p>
                                <div class="card__options card-options">
                                    <div class="card-options__btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="card-options__inner">
                                        <a class="card-options__link" href="members-page.html">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Add Friend
                                            </span>
                                        </a>
                                        <a class="card-options__link" href="members-page.html">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Follow
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="card__title">
                                    Susan
                                    <span>
                                        Fole
                                    </span>
                                </h3>
                                <a class="card__text" href="members-page.html">
                                    @susan-foley
                                </a>
                                <p class="card__subtext">
                                    Joined Feb 2021
                                </p>
                                <div class="card__box card-box">
                                    <div class="card-box__person-img card-person-img">
                                        <img class="card-person-img__image" src="landing/images/member-icon-4.png" alt="img">
                                        <span class="card-person-img__status">

                                        </span>
                                    </div>
                                    <a class="card-box__link" href="members-page.html">
                                        Send Message
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="members__card card">
                            <div class="card__inner">
                                <p class="card__suptext">
                                    3d artist
                                </p>
                                <div class="card__options card-options">
                                    <div class="card-options__btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="card-options__inner">
                                        <a class="card-options__link" href="members-page.html">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Add Friend
                                            </span>
                                        </a>
                                        <a class="card-options__link" href="members-page.html">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Follow
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="card__title">
                                    Timothy
                                    <span>
                                        Stuart
                                    </span>
                                </h3>
                                <a class="card__text" href="members-page.html">
                                    @tim.stuart.3d
                                </a>
                                <p class="card__subtext">
                                    Joined Dec 2022
                                </p>
                                <div class="card__box card-box">
                                    <div class="card-box__person-img card-person-img">
                                        <img class="card-person-img__image" src="landing/images/member-icon-10.png" alt="img">
                                        <span class="card-person-img__status">

                                        </span>
                                    </div>
                                    <a class="card-box__link" href="members-page.html">
                                        Send Message
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="members__card card">
                            <div class="card__inner">
                                <p class="card__suptext">
                                    ux/ui designer
                                </p>
                                <div class="card__options card-options">
                                    <div class="card-options__btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="card-options__inner">
                                        <a class="card-options__link" href="members-page.html">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Add Friend
                                            </span>
                                        </a>
                                        <a class="card-options__link" href="members-page.html">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Follow
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="card__title">
                                    Philippa
                                    <span>
                                        Bush
                                    </span>
                                </h3>
                                <a class="card__text" href="members-page.html">
                                    @philippa-bush23
                                </a>
                                <p class="card__subtext">
                                    Joined May 2023
                                </p>
                                <div class="card__box card-box">
                                    <div class="card-box__person-img card-person-img">
                                        <img class="card-person-img__image" src="landing/images/member-icon-9.png" alt="img">
                                        <span class="card-person-img__status card-person-img__status--disabled">

                                        </span>
                                    </div>
                                    <a class="card-box__link" href="members-page.htmls">
                                        Send Message
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="members__card card">
                            <div class="card__inner">
                                <p class="card__suptext">
                                    illustrator
                                </p>
                                <div class="card__options card-options">
                                    <div class="card-options__btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="card-options__inner">
                                        <a class="card-options__link" href="members-page.html">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Add Friend
                                            </span>
                                        </a>
                                        <a class="card-options__link" href="members-page.html">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Follow
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="card__title">
                                    Katie
                                    <span>
                                        Campbell
                                    </span>
                                </h3>
                                <a class="card__text" href="members-page.html">
                                    @katie.campbell.art
                                </a>
                                <p class="card__subtext">
                                    Joined Apr 2018
                                </p>
                                <div class="card__box card-box">
                                    <div class="card-box__person-img card-person-img">
                                        <img class="card-person-img__image" src="landing/images/member-icon-28.png" alt="img">
                                        <span class="card-person-img__status card-person-img__status--disabled">

                                        </span>
                                    </div>
                                    <a class="card-box__link" href="members-page.htmls">
                                        Send Message
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="members__card card">
                            <div class="card__inner">
                                <p class="card__suptext">
                                    graphic designer
                                </p>
                                <div class="card__options card-options">
                                    <div class="card-options__btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="card-options__inner">
                                        <a class="card-options__link" href="members-page.html">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Add Friend
                                            </span>
                                        </a>
                                        <a class="card-options__link" href="members-page.html">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <span>
                                                Follow
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <h3 class="card__title">
                                    Leila
                                    <span>
                                        Calderon
                                    </span>
                                </h3>
                                <a class="card__text" href="members-page.html">
                                    @lcalderon.paralect
                                </a>
                                <p class="card__subtext">
                                    Joined Jul 2020
                                </p>
                                <div class="card__box card-box">
                                    <div class="card-box__person-img card-person-img">
                                        <img class="card-person-img__image" src="landing/images/member-icon-19.png" alt="img">
                                        <span class="card-person-img__status">

                                        </span>
                                    </div>
                                    <a class="card-box__link" href="members-page.html">
                                        Send Message
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="members__paging paging">
                        <p class="paging__text">
                            Viewing 1 - 9 of 30 active members
                        </p>
                        <ul class="paging__list">
                            <li class="paging__list-item">
                                <p class="paging__list-text">
                                    1
                                </p>
                            </li>
                            <li class="paging__list-item">
                                <a class="paging__list-link" href="#">
                                    2
                                </a>
                            </li>
                            <li class="paging__list-item">
                                <a class="paging__list-link" href="#">
                                    3
                                </a>
                            </li>
                            <li class="paging__list-item">
                                <a class="paging__list-link" href="#">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.66663 4L12.1952 7.5286C12.4556 7.78894 12.4556 8.21106 12.1952 8.4714L8.66663 12M4.66663 4L8.19522 7.5286C8.45557 7.78894 8.45557 8.21106 8.19522 8.4714L4.66663 12" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="main__groups-section groups-section" id="features">
                <div class="container">
                    <div class="groups-section__top groups-section-top">
                        <h2 class="groups-section-top__title">
                            Core Features
                        </h2>

                    </div>

                    <div class="core-features">

                        <div class="cf-row-cell">

                            <div class="cf-big-cell">
                                <div class="cf--cell">

                                    <div class="cf-cell-icon">

                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M30.0702 30C30.0702 24.4772 34.5473 20.0001 40.0702 20.0001C45.593 20.0001 50.0701 24.4773 50.0701 30C50.0701 35.523 45.5928 40 40.0702 40C34.5472 40 30.0702 35.5228 30.0702 30Z" fill="#00BCFF"></path>
                                            <path d="M10.0701 50C10.0701 44.4772 14.5473 40.0001 20.0701 40.0001L25.3992 37.1865L30.07 40.0001V50C30.07 55.523 25.5929 60 20.0701 60C14.5473 60 10.0701 55.5229 10.0701 50Z" fill="#00CF7F"></path>
                                            <path d="M30.0701 0L24.6287 9.45352L30.0701 19.9999H39.9298C45.4528 19.9999 49.9298 15.5228 49.9298 9.99996C49.9298 4.47715 45.4526 0 39.9298 0H30.0701Z" fill="#FF7361"></path>
                                            <path d="M9.92975 9.99996C9.92975 15.5228 14.4069 19.9999 19.9297 19.9999L25.2344 22.0488L30.0699 19.9999V0H19.9296C14.4069 0 9.92975 4.47715 9.92975 9.99996Z" fill="#FF4D12"></path>
                                            <path d="M10.0701 30C10.0701 35.5229 14.5473 40 20.0701 40H30.07V19.9999H20.0701C14.5473 19.9999 10.0701 24.4772 10.0701 30Z" fill="#B659FF"></path>
                                        </svg>


                                    </div>


                                    <div class="core-bottom">
                                        <h4>Expert Professionals Profile</h4>
                                        <p>Comprehensive profiles for freelancers and clients, including skills, experience, portfolios, and project wise ratings</p>
                                    </div>
                                </div>

                            </div>

                            <div class="cf-small-cell">
                                <div class="cf--cell">
                                    <div class="cf-cell-icon">

                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_482_191)">
                                                <path d="M12.6145 55.1809L8.74606 11.7914H51.2539L47.3814 55.1741L29.974 60L12.6145 55.1809Z" fill="#E44D26"></path>
                                                <path d="M30 56.3113L44.066 52.4116L47.3754 15.3391H30V56.3113Z" fill="#F16529"></path>
                                                <path d="M30 31.4317H22.9582L22.4719 25.9824H30V20.6608H29.9816H16.6561L16.7835 22.0885L18.0914 36.7532H30V31.4317Z" fill="#EBEBEB"></path>
                                                <path d="M30 45.2523L29.9767 45.2585L24.05 43.6582L23.6712 39.414H20.7913H18.3292L19.0747 47.7696L29.9755 50.7957L30 50.7889V45.2523Z" fill="#EBEBEB"></path>
                                                <path d="M12.701 0H15.4054V2.67188H17.8792V0H20.5836V8.09109H17.8793V5.38172H15.4055V8.09109H12.7011L12.701 0Z" fill="black"></path>
                                                <path d="M24.1399 2.68313H21.7591V0H29.2263V2.68313H26.8445V8.09109H24.14L24.1399 2.68313Z" fill="black"></path>
                                                <path d="M30.4114 0H33.2313L34.9659 2.84297L36.6988 0H39.5197V8.09109H36.8265V4.0807L34.9659 6.95754H34.9194L33.0575 4.0807V8.09109H30.4114V0Z" fill="black"></path>
                                                <path d="M40.8656 0H43.5708V5.41664H47.3739V8.09109H40.8656V0Z" fill="black"></path>
                                                <path d="M29.9816 31.4317V36.7532H36.5345L35.9168 43.6548L29.9816 45.2568V50.7932L40.8911 47.7696L40.9711 46.8706L42.2216 32.8607L42.3514 31.4317H40.9174H29.9816Z" fill="white"></path>
                                                <path d="M29.9816 20.6608V23.9659V25.9694V25.9824H42.8186H42.8357L42.9424 24.7862L43.1849 22.0885L43.3121 20.6608H29.9816Z" fill="white"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_482_191">
                                                    <rect width="60" height="60" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>


                                    </div>
                                    <div class="core-bottom">
                                        <h4>Job LIstings</h4>

                                    </div>
                                </div>
                                <div class="cf--cell">
                                    <div class="cf-cell-icon">


                                        <svg width="43" height="60" viewBox="0 0 43 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_482_208)">
                                                <path d="M21.2483 59.8484L3.93271 55.0415L0.0740051 11.7616H42.4745L38.6117 55.0347L21.2483 59.8484Z" fill="#264DE4"></path>
                                                <path d="M35.3047 52.2793L38.6058 15.3004H21.2743V56.169L35.3047 52.2793Z" fill="#2965F1"></path>
                                                <path d="M8.91998 31.3523L9.39573 36.6603H21.2742V31.3523H8.91998Z" fill="#EBEBEB"></path>
                                                <path d="M7.96405 20.6085L8.44658 25.9167H21.2742V20.6085H7.96405Z" fill="#EBEBEB"></path>
                                                <path d="M21.2742 45.138L21.251 45.1442L15.3393 43.5479L14.9614 39.3145H9.6329L10.3766 47.6489L21.2498 50.6674L21.2742 50.6606V45.138Z" fill="#EBEBEB"></path>
                                                <path d="M10.0527 0H16.4817V2.6885H12.7412V5.37701H16.4817V8.06551H10.0527V0Z" fill="black"></path>
                                                <path d="M17.7675 0H24.1965V2.33783H20.456V2.80539H24.1965V8.1824H17.7675V5.72768H21.508V5.26011H17.7675V0Z" fill="black"></path>
                                                <path d="M25.4823 0H31.9114V2.33783H28.1708V2.80539H31.9114V8.1824H25.4823V5.72768H29.2229V5.26011H25.4823V0Z" fill="black"></path>
                                                <path d="M33.5945 31.3522L34.5528 20.6085H21.2559V25.9167H28.7355L28.2525 31.3522H21.2559V36.6603H27.7922L27.1761 43.5445L21.2559 45.1424V50.6648L32.1378 47.6489L32.2176 46.7521L33.465 32.7776L33.5945 31.3522Z" fill="white"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_482_208">
                                                    <rect width="42.5485" height="60" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>



                                    <div class="core-bottom">
                                        <h4>Search and Filtering</h4>

                                    </div>
                                </div>

                                <div class="cf--cell">
                                    <div class="cf-cell-icon">

                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_482_247)">
                                                <path d="M24.0596 47.9823C23.5076 47.9823 23.0599 48.4299 23.0599 48.9823V49.9819C23.0526 51.6498 24.0856 53.1451 25.6473 53.7291C27.2094 54.3131 28.9702 53.8623 30.059 52.5995C31.1479 53.8623 32.9082 54.3131 34.4703 53.7291C36.0324 53.1451 37.065 51.6498 37.0577 49.9819V48.9823C37.0577 48.4299 36.6101 47.9823 36.0581 47.9823C35.5056 47.9823 35.058 48.4299 35.058 48.9823V49.9819C35.058 51.0864 34.1628 51.9816 33.0583 51.9816C31.9539 51.9816 31.0587 51.0864 31.0587 49.9819V46.7945C31.4106 46.665 31.7287 46.4568 31.9887 46.1863L33.4854 44.5861C34.052 44.0058 34.2131 43.1412 33.8927 42.3956C33.4643 41.5026 32.5475 40.9479 31.5575 40.9832H28.5601C27.5701 40.9479 26.6538 41.5026 26.2254 42.3956C25.9054 43.1407 26.0656 44.0053 26.6318 44.5861L28.1303 46.1863C28.3898 46.4568 28.7075 46.665 29.059 46.7945V49.9819C29.059 51.0864 28.1637 51.9816 27.0593 51.9816C25.9549 51.9816 25.0596 51.0864 25.0596 49.9819V48.9823C25.0596 48.4299 24.612 47.9823 24.0596 47.9823ZM28.058 43.1957C28.0699 43.149 28.2196 42.9828 28.5601 42.9828H31.5575C31.8985 42.9828 32.0477 43.149 32.0253 43.2195L30.5286 44.8191C30.2485 45.0214 29.8705 45.0214 29.5904 44.8191L28.058 43.1957Z" fill="#0E1218"></path>
                                                <path d="M17.4252 37.5714C19.2048 36.8757 20.6209 36.7933 21.6374 37.3306C22.3464 37.7389 22.8663 38.4103 23.0833 39.1994C23.2092 39.7294 23.736 40.0613 24.2683 39.9455C24.8006 39.8301 25.1425 39.3093 25.0372 38.7751C24.6958 37.4231 23.8174 36.2688 22.605 35.5804C21.0493 34.7433 19.0624 34.7863 16.6966 35.7086C16.1821 35.9099 15.9281 36.4899 16.129 37.0043C16.3304 37.5188 16.9103 37.7728 17.4252 37.5714Z" fill="#0E1218"></path>
                                                <path d="M34.8493 39.9615C35.1084 40.0164 35.3793 39.9665 35.6018 39.8223C35.8242 39.6777 35.9803 39.4507 36.0357 39.1916C36.2494 38.4112 36.7616 37.7467 37.4609 37.3407C38.4775 36.7928 39.9014 36.8716 41.6928 37.5705C42.2072 37.7718 42.7876 37.5178 42.9885 37.0034C43.1899 36.4889 42.9359 35.9086 42.4214 35.7076C40.0565 34.7849 38.0692 34.7419 36.513 35.579C35.3006 36.2679 34.4218 37.4222 34.0808 38.7742C34.025 39.0333 34.0749 39.3042 34.2186 39.5271C34.3628 39.7496 34.5898 39.9061 34.8493 39.9615Z" fill="#0E1218"></path>
                                                <path d="M4.06277 38.9835C4.97268 38.9844 5.88212 39.0416 6.78515 39.1542C6.3151 40.7209 6.07161 42.3471 6.06245 43.9829V43.9916C5.16125 44.2575 4.30169 44.6479 3.50804 45.1505C3.20734 45.3473 3.03524 45.6901 3.05721 46.0489C3.07918 46.4078 3.29201 46.7268 3.61469 46.8852C3.93736 47.0435 4.32 47.0165 4.6175 46.8147C5.12005 46.4934 5.65968 46.2334 6.22448 46.0402C6.39977 47.2545 6.74762 48.4377 7.25796 49.5535C5.40657 50.7673 4.22571 52.7734 4.06277 54.9814C4.06277 58.0649 7.12751 59.9803 12.0615 59.9803C14.2868 60.1172 16.4975 59.5345 18.3663 58.3189C22.1578 59.4604 26.1 60.0206 30.059 59.9803C34.0181 60.0206 37.9603 59.4604 41.7514 58.3189C43.6201 59.5345 45.8308 60.1172 48.0561 59.9803C52.9901 59.9803 56.0549 58.0649 56.0549 54.9814C55.8924 52.7734 54.7111 50.7673 52.8597 49.5535C53.37 48.4377 53.7179 47.2545 53.8932 46.0402C54.458 46.2334 54.9976 46.4934 55.5006 46.8147C55.7976 47.0165 56.1803 47.0435 56.5029 46.8852C56.8256 46.7268 57.0384 46.4078 57.0609 46.0489C57.0828 45.6901 56.9108 45.3473 56.6096 45.1505C55.8159 44.6479 54.9564 44.2575 54.0552 43.9916V43.9829C54.0465 42.3471 53.803 40.7209 53.3325 39.1542C54.2355 39.0416 55.145 38.9848 56.0549 38.9835C56.6073 38.9835 57.0549 38.5358 57.0549 37.9839C57.0549 37.4314 56.6073 36.9838 56.0549 36.9838C54.9138 36.9843 53.7742 37.0648 52.6441 37.2245C52.2239 36.1943 51.7264 35.1969 51.1566 34.2413C51.8143 32.1061 54.3911 23.1229 52.1699 20.0595C51.698 19.3762 50.9163 18.9739 50.086 18.9867C48.5971 19.1002 47.1494 19.5295 45.8395 20.2463C43.2815 16.6305 38.7708 14.0903 33.6295 13.2742C33.6126 11.9121 33.4414 10.5564 33.1197 9.23226C32.8954 8.1228 33.3069 6.98039 34.187 6.26821C35.4342 5.42788 37.471 6.7282 38.288 7.32549C39.153 7.96764 40.2954 8.09671 41.2818 7.66373C42.2681 7.23121 42.9469 6.30254 43.0595 5.23107C43.1725 4.16006 42.702 3.11056 41.8278 2.48169C36.34 -1.53461 32.3201 0.300302 30.8399 1.27977C27.8722 3.39616 26.4734 7.0939 27.2978 10.6447C27.4964 11.4557 27.6117 12.2846 27.641 13.119C22.0219 13.7149 17.0229 16.3577 14.2804 20.2394C12.9787 19.5281 11.5406 19.1011 10.0618 18.9867C9.23017 18.9739 8.44659 19.3771 7.97334 20.0609C5.76083 23.1115 8.32485 32.0686 8.98073 34.2005C8.4022 35.1686 7.89782 36.1792 7.47216 37.2236C6.34256 37.0644 5.20335 36.9843 4.06277 36.9838C3.51033 36.9838 3.06271 37.4314 3.06271 37.9839C3.06271 38.5358 3.51033 38.9835 4.06277 38.9835ZM6.06245 54.9814C6.06245 52.7309 8.8306 49.9819 12.0615 49.9819C15.2924 49.9819 18.0605 52.7309 18.0605 54.9814C18.0605 56.4368 16.7158 57.2726 14.9715 57.6763C15.0287 57.4488 15.0589 57.2154 15.0612 56.981V54.9814C15.0612 54.4289 14.6136 53.9813 14.0612 53.9813C13.5092 53.9813 13.0616 54.4289 13.0616 54.9814V56.981C13.0616 57.533 12.6139 57.9806 12.0615 57.9806C11.5095 57.9806 11.0614 57.533 11.0614 56.981V54.9814C11.0614 54.4289 10.6138 53.9813 10.0618 53.9813C9.50937 53.9813 9.06174 54.4289 9.06174 54.9814V56.981C9.06403 57.2154 9.09424 57.4488 9.15145 57.6763C7.40717 57.2726 6.06245 56.4368 6.06245 54.9814ZM54.0552 54.9814C54.0552 56.4368 52.7105 57.2726 50.9666 57.6763C51.0234 57.4488 51.0536 57.2154 51.0559 56.981V54.9814C51.0559 54.4289 50.6083 53.9813 50.0558 53.9813C49.5038 53.9813 49.0562 54.4289 49.0562 54.9814V56.981C49.0562 57.533 48.6086 57.9806 48.0561 57.9806C47.5042 57.9806 47.0565 57.533 47.0565 56.981V54.9814C47.0565 54.4289 46.6089 53.9813 46.0565 53.9813C45.5045 53.9813 45.0569 54.4289 45.0569 54.9814V56.981C45.0591 57.2154 45.0889 57.4488 45.1461 57.6763C43.4018 57.2726 42.0571 56.4368 42.0571 54.9814C42.0571 52.7309 44.8253 49.9819 48.0561 49.9819C51.287 49.9819 54.0552 52.7318 54.0552 54.9814ZM29.2398 10.1687C28.5976 7.43351 29.6677 4.58068 31.9502 2.94304C33.3476 2.01895 36.3332 0.938331 40.6474 4.09598C40.9358 4.30698 41.09 4.65529 41.0516 5.01092C41.0136 5.36609 40.7884 5.67366 40.4616 5.8183C40.1352 5.96293 39.7558 5.92174 39.4675 5.71119C36.9845 3.89551 34.7134 3.50418 33.0739 4.60677C31.4967 5.78717 30.7547 7.7809 31.1767 9.70506C31.4454 10.8003 31.5978 11.9208 31.6326 13.0476C31.1113 13.0119 30.5877 12.9872 30.059 12.9872C29.9172 12.9872 29.7771 12.9968 29.6357 12.9996C29.5995 12.0448 29.4668 11.0965 29.2398 10.1687ZM30.059 14.9869C35.8878 14.9869 41.2484 17.3939 44.0582 21.191C42.718 21.9494 41.2392 22.8886 39.6016 24.0365C33.538 21.3168 26.6025 21.3136 20.5367 24.0278C18.8908 22.8794 17.4065 21.9402 16.064 21.1827C18.8665 17.3907 24.2248 14.9869 30.059 14.9869ZM11.0216 34.0243C9.18898 28.4125 8.54729 22.6762 9.59175 21.2354C9.69016 21.071 9.87095 20.9754 10.0618 20.9864C11.4884 21.1447 12.862 21.6185 14.0827 22.3727C14.0914 22.3782 14.0955 22.3869 14.1042 22.3924C14.1367 22.4084 14.1701 22.4226 14.204 22.435C16.162 23.4968 18.0486 24.685 19.8519 25.9917C20.1462 26.2005 20.5298 26.2343 20.8557 26.0801C26.6822 23.2973 33.4552 23.3005 39.2789 26.0888C39.6061 26.2449 39.9924 26.2114 40.2877 26.0004C44.7658 22.814 48.3376 20.9864 50.086 20.9864C50.2746 20.9758 50.4536 21.071 50.5506 21.2331C51.6006 22.6812 50.9561 28.4368 49.1153 34.0632C49.0228 34.3452 49.0603 34.6532 49.2178 34.9045C49.7551 35.7663 50.2275 36.6666 50.6321 37.5976C48.4278 38.058 46.3315 38.9359 44.4568 40.1836C44.0261 40.5177 43.9428 41.1351 44.2692 41.5718C44.5955 42.0084 45.2116 42.1031 45.6537 41.7846C47.3907 40.6701 49.3217 39.8925 51.3461 39.492C51.7502 40.7863 51.9818 42.1288 52.0349 43.484C50.3927 43.1741 48.7271 43.0066 47.0565 42.9828C46.5041 42.9828 46.0565 43.4305 46.0565 43.9829C46.0565 44.5349 46.5041 44.9825 47.0565 44.9825C48.7033 45.0118 50.3446 45.1871 51.9603 45.5061C51.828 46.5684 51.541 47.6056 51.1085 48.585C50.1396 48.1887 49.1029 47.9841 48.0561 47.9823C43.551 47.9823 40.0574 51.7445 40.0574 54.9814C40.0538 55.5539 40.1714 56.121 40.4021 56.6455C37.0321 57.5632 33.5517 58.0127 30.059 57.9806C26.5664 58.0127 23.086 57.5632 19.7156 56.6455C19.9462 56.121 20.0639 55.5539 20.0602 54.9814C20.0602 51.7445 16.5666 47.9823 12.0615 47.9823C11.0147 47.9841 9.97805 48.1887 9.0091 48.585C8.57658 47.6056 8.2896 46.5684 8.15733 45.5061C9.77346 45.1871 11.4143 45.0118 13.0616 44.9825C13.6135 44.9825 14.0612 44.5349 14.0612 43.9829C14.0612 43.4305 13.6135 42.9828 13.0616 42.9828C11.3905 43.0066 9.72448 43.1741 8.08273 43.484C8.13536 42.1292 8.36696 40.7868 8.7711 39.4924C10.7955 39.8925 12.7265 40.6701 14.4635 41.7846C14.9056 42.1027 15.5217 42.0084 15.848 41.5718C16.1748 41.1356 16.0915 40.5177 15.6608 40.1836C13.7856 38.9354 11.6894 38.0576 9.48419 37.5971C9.89383 36.652 10.3735 35.7384 10.9195 34.8651C11.0765 34.6138 11.1141 34.3058 11.0216 34.0243Z" fill="#0E1218"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_482_247">
                                                    <rect width="60" height="60" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>



                                    </div>
                                    <div class="core-bottom">
                                        <h4>Messaging Feature</h4>

                                    </div>
                                </div>
                                <div class="cf--cell">

                                    <div class="cf-cell-icon">


                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_482_257)">
                                                <path d="M6.20859 5.68457H6.22078C6.70617 5.68457 7.09968 5.29105 7.09968 4.80566C7.09968 4.32027 6.70617 3.92676 6.22078 3.92676H6.20859C5.7232 3.92676 5.32968 4.32027 5.32968 4.80566C5.32968 5.29105 5.7232 5.68457 6.20859 5.68457Z" fill="#0E1218"></path>
                                                <path d="M9.26685 5.68457H9.27903C9.76442 5.68457 10.1579 5.29105 10.1579 4.80566C10.1579 4.32027 9.76442 3.92676 9.27903 3.92676H9.26685C8.78146 3.92676 8.38794 4.32027 8.38794 4.80566C8.38794 5.29105 8.78146 5.68457 9.26685 5.68457Z" fill="#0E1218"></path>
                                                <path d="M12.3251 5.68457H12.3373C12.8227 5.68457 13.2162 5.29105 13.2162 4.80566C13.2162 4.32027 12.8227 3.92676 12.3373 3.92676H12.3251C11.8397 3.92676 11.4462 4.32027 11.4462 4.80566C11.4462 5.29105 11.8397 5.68457 12.3251 5.68457Z" fill="#0E1218"></path>
                                                <path d="M49.554 50.7455C49.554 49.6773 49.1389 48.6334 48.3836 47.878L47.5896 47.084C47.7511 46.8009 47.9037 46.512 48.0469 46.2179H57.3633C58.8172 46.2179 60 45.0351 60 43.5812V2.87023C60 1.41629 58.8172 0.233516 57.3633 0.233516H45.1113C44.6259 0.233516 44.2324 0.627031 44.2324 1.11242C44.2324 1.59781 44.6259 1.99133 45.1113 1.99133H57.3633C57.8479 1.99133 58.2422 2.38555 58.2422 2.87023V7.6202H18.6233V1.99121H40.7719C41.2573 1.99121 41.6508 1.5977 41.6508 1.1123C41.6508 0.626914 41.2573 0.233398 40.7719 0.233398H2.63672C1.18277 0.233398 0 1.41629 0 2.87012V43.5811C0 45.035 1.18277 46.2178 2.63672 46.2178H20.9398C21.6647 47.7107 22.6413 49.0884 23.8494 50.2965C26.6938 53.1409 30.4755 54.7073 34.4981 54.7073C37.2006 54.7073 39.7388 53.9912 41.9338 52.7396L42.7274 53.5341C43.4828 54.2895 44.5282 54.7046 45.5966 54.7046L50.4009 59.5089C50.5725 59.6805 50.7975 59.7664 51.0224 59.7664C51.2473 59.7664 51.4723 59.6806 51.6438 59.5089C51.9871 59.1657 51.9871 58.6092 51.6438 58.2661L47.5508 54.173C47.8514 53.9994 48.1315 53.7861 48.3836 53.5341C48.6359 53.2818 48.8493 53.0013 49.023 52.7004L53.1163 56.7936C53.2879 56.9652 53.5129 57.0511 53.7377 57.0511C53.9626 57.0511 54.1876 56.9653 54.3592 56.7936C54.7024 56.4504 54.7024 55.8938 54.3592 55.5507L49.554 50.7455ZM2.63672 1.99121H16.8655V7.62008H1.75781V2.87012C1.75781 2.38555 2.15203 1.99121 2.63672 1.99121ZM25.0924 49.0536C22.5802 46.5412 21.1964 43.2009 21.1964 39.6479C21.1964 32.3134 27.1635 26.3463 34.498 26.3463C41.8325 26.3463 47.7996 32.3134 47.7997 39.6479C47.7997 46.9824 41.8327 52.9495 34.4981 52.9495C30.9451 52.9495 27.6048 51.566 25.0924 49.0536ZM39.6164 25.4846C38.0177 24.9051 36.2943 24.5885 34.498 24.5885C33.3285 24.5885 32.1896 24.7225 31.0961 24.976C31.9092 23.6203 33.3896 22.7464 35.0309 22.7464C35.589 22.7464 36.1371 22.8473 36.66 23.0463C37.0588 23.198 37.5096 23.0414 37.7279 22.6742C37.914 22.3613 38.2406 22.1744 38.6014 22.1744C39.161 22.1744 39.6163 22.6297 39.6163 23.1893V25.4846H39.6164ZM47.1407 49.1209C48.0146 49.995 48.0146 51.4171 47.1407 52.2912C46.2666 53.1652 44.8445 53.1653 43.9707 52.2916L43.4384 51.7586C44.6455 50.8651 45.715 49.7959 46.6085 48.5887L47.1407 49.1209ZM57.3633 44.46H48.7691C49.2802 42.9482 49.5575 41.3299 49.5575 39.6479C49.5575 33.8198 46.2294 28.7546 41.3742 26.2523V23.1894C41.3742 21.6605 40.1304 20.4167 38.6016 20.4167C37.8752 20.4167 37.1816 20.7073 36.6693 21.2041C36.1357 21.0609 35.5869 20.9886 35.031 20.9886C32.1697 20.9886 29.6616 22.9085 28.9102 25.664C28.0343 26.0152 27.1986 26.4461 26.4125 26.9484L21.3629 14.1096C20.9762 13.1287 20.1076 12.4441 19.0964 12.323C17.8419 12.1722 16.643 12.887 16.1814 14.0611L13.6607 20.47C13.483 20.9217 13.7051 21.4319 14.1568 21.6097C14.6084 21.7873 15.1188 21.5654 15.2965 21.1135L17.8173 14.7045C17.9863 14.2747 18.4253 14.0127 18.887 14.0684C19.2506 14.112 19.5805 14.3812 19.7275 14.7538L24.9437 28.0162C24.1083 28.7036 23.348 29.4793 22.6771 30.3286H14.4517C14.0904 30.3286 13.766 30.5496 13.6338 30.8858L11.6487 35.933C11.5423 36.2036 11.5765 36.5093 11.7402 36.7496C11.9039 36.99 12.1758 37.1336 12.4665 37.1336H12.7325C13.0126 37.1336 13.2735 37.2454 13.467 37.4483C13.6603 37.651 13.7595 37.9177 13.746 38.2006C13.7216 38.7321 13.2428 39.1645 12.6786 39.1645H8.53711C7.97414 39.1645 7.50645 38.748 7.47246 38.2173C7.44328 37.756 7.72816 37.3324 8.1641 37.1875C8.75461 36.9922 9.225 36.5457 9.45469 35.9623L13.7168 25.1272C13.8945 24.6754 13.6724 24.1652 13.2206 23.9875C12.7689 23.81 12.2587 24.032 12.081 24.4837L7.81898 35.3185C7.78113 35.4147 7.70566 35.4876 7.61074 35.519C6.41707 35.9158 5.63883 37.0708 5.71828 38.3288C5.81145 39.7831 7.04977 40.9222 8.53723 40.9222H12.6786C14.1936 40.9222 15.4338 39.7621 15.5019 38.2825C15.5382 37.516 15.2673 36.7889 14.7389 36.2349C14.4449 35.9266 14.0837 35.6926 13.6891 35.5471L15.0504 32.0863H21.4792C20.1826 34.3099 19.4387 36.8935 19.4387 39.648C19.4387 41.3096 19.7067 42.9298 20.2209 44.4601H2.63672C2.15203 44.4601 1.75781 44.0657 1.75781 43.5812V9.37789H58.2422V43.5811C58.2422 44.0657 57.8479 44.46 57.3633 44.46Z" fill="#0E1218"></path>
                                                <path d="M15.9422 28.298H21.5825C21.8733 28.298 22.1453 28.1542 22.3089 27.914C22.4726 27.6736 22.5068 27.368 22.4004 27.0974L19.5803 19.9286C19.4481 19.5924 19.1236 19.3715 18.7624 19.3715C18.4012 19.3715 18.0767 19.5925 17.9446 19.9286L15.1243 27.0974C15.0179 27.368 15.0521 27.6736 15.2158 27.914C15.3794 28.1542 15.6514 28.298 15.9422 28.298ZM18.7624 22.651L20.2924 26.5402H17.2324L18.7624 22.651Z" fill="#0E1218"></path>
                                                <path d="M34.4133 28.7671C31.5069 28.7671 28.7744 29.8989 26.7193 31.954C24.6642 34.0091 23.5324 36.7416 23.5324 39.648C23.5324 45.6477 28.4135 50.5288 34.4133 50.5288C36.4793 50.5288 38.4922 49.9445 40.2344 48.839C40.6442 48.5789 40.7657 48.0358 40.5056 47.626C40.2457 47.2162 39.7025 47.0945 39.2926 47.3548C37.8326 48.2813 36.1453 48.771 34.4133 48.771C31.758 48.771 29.3648 47.6301 27.6961 45.8135H29.4995C31.0676 45.8135 32.3712 44.6137 32.4673 43.0825C32.5513 41.7598 31.7324 40.5435 30.4735 40.1238C30.3555 40.0848 30.257 39.99 30.2096 39.8691L27.6947 33.4779C27.7821 33.383 27.8705 33.2888 27.9622 33.197C28.3762 32.783 28.8238 32.4149 29.2974 32.0928C29.7189 35.4225 32.5676 38.0066 36.0104 38.0066C36.9088 38.0066 37.8019 37.8256 38.6272 37.479C39.4785 38.1959 40.545 38.5868 41.6682 38.5868C41.7044 38.5868 41.7407 38.5866 41.7756 38.5852C42.3687 38.5713 42.9279 38.3734 43.3923 38.0441C43.4852 38.5653 43.5364 39.1007 43.5364 39.6482C43.5364 41.3943 43.0392 43.0933 42.0984 44.5614C41.8365 44.9701 41.9556 45.5137 42.3643 45.7756C42.7731 46.0374 43.3166 45.9184 43.5785 45.5097C44.7009 43.7579 45.2942 41.7311 45.2942 39.6481C45.2942 33.6482 40.413 28.7671 34.4133 28.7671ZM28.5735 40.5114C28.8124 41.1217 29.3041 41.5888 29.9201 41.7922C30.4205 41.959 30.7466 42.4438 30.7131 42.9717C30.675 43.5796 30.1419 44.0557 29.4997 44.0557H26.4293C25.7046 42.7483 25.2905 41.2458 25.2905 39.648C25.2905 38.0495 25.7012 36.5152 26.4684 35.1614L28.5735 40.5114ZM36.9375 31.2389C36.9375 31.7507 36.5217 32.1671 36.0105 32.1671C35.4988 32.1671 35.0824 31.7507 35.0824 31.2389C35.0824 30.9863 35.1845 30.7488 35.3642 30.5746C35.8752 30.6278 36.3728 30.7253 36.8552 30.8595C36.9089 30.9781 36.9375 31.1072 36.9375 31.2389ZM41.7307 36.8277C41.7249 36.8278 41.7131 36.8283 41.7075 36.8284C41.6948 36.8289 41.6816 36.8287 41.6685 36.8287C40.8862 36.8287 40.1476 36.5267 39.595 35.9848C39.5454 35.9352 39.4978 35.8846 39.451 35.833C39.1793 35.5331 38.738 35.4574 38.3819 35.6499C37.657 36.0415 36.8371 36.2485 36.0107 36.2485C33.2476 36.2485 30.9997 34.001 30.9997 31.2387C30.9997 31.2199 31.0015 31.2018 31.0016 31.1831C31.7666 30.8749 32.574 30.672 33.4066 30.5812C33.3533 30.7936 33.3246 31.0139 33.3246 31.2387C33.3246 32.7197 34.5295 33.9246 36.0105 33.9246C37.3741 33.9246 38.5028 32.902 38.6724 31.5833C40.5095 32.5575 41.9761 34.1398 42.8008 36.0614C42.639 36.5078 42.2116 36.8182 41.7307 36.8277Z" fill="#0E1218"></path>
                                                <path d="M51.7563 20.5405H49.0574C48.572 20.5405 48.1785 20.934 48.1785 21.4194C48.1785 21.9048 48.572 22.2983 49.0574 22.2983H51.7563C52.2417 22.2983 52.6352 21.9048 52.6352 21.4194C52.6352 20.934 52.2417 20.5405 51.7563 20.5405Z" fill="#0E1218"></path>
                                                <path d="M51.7563 23.6132H49.0574C48.572 23.6132 48.1785 24.0067 48.1785 24.4921C48.1785 24.9775 48.572 25.371 49.0574 25.371H51.7563C52.2417 25.371 52.6352 24.9775 52.6352 24.4921C52.6352 24.0067 52.2417 23.6132 51.7563 23.6132Z" fill="#0E1218"></path>
                                                <path d="M51.7563 26.6858H49.0574C48.572 26.6858 48.1785 27.0793 48.1785 27.5647C48.1785 28.0501 48.572 28.4436 49.0574 28.4436H51.7563C52.2417 28.4436 52.6352 28.0501 52.6352 27.5647C52.6352 27.0793 52.2417 26.6858 51.7563 26.6858Z" fill="#0E1218"></path>
                                                <path d="M50.5845 12.3438H29.4188C28.288 12.3438 27.368 13.2638 27.368 14.3945V16.0148C27.368 17.1455 28.288 18.0655 29.4188 18.0655H50.5845C51.7152 18.0655 52.6352 17.1455 52.6352 16.0148V14.3945C52.6352 13.2638 51.7152 12.3438 50.5845 12.3438ZM50.8774 16.0148C50.8774 16.1763 50.7459 16.3077 50.5845 16.3077H29.4188C29.2573 16.3077 29.1258 16.1763 29.1258 16.0148V14.3945C29.1258 14.233 29.2573 14.1016 29.4188 14.1016H50.5845C50.7459 14.1016 50.8774 14.233 50.8774 14.3945V16.0148Z" fill="#0E1218"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_482_257">
                                                    <rect width="60" height="60" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>


                                    </div>


                                    <div class="core-bottom">
                                        <h4>Payment Processing</h4>

                                    </div>
                                </div>

                            </div>

                        </div>



                        <div class="cf-row-cell cf-small-line">



                            <div class="cf-small-cell">

                                <div class="cf--cell">

                                    <div class="cf-cell-icon">

                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_482_302)">
                                                <path d="M28 0H2.00004C0.89543 0 0 0.89543 0 2.00004V58.0001C0 59.1046 0.89543 60 2.00004 60H28.0001C29.1047 60 30.0001 59.1046 30.0001 58V2.00004C30 0.89543 29.1046 0 28 0ZM2.00004 58V2.00004H28.0001V58.0001L2.00004 58Z" fill="#0E1218"></path>
                                                <path d="M58 26H34C32.8954 26 31.9999 26.8954 31.9999 28V58C31.9999 59.1046 32.8954 60.0001 34 60.0001H58C59.1046 60.0001 60 59.1046 60 58V28C60 26.8954 59.1046 26 58 26ZM58 57.9999H34V27.9999H58V57.9999Z" fill="#0E1218"></path>
                                                <path d="M58 0H34C32.8954 0 31.9999 0.89543 31.9999 2.00004V22.0001C31.9999 23.1047 32.8954 24.0001 34 24.0001H58C59.1046 24.0001 60 23.1047 60 22.0001V2.00004C60 0.89543 59.1046 0 58 0ZM58 2.00004V17.2001L50.774 8.36707C50.584 8.13527 50.3002 8.00086 50.0004 8.00086C49.7006 8.00086 49.4168 8.13527 49.2269 8.36707L44.7719 13.809L42.7718 11.368C42.5819 11.1362 42.298 11.0018 41.9984 11.0018C41.6987 11.0018 41.4148 11.1362 41.2248 11.368L33.9999 20.2V2.00004H58ZM48.8901 22H35.108L42 13.5799L48.8901 22ZM51.474 22L46.0641 15.387L50.0001 10.579L58.0001 20.357V22H51.474Z" fill="#0E1218"></path>
                                                <path d="M9.00002 8.00008C9.55233 8.00008 9.99998 7.55231 9.99998 7.00012V6.00004H13.9999V16H13C12.4477 16 12 16.4478 12 17C12 17.5523 12.4478 17.9999 13 17.9999H16.9999C17.5522 17.9999 17.9999 17.5522 17.9999 17C17.9999 16.4477 17.5521 16 16.9999 16H16V6.00004H19.9999V7.00001C19.9999 7.55231 20.4477 7.99997 20.9999 7.99997C21.5521 7.99997 21.9999 7.55219 21.9999 7.00001V5.00008C21.9999 4.44778 21.5522 4.00012 20.9999 4.00012H9.00002C8.44772 4.00012 8.00006 4.4479 8.00006 5.00008V7.00012C8.00006 7.55231 8.44772 8.00008 9.00002 8.00008Z" fill="#0E1218"></path>
                                                <path d="M24.9999 21H5.00002C4.44772 21 4.00006 21.4478 4.00006 22C4.00006 22.5523 4.44783 22.9999 5.00002 22.9999H25.0001C25.5524 22.9999 26 22.5521 26 22C26 21.4478 25.5522 21 24.9999 21Z" fill="#0E1218"></path>
                                                <path d="M5.00002 27.9999H12C12.5523 27.9999 12.9999 27.5521 12.9999 27C12.9999 26.4478 12.5522 26 12 26H5.00002C4.44772 26 4.00006 26.4477 4.00006 27C4.00006 27.5523 4.44772 27.9999 5.00002 27.9999Z" fill="#0E1218"></path>
                                                <path d="M19 27.9999C19.5523 27.9999 19.9999 27.5521 19.9999 27C19.9999 26.4478 19.5521 26 19 26H16C15.4477 26 15 26.4477 15 27C15 27.5523 15.4478 27.9999 16 27.9999H19Z" fill="#0E1218"></path>
                                                <path d="M24.9999 31H5.00002C4.44772 31 4.00006 31.4477 4.00006 32C4.00006 32.5523 4.44783 32.9999 5.00002 32.9999H25.0001C25.5524 32.9999 26 32.5523 26 32C26 31.4477 25.5522 31 24.9999 31Z" fill="#0E1218"></path>
                                                <path d="M5.00002 38H14C14.5523 38 15 37.5523 15 37.0001C15 36.4478 14.5522 36.0001 14 36.0001H5.00002C4.44772 36.0001 4.00006 36.4479 4.00006 37.0001C3.99994 37.5523 4.44772 38 5.00002 38Z" fill="#0E1218"></path>
                                                <path d="M24.9999 45H5.00002C4.44772 45 4.00006 45.4477 4.00006 46C4.00006 46.5523 4.44783 46.9999 5.00002 46.9999H25.0001C25.5524 46.9999 26 46.5523 26 46C26 45.4477 25.5522 45 24.9999 45Z" fill="#0E1218"></path>
                                                <path d="M9.99994 50H5.00002C4.44772 50 4.00006 50.4477 4.00006 51C4.00006 51.5523 4.44783 51.9999 5.00002 51.9999H10.0001C10.5524 51.9999 11 51.5522 11 51C11 50.4478 10.5522 50 9.99994 50Z" fill="#0E1218"></path>
                                                <path d="M18.9999 50H13.9999C13.4476 50 12.9999 50.4477 12.9999 51C12.9999 51.5523 13.4477 51.9999 13.9999 51.9999H18.9999C19.5522 51.9999 19.9999 51.5522 19.9999 51C19.9999 50.4478 19.5522 50 18.9999 50Z" fill="#0E1218"></path>
                                                <path d="M48 48H47V47.0001C47 46.4478 46.5524 46.0001 46.0001 46.0001C45.4478 46.0001 45.0001 46.4478 45.0001 47.0001V48H44.0001C43.4478 48 43.0002 48.4477 43.0002 49C43.0002 49.5523 43.448 50 44.0001 50H45V50.9999C45 51.5522 45.4476 51.9999 45.9999 51.9999C46.5523 51.9999 46.9999 51.5521 46.9999 50.9999V50H47.9999C48.5522 50 48.9998 49.5523 48.9998 49C48.9998 48.4477 48.5523 48 48 48Z" fill="#0E1218"></path>
                                                <path d="M39 10C40.6568 10 42 8.6568 42 7C42 5.3432 40.6568 4 39 4C37.3432 4 36 5.3432 36 7C36 8.6568 37.3432 10 39 10ZM39 6.00004C39.5523 6.00004 40 6.44781 40 7C40 7.55219 39.5523 7.99996 39 7.99996C38.4477 7.99996 38 7.55219 38 7C38 6.44781 38.4477 6.00004 39 6.00004Z" fill="#0E1218"></path>
                                                <path d="M46 42C42.1339 42 39 45.1341 39 49C39 52.8659 42.1341 55.9999 46 55.9999C49.8659 55.9999 52.9999 52.8659 52.9999 49C52.995 45.1361 49.864 42.0049 46 42ZM46 54C43.2386 54 40.9999 51.7614 40.9999 49C40.9999 46.2386 43.2384 43.9999 46 43.9999C48.7614 43.9999 51 46.2386 51 49C50.9967 51.7601 48.7601 53.9967 46 54Z" fill="#0E1218"></path>
                                                <path d="M37 33H55C55.5523 33 55.9999 32.5524 55.9999 32.0001C55.9999 31.4478 55.5521 31.0001 55 31.0001H37C36.4477 31.0001 36 31.4478 36 32.0001C36 32.5524 36.4478 33 37 33Z" fill="#0E1218"></path>
                                                <path d="M37 38H40.9999C41.5522 38 41.9999 37.5523 41.9999 37.0001C41.9999 36.4478 41.5521 36.0001 40.9999 36.0001H37C36.4477 36.0001 36 36.4479 36 37.0001C36 37.5523 36.4478 38 37 38Z" fill="#0E1218"></path>
                                                <path d="M48 38C48.5523 38 49 37.5523 49 37.0001C49 36.4478 48.5522 36.0001 48 36.0001H45C44.4477 36.0001 44 36.4479 44 37.0001C44 37.5524 44.4478 38 45 38H48Z" fill="#0E1218"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_482_302">
                                                    <rect width="60" height="60" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </div>


                                    <div class="core-bottom">
                                        <h4>Reviews &amp; Rating System</h4>

                                    </div>
                                </div>
                                <div class="cf--cell">
                                    <div class="cf-cell-icon">
                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_482_330)">
                                                <path d="M54.9998 0H5.00015C2.23984 0.00320435 0.00320435 2.23984 0 5.00015V43C0.00320435 45.7599 2.23984 47.9965 5.00015 48.0002H22.9999V52.0001C20.24 52.0033 18.0034 54.24 18.0002 56.9998V58C18.0011 59.1042 18.896 59.9991 20.0002 60H56.9998C58.656 59.9982 59.9982 58.656 60 56.9998V5.00015C59.9968 2.23984 57.7602 0.00320435 54.9998 0ZM58 33.9999H41.9998V33.0002C42.0007 32.4481 42.448 32.0009 43 32H56.9998C57.5519 32.0009 57.9991 32.4481 58 33.0002V33.9999ZM41.9998 35.9999H58V52.0001H41.9998V35.9999ZM56.9998 30H43C41.3438 30.0018 40.0017 31.344 39.9998 33.0002V52.0001H33.0002V28H58V30.1845C57.6796 30.0659 57.3413 30.0032 56.9998 30ZM58 26.0001H33.0002V24.9998C33.0006 24.4478 33.4479 24.0005 33.9999 24.0001H56.9998C57.5519 24.0005 57.9991 24.4478 58 24.9998V26.0001ZM54.0001 22.0001H33.9999C32.3438 22.002 31.002 23.3441 31.0002 24.9998V37.9999H5.99991V5.99991H54.0001V22.0001ZM1.99997 43V5.00015C2.0018 3.34396 3.34396 2.0018 5.00015 1.99997H54.9998C56.656 2.0018 57.9982 3.34396 58 5.00015V22.1841C57.6796 22.0656 57.3413 22.0033 56.9998 22.0001H56.0001V5.99991C55.9987 4.89578 55.1042 4.00131 54.0001 3.99994H5.99991C4.89578 4.00131 4.00131 4.89578 3.99994 5.99991V37.9999C4.00131 39.104 4.89578 39.9989 5.99991 39.9998H31.0002V41.9998H28C27.4475 41.9998 26.9998 42.4475 26.9998 43C26.9998 43.5521 27.4475 43.9998 28 43.9998H31.0002V46.0002H5.00015C3.34396 45.9984 2.0018 44.6562 1.99997 43ZM24.9998 48.0002H31.0002V52.0001H24.9998V48.0002ZM20.0002 56.9998C20.002 55.3441 21.3437 54.0019 22.9999 54.0001H31.0002V56.9998C31.0034 57.3413 31.0657 57.6796 31.1842 58H20.0002V56.9998ZM33.9999 58C33.4479 57.9991 33.0006 57.5519 33.0002 56.9998V54.0001H39.9998V56.9998C40.0035 57.3413 40.0658 57.6796 40.1843 58H33.9999ZM56.9998 58H43C42.448 57.9991 42.0007 57.5519 41.9998 56.9998V54.0001H58V56.9998C57.9991 57.5519 57.5519 57.9991 56.9998 58Z" fill="#0E1218"></path>
                                                <path d="M50.9999 54.9999H48.9999C48.4479 54.9999 48.0002 55.4476 48.0002 56.0001C48.0002 56.5522 48.4479 56.9998 48.9999 56.9998H50.9999C51.5524 56.9998 52.0001 56.5522 52.0001 56.0001C52.0001 55.4476 51.5524 54.9999 50.9999 54.9999Z" fill="#0E1218"></path>
                                                <path d="M47.4142 39.9998H52.0001C52.5522 39.9998 52.9999 39.5522 52.9999 39.0001C52.9999 38.4476 52.5522 37.9999 52.0001 37.9999H45C44.4489 38.0022 44.0021 38.4485 43.9998 39.0001V46.0002C43.9998 46.5523 44.4479 47 45 47C45.5521 47 46.0002 46.5523 46.0002 46.0002V41.4139L54.2931 49.7072C54.6854 50.0858 55.3093 50.0807 55.6947 49.6948C56.0806 49.3089 56.0861 48.6855 55.7071 48.2932L47.4142 39.9998Z" fill="#0E1218"></path>
                                                <path d="M16.5857 18.0001H11.9998C11.4478 18.0001 11.0001 18.4478 11.0001 18.9999C11.0001 19.5524 11.4478 20.0001 11.9998 20.0001H18.9999C19.5515 19.9978 19.9979 19.5515 20.0002 18.9999V11.9998C20.0002 11.4477 19.5525 11 18.9999 11C18.4479 11 18.0002 11.4477 18.0002 11.9998V16.5856L9.70688 8.29279C9.31458 7.91376 8.69111 7.91926 8.30521 8.30515C7.91932 8.69104 7.91382 9.31452 8.29285 9.70682L16.5857 18.0001Z" fill="#0E1218"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_482_330">
                                                    <rect width="60" height="60" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>


                                    </div>

                                    <div class="core-bottom">
                                        <h4>Dispute Resolution</h4>

                                    </div>
                                </div>

                                <div class="cf--cell">
                                    <div class="cf-cell-icon">
                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.059 22.0261C14.4193 21.9237 14.8069 22.0235 15.073 22.2871L20 27.2101C19.2704 28.4866 18.6292 29.8117 18.081 31.1761C17.6533 31.0005 17.1954 30.9101 16.733 30.9101C15.7684 30.9083 14.8442 31.2972 14.171 31.9881C13.342 32.8367 12.9727 34.0328 13.179 35.2011C10.4021 35.3844 7.78972 36.5832 5.84 38.5691C1.64 42.8541 1.925 47.1761 3.754 52.7621C4.622 55.4111 0.653999 57.1531 0.611999 57.1691C0.216737 57.3369 -0.0272323 57.7384 0.00584166 58.1665C0.0389156 58.5947 0.341648 58.9539 0.757999 59.0591C3.16628 59.6764 5.64186 59.9925 8.128 60.0001C13.802 60.0001 18.892 58.2601 22.074 55.0301C24.0313 53.0221 25.2024 50.3779 25.374 47.5791C25.5719 47.616 25.7727 47.6361 25.974 47.6391C26.9392 47.6407 27.864 47.2519 28.538 46.5611C29.5613 45.5094 29.8676 43.953 29.319 42.5921C30.7082 42.0153 32.0537 41.3385 33.345 40.5671L37.704 44.9271C37.9729 45.1955 38.0731 45.5898 37.965 45.9541C36.9474 49.8328 38.0617 53.9604 40.893 56.8001C42.9306 58.8577 45.7072 60.0141 48.603 60.0111C50.0529 60.0072 51.4891 59.7297 52.836 59.1931C53.1497 59.0695 53.38 58.7961 53.4485 58.4659C53.5171 58.1358 53.4146 57.7933 53.176 57.5551L47.385 51.7741C47.1499 51.5367 47.0339 51.2063 47.069 50.8741L47.44 48.3401C47.5064 47.8714 47.876 47.5038 48.345 47.4401L50.856 47.0731C51.1877 47.0325 51.5201 47.1426 51.762 47.3731L57.552 53.1731C57.7903 53.4117 58.1327 53.5141 58.4629 53.4456C58.793 53.3771 59.0664 53.1468 59.19 52.8331C60.8796 48.7358 59.9365 44.0243 56.8 40.8931C53.9551 38.0643 49.8244 36.9547 45.945 37.9771C45.5838 38.0801 45.1952 37.979 44.93 37.7131L40.87 33.6541C47.814 25.5411 63.808 5.74606 59.082 0.940058C58.4025 0.290349 57.4848 -0.0498094 56.546 5.80773e-05C50.031 5.80773e-05 34.016 13.0421 26.728 19.5141L22.279 15.0651C22.0199 14.7988 21.9233 14.4141 22.026 14.0571C23.0564 10.1765 21.9445 6.04072 19.107 3.20006C15.9795 0.0611358 11.268 -0.882425 7.173 0.810058C6.85952 0.933577 6.62932 1.20665 6.56061 1.53651C6.4919 1.86636 6.59391 2.20864 6.832 2.44706L12.632 8.25506C12.8629 8.48318 12.9704 8.80824 12.921 9.12906L12.562 11.6671C12.4927 12.1281 12.131 12.4902 11.67 12.5601L9.114 12.9221C8.79373 12.9657 8.47183 12.8543 8.247 12.6221L2.447 6.83206C2.20883 6.5948 1.8674 6.49309 1.53822 6.56134C1.20905 6.62959 0.936201 6.85867 0.811999 7.17106C-0.880709 11.2657 0.0620186 15.977 3.2 19.1051C6.04024 21.9447 10.1774 23.0576 14.059 22.0261ZM24.159 24.7311L35.665 36.4311C33.4091 38.3411 30.8507 39.8619 28.095 40.9311L19.738 32.4311C20.7823 29.6413 22.2746 27.0405 24.156 24.7311H24.159ZM20.651 53.6311C17.037 57.3001 10.542 58.7811 3.651 57.6311C5.163 56.3761 6.424 54.4811 5.658 52.1451C3.726 46.2451 4.133 43.1741 7.272 39.9771C9.09395 38.1239 11.6052 37.113 14.203 37.1871L15.177 38.1781C12.2459 38.9575 9.73457 40.8496 8.177 43.4521C7.96631 43.7492 7.93386 44.1374 8.09229 44.4654C8.25072 44.7934 8.57497 45.0093 8.9387 45.029C9.30243 45.0487 9.64809 44.869 9.841 44.5601C12.441 40.6601 15.415 40.0131 16.922 39.9511L17.778 40.8221L12.302 46.2991C12.042 46.5501 11.9378 46.9219 12.0293 47.2716C12.1208 47.6212 12.3939 47.8942 12.7435 47.9858C13.0931 48.0773 13.4649 47.973 13.716 47.7131L19.181 42.2481L20.191 43.2761C20.102 45.6761 19.053 49.6671 13.603 52.0921C13.18 52.287 12.9476 52.748 13.0424 53.204C13.1373 53.66 13.5344 53.9901 14 54.0001C14.1396 54.0004 14.2776 53.971 14.405 53.9141C19.665 51.5731 21.447 47.9371 21.981 45.1001L23.4 46.5391C23.4846 49.1779 22.491 51.7375 20.648 53.6281L20.651 53.6311ZM27.124 45.1631C26.8248 45.4699 26.4145 45.643 25.986 45.6431C25.5581 45.643 25.1483 45.4699 24.85 45.1631L15.597 35.7541C14.9561 35.0975 14.9561 34.0496 15.597 33.3931C15.8953 33.0863 16.3051 32.9131 16.733 32.9131C17.1616 32.9127 17.5721 33.0859 17.871 33.3931L27.121 42.8001C27.7591 43.4573 27.7591 44.5028 27.121 45.1601L27.124 45.1631ZM43.516 39.1301C44.2878 39.9025 45.4153 40.2004 46.468 39.9101C49.6559 39.0714 53.0496 39.9847 55.386 42.3101C57.559 44.4716 58.4686 47.5982 57.794 50.5881L53.172 45.9581C52.4871 45.2925 51.5366 44.9745 50.589 45.0941L48.062 45.4631C46.7096 45.647 45.646 46.7106 45.462 48.0631L45.088 50.6001C44.9744 51.5465 45.2967 52.4934 45.964 53.1741L50.585 57.7871C47.5952 58.4614 44.4686 57.5519 42.307 55.3791C39.9855 53.0453 39.0725 49.6573 39.907 46.4731C40.1991 45.4172 39.9025 44.2858 39.13 43.5091L35.068 39.4471C36.0456 38.7624 36.9608 37.9928 37.803 37.1471C37.846 37.1041 38.503 36.3761 39.56 35.1651L43.516 39.1301ZM57.656 2.34306C60.927 5.67006 44.12 27.5431 37.078 35.0171L25.548 23.2931C30.917 18.1411 50.142 2.00006 56.546 2.00006C56.9471 1.96065 57.3471 2.08426 57.656 2.34306ZM2.209 9.42106L6.825 14.0301C7.49741 14.7176 8.45869 15.0412 9.41 14.9001L11.952 14.5401C13.2907 14.3411 14.3416 13.2898 14.54 11.9511L14.9 9.42606C15.0491 8.47373 14.7292 7.508 14.041 6.83306L9.421 2.20906C12.4097 1.53292 15.536 2.44362 17.694 4.61906C20.0256 6.95399 20.9397 10.3526 20.094 13.5421C19.8054 14.5924 20.1029 15.7168 20.873 16.4871L25.24 20.8541C24.426 21.5991 23.796 22.1971 23.42 22.5801C22.556 23.4712 21.7741 24.4384 21.084 25.4701L16.494 20.8791C15.7225 20.1067 14.5963 19.8071 13.543 20.0941C10.3526 20.9396 6.95318 20.0256 4.617 17.6941C2.44398 15.5346 1.53432 12.4094 2.209 9.42106Z" fill="#0E1218"></path>
                                        </svg>


                                    </div>
                                    <div class="core-bottom">
                                        <h4>Easy to Customize</h4>

                                    </div>
                                </div>
                                <div class="cf--cell">
                                    <div class="cf-cell-icon">
                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_482_351)">
                                                <path d="M27 6H33C33.5523 6 34 5.55228 34 5C34 4.44772 33.5523 4 33 4H27C26.4477 4 26 4.44772 26 5C26 5.55228 26.4477 6 27 6Z" fill="#0E1218"></path>
                                                <path d="M44 6H55C55.5523 6 56 5.55228 56 5C56 4.44772 55.5523 4 55 4H44C43.4477 4 43 4.44772 43 5C43 5.55228 43.4477 6 44 6Z" fill="#0E1218"></path>
                                                <path d="M55 0H5C2.23995 0.00330612 0.00330612 2.23995 0 5V43C0.00330612 45.7601 2.23995 47.9967 5 48H15.3C16.7196 54.991 22.8664 60.015 30 60.015C37.1336 60.015 43.2804 54.991 44.7 48H55C57.7601 47.9967 59.9967 45.7601 60 43V5C59.9967 2.23995 57.7601 0.00330612 55 0ZM5 2H55C56.6569 2 58 3.34315 58 5V8H2V5C2 3.34315 3.34315 2 5 2ZM30 58C22.8203 58 17 52.1797 17 45C17 37.8203 22.8203 32 30 32C37.1797 32 43 37.8203 43 45C42.9917 52.1763 37.1763 57.9917 30 58ZM32 26H26V25C26 24.4477 26.4477 24 27 24H33C33.5523 24 34 24.4477 34 25V26H32ZM31 28V30.051C30.668 30.029 30.338 30 30 30C29.662 30 29.332 30.029 29 30.051V28H31ZM41.7 33.7L40.792 34.608C40.3314 34.1291 39.8397 33.6811 39.32 33.267L40.298 32.29C40.4854 32.1039 40.7393 32.0002 41.0034 32.0019C41.2675 32.0036 41.52 32.1105 41.705 32.299C41.8949 32.4824 42.0022 32.735 42.0022 32.999C42.0022 33.263 41.8949 33.5156 41.705 33.699L41.7 33.7ZM55 46H44.949C44.971 45.668 45 45.338 45 45C44.9991 41.8141 43.9771 38.7124 42.084 36.15L43.113 35.122C43.6806 34.5642 44.0011 33.8022 44.0028 33.0064C44.0045 32.2106 43.6873 31.4472 43.122 30.887C41.9401 29.7441 40.0649 29.7441 38.883 30.887L37.647 32.123C36.2119 31.2575 34.6407 30.6412 33 30.3V28H34C35.1046 28 36 27.1046 36 26V25C36 23.3431 34.6569 22 33 22H27C25.3431 22 24 23.3431 24 25V26C24 27.1046 24.8954 28 26 28H27V30.3C20.0205 31.735 15.0086 37.8746 15 45C15 45.338 15.029 45.668 15.051 46H5C3.34315 46 2 44.6569 2 43V10H58V43C58 44.6569 56.6569 46 55 46Z" fill="#0E1218"></path>
                                                <path d="M5 6C5.55228 6 6 5.55228 6 5C6 4.44772 5.55228 4 5 4C4.44772 4 4 4.44772 4 5C4 5.55228 4.44772 6 5 6Z" fill="#0E1218"></path>
                                                <path d="M9 6C9.55228 6 10 5.55228 10 5C10 4.44772 9.55228 4 9 4C8.44772 4 8 4.44772 8 5C8 5.55228 8.44772 6 9 6Z" fill="#0E1218"></path>
                                                <path d="M13 6C13.5523 6 14 5.55228 14 5C14 4.44772 13.5523 4 13 4C12.4477 4 12 4.44772 12 5C12 5.55228 12.4477 6 13 6Z" fill="#0E1218"></path>
                                                <path d="M15 13H11C10.4477 13 10 13.4477 10 14C10 14.5523 10.4477 15 11 15H15C15.5523 15 16 14.5523 16 14C16 13.4477 15.5523 13 15 13Z" fill="#0E1218"></path>
                                                <path d="M49 13H45C44.4477 13 44 13.4477 44 14C44 14.5523 44.4477 15 45 15H49C49.5523 15 50 14.5523 50 14C50 13.4477 49.5523 13 49 13Z" fill="#0E1218"></path>
                                                <path d="M41 13H19C18.4477 13 18 13.4477 18 14C18 14.5523 18.4477 15 19 15H41C41.5523 15 42 14.5523 42 14C42 13.4477 41.5523 13 41 13Z" fill="#0E1218"></path>
                                                <path d="M38 18H22C21.4477 18 21 18.4477 21 19C21 19.5523 21.4477 20 22 20H38C38.5523 20 39 19.5523 39 19C39 18.4477 38.5523 18 38 18Z" fill="#0E1218"></path>
                                                <path d="M30 34C23.9249 34 19 38.9249 19 45C19 51.0751 23.9249 56 30 56C36.0751 56 41 51.0751 41 45C40.9928 38.9278 36.0722 34.0072 30 34ZM30 54C25.0294 54 21 49.9706 21 45C21 40.0294 25.0294 36 30 36C34.9706 36 39 40.0294 39 45C38.9945 49.9683 34.9683 53.9945 30 54Z" fill="#0E1218"></path>
                                                <path d="M31 50H29C28.4477 50 28 50.4477 28 51C28 51.5523 28.4477 52 29 52H31C31.5523 52 32 51.5523 32 51C32 50.4477 31.5523 50 31 50Z" fill="#0E1218"></path>
                                                <path d="M25 41C24.4477 41 24 41.4477 24 42V44C24 44.5523 24.4477 45 25 45C25.5523 45 26 44.5523 26 44V42C26 41.4477 25.5523 41 25 41Z" fill="#0E1218"></path>
                                                <path d="M29 44V42C29 41.4477 28.5523 41 28 41C27.4477 41 27 41.4477 27 42V44C27 44.5523 27.4477 45 28 45C28.5523 45 29 44.5523 29 44Z" fill="#0E1218"></path>
                                                <path d="M32 41C31.4477 41 31 41.4477 31 42V44C31 44.5523 31.4477 45 32 45C32.5523 45 33 44.5523 33 44V42C33 41.4477 32.5523 41 32 41Z" fill="#0E1218"></path>
                                                <path d="M35 41C34.4477 41 34 41.4477 34 42V44C34 44.5523 34.4477 45 35 45C35.5523 45 36 44.5523 36 44V42C36 41.4477 35.5523 41 35 41Z" fill="#0E1218"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_482_351">
                                                    <rect width="60" height="60" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>


                                    </div>
                                    <div class="core-bottom">
                                        <h4>Mobile Accessibility</h4>

                                    </div>
                                </div>

                            </div>

                        </div>



                    </div>




                </div>
            </section>

            <section class="main__groups-section groups-section" id="faq">
                <div class="container">
                    <div class="groups-section__top groups-section-top">
                        <h2 class="groups-section-top__title">
                            Find Answers To All Your Questions
                        </h2>

                    </div>



                    <div class="freelancers__inner freelancers__inner_index">
                        <div class="freelancers__card card freelancers--card">
                            <div class="card__inner">



                                <div class="card__inner_img"><img src="landing/images/index/fi_2794992.png" alt=" Extensive  Documentation"></div>


                                <h3 class="card__title">
                                    Ask Experts
                                </h3>

                                <p class="card__subtext">
                                    Our documentation is as through as possible. Each templates option is detailed and easy to follow.
                                </p>

                                <a class="card__link" href="#">
                                    View Documentation
                                </a>
                            </div>
                        </div>


                        <div class="freelancers__card card freelancers--card">
                            <div class="card__inner">



                                <div class="card__inner_img"><img src="landing/images/index/fi_3930356.png" alt=" Premium Support"></div>


                                <h3 class="card__title">
                                    Premium Support
                                </h3>

                                <p class="card__subtext">
                                    We offer a dedicated &amp; friendly support. We will try to reply as fast as we can.
                                </p>

                                <a class="card__link" href="#">
                                    Contact Us
                                </a>
                            </div>
                        </div>



                        <div class="freelancers__card card freelancers--card">
                            <div class="card__inner">



                                <div class="card__inner_img"><img src="landing/images/index/fi_6578930.png" alt=" Extensive  Documentation"></div>


                                <h3 class="card__title">
                                    Video Tutorials
                                </h3>

                                <p class="card__subtext">
                                    Our documentation is as through as possible. Each templates option is detailed and easy to follow.
                                </p>

                                <a class="card__link" href="#">
                                    Waych Now
                                </a>
                            </div>
                        </div>

                    </div>




                </div>
            </section>


            <section class="main__login login" id="login-popup">
                <div class="login__inner">
                    <h2 class="login__title">
                        Log In
                    </h2>
                    <div class="login__info login-info">
                        <div class="login-info__box">
                            <p class="login-info__box-text">
                                Username:
                            </p>
                            <div class="login-info__box-input">
                                <p>demo</p>
                                <input type="text" value="demo" id="myvalue1">
                            </div>
                            <button class="login-info__box-btn" onclick="copyToClipboard1()">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons" clip-path="url(#clip0_215_18476)">
                                        <path id="Vector" d="M13.3333 5.33325H6.66659C5.93021 5.33325 5.33325 5.93021 5.33325 6.66659V13.3333C5.33325 14.0696 5.93021 14.6666 6.66659 14.6666H13.3333C14.0696 14.6666 14.6666 14.0696 14.6666 13.3333V6.66659C14.6666 5.93021 14.0696 5.33325 13.3333 5.33325Z" stroke="#6D9985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Vector_2" d="M2.66659 10.6666C1.93325 10.6666 1.33325 10.0666 1.33325 9.33325V2.66659C1.33325 1.93325 1.93325 1.33325 2.66659 1.33325H9.33325C10.0666 1.33325 10.6666 1.93325 10.6666 2.66659" stroke="#6D9985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_215_18476">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        </div>
                        <div class="login-info__box">
                            <p class="login-info__box-text">
                                Password:
                            </p>
                            <div class="login-info__box-input">
                                <p>designlab_demo</p>
                                <input type="text" value="designlab_demo" id="myvalue2">
                            </div>
                            <button class="login-info__box-btn" onclick="copyToClipboard2()">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="icons" clip-path="url(#clip0_215_18476)">
                                        <path id="Vector" d="M13.3333 5.33325H6.66659C5.93021 5.33325 5.33325 5.93021 5.33325 6.66659V13.3333C5.33325 14.0696 5.93021 14.6666 6.66659 14.6666H13.3333C14.0696 14.6666 14.6666 14.0696 14.6666 13.3333V6.66659C14.6666 5.93021 14.0696 5.33325 13.3333 5.33325Z" stroke="#6D9985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path id="Vector_2" d="M2.66659 10.6666C1.93325 10.6666 1.33325 10.0666 1.33325 9.33325V2.66659C1.33325 1.93325 1.93325 1.33325 2.66659 1.33325H9.33325C10.0666 1.33325 10.6666 1.93325 10.6666 2.66659" stroke="#6D9985" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_215_18476">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <form class="login__form login-form" action="#">
                        <div class="login-form__box login-form-box">
                            <label class="login-form-box__label" for="">
                                Username or Email
                            </label>
                            <div class="login-form-box__row">
                                <input class="login-form-box__row-input" type="text">
                            </div>
                        </div>
                        <div class="login-form__box login-form-box">
                            <label class="login-form-box__label" for="">
                                Password
                            </label>
                            <div class="login-form-box__row">
                                <input class="login-form-box__row-input" type="password">
                                <button class="login-form-box__row-btn">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="icons" clip-path="url(#clip0_215_18379)">
                                            <path id="Vector" d="M6.58675 6.58667C6.39025 6.76977 6.23265 6.99057 6.12334 7.2359C6.01402 7.48123 5.95524 7.74607 5.95051 8.01461C5.94577 8.28315 5.99517 8.54989 6.09576 8.79893C6.19635 9.04796 6.34607 9.27419 6.53598 9.46411C6.7259 9.65402 6.95212 9.80374 7.20116 9.90433C7.45019 10.0049 7.71694 10.0543 7.98548 10.0496C8.25402 10.0448 8.51885 9.98606 8.76419 9.87675C9.00952 9.76744 9.23032 9.60983 9.41342 9.41334" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path id="Vector_2" d="M7.15332 3.38659C7.43419 3.35159 7.71694 3.33378 7.99999 3.33325C12.6667 3.33325 14.6667 7.99992 14.6667 7.99992C14.3686 8.638 13.9948 9.23787 13.5533 9.78659" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path id="Vector_3" d="M4.40659 4.40674C3.08075 5.30982 2.01983 6.55024 1.33325 8.00007C1.33325 8.00007 3.33325 12.6667 7.99992 12.6667C9.27719 12.6702 10.5271 12.2968 11.5933 11.5934" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path id="Vector_4" d="M1.33325 1.33325L14.6666 14.6666" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_215_18379">
                                                <rect width="16" height="16" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="login-form__bottom">
                            <label class="login-form__bottom-checkbox container">
                                Remember Me
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <a class="login-form__bottom-link" href="#">
                                Forgot Password?
                            </a>
                        </div>
                        <button class="login-form__button" type="submit">
                            Log In
                        </button>
                        <div class="login-form__socials login-form-socials">
                            <p class="login-form-socials__or">
                                <span></span>
                                or
                                <span></span>
                            </p>
                            <ul class="login-form-socials__list socials">
                                <li class="socials__item">
                                    <a class="socials__link" href="#">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="social_icons">
                                                <g id="Layer_x0020_1">
                                                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M5.92126 15.7984C5.92126 15.9097 6.01157 16 6.12282 16H8.99563C9.10688 16 9.19688 15.9097 9.19688 15.7984V7.93687H11.2797C11.3841 7.93687 11.4713 7.85656 11.4803 7.7525L11.6806 5.38375C11.6903 5.26625 11.5978 5.16531 11.4797 5.16531H9.19688V3.485C9.19688 3.09094 9.51626 2.77156 9.91001 2.77156H11.515C11.6266 2.77156 11.7166 2.68125 11.7166 2.57V0.201562C11.7166 0.0903125 11.6266 0 11.515 0H8.80313C7.21157 0 5.92126 1.29 5.92126 2.88156V5.16531H4.48501C4.37376 5.16531 4.28345 5.25563 4.28345 5.36688V7.73531C4.28345 7.84688 4.37376 7.93687 4.48501 7.93687H5.92126V15.7984Z" fill="white" />
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li class="socials__item">
                                    <a class="socials__link" href="#">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="social_icons" clip-path="url(#clip0_187_9402)">
                                                <g id="Layer_x0020_1">
                                                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M15.94 2.91286C15.4315 3.14286 14.8722 3.28224 14.3237 3.37443C14.8062 3.29349 15.5215 2.14068 15.6597 1.68849C15.7009 1.60568 15.6412 1.5763 15.5706 1.61161C14.9584 1.93974 14.325 2.17755 13.6509 2.34599C13.5243 2.37755 13.4484 2.22036 13.3506 2.13943C10.9584 0.103801 7.39841 2.14505 7.8631 5.29818C7.87341 5.37536 7.86685 5.38568 7.79716 5.37536C5.16028 4.98255 2.97466 4.03943 1.20028 2.01724C1.12341 1.92943 1.08153 1.92974 1.01841 2.02411C0.0843455 3.42411 0.758408 5.37005 1.99403 6.33318C1.94153 6.3438 1.29622 6.2738 0.720908 5.97661C0.644033 5.92786 0.605283 5.95599 0.59872 6.04318C0.520595 7.41318 1.76903 9.0138 3.12716 9.24693C2.87216 9.30286 2.60966 9.34286 1.87872 9.28568C1.78778 9.26818 1.75278 9.31349 1.78778 9.40099C2.33716 10.8982 3.52278 11.3438 4.41091 11.5976C4.52966 11.6185 4.64872 11.6185 4.7681 11.6463C4.11903 12.611 1.31403 13.0713 0.234658 12.9651C0.15997 12.9541 -0.121592 12.9147 0.0599705 13.0629C6.46966 17.2885 14.4522 12.7663 14.4522 4.72818C14.4522 4.62443 14.5743 4.56755 14.6472 4.51286C14.9809 4.26193 16 3.34255 16 2.91286C16 2.87036 16.005 2.88349 15.94 2.91286Z" fill="white" />
                                                </g>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_187_9402">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                                <li class="socials__item">
                                    <a class="socials__link" href="#">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="social_icons" clip-path="url(#clip0_187_9379)">
                                                <path id="Vector" d="M0 8C0 3.5888 3.5888 0 8 0C9.78156 0 11.4678 0.573181 12.8765 1.6576L11.0174 4.07253C10.1464 3.40206 9.10301 3.04762 8 3.04762C5.26926 3.04762 3.04762 5.26926 3.04762 8C3.04762 10.7307 5.26926 12.9524 8 12.9524C10.1994 12.9524 12.0684 11.5114 12.7125 9.52381H8V6.47619H16V8C16 12.4112 12.4112 16 8 16C3.5888 16 0 12.4112 0 8Z" fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_187_9379">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                                <li class="socials__item">
                                    <a class="socials__link" href="#">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="social_icons" clip-path="url(#clip0_187_9414)">
                                                <g id="Layer_x0020_1">
                                                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M0.32085 16H3.62241V5.33313H0.32085V16ZM8.90054 10.4006C8.90054 8.90125 9.59085 8.0075 10.9124 8.0075C12.1265 8.0075 12.7096 8.86531 12.7096 10.4006V16H15.9962C15.9962 16 15.9962 12.1038 15.9962 9.24656C15.9962 6.38938 14.3765 5.00781 12.1149 5.00781C9.85241 5.0075 8.90054 6.77 8.90054 6.77V5.33313H5.73335V16H8.90054C8.90054 16 8.90054 12.0441 8.90054 10.4006ZM1.95616 3.93688C3.03429 3.93688 3.90866 3.05469 3.90866 1.96812C3.90866 0.88125 3.03429 0 1.95616 0C0.877412 0 0.00366211 0.88125 0.00366211 1.96812C0.00366211 3.05469 0.877412 3.93688 1.95616 3.93688Z" fill="white" />
                                                </g>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_187_9414">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </section>

            <section class="main__popup " id="faq-popup">
                <div class="popup__inner">
                    <h2 class="popup__title">
                        Popular Questions
                    </h2>

                    <div class="popup-content">

                        <ul>
                            <li><i class="icon-book-open"></i><a href="index.html">How to Upload Your Portfolio </a></li>
                            <li><i class="icon-book-open"></i><a href="index.html">How to Start To Work</a></li>
                            <li><i class="icon-book-open"></i><a href="index.html">Get in touch with the Creator Support Team</a></li>
                        </ul>
                        <div class="form-help-links">
                            <a class="fl-btn btn_first" href="index.html">Browse all articles</a>
                            <a class="fl-btn btn_second" data-fancybox="" href="#report-popup">Send Feedback</a>
                        </div>


                        <div class="login-form__socials login-form-socials">
                            <p class="login-form-socials__or">
                                <span></span>
                                or
                                <span></span>
                            </p>
                            <ul class="login-form-socials__list socials">
                                <li class="socials__item">
                                    <a class="socials__link" href="#" tabindex="0">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="social_icons">
                                                <g id="Layer_x0020_1">
                                                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M5.92126 15.7984C5.92126 15.9097 6.01157 16 6.12282 16H8.99563C9.10688 16 9.19688 15.9097 9.19688 15.7984V7.93687H11.2797C11.3841 7.93687 11.4713 7.85656 11.4803 7.7525L11.6806 5.38375C11.6903 5.26625 11.5978 5.16531 11.4797 5.16531H9.19688V3.485C9.19688 3.09094 9.51626 2.77156 9.91001 2.77156H11.515C11.6266 2.77156 11.7166 2.68125 11.7166 2.57V0.201562C11.7166 0.0903125 11.6266 0 11.515 0H8.80313C7.21157 0 5.92126 1.29 5.92126 2.88156V5.16531H4.48501C4.37376 5.16531 4.28345 5.25563 4.28345 5.36688V7.73531C4.28345 7.84688 4.37376 7.93687 4.48501 7.93687H5.92126V15.7984Z" fill="white"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li class="socials__item">
                                    <a class="socials__link" href="#" tabindex="0">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="social_icons" clip-path="url(#clip0_187_9402)">
                                                <g id="Layer_x0020_1">
                                                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M15.94 2.91286C15.4315 3.14286 14.8722 3.28224 14.3237 3.37443C14.8062 3.29349 15.5215 2.14068 15.6597 1.68849C15.7009 1.60568 15.6412 1.5763 15.5706 1.61161C14.9584 1.93974 14.325 2.17755 13.6509 2.34599C13.5243 2.37755 13.4484 2.22036 13.3506 2.13943C10.9584 0.103801 7.39841 2.14505 7.8631 5.29818C7.87341 5.37536 7.86685 5.38568 7.79716 5.37536C5.16028 4.98255 2.97466 4.03943 1.20028 2.01724C1.12341 1.92943 1.08153 1.92974 1.01841 2.02411C0.0843455 3.42411 0.758408 5.37005 1.99403 6.33318C1.94153 6.3438 1.29622 6.2738 0.720908 5.97661C0.644033 5.92786 0.605283 5.95599 0.59872 6.04318C0.520595 7.41318 1.76903 9.0138 3.12716 9.24693C2.87216 9.30286 2.60966 9.34286 1.87872 9.28568C1.78778 9.26818 1.75278 9.31349 1.78778 9.40099C2.33716 10.8982 3.52278 11.3438 4.41091 11.5976C4.52966 11.6185 4.64872 11.6185 4.7681 11.6463C4.11903 12.611 1.31403 13.0713 0.234658 12.9651C0.15997 12.9541 -0.121592 12.9147 0.0599705 13.0629C6.46966 17.2885 14.4522 12.7663 14.4522 4.72818C14.4522 4.62443 14.5743 4.56755 14.6472 4.51286C14.9809 4.26193 16 3.34255 16 2.91286C16 2.87036 16.005 2.88349 15.94 2.91286Z" fill="white"></path>
                                                </g>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_187_9402">
                                                    <rect width="16" height="16" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                                <li class="socials__item">
                                    <a class="socials__link" href="#" tabindex="0">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="social_icons" clip-path="url(#clip0_187_9379)">
                                                <path id="Vector" d="M0 8C0 3.5888 3.5888 0 8 0C9.78156 0 11.4678 0.573181 12.8765 1.6576L11.0174 4.07253C10.1464 3.40206 9.10301 3.04762 8 3.04762C5.26926 3.04762 3.04762 5.26926 3.04762 8C3.04762 10.7307 5.26926 12.9524 8 12.9524C10.1994 12.9524 12.0684 11.5114 12.7125 9.52381H8V6.47619H16V8C16 12.4112 12.4112 16 8 16C3.5888 16 0 12.4112 0 8Z" fill="white"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_187_9379">
                                                    <rect width="16" height="16" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                                <li class="socials__item">
                                    <a class="socials__link" href="#" tabindex="0">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="social_icons" clip-path="url(#clip0_187_9414)">
                                                <g id="Layer_x0020_1">
                                                    <path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M0.32085 16H3.62241V5.33313H0.32085V16ZM8.90054 10.4006C8.90054 8.90125 9.59085 8.0075 10.9124 8.0075C12.1265 8.0075 12.7096 8.86531 12.7096 10.4006V16H15.9962C15.9962 16 15.9962 12.1038 15.9962 9.24656C15.9962 6.38938 14.3765 5.00781 12.1149 5.00781C9.85241 5.0075 8.90054 6.77 8.90054 6.77V5.33313H5.73335V16H8.90054C8.90054 16 8.90054 12.0441 8.90054 10.4006ZM1.95616 3.93688C3.03429 3.93688 3.90866 3.05469 3.90866 1.96812C3.90866 0.88125 3.03429 0 1.95616 0C0.877412 0 0.00366211 0.88125 0.00366211 1.96812C0.00366211 3.05469 0.877412 3.93688 1.95616 3.93688Z" fill="white"></path>
                                                </g>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_187_9414">
                                                    <rect width="16" height="16" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>

            <section class="main__popup " id="report-popup">
                <div class="popup__inner">
                    <h2 class="popup__title">
                        Report form
                    </h2>

                    <div class="popup-content">
                        <div id="send-feedback">
                            <input class="fl-input" type="text" placeholder="Your Name">
                            <input class="input" type="text" placeholder="Your Email">
                            <textarea class="fl-textarea" placeholder="Your Comment" rows="3"></textarea>
                            <button class="comment__form-btn" type="button">
                                Send Message
                            </button>
                        </div>
                    </div>
                </div>
            </section>


        </main>
        <footer class="footer">
            <div class="container">
                <p class="footer__copy">
                    Design Lab © 2024. All rights reserved.
                </p>
            </div>
        </footer>
    </div>
@endsection
