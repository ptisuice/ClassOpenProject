<?php

$d = dir("E:\wamp\WWW\PourTest");

while (false !== ($entry = $d->read())) {
   echo $entry."<br>";
   }
$d->close();
?>
