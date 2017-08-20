<?php
function fibonacci($n){
    if ($n === 0) return 0;
    if ($n === 1) return 1;
    return fibonacci($n-1) + fibonacci($n-2);
}
?>
<h3>費氏數列是很特別的數列，黃金比例，男星，自然界中的費氏數<br>
請列出1000下內的費氏數列</h3>
<h1>費氏數列</h1>
<form action="" method="post">
    <input type="text" name="num">
    <input type="submit" name="ok" value="送出">
</form>
<?php
$num = !empty($_POST['num'])?$_POST['num']:'';
if ($num >= 0) {
    echo "0";
    for ($i=1; ($f = fibonacci($i)) <= $num; $i++){
        echo ",$f";
    }
}
?>