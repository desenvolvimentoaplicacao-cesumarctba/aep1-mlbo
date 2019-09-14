<?php

$v1 = $_GET['x'];//Recebe informção via url
$v2 = $_GET['y'];

echo "<h2>Valores recebidos: $v1 e $v2</h2>";
echo "<br/>O valor absoluto de $v2 e " . abs($v2); //valor absoluto
echo "<br/>O valor de $v1<sup>$v2</sup> e ". pow($v1, $v2); //potencia
echo "<br/>A raiz de $v1 e " .sqrt($v1); //raiz quadrada




