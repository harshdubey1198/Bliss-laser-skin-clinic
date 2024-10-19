<body>
    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader">
        <button class="th-btn style3 preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner">
            <img loading="lazy" src="<?php echo base_url('assets/img/Logo/Logo.png'); ?>" alt="Bliss" style="height:85px; width:220px;">
            <span class="loader"></span>
        </div>
    </div>

    <!--==============================
    Mobile Menu
  ==============================-->
    <div class="th-menu-wrapper">
        <div class="th-menu-area">
            <div class="mobile-logo">
                <a href="<?php echo base_url(); ?>"><img loading="lazy" src="<?php echo base_url('assets/img/Logo/Logo.png'); ?>" alt="Bliss"></a>
                <div class="close-menu">
                    <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url('about-us'); ?>">About us</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Our Services</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo base_url('service'); ?>">All Services</a></li>
                            <li><a href="<?php echo base_url('hydrafacial-treatment'); ?>">Hydrafacial Treatment</a></li>
                            <li><a href="<?php echo base_url()?>botox-treatment">Botox Treatment</a></li>
                            <li><a href="<?php echo base_url('carbon-laser-facial'); ?>">Carbon laser facial</a></li>
                            <li><a href="<?php echo base_url('cosmetology'); ?>">Cosmetology</a></li>
                            <li><a href="<?php echo base_url('facial-wrinkles-removal'); ?>">Facial Wrinkles Removal</a></li>
                            <li><a href="<?php echo base_url('chemical-peels'); ?>">Chemical Peels</a></li>
                            <li><a href="<?php echo base_url('tattoo-removal'); ?>">Tattoo Removal</a></li>
                            <li><a href="<?php echo base_url('permanent-makeup'); ?>">Permanent Makeup</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('gallery'); ?>">Gallery</a></li>
                    <li><a href="<?php echo base_url('blog'); ?>">Blogs</a></li>
                    <li><a href="<?php echo base_url('contact'); ?>">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Header Area
  ==============================-->
    <header class="th-header header-layout1">
        <div class="header-top">
            <div class="container th-container">
                <div class="row justify-content-end justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-phone"></i><a href="tel:+919877997097">+91-9877997097</a></li>
                                <li><i class="fa-light fa-clock"></i>Mon - Sat: 9:00 AM - 7:30 PM Sunday Off</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="social-links">
                            <span class="social-title">Follow Us:</span>
                            <a href="https://www.facebook.com/BlissAesthetics/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/BlissSkinCareH1/"><i class="fab fa-twitter"></i></a>
                            <a href="https://wa.me/919877997097?text=Hi"><i class="fab fa-whatsapp"></i></a>
                            <a href="https://in.pinterest.com/blisslaserskinclinic/"><i class="fa-brands fa-pinterest"></i></a>
                            <a href="https://www.instagram.com/blissskincare_clinic/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="menu-area">
                <div class="container th-container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="<?php echo base_url(); ?>">
                                    <img loading="lazy" src="<?php echo base_url('assets/img/Logo/Logo.png'); ?>" alt="Bliss" style="height:85px; width:220px;">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto me-xl-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li><a href="<?php echo base_url('about-us'); ?>">About Us</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Our Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo base_url('service'); ?>">All Services</a></li>
                                            <li><a href="<?php echo base_url('hydrafacial-treatment'); ?>">Hydrafacial Treatment</a></li>
                                            <li><a href="<?php echo base_url(); ?>botox-treatment">Botox Treatment</a></li>
                                            <li><a href="<?php echo base_url('carbon-laser-facial'); ?>">Carbon laser facial</a></li>
                                            <li><a href="<?php echo base_url('cosmetology'); ?>">Cosmetology</a></li>
                                            <li><a href="<?php echo base_url('facial-wrinkles-removal'); ?>">Facial Wrinkles Removal</a></li>
                                            <li><a href="<?php echo base_url('chemical-peels'); ?>">Chemical Peels</a></li>
                                            <li><a href="<?php echo base_url('tattoo-removal'); ?>">Tattoo Removal</a></li>
                                            <li><a href="<?php echo base_url('permanent-makeup'); ?>">Permanent Makeup</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url('gallery'); ?>">Gallery</a></li>
                                    <li><a href="<?php echo base_url('blog'); ?>">Blogs</a></li>
                                    <li><a href="<?php echo base_url('contact'); ?>">Contact Us</a></li>
                                </ul>
                            </nav>
                            <button class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <a href="<?php echo base_url('contact'); ?>" class="th-btn">Appointment Now <i class="fa-regular fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo-bg"></div>
            </div>
        </div>
    </header>
    <!--==============================
	Header Area
==============================-->
