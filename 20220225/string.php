<?php
    $string="Hello World";
?>
<h3>strlen</h3>
<?php
    echo strlen($string);
?>
<h3>str_word_count</h3>
<?php
    echo str_word_count($string);
?>
<h3>substr</h3>
<?php
    echo substr($string, 3);
    echo "<br>";
    echo substr($string, 1, 7);
?>
<h3> strstr</h3>
<?php
    $email="test@example.com";
    echo strstr($email, '@');
    echo "<br>";
    echo strstr($email, '@',false);
?>
<h3> strpros </h3>
<?php
    echo strstr($string, 'World');
?>
<h3> explode </h3>
<?php
    $string2="Hello World, how are you?";
    // echo explode(" ", $string2);
    $strArr= explode(" ", $string2); //explode 會將字串轉成陣列，因此不能直接使用echo顯示，要先宣告一變數來儲存資料;
    var_dump($strArr); //顯示陣列的value& type
    echo ("<br>");
    print_r($strArr); //只顯示陣列數值
    echo ("<br>");
    for($i=0; $i<count($strArr);$i++) { //count(arr) 計算array中有多少筆資料
        echo $strArr[$i]."<br>";
    }
?>
<h3> str_replace </h3>
<?php
    echo str_replace("Hello", "BYE", $string);
?>