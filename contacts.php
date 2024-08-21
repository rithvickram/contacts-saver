<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
		exit();
	}

$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
    $sql = "SELECT * FROM `contacts` WHERE `user_name` = '$username'";
    $result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
}
} else {
echo "0 results";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>
add new contact!
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

<a href="save.php">add a contact</a>
<br>
<a href="contacts.php">your contacts</a>
<br>
<a href="logout.php">logout</a>
<br>
<a href="reset.php">reset your password</a>
<br>
<a href="about.html">bout-us</a>
<br>
<a href="contact.html">contact-us</a>
</nav>
<main>
<h1>contacts</h1>
<p>
<b><?php echo $_SESSION["username"]; ?></b>
</p>
hello welcome to your contacts
<hr>
<p>
enter your email in the below form for viewing your contacts
</p>
<form method="post" action="contacts.php">
email: <input type="email" name="email" id="email" placeholder="please your email for getting your contacts" required>
<br>
<input type="submit" name="submit" id="submit" value="get">
</form>
<p>
did not save any contact? <a href="save.php">please click hear for saving a contact</a>
</p>
</main>
<hr>
<footer>
<p>
<a href="about.html">about-us</a>
<br>
<a hre="contact.html">contact-us</a>
<br>
this website is desined and developed in march 2023.
<br>
by ram.
</p>
</footer>
</body>
</html>