<?php
$basename = basename($_SERVER['PHP_SELF']);
$domain = str_replace("$basename", "", $_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html>

<head>
    <title>SaurabhBlogs.info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php $domain;?>css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php $domain;?>css/style.css?v=<?php echo time(); ?>">
</head>

<body>

 <!-- Page Loader Start -->
 <div class="page-loader"></div>
    <!-- Page Loader End -->

    <!-- header start -->
    <header class="header">
        <div class="container">
            <div class="row v-center nav-space">
                <div class="header-item item-left">
                    <div class="logo">
                        <a href="index.php">SaurabhBlogs<span>.info</span></a>
                    </div>
                </div>
                <!-- menu start here -->
                <div class="header-item item-center">
                    <div class="menu-overlay">
                    </div>
                    <?php $page=basename($_SERVER['PHP_SELF']); ?>
                    <nav class="menu">
                        <div class="mobile-menu-head">
                            <div class="go-back"><i class="fa fa-angle-left"></i></div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="menu-main">
                            <li>
                                <a class="<?php if($page == 'index.php'):echo 'active-nav'; endif; ?>" href="index.php">Home</a>
                            </li>
                            <li>
                                <a class="<?php if($page == 'about.php'):echo 'active-nav'; endif; ?>" href="about">About</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a 
                                class="<?php 
                                if($page == 'cproject.php' ||
                                     $page == 'review.php'):echo 'active-nav'; endif; ?>"  href="#">Projects <i class="fas fa-angle-down"></i></a>
                                <div class="sub-menu single-column-menu">
                                    <ul>

                                        <li><a href="cproject">Completed Projects</a></li>
                                        <li><a href="review">Project Reviews</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a
                                class="<?php 
                                if($page == 'blogs-team-working-blog.php' ||
                                     $page == 'blogs-coding-blog.php' || 
                                     $page == 'blogs-website-design-blog.php' || 
                                     $page == 'blog.php'):echo 'active-nav'; endif; ?>" href="blog">Blogs</a>
                            </li>
                            <li>
                                <a class="<?php if($page == 'gallery.php'):echo 'active-nav'; endif; ?>" href="gallery">Gallery</a>
                            </li>

                            <li>
                                <a class="<?php if($page == 'contact.php'):echo 'active-nav'; endif; ?>" href="contact">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- mobile menu trigger -->
                <div class="mobile-menu-trigger">
                    <span></span>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- header end -->

    <script src="js/script.js"></script>

    <script>
            window.addEventListener("load", function() {
        // Page Loader
        document.querySelector(".page-loader").classList.add("fade-out");
        setTimeout(function() {
            document.querySelector(".page-loader").style.display = "none";
        }, 600);
        // Animation on Scroll
        AOS.init();
    })
    </script>
</body>

</html>