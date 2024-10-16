<?php
	require_once('inc/head.php');
	require_once('inc/header.php');
?>

    <!-- BANNER SECTION -->
    <section class="w-100 float-left sub-banner-con position-relative">
        <div class="wrapper2">
            <div class="sub-banner-inner-box banner-inner-box position-relative text-center w-100 float-left">
                <h1 data-aos="fade-up" data-aos-duration="700">Blog</h1>
                <p data-aos="fade-up" data-aos-duration="700">Stay informed with the latest updates and insights on fertility treatments, patient care, and more.</p>
                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="700">
                    <ol class="breadcrumb d-inline-block mb-0">
                        <li class="breadcrumb-item d-inline-block"><a href="<?php echo base_url()?>">Home</a></li>
                        <li class="breadcrumb-item active text-white d-inline-block" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION -->
    <!--blog-sec-->
    <div class=" blog-posts blogpage-section w-100 float-left">
        <div class="container">
            <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div id="blog" class="col-xl-12">
                    <div class="row">
                    <?php foreach($d as $res): ?>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="blog-box twocolumn-blog float-left w-100 post-item mb-4" data-aos="fade-up"
                                data-aos-duration="700">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-image">
                                        <a href="#">
                                        <img alt="<?php echo $res['title']; ?>" src="<?php echo base_url().'uploads/blog/'.$res['imgPath']; ?>" style="width:100%;">
                                        </a>
                                    </div>
                                    <div class="lower-portion">
                                        <i class="fas fa-user"></i>
                                        <span class="text-size-14 text-mr">By : <?php echo $res['name']; ?></span>
                                        <!-- <i class="fas fa-tag"></i> -->
                                        <!-- <span class="text-size-14"><?php echo $res['title']; ?></span> -->
                                        <p class="mb-0 text-size-16"><?php echo $res['title']; ?>.</p>
                                    </div>
                                    <div class="button-portion loadone_twocol">
                                        <div class="date">
                                            <i class="fas fa-calendar-alt"></i>
                                            <span class="mb-0 text-size-14">Dec 20,2022</span>
                                        </div>
                                        <div class="button">
                                            <a class="mb-0 read_more text-decoration-none" href="<?php echo base_url('blog-detail/'.$res['slug']); ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog-sec-->
    

<?php
	require_once('inc/footer.php');
?>