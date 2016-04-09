<?php
include('bootstrap.php');

session_start();

if (!empty($_POST)) {

    $conn = connectDB();

    // Check to see if the user exists in table or not
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = " select * from users where username = '$username'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo $conn->error;
        exit;
    }

    while($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row["password"])) {
            echo "<h1>The user has already existed.<h1>";
            exit;
        }
    }

    // Insert the user into a database
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$hashed_password')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo $conn->error;
        exit;
    }

    $_SESSION['is_signup_success'] = true;

    mysqli_close($conn);

    header("Location:login.php");

}