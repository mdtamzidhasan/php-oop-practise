<?php
class User {
    private $name;

    public function __set($key, $value) {
        $this->$key = $value;
    }

    public function __get($key) {
        return $this->$key;
    }

    public function __toString() {
        return "User: " . $this->name;
    }
}

$u = new User();
$u->name = "Tamzid";
echo $u; // User: Tamzid