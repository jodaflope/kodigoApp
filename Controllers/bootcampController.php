<?php

class BootcampController
{
    public $bootcamp;
    public function __construct ()
    {
        $this -> bootcamp = new Bootcamp ();
    }
    public function index ()
    {
        $bootcamps = $this -> bootcamp -> get_bootcamps (); //controlls Models

        include './Views/bootcampView.php'; //Controlls views
    }
}

?>