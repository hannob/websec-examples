<!DOCTYPE html><html lang="en">
<title>Login</title>
<?php

require_once("config.inc.php");

if (!array_key_exists('user', $_POST)) {
    ?><form method="POST">
Username:<input name="user" value="admin"><br>
Password:<input name="pass"><br>
<input type=submit>
</form>
<?php

    die();
}

$mi = new mysqli("localhost", $db_user, $db_pass, $db_name);
if ($mi->connect_errno) {
    die("error");
}

$query="SELECT * FROM users WHERE `user`='".$_POST['user'].
"' AND `pass`='".$_POST['pass']."';";

if (!($r=$mi->query($query))) {
    die("error");
}

if ($r->num_rows >= 1) {
    echo "login successful<br>\n";
} else {
    echo "login failed<br>\n";
}
