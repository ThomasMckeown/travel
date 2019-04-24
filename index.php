<?php
$current = 'home';
include 'header_index.php';
?>

<!DOCTYPE html>
<html lang="en">

    <body>



        <!-- Page Content -->
        <div class="container">

            <!-- Jumbotron Header -->
            <header class="jumbotron my-4">
                <h1 class="display-3">Welcome!</h1>
                <p class="lead">Welcome to Trip Deceiver, click the Where to link or the travel page<br>to get started!</p>
                <a href="controller/index.php" class="btn btn-light">Where to?</a>
            </header>


            <!-- Button trigger modal -->


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
                            <img src="images/discount.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success"><a style="text-decoration: none; color: white;" href="controller/?categoryID=3">See Flights</a></button>
                        </div>
                    </div>
                </div>
            </div>



            
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <?php
        include 'view/footer.php';
        ?>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
