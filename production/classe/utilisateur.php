<?php
class Utilisateur
{
    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=salledesport', 'root', '');
    }
    function listUtilisateur()
    {
        return $this->db->query("select * from utilisateur");
    }
    function addUtilisateur($Data)
    {
        $cin = $Data['cin'];
        $nom = $Data['nom'];
        $prenom = $Data['prenom'];
        $adresse = $Data['adresse'];
        $email = $Data['email'];
        $pass = $Data['pass'];

        $this->db->exec("INSERT INTO utilisateur  VALUES ('','$cin','$nom','$prenom','$adresse','$email','$pass')");
      
    }

    function getUtilisateurById($id)
    {
    
        return $this->db->query("SELECT * FROM utilisateur where id='$id'")->fetch();
  
    }
    function deleteUtilisateur($id)
    {
        $this->db->exec("DELETE FROM utilisateur WHERE id = '$id'");

    }
    function updateUtilisateur($Data)
    {
        $id = $Data['id'];
        $cin = $Data['cin'];
        $nom = $Data['nom'];
        $prenom = $Data['prenom'];
        $adresse = $Data['adresse'];
        $email = $Data['email'];
        $pass = $Data['pass'];
        return $this->db->exec("UPDATE utilisateur SET cin='$cin' ,nom='$nom',prenom='$prenom',adresse='$adresse',email='$email',pass='$pass' WHERE id='$id'");
  
    }

   
}
