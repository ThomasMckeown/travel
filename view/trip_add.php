<?php include 'header.php'; ?>

<?php
//$msg = '';

//if(isset($_POST['upload'])){
//    
//    $target = '../images/'.basename($_FILES['image']['name']);
//    
//    $image = $_FILES['image']['name'];
//    
//    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
//        $msg = 'image success';
//    } else {
//        $msg = 'error uploading';
//    }
//   
//}


?>

<main>
    <h1>Add Trip</h1>
    <form action="index.php" method="post" id="add_trip_form">
        <input type="hidden" name="action" value="add_trip">
        
       

        <label>Category:</label>
        <select name="categoryID">
        <?php foreach ( $categories as $category ) : ?>
            <option value="<?php echo $category['category_ID']; ?>">
                <?php echo $category['category_name']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Code:</label>
        <input type="input" name="code">
        <br>

        <label>Name:</label>
        <input type="input" name="name">
        <br>
        
        <label>Description:</label>
        <input type="input" name="desc">
        <br>
        
        <label>Rating:</label>
        <input type="input" name="rate">
        <br>

        <label>List Price:</label>
        <input type="input" name="price">
        <br>

        <label>&nbsp;</label>
        <input type="submit" name="upload" value="Add Trip">
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_trips">View Trip List</a>
    </p>

</main>
<?php include 'footer.php'; ?>