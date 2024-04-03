<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$n=($n1+$n2+$n3+$n4)/4;
if ($n>=7) {
    echo "passou";
} else {
    echo "nao passou";
}
?>