<?php include 'header.php'; ?>
<main>

    <h1>Trip List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <?php include 'category_nav.php'; ?>        
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

</main>
<?php include 'footer.php'; ?>