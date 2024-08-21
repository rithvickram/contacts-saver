
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
$cname = $_POST['cname'];
$phone = $_POST['phone'];
$username = $_SESSION['username'];
            $sql = "INSERT INTO `contacts` ( `name`, `phone`, `user_name`, `date`) VALUES ('$cname', '$phone', '$username', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
            }
        else{
            $showError = "please try after some time";
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
add a new contact.
</p>
to add new contact please fill the form below.
<br>
please note that you must enter your username also.
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> your contact is saved
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

<form action="save.php" method="post">
phone: <input type="phone" name="phone" id="phone" placeholder="please enter a phone number" required>
<br>
contact name: <input type="text" name="cname" id="cname" placeholder="please enter a contact name for the phone number given above" required>
<br>
email: <input type="email" name="email" id="email" placeholder="please enter your email" required>
<br>
<input type="submit" name="submit" id="submit" value="add">
</form>
<p>
want to view your contacts? please click hear: <a href="contacts.php">your contacts</a>.
</p>
<hr>
</main>
<footer>
<p>
<a href="contact.html">contact-us</a>
<br>
<a href="about.html">about-us</a>
<br>
this website is desined and developed in march 2023.
</p>
</footer>
</body>
</html>
