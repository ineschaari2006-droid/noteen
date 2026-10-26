
<?php

require_once "config.php";
require_once "functions.php";

afficherNotes($notes);

$val = moyenne($notes);
echo "<p>Moyenne de la classe : $val</p>";

echo "<p>Admis :</p>";
echo "<pre>";
print_r(admis($notes));
echo "</pre>";

echo "<p>Notes triées :</p>";
echo "<pre>";
print_r(trierNotes($notes));
echo "</pre>";


echo "<p>Notes avec 1 point bonus :</p>";
echo "<pre>";
print_r(bonus($notes));
echo "</pre>";

?>
