<?php
class Emploi
{
    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=salledesport', 'root', '');
    }
  
    function addEmploi($Data)
    {
        // $activite = $Data['activite'];
        // $salle = $Data['salle'];
        $entreneur = $Data['entreneur'];
        $debut = $Data['debut'];
        $fin = $Data['fin'];
        return $this->db->query("SELECT * FROM emploi where idEntreneur='$entreneur' and (Date_Debut	>='$debut' and Date_Fin<='$debut' or Date_Debut	>='$fin' and Date_Fin<='$fin') ");

        // $this->db->exec("INSERT INTO emploi  VALUES ('','$libelle')");
      
    }

 

   
}
