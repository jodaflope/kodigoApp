<?php
//This file defines how looks and comes my information.
require_once './config.php';

class Bootcamp
{
    private $conn;
    public function __construct()
    {
        $this -> conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this -> conn -> connect_error)
        {
            die("Connection failed: " . $this -> conn -> connect_error);
        }

        echo 'Connection Successfully';
    }

    //Get all Bootcamps
    public function get_bootcamps()
    {
        $sql = "SELECT * FROM bootcamps"; //Makes a consult
        $result = $this -> conn -> query ($sql); //Excecutes the consult
        $bootcamps = array ();

        if ($result -> num_rows > 0){ //Converts to array
            while ($row = $result -> fetch_assoc()){
                $bootcamps [] = $row;
            }
        }

        return $bootcamps;
    }
}

?>