<?php
//  submiting form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $number = $_POST['number'];
    $message = $_POST['message'];
  }
  // connecting to database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "contact";

  // create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// die if connection was not successful
if (!$conn) {
  die("sorry we failed to connect :" .mysqli_connect_error());
} else {
// sql query to be executed
$sql= "INSERT INTO `contactus` ( `name`, `email`, `subject`, `number`, `message`, `date`) VALUES ( '$name ', '$email', '$subject', '$number', '$message', current_timestamp())";
$result = mysqli_query($conn, $sql);
if ($result) {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your details have been submitted successfully!
      </div>';
} 
}

?>