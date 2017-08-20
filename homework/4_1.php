<?php
function gcd($x, $y){
    if ($x === 0) return $y;
    if ($y === 0) return $x;
    if ($x >= $y) return gcd($y, $x % $y);
    else return gcd($y % $x, $x);
}
?>
<h3>用遞迴寫出兩個正整數的最大公因數（gcd)<br>
gcd(144,128) 得到 ? gcd (742469137,283209877)得到?<h3>
<h1>最大公因數</h1>
<form action="" method="post">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <input type="submit" name="ok" value="送出">
</form>
<?php
$num1 = !empty($_POST['num1'])?$_POST['num1']:0;
$num2 = !empty($_POST['num2'])?$_POST['num2']:0;

if ($num1>0 and $num2>0)
    echo "gcd($num1,$num2)=".gcd($num1, $num2);
?>