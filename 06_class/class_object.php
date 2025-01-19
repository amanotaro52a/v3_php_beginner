<?php
class Person {
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function fullName() {
        return "私の名前は{$this->lastName} {$this->firstName}です。\n\n";
    }
}

$hoge = new Person('Hoge', 'Fuga');

print "\n";
print $hoge->lastName;     
print "\n";
print $hoge->firstName;    
print "\n";
print $hoge->fullName();   
?>