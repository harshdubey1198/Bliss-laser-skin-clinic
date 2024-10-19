<?php
	require_once('inc/head.php');
	require_once('inc/header.php');
?>
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bgforbreadcrumb2.jpg">
        <div class="container">
            <div class="breadcumb-content">             
                 <div class="breadcumb-content-inner">
                <h2 class="breadcumb-title">Contact Us</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="<?php echo base_url()?>">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>              
            </div>
            </div>
        </div>
    </div><!--==============================
Contact Area  
==============================-->
    <div class="space" id="contact-sec">
        <div class="container">
            <div class="row gy-40">
                <div class="col-lg-6 col-xl-5">
                    <div class="contact-info-wrap me-xl-4">
                        <div class="title-area mb-20">
                            <h3 class="sec-title colorwhite">Our Contact Information</h3>
                            <p class="smokewhite">Have a inquiry or some feedback for us? Fill out the form below to contact our team.</p>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <i class="fa-light fa-location-dot"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Our Address</h3>
                                <span class="contact-info_text">C210P, 8 B, Industrial Area,  <br/>Sec 74, SAS Nagar <br/> Punjab 160055</span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <i class="fa-light fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Phone Number</h3>
                                <span class="contact-info_text">
                                    Mobile:
                                    <a href="tel: +919877997097 ">  +91-9877997097  </a>
                                </span>
                                <span class="contact-info_text">
                                    Mobile:
                                    <a href="tel: +919041001610 ">  +91-9041001610  </a>
                                </span>
                                <span class="contact-info_text">
                                    Email:
                                    <a href="mailto:info@Bliss.com"> info@Bliss.com</a>
                                </span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <i class="fa-light fa-clock"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Hours of Operation</h3>
                                <span class="contact-info_text">
                                    Monday - Saturday: 9AM - 7:30PM
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6">
                    <div class="map-sec">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d962.5453961549323!2d76.68594303867985!3d30.707719409580342!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fed375250be1d%3A0x2c3d20be5a6a8644!2sBliss%20Aesthetic%20Skin%20Laser%20Clinic%20-%20Dr.%20Shweta!5e1!3m2!1sen!2sus!4v1728628054906!5m2!1sen!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
                    </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact-form-wrapper">
                        <form action="mail.php" method="POST" class="contact-form ajax-contact">
                            <h2 class="form-title text-center">Get In Touch</h2>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <i class="fa-sharp fa-light fa-user"></i>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <i class="fa-sharp fa-regular fa-envelope"></i>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <i class="fa-regular fa-tag"></i>
                                    <select name="subject" id="subject" class="form-select nice-select">
                                        <option value="" disabled selected hidden>Select Subject</option>
                                        <option value="Botox Treatment">Botox Treatment</option>
                                        <option value="Tatto Removal">Tatto Removal</option>
                                        <option value="Cosmetology">Cosmetology</option>
                                        <option value="Hydrafacial Treatment">Hydrafacial Treatment</option>
                                        <option value="Chemical Peels">Chemical Peels</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <i class="fal fa-comment"></i>
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="form-btn col-12">
                                    <button class="th-btn fw-btn">Send Messages<i class="fa-solid fa-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once('inc/footer.php');?>