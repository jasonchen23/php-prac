<?php
    $var1= null;
    var_dump($var1);
    echo '<br>'; //畫面印出
    $var2= 3;
    var_dump($var2); //PHP的console.log
    $a=99; //全域變數
    function show() { //區域變數
        $b=10;
        static $c=1; //宣告靜態變數，每次數值改變後都會更新
        echo 'b is $b'; //單引號無法顯示$
        echo '<br>';
        echo "b is $b"; //雙引號可以顯示$
        echo '<br>';
        echo "a is $a"; //區域變數無法使用全域變數
        echo '<br>';
        echo "a is $GLOBALS[a]"; //使用GLOBALS可以使用全域變數
        echo '<br>';
        echo "a is: ".$GLOBALS['a']; // .的功能對應js的+，是負責連接字串
        echo '<br>';
        echo "c is $c"; //動態變數
        echo '<br>';
        echo "---";
        echo '<br>';
        $b++;
        $c++;
    }
    echo "b is $b"; //區域變數無法延伸至全域變數
    show();
    show();
?>