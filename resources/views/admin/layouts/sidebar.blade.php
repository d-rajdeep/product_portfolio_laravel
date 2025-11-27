<ul class="nav">
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
            <i class="icon-grid menu-icon"></i>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>

{{-- //product list// --}}

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('product.*') ? 'active' : '' }}" href="{{ route('product.index')}}">
            <i class="bi bi-image menu-icon"></i>
            <span class="menu-title">Product List</span>
        </a>
    </li>

    {{-- Logo -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('logos.*') ? 'active' : '' }}" href="{{ route('logos.index') }}">
            <i class="bi bi-image menu-icon"></i>
            <span class="menu-title">Logo</span>
        </a>
    </li>

    <!-- Slider -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('sliders.*') ? 'active' : '' }}" href="{{ route('sliders.index') }}">
            <i class="bi bi-images menu-icon"></i>
            <span class="menu-title">Sliders</span>
        </a>
    </li>

    <!-- Feature -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('features.*') ? 'active' : '' }}" href="{{ route('features.index') }}">
            <i class="bi bi-ui-checks menu-icon"></i>
            <span class="menu-title">Features</span>
        </a>
    </li>

    <!-- About -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('about.*') ? 'active' : '' }}" href="{{ route('about.index') }}">
            <i class="bi bi-textarea-resize menu-icon"></i>
            <span class="menu-title">About</span>
        </a>
    </li>

    <!-- Services -->
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}"
            href="{{ route('services.index') }}">
            <i class="bi bi-ui-radios-grid menu-icon"></i>
            <span class="menu-title">Services</span>
        </a>
    </li>

    <!-- Portfolio -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('portfolios.index') }}">
            <i class="bi bi-segmented-nav menu-icon"></i>
            <span class="menu-title">Portfolio</span>
        </a>
    </li>

    <!-- Testimonial -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('testimonials.index') }}">
            <i class="bi bi-list-stars menu-icon"></i>
            <span class="menu-title">Testimonial</span>
        </a>
    </li>

    <!-- Contact -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('contact.index') }}">
            <i class="bi bi-person-rolodex menu-icon"></i>
            <span class="menu-title">Contact Info</span>
        </a>
    </li>

    <!-- Contact Message -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.contact.messages') }}">
            <i class="bi bi-chat-left-dots menu-icon"></i>
            <span class="menu-title">Contact Messages</span>
        </a>
    </li> --}}

    <!-- Custom -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="bi bi-code-slash menu-icon"></i>
            <span class="menu-title">Custom CSS</span>
        </a>
    </li>

    <!-- Settings -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="bi bi-gear menu-icon"></i>
            <span class="menu-title">Settings</span>
        </a>
    </li>
</ul>
