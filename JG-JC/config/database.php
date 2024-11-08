<?php
    class Database {
        private static $instance = null;
        private $conn;

        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "direcciones";

        private function __construct() {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            if ($this->conn->connect_error) {
                die("Error de conexión: " . $this->conn->connect_error);
            } else {
                echo "<script>alert('Conexión exitosa');</script>";
            }
        }

        public static function getInstance() {
            if (!self::$instance) {
                self::$instance = new Database();
            }
            return self::$instance;
        }

        public function getConnection() {
            return $this->conn;
        }
    }
?>