<?php
abstract class User{

    abstract public function save();
    abstract public function new();

    public function getName($name){
        print_r("Ваше имя $name.<br>");
    }
}

class Person extends User {
    function new() {
        echo "Обязательный метод save.<br>";
    }

    function save() {
        echo "\r\nобязательный метод new.<br>";
    }

    function getName($name) {
        return parent::getName($name) . "Здорово!";
    }
}

$name = new Person();
$msg = $name->getName("Олег");
echo $msg;