<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n=($n1+$n2)/2;
if ($n>=7) {
    echo "aprovado";
} elseif ($n<7 && $n>4) {
    echo "regular";
} elseif ($n<=4) {
    echo "reprovado";
}
?>