<?php
	require_once('inc/head.php');
	require_once('inc/header.php');
?>

<!-- BANNER SECTION -->
<section class="w-100 float-left doctors-banner-sec sub-banner-con position-relative">
    <div class="wrapper2">
        <div class="sub-banner-inner-box banner-inner-box position-relative text-center w-100 float-left">
            <h1 data-aos="fade-up" data-aos-duration="700">Doctors</h1>
            <p data-aos="fade-up" data-aos-duration="700">Ruis aute irure dolor in reprehenderit in voluptate velit essecillum <br> dolore fugiat nulla pariatur</p>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="700">
                <ol class="breadcrumb d-inline-block mb-0">
                    <li class="breadcrumb-item d-inline-block"><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active text-white d-inline-block" aria-current="page">Doctors</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- BANNER SECTION -->

<!-- TEAM SECTION -->
<section class="team-section bg-design w-100 float-left padding-top padding-bottom">
    <div class="container">
        <div class="generic-title text-center">
            <span class="sub-txt d-block" data-aos="fade-up" data-aos-duration="700">OUR TEAM</span>
            <h2 class="mb-0" data-aos="fade-up" data-aos-duration="700">Meet Our Professional Team</h2>
        </div>
        <div class="team-members-con d-flex justify-content-center">
            <ul class="list-unstyled mb-0 d-flex flex-wrap justify-content-center">
                <!-- Dr. Harinder Kaur Oberoi -->
                <li class="text-center m-3">
                    <figure data-aos="fade-up" data-aos-duration="700">
                        <img src="<?php echo base_url(); ?>assets/images/doctor/3rddoctor.png" alt="Dr. Harinder Kaur Oberoi" class="img-fluid rounded-circle">
                    </figure>
                    <h4 data-aos="fade-up" data-aos-duration="700">Dr. Harinder Kaur Oberoi</h4>
                    <span class="d-block" data-aos="fade-up" data-aos-duration="700">Gynaecologist & Infertility Specialist</span>
                    <p data-aos="fade-up" data-aos-duration="700">Expert in IVF, fertility treatments, and women's healthcare.</p>
                    <div class="social-links">
                        <ul class="list-unstyled mb-0 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="700">
                            <li class="d-flex justify-content-center align-items-center m-2"><a href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="d-flex justify-content-center align-items-center m-2"><a href="https://twitter.com/login"><i class="fab fa-twitter"></i></a></li>
                            <li class="d-flex justify-content-center align-items-center m-2"><a href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </li>
                <!-- Dr. Baldish Singh Oberoi -->
                <li class="text-center m-3">
                    <figure data-aos="fade-up" data-aos-duration="700">
                        <img src="<?php echo base_url(); ?>assets/images/doctor/2nddoctor.png" alt="Dr. Baldish Singh Oberoi" class="img-fluid rounded-circle">
                    </figure>
                    <h4 data-aos="fade-up" data-aos-duration="700">Dr. Baldish Singh Oberoi</h4>
                    <span class="d-block" data-aos="fade-up" data-aos-duration="700">Orthopedic Surgeon</span>
                    <p data-aos="fade-up" data-aos-duration="700">Specializes in pediatric orthopedics, limb lengthening, and deformity correction.</p>
                    <div class="social-links">
                        <ul class="list-unstyled mb-0 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="700">
                            <li class="d-flex justify-content-center align-items-center m-2"><a href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="d-flex justify-content-center align-items-center m-2"><a href="https://twitter.com/login"><i class="fab fa-twitter"></i></a></li>
                            <li class="d-flex justify-content-center align-items-center m-2"><a href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </li>
                <!-- Dr. Harsharan Singh Oberoi -->
                <li class="text-center m-3">
                    <figure data-aos="fade-up" data-aos-duration="700">
                        <img src="<?php echo base_url(); ?>assets/images/doctor/imagedoctor.png" alt="Dr. Harsharan Singh Oberoi" class="img-fluid rounded-circle">
                    </figure>
                    <h4 data-aos="fade-up" data-aos-duration="700">Dr. Harsharan Singh Oberoi</h4>
                    <span class="d-block" data-aos="fade-up" data-aos-duration="700">Orthopedic Surgeon</span>
                    <p data-aos="fade-up" data-aos-duration="700">Expert in advanced orthopedic surgeries and rehabilitation for cerebral palsy.</p>
                    <div class="social-links">
                        <ul class="list-unstyled mb-0 d-flex justify-content-center" data-aos="fade-up" data-aos-duration="700">
                            <li class="d-flex justify-content-center align-items-center m-2"><a href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="d-flex justify-content-center align-items-center m-2"><a href="https://twitter.com/login"><i class="fab fa-twitter"></i></a></li>
                            <li class="d-flex justify-content-center align-items-center m-2"><a href="https://www.linkedin.com/login"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- TEAM SECTION -->

<!-- PATIENTS REVIEWS SECTION -->
<section class="patients-reviews-sec w-100 float-left padding-top padding-bottom">
    <div class="container">
        <div class="generic-title text-center" data-aos="fade-up" data-aos-duration="700">
            <span class="d-block sub-txt">OUR TESTIMONIALS</span>
            <h2 class="mb-0">What Patients are Saying!</h2>
        </div>
        <div id="owl-carouselone" class="owl-carousel owl-theme" data-aos="fade-up" data-aos-duration="700">
            <!-- Testimonial Item 1 -->
            <div class="item">
                <div class="review-box">
                    <figure>
                        <img src="<?php echo base_url(); ?>assets/images/quote-img.png" alt="quote-img">
                    </figure>
                    <p>"We had been trying to conceive for years without success, and Dr. Harinder Kaur Oberoi's expertise at Oberoi IVF Centre changed everything for us. Today, we are proud parents, and we couldn't be more grateful!"</p>
                    <div class="patient-details d-flex">
                        <div class="patient-img">
                            <figure class="mb-0">
                                <img src="<?php echo base_url(); ?>assets/images/patient-img1.png" alt="patient-img1">
                            </figure>
                        </div>
                        <div class="patient-rating">
                            <figure>
                                <img src="<?php echo base_url(); ?>assets/images/rating-stars.png" alt="rating-stars">
                            </figure>
                            <h5>Sarah & John Doe</h5>
                            <span class="d-block">Happy Parents</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- More testimonials... -->
        </div>
    </div>
</section>
<!-- PATIENTS REVIEWS SECTION -->

<!-- COUNTER SECTION -->
<div class="counter-section w-100 float-left">
        <div class="container">
            <div class="counter-inner-sec">
                <ul class="list-unstyled mb-0">
                    <li data-aos="fade-up" data-aos-duration="700">
                        <figure>
                            <img src="<?php echo base_url()?>assets/images/counter-img1.png" alt="counter-img1">
                        </figure>
                        <div class="counter-box position-relative">
                            <div class="count d-inline-block">385</div>
                            <div class="plus d-inline-block"><span>+</span></div>
                        </div>
                        <span class="d-block client-status">Fertility Experts</span>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="700">
                        <figure>
                            <img src="<?php echo base_url()?>assets/images/counter-img2.png" alt="counter-img2">
                        </figure>
                        <div class="counter-box position-relative">
                            <div class="count d-inline-block">859</div>
                            <div class="plus d-inline-block"><span>+</span></div>
                        </div>
                        <span class="d-block client-status">Happy Couples</span>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="700">
                        <figure>
                            <img src="<?php echo base_url()?>assets/images/counter-img3.png" alt="counter-img3">
                        </figure>
                        <div class="counter-box position-relative">
                            <div class="count d-inline-block">28</div>
                            <div class="plus d-inline-block"><span>+</span></div>
                        </div>
                        <span class="d-block client-status">Years of Experience</span>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="700">
                        <figure>
                            <img src="<?php echo base_url()?>assets/images/counter-img4.png" alt="counter-img4">
                        </figure>
                        <div class="counter-box position-relative">
                            <div class="count d-inline-block">852</div>
                            <div class="plus d-inline-block"><span>+</span></div>
                        </div>
                        <span class="d-block client-status">Successful Procedures</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!-- COUNTER SECTION -->


<?php
	require_once('inc/footer.php');
?>
