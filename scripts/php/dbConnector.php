<?php
class dbConnector {
    private $host = "localhost";
    private $name = "nne_dd";
    private $user = "root";
    private $password = "";
    private $pdo; //PHP Data Object

    function __construct() {
        $dns = sprintf("mysql:dbname=%s;host=%s", $this->name, $this->host);
        try {
            $this->pdo = new PDO($dns, $this->user, $this->password);
        } catch (PDOException $e) {
            error_log("Cannot open DB connection", 0);
            throw $e;
        }
    }

    function getPdo() {
        return $this->pdo;
    }
}
?>