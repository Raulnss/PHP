<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$r=($n1+$n2)/2;
if ($r>=7) {
    echo "aprovado";
} elseif ($r<=4) {
    echo "reprovado";
} else {
    echo "regular";
}
?>