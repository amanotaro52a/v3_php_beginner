<?php
$hoge = 10;
$fuga = 50;
$number_10 = 10;
$word_10 = '10';

# 以下trueなら1が表示され、falseなら何も表示されないので確認してみましょう。（見やすいように"\n"を使用しています）
echo "===== Test_No01 =====\n";
echo (true && true);
echo "\n";

echo "===== Test_No02 =====\n";
echo (true && false);
echo "\n";

echo "===== Test_No03 =====\n";
echo (false && true);
echo "\n";

echo "===== Test_No04 =====\n";
echo (false && false);
echo "\n";

echo "===== Test_No05 =====\n";
echo (true || true);
echo "\n";

echo "===== Test_No06 =====\n";
echo (true || false);
echo "\n";

echo "===== Test_No07 =====\n";
echo (false || true);
echo "\n";

echo "===== Test_No08 =====\n";
echo (false || false);
echo "\n";
?>