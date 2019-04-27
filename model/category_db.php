<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY category_ID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement; 
}

function get_category_name($categoryID) {
    global $db;
    $query = 'SELECT * FROM categories
              WHERE category_ID = :categoryID';    
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryID', $categoryID);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['category_name'];
    return $category_name;
}

function add_category($name) {
    global $db;
    $query = 'INSERT INTO categories (category_name)
              VALUES (:name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();    
}

function delete_category($categoryID) {
    global $db;
    $query = 'DELETE FROM categories
              WHERE category_ID = :categoryID';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryID', $categoryID);
    $statement->execute();
    $statement->closeCursor();
}
?>