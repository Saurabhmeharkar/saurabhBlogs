<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Saurabh Blogs</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


</head>

<body>

    <?php include'header.php'?>


    <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>SaurabhBlogs.info</h4>
  	 			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus et adipisci ad laudantium, non nesciunt? <br><br>
            All right reserverd &copy; 2021 </p>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Useful Links</h4>
  	 			<ul>
  	 				<li><a  class="<?php 
                                if($page == 'cproject.php' ||
                                     $page == 'review.php'):echo 'active-nav'; endif; ?>"   href="cproject.php">Completed Projects</a></li>
  	 				<li><a  class="<?php 
                                if($page == 'cproject.php' ||
                                     $page == 'review.php'):echo 'active-nav'; endif; ?>"   href="review.php">Project Review</a></li>
  	 				<li><a class="<?php if($page == 'gallery.php'):echo 'active-nav'; endif; ?>" href="gallery">Gallery</a></li>
  	 				<li><a class="<?php 
                                if($page == 'blogs-team-working-blog.php' ||
                                     $page == 'blogs-coding-blog.php' || 
                                     $page == 'blogs-website-design-blog.php' || 
                                     $page == 'blog.php'):echo 'active-nav'; endif; ?>"  href="blog.php">Blogs</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Other Links</h4>
  	 			<ul>
  	 				<li><a class="<?php if($page == 'index.php'):echo 'active-nav'; endif; ?>" href="index.php">Home</a></li>
  	 				<li> <a class="<?php if($page == 'contact.php'):echo 'active-nav'; endif; ?>" href="contact">Contact</a></li>
  	 				<li>  <a class="<?php if($page == 'about.php'):echo 'active-nav'; endif; ?>" href="about">About</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a target="_blank" href="https://www.instagram.com/saurabh_m18/"><i class="fab fa-instagram"></i></a>
  	 				<a target="_blank" href="https://www.linkedin.com/in/saurabh-meharkar-58b9351a9/"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>

</body>

</html>