<?php
class Salle
{
    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=salledesport', 'root', '');
    }
    function listSalle()
    {
        return $this->db->query("select * from salle");
    }
    function addSalle($Data)
    {
        $libelle = $Data['libelle'];
        $this->db->exec("INSERT INTO salle  VALUES ('','$libelle')");
      
    }

    function getSalleById($id)
    {
    
        return $this->db->query("SELECT * FROM salle where id='$id'")->fetch();
  
    }
    function deleteSalle($id)
    {
        $this->db->exec("DELETE FROM salle WHERE id = '$id'");

    }
    function updateSalle($Data)
    {
        $id = $Data['id'];
        $libelle = $Data['libelle'];
       
        return $this->db->exec("UPDATE salle SET libelle='$libelle' WHERE id='$id'");
  
    }

   
}
