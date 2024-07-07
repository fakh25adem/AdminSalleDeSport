<?php
class Emploi
{
    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=salledesport', 'root', '');
    }
    function listEmploi()
    {
        return $this->db->query(
            "SELECT e.id As id , e.nom AS nom_entreneur, s.libelle AS nom_salle, a.nom AS nom_activite, emp.Date_Debut, emp.Date_Fin 
            FROM emploi AS emp, activite AS a, entreneur AS e, salle AS s 
            WHERE e.id = emp.idEntreneur AND a.id = emp.idActivite AND s.id = emp.idSalle");
    }
    function addEmploi($Data)
    {
        $activite = $Data['activite'];
        $salle = $Data['salle'];
        $entreneur = $Data['entreneur'];
        $debut = $Data['debut'];
        $fin = $Data['fin'];
        $occupé = $this->db->query("SELECT * FROM emploi where (idEntreneur='$entreneur' and Date_Debut<'$fin' and Date_Fin>'$debut' ) or (idSalle='$salle' and Date_Debut<'$fin' and Date_Fin>'$debut' )  ")->fetch();

        if (!$occupé) {
            $this->db->exec("INSERT INTO emploi  VALUES ('','$activite','$salle','$entreneur','$debut','$fin')");
        } 
        

    }
    function deleteEmploi($id)
    {
        $this->db->exec("DELETE FROM emploi WHERE id = '$id'");

    }
}
