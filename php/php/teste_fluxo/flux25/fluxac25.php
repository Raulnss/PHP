<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
if ($n1=="masculino") {
    $r=(72.7*$n1)-58;
    echo "peso seria ".$r;
} else {
    $f=(62.1*$n1)-44.7;
    echo "peso seria ".$f;
}
?>