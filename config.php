<?php 

// Proccess GET, POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : null;
    echo $_POST["username"];
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
}

// Arrays $_GET, $_POST, $_REQUEST
if (isset($_GET["name"])) {
    echo $person->name;
}

// wrapper for $_GET, $_POST
class Request {
    public static function get($key) {
        return isset($_REQUEST[$key]) ? $_REQUEST[$key] : null;
    }
}
$username = Request::get("username");

?>