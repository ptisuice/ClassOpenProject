<?php
/**
 * @file : f_readRepertorie.php
 *
 * lit un r�pertoire - read Repertorie
 *
 * @param global $objD command dir() result 
 */

function readRepertoire()
{
    global $objD;
    while (false !== ($strEntry = $objD->read())) {
        echo $strEntry."<br>";
    }
}
?>
