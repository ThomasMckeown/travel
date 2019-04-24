<?php
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

$current = 'travel_login';
include 'login_header.php';
?>

<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron2 my-4">
        <h1 class="display-3">Travel</h1>
        <p class="page_lead">Welcome to the Travel page, on this page<br> you will be able to view Hotels, Restaurants and Flights.</p>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

        <aside>
            <!-- display a list of categories -->
            <h2>Categories</h2>
            <?php include '../view/category_nav.php'; ?>        
        </aside>



        <section>
            <!-- display a table of products -->
            <h2><?php echo $category_name; ?></h2>
            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">Image</th>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Rating</th>
                        <th scope="col" class="right">Price</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>
                <?php foreach ($trips as $trip) : ?>
                    <tbody>
                        <tr>
                <!--                            <th scope="row">1</th>-->
                            <td><img src="<?php echo $trip['Image']; ?>" height="80" width="130"> </td>
                            <td><?php echo $trip['trip_code']; ?></td>
                            <td><?php echo $trip['trip_name']; ?></td>
                            <td><?php echo $trip['trip_desc']; ?></td>
                            <td><?php echo $trip['trip_rating']; ?></td>
                            <td class="right"><?php echo $trip['trip_price']; ?></td>
                            <td><form  method="post">
                                    <input type="hidden" name="action"
                                           value="show_edit_form">
                                    <input type="hidden" name="tripID"
                                           value="<?php echo $trip['trip_ID']; ?>">
                                    <input type="hidden" name="categoryID"
                                           value="<?php echo $trip['category_FK']; ?>">
                                    <input id="edit" type="submit" value="Edit">
                                </form></td>
                            <td><form method="post">
                                    <input type="hidden" name="action"
                                           value="delete_trip">
                                    <input type="hidden" name="tripID"
                                           value="<?php echo $trip['trip_ID']; ?>">
                                    <input type="hidden" name="categoryID"
                                           value="<?php echo $trip['category_FK']; ?>">
                                    <input id="delete" type="submit" value="Delete">
                                </form></td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>


            <p><a style="text-decoration: none; color: #00cc00;" href="?action=show_add_form">Add Trip</a></p>
            <p><a style="text-decoration: none; color: #00cc00;" href="?action=list_categories">List Categories</a></p>
        </section>
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
