<?php

$d = dir("E:\wamp\WWW\PourTest");


echo "Pointeur : " . $d->handle . "<br>";
echo "Chemin : " . $d->path . "<br>";

while (false !== ($entry = $d->read())) {
   echo $entry."<br>";
   }
$d->close();
?>
