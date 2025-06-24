<?php
// =====================================
// ARCHIVO: config/Database.php
// =====================================

class Database
{
    private $host = 'localhost';
    private $db_name = 'portfolio';
    private $username = 'xernaroot';
    private $password = '5QLX3rn@0331UbUn7u';
    private $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
        }

        return $this->conn;
    }
}
