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
            <section class="main__members-section-top members-section-top">
                <div class="container">
                    <div class="members-section-top__inner">
                        <div class="members-section-top__img">
                            <img class="members-section-top__img-image" src="landing/images/member-icon-16.png" alt="img">
                        </div>
                        <div class="members-section-top__body members-section-top-body">
                            <p class="members-section-top-body__suptext">
                                ux/ui designer
                            </p>
                            <h2 class="members-section-top-body__title">
                                Elodie Hardin
                            </h2>
                            <a class="members-section-top-body__link" href="mailto:">
                                elhardin.dsgn
                            </a>
                            <ul class="members-section-top-body__list card-list">
                                <li class="card-list__item">
                                    <p class="card-list__text">
                                        Barcelona, Spain
                                    </p>
                                </li>
                                <li class="card-list__item">
                                    <p class="card-list__text">
                                        Joined May 2019
                                    </p>
                                </li>
                                <li class="card-list__item">
                                    <a class="card-list__link" href="#">
                                        www.elhardin.3dart.com
                                    </a>
                                </li>
                            </ul>
                            <div class="members-section-top-body__box members-section-top-body-box">
                                <ul class="members-section-top-body-box__socials socials">
                                    <li class="socials__item">
                                        <a class="socials__link" href="#">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M1.98219 11.1178V8.46874C2.74312 8.46874 4.80094 8.3528 5.42156 8.63717C6.31562 9.04655 6.25469 10.5194 5.40125 10.9428C4.79969 11.2356 2.73031 11.1178 1.98219 11.1178ZM14.3866 3.4778H10.0681V4.48061H14.3866V3.4778ZM12.3528 6.88436C13.3231 6.88436 13.9387 7.47655 14.005 8.44124H10.6944C10.8325 7.49436 11.3562 6.88436 12.3528 6.88436ZM12.4219 13.0931C13.8541 13.0928 15.7116 12.2678 15.8991 10.6931H13.9372C13.625 11.284 13.1459 11.5356 12.4747 11.5356C11.3322 11.5356 10.6934 10.85 10.6475 9.70811H15.9987C16.0356 7.26905 15.2166 5.3003 12.3522 5.3003C9.95469 5.29999 8.71281 6.95124 8.71281 9.24686C8.71281 11.5728 10.0466 13.0931 12.4219 13.0931ZM1.98219 4.63249C2.85969 4.63249 4.53156 4.52217 5.31875 4.7878C6.01156 5.07561 6.02969 6.22405 5.44844 6.57749C4.80375 6.97155 2.79469 6.82374 1.98219 6.82374V4.63249ZM5.88219 12.7084C7.25469 12.4253 8.15094 11.2415 8.15094 9.84311C8.15094 8.74811 7.67062 7.89405 6.61594 7.51092C7.47375 7.0728 7.83437 6.46186 7.83437 5.48186C7.83469 3.67342 6.47781 2.93155 4.80281 2.90686H0V12.8437C1.65812 12.8437 4.32469 13.0347 5.88219 12.7084Z"
                                                      fill="white" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="socials__item">
                                        <a class="socials__link" href="#">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_130_9419)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M9.855 7.57844C9.69281 7.20344 9.52375 6.82906 9.34344 6.45875C10.8831 5.79187 12.1206 4.88625 13.0425 3.73781C13.9419 4.80062 14.5066 6.15031 14.5897 7.6275C12.8731 7.34656 11.2944 7.33094 9.855 7.57844ZM11.6681 13.4931C11.3763 11.925 10.9478 10.3916 10.3884 8.89563C11.6388 8.71875 13.0153 8.76469 14.5206 9.02656C14.2294 10.8837 13.1694 12.4881 11.6681 13.4931ZM3.94438 13.2069C5.25688 11.1478 6.93281 9.8075 9.00937 9.18875C9.62719 10.8025 10.0822 12.4619 10.3716 14.1619C8.20844 14.9978 5.77781 14.6388 3.94438 13.2069ZM1.40031 7.82969C3.96562 7.82594 6.17875 7.53125 8.03312 6.94781C8.18844 7.26438 8.33719 7.5825 8.47937 7.90281C6.22719 8.60656 4.37031 10.05 2.92219 12.2228C1.87969 10.9716 1.36063 9.45406 1.40031 7.82969ZM5.01844 2.11C5.90625 3.27156 6.69219 4.46906 7.37625 5.69781C5.75594 6.17469 3.8225 6.41969 1.58656 6.435C2.04844 4.545 3.32094 2.97312 5.01844 2.11ZM12.0288 2.77312C11.2256 3.80875 10.1169 4.62781 8.70406 5.22594C8.02719 3.98562 7.25344 2.77563 6.37937 1.60125C8.35812 1.09656 10.405 1.51906 12.0288 2.77312ZM7.99969 0C3.58156 0 0 3.58187 0 8C0 12.4181 3.58156 16 7.99969 16C12.4184 16 16 12.4181 16 8C16 3.58187 12.4181 0 7.99969 0Z"
                                                          fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_130_9419">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="socials__item">
                                        <a class="socials__link" href="#">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_130_21747)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M0.321094 16H3.62266V5.33313H0.321094V16ZM8.90078 10.4006C8.90078 8.90125 9.59109 8.0075 10.9127 8.0075C12.1267 8.0075 12.7098 8.86531 12.7098 10.4006V16H15.9964C15.9964 16 15.9964 12.1038 15.9964 9.24656C15.9964 6.38938 14.3767 5.00781 12.1152 5.00781C9.85266 5.0075 8.90078 6.77 8.90078 6.77V5.33313H5.73359V16H8.90078C8.90078 16 8.90078 12.0441 8.90078 10.4006ZM1.95641 3.93688C3.03453 3.93688 3.90891 3.05469 3.90891 1.96812C3.90891 0.88125 3.03453 0 1.95641 0C0.877656 0 0.00390625 0.88125 0.00390625 1.96812C0.00390625 3.05469 0.877656 3.93688 1.95641 3.93688Z"
                                                          fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_130_21747">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="socials__item">
                                        <a class="socials__link" href="#">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M10.3003 8.21346L6.6975 10.1894C6.54094 10.2741 6.4 10.1606 6.4 9.98284V5.92659C6.4 5.74627 6.54531 5.63315 6.70219 5.72221L10.3297 7.80221C10.49 7.89377 10.4628 8.12534 10.3003 8.21346ZM16 5.88315C16 3.9594 14.4406 2.40002 12.5172 2.40002H3.48312C1.55969 2.40002 0 3.9594 0 5.88315V10.1169C0 12.0406 1.55969 13.6 3.48312 13.6H12.5172C14.4406 13.6 16 12.0406 16 10.1169V5.88315Z"
                                                      fill="white" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                                <div class="members-section-top-body-box__buttons">
                                    <a class="members-section-top-body-box__buttons-link" href="#">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.6667 9.33333C13.66 8.36 14.6667 7.19333 14.6667 5.66667C14.6667 4.69421 14.2804 3.76158 13.5927 3.07394C12.9051 2.38631 11.9725 2 11 2C9.82668 2 9.00001 2.33333 8.00001 3.33333C7.00001 2.33333 6.17334 2 5.00001 2C4.02755 2 3.09492 2.38631 2.40729 3.07394C1.71965 3.76158 1.33334 4.69421 1.33334 5.66667C1.33334 7.2 2.33334 8.36667 3.33334 9.33333L8.00001 14L12.6667 9.33333Z"
                                                stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <span>
                                            Follow
                                        </span>
                                    </a>
                                    <a class="members-section-top-body-box__buttons-link members-section-top-body-box__buttons-link--purple"
                                       href="#">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.6667 14V12.6667C10.6667 11.9594 10.3857 11.2811 9.88563 10.781C9.38553 10.281 8.70725 10 8.00001 10H4.00001C3.29277 10 2.61449 10.281 2.11439 10.781C1.6143 11.2811 1.33334 11.9594 1.33334 12.6667V14"
                                                stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M6.00001 7.33333C7.47277 7.33333 8.66668 6.13943 8.66668 4.66667C8.66668 3.19391 7.47277 2 6.00001 2C4.52725 2 3.33334 3.19391 3.33334 4.66667C3.33334 6.13943 4.52725 7.33333 6.00001 7.33333Z"
                                                stroke="#0E1218" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M12.6667 5.33331V9.33331" stroke="#0E1218" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14.6667 7.33331H10.6667" stroke="#0E1218" stroke-width="1.5"
                                                  stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <span>
                                            Add Friend
                                        </span>
                                    </a>
                                    <a class="members-section-top-body-box__buttons-link members-section-top-body-box__buttons-link--green"
                                       href="#">
                                        <span>
                                            Send Message
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main__members-section members-section">
                <div class="container">
                    <div class="members-section__tabs tabs">
                        <button class="tabs__btn tabs__btn--active" type="button" id="1">
                            Profile
                        </button>
                        <button class="tabs__btn" type="button" id="2">
                            Gigs
                            <span>
                                10
                            </span>
                        </button>
                    </div>
                    <div class="members-section__inner">
                        <div class="members-section__wrapper  members-section__wrapper--active" id="1">
                            <div class="members-section__subwrapper">
                                <section class="members-section__profile-info profile-info">
                                    <div class="profile-info__about profile-info-about">
                                        <h2 class="profile-info-about__title">
                                            About Freelancer
                                        </h2>
                                        <p class="profile-info-about__text">
                                            Hello, my name is Elodie Hardin, and I am a highly skilled UX/UI designer
                                            located in Barcelona, Spain. With over 8 years of experience in the field, I
                                            have honed my skills to the highest level, and I am committed to creating
                                            exceptional designs that meet my clients' needs.
                                        </p>
                                        <p class="profile-info-about__text">
                                            Throughout my career, I have
                                            developed a strong ability to create innovative solutions that are optimized
                                            for
                                            both user experience and business goals. My passion for design and my
                                            commitment
                                            to delivering high-quality work have earned me a reputation as a reliable
                                            professional in the industry.
                                        </p>
                                        <p class="profile-info-about__text">
                                            I am excited to continue building on my
                                            experience and skills, and I look forward to working with clients who are in
                                            need of my expertise.
                                        </p>
                                    </div>
                                    <div class="profile-info__instruments profile-info-instruments">
                                        <h3 class="profile-info-instruments__title">
                                            Top Skills
                                        </h3>
                                        <ul class="profile-info-instruments__list">
                                            <li class="profile-info-instruments__list-item">
                                                <div class="profile-info-instruments__list-icon">
                                                    <img src="landing/images/profile-info-instruments-icon-1.svg" alt="img">
                                                </div>
                                                Figma
                                            </li>
                                            <li class="profile-info-instruments__list-item">
                                                <div class="profile-info-instruments__list-icon">
                                                    <img src="landing/images/profile-info-instruments-icon-2.svg" alt="img">
                                                </div>
                                                Sketch
                                            </li>
                                            <li class="profile-info-instruments__list-item">
                                                <div class="profile-info-instruments__list-icon">
                                                    <img src="landing/images/profile-info-instruments-icon-3.svg" alt="img">
                                                </div>
                                                Photoshop
                                            </li>
                                            <li class="profile-info-instruments__list-item">
                                                <div class="profile-info-instruments__list-icon">
                                                    <img src="landing/images/profile-info-instruments-icon-4.svg" alt="img">
                                                </div>
                                                Illustrator
                                            </li>
                                            <li class="profile-info-instruments__list-item">
                                                <div class="profile-info-instruments__list-icon">
                                                    <img src="landing/images/profile-info-instruments-icon-5.svg" alt="img">
                                                </div>
                                                Invision
                                            </li>
                                            <li class="profile-info-instruments__list-item">
                                                <div class="profile-info-instruments__list-icon">
                                                    <img src="landing/images/profile-info-instruments-icon-6.png" alt="img">
                                                </div>
                                                Readymag
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                                <section class="members-section__portfolio portfolio">
                                    <h2 class="portfolio__title">
                                        Gigs
                                    </h2>
                                    <div class="portfolio__inner">
                                        <a class="portfolio__link" href="#">
                                            <img class="portfolio__link-img" src="landing/images/new/ga1.jpg"
                                                 alt="img">
                                        </a>
                                        <a class="portfolio__link" href="#">
                                            <img class="portfolio__link-img" src="landing/images/new/ga2.jpg"
                                                 alt="img">
                                        </a>
                                        <a class="portfolio__link" href="#">
                                            <img class="portfolio__link-img" src="landing/images/new/ga3.jpg"
                                                 alt="img">
                                        </a>
                                        <a class="portfolio__link" href="#">
                                            <img class="portfolio__link-img" src="landing/images/new/ga4.jpg"
                                                 alt="img">
                                        </a>
                                        <a class="portfolio__link" href="#">
                                            <img class="portfolio__link-img" src="landing/images/new/ga5.jpg"
                                                 alt="img">
                                        </a>
                                        <a class="portfolio__link" href="#">
                                            <img class="portfolio__link-img" src="landing/images/new/ga6.jpg"
                                                 alt="img">
                                        </a>
                                        <a class="portfolio__link" href="#">
                                            <img class="portfolio__link-img" src="landing/images/new/ga7.jpg"
                                                 alt="img">
                                        </a>
                                        <a class="portfolio__link" href="#">
                                            <img class="portfolio__link-img" src="landing/images/new/ga8.jpg"
                                                 alt="img">
                                        </a>
                                    </div>
                                    <a class="portfolio__btn" href="#">
                                        Show All
                                    </a>
                                </section>
                                <section class="courses-section__reviews reviews">
                                    <div class="reviews__top reviews-top">
                                        <div class="reviews-top__content reviews-top-content">
                                            <p class="reviews-top-content__rait">
                                                5.0
                                            </p>
                                            <div class="reviews-top-content__stars stars">
                                                <div class="stars__star stars-star">
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
                                                </div>
                                                <div class="stars__star stars-star">
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
                                                </div>
                                                <div class="stars__star stars-star">
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
                                                </div>
                                                <div class="stars__star stars-star">
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
                                                </div>
                                                <div class="stars__star stars-star">
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
                                                </div>
                                            </div>
                                            <p class="reviews-top-content__subtext">
                                                4 rating
                                            </p>
                                        </div>
                                        <div class="reviews-top__body reviews-top-body">
                                            <div class="reviews-top-body__item reviews-top-body-item">
                                                <div class="reviews-top-body-item__stars stars">
                                                    <div class="stars__star stars__star">
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
                                                    </div>
                                                    <div class="stars__star stars__star">
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
                                                    </div>
                                                    <div class="stars__star stars__star">
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
                                                    </div>
                                                    <div class="stars__star stars__star">
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
                                                    </div>
                                                    <div class="stars__star stars__star">
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
                                                    </div>
                                                </div>
                                                <div class="reviews-top-body-item__line">
                                                    <span style="width: 100%;">

                                                    </span>
                                                </div>
                                                <p class="reviews-top-body-item__procents">
                                                    100%
                                                </p>
                                            </div>
                                            <div class="reviews-top-body__item reviews-top-body-item">
                                                <div class="reviews-top-body-item__stars stars">
                                                    <div class="stars__star stars-star">
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
                                                    </div>
                                                    <div class="stars__star stars-star">
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
                                                    </div>
                                                    <div class="stars__star stars-star">
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
                                                    </div>
                                                    <div class="stars__star stars-star">
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
                                                    </div>
                                                    <div class="stars__star stars-star stars-star--disabled">
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
                                                    </div>
                                                </div>
                                                <div class="reviews-top-body-item__line">
                                                    <span style="width: 25%;">

                                                    </span>
                                                </div>
                                                <p class="reviews-top-body-item__procents">
                                                    25%
                                                </p>
                                            </div>
                                            <div class="reviews-top-body__item reviews-top-body-item">
                                                <div class="reviews-top-body-item__stars stars">
                                                    <div class="stars__star stars-star">
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
                                                    </div>
                                                    <div class="stars__star stars-star">
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
                                                    </div>
                                                    <div class="stars__star stars-star">
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
                                                    </div>
                                                    <div class="stars__star stars-star stars-star--disabled">
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
                                                    </div>
                                                    <div class="stars__star stars-star stars-star--disabled">
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
                                                    </div>
                                                </div>
                                                <div class="reviews-top-body-item__line">
                                                    <span>

                                                    </span>
                                                </div>
                                                <p class="reviews-top-body-item__procents">
                                                    0%
                                                </p>
                                            </div>
                                            <div class="reviews-top-body__item reviews-top-body-item">
                                                <div class="reviews-top-body-item__stars stars">
                                                    <div class="stars__star stars-star">
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
                                                    </div>
                                                    <div class="stars__star stars-star">
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
                                                    </div>
                                                    <div class="stars__star stars-star stars-star--disabled">
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
                                                    </div>
                                                    <div class="stars__star stars-star stars-star--disabled">
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
                                                    </div>
                                                    <div class="stars__star stars-star stars-star--disabled">
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
                                                    </div>
                                                </div>
                                                <div class="reviews-top-body-item__line">
                                                    <span>

                                                    </span>
                                                </div>
                                                <p class="reviews-top-body-item__procents">
                                                    0%
                                                </p>
                                            </div>
                                            <div class="reviews-top-body__item reviews-top-body-item">
                                                <div class="reviews-top-body-item__stars stars">
                                                    <div class="stars__star stars-star">
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
                                                    </div>
                                                    <div class="stars__star stars-star stars-star--disabled">
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
                                                    </div>
                                                    <div class="stars__star stars-star stars-star--disabled">
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
                                                    </div>
                                                    <div class="stars__star stars-star stars-star--disabled">
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
                                                    </div>
                                                    <div class="stars__star stars-star stars-star--disabled">
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
                                                    </div>
                                                </div>
                                                <div class="reviews-top-body-item__line">
                                                    <span>

                                                    </span>
                                                </div>
                                                <p class="reviews-top-body-item__procents">
                                                    0%
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviews__inner">
                                        <div class="reviews__comment reviews-comment">
                                            <div class="reviews-comment__img">
                                                <img class="reviews-comment__img-image"
                                                     src="landing/images/member-icon-14.png" alt="img">
                                            </div>
                                            <div class="reviews-comment__body reviews-comment-body">
                                                <div class="reviews-comment-body__top reviews-comment-body-top">
                                                    <div class="reviews-comment-body-top__box">
                                                        <p class="reviews-comment-body-top__box-text">
                                                            Floyd Frederick
                                                        </p>
                                                        <p class="reviews-comment-body-top__box-subtext">
                                                            February 4, 2023
                                                        </p>
                                                    </div>
                                                    <div class="reviews-comment-body-top__stars stars">
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="reviews-comment-body__text">
                                                    If you are looking for a course that will really challenge you on
                                                    your management style, this is it. The instructor does a fantastic
                                                    job of explaining how to give feedback so that you can maintain the
                                                    dignity of the employee and have positive outcomes. I really enjoyed
                                                    this class, and it's made me more motivated to improve my feedback
                                                    skills.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reviews__comment reviews-comment">
                                            <div class="reviews-comment__img">
                                                <img class="reviews-comment__img-image"
                                                     src="landing/images/member-icon-12.png" alt="img">
                                            </div>
                                            <div class="reviews-comment__body reviews-comment-body">
                                                <div class="reviews-comment-body__top reviews-comment-body-top">
                                                    <div class="reviews-comment-body-top__box">
                                                        <p class="reviews-comment-body-top__box-text">
                                                            Susan Foley
                                                        </p>
                                                        <p class="reviews-comment-body-top__box-subtext">
                                                            26 May 2022
                                                        </p>
                                                    </div>
                                                    <div class="reviews-comment-body-top__stars stars">
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                        <div class="stars__star stars-star stars-star--disabled">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="reviews-comment-body__text">
                                                    Great job!
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reviews__comment reviews-comment">
                                            <div class="reviews-comment__img">
                                                <img class="reviews-comment__img-image"
                                                     src="landing/images/member-icon-23.png" alt="img">
                                            </div>
                                            <div class="reviews-comment__body reviews-comment-body">
                                                <div class="reviews-comment-body__top reviews-comment-body-top">
                                                    <div class="reviews-comment-body-top__box">
                                                        <p class="reviews-comment-body-top__box-text">
                                                            Anthony Clark
                                                        </p>
                                                        <p class="reviews-comment-body-top__box-subtext">
                                                            10 October 2021
                                                        </p>
                                                    </div>
                                                    <div class="reviews-comment-body-top__stars stars">
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="reviews-comment-body__text">
                                                    Very professional and prompt. Excellent communication and really
                                                    thinking about the objective of the illustrations.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="reviews__comment reviews-comment">
                                            <div class="reviews-comment__img">
                                                <img class="reviews-comment__img-image"
                                                     src="landing/images/member-icon-26.png" alt="img">
                                            </div>
                                            <div class="reviews-comment__body reviews-comment-body">
                                                <div class="reviews-comment-body__top reviews-comment-body-top">
                                                    <div class="reviews-comment-body-top__box">
                                                        <p class="reviews-comment-body-top__box-text">
                                                            Philippa Bush
                                                        </p>
                                                        <p class="reviews-comment-body-top__box-subtext">
                                                            7 June 2021
                                                        </p>
                                                    </div>
                                                    <div class="reviews-comment-body-top__stars stars">
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                        <div class="stars__star stars-star">
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
                                                        </div>
                                                        <div class="stars__star stars-star stars-star--disabled">
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
                                                        </div>
                                                        <div class="stars__star stars-star stars-star--disabled">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="reviews-comment-body__text">
                                                    Good work. Very speedy and clear communication. Will certainly come
                                                    back again!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="members-section__comment comment">
                                    <div class="comment__inner">
                                        <h2 class="comment__title">
                                            Add a Review
                                        </h2>
                                        <form class="comment__form" action="#">
                                            <div class="comment__stars comment-stars">
                                                <p class="comment-stars__text">
                                                    Your rating for this listing
                                                </p>
                                                <div class="comment-stars__box star-rating">
                                                    <input class="star" type="radio" name="rating" id="star5"
                                                           value="5" />
                                                    <label class="star5" for="star5">
                                                        <svg width="45" height="45" viewBox="0 0 20 21" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.7208 1.32445C9.12344 0.0305245 10.8766 0.0305227 11.2792 1.32444L12.7178 5.94756C12.8979 6.52622 13.4143 6.918 13.997 6.918H18.6524C19.9554 6.918 20.4971 8.65896 19.443 9.45865L15.6767 12.3159C15.2053 12.6735 15.008 13.3074 15.1881 13.8861L16.6267 18.5092C17.0293 19.8031 15.611 20.8791 14.5569 20.0794L10.7906 17.2222C10.3192 16.8645 9.68083 16.8645 9.20941 17.2222L5.44311 20.0794C4.389 20.8791 2.97069 19.8031 3.37333 18.5092L4.81193 13.8861C4.99199 13.3074 4.79473 12.6735 4.32332 12.3159L0.557018 9.45865C-0.497097 8.65896 0.0446451 6.918 1.3476 6.918H6.00301C6.58571 6.918 7.10214 6.52622 7.2822 5.94756L8.7208 1.32445Z"
                                                                fill="#F9AE00"></path>
                                                        </svg>
                                                    </label>
                                                    <input class="star" type="radio" name="rating" id="star4"
                                                           value="4" />
                                                    <label class="star4" for="star4">
                                                        <svg width="45" height="45" viewBox="0 0 20 21" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.7208 1.32445C9.12344 0.0305245 10.8766 0.0305227 11.2792 1.32444L12.7178 5.94756C12.8979 6.52622 13.4143 6.918 13.997 6.918H18.6524C19.9554 6.918 20.4971 8.65896 19.443 9.45865L15.6767 12.3159C15.2053 12.6735 15.008 13.3074 15.1881 13.8861L16.6267 18.5092C17.0293 19.8031 15.611 20.8791 14.5569 20.0794L10.7906 17.2222C10.3192 16.8645 9.68083 16.8645 9.20941 17.2222L5.44311 20.0794C4.389 20.8791 2.97069 19.8031 3.37333 18.5092L4.81193 13.8861C4.99199 13.3074 4.79473 12.6735 4.32332 12.3159L0.557018 9.45865C-0.497097 8.65896 0.0446451 6.918 1.3476 6.918H6.00301C6.58571 6.918 7.10214 6.52622 7.2822 5.94756L8.7208 1.32445Z"
                                                                fill="#F9AE00"></path>
                                                        </svg>
                                                    </label>
                                                    <input class="star" type="radio" name="rating" id="star3"
                                                           value="3" />
                                                    <label class="star3" for="star3">
                                                        <svg width="45" height="45" viewBox="0 0 20 21" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.7208 1.32445C9.12344 0.0305245 10.8766 0.0305227 11.2792 1.32444L12.7178 5.94756C12.8979 6.52622 13.4143 6.918 13.997 6.918H18.6524C19.9554 6.918 20.4971 8.65896 19.443 9.45865L15.6767 12.3159C15.2053 12.6735 15.008 13.3074 15.1881 13.8861L16.6267 18.5092C17.0293 19.8031 15.611 20.8791 14.5569 20.0794L10.7906 17.2222C10.3192 16.8645 9.68083 16.8645 9.20941 17.2222L5.44311 20.0794C4.389 20.8791 2.97069 19.8031 3.37333 18.5092L4.81193 13.8861C4.99199 13.3074 4.79473 12.6735 4.32332 12.3159L0.557018 9.45865C-0.497097 8.65896 0.0446451 6.918 1.3476 6.918H6.00301C6.58571 6.918 7.10214 6.52622 7.2822 5.94756L8.7208 1.32445Z"
                                                                fill="#F9AE00"></path>
                                                        </svg>
                                                    </label>
                                                    <input class="star" type="radio" name="rating" id="star2"
                                                           value="2" />
                                                    <label class="star2" for="star2">
                                                        <svg width="45" height="45" viewBox="0 0 20 21" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.7208 1.32445C9.12344 0.0305245 10.8766 0.0305227 11.2792 1.32444L12.7178 5.94756C12.8979 6.52622 13.4143 6.918 13.997 6.918H18.6524C19.9554 6.918 20.4971 8.65896 19.443 9.45865L15.6767 12.3159C15.2053 12.6735 15.008 13.3074 15.1881 13.8861L16.6267 18.5092C17.0293 19.8031 15.611 20.8791 14.5569 20.0794L10.7906 17.2222C10.3192 16.8645 9.68083 16.8645 9.20941 17.2222L5.44311 20.0794C4.389 20.8791 2.97069 19.8031 3.37333 18.5092L4.81193 13.8861C4.99199 13.3074 4.79473 12.6735 4.32332 12.3159L0.557018 9.45865C-0.497097 8.65896 0.0446451 6.918 1.3476 6.918H6.00301C6.58571 6.918 7.10214 6.52622 7.2822 5.94756L8.7208 1.32445Z"
                                                                fill="#F9AE00"></path>
                                                        </svg>
                                                    </label>
                                                    <input class="star" type="radio" name="rating" id="star1"
                                                           value="1" />
                                                    <label class="star1" for="star1">
                                                        <svg width="45" height="45" viewBox="0 0 20 21" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.7208 1.32445C9.12344 0.0305245 10.8766 0.0305227 11.2792 1.32444L12.7178 5.94756C12.8979 6.52622 13.4143 6.918 13.997 6.918H18.6524C19.9554 6.918 20.4971 8.65896 19.443 9.45865L15.6767 12.3159C15.2053 12.6735 15.008 13.3074 15.1881 13.8861L16.6267 18.5092C17.0293 19.8031 15.611 20.8791 14.5569 20.0794L10.7906 17.2222C10.3192 16.8645 9.68083 16.8645 9.20941 17.2222L5.44311 20.0794C4.389 20.8791 2.97069 19.8031 3.37333 18.5092L4.81193 13.8861C4.99199 13.3074 4.79473 12.6735 4.32332 12.3159L0.557018 9.45865C-0.497097 8.65896 0.0446451 6.918 1.3476 6.918H6.00301C6.58571 6.918 7.10214 6.52622 7.2822 5.94756L8.7208 1.32445Z"
                                                                fill="#F9AE00"></path>
                                                        </svg>
                                                    </label>
                                                </div>
                                            </div>
                                            <textarea class="comment__form-textarea" placeholder="Your Comment"
                                                      rows="3"></textarea>
                                            <div class="comment__form-wrapper">
                                                <input class="comment__form-input" type="text" placeholder="Your Name">
                                                <input class="comment__form-input" type="text" placeholder="Your Email">
                                            </div>
                                            <label class="comment__form-checkbox container">
                                                Save my name, email, and website in this browser for the next time I
                                                comment.
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                            <button class="comment__form-btn" type="button">
                                                Submit Review
                                            </button>
                                        </form>
                                    </div>
                                </section>
                            </div>
                            <aside class="members-section__aside members-section-aside">
                                <div class="members-section-aside__aside-cost-info aside-cost-info">
                                    <p class="aside-cost-info__price">
                                        $65 - $75
                                        <span>
                                            per hour
                                        </span>
                                    </p>
                                    <ul class="aside-cost-info__list">
                                        <li class="aside-cost-info__list-item">
                                            <p class="aside-cost-info__list-text">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="icons">
                                                        <path id="Vector"
                                                              d="M20 10C20 16 12 22 12 22C12 22 4 16 4 10C4 7.87827 4.84285 5.84344 6.34315 4.34315C7.84344 2.84285 9.87827 2 12 2C14.1217 2 16.1566 2.84285 17.6569 4.34315C19.1571 5.84344 20 7.87827 20 10Z"
                                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_2"
                                                              d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                    </g>
                                                </svg>
                                                <span>
                                                    Location
                                                </span>
                                            </p>
                                            <p class="aside-cost-info__list-text">
                                                Barcelona, Spain
                                            </p>
                                        </li>
                                        <li class="aside-cost-info__list-item">
                                            <p class="aside-cost-info__list-text">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="icons">
                                                        <path id="Vector"
                                                              d="M16 18C16 16.9391 15.5786 15.9217 14.8284 15.1716C14.0783 14.4214 13.0609 14 12 14C10.9391 14 9.92172 14.4214 9.17157 15.1716C8.42143 15.9217 8 16.9391 8 18"
                                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_2"
                                                              d="M12 14C13.6569 14 15 12.6569 15 11C15 9.34315 13.6569 8 12 8C10.3431 8 9 9.34315 9 11C9 12.6569 10.3431 14 12 14Z"
                                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_3"
                                                              d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_4" d="M8 2V4" stroke="white" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round" />
                                                        <path id="Vector_5" d="M16 2V4" stroke="white"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                    </g>
                                                </svg>
                                                <span>
                                                    Type
                                                </span>
                                            </p>
                                            <p class="aside-cost-info__list-text">
                                                Agency Freelancers
                                            </p>
                                        </li>
                                        <li class="aside-cost-info__list-item">
                                            <p class="aside-cost-info__list-text">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="icons">
                                                        <path id="Vector" d="M5 8L11 14" stroke="white"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_2" d="M4 14L10 8L12 5" stroke="white"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_3" d="M2 5H14" stroke="white"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_4" d="M7 2H8" stroke="white" stroke-width="1.5"
                                                              stroke-linecap="round" stroke-linejoin="round" />
                                                        <path id="Vector_5" d="M22 22L17 12L12 22" stroke="white"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_6" d="M14 18H20" stroke="white"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                    </g>
                                                </svg>
                                                <span>
                                                    English Level
                                                </span>
                                            </p>
                                            <p class="aside-cost-info__list-text">
                                                Fluent
                                            </p>
                                        </li>
                                        <li class="aside-cost-info__list-item">
                                            <p class="aside-cost-info__list-text">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="icons">
                                                        <path id="Vector" d="M9 12H9.01" stroke="white"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_2" d="M15 12H15.01" stroke="white"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_3"
                                                              d="M10 16C10.5 16.3 11.2 16.5 12 16.5C12.8 16.5 13.5 16.3 14 16"
                                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_4"
                                                              d="M19 6.3C19.906 7.43567 20.5236 8.77378 20.8 10.2C21.1381 10.3638 21.4233 10.6195 21.6229 10.9378C21.8224 11.2562 21.9282 11.6243 21.9282 12C21.9282 12.3757 21.8224 12.7438 21.6229 13.0622C21.4233 13.3805 21.1381 13.6362 20.8 13.8C20.3683 15.8135 19.2592 17.618 17.6577 18.9125C16.0562 20.207 14.0592 20.9132 12 20.9132C9.94076 20.9132 7.94379 20.207 6.34231 18.9125C4.74083 17.618 3.63171 15.8135 3.2 13.8C2.86186 13.6362 2.57668 13.3805 2.37714 13.0622C2.17761 12.7438 2.07178 12.3757 2.07178 12C2.07178 11.6243 2.17761 11.2562 2.37714 10.9378C2.57668 10.6195 2.86186 10.3638 3.2 10.2C3.61426 8.1705 4.71589 6.34602 6.31902 5.03437C7.92216 3.72271 9.92866 3.00418 12 3C14 3 15.5 4.1 15.5 5.5C15.5 6.9 14.6 8 13.5 8C12.7 8 12 7.6 12 7"
                                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                    </g>
                                                </svg>
                                                <span>
                                                    Gender
                                                </span>
                                            </p>
                                            <p class="aside-cost-info__list-text">
                                                Female
                                            </p>
                                        </li>
                                        <li class="aside-cost-info__list-item">
                                            <p class="aside-cost-info__list-text">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="icons">
                                                        <path id="Vector"
                                                              d="M20 21V13C20 12.4696 19.7893 11.9609 19.4142 11.5858C19.0391 11.2107 18.5304 11 18 11H6C5.46957 11 4.96086 11.2107 4.58579 11.5858C4.21071 11.9609 4 12.4696 4 13V21"
                                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_2"
                                                              d="M4 16C4 16 4.5 15 6 15C7.5 15 8.5 17 10 17C11.5 17 12.5 15 14 15C15.5 15 16.5 17 18 17C19.5 17 20 16 20 16"
                                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_3" d="M2 21H22" stroke="white"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_4" d="M7 8V10" stroke="white"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_5" d="M12 8V10" stroke="white"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_6" d="M17 8V10" stroke="white"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_7" d="M7 4H7.01" stroke="white"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_8" d="M12 4H12.01" stroke="white"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_9" d="M17 4H17.01" stroke="white"
                                                              stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                    </g>
                                                </svg>
                                                <span>
                                                    Date of Birth
                                                </span>
                                            </p>
                                            <p class="aside-cost-info__list-text">
                                                10.02.1993
                                            </p>
                                        </li>
                                        <li class="aside-cost-info__list-item">
                                            <p class="aside-cost-info__list-text">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="icons">
                                                        <path id="Vector"
                                                              d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z"
                                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                        <path id="Vector_2"
                                                              d="M16 8.00001V13C16 13.7957 16.3161 14.5587 16.8787 15.1213C17.4413 15.6839 18.2044 16 19 16C19.7957 16 20.5587 15.6839 21.1213 15.1213C21.6839 14.5587 22 13.7957 22 13V12C22 9.74731 21.2394 7.56061 19.8414 5.79418C18.4434 4.02775 16.49 2.78508 14.2975 2.26752C12.1051 1.74996 9.80215 1.98782 7.76178 2.94256C5.72141 3.89731 4.06318 5.513 3.05574 7.52787C2.0483 9.54274 1.75069 11.8387 2.21111 14.0439C2.67154 16.249 3.86303 18.2341 5.59254 19.6775C7.32205 21.1209 9.48825 21.9381 11.7402 21.9966C13.9921 22.0552 16.1979 21.3516 18 20"
                                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                    </g>
                                                </svg>
                                                <span>
                                                    Email
                                                </span>
                                            </p>
                                            <p class="aside-cost-info__list-text">
                                                elhardin.dsgnart@gmail.com
                                            </p>
                                        </li>
                                        <li class="aside-cost-info__list-item">
                                            <p class="aside-cost-info__list-text">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g id="icons">
                                                        <path id="Vector"
                                                              d="M22.0001 16.9201V19.9201C22.0012 20.1986 21.9441 20.4743 21.8326 20.7294C21.721 20.9846 21.5574 21.2137 21.3521 21.402C21.1469 21.5902 20.9046 21.7336 20.6408 21.8228C20.377 21.912 20.0974 21.9452 19.8201 21.9201C16.7429 21.5857 13.7871 20.5342 11.1901 18.8501C8.77388 17.3148 6.72539 15.2663 5.19006 12.8501C3.50003 10.2413 2.4483 7.27109 2.12006 4.1801C2.09507 3.90356 2.12793 3.62486 2.21656 3.36172C2.30518 3.09859 2.44763 2.85679 2.63482 2.65172C2.82202 2.44665 3.04986 2.28281 3.30385 2.17062C3.55783 2.05843 3.8324 2.00036 4.11006 2.0001H7.11006C7.59536 1.99532 8.06585 2.16718 8.43382 2.48363C8.80179 2.80008 9.04213 3.23954 9.11005 3.7201C9.23668 4.68016 9.47151 5.62282 9.81006 6.5301C9.9446 6.88802 9.97372 7.27701 9.89396 7.65098C9.81421 8.02494 9.62892 8.36821 9.36005 8.6401L8.09006 9.9101C9.51361 12.4136 11.5865 14.4865 14.0901 15.9101L15.3601 14.6401C15.6319 14.3712 15.9752 14.1859 16.3492 14.1062C16.7231 14.0264 17.1121 14.0556 17.4701 14.1901C18.3773 14.5286 19.32 14.7635 20.2801 14.8901C20.7658 14.9586 21.2095 15.2033 21.5266 15.5776C21.8437 15.9519 22.0122 16.4297 22.0001 16.9201Z"
                                                              stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                              stroke-linejoin="round" />
                                                    </g>
                                                </svg>
                                                <span>
                                                    Phone Number
                                                </span>
                                            </p>
                                            <p class="aside-cost-info__list-text">
                                                (+88) 123-456-789
                                            </p>
                                        </li>
                                    </ul>
                                    <a class="aside-cost-info__link" href="#">
                                        Buy Course
                                    </a>
                                </div>
                                <div class="members-section-aside__aside-block aside-block aside-block--small-squeres">
                                    <h3 class="aside-block__title">
                                        Groups
                                    </h3>
                                    <div class="aside-block__item aside-block-item">
                                        <a class="aside-block-item__img" href="#">
                                            <img class="aside-block-item__img-image" src="landing/images/group-img-14.jpg"
                                                 alt="img">
                                        </a>
                                        <div class="aside-block-item__box aside-block-item-box">
                                            <p class="aside-block-item-box__text">
                                                <a href="#">
                                                    Readymag
                                                </a>
                                            </p>
                                            <p class="aside-block-item-box__subtext">
                                                20 members
                                            </p>
                                        </div>
                                    </div>
                                    <div class="aside-block__item aside-block-item">
                                        <a class="aside-block-item__img" href="#">
                                            <img class="aside-block-item__img-image" src="landing/images/group-img-15.jpg"
                                                 alt="img">
                                        </a>
                                        <div class="aside-block-item__box aside-block-item-box">
                                            <p class="aside-block-item-box__text">
                                                <a href="#">
                                                    Graphic Design
                                                </a>
                                            </p>
                                            <p class="aside-block-item-box__subtext">
                                                474 members
                                            </p>
                                        </div>
                                    </div>
                                    <div class="aside-block__item aside-block-item">
                                        <a class="aside-block-item__img" href="#">
                                            <img class="aside-block-item__img-image" src="landing/images/group-img-1.jpg"
                                                 alt="img">
                                        </a>
                                        <div class="aside-block-item__box aside-block-item-box">
                                            <p class="aside-block-item-box__text">
                                                <a href="#">
                                                    Creative Thinking
                                                </a>
                                            </p>
                                            <p class="aside-block-item-box__subtext">
                                                72 members
                                            </p>
                                        </div>
                                    </div>
                                    <div class="aside-block__item aside-block-item">
                                        <a class="aside-block-item__img" href="#">
                                            <img class="aside-block-item__img-image" src="landing/images/group-img-10.jpg"
                                                 alt="img">
                                        </a>
                                        <div class="aside-block-item__box aside-block-item-box">
                                            <p class="aside-block-item-box__text">
                                                <a href="#">
                                                    Mobile Apps
                                                </a>
                                            </p>
                                            <p class="aside-block-item-box__subtext">
                                                3 members
                                            </p>
                                        </div>
                                    </div>
                                    <a class="aside-block__link" href="#">
                                        Show All
                                    </a>
                                </div>
                                <div class="members-section-aside__aside-block aside-block">
                                    <h3 class="aside-block__title">
                                        Members
                                    </h3>
                                    <div class="aside-block__item aside-block-item">
                                        <a class="aside-block-item__img" href="#">
                                            <img class="aside-block-item__img-image" src="landing/images/member-icon-17.png"
                                                 alt="img">
                                        </a>
                                        <div class="aside-block-item__box aside-block-item-box">
                                            <p class="aside-block-item-box__text">
                                                <a href="#">
                                                    Leila Calderon
                                                </a>
                                            </p>
                                            <a class="aside-block-item-box__link" href="mailto:">
                                                @lcalderon.paralect
                                            </a>
                                        </div>
                                    </div>
                                    <div class="aside-block__item aside-block-item">
                                        <a class="aside-block-item__img" href="#">
                                            <img class="aside-block-item__img-image" src="landing/images/member-icon-27.png"
                                                 alt="img">
                                        </a>
                                        <div class="aside-block-item__box aside-block-item-box">
                                            <p class="aside-block-item-box__text">
                                                <a href="#">
                                                    Susan Foley
                                                </a>
                                            </p>
                                            <a class="aside-block-item-box__link" href="mailto:">
                                                @susan-foley
                                            </a>
                                        </div>
                                    </div>
                                    <div class="aside-block__item aside-block-item">
                                        <a class="aside-block-item__img" href="#">
                                            <img class="aside-block-item__img-image" src="landing/images/member-icon-6.png"
                                                 alt="img">
                                        </a>
                                        <div class="aside-block-item__box aside-block-item-box">
                                            <p class="aside-block-item-box__text">
                                                <a href="#">
                                                    Lilly-Rose Holland
                                                </a>
                                            </p>
                                            <a class="aside-block-item-box__link" href="mailto:">
                                                @lillyrose.flower
                                            </a>
                                        </div>
                                    </div>
                                    <div class="aside-block__item aside-block-item">
                                        <a class="aside-block-item__img" href="#">
                                            <img class="aside-block-item__img-image" src="landing/images/member-icon-14.png"
                                                 alt="img">
                                        </a>
                                        <div class="aside-block-item__box aside-block-item-box">
                                            <p class="aside-block-item-box__text">
                                                <a href="#">
                                                    Timothy Stuart
                                                </a>
                                            </p>
                                            <a class="aside-block-item-box__link" href="mailto:">
                                                @tim.stuart.3d
                                            </a>
                                        </div>
                                    </div>
                                    <a class="aside-block__link" href="#">
                                        Show All
                                    </a>
                                </div>
                                <div class="members-section-aside__aside-block aside-block aside-block--medium-squeres">
                                    <h3 class="aside-block__title">
                                        Recent Posts
                                    </h3>
                                    <div class="aside-block__item aside-block-item">
                                        <a class="aside-block-item__img" href="#">
                                            <img class="aside-block-item__img-image" src="landing/images/group-img-11.jpg"
                                                 alt="img">
                                        </a>
                                        <div class="aside-block-item__box aside-block-item-box">
                                            <p class="aside-block-item-box__text">
                                                <a href="#">
                                                    Tackle Your closest Spring cleaning
                                                </a>
                                            </p>
                                            <p class="aside-block-item-box__subtext">
                                                May 14, 2023
                                            </p>
                                        </div>
                                    </div>
                                    <div class="aside-block__item aside-block-item">
                                        <a class="aside-block-item__img" href="#">
                                            <img class="aside-block-item__img-image" src="landing/images/group-img-6.jpg"
                                                 alt="img">
                                        </a>
                                        <div class="aside-block-item__box aside-block-item-box">
                                            <p class="aside-block-item-box__text">
                                                <a href="#">
                                                    The Truth About Business Blogging
                                                </a>
                                            </p>
                                            <p class="aside-block-item-box__subtext">
                                                May 13, 2023
                                            </p>
                                        </div>
                                    </div>
                                    <div class="aside-block__item aside-block-item">
                                        <a class="aside-block-item__img" href="#">
                                            <img class="aside-block-item__img-image" src="landing/images/group-img-4.jpg"
                                                 alt="img">
                                        </a>
                                        <div class="aside-block-item__box aside-block-item-box">
                                            <p class="aside-block-item-box__text">
                                                <a href="#">
                                                    OMA completes renovation of Sotheby’s New York galleries
                                                </a>
                                            </p>
                                            <p class="aside-block-item-box__subtext">
                                                May 5, 2023
                                            </p>
                                        </div>
                                    </div>
                                    <div class="aside-block__item aside-block-item">
                                        <a class="aside-block-item__img" href="#">
                                            <img class="aside-block-item__img-image" src="landing/images/group-img-2.jpg"
                                                 alt="img">
                                        </a>
                                        <div class="aside-block-item__box aside-block-item-box">
                                            <p class="aside-block-item-box__text">
                                                <a href="#">
                                                    Visiting Amsterdam on a Budget
                                                </a>
                                            </p>
                                            <p class="aside-block-item-box__subtext">
                                                May 2, 2023
                                            </p>
                                        </div>
                                    </div>
                                    <a class="aside-block__link" href="#">
                                        Show All
                                    </a>
                                </div>
                                <div class="members-section-aside__aside-block aside-block aside-block--grid">
                                    <h3 class="aside-block__title">
                                        Media
                                    </h3>
                                    <div class="aside-block__media aside-block-media">
                                        <a class="aside-block-media__link" href="#">
                                            <img class="aside-block-media__link-img" src="landing/images/new/ga1.jpg" alt="img">
                                        </a>
                                        <a class="aside-block-media__link" href="#">
                                            <img class="aside-block-media__link-img" src="landing/images/new/ga2.jpg" alt="img">
                                        </a>
                                        <a class="aside-block-media__link" href="#">
                                            <img class="aside-block-media__link-img" src="landing/images/new/ga3.jpg" alt="img">
                                        </a>
                                        <a class="aside-block-media__link" href="#">
                                            <img class="aside-block-media__link-img" src="landing/images/new/ga4.jpg" alt="img">
                                        </a>
                                        <a class="aside-block-media__link" href="#">
                                            <img class="aside-block-media__link-img" src="landing/images/new/ga5.jpg" alt="img">
                                        </a>
                                        <a class="aside-block-media__link" href="#">
                                            <img class="aside-block-media__link-img" src="landing/images/new/ga6.jpg" alt="img">
                                        </a>
                                        <a class="aside-block-media__link" href="#">
                                            <img class="aside-block-media__link-img" src="landing/images/new/ga7.jpg" alt="img">
                                        </a>
                                        <a class="aside-block-media__link" href="#">
                                            <img class="aside-block-media__link-img" src="landing/images/new/ga8.jpg" alt="img">
                                        </a>
                                        <a class="aside-block-media__link" href="#">
                                            <img class="aside-block-media__link-img" src="landing/images/new/ga4.jpg" alt="img">
                                        </a>
                                    </div>
                                    <a class="aside-block__link" href="#">
                                        Show All
                                    </a>
                                </div>
                            </aside>
                        </div>
                        <div class="members-section__wrapper" id="2">
                            <div class="groups__inner">
                                <div class="groups__card card">
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
                                                <a class="card-options__link" href="#">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                    <span>
                                                        Leave Group
                                                    </span>
                                                </a>
                                                <a class="card-options__link" href="#">
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
                                        <a class="card__title" href="#">
                                            Graphic Design
                                        </a>
                                        <ul class="card__list card-list">
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    Active 7 days ago
                                                </p>
                                            </li>
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    293 Members
                                                </p>
                                            </li>
                                        </ul>
                                        <a class="card-box__poster" href="#">
                                            <img class="card-box__poster-img" src="landing/images/group-img-1.jpg" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="groups__card card">
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
                                                <a class="card-options__link" href="#">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                    <span>
                                                        Leave Group
                                                    </span>
                                                </a>
                                                <a class="card-options__link" href="#">
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
                                        <a class="card__title" href="#">
                                            Art Group
                                        </a>
                                        <ul class="card__list card-list">
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    Active 7 days ago
                                                </p>
                                            </li>
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    293 Members
                                                </p>
                                            </li>
                                        </ul>
                                        <a class="card-box__poster" href="#">
                                            <img class="card-box__poster-img" src="landing/images/group-img-5.jpg" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="groups__card card">
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
                                                <a class="card-options__link" href="#">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                    <span>
                                                        Leave Group
                                                    </span>
                                                </a>
                                                <a class="card-options__link" href="#">
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
                                        <a class="card__title" href="#">
                                            UX/UI Design
                                        </a>
                                        <ul class="card__list card-list">
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    Active 7 days ago
                                                </p>
                                            </li>
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    293 Members
                                                </p>
                                            </li>
                                        </ul>
                                        <a class="card-box__poster" href="#">
                                            <img class="card-box__poster-img" src="landing/images/group-img-14.jpg" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="groups__card card">
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
                                                <a class="card-options__link" href="#">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                    <span>
                                                        Leave Group
                                                    </span>
                                                </a>
                                                <a class="card-options__link" href="#">
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
                                        <a class="card__title" href="#">
                                            Typography
                                        </a>
                                        <ul class="card__list card-list">
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    Active 7 days ago
                                                </p>
                                            </li>
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    293 Members
                                                </p>
                                            </li>
                                        </ul>
                                        <a class="card-box__poster" href="#">
                                            <img class="card-box__poster-img" src="landing/images/group-img-9.jpg" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="groups__card card">
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
                                                <a class="card-options__link" href="#">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                    <span>
                                                        Leave Group
                                                    </span>
                                                </a>
                                                <a class="card-options__link" href="#">
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
                                        <a class="card__title" href="#">
                                            Vector Graphics
                                        </a>
                                        <ul class="card__list card-list">
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    Active 7 days ago
                                                </p>
                                            </li>
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    293 Members
                                                </p>
                                            </li>
                                        </ul>
                                        <a class="card-box__poster" href="#">
                                            <img class="card-box__poster-img" src="landing/images/group-img-31.jpg" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="groups__card card">
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
                                                <a class="card-options__link" href="#">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                    <span>
                                                        Leave Group
                                                    </span>
                                                </a>
                                                <a class="card-options__link" href="#">
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
                                        <a class="card__title" href="#">
                                            Identity
                                        </a>
                                        <ul class="card__list card-list">
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    Active 7 days ago
                                                </p>
                                            </li>
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    293 Members
                                                </p>
                                            </li>
                                        </ul>
                                        <a class="card-box__poster" href="#">
                                            <img class="card-box__poster-img" src="landing/images/group-img-30.jpg" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="groups__card card">
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
                                                <a class="card-options__link" href="#">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                    <span>
                                                        Leave Group
                                                    </span>
                                                </a>
                                                <a class="card-options__link" href="#">
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
                                        <a class="card__title" href="#">
                                            Mobile Apps
                                        </a>
                                        <ul class="card__list card-list">
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    Active 7 days ago
                                                </p>
                                            </li>
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    293 Members
                                                </p>
                                            </li>
                                        </ul>
                                        <a class="card-box__poster" href="#">
                                            <img class="card-box__poster-img" src="landing/images/group-img-29.jpg" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="groups__card card">
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
                                                <a class="card-options__link" href="#">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                    <span>
                                                        Leave Group
                                                    </span>
                                                </a>
                                                <a class="card-options__link" href="#">
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
                                        <a class="card__title" href="#">
                                            Readymag
                                        </a>
                                        <ul class="card__list card-list">
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    Active 7 days ago
                                                </p>
                                            </li>
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    293 Members
                                                </p>
                                            </li>
                                        </ul>
                                        <a class="card-box__poster" href="#">
                                            <img class="card-box__poster-img" src="landing/images/group-img-6.jpg" alt="img">
                                        </a>
                                    </div>
                                </div>
                                <div class="groups__card card">
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
                                                <a class="card-options__link" href="#">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.66659 13.3333H13.3333C13.6869 13.3333 14.026 13.1929 14.2761 12.9428C14.5261 12.6928 14.6666 12.3536 14.6666 12V5.33333C14.6666 4.97971 14.5261 4.64057 14.2761 4.39052C14.026 4.14048 13.6869 4 13.3333 4H8.04659C7.82698 3.99886 7.61105 3.9435 7.41798 3.83883C7.22492 3.73415 7.0607 3.58341 6.93992 3.4L6.39325 2.6C6.27247 2.41659 6.10825 2.26585 5.91519 2.16117C5.72212 2.0565 5.50619 2.00114 5.28659 2H2.66659C2.31296 2 1.97382 2.14048 1.72378 2.39052C1.47373 2.64057 1.33325 2.97971 1.33325 3.33333V12C1.33325 12.7333 1.93325 13.3333 2.66659 13.3333Z" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M6 8.66669H10" stroke="#0E1218" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>

                                                    <span>
                                                        Leave Group
                                                    </span>
                                                </a>
                                                <a class="card-options__link" href="#">
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
                                        <a class="card__title" href="#">
                                            UX-research
                                        </a>
                                        <ul class="card__list card-list">
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    Active 7 days ago
                                                </p>
                                            </li>
                                            <li class="card-list__item">
                                                <p class="card-list__text">
                                                    293 Members
                                                </p>
                                            </li>
                                        </ul>
                                        <a class="card-box__poster" href="#">
                                            <img class="card-box__poster-img" src="landing/images/event-img-4.jpg" alt="img">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

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


        <footer class="footer">
            <div class="container">
                <p class="footer__copy">
                    Design Lab © 2023. All rights reserved.
                </p>
            </div>
        </footer>
    </div>
@endsection
