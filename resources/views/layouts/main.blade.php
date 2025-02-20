@include('layouts.header')
@yield('header')


<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip to content</a>
    <div class="page-flex">

        <!-- ! Sidebar -->
        @include('layouts.sidebar')

        <!-- ! Main nav -->
        <div class="main-wrapper">
            <nav class="main-nav--bg" style="height:  70px">
                <div class="container main-nav" style="margin-top: -12px;">
                    <div class="main-nav-start">
                        <div class="search-wrapper">
                            {{-- <i data-feather="search" aria-hidden="true"></i> --}}
                            {{-- <input type="text" placeholder="Enter keywords ..." required> --}}
                        </div>
                    </div>
                    <div class="main-nav-end">
                        <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                            <span class="sr-only">Toggle menu</span>
                            <span class="icon menu-toggle--gray" aria-hidden="true"></span>
                        </button>
                        <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                            <span class="sr-only">Switch theme</span>
                            <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                            <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
                        </button>
                        <div class="nav-user-wrapper">
                            <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                                <span class="sr-only">My profile</span>
                                <span class="nav-user-img">
                                    <picture>
                                        <img src="{{ Auth::user()->profile_image != null
                                            ? asset('images/profile_image/' . Auth::user()->profile_image)
                                            : asset('template/img/avatar/avatar-illustrated-02.webp') }}"
                                            alt="Image Profile"
                                            style="border-radius: 50%; width: 40px; height: 40px; object-fit: cover;">
                                    </picture>
                                </span>
                            </button>
                            <ul class="users-item-dropdown nav-user-dropdown dropdown">
                                <li><a href="{{ route('profile.index') }}">
                                        <i data-feather="user" aria-hidden="true"></i>
                                        <span>Profile</span>
                                    </a></li>
                                <li><a href="##">
                                        <i data-feather="settings" aria-hidden="true"></i>
                                        <span>Account settings</span>
                                    </a></li>
                                <li>
                                    <a class="danger" href="" id="logout">
                                        <i data-feather="log-out" aria-hidden="true"></i>
                                        <span>Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- ! Main -->
            {{-- konten --}}
            @yield('konten')



            <!-- ! Footer -->
            <footer class="footer">
                <div class="container footer--flex">
                    <div class="footer-start">
                        <p> <?php echo date('Y'); ?> © Taufiq - <a href="#" target="_blank"
                                rel="noopener noreferrer">mini-dashboard.com</a></p>
                    </div>
                    <ul class="footer-end">
                        <li><a href="##">About</a></li>
                        <li><a href="##">Support</a></li>
                        <li><a href="##">Puchase</a></li>
                        <li>Version 1.0.0</li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>


    @yield('footer')
    @include('layouts.footer')

</body>

</html>
