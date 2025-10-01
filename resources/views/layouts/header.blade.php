<header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- <img src="{{ asset('img/logo.png') }}" alt=""> -->
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ url('about') }}" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ url('resume') }}" class="{{ Request::is('resume') ? 'active' : '' }}">Resume</a></li>
                <li><a href="{{ url('service') }}" class="{{ Request::is('service') ? 'active' : '' }}">Services</a>
                </li>
                <li><a href="{{ url('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <div class="header-social-links">
            <a href="https://github.com/khalilboutar1996khalil" class="instagram" target="_blank"
                rel="noopener noreferrer">
                <i class="bi bi-github"></i>
            </a>
            <a href="https://www.linkedin.com/in/mohamed-khalil-boutar-6b8654157/" class="linkedin" target="_blank"
                rel="noopener noreferrer">
                <i class="bi bi-linkedin"></i>
            </a>
        </div>


    </div>
</header>
