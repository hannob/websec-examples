<!DOCTYPE html><html lang="en"><head><title>Example</title></head>
<?php

$colors=["green", "red", "blue", "yellow", "white"];

session_set_cookie_params(['path' => '/', 'secure' => true,
'httponly' => true, 'samesite' => 'Lax', ]);

session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    session_start();
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    if (($_POST['username'] === "admin") && ($_POST['password'] === "admin")) {
        $_SESSION['username']="admin";
    } else {
        die("Login failed!");
    }
}

if (!isset($_SESSION['username'])) {
    ?><p><form method="POST">
Username: <input name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit" value="Ok"></p>
<p><em>You can login with admin/admin.</em></p>
<?php
die();
}



if (isset($_POST['color']) && in_array($_POST['color'], $colors)) {
    $_SESSION['color'] = $_POST['color'];
}

if (isset($_SESSION['color'])) {
    $color=$_SESSION['color'];
} else {
    $color="white";
}

?>

<body style="background-color:<?php echo $color; ?>">
<p>You can change the color:</p>
<form method="POST">
<input type="radio" name="color" value="red">red<br>
<input type="radio" name="color" value="green">green<br>
<input type="radio" name="color" value="blue">blue<br>
<input type="radio" name="color" value="yellow">yellow<br>
<input type="radio" name="color" value="white">white<br>
<input type="submit" value="Set color">
<br><br>
<input type="submit" name="logout" value="Logout">
</form>
