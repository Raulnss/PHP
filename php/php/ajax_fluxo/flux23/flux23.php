<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
if ($n1=="masculino") {
    echo "peso ideal = ".(72*$n2)-58;
} else {
    echo "peso ideal = ".(62*$n2)-44;
}
?>