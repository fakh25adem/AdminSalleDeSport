<?php
class Role
{
    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=salledesport', 'root', '');
    }

    function addRole($Data)
    {
        $role = $Data['Libelle'];
       
        $this->db->exec("INSERT INTO role  VALUES ('','$role')");
      
    }


   
}
