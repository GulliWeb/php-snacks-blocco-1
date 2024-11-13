<!-- PHP SNACKS -->
<!-- Scrivere una funzione che ritorni il numero di vocali presenti in una stringa -->

<?php

function getVocals(string $str): int {
$count = 0;

for ($i=0; $i < strlen($str) ; $i++) { 
    if (in_array($str[$i], ['a', 'e', 'i', 'o', 'u'])) {
        $count = $count + 1;
    }
} 
return $count;
}

?>