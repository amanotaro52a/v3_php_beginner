# 値渡し
<?php
function hoge($number) {
  $number++;
  return $number;
}

$value = 5;

print "\n";
print hoge($value);   # 6

print "\n\n";
print $value;         # 5
print "\n\n";
?>

# 参照渡し
<?php
function hoge(&$number) {
  $number++;
  return $number;
}

$value = 5;

print "\n";
print hoge($value);   # 6

print "\n\n";
print $value;         # 6
print "\n\n";
?>