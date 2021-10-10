<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Saurabh Blogs</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>

<?php include_once('include/header.php')?>

    
    <section class="gallery-section">
        <div class="container">
            <!-- Container for the image gallery -->
            <div class="heading">
                <h1>Gallery</h1>
                <p>Some Photos About my Work</p>
            </div>
            <!-- Full-width images with number text -->
            <div class="mySlides">
                <img src="img/banner-1.jpg">
            </div>

            <div class="mySlides">
                <img src="img/banner-2.jpg">
            </div>

            <div class="mySlides">
                <img src="img/banner-3.jpg">
            </div>

            <div class="mySlides">
                <img src="img/banner-1.jpg">
            </div>

            <div class="mySlides">
                <img src="img/banner-2.jpg">
            </div>

            <div class="mySlides">
                <img src="img/banner-3.jpg">
            </div>

            <!-- Next and previous buttons -->
            <div class="indicator-btn">
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
    </section>

    <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
    </script>



</body>

</html>