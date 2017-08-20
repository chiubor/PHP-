<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h3>利用練習二的檔案,將圖片寛度設為200px,再將圖片排列,一排有三張,將全部的圖片顯示,並在圖片下顯示圖片名稱</h3>
<?php
if ($handle = opendir('images')) {
    $fileArray = [];
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            array_push($fileArray, $file);
        }
    }
    closedir($handle);

    echo "<table>";
    for ($i=0; $i<count($fileArray); $i++) {
        if ($i % 3 === 0) {
            if ($i > 0) echo "</tr>";
            echo "<tr>";
        }
        echo "<td><img src='images/$fileArray[$i]' width=200><br>";
        echo "$fileArray[$i]</td>";
    }
    echo "</table>";
}
?>
</body>