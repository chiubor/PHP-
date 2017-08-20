<?php
function fact($n){
    if ($n === 0 || $n === 1) return 1;
    else return $n*fact($n-1);
}

function bigFact($n){
    if ($n === 1) return 0;
    else return log($n, 10) + bigFact($n-1);
}
?>
<h3>分別用for 迴圈，while 迴圈及遞迴寫出階乘計算<br>
並計算出10！=3628800</h3>
<h1>階乘計算</h1>
<form action="" method="post">
    <input type="text" name="num">
    <input type="submit" name="ok" value="送出">
</form>
<?php
$num = !empty($_POST['num'])?$_POST['num']:'';
if ($num === 0) echo "$num! = 1";
elseif ($num > 0 && $num <= 170){
    //for 迴圈
    $sum = 1;
    for ($i=1; $i<=$num; $i++)
        $sum *= $i;
    echo "for 迴圈：$num! = $sum<br>";

    //while 迴圈
    $i = 1;
    $sum = 1;
    while($i<=$num){
        $sum *= $i;
        $i++;
    }
    echo "while 迴圈：$num! = $sum<br>";

    //遞迴
    echo "遞迴：$num! = ".fact($num)."<br>";
}
elseif ($num > 0 && $num > 170){
    echo "<h2>大數階乘：</h2>";
    //for 迴圈
    $e = 0;
    for ($i=1; $i<=$num; $i++)
        $e += log($i,10);
    echo "for 迴圈：$num! = 10 ^ $e<br>";

    //while 迴圈
    $i = 1;
    $e = 0;
    while($i<=$num){
        $e += log($i,10);
        $i++;
    }
    echo "while 迴圈：$num! = 10 ^ $e<br>";

    //遞迴
    echo "遞迴：$num! = 10 ^ ".bigFact($num)."<br>";
}

?>