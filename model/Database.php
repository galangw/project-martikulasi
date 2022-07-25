<?php
class Database
{
    public function koneksi()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=project", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Gagal " . $e->getMessage();
        }
    }
}
