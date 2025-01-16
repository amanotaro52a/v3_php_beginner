# 例題① 配列
<?php
$array = ['hoge', 'fuga', 'PHP', 'Laravel', 'Ruby', 'Ruby on Rails'];
print "\n";

foreach ($array as $value) {
    print "{$value}";
    print "\n";
}

print "\n";
?>

# 例題② 連想配列
<?php
$array = [
    'php_framework' => 'Laravel',
    'ruby_framework' => 'Ruby on Rails',
    'python_framework' => 'Django'
];
print "\n";

foreach ($array as $key => $value) {
    print "{$key}：{$value}";
    print "\n";
}

print "\n";
?>

# 例題③ 連想配列（例題①と同じ記載した場合）
<?php
$array = [
    'php_framework' => 'Laravel',
    'ruby_framework' => 'Ruby on Rails',
    'python_framework' => 'Django'
];
print "\n";

foreach ($array as $value) {
    print "{$value}";
    print "\n";
}

print "\n";
?>
