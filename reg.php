<?php
require_once('connect.php');

    if ((!empty($_POST['login'])) and (!empty($_POST['password']))) {
          $login = $_POST['login'];
          $password = $_POST['password'];
          $query = "INSERT INTO users SET login='$login', password='$password'";
          $result = mysqli_query($link, $query);
          

    }

?>