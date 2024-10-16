

<?php
	require_once('inc/head.php');
	require_once('inc/header.php');
?>
    <!-- BANNER SECTION -->
    <section class="w-100 float-left sub-banner-con position-relative">
        <div class="wrapper2">
            <div class="sub-banner-inner-box banner-inner-box position-relative text-center w-100 float-left">
                <h2 data-aos="fade-up" data-aos-duration="700" style="color: white;"><?php echo $d[0]['title']; ?></h2>
                <p data-aos="fade-up" data-aos-duration="700"><?php echo $d[0]['name']; ?></p>
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
    <!-- Single Blog -->
    <section class="singleblog-section blogpage-section w-100 float-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="main-box">
                        <!-- Blog Image -->
                        <figure class="image1" data-aos="fade-up" data-aos-duration="700">
                            <img src="<?php echo base_url('uploads/blog/' . $d[0]['imgPath']); ?>" alt="<?php echo $d[0]['title']; ?>" class="img-fluid ">
                        </figure>

                        <!-- Blog Content -->
                        <div class="content1">
                            <h4 data-aos="fade-up" data-aos-duration="700"><?php echo $d[0]['title']; ?></h4>
                            <i class="fas fa-user" data-aos="fade-up" data-aos-duration="700"></i>
                            <span class="text-size-14 text-mr" data-aos="fade-up" data-aos-duration="700">By : <?php echo $d[0]['name']; ?></span>
                            <i class="fas fa-calendar-alt" data-aos="fade-up" data-aos-duration="700"></i>
                            <span class="mb-0 text-size-14" data-aos="fade-up" data-aos-duration="700"><?php echo date('M d, Y', strtotime($d[0]['date'])); ?></span>

                            <!-- Main Content Paragraph -->
                            <p class="text-size-14" data-aos="fade-up" data-aos-duration="700" style="text-align: justify;">
                                <?php echo nl2br($d[0]['msg']); ?>
                            </p>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
	require_once('inc/footer.php');
?>