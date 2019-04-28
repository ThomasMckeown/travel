<?php
$current = 'home';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

    <body>



        <!-- Page Content -->
        <div class="container">

            <!-- Jumbotron Header -->
            <header class="jumbotron my-4">
<!--                <img src="images/index.jpg" alt=""/>-->
                <h1 class="display-3">Welcome!</h1>
                <p class="lead">Welcome to Trip Deceiver, click the Where to link or the travel page<br>to get started!</p>
                <a href="../controller/" class="btn btn-light">Where to?</a>
            </header>

            <!-- Page Features -->
            <!-- Large modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">Flight Discounts</button>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1>Up to 50% off Flights</h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="modal_pic">
                                <img src="../images/discount.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success"><a style="text-decoration: none; color: white;" href="?categoryID=3">See Flights</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        <div class="profile large">
                <div class="cover">
                    <img src="../reviewImages/hotel1.jpg" alt=""/>
                    <div class="layer">
                        <div class="loader"></div>
                    </div><a class="image-wrapper" href="#">
                        <form id="coverForm" action="#">
                            <input class="hidden-input" id="changeCover" type="file"/>
                            <label class="edit glyphicon glyphicon-pencil" for="changeCover" title="Change cover"></label>
                        </form></a>
                </div>
                <div class="user-info">
                    <div class="profile-pic">

                        <div class="displayedImage1"></div>
                        <img src="../reviewImages/profilePicture1.jpg" alt=""/>
                        <div class="layer">
                            <div class="loader"></div>
                        </div><a class="image-wrapper" href="#">
                            <form id="profilePictureForm" action="#">
                                <input class="hidden-input" id="changePicture" type="file"/>
                                <label class="edit glyphicon glyphicon-pencil" for="changePicture" type="file" title="Change picture"></label>
                            </form></a>
                    </div>
                    <div class="username">
                        <!--<div class="flip">v</div>-->
                        <a class="review1" href="#profile-pic">First Review</a> | 
                        <a class="review2" href="#profile-pic">Second Review</a> | 
                        <a class="review3" href="#profile-pic">Third Review</a>

                        <div class="displayedReview1"></div>
                    </div>
                </div>
            </div>



            <div class="profile large">
                <div class="cover">
                    <img src="../reviewImages/hotel2.jpg" alt=""/>
                    <div class="layer">
                        <div class="loader"></div>
                    </div><a class="image-wrapper" href="#">
                        <form id="coverForm" action="#">
                            <input class="hidden-input" id="changeCover" type="file"/>
                            <label class="edit glyphicon glyphicon-pencil" for="changeCover" title="Change cover"></label>
                        </form></a>
                </div>
                <div class="user-info">
                    <div class="profile-pic">
                        <div class="displayedImage2"></div>
                        <img src="../reviewImages/profilePicture4.jpg" alt=""/>
                        <div class="layer">
                            <div class="loader"></div>
                        </div><a class="image-wrapper" href="#">
                            <form id="profilePictureForm" action="#">
                                <input class="hidden-input" id="changePicture" type="file"/>
                                <label class="edit glyphicon glyphicon-pencil" for="changePicture" type="file" title="Change picture"></label>
                            </form></a>
                    </div>
                    <div class="username">
                        <a class="review4" href="#profile-pic">First Review</a> | 
                        <a class="review5" href="#profile-pic">Second Review</a> | 
                        <a class="review6" href="#profile-pic">Third Review</a>

                        <div class="displayedReview2"></div>
                    </div>
                </div>
                <br><br>
                <center><h3>Live Reviews</h3></center>
            </div>

            <div class="verticalSlider">
                <div>
                    <img src="../images/Dr-Johns-House.jpg" alt="" width="400"/>
                    <p>Great place. loved every moment!</p>
                </div>

                <div>
                    <img src="../images/Munich-Neuschwanstein-Castle.jpg" alt="" width="400"/>
                    <p>Great place. loved every moment!</p>

                </div>

                <div>
                    <img src="../images/paris.jpg" alt="" width="400"/>
                    <p>Great place. loved every moment!</p>
                </div>


            </div>

            <script type="text/javascript">

                $('.verticalSlider').slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    vertical: true,

                    infinite: true,
                    useTransform: true
                });

            </script>  

            <div class="profile large">
                <div class="cover">
                    <img src="../reviewImages/hotel3.jpg" alt=""/>
                    <div class="layer">
                        <div class="loader"></div>
                    </div><a class="image-wrapper" href="#">
                        <form id="coverForm" action="#">
                            <input class="hidden-input" id="changeCover" type="file"/>
                            <label class="edit glyphicon glyphicon-pencil" for="changeCover" title="Change cover"></label>
                        </form></a>
                </div>
                <div class="user-info">
                    <div class="profile-pic">          
                        <div class="displayedImage3"></div>
                        <img src="../reviewImages/profilePicture7.jpg" alt=""/>
                        <div class="layer">
                            <div class="loader"></div>
                        </div><a class="image-wrapper" href="#">
                            <form id="profilePictureForm" action="#">
                                <input class="hidden-input" id="changePicture" type="file"/>
                                <label class="edit glyphicon glyphicon-pencil" for="changePicture" type="file" title="Change picture"></label>
                            </form></a>
                    </div>
                    <div class="username">
                        <!--<div class="flip3">v</div>-->
                        <!--<div class="panel3 test1">Wonderful location. Would go again</div>-->
                        <!--<div class="panel3">-->
                        <a class="review7" href="#profile-pic">First Review</a> | 
                        <a class="review8" href="#profile-pic">Second Review</a> | 
                        <a class="review9" href=" #profile-pic">Third Review</a>
                        <br>
                        <div class="displayedReview3"></div>

                        <!--</div>-->
                    </div>
                </div>
            </div>








            <br><br>




            <!-- /.row -->

        </div>
        <!-- /.container -->

        <?php
        include 'footer.php';
        ?>

        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
