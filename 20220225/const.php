<?php
    // const $A=1; //const 不允許使用$
    // echo A;
    const A=2;
    echo A;
    // A=3; 無法更改const之數值

    echo __LINE__."<br>";
    echo __DIR__."<br>";
    echo __FILE__."<br>";
    
    function myfunction() {
        echo __FUNCTION__."<br>";
    }
    myfunction();
    // echo "<h1 class="$test1">hello</h1>"
?>