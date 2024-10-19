<?php
	require_once('inc/head.php');
	require_once('inc/header.php');
?>

<div class="breadcumb-wrapper" data-bg-src="<?php echo base_url('assets/img/aesthetic2.png'); ?>" style="background-size: cover;">
        <div class="container">
            <div class="breadcumb-content">
                <div class="breadcumb-content-inner">
                <h2 class="mobile-title theme-color">Blogs</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="<?php echo base_url()?>">Home</a></li>
                        <li>Blogs</li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div><!--==============================
Blog Area
==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <!-- Blog Card 1 -->
                <?php foreach ($d as $blog): ?>
                <div class="col-lg-6">
                    <div class="th-blog blog-single has-post-thumbnail">
                        <div class="blog-img">
                            <a href="<?php echo base_url('blog-detail/'.$blog['slug']); ?>">
                                <img loading="lazy" src="<?php echo base_url('uploads/blog/' . $blog['imgPath']); ?>" alt="<?php echo $blog['title']; ?>">
                            </a>                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fas fa-user"></i>By Dr. Shweta Ahuja</a>
                                <a href="#"><i class="fa-solid fa-calendar-days"></i><?php echo $blog['date']; ?></a>
                                <a href="<?php echo base_url('blog-detail/'.$blog['slug']); ?>"><i class="fa-solid fa-tags"></i>Skincare</a>
                            </div>
                            <h2 class="blog-title"><a href="<?php echo base_url('blog-detail/'.$blog['slug']); ?>"><?php echo $blog['title']; ?></a></h2>
                            <p class="blog-text"><?php echo $blog['title']; ?></p>
                            <a href="<?php echo base_url('blog-detail/'.$blog['slug']); ?>" class="th-btn">
                                READ MORE<i class="fa-solid fa-right-long ms-2"></i>
                            </a>                        
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
<?php
	require_once('inc/footer.php');
?>