<?php
$array = [0, 1, 2, 'PHP', 3, 4, 'Laravel', 5];

print "\n";

foreach ($array as $value) {
    # $valueの値が2以下の場合は以降の処理をスキップし、2以上の場合は以降の処理を実行します。
    if ($value <= 2) { continue; }   # 2 の部分を他の配列内の要素にいろいろ変えてみましょう。

    print "{$value}";
    print "\n";
}

print "\n";
?>