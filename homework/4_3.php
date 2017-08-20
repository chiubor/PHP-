<?php
function caculate($a, $b, $c){
    if ($a == 0) return null;
    $delta = $b*$b - 4*$a*$c;
    $delta2 = sqrt(abs($delta));
    $x=[];
    if ($delta < 0) {
        array_push($x,(-$b/(2*$a)).'+'.($delta2/(2*$a)).'i');
        array_push($x,(-$b/(2*$a)).'-'.($delta2/(2*$a)).'i');
    }
    else {
        array_push($x,(-$b+$delta2)/(2*$a));
        array_push($x,(-$b-$delta2)/(2*$a));
    }
    return $x;
}
?>
<h3>一元二次方程式 a*x^2+b*x+c=0(次方^符號是借用basic 的表示方式，無關php)<br>
分別給 係數 a,b,c,請算出x 的解，如為虛數，請在虛數i表示<br>
例 a=1,b=-3,c=2,得 x1=2,x2=1</h3>
<h1>一元二次方程式求解</h1>
<form action="" method="post">
    <input type="text" name="a"> x^2 +
    <input type="text" name="b"> x +
    <input type="text" name="c"> = 0
    <input type="submit" name="ok" value="送出">
</form>
<?php
$a = !empty($_POST['a'])?$_POST['a']:0;
$b = !empty($_POST['b'])?$_POST['b']:0;
$c = !empty($_POST['c'])?$_POST['c']:0;
if ($a != 0 && $b && $c) {
        $x = caculate($a, $b, $c);
        echo "x1 = $x[0]<br>";
        echo "x2 = $x[1]<br>";
}
?>