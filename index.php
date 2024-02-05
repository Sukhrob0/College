<h1><?php
session_start();
    if(isset($_SESSION['alert'])) {
        echo $_SESSION['alert'];
        unset($_SESSION['alert']);
    }
?></h1>

<h1>Регистрация</h1>
<form action="reg.php" method="post">
    <input type="text" name = 'login' playceholder = 'login'>   
    <input type="password" name = 'password' playceholder = 'password'>  
    <input type="sybmit">
</form>

<h1>Авторизация</h1>
<form action="auto.php" method="post">
    <input type="text" name = 'login' playceholder = 'login'>   
    <input type="password" name = 'password' playceholder = 'password'>  
    <input type="sybmit">
</form>

<h1>Восстоновление пароля</h1>
<form action="auto.php" method="post">
    <input type="text" name = 'login' playceholder = 'login'>   
    <input type="password" name = 'password' playceholder = 'password'>  
    <input type="text" name = codwore placeholder = 'ВВЕДИТЕ КОДОВОЕ СЛОВО '>
    <input type="sybmit">
</form>
























<form action="reg.php" method="post">
    <input type="text" name = "login" placeholder = "login">
    <input type="password" name = "password" placeholder = "password">
    <input type="submit" value="">
</form>