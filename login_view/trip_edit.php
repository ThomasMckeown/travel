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

<div class="container">

    <header class="jumbotron2 my-4">
        <h1 class="display-3">Edit</h1>
        <p class="page_lead">Update and delete any existing information in the database</p>
    </header>

    <div class="row text-left">
        <form action="../controller/index_login.php?action=travel_login" method="post" id="add_trip_form">

            <input type="hidden" name="action" value="update_trip">


            <input type="hidden" name="tripID"
                   value="<?php echo $trip['trip_ID']; ?>">

            <div class="form-group">
            <label>Code:</label>
            <input class="form-control" type="input" name="code"
                   value="<?php echo $trip['trip_code']; ?>">
            </div>
            <div class="form-group">
            <label>Name:</label>
            <input class="form-control" type="input" name="name"
                   value="<?php echo $trip['trip_name']; ?>">
            </div>
            <div class="form-group">
            <label>Description:</label>
            <input class="form-control" type="input" name="desc"
                   value="<?php echo $trip['trip_desc']; ?>">
            </div>
            <div class="form-group">
            <label>Rating:</label>
            <input class="form-control" type="input" name="rate"
                   value="<?php echo $trip['trip_rating']; ?>">
            </div>
            <div class="form-group">
            <label>List Price:</label>
            <input class="form-control" type="input" name="price"
                   value="<?php echo $trip['trip_price']; ?>">
            </div>

            
            <input type="submit" value="Save Changes" class="btn btn-success">
            <br><br>
            <p><a style="text-decoration: none; color: #00cc00;" href="?action=travel_login">View Trip List</a></p>
        </form>
        
    </div>
</div>



<?php
include '../view/footer.php'; 
?>