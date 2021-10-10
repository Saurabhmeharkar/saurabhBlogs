<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Saurabh Blogs</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


</head>

<style>
    .contact-section a{
        color:black;
    }
</style>

<body>

<?php include_once('include/header.php')?>

       <!-- Contact Section -->
       <section class="contact-section" id="contact">
        <div class="container">
                <div class="heading" data-aos="fade-right">
                    <h1>Get In Touch</h1>
                    <p>Fill free to Contact me</p>
                </div>
                <div class="row my-5" style="text-align: center;">
                    <div class="col-lg-6">
                        Mobile: <a href="tel:8975066993">8975066993</a>
                    </div>
                    <div class="col-lg-6">
                        E-mail : <a href="mailto:saurabhmeharkar@gmail.com">saurabhmeharkar@gmail.com</a>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom">
                    <form action="userinfo.php" method="post" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="user" autocomplete="false" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="email" autocomplete="false" class="form-control" placeholder="Your E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="number" name="mobile" autocomplete="false" class="form-control" placeholder="Mobile No.">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="comment" autocomplete="false" name="text" id="" cols="90" rows="2"
                                        placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="button">Send Message</button>
                            </div>
                        </div>
                    </form>
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

</body>

</html>