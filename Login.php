<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents('php://input'), true);

    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "<h1>Registration successful....</h1>  <h2>$username</h2> <h3>Check your email ($email) for verification.</h3>";
} else {
    echo "Access Denied!";
}
?>
