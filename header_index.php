<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>header index</title>

    <!-- Bootstrap core CSS -->

    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Custom styles for this template -->

    <link href="css/heroic-features.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/tom.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <script type="text/javascript" src="slick/slick.min.js"></script>

</head>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/TAlogo.jpg" alt=""/>
            <h1>Trip Deceiver</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li <?php
                if ($current == 'home') {
                    echo 'class="current"';
                }
                ?> class="nav-item">
                    <a class="nav-link" href="view/index.php?action=home">Home
<!--                                <span class="sr-only">(current)</span>-->
                    </a>
                </li>
                <li <?php
                if ($current == 'about') {
                    echo 'class="current"';
                }
                ?> class="nav-item">
                    <a class="nav-link" href="view/about.php?action=about">About</a>
                </li>
                <li <?php
                if ($current == 'travel') {
                    echo 'class="current"';
                }
                ?> class="nav-item">
                    <a class="nav-link" href="controller?action=travel">Travel</a>
                </li>
                <li <?php
                if ($current == 'contact') {
                    echo 'class="current"';
                }
                ?> class="nav-item">
                    <a class="nav-link" href="view/contact.php?action=contact">Contact</a>
                </li>
                <li <?php
                if ($current == 'login') {
                    echo 'class="current"';
                }
                ?> class="nav-item">
                    <a class="nav-link" href="view/login_index.php?action=login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>