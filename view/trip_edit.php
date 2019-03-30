<?php include 'header.php'; ?>
<main>
    <h1>Edit Trip</h1>
    <form action="index.php" method="post" id="add_trip_form">

        <input type="hidden" name="action" value="update_trip">


        <input type="hidden" name="tripID"
               value="<?php echo $trip['trip_ID']; ?>">

        <label>Code:</label>
        <input type="input" name="code"
               value="<?php echo $trip['trip_code']; ?>">
        <br>

        <label>Name:</label>
        <input type="input" name="name"
               value="<?php echo $trip['trip_name']; ?>">
        <br>
        <label>Description:</label>
        <input type="input" name="desc"
               value="<?php echo $trip['trip_desc']; ?>">
        <br>
        
        <label>Rating:</label>
        <input type="input" name="rate"
               value="<?php echo $trip['trip_rating']; ?>">
        <br>

        <label>List Price:</label>
        <input type="input" name="price"
               value="<?php echo $trip['trip_price']; ?>">
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Save Changes">
        <br>
    </form>
    <p><a href="index.php?action=list_trips">View Trip List</a></p>

</main>
<?php include 'footer.php'; ?>