<?php

//login.php

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


//If the POST var "login" exists (our submit button), then we can
//assume that the user has submitted the login form.
if(isset($_POST['Login'])){
    
    //Retrieve the field values from our login form.
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
    
    //Retrieve the user account information for the given username.
    $sql = "SELECT id, username, password FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    
    //Bind value.
    $stmt->bindValue(':username', $username);
    
    //Execute.
    $stmt->execute();
    
    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    //If $row is FALSE.
    if($user === false){
        //Could not find a user with that username!
        //PS: You might want to handle this error in a more user-friendly manner!
        echo '<p id="error">Incorrect username</p>';
    } else{
        //User account found. Check to see if the given password matches the
        //password hash that we stored in our users table.
        
        //Compare the passwords.
        $validPassword = password_verify($passwordAttempt, $user['password']);
        
        //If $validPassword is TRUE, the login has been successful.
        if($validPassword){
            
            //Provide the user with a login session.
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['logged_in'] = time();
            
            //Redirect to our protected page, which we called home.php
            header('Location: ../controller/?action=index_login');
            exit;
            
        } else{
            //$validPassword was FALSE. Passwords do not match.
            echo '<p id="error">Incorrect password</p>';
        }
    }
    
}
 
?>

<?php
$current = 'login';
include 'header.php';
?>

<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron2 my-4">
        <h1 class="display-3">Login</h1>
        <p class="page_lead">Welcome to the Login page, sign-in or register an account.</p>
    </header>

    <!-- Page Features -->
    <div class="row text-left">
        <form action="../controller/?action=login" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control"  id="username" name="username"  placeholder="username">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control"  id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <input type="submit" name="Login" value="Login" class="btn btn-success">
            <button type="button" class="btn btn-primary"><a style="text-decoration: none; color: white;" href="../controller/?action=register">Register</a></button>
        </form>


    </div>
    
    <br><br><br><br><br><br><br>
    
    <!-- /.row -->

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
