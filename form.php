<?php

/*
 stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, 
 sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
*/


$nameNotCensor = $_GET['name'];
$pwdFind = $_GET['pwd'];


echo 'Nome: ' . $nameNotCensor . '<br>';
echo 'Lunghezza Nome: ' . strlen($nameNotCensor);

var_dump (str_replace($pwdFind, '***', $nameNotCensor));
?>