<?php
function fact($n){
    if ($n < 0) return -1;
    if ($n == 0 || $n == 1) return 1;
    $big[0] = 1;
    for ($i=2; $i<=$n; $i++){
        $carry = 0;
        $len = count($big);
        for ($j=0; $j<$len; $j++) {
            $total = $carry + $big[$j] * $i;
            if ($total > 0) {
                $big[$j] = $total % 10;
                $carry = ($total - $big[$j]) / 10;
            }
        }
        while($carry > 0){
            $len = count($big);
            $big[$len] = $carry % 10;
            $carry = ($carry - $big[$len]) / 10;
        }
    }
    return join("", array_reverse($big));
}
?>
<h3>進階題：如何算出大數階乘?譬如300！?</h3>
<h1>大數階乘計算</h1>
<form action="" method="post">
    <input type="text" name="num">
    <input type="submit" name="ok" value="送出">
</form>
<?php
$num = !empty($_POST['num'])?$_POST['num']:'';
if ($num === 0) echo "$num! = 1";
elseif ($num > 0){
    echo "$num! = ".fact($num);
}

?>