<?php
function get_trips() {
    global $db;
    $query = 'SELECT * FROM trip
              ORDER BY tripID';
    $statement = $db->prepare($query);
    $statement->execute();
    $trips = $statement->fetchAll();
    $statement->closeCursor();
    return $trips;
}

function get_trips_by_category($categoryID) {
    global $db;
    $query = 'SELECT * FROM trip
              WHERE trip.category_FK = :categoryID
              ORDER BY trip_ID';
    $statement = $db->prepare($query);
    $statement->bindValue(":categoryID", $categoryID);
    $statement->execute();
    $trips = $statement->fetchAll();
    $statement->closeCursor();
    return $trips;
}

function get_trip($tripID) {
    global $db;
    $query = 'SELECT * FROM trip
              WHERE trip_ID = :tripID';
    $statement = $db->prepare($query);
    $statement->bindValue(":tripID", $tripID);
    $statement->execute();
    $trip = $statement->fetch();
    $statement->closeCursor();
    return $trip;
}

function delete_trip($tripID) {
    global $db;
    $query = 'DELETE FROM trip
              WHERE trip_ID = :tripID';
    $statement = $db->prepare($query);
    $statement->bindValue(':tripID', $tripID);
    $statement->execute();
    $statement->closeCursor();
}

function add_trip($categoryID, $code, $name, $desc, $rate, $price) {
    global $db;
    $query = 'INSERT INTO trip
                 (trip_code, trip_name, trip_desc, trip_rating, trip_price, category_FK)
              VALUES
                 ( :code, :name, :desc, :rate, :price, :categoryID)';
    $statement = $db->prepare($query);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':desc', $desc);
    $statement->bindValue(':rate', $rate);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':categoryID', $categoryID);
    $statement->execute();
    $statement->closeCursor();
}



//function save_photo($target_dir, $name){
//    global $_FILES;
//    
//    $ok = 0;
//    
//    $ext = $_FILES["image"]["type"]; 
//    if (($ext == "image/gif") || ($ext == "image/jpeg") || ($ext == "image/png") || ($ext == "image/pjeg")){
//        $ok = 1; // ok its a good format
//    }else{
//        return -1; //not an image format
//    }
//    
//    if ($_FILES["image"]["size"] < 30000000000){
//        $ok = 1;
//    }else{
//        return -2; // file too big
//    }
//    
//
//    $ext = explode("/", $ext);
//    
//    $target_file = $target_dir . "/" . $name . "." . $ext[1];
//    
//    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
//    return $name . "." . $ext[1];
//}


function update_trip($code, $name, $desc, $rate, $price, $tripID) {
    global $db;
    $query = 'UPDATE trip
              SET trip_code = :code,
                  trip_name = :name,
                  trip_desc = :desc,
                  trip_rating = :rate,
                  trip_price = :price
               WHERE trip_ID = :tripID';
    $statement = $db->prepare($query);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':desc', $desc);
    $statement->bindValue(':rate', $rate);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':tripID', $tripID);
    $statement->execute();
    $statement->closeCursor();
}




