<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$r;
$r = ($n1+$n2+$n3+$n4)/4;
if ($r>=7) {
    echo "voçê passol";
} else {
    echo "voçê reprovol";
}
?>