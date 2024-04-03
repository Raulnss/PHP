<?php
$n1=$_POST['n1'];
if ($n1 == 80) {
    echo "tudo certo";
} elseif ($n1 > 80) {
    $n=$n1-80;
    echo "voce foi multado em mais".$n;
} elseif ($n1 < 40) {
    echo "voce foi multado";
} else {
    echo "acelere mais";
}
?>