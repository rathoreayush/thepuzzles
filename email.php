
<?php
$userEmail = ""; // we leave it blank
if (isset($_POST['subscribe'])) { // if subscribe btn clicked
    $userEmail = $_POST['email']; // getting user email
    if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) { // validating user enter email
    
    // submiting email

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
}
// connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "subscriber";

// create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// die if connection was not successful
if (!$conn) {
  die("sorry we failed to connect");
}
// sql query to be executed
$sql="INSERT INTO `subscriber` (`email`, `datetime`) VALUES ('$email', current_timestamp())";
$result = mysqli_query($conn, $sql);
if ($result) {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Thank You</strong> Your details have been submitted successfully!
      </div>';
} else {
  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  We are facing some technical issue your email not submit successfully! We regret the inconvinience caused!
</div>';
}

    }
        else{
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
       <strong> '. $userEmail .' </strong>is not a valid email!
      </div>';
    }
}
?> 