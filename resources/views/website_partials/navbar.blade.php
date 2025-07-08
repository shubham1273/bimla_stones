<li class="nav-item">
    <a class="nav-link px-0 fw-normal {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link px-0 fw-normal {{ request()->routeIs('products') ? 'active' : '' }}" href="{{ route('products') }}">Products</a>
</li>
<li class="nav-item">
    <a class="nav-link px-0 fw-normal {{ request()->routeIs('manufacture_process') ? 'active' : '' }}" href="{{ route('manufacture_process') }}">Manufacture process</a>
</li>
<li class="nav-item">
    <a class="nav-link px-0 fw-normal {{ request()->routeIs('about_us') ? 'active' : '' }}" href="{{ route('about_us') }}">About us</a>
</li>
<li class="nav-item">
    <a class="nav-link px-0 fw-normal {{ request()->routeIs('blog') || request()->routeIs('blog_detail') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
</li>
<li class="nav-item">
    <a class="nav-link px-0 fw-normal {{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a>
</li>
<li class="nav-item">
    <a class="nav-link px-0 fw-normal {{ request()->routeIs('contact_us') ? 'active' : '' }}" href="{{ route('contact_us') }}">Contact us</a>
</li>
