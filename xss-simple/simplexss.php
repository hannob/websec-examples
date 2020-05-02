<!DOCTYPE html><html lang="en"><head><title>Simple XSS</title></head>
<body>
<?php

if (isset($_REQUEST['name'])) {
    echo "<p>Hello ".$_POST['name']."!";
}

?><form method="POST">
Your name: <input name="name" value="Alice"><br>
<input type=submit name="ok" value="ok">
</form>
