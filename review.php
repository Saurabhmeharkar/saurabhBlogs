<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saurabh Blogs</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


</head>

<body>

<?php include_once('include/header.php')?>


    <section class="testimonial-section container">
        <div class="heading">
            <h1>Testimonial</h1>
            <p>Customers Review</p>
        </div>

        <div class="d-flex align-items-center">
            <div class="row align-items-center">
                <div class="col-md-6 testi-img">
                    <div class="img-box">
                        <div class="circle"></div>
                        <div class="img-box-inner">
                            <img src="img/testimonial/1.png" alt="testi img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="myCarousel" class="carousel slide" data-bs-interval="5000" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item testi-item active" data-color="#fb9c9a"
                                data-img="img/testimonial/1.png">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nobis ratione, harum
                                    doloremque aspernatur aliquid quaerat dolores voluptates recusandae qui repellat
                                    illum, amet ipsa debitis fugiat commodi nemo suscipit ad!</p>
                                <h3>john doe 1 - <span>web developer</span></h3>
                            </div>
                            <div class="carousel-item testi-item" data-color="#fbd39a" data-img="img/testimonial/2.png">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nobis ratione, harum
                                    doloremque aspernatur aliquid quaerat dolores voluptates recusandae qui repellat
                                    illum, amet ipsa debitis fugiat commodi nemo suscipit ad!</p>
                                <h3>john doe 2 - <span>web developer</span></h3>
                            </div>
                            <div class="carousel-item testi-item" data-color="#9ab0fb" data-img="img/testimonial/3.png">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nobis ratione, harum
                                    doloremque aspernatur aliquid quaerat dolores voluptates recusandae qui repellat
                                    illum, amet ipsa debitis fugiat commodi nemo suscipit ad!</p>
                                <h3>john doe 3 - <span>web developer</span></h3>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="prev">
                            <img src="img/icons/left-arrow.png" alt="prev">
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="next">
                            <img src="img/icons/right-arrow.png" alt="prev">
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include_once('include/footer.php'); ?>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>

    <script>
    const myCarousel = document.getElementById('myCarousel')
    myCarousel.addEventListener('slid.bs.carousel', function() {
        const activeItem = this.querySelector(".active");
        document.querySelector(".testi-img img").src = activeItem.getAttribute("data-img");
        document.querySelector(".testi-img .circle").style.backgroundColor = activeItem.getAttribute(
            "data-color");
    })
    </script>
</body>

</html>