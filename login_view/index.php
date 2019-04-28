

<?php
//$username = $_POST['username'];

/**
 * Start the session.
 */
session_start();

/**
 * Check if the user is logged in.
 */
if (!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])) {
    //User not logged in. Redirect them back to the login.php page.
    header('Location: ../controller?action=login');
    exit;
}

// logout
if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: ../controller?action=login');
}


$current = 'index_login';
include 'login_header.php';
?>

<!DOCTYPE html>
<html lang="en">

    <body>

        <!--        <div class="login_welcome">
<?php
echo '<p id="login">Welcome ' . $username . '.</p>';
?>
                </div>-->



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
                            <button type="button" class="btn btn-success"><a style="text-decoration: none; color: white;" href="../controller/index_login.php?categoryID=3">See Flights</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

<?php
include '../view/footer.php';
?>

        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>