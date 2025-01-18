<?php
$hoge = 'Hello World!';
print "\n";

# ----- ↓ローカルスコープ↓ -----
function fuga($hoge) {
    $hoge = 'Goodbye World...';   # （＊1）
    return print $hoge;           # Goobye World..
}
# ----- ↑ローカルスコープ↑ -----

fuga($hoge);
print "\n\n";
print $hoge;                       # Hello World!（＊2）
print "\n\n";
?>