<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>
contacts saver!
</title>
<meta charset="UTF-8">
<meta name="viewpoart" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<header>
<a href="index.php"><img src="ram.jpg">contacts</a>
</header>
<nav>
<a href="index.php">home</a>
<br>
<a href="login.php">login</a>
<br>
<a href="signup.php">sign-up</a>
<br>
<a href="contact.html">contact-us</a>
<br>
<a href="about.html">about-us</a>
</nav>
<nav>
<a href="logout.php">logout</a>
<br>
<a href="reset.php">reset your password</a>
<br>
<a href="save.php">save a contact</a>
<br>
<a href="contacts.php">your contacts</a>
</nav>
<main>
<h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to contacts.</h1>
<p>
welcome to contacts!
<br>
a website for saving and viewing your contacts
<br>
please click the links below or from the navigation bar for respective functionalities
<br>
<a href="save.php">save a contact</a>
<br>
<a href="contacts.php">your contacts</a>
<br>
hope you'l have good time with our website.
<br>
thank you and good luck!
</p>
<hr>
</main>
<footer>
<p>
<a href="about.html">about-us</a>
<br>
<a href="contact.html">contact-us</a>
<br>
this website is desined and developed in march 2023.
</p>
</footer>
</body>
</html>