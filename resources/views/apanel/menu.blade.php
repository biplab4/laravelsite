<!-- need to remove -->
<li class="nav-item">
    <a href="" class="nav-link {{ request()->routeIs('dashboard*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Overview</p>
    </a>
</li>

<li class="nav-item">
    <a href="" class="nav-link {{ request()->routeIs('category*') ? 'active' : '' }} ">
        <i class="nav-icon fas fa-list-ul"></i>
        <p>Rooms</p>
    </a>
</li>
<li class="nav-item">
    <a href="}" class="nav-link {{ request()->routeIs('article*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-newspaper"></i> 
        <p>Services</p>
    </a>
</li>

{{-- @can('viewAny', [App\Models\User::class, auth()->user()]) --}}
<li class="nav-item">
    <a href="" class="nav-link {{ request()->routeIs('user-management*') ? 'active' : '' }}">
        <i class="fas fa-users"></i>
        <p>Messages</p>
    </a>
</li>
{{-- @endcan --}}

<li class="nav-item">
    <a href="}" class="nav-link {{ request()->routeIs('about-us*') ? 'active' : '' }}">
        <i class="fas fa-address-card"></i>
        <p>About Us</p>
    </a>
</li>

<li class="nav-item">
    <a href="" class="nav-link {{ request()->routeIs('contact-us*') ? 'active' : '' }}">
        <i class="fas fa-id-badge"></i>
        <p>Contact Us</p>
    </a>
</li>
