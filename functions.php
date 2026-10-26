
<?php


function afficherNotes($notes) {
    foreach ($notes as $nom => $valeur) {
        echo "<p>$nom : $valeur</p>";
    }
}


function moyenne(array $notes): float {
    return array_sum($notes) / count($notes);
}


function admis($notes) {
    return array_filter($notes, fn($n) => $n >= MOY);
}


function trierNotes($notes) {
    sort($notes);
    return $notes;
}


function bonus($notes) {
    return array_map(fn($n) => $n + 1, $notes);
}

?>
