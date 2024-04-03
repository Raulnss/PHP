<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
if ($n1>$n2) {
    $r=$n1-$n2;
    echo " a difereca = ".$r;
} else {
    $n=$n2-$n1;
    echo " a difereca = ".$n;
}
?>