# 例
<?php
class Product {
    public $name;
    public $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show() {
        return "Name：{$this->name}, Price：{$this->price}";
    }
}

class Book extends Product {
    public function show() {
        return "書籍名：{$this->name}, 価格：{$this->price}";
    }
}

print "\n";
$product = new Product('Hoge', 1500);
print $product->show();     # Name：Hoge, Price：1500
print "\n\n";

$book = new Book('よく分かるphp', 'Priceless');
print $book->show();        # 書籍名：よく分かるphp, 価格：Priceless
print "\n\n";
?>