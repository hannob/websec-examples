<!DOCTYPE html><html lang="en"><head><title>Single Quote XSS</title></head>
<body>
<form method="POST">
Your name: <input name="name" value='<?php
if (isset($_POST['name'])) {
    echo $_POST['name'];
}
?>'><br>
<input type=submit name="ok" value="ok">
</form>
