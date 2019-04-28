<?php
/**
 * Start the session.
 */
session_start();

/**
 * Check if the user is logged in.
 */
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: ../controller/?action=login');
    exit;
}
// logout
if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: ../controller?action=login');
}
$current = 'contact_login';
include 'login_header.php';
?>




<!DOCTYPE html>
<html lang="en">


    <script>
        $(document).ready(function () {
            $(".flip").click(function () {
                $(".panel").slideToggle("slow");
            });
        });

        $(document).ready(function () {
            $(".flip2").click(function () {
                $(".panel2").slideToggle("slow");
            });
        });
        $(document).ready(function () {
            $(".flip3").click(function () {
                $(".panel3").slideToggle("slow");
            });
        });
    </script>
    <body>

        <div class="container">
        
<header class="jumbotron2 my-4">
        <h1 class="display-3">Contact</h1>
        <p class="page_lead">Welcome to the Contact page, on this page<br> you will be able to find out how to get in contact with us.</p>
    </header>
        <div class="box">
            <div class="profile large">
                <div class="cover">
                    <img src="../images/telephone2.png" alt=""/>
                    <div class="layer">
                        <div class="loader"></div>
                    </div><a class="image-wrapper" href="#">
                        <form id="coverForm" action="#">
                            <input class="hidden-input" id="changeCover" type="file"/>
                            <label class="edit glyphicon glyphicon-pencil" for="changeCover" title="Change cover"></label>
                        </form></a>
                </div>



                <center>
                    <div class="flip">v</div>

                    <div class="panel">Call: 12345678901</div>
                </center>



            </div>
        </div>

        <div class="box2">
            <div class="profile large">
                <div class="cover">
                    <img src="../images/email.png" alt=""/>
                    <div class="layer">
                        <div class="loader"></div>
                    </div><a class="image-wrapper" href="#">
                        <form id="coverForm" action="#">
                            <input class="hidden-input" id="changeCover" type="file"/>
                            <label class="edit glyphicon glyphicon-pencil" for="changeCover" title="Change cover"></label>
                        </form></a>
                </div>



                <center>
                    <div class="flip2">v</div>

                    <div class="panel2">Email: trip@mail.com</div>
                </center>



            </div>
        </div>

        <div class="box3">
            <div class="profile large">
                <div class="cover">
                    <img src="../images/location.png" alt=""/>

                    <div class="layer">
                        <div class="loader"></div>
                    </div>
                    
                </div>



                <center>
                    <div class="flip3">v</div>

                    <div class="panel3">Location: Dublin Rd</div>
                </center>



            </div>
        </div>

        </div>
        
        <?php
        include '../view/footer.php';
        ?>
        

        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
    
</html>