<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h3>進階練習:利用練習二的檔案，將圖片名稱由小到大(或由大到小),排列顯示</h3>
<?php
if ($handle = opendir('images')) {
    $fileArray = [];
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            array_push($fileArray, $file);
        }
    }
    closedir($handle);

    //升冪
    sort($fileArray);
    echo "<h2>由小排到大(升冪)</h2>";
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

    //降冪
    rsort($fileArray);
    echo "<h2>由大排到小(降冪)</h2>";
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