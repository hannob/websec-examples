<!DOCTYPE html><html lang="en">
<head><title>SSL Stripping example 2</title></head>
<body>
<p>Please Login!</p>
<form action="https://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>login/" method="POST">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit" value="Login">
</form>
</body></html>
