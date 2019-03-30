<?php
$current = 'travel';
include 'header.php';
?>

<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron2 my-4">
        <h1 class="display-3">Travel</h1>
        <p class="lead">Welcome to the travel page, on this page<br> you will be able to view hotels, restaurants and flights.</p>
        <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
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
            <table>
                <tr>
                    <th>Image</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Rating</th>
                    <th class="right">Price</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach ($trips as $trip) : ?>
                    <tr>
                        <td><img src="<?php echo $trip['Image']; ?>" height="80" width="130"> </td>
                        <td><?php echo $trip['trip_code']; ?></td>
                        <td><?php echo $trip['trip_name']; ?></td>
                        <td><?php echo $trip['trip_desc']; ?></td>
                        <td><?php echo $trip['trip_rating']; ?></td>
                        <td class="right"><?php echo $trip['trip_price']; ?></td>
                        <td><form action="." method="post">
                                <input type="hidden" name="action"
                                       value="show_edit_form">
                                <input type="hidden" name="tripID"
                                       value="<?php echo $trip['trip_ID']; ?>">
                                <input type="hidden" name="categoryID"
                                       value="<?php echo $trip['category_FK']; ?>">
                                <input type="submit" value="Edit">
                            </form></td>
                        <td><form action="." method="post">
                                <input type="hidden" name="action"
                                       value="delete_trip">
                                <input type="hidden" name="tripID"
                                       value="<?php echo $trip['trip_ID']; ?>">
                                <input type="hidden" name="categoryID"
                                       value="<?php echo $trip['category_FK']; ?>">
                                <input type="submit" value="Delete">
                            </form></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <p><a href="?action=show_add_form">Add Trip</a></p>
            <p><a href="?action=list_categories">List Categories</a></p>
        </section>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <?php
    include 'footer.php';
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
