<?php
$user = 'root';
$pass = '';
$database = 'db_connect';

$db = new mysqli('localhost', $user, $pass, $database);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

/*
$email = $_POST['email'];
$email_query = "SELECT * FROM form WHERE email='$email'";
$email_result = mysqli_query($db, $email_query);


while($row = mysqli_fetch_assoc($user_result)) {
    echo "<br>" . $row['name'] . ", " . $row['email'] . " " . $row['age'] . "<br>";
}
    */

// Close the database connection
// mysqli_close($db);
?>
