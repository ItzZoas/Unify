<?php

include("conexao.php");

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM signup WHERE username = '$username' AND senha = '$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    session_start();
    $_SESSION['username'] = $row['username'];
    header("location: index.html");
  } else {

    echo 'Invalid username or password!';
  }
}

// Close the database connection
mysqli_close($conn);
?>