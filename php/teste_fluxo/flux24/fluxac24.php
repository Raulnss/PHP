<?php
$n1=$_POST['n1'];
if ($n1=="marrom") {
    echo "o preco do marrom e 15,00 R$";
}elseif ($n1=="verde") {
    echo "o preco do verde e 20,00 R$";
}elseif ($n1=="azul") {
    echo "o preco do azul 40,00 R$";
}elseif ($n1=="vermelho") {
    echo "o preco do vermelho 80,00 R$";
}elseif ($n1=="preto") {
    echo "o preco do Preto 100,00 R$";
}else {
    echo "deu ruim";
}
?>