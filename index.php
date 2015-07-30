<?php
/*******************************
 * @file index.php
 *
 * @author : ptisuice@gmail.com
 *******************************
 * lit un dossier
 * read a repertorie
 *******************************
 */

require_once('E:\wamp\www\PourTest\func_dossier\func_lire_dossier.php');

$objD = dir('E:\wamp\www\PourTest\func_dossier');

readRepertoire();
?>
