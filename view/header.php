<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>header</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>

    <!-- Custom styles for this template -->
    <link href="../css/heroic-features.css" rel="stylesheet">
    
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>

  
</head>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="../images/TAlogo.jpg" alt=""/>
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
                    <a class="nav-link" href="../controller/?action=home">Home
<!--                                <span class="sr-only">(current)</span>-->
                    </a>
                </li>
                <li <?php
                if ($current == 'about') {
                    echo 'class="current"';
                }
                ?> class="nav-item">
                    <a class="nav-link" href="../controller/?action=about">About</a>
                </li>
                <li <?php
                if ($current == 'travel') {
                    echo 'class="current"';
                }
                ?> class="nav-item">
                    <a class="nav-link" href="../controller?action=travel">Travel</a>
                </li>
                <li <?php
                    if ($current == 'contact') {
                        echo 'class="current"';
                    }
                    ?> class="nav-item">
                    <a class="nav-link" href="../controller/?action=contact">Contact</a>
                </li>
                <li <?php
                    if ($current == 'login') {
                        echo 'class="current"';
                    }
                    ?> class="nav-item">
                    <a class="nav-link" href="../controller/?action=login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

