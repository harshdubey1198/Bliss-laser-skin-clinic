<?php
    require_once('inc/head.php');
    require_once('inc/header.php');
?>
<div class="breadcumb-wrapper" data-bg-src="<?php echo base_url('assets/img/aesthetic2.png'); ?>" style="background-size: cover;">
<div class="container">
        <div class="breadcumb-content">
            <div class="breadcumb-content-inner">
                <h2 class="mobile-title theme-color">Blog Details</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="th-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php if (!empty($d)) { 
                    $blog = $d[0]; ?>
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <img loading="lazy" src="<?php echo base_url('uploads/blog/' . $blog['imgPath']); ?>" alt="<?php echo $blog['title']; ?>">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="<?php echo base_url('blog'); ?>"><i class="fas fa-user"></i> By <?php echo $blog['name']; ?></a>
                                <a href="<?php echo base_url('blog'); ?>"><i class="fa-solid fa-calendar-days"></i> <?php echo date('d F, Y', strtotime($blog['date'])); ?></a>
                                <a href="<?php echo base_url('blog'); ?>"><i class="fa-solid fa-tags"></i> <?php echo $blog['cat']; ?></a>
                            </div>
                            <h2 class="blog-title"><?php echo $blog['title']; ?></h2>
                            <p><?php echo nl2br($blog['msg']); ?></p>
                            <blockquote>
                                <p><?php echo "“" . $blog['title'] . "”"; ?></p>
                                <cite><?php echo $blog['name']; ?></cite>
                            </blockquote>
                        </div>
                        <div class="share-links clearfix">
                            <div class="row justify-content-between">
                                <div class="col-sm-auto">
                                    <div class="tagcloud">
                                        <a href="<?php echo base_url('blog'); ?>"><?php echo $blog['cat']; ?></a>
                                    </div>
                                </div>
                                <div class="col-sm-auto text-xl-end">
                                    <span class="share-links-title">Follow Us:</span>
                                    <ul class="social-links">
                                        <li><a href="https://www.facebook.com/BlissAesthetics/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/BlissSkinCareH1/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://wa.me/919877997097?text=Hi" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                        <li><a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <p>No blog details found.</p>
                <?php } ?>
            </div>
            

        </div>
    </div>
</section>
<?php
require_once('inc/footer.php');
?>
