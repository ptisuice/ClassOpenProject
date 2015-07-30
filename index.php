<?php
/**
 * @fichier index.php
 * @author : ptisuice@gmail.com
 *******************************
 * lit un dossier
 * read a repertorie
 */

$objD = dir("E:\wamp\WWW\PourTest");

while (false !== ($strEntry = $objD->read())) {
   echo $strEntry."<br>";
   }
$objD->close();
?>
