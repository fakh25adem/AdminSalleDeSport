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
        return $this->db->query("select * from entreneur");
    }
    function addEntreneur($Data)
    {
        $nom = $Data['nom'];
        $prenom = $Data['prenom'];
        $type = $Data['type'];
        $this->db->exec("INSERT INTO entreneur  VALUES ('','$nom','$prenom','$type')");
      
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
        $type = $Data['type'];
        return $this->db->exec("UPDATE Entreneur SET nom='$nom',prenom='$prenom',type_activite='$type' WHERE id='$id'");
  
    }

   
}
