<?php

class database {
    private function connection() {
        $host = "localhost";
        $dbname = "LeenVanPunt";
        $username = "";
        $password = ""; // change me

        $conn = new mysqli($host, $username, $password, $dbname);

        if ($conn->connect_errno) {
            die("Connection error: " . $conn->connect_error);
        }

        return $conn;
    }

    public function query($sql) {
        $conn = $this->connection(); // Accessing private method connection
        $result = $conn->query($sql);
        return $result;
    }
}

$test = new database();
$test->query($sql);


?>
