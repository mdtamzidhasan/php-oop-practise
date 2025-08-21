<?php
trait Logger {
    public function log($msg){
        return "Log: $msg";
    }
}


class User {
    use Logger;
}

$user = new User();
echo $user->log("User created successfully");

?>



// trait is a small code block that can be used in multiple classes