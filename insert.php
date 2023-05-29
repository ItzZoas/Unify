<?php
session_start();

include('conexao.php');

if (isset($_POST["submit"])) {
  $nome = $_POST["username"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];
  $confirm = $_POST["senha_confirm"];
  $duplicate = mysqli_query($conn, "SELECT * FROM signup WHERE username = '$nome' OR email = '$email'");
  if (mysqli_num_rows($duplicate) > 0) {
    echo
      "<script> alert('Username or Email Has Already Taken'); </script>";
  } else {
    if ($senha == $confirm) {
      $query = "INSERT INTO signup VALUES('$nome','$senha','','$email')";
      mysqli_query($conn, $query);
      echo
        "<script> alert('Registration Successful'); </script>";
      header("location: index.html");
    } else {
      echo
        "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>