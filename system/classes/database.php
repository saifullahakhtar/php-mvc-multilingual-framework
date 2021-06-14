<?php

class database {

    // Database Variables
    public $host     = HOST;
    public $user     = USER;
    public $database = DATABASE;
    public $password = PASSWORD;

    // Other Variables
    public $conn;
    public $result;

    // Run Connection
    public function __construct()
    {
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->user, $this->password);
            return($this->conn);
        } catch(PDOException $e){
            echo("Database Connection Error " . $e->getMessage());
        }
    }

    // CRUD Method
    public function query($qry, $params = [])
    {
        if(empty($params)):
            $this->result = $this->conn->prepare($qry);
            return($this->result->execute());
        else:
            $this->result = $this->conn->prepare($qry);
            return($this->result->execute($params));
        endif;
    }

    // Rows Count
    public function rowsCount()
    {
        return($this->result->rowCount());
    }

    // Fetch All Data
    public function fetchAll()
    {
        return($this->result->fetchall(PDO::FETCH_OBJ));
    }

    // Fetch One Row
    public function fetch()
    {
        return($this->result->fetch(PDO::FETCH_OBJ));
    }

}

?>