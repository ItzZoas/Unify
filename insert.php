<?php
include('conexao.php')

if(!$dbcon){
  die('Não consegiu conectar: '.mysql_error());
}

if(isset($_POST['submit'])){
  $username_user=$_POST['username'];
  $senha=$_POST['password'];
  $email=$_POST['email'];
  $query = "INSERT INTO signup (username,senha,email) VALUES ('$username','$senha','$email')";
  if (mysqli_query($dbcon, $query)) {
    echo "Dados inseridos com sucesso!";
 }
  else {
    echo "Error: " . $sql . ":-" . mysqli_error($dbcon);
 }
  mysqli_close($dbcon);
}
?>