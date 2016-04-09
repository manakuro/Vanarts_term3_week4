<?php
include('bootstrap.php');

if (!empty($_POST)) {

    session_start();

    $conn = connectDB();

    // Check to see if the user exists in table or not
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = " select * from users where username = '$username'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo $conn->error;
        exit;
    }

    $isValid = false;
    $user = array();
    while($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row["password"])) {
            $user = $row;
            $isValid = true;
        }
    }

    $_SESSION['is_signup_success'] = '';
    if ($isValid) {

        $_SESSION['auth'] = true;
        $_SESSION['is_login_error'] = false;
        $_SESSION['user_info'] = $user;
        header('Location: ./resources.php');

    } else {

        $_SESSION['auth'] = false;
        $_SESSION['is_login_error'] = true;
        header('Location: ./login.php');

    }


}