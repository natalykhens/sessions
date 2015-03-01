<?php

$users = array(
'username1' => md5('123'),
'username2' => md5('321'),
'username3' => md5('qwe'),
'username4' => md5('asd'),
'username5' => md5('12z'),
'username6' => md5('32c'),
);

$errors = array();

if(isset($_POST['submit'])) {
$login = $_POST['login'];
$pass = md5($_POST['password']);

if(!isset($users[$login])) {
$errors['login'] = 'User not found';
} else if ($users[$login] != $pass) {
$errors['password'] = 'Password is invalid';
} else {
echo 'Hello, '. $login . '!';
}
}

?>
<html>
<body>
<form method="post">

<label for="login">Enter login:</label><br />
<input type="text" name="login" id="login"/>
<?php
if(isset($errors['login'])) {
echo $errors['login'];
}
?>

<label for="password">Enter password:</label><br />
<input type="password" name="password" id="password"/>
<?php
if(isset($errors['password'])) {
echo $errors['password'];
}
?>

<input type="submit" value="OK" name='submit' />
</form>
</body>
</html>