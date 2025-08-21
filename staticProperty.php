<?php
class Config{
    public static $appName = "myapp";

    public static function info(){
        return "Application Name: " . self::$appName;
    }
}



class Base {
    final public function test() {
        return "final method can't override and final class can't extend";
    }
}

echo Config::$appName;
echo Config::info();
?>