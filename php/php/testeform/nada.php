<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = 2023-$n3;
if ($n4 >= 18 && $n4 < 60) {
    echo "bem vindo ".$n1." ".$n2." você tem ".$n4." anos e por isso já é adulto.";
} else if ($n4 < 18 && $n4 >= 16) {
    echo "bem vindo ".$n1." ".$n2." você tem ".$n4." anos e por isso já é quase adulto.";
} elseif ($n4 < 16 && $n4 >= 12) {
    echo "bem vindo ".$n1." ".$n2." você tem ".$n4." anos e por isso já é adolecente.";
} elseif ($n4 < 12 && $n4 >= 4) {
    echo "bem vindo ".$n1." ".$n2." você tem ".$n4." anos e por isso já é criança.";
} elseif ($n4 < 4 && $n4 >= 0) {
    echo "bem vindo ".$n1." ".$n2." você tem ".$n4." anos e por isso já é bebe.";
} elseif ($n4 >= 60) {
    echo "bem vindo ".$n1." ".$n2." você tem ".$n4." anos e por isso já é idoso.";
} elseif ($n4 > 0) {
    echo "voce nao existe";
} else {
    echo "deu ruim!";
}
?>