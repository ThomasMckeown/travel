<?php

require('../model/database.php');
require('../model/trip_db.php');
require('../model/category_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}

if ($action == 'home') {

    include('../home.php');
}

if ($action == 'about') {

    include('../about.php');
}

if ($action == 'contact') {

    include('../contact.php');
}

if ($action == 'travel') {
    // Get the current category ID
    $categoryID = filter_input(INPUT_GET, 'categoryID', FILTER_VALIDATE_INT);
    if ($categoryID == NULL || $categoryID == FALSE) {
        $categoryID = 1;
    }

    // Get trip and category data
    $category_name = get_category_name($categoryID);
    $categories = get_categories();
    $trips = get_trips_by_category($categoryID);

    // Display the trip list
    include('../travel.php');
}

if ($action == 'login') {

    include('../login_index.php');
}

else if ($action == 'show_edit_form') {
    $tripID = filter_input(INPUT_POST, 'tripID', FILTER_VALIDATE_INT);
    if ($tripID == NULL || $tripID == FALSE) {
        $error = "Missing or incorrect trip id.";
        include('../errors/error.php');
    } else {
        $trip = get_trip($tripID);
        include('../view/trip_edit.php');
    }
}



else if ($action == 'update_trip') {
    $tripID = filter_input(INPUT_POST, 'tripID', FILTER_VALIDATE_INT);
    $code = filter_input(INPUT_POST, 'code');
    $name = filter_input(INPUT_POST, 'name');
    $desc = filter_input(INPUT_POST, 'desc');
    $rate = filter_input(INPUT_POST, 'rate');
    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

    // Validate the inputs
    if ($tripID == NULL || $tripID == FALSE ||
            $code == NULL || $name == NULL ||
            $desc == NULL || $rate == NULL || 
            $price == NULL || $price == FALSE) {
        $error = "Invalid edit trip data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        update_trip($code, $name, $desc, $rate, $price, $tripID);

        // Display the Product List page for the current category
        header("Location: .?categoryID=$categoryID");
    }
}

else if ($action == 'delete_trip') {
    $tripID = filter_input(INPUT_POST, 'tripID', FILTER_VALIDATE_INT);
    $categoryID = filter_input(INPUT_POST, 'categoryID', FILTER_VALIDATE_INT);
    if ($categoryID == NULL || $categoryID == FALSE ||
            $tripID == NULL || $tripID == FALSE) {
        $error = "Missing or incorrect trip id or category id.";
        include('../errors/error.php');
    } else {
        delete_trip($tripID);
        header("Location: .?categoryID=$categoryID");
    }
}

else if ($action == 'show_add_form') {
    $categories = get_categories();
    include('../view/trip_add.php');
    
}

else if ($action == 'add_trip') {
    $categoryID = filter_input(INPUT_POST, 'categoryID', FILTER_VALIDATE_INT);

 //   $target_dir = "../images";
    
    $code = filter_input(INPUT_POST, 'code');
    $name = filter_input(INPUT_POST, 'name');
    $desc = filter_input(INPUT_POST, 'desc');
    $rate = filter_input(INPUT_POST, 'rate');
    $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
    if ($categoryID == NULL || $categoryID == FALSE || $code == NULL ||
            $name == NULL || $desc == NULL || $rate == NULL || $price == NULL || $price == FALSE) {
        $error = "Invalid add trip data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
  //      save_photo($target_dir, $name);
        add_trip($categoryID, $code, $name, $desc, $rate, $price);
        
        header("Location: .?categoryID=$categoryID");
    }
}

else if ($action == 'list_categories') {
    $categories = get_categories();
    include('../view/category_list.php');
} 

else if ($action == 'add_category') {
    $name = filter_input(INPUT_POST, 'name');

    // Validate inputs
    if ($name == NULL) {
        $error = "Invalid category name. Check name and try again.";
        include('../errors/error.php');
    } else {
        add_category($name);
        header('Location: .?action=list_categories');  // display the Category List page
    }
}

else if ($action == 'delete_category') {
    $categoryID = filter_input(INPUT_POST, 'categoryID', FILTER_VALIDATE_INT);
    delete_category($categoryID);
    header('Location: .?action=list_categories');      // display the Category List page
}
?>