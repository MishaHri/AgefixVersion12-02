<?php
if($_POST["Message"]) {
mail("hrituleacmihaela@yahoo.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: jane@janedoe.com");
}
?>
