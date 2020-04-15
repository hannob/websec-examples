<!DOCTYPE html><html lang="en">
<head><title>Flickering Words</title></head>
<body>
<form method="POST">
<p>Type in two words:</p>
<input type="text" name="word1" value="Hello"><br>
<input type="text" name="word2" value="World"><br>
<input type="submit" value="OK!">
</form>
<h1 id="f1">&nbsp;</h1>
<?php

if (isset($_POST['word1']) && isset($_POST['word2'])) {
    ?>
<script>
function blink1() {
    document.getElementById("f1").innerHTML=<?php echo json_encode($_POST['word1'], JSON_UNESCAPED_SLASHES); ?>;
}

function blink2() {
    document.getElementById("f1").innerHTML=<?php echo json_encode($_POST['word2'], JSON_UNESCAPED_SLASHES); ?>;
}

setInterval(blink1, 997);
setInterval(blink2, 727);
</script>
<?php
}
