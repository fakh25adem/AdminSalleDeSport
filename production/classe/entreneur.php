<?php
class Entreneur
{
    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=salledesport', 'root', '');
    }
    function listEntreneur()
    {
        return $this->db->query("SELECT * FROM entreneur");
    }
    function addEntreneur($Data)
    {
        $nom = $Data['nom'];
        $prenom = $Data['prenom'];
        $this->db->exec("INSERT INTO entreneur  VALUES ('','$nom','$prenom')");
      
    }

    function getEntreneurById($id)
    {
    
        return $this->db->query("SELECT * FROM Entreneur where id='$id'")->fetch();
  
    }
   
    function deleteEntreneur($id)
    {
        $this->db->exec("DELETE FROM Entreneur WHERE id = '$id'");

    }
    function updateEntreneur($Data)
    {
        $id = $Data['id'];
        $nom = $Data['nom'];
        $prenom = $Data['prenom'];
        return $this->db->exec("UPDATE Entreneur SET nom='$nom',prenom='$prenom' WHERE id='$id'");
  
    }
    

   
}
