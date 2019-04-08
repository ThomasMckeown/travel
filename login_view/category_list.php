<?php
/**
 * Start the session.
 */
session_start();

/**
 * Check if the user is logged in.
 */
//if (!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])) {
//    //User not logged in. Redirect them back to the login.php page.
//    header('Location: ../controller?action=login');
//    exit;
//}
// logout
if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: ../controller?action=login');
}

$current = 'list_categories';
include 'login_header.php';
?>
<div class="container">

    <header class="jumbotron2 my-4">
        <h1 class="display-3">Insert</h1>
        <p class="page_lead">Insert a new trip into the database</p>
    </header>

    <div class="row text-left">
        <table class="table_cat">
            
                <tr>
                    <th>Name</th>
                    <th>&nbsp;</th>
                </tr>
            

            <?php foreach ($categories as $category) : ?>

                
                    <tr>

                        <td><?php echo $category['category_name']; ?></td>
                        <td>
                            <div class="row text-left">
                                <form id="delete_trip_form" action="../controller/index_login.php?action=travel_login" method="post">
                                    <input type="hidden" name="action" value="delete_category">
                                    <input type="hidden" name="categoryID"
                                           value="<?php echo $category['category_ID']; ?>">
                                    <input id="delete" type="submit" value="Delete">

                                </form>
                            </div>
                        </td>

                    </tr>
                

            <?php endforeach; ?>

        </table>
    </div>
        


<div class="row text-left">
        <form id="add_category_form" action="../controller/index_login.php?action=travel_login" method="post">
            <input type="hidden" name="action" value="add_category">
          
            <div class="form-group">

                <input type="input" placeholder="Enter a new Category" class="form-control" name="name">
                <input type="submit" value="Add" class="btn btn-success">
            </div>
            
            
        </form>
    </div>
    <p><a style="text-decoration: none; color: #00cc00;" href="?action=travel_login">List Trips</a></p>
</div>

<?php include '../view/footer.php'; ?>