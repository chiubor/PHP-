<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h3>練習一:利用迴圈，將10張圖片顯示出來</h3>
<?php
if ($handle = opendir('images')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            echo "<img src='images/$file'><br>";
        }
    }
    closedir($handle);
}
?>
</body>