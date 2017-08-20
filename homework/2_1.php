<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h3>練習二:假設在 images 底下的圖片張數不清楚有幾張，請利用讀取檔案的方式,顯示全部的圖片</h3>
<?php
if ($handle = opendir('images')) {
    $fileArray = [];
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            array_push($fileArray, $file);
        }
    }
    closedir($handle);
    foreach ($fileArray as $file) {
        echo "<img src='images/$file' width=400><br>";
        echo "$file<br>";
    }
}
?>
</body>