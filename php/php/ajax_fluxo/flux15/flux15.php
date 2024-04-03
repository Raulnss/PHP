<?php
$n1=$_POST['n1'];
if ($n1==80) {
    echo "ok";
} elseif ($n1>80) {
    echo "foi multado em mais ".($n1-80)*5;
} elseif ($n1<80 && $n1>40) {
    echo "pode aumentar a velocidade";
} elseif ($n1<=40) {
    echo " foi multado";
}
?>