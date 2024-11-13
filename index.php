<!-- PHP SNACKS -->
<!-- Scrivere una funzione che ritorni il numero di vocali presenti in una stringa -->

<?php

function getVocals(string $str): int {
$count = 0;

// Faccio un ciclo for per girare nella stringa e se trovo una vocale aggiungo al conteggo 1
for ($i=0; $i < strlen($str) ; $i++) { 
    if (in_array($str[$i], ['a', 'e', 'i', 'o', 'u'])) {
        $count = $count + 1;
    } else{
        echo('Nella tua stringa non è presente alcuna vocale');
    }
} 
// Ritorno il numero di vocali che ho trovato nella stringa in caso ce ne fossero 
return $count;
}

?>