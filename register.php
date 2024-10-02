<?php 
include 'connect.php';

// Handle registration
if(isset($_POST['signUp'])){
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email']; 
    $password = $_POST['password']; 
    $password = md5($password); // Encrypt password

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

   {
        $insertQuery = "INSERT INTO users (firstName, lastName, email, password)
                        VALUES ('$firstName', '$lastName', '$email', '$password')";
        if($conn->query($insertQuery) === TRUE){
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

// Handle sign-in
if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password); // Encrypt password

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit();
    } else {
        echo "Not Found, Incorrect Email or Password";
    }
}
?>
