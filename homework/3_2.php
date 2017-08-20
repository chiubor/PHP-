<h3>練習三:分別將 images 底下的10張圖片取其中2張,存成 base64的格式到陣列中,<br>
另外產生名稱為 1 和2 的連結,點1會將陣列0的圖片顯示,點2會將陣列1的圖片顯示<br>
(註:陣列由0開始),請勿連結到 imges 底下的圖片</h3>
<?php
session_start();
if (!isset($_SESSION['images'])) {
    if ($handle = opendir('images')) {
        $fileArray = [];
        while (false !== ($file = readdir($handle))) {
            if ($file != "." && $file != "..") {
                array_push($fileArray, $file);
            }
        }
        closedir($handle);

        $count = count($fileArray);
        $images = [];
        $img_no = 2; //隨機選幾張圖
        for ($i=0; $i<$img_no; $i++) {
            while (in_array($file = $fileArray[rand(0, $count)], $images));
            $path = "images/$file";
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            Array_push($images, $base64);
        }
        $_SESSION['images'] = $images;
    }
}
for ($i=1; $i<=count($_SESSION['images']); $i++)
    echo "<a href='?img=$i'>圖片$i</a> ";
echo "<a href='?reset=1'>重新抓圖</a> ";
echo "<br>";
if (!empty($_GET['img']))
    echo "<img src='" . $_SESSION['images'][$_GET['img']-1] . "'><br>";

if (isset($_GET['reset'])&&($_GET['reset']==1))
    session_destroy();
?>