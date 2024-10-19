<?php
	require_once('inc/head.php');
	require_once('inc/header.php');
?>

<div class="breadcumb-wrapper " data-bg-src="assets/img/bgforbreadcrumb2.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <div class="breadcumb-content-inner">
                <h2 class="mobile-title theme-color">Photo Gallery</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="<?php echo base_url()?>">Home</a></li>
                        <li>Photo Gallery</li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div><!--==============================
Gallery Area  
==============================-->
    <div class="overflow-hidden space" id="gallery-sec">
        <div class="container">
            <!-- <div class="filter-menu style2 indicator-active filter-menu-active">
                <button data-filter="*" class="tab-btn smokewhite active" type="button">ALL</button>
                <button data-filter=".cat1" class="tab-btn smokewhite" type="button">Hydrafacial</button>
                <button data-filter=".cat2" class="tab-btn smokewhite" type="button">Botox</button>
                <button data-filter=".cat3" class="tab-btn smokewhite" type="button">Carbon Laser</button>
                <button data-filter=".cat4" class="tab-btn smokewhite" type="button"> Cosmetology</button>
                <button data-filter=".cat5" class="tab-btn smokewhite" type="button"> Facial Wrinkles</button>
                <button data-filter=".cat6" class="tab-btn smokewhite" type="button"> Chemical Peels</button>
                <button data-filter=".cat7" class="tab-btn smokewhite" type="button"> Tattoo Removal</button>
                <button data-filter=".cat8" class="tab-btn smokewhite" type="button"> Permanent Makeup</button>
            </div> -->
            <div class="row gallery-row filter-active">
                <div class="col-md-6 col-xl-auto filter-item cat1 cat2 cat5 cat4 cat3">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img loading="lazy" src="assets/img/gallery/botox-491x755-1.png" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/botox-491x755-1.png" class="icon-btn popup-image">
                                <i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Body Massage</h2>
                            <p class="gallery-text">Massage</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat5 cat9 cat8 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img loading="lazy" src="assets/img/gallery/carbonlaser-699x400.png" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/carbonlaser-699x400.png" class="icon-btn popup-image">
                                <i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Relaxing </h2>
                            <p class="gallery-text">Relaxing </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat7 cat6">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img loading="lazy" src="assets/img/gallery/Cosmetology-387x325.png" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/Cosmetology-387x325.png" class="icon-btn popup-image">
                                <i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Skin Care</h2>
                            <p class="gallery-text">Skin Care</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat9 cat7 cat4">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img loading="lazy" src="assets/img/gallery/facialwrinkles-282x325-1.png" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/facialwrinkles-282x325-1.png" class="icon-btn popup-image">
                                <i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Beauty Spa</h2>
                            <p class="gallery-text">Beauty Spa</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat1 cat3 cat4 cat5">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img loading="lazy" src="assets/img/gallery/carbonlaser-699x400-1.png" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/carbonlaser-699x400-1.png" class="icon-btn popup-image">
                                <i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Hair Cut</h2>
                            <p class="gallery-text">Hair Cut</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat6 cat8 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img loading="lazy" src="assets/img/gallery/botox-491x755.png" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/botox-491x755.png" class="icon-btn popup-image">
                                <i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Nail Art</h2>
                            <p class="gallery-text">Nail Art</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat2 cat10">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img loading="lazy" src="assets/img/gallery/facialwrinkles-282x325-2.png" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/facialwrinkles-282x325-2.png" class="icon-btn popup-image">
                                <i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Hair Color</h2>
                            <p class="gallery-text">Hair Color</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat10 cat5">
                    <div class="gallery-card wow fadeInUp">
                        <div class="gallery-img">
                            <img loading="lazy" src="assets/img/gallery/Cosmetology-387x325-1.png" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/Cosmetology-387x325-1.png" class="icon-btn popup-image">
                                <i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Waxing</h2>
                            <p class="gallery-text">Waxing</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> 
<?php
	require_once('inc/footer.php');
?>
