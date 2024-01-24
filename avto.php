<?php
include('connect.php');

    if (!empty($_POST['login'])) {
        $login = $_POST['login'];
        $password = $_POST['password'] ;
    
    
        $query= "SELECT * FROM users WHERE login='$login' AND password='$password' ";
        $result= mysqli_query($link, $query);
        if ($result) {
            header('Location: index.php');
            
        }
    }



?>