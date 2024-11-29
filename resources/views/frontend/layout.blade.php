<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-pwa="true">

<head>

    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Selamat Datang</title>
    <meta name="description" content="The News - Bagas Topati">
    <meta name="keywords"
        content="directory, listings, search, car dealer, real estate, city guide, business listings, medical directories, event listings, e-commerce, market, multipurpose, ui kit, light and dark mode, bootstrap, html5, css3, javascript, gallery, slider, mobile, pwa">
    <meta name="author" content="Bagas Topati">

    <!-- Webmanifest + Favicon / App icons -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" type="image/png" href="assets/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/app-icons/icon-180x180.png">

    <!-- Theme switcher (color modes) -->
    <script src="assets/js/theme-switcher.js"></script>

    <!-- Preloaded local web font (Inter) -->
    <link rel="preload" href="assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin>

    <!-- Font icons -->
    <link rel="preload" href="{{ url('frontend/assets/icons/finder-icons.woff2') }}" as="font" type="font/woff2"
        crossorigin>
    <link rel="stylesheet" href="{{ url('frontend/assets/icons/finder-icons.min.css') }}">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{ url('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/vendor/choices.js/public/assets/styles/choices.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/vendor/flatpickr/dist/flatpickr.min.css') }}">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="{{ url('frontend/assets/css/theme.min.css') }}" as="style">
    <link rel="preload" href="{{ url('frontend/assets/css/theme.rtl.min.css') }}" as="style">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/theme.min.css') }}" id="theme-styles">

    <style>
        :root {
            --fn-danger: #c00 !important;
        }

        #bs-nav-bar nav {
            display: flex;
            align-items: center;
        }

        #bs-nav-bar nav a {
            color: #fff;
            white-space: nowrap;
            text-overflow: ellipsis;
            font-weight: 700;
            padding: 6px 6px;
            margin: 6px;
            display: block;
            text-decoration: none;
            font-size: 12px;
            text-transform: uppercase;
        }

    </style>


</head>


<!-- Body -->

<body>

    <!-- Navigation bar (Page header) -->
    <section id="td-top">
        <div class="container py-3">
            <div class="d-flex justify-content-between">
                <div id="td-top-menu">
                    <button class="btn btn-secondary td-btn-menu">
                        <span>All Sections</span>
                    </button>
                    <button class="btn btn-secondary td-btn-search">
                        <span>Search</span>
                    </button>
                </div>
                <a id="td-top-logo" href="https://thediplomat.com/">
                    <picture class="mb-1 d-block">
                        <source
                            srcset="https://thediplomat.com/wp-content/themes/td_theme_v3/assets/logo/diplomat_logo_black.svg"
                            type="image/svg+xml">
                        <img src="https://thediplomat.com/wp-content/themes/td_theme_v3/assets/logo/diplomat_logo_black.jpg"
                            width="330" height="30">
                    </picture>
                    <p class="fs-xs fw-bolder fw-secondary-subtle text-center" style="text-transform: uppercase">
                        <span>Read <span>The Diplomat</span>, </span><span class="text-danger">Know The
                            Asia-Pacific</span>
                    </p>
                </a>
                <div id="td-top-user"><a class="btn btn-danger td-btn-shop me-2"
                        href="https://thediplomat.com/subscriptions"><span>Subscribe</span></a><label
                        for="td-account-modal_trigger" class="btn btn-secondary"><span>Sign In</span></label>
                </div>
            </div>
        </div>
    </section>
    <section id="bs-nav-bar" class="shadow bg-danger">
        <div class="container py-1">
            <nav>
                <a href="https://thediplomat.com/regions/central-asia/">Central Asia</a>
                <a href="https://thediplomat.com/regions/east-asia/">East Asia</a>
                <a href="https://thediplomat.com/regions/oceania-region/">Oceania</a>
                <a href="https://thediplomat.com/regions/south-asia/">South Asia</a>
                <a href="https://thediplomat.com/regions/southeast-asia/">Southeast Asia</a>
                <a href="https://thediplomat.com/topics/security/">Security</a>
                <a href="https://thediplomat.com/topics/politics/">Politics</a>
                <a href="https://thediplomat.com/topics/diplomacy/">Diplomacy</a>
                <a href="https://thediplomat.com/topics/economy/">Economy</a>
                <a href="https://thediplomat.com/topics/society/">Society</a>
                <a href="https://thediplomat.com/topics/environment/">Environment</a>
                <span class="td-space td-priority-4 text-white">|</span>
                <a href="https://magazine.thediplomat.com" target="_blank" rel="noopener">Magazine</a>
                <span class="td-space td-priority-1 text-white">|</span>
                <a hre="" class="td-more"><span>All</span></a>
            </nav>
        </div>
    </section>

    <section id="bs-featured-gallery">
        <div class="container">
            <div class="td-viewport">
                <div id="td-feature-gallery__previews" style="">
                    <div class="row py-3">
                        <div class="col-md-7">
                            <a class="td-post d-1 td-measure td-active"
                                href="/2024/11/unbroken-chains-the-continuity-of-systemic-corruption-in-afghanistan/">
                                
                                <h5>Society</h5>
                                <h4>Unbroken Chains: The Continuity of Systemic Corruption in Afghanistan</h4>
                                <h6>By <span>Mohammad Qadam Shah</span>&nbsp;|&nbsp;<span>November 28, 2024</span></h6>
                                <div>For the Afghan people, the fight against corruption is not just a matter of governance – it is
                                    a matter of survival.</div>
                            </a>
                        </div>
                        <div class="col-md-5">
                            <figure class="td-img w-100">
                                <img
                                alt="Unbroken Chains: The Continuity of Systemic Corruption in Afghanistan"
                                title="Unbroken Chains: The Continuity of Systemic Corruption in Afghanistan"
                                src="https://thediplomat.com/wp-content/uploads/2024/11/sizes/thumbnail/thediplomat_2024-11-26-183431.jpg"
                                class="img-fluid w-100">
                            </figure>
                        </div>
                    </div>
                    
                </div>
                <div class="row bs-featured-gallery-links">
                    <div class="col-md-3" data-index="1">
                        <a
                            href="/2024/11/unbroken-chains-the-continuity-of-systemic-corruption-in-afghanistan/"
                            class="td-post">
                            <h5>Society</h5>
                            <h4>Unbroken Chains: The Continuity of Systemic Corruption in Afghanistan</h4>
                        </a>
                    </div>
                    <div class="col-md-3" data-index="2"><a
                            href="/2024/11/listening-to-chinas-economic-whisperers/" class="td-post">
                            <h5>Economy</h5>
                            <h4>Listening to China’s Economic Whisperers</h4>
                        </a></div>
                    <div class=" col-md-3" data-index="3"><a
                            href="/2024/11/can-climate-break-the-ice-for-india-and-pakistan/" class="td-post">
                            <h5>Environment</h5>
                            <h4>Can Climate Break the Ice for India and Pakistan?</h4>
                        </a>
                    </div>
                    <div class="col-md-3" data-index="4"><a href="/2024/11/the-battle-for-jakarta/"
                            class="td-post">
                            <h5>Politics</h5>
                            <h4>The Battle For Jakarta</h4>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>


    <!-- Page content -->
    <main class="content-wrapper">

        @yield('content')

    </main>


    <!-- Page footer -->
    <footer class="footer bg-body pt-5" data-bs-theme="dark">
        <div class="container pt-sm-2 pt-md-3 pb-md-2">

            <!-- Logo + Social links -->
            <div class="border-bottom pb-4">
                <div class="d-flex align-items-center justify-content-between pb-2 pb-sm-3">
                    <a class="d-inline-flex align-items-center text-dark-emphasis text-decoration-none"
                        href="index.html">
                        <span class="flex-shrink-0 text-primary rtl-flip me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34">
                                <path
                                    d="M34.5 16.894v10.731c0 3.506-2.869 6.375-6.375 6.375H17.5h-.85C7.725 33.575.5 26.138.5 17c0-9.35 7.65-17 17-17s17 7.544 17 16.894z"
                                    fill="currentColor" />
                                <g fill-rule="evenodd">
                                    <path
                                        d="M17.5 13.258c-3.101 0-5.655 2.554-5.655 5.655s2.554 5.655 5.655 5.655 5.655-2.554 5.655-5.655-2.554-5.655-5.655-5.655zm-9.433 5.655c0-5.187 4.246-9.433 9.433-9.433s9.433 4.246 9.433 9.433a9.36 9.36 0 0 1-1.569 5.192l2.397 2.397a1.89 1.89 0 0 1 0 2.671 1.89 1.89 0 0 1-2.671 0l-2.397-2.397a9.36 9.36 0 0 1-5.192 1.569c-5.187 0-9.433-4.246-9.433-9.433z"
                                        fill="#000" fill-opacity=".05" />
                                    <g fill="#fff">
                                        <path
                                            d="M17.394 10.153c-3.723 0-6.741 3.018-6.741 6.741s3.018 6.741 6.741 6.741 6.741-3.018 6.741-6.741-3.018-6.741-6.741-6.741zM7.347 16.894A10.05 10.05 0 0 1 17.394 6.847 10.05 10.05 0 0 1 27.44 16.894 10.05 10.05 0 0 1 17.394 26.94 10.05 10.05 0 0 1 7.347 16.894z" />
                                        <path
                                            d="M23.025 22.525c.645-.645 1.692-.645 2.337 0l3.188 3.188c.645.645.645 1.692 0 2.337s-1.692.645-2.337 0l-3.187-3.187c-.645-.646-.645-1.692 0-2.337z" />
                                    </g>
                                </g>
                                <path
                                    d="M23.662 14.663c2.112 0 3.825-1.713 3.825-3.825s-1.713-3.825-3.825-3.825-3.825 1.713-3.825 3.825 1.713 3.825 3.825 3.825z"
                                    fill="#fff" />
                                <path fill-rule="evenodd"
                                    d="M23.663 8.429a2.41 2.41 0 0 0-2.408 2.408 2.41 2.41 0 0 0 2.408 2.408 2.41 2.41 0 0 0 2.408-2.408 2.41 2.41 0 0 0-2.408-2.408zm-5.242 2.408c0-2.895 2.347-5.242 5.242-5.242s5.242 2.347 5.242 5.242-2.347 5.242-5.242 5.242-5.242-2.347-5.242-5.242z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <span class="fs-4 fw-semibold">Finder</span>
                    </a>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!"
                            data-bs-toggle="tooltip"
                            data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-white opacity-75 p-0"></div></div>'
                            title="Instagram" aria-label="Follow us on Instagram">
                            <i class="fi-instagram"></i>
                        </a>
                        <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!"
                            data-bs-toggle="tooltip"
                            data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-white opacity-75 p-0"></div></div>'
                            title="Facebook" aria-label="Follow us on Facebook">
                            <i class="fi-facebook"></i>
                        </a>
                        <a class="btn btn-icon fs-base btn-outline-secondary border-0" href="#!"
                            data-bs-toggle="tooltip"
                            data-bs-template='<div class="tooltip fs-xs mb-n2" role="tooltip"><div class="tooltip-inner bg-transparent text-white opacity-75 p-0"></div></div>'
                            title="X (Twitter)" aria-label="Follow us on X (Twitter)">
                            <i class="fi-x"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Column with links that are turned into accordion on screens < 500px wide (sm breakpoint) + Subscription form -->
            <div class="accordion row pb-4 py-sm-5" id="footerLinks">
                <div class="col-sm-4 col-md-2 col-xl-3">
                    <div class="accordion-item border-0">
                        <h6 class="accordion-header" id="eventLinksHeading">
                            <span class="d-none d-sm-block pb-1 mb-2">Events</span>
                            <button type="button" class="accordion-button collapsed py-3 d-sm-none"
                                data-bs-toggle="collapse" data-bs-target="#eventLinks" aria-expanded="false"
                                aria-controls="eventLinks">Events</button>
                        </h6>
                        <div class="accordion-collapse collapse d-sm-block" id="eventLinks"
                            aria-labelledby="eventLinksHeading" data-bs-parent="#footerLinks">
                            <ul class="nav flex-column gap-2 pt-sm-1 pt-lg-2 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0">
                                <li class="pt-1">
                                    <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                        href="#!">Popular near you</a>
                                </li>
                                <li class="pt-1">
                                    <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                        href="#!">Online events</a>
                                </li>
                                <li class="pt-1">
                                    <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                        href="#!">Sport</a>
                                </li>
                                <li class="pt-1">
                                    <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                        href="#!">Cinema</a>
                                </li>
                                <li class="pt-1">
                                    <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                        href="#!">Theater</a>
                                </li>
                            </ul>
                        </div>
                        <hr class="d-sm-none my-0">
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="accordion-item border-0">
                        <h6 class="accordion-header" id="forProvidersHeading">
                            <span class="d-none d-sm-block pb-1 mb-2">For providers</span>
                            <button type="button" class="accordion-button collapsed py-3 d-sm-none"
                                data-bs-toggle="collapse" data-bs-target="#forProviders" aria-expanded="false"
                                aria-controls="forProviders">For providers</button>
                        </h6>
                        <div class="accordion-collapse collapse d-sm-block" id="forProviders"
                            aria-labelledby="forProvidersHeading" data-bs-parent="#footerLinks">
                            <ul class="nav flex-column gap-2 pt-sm-1 pt-lg-2 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0">
                                <li class="pt-1">
                                    <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                        href="#!">Provider log in</a>
                                </li>
                                <li class="pt-1">
                                    <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                        href="#!">For partners</a>
                                </li>
                                <li class="pt-1">
                                    <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                        href="#!">Event ticket service</a>
                                </li>
                                <li class="pt-1">
                                    <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                        href="#!">News and features</a>
                                </li>
                                <li class="pt-1">
                                    <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                        href="#!">Help center</a>
                                </li>
                            </ul>
                        </div>
                        <hr class="d-sm-none my-0">
                    </div>
                </div>
                <div class="col-sm-4 col-md-3">
                    <div class="accordion-item border-0">
                        <h6 class="accordion-header" id="ourCompanyHeading">
                            <span class="d-none d-sm-block pb-1 mb-2">Our company</span>
                            <button type="button" class="accordion-button collapsed py-3 d-sm-none"
                                data-bs-toggle="collapse" data-bs-target="#ourCompany" aria-expanded="false"
                                aria-controls="ourCompany">Our company</button>
                        </h6>
                        <div class="accordion-collapse collapse d-sm-block" id="ourCompany"
                            aria-labelledby="ourCompanyHeading" data-bs-parent="#footerLinks">
                            <ul class="nav flex-column gap-2 pt-sm-1 pt-lg-2 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0">
                                <li class="pt-1">
                                    <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                        href="#!">About us</a>
                                </li>
                                <li class="pt-1">
                                    <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                        href="#!">Ticket delivery</a>
                                </li>
                                <li class="pt-1">
                                    <a class="nav-link hover-effect-underline d-inline text-body fw-normal p-0"
                                        href="#!">Payment</a>
                                </li>
                            </ul>
                        </div>
                        <hr class="d-sm-none my-0">
                    </div>
                </div>

                <!-- Subscription form -->
                <div class="col-md-4 col-xl-3 pt-4 pt-sm-5 pt-md-0 mt-3 mt-sm-0">
                    <h6 class="pb-1 pb-lg-0 mb-lg-4">Subscribe to our newsletter</h6>
                    <form class="d-flex flex-column flex-sm-row flex-md-column gap-3 needs-validation" novalidate>
                        <div class="position-relative w-100">
                            <i class="fi-mail position-absolute top-50 start-0 translate-middle-y text-body ms-3"></i>
                            <input type="email" class="form-control form-icon-start text-start"
                                placeholder="Your email" aria-label="Email input" required>
                        </div>
                        <button type="submit" class="btn btn-primary px-4">Subscribe</button>
                    </form>
                </div>
            </div>

            <!-- Contact link + Copyright -->
            <div
                class="d-flex flex-column flex-sm-row align-items-center justify-content-between pb-4 pt-3 pt-sm-2 pt-md-3 pt-lg-4">
                <div class="mb-3 mb-md-0">
                    <span class="text-body-secondary me-3">Need help?</span>
                    <a class="text-white text-decoration-none hover-effect-underline" href="#!">Contact us</a>
                </div>
                <p class="text-body-secondary fs-sm text-center mb-0">&copy; All rights reserved. Made by <a
                        class="text-body fw-medium text-decoration-none hover-effect-underline"
                        href="https://createx.studio/" target="_blank" rel="noreferrer">Createx Studio</a></p>
            </div>
        </div>
    </footer>


    <!-- Back to top button -->
    <div class="floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4 pb-4">
        <a class="btn-scroll-top btn btn-sm bg-body border-0 rounded-pill shadow animate-slide-end" href="#top">
            Top
            <i class="fi-arrow-right fs-base ms-1 me-n1 animate-target"></i>
            <span class="position-absolute top-0 start-0 w-100 h-100 border rounded-pill z-0"></span>
            <svg class="position-absolute top-0 start-0 w-100 h-100 z-1" viewBox="0 0 62 32" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor"
                    stroke-width="1.5" stroke-miterlimit="10" />
            </svg>
        </a>
    </div>


    <!-- Vendor scripts -->
    <script src="{{ url('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('frontend/assets/vendor/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <script src="{{ url('frontend/assets/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="{{ url('frontend/assets/js/theme.min.js') }}"></script>
</body>

</html>
