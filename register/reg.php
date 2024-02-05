<?php
session_start();
include("conn.php");
        if ((!empty($_POST["login"])) and (!empty($_POST["password"])) and (!empty($_POST["codeword"]))) {
        $login = $_POST["login"];
        $password = $_POST["password"];
        $codeword = $_POST["codeword"]
        
        $query = "INSERT INTO registration SET login = '$login' , password = '$password'";
        $result = mysqli_query($conn, $query);

}

?>