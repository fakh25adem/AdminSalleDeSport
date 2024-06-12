<?php
class Activite
{
    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=salledesport', 'root', '');
    }
    // la liste des client 
    function listActivite()
    {
        return $this->db->query("select * from activite");
    }

    function addActivite($Data)
    {
        $nom = $Data['nom'];
        $description = $Data['description'];
       
        $max = $Data['max'];
        $ok = $this->db->exec("INSERT INTO activite  VALUES ('','$nom','$description','$max')");
      
    }
    function deleteActivite($id)
    {
        $this->db->exec("DELETE FROM abonactiv WHERE idActivite = '$id'");

        $this->db->exec("delete from activite where id='$id'");
  
    }
    // function deleteClients($id)
    // {

    //     $this->db->exec("delete from client where idClient='$id'");
    // }
}
