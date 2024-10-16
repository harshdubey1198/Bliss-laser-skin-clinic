<?php
	require_once('inc/head.php');
	require_once('inc/header.php');
?>
<!-- BANNER SECTION -->
<section class="w-100 float-left contact-banner-sec sub-banner-con position-relative">
    <div class="wrapper2">
        <div class="sub-banner-inner-box banner-inner-box position-relative text-center w-100 float-left">
            <h1 data-aos="fade-up" data-aos-duration="700">Contact Us</h1>
            <p data-aos="fade-up" data-aos-duration="700">Reach out to us for any inquiries or assistance with fertility treatments</p>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-duration="700">
                <ol class="breadcrumb d-inline-block mb-0">
                    <li class="breadcrumb-item d-inline-block"><a href="<?php echo base_url()?>">Home</a></li>
                    <li class="breadcrumb-item active text-white d-inline-block" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- BANNER SECTION -->

<!-- CONTACT DETAILS SECTION -->
<section class="contact-details-section bg-design w-100 float-left padding-top padding-bottom position-relative">
    <div class="container">
        <div class="generic-title text-center">
            <span class="d-block sub-txt" data-aos="fade-up" data-aos-duration="700">GET IN TOUCH</span>
            <h2 data-aos="fade-up" data-aos-duration="700">Feel Free To Contact</h2>
        </div>
        <div class="contact-links-main-sec">
            <!-- Location -->
            <div class="contact-links-box">
                <div class="contact-img-box" data-aos="fade-up" data-aos-duration="700">
                    <figure>
                        <img src="<?php echo base_url()?>assets/images/contact-img1.png" alt="Our Location">
                    </figure>
                </div>
                <div class="contact-link">
                    <h5 data-aos="fade-up" data-aos-duration="700">Our Location</h5>
                    <p data-aos="fade-up" data-aos-duration="700"> Oberoi IVF Centre 
                         8 Gujral Nagar, Opposite Mann Scan Centre, Jalandhar, Punjab, India</p>
                    <a class="contact-btn" href="https://goo.gl/maps/direction" data-aos="fade-up" data-aos-duration="700">Get Directions<i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <!-- Email Us -->
            <div class="contact-links-box">
                <div class="contact-img-box" data-aos="fade-up" data-aos-duration="700">
                    <figure>
                        <img src="<?php echo base_url()?>assets/images/contact-img2.png" alt="Email Us">
                    </figure>
                </div>
                <div class="contact-link">
                    <h5 data-aos="fade-up" data-aos-duration="700">Email Us</h5>
                    <ul class="list-unstyled">
                        <li data-aos="fade-up" data-aos-duration="700"><a href="mailto:drhkoberoi@yahoo.in">drhkoberoi@yahoo.in</a></li>
                    </ul>
                    <a class="contact-btn" href="mailto:drhkoberoi@yahoo.in" data-aos="fade-up" data-aos-duration="700">Send Email<i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <!-- Phone -->
            <div class="contact-links-box">
                <div class="contact-img-box" data-aos="fade-up" data-aos-duration="700">
                    <figure>
                        <img src="<?php echo base_url()?>assets/images/contact-img3.png" alt="Phone">
                    </figure>
                </div>
                <div class="contact-link">
                    <h5 data-aos="fade-up" data-aos-duration="700">Phone</h5>
                    <ul class="list-unstyled">
                        <li data-aos="fade-up" data-aos-duration="700"><a href="tel:+919888030727">+91-9888030727</a></li>
                        <li data-aos="fade-up" data-aos-duration="700"><a href="tel:01815008400">0181-5008400</a></li>
                    </ul>
                    <a class="contact-btn" href="tel:+919888030727" data-aos="fade-up" data-aos-duration="700">Call Us<i class="fas fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT DETAILS SECTION -->

<section class="w-100 float-left contact-con position-relative">
    <div class="dots-img position-relative">
        <div class="padding-top padding-bottom contact-inner-con position-relative">
            <div class="container">
                <div class="contact-form" data-aos="fade-up" data-aos-duration="700">
                    <span class="sub-txt d-block">Request a consultation</span>
                    <h2>Make an Appointment</h2>
                    <form class="form-box" method="post" id="contactpage">
                        <ul class="list-unstyled" data-aos="fade-up" data-aos-duration="700">
                            <li>
                                <input type="text" name="fname" id="fname" placeholder="Your Name">
                            </li>
                            <li>
                                <input type="tel" name="phone" id="phone" placeholder="Phone No">
                            </li>
                            <li>
                                <input type="email" placeholder="Your Email" name="email" id="email">
                            </li>
                            <li>
                                <input placeholder="Date" type="text" onfocus="(this.type = 'date')" id="date">
                            </li>
                            <li>
                                <textarea placeholder="Message" name="subject" id="subject"></textarea>
                            </li>
                        </ul>
                        <div class="submit-btn" data-aos="fade-up" data-aos-duration="700">
                            <button type="submit" id="submit">
                                Book an Appointment
                                <figure class="mb-0">
                                    <img src="<?php echo base_url(); ?>assets/images/top-arrow.png" alt="top-arrow">
                                </figure>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MAP SECTION -->
<div class="responsive-map w-100 float-left padding-top padding-bottom">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3408.2889678026468!2d75.56414007609267!3d31.32339175684676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5b27bd8b109b%3A0x8fd68561eaa3994e!2sOberoi%20IVF!5e0!3m2!1sen!2sin!4v1728382191399!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- MAP SECTION -->


<?php require_once('inc/footer.php');?>