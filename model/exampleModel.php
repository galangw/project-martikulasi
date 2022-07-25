<?php
include "Database.php";
class ExampleModel extends Database
{
    private $conn;
    function __construct()
    {
        $this->conn = $this->koneksi();
    }
    public function showData()
    {
        try {
            $query = $this->conn->prepare("select *from test");
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return $query->fetchAll();
        } catch (PDOException $e) {
            print_r($e->getMessage());
        }
    }
    public function insert($nama)
    {
        try {
            $query = $this->conn->prepare("insert into test (nama) values (:nama)");
            $query->bindParam(":nama", $nama);
            $query->execute();
            header("location:index.php");
        } catch (\PDOException $e) {
            print_r($e->getMessage());
        }
    }
}
