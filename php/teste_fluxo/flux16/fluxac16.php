<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
if ($n1 >= $n2) {
    echo "a diferenca e".$n1-$n2;
} else {
    echo "a diferenca e".$n2-$n1;
}
?>