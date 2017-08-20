<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
if ($handle = opendir('images')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            $newfile = "abc0".substr($file,1);
            if (rename("images/".$file, "images/".$newfile))
                echo "$file → $newfile<br>";
        }
    }
    closedir($handle);
}
?>
</body>