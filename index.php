<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emmanuel Nggadas</title>
    <link href="https://fonts.googleapis.com/css?family=Iceland" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="home">

    <!--Navigation Bar-->
    <div id="nav">
        <?php include "inc/nav.php"?>
    </div>

    <!--Introduction-->
    <div class="container clearfix">
        <?php include "inc/intro.php"; ?>
    </div>

    <!--Portfolio-->
    <div id="portfolio"  class="container clearfix">
        <?php include "inc/portfolio.php"; ?>
    </div>

    <!--About me-->
    <div id="about" class="container clearfix">
        <?php include "inc/about.php";?>
    </div>

    <!--Contact form-->
    <div id="contact_form" class="container">
        <?php include "inc/contact.php"; ?>
    </div>

    <footer class="main-footer">
        <div>
            <a href="https://www.linkedin.com/in/emmanuel-nggadas-381841b8/" target="_blank"><img class="link" src="assets/images/linkedin.png" alt=""></a>
            <a href="https://www.facebook.com/emmanuel.nggadas" target="_blank"><img class="link" src="assets/images/facebook.png" alt=""></a>
        </div>
        <span>&copy;2018 Emmanuel Nggadas.</span>
    </footer>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
