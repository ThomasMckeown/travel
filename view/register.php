<?php
//register.php

/**
 * Start the session.
 */
session_start();

/**
 * Include ircmaxell's password_compat library.
 */
require '../lib/password.php';

/**
 * Include our MySQL connection.
 */
require '../model/login_connect.php';


//If the POST var "register" exists (our submit button), then we can
//assume that the user has submitted the registration form.
if (isset($_POST['register'])) {

    //Retrieve the field values from our registration form.
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;

    //TO ADD: Error checking (username characters, password length, etc).
    //Basically, you will need to add your own error checking BEFORE
    //the prepared statement is built and executed.
    //Now, we need to check if the supplied username already exists.
    //Construct the SQL statement and prepare it.
    $sql = "SELECT COUNT(email) AS num FROM users WHERE email = :email";
    $sql2 = "SELECT COUNT(username) AS num FROM users WHERE username = :username";

    $stmt = $pdo->prepare($sql);
    $stmt2 = $pdo->prepare($sql2);

    //Bind the provided username to our prepared statement.
    $stmt->bindValue(':email', $email);
    $stmt2->bindValue(':username', $username);

    //Execute.
    $stmt->execute();
    $stmt2->execute();

    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

    //If the provided username already exists - display error.
    //TO ADD - Your own method of handling this error. For example purposes,
    //I'm just going to kill the script completely, as error handling is outside
    //the scope of this tutorial.
    if ($row2['num'] > 0) {
        echo '<p id="reg_error">That username already exists!</p>';
    } else if ($row['num'] > 0) {
        echo '<p id="reg_error">That email already exists!</p>';
    } else {


        //Hash the password as we do NOT want to store our passwords in plain text.
        $passwordHash = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));

        //Prepare our INSERT statement.
        //Remember: We are inserting a new row into our users table.
        $sql3 = "INSERT INTO users (email, username, password) VALUES (:email, :username, :password)";
        $stmt3 = $pdo->prepare($sql3);

        //Bind our variables.
        $stmt3->bindValue(':email', $email);
        $stmt3->bindValue(':username', $username);
        $stmt3->bindValue(':password', $passwordHash);

        //Execute the statement and insert the new account.
        $result = $stmt3->execute();

        //If the signup process is successful.
        if ($result) {
            //What you do here is up to you!
            echo '<p id="success">Thank you ' . $username . ', for registering with our website.</p>';
        }
    }
}


//$username = $_POST['username'];

?>

<?php
$current = 'register';
include 'header.php';
?>


<div class="container">

    <header class="jumbotron2 my-4">
        <h1 class="display-3">Register</h1>
        <p class="page_lead">Welcome to the Register page, register an account to login.</p>
    </header>

    <div class="row text-left">
        <form action="../controller/?action=register" method="post">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" required id="email" name="email"  placeholder="Enter Email">

            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" required id="username" name="username"  placeholder="Enter a Username">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" required id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter a Password">
            </div>

            <div id="message">
                <div id="beb_sent">Password must contain the following:</div>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>

            <script src="../js/password_val.js" type="text/javascript"></script>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <input type="submit" name="register" value="Register" class="btn btn-primary">
        </form>


    </div>

    <button id="back_login"><a style="text-decoration: none; color: #00cc00;" href="../controller/?action=login">Back to Login</a></button>

    <br><br><br><br><br><br><br>



</div>
<!-- /.container -->

<?php
include 'footer.php';
?>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



</body>

</html>