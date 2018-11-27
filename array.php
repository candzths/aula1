<!DOCTYPE html>
<html>
<body>

<?php
$fruta = array("banana", "laranja azul", "morango", "pera coreana", "uva", "abacaxi", "kiwi", "melancia"); 
echo "I like " . $fruta[0] . ", " . $fruta[1] . " and " . $fruta[2] . ".";

$total = count($fruta);

echo "<br>";
echo "Lista de frutas";
echo "<br>";
echo "TOTAL de frutas =". $total;
echo "<br>";
for ($i=0; $i < $total; $i++) { 
	echo ($i+1)." ".$fruta[$i]. "<br>";
}
?>

</body>
</html>