# 基本
<?php
print "\n";
# 以下の$array[x];のx部分の数値を変化させて、どの単語が呼び出せるか試してみましょう。
$array = ['hoge', 'fuga', 'PHP', 'Laravel', 'Ruby', 'Ruby on Rails'];
print $array[x];

print "\n\n";
?>

# 連想配列
<?php
print "\n";
# 以下の$arrayからそれぞれの値の部分を呼び出すために文字列キーの部分を変化させてみましょう。
$array = [
    'php_framework' => 'Laravel',
    'ruby_framework' => 'Ruby on Rails',
    'python_framework' => 'Django'
];
print $array['xxx_xxx'];

print "\n\n";
?>