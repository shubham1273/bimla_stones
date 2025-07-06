<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <h2 style="color: white;">Bimla Stones</h2>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>

    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#homeSections" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                        <p>Home</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="homeSections">
                        <ul class="nav nav-collapse">
                            <li><a href="{{ route('homepage') }}"><span class="sub-item">1st Section</span></a></li>
                            <li><a href="{{ route('vidoes') }}"><span class="sub-item">2nd Section</span></a></li>
                            <li><a href="{{ route('process') }}"><span class="sub-item">3rd Section</span></a></li>
                            <li><a href="{{ route('whoWeare') }}"><span class="sub-item">4th Section</span></a></li>
                            <li><a href="{{ route('specialization') }}"><span class="sub-item">5th Section</span></a></li>
                            <li><a href="{{ route('offer') }}"><span class="sub-item">6th Section</span></a></li>
                            <li><a href="{{ route('choose') }}"><span class="sub-item">7th Section</span></a></li>
                            <li><a href="{{ route('clients.index') }}"><span class="sub-item">Clients</span></a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#productSections" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                        <p>Products</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="productSections">
                        <ul class="nav nav-collapse">
                            <li><a href="{{ route('homepage') }}"><span class="sub-item">1st Section</span></a></li>
                            <li><a href="components/buttons.html"><span class="sub-item">2nd Section</span></a></li>
                            <li><a href="components/gridsystem.html"><span class="sub-item">3rd Section</span></a></li>
                            <li><a href="components/panels.html"><span class="sub-item">4th Section</span></a></li>
                            <li><a href="components/notifications.html"><span class="sub-item">5th Section</span></a></li>
                            <li><a href="components/sweetalert.html"><span class="sub-item">6th Section</span></a></li>
                            <li><a href="components/font-awesome-icons.html"><span class="sub-item">7th Section</span></a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#gallerySections" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                        <p>Gallery</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="gallerySections">
                        <ul class="nav nav-collapse">
                            <li><a href="{{ route('gallery.index') }}"><span class="sub-item">1st Section</span></a></li>
                            <li><a href="{{ route('gallery2') }}"><span class="sub-item">2nd Section</span></a></li>
                            <li><a href="{{ route('gallery3') }}"><span class="sub-item">3rd Section</span></a></li>
                            <li><a href="{{ route('gallery4') }}"><span class="sub-item">4th Section</span></a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#gallerySections" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                        <p>Contact Us</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="gallerySections">
                        <ul class="nav nav-collapse">
                            <li><a href="{{ route('gallery.index') }}"><span class="sub-item">1st Section</span></a></li>
                            <li><a href="{{ route('gallery2') }}"><span class="sub-item">2nd Section</span></a></li>
                            <li><a href="{{ route('gallery3') }}"><span class="sub-item">3rd Section</span></a></li>
                            <li><a href="{{ route('founders.index') }}"><span class="sub-item">Founders</span></a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="{{ route('blogs.index') }}">
                        <i class="fas fa-newspaper"></i>
                        <p>Blogs</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
