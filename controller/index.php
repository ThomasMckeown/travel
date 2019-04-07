<?php

require('../model/database.php');
require('../model/trip_db.php');
require('../model/category_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'travel';
    }
    
}

if ($action == 'home') {

    include('../view/index.php');
}

if ($action == 'about') {

    include('../view/about.php');
}

if ($action == 'contact') {

    include('../view/contact.php');
}

if ($action == 'travel') {
    $action = NULL;
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
    include('../view/travel.php');
}

if ($action == 'login') {

    include('../view/login_index.php');
}

if ($action == 'register') {

    include('../view/register.php');
}

if($action == 'index_login'){
    include('../login_view/index.php');
}


?>