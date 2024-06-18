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
        $this->db->exec("INSERT INTO activite  VALUES ('','$nom','$description','$max')");
      
    }
    function deleteActivite($id)
    {
        $this->db->exec("DELETE FROM abonactiv WHERE idActivite = '$id'");

        $this->db->exec("delete from activite where id='$id'");
  
    }
    function getActiviteById($id)
    {
    
        return $this->db->query("SELECT * FROM activite where id='$id'")->fetch();
  
    }
    function updateActivite($Data)
    {
        $id=$Data['idActivite'];

        $nom = $Data['nom'];
        $description = $Data['description'];
        $max = $Data['max'];
        return $this->db->exec("update activite  set nom='$nom',description='$description',max_participants='$max' where id='$id'");
  
    }
}
