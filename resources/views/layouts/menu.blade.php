<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="sideNav">
    
    <!-- Jeppesen logo -->
    <span class="d-lg-none logo">Jeppesen.dev</span>
    <span class="d-none d-lg-block logo logo-large">Jeppesen.dev</span>

    <!-- Brand icons & login button (small device) -->
    <div class="d-lg-none brand-items">
        <a href="/login" title="Admin login">
            <i class="fas fa-user-shield"></i>
        </a>
        <a href="" title="My LinkedIn profile">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="" title="My GitHub profile">
            <i class="fab fa-github"></i>
        </a>
    </div>

    <!-- Burger menu (small devices) -->
    <button class="navbar-toggler" 
            type="button" 
            data-toggle="collapse" 
            data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" title="Back to Home" href="/">Home</a>
            </li>
            <li class="nav-item {{ Request::is('/news*') ? 'active' : '' }}">
                <a class="nav-link" title="Related news" href="/news">News</a>
            </li>
            <li class="nav-item {{ Request::is('/about*') ? 'active' : '' }}">
                <a class="nav-link" title="About the author & site" href="/about">About</a>
            </li>
            <li class="nav-item {{ Request::is('/projects*') ? 'active' : '' }}">
                <a class="nav-link" title="My projects" href="/projects">Portfolio</a>
            </li>
            <li class="nav-item {{ Request::is('/contact') ? 'active' : '' }}">
                <a class="nav-link" title="Contact me!" href="/contact">Contact</a>
            </li>
            <!-- Brand icons -->
            <li class="brand-items d-none d-lg-block">
                <a href="" title="My LinkedIn profile">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" title="My GitHub profile">
                    <i class="fab fa-github"></i>
                </a>
            </li>
        </ul>
        
    </div>

    <!-- Admin login button (big devices) -->
    <div class="navbar-special d-none d-lg-block">
        <ul class="navbar-nav">
            <li>
                <a href="/login" title="Admin login" class="admin-login-button">
                    <i class="fas fa-user-shield"></i>
                </a>
            </li> 
        </ul>
    </div>
        
</nav>