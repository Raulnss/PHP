<?php
$n1=$_POST['n1'];
$op=$_POST['op'];
$n2=$_POST['n2'];
if ($op == "+" || $op==" ") {
    $m=$n1+$n2;
    echo "a soma ".$m;
} elseif ($op == "-") {
    $s=$n1-$n2;
    echo "a subtracao ".$s;
} elseif ($op == "*") {
    $mu=$n1*$n2;
    echo "a multiplicacao ".$mu;
} elseif ($op == "/") {
    $d=$n1/$n2;
    echo "a divisao ".$d;
} elseif ($op == "%") {
    $r=$n1%$n2;
    echo "o resto ".$r;
} else {
    echo "deu ruim";
}
?>