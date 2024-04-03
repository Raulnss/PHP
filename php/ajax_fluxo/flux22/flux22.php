<?php
$n1=$_POST['n1'];
if ($n1=="marrom") {
    echo "o preco = 15";
} elseif ($n1=="verde") {
    echo "o preco = 20";
} elseif ($n1=="azul") {
    echo "o preco = 40";
} elseif ($n1=="vermelho") {
    echo "o preco = 80";
} else {
    echo "deu ruim";
}
?>