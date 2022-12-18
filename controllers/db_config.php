<?php
//* Prueba de funcino con PDO
class Connect extends PDO{
    public function __construct(){
        parent::__construct("mysql:host=localhost;dbname=chems",'root','',
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this-> setAtribute(PDO:: ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
        $this-> setAtribute(PDO:: ATTR_EMULATE_PREPARES, false);
    }
}
?>