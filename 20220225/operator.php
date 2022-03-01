<?php

?>
<?php
$x=77;
$y="77";

var_dump($x==$y);
echo "<br>";
var_dump($x===$y);
echo "<br>";
?>
<h3>條件運算子</h3>
<?php
$i=10;
// if($i=0){}
// else{}
$b = ($i>0) ? "positive" : "negative"; // 只能以單行的形式使用
echo $b;
?>
<h3>組合運算子</h3>
<?php
    $m=10;
    $n=5;
    echo $m<=>$n;
?>
<h3>邏輯運算子</h3>
<?php
    $m=10;
    $n=5;
    var_dump ($m==10 and $n==5);
    echo "<br>";
    var_dump($m==10 && $n==5);
?>
<h3>參考運算子</h3>
<?php
    $e=10;
    $f=$e;
    echo "e is: $e<br>";
    echo "e is: $f<br>";
    $e=8;
    echo "e1\tis: $e<br>";
    echo "e is: $f<br>";
    $g=5;
    $h=&$g; //+& by reference
    echo "g is: $g<br>";
    echo "h is: $h<br>";
    $g=8;
    echo "g is: $g<br>";
    echo "h is: $h<br>";
?>