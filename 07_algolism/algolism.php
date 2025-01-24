<?php
function chapter01_01($array1) {
    // 配列の長さを取得
    $length = count($array1);

    // バブルソートの実装
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - 1 - $i; $j++) {
            if ($array1[$j] > $array1[$j + 1]) {
                // 要素を交換
                $temp = $array1[$j];
                $array1[$j] = $array1[$j + 1];
                $array1[$j + 1] = $temp;
            }
        }
    }

    return $array1;
}

$array1 = [5, 3, 1, 4, 2];
$sortedArray = chapter01_01($array1);
foreach ($sortedArray as $value) {
    echo $value . " ";
}
?>
