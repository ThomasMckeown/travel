<?php
$current = 'about';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">


    <link href="../slick/slick.css" rel="stylesheet" type="text/css"/>
    <link href="../slick/slick-theme.css" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
    <script src="../slick/slick.min.js" type="text/javascript"></script>

    <body>

        <!-- Page Content -->
        <div class="container">

            

            <!-- Jumbotron Header -->
            <header class="jumbotron2 my-4">
                <h1 class="display-3">About</h1>
                <p class="page_lead">Welcome to the About page, on this page<br> you will be able to learn more about us.<br>And any further information</p>
            </header>
                <center>
                    <div class="your-class">
                        <div>
                            <img src="../images/paris-2017-home.jpg" alt="" width="1000"/>
                        </div>
                        <div>
                            <img src="../images/Munich-Neuschwanstein-Castle.jpg" alt="" width="1000"/>
                        </div>
                        <div>
                            <img src="../images/Dr-Johns-House.jpg" alt="" width="1000"/>
                        </div>


                    </div>
                </center>


                <script type="text/javascript">
                    $('.your-class').slick({

                        slidesToShow: 1,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        fade: true,
                        cssEase: 'linear'

                    });
                </script>



           

            <!-- Page Features -->
            <div class="row text-center">

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">

                        <img class="card-img-top" src="../images/1 million.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">1 Milion</h4>
                            <p class="card-text">Thank you all! We have reached 1 Million followers. Keep an eye on this page for a special sale!</p>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">

                        <img class="card-img-top" src="../images/world.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">New Destinations!</h4>
                            <p class="card-text">We have just reached 10,000,000 destinations from small huts in the amazon to the biggest hotels around the world!</p>
                        </div>
                        <div class="card-footer">
                            <a href="../controller/" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">

                        <img class="card-img-top" src="../images/thailand.jpg" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Featured destination</h4>
                            <p class="card-text">Learn more about his months featured holiday. Thailand! </p>
                        </div>
                        <div class="card-footer">
                            <a href="../controller/index.php?categoryID=3" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">

                        <img class="card-img-top" src="../images/yearEstablished.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">History</h4>
                            <p class="card-text">Click to learn more about the company that sends you away on all these amazing adventures</p>
                        </div>
                        <div class="card-footer">
                            <a href="../controller/index.php?action=home" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <?php
        include 'footer.php';
        ?>

        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
