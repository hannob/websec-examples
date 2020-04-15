<?php

if (substr($_FILES['textfile']['name'], -3)!=="txt") {
    die("Only .txt allowed!");
}

$fn=bin2hex(random_bytes(16));

move_uploaded_file($_FILES['textfile']['tmp_name'], "t/$fn.txt");
echo "success!";

$o='<!DOCTYPE html><html lang="en"><head><title>';
$o.=$_POST['title'];
$o.="</title></head><body>\n";
$o.="<p>Here is your text file:</p>\n";
$o.="<iframe src='$fn.txt'></iframe><br>\n";
$o.="<a href='$fn.txt'>Direct link</a>\n";
file_put_contents("t/$fn.html", $o);

header("Location: t/$fn.html");
