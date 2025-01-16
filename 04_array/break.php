<?php
$array = ['hoge', 'fuga', 'PHP', 'Laravel', 'Ruby', 'Ruby on Rails'];
print "\n";

foreach ($array as $value) {
    if ($value == 'Ruby') {   # 'Ruby'の部分を他の配列内の要素にいろいろ変えてみましょう。
      break;
    }
    print "{$value}";
    print "\n";
}

print "\n";
?>