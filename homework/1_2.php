<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h3>利用練習一的檔案,只想顯示號碼是奇數(或偶數)的圖片</h3>
<?php
if ($handle = opendir('images')) {
    $i = 0;
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            if ($i % 2 === 0)
                echo "<img src='images/$file'><br>";
        }
        $i++;
    }
    closedir($handle);
}
?>
</body>