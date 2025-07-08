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

                <!-- Dashboard -->
                <li class="nav-item active">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Home Sections -->
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
                            <li><a href="{{ route('quotes.index') }}"><span class="sub-item">Get a Quote Request</span></a></li>
                            <li><a href="{{ route('get_in_touch.index') }}"><span class="sub-item">Get in touch Request</span></a></li>
                        </ul>
                    </div>
                </li>

                <!-- Product Sections -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#productSections" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                        <p>Products</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="productSections">
                        <ul class="nav nav-collapse">
                            <li><a href="{{ route('products.index') }}"><span class="sub-item">1st Section</span></a></li>
                            <li><a href="{{ route('product-categories.index') }}"><span class="sub-item">2nd Section</span></a></li>
                            <li><a href="{{ route('product-carousel.index') }}"><span class="sub-item">3rd Section</span></a></li>
                            <li><a href="{{ route('product-categories.index2') }}"><span class="sub-item">4th Section</span></a></li>
                            <li><a href="{{ route('product-vision.index') }}"><span class="sub-item">5th Section</span></a></li>
                            <li><a href="{{ route('product-section-6') }}"><span class="sub-item">6th Section</span></a></li>
                            <li><a href="components/sweetalert.html"><span class="sub-item">Extra Section</span></a></li>
                        </ul>
                    </div>
                </li>

                <!-- About Us -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#about_us" aria-expanded="false">
                        <i class="fas fa-address-book"></i>
                        <p>About Us</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="about_us">
                        <ul class="nav nav-collapse">
                            <li><a href="{{ route('about.section_1') }}"><span class="sub-item">1st Section</span></a></li> 
                            <li><a href="{{ route('about.section_2') }}"><span class="sub-item">2nd Section</span></a></li>
                            <li><a href="{{ route('about.section_3') }}"><span class="sub-item">3rd Section</span></a></li>
                            <li><a href="{{ route('about.section_4') }}"><span class="sub-item">4th Section</span></a></li>
                            <li><a href="{{ route('about.section_5') }}"><span class="sub-item">5th Section</span></a></li>
                            <li><a href="{{ route('about.section_6') }}"><span class="sub-item">6th Section</span></a></li>
                            <li><a href="{{ route('about.section_7') }}"><span class="sub-item">7th Section</span></a></li>
                            <li><a href="{{ route('about.leadership') }}"><span class="sub-item">Our Leadership</span></a></li>
                        </ul>
                    </div>
                </li>

                <!-- Gallery Sections -->
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

                <!-- Contact Us -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#contactSections" aria-expanded="false">
                        <i class="fas fa-address-book"></i>
                        <p>Contact Us</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="contactSections">
                        <ul class="nav nav-collapse">
                            <li><a href="{{ route('contactUs') }}"><span class="sub-item">1st Section</span></a></li>
                            <li><a href="{{ route('founders.index') }}"><span class="sub-item">Founders</span></a></li>
                        </ul>
                    </div>
                </li>

                <!-- Process -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#processSections" aria-expanded="false">
                        <i class="fas fa-address-book"></i>
                        <p>Process</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="processSections">
                        <ul class="nav nav-collapse">
                            <li><a href="{{ route('process.section_1') }}"><span class="sub-item">1st Section</span></a></li> 
                            <li><a href="{{ route('process.section_2') }}"><span class="sub-item">2nd Section</span></a></li>
                            <li><a href="{{ route('process.section_3') }}"><span class="sub-item">3rd Section</span></a></li>
                            <li><a href="{{ route('process.section_4') }}"><span class="sub-item">4th Section</span></a></li>
                        </ul>
                    </div>
                </li>

                <!-- Blogs -->
                <li class="nav-item">
                    <a href="{{ route('blogs.index') }}">
                        <i class="fas fa-newspaper"></i>
                        <p>Blogs</p>
                    </a>
                </li>

                <!-- General Settings -->
                <li class="nav-item">
                    <a href="{{ route('settings.index') }}">
                        <i class="fas fa-cog"></i>
                        <p>General Settings</p>
                    </a>
                </li>

                <!-- Career Sections -->
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#careerSections" aria-expanded="false">
                        <i class="fas fa-briefcase"></i>
                        <p>Career</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="careerSections">
                        <ul class="nav nav-collapse">
                            <li><a href="{{ route('career') }}"><span class="sub-item">1st Section</span></a></li>
                            <li><a href="{{ route('career2') }}"><span class="sub-item">2nd Section</span></a></li>
                            <li><a href="{{ route('jobs.index') }}"><span class="sub-item">Create Job</span></a></li>
                            <li><a href="{{ route('faqs.index') }}"><span class="sub-item">Faqs</span></a></li>
                            <li><a href="{{ route('job.index') }}"><span class="sub-item">Job Applications</span></a></li>
                        </ul>
                    </div>
                </li>

                 <!-- General Settings -->
                 <li class="nav-item">
                    <a href="{{ route('contacts.index') }}">
                        <i class="fas fa-cog"></i>
                        <p>Contact Request</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
