<?php

$notes=["Mohamed" => 14,"Sami" => 9,"Amel" => 19,"Yassine" => 8,"Ines"=> 12];

foreach($notes as $nom => $valeur)
    { echo "<p> $nom : $valeur </p><br>";}

function moyenne( array $notes):float
{
    return array_sum($notes) / count($notes);
 
}
$val= moyenne($notes);
echo "<p> Moyenne de la classe : $val </p><br>";

$admis = array_filter($notes , fn($n) => $n>=10);
echo "<p> Admis : </p><br>";
echo"<pre>";//bech koll mayafichi yarjaa lel star
print_r($admis);
echo"</pre>";//trajaa le star
sort($notes);
echo "<p> Notes triées :</p><br>";
echo"<pre>";
print_r($notes);
echo"</pre>";
$doubles = array_map(fn($n) => $n+1 , $notes);
echo "<p> Notes avec 1 point bonus :</p><br>";
echo"<pre>";
print_r($doubles);
echo"</pre>";
?>
