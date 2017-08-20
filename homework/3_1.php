<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h3>將 images 底下的圖片全部存成 base64的格式到陣列中,<br>
接著將陣列中圖片全部顯示出現</h3>
<?php
if ($handle = opendir('images')) {
    $fileArray = [];
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            $path = "images/$file";
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            array_push($fileArray, $base64);
        }
    }
    closedir($handle);

    foreach ($fileArray as $file) {
        echo "<img src='$file' width=400><br>";
    }

}
?>
</body>