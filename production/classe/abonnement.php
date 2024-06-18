<?php
class Abonnement
{
    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=salledesport', 'root', '');
    }
    // la liste des client 
    function listAbonnement()
    {
 
      return  $this->db->query("
      SELECT a.id, a.code, a.prix_mois, a.prix_semester, a.prix_annuel, GROUP_CONCAT(act.nom SEPARATOR ', ') AS activites
      FROM abonnement a, abonactiv abonact, activite act
      WHERE a.id = abonact.idAbonnement AND abonact.idActivite = act.id
      GROUP BY a.id, a.code, a.prix_mois, a.prix_semester, a.prix_annuel");
    }


    function addAbonnement($Data)
    {
      
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = substr(str_shuffle($characters), 0, 8);
        $activite = $Data['activite'];

        $mois = $Data['mois'];
        $annuel = $Data['annuel'];
        $semester = $Data['semester'];
        
         $this->db->exec("INSERT INTO abonnement  VALUES ('','$code','$mois','$semester','$annuel')");
         $last_id = $this->db->lastInsertId();
         echo $last_id;
foreach ($activite as $act){
    $this->db->exec("INSERT INTO abonactiv VALUES ('','$act','$last_id')");

}
         return "true";
        
    }
    function getAbonnementById($id)
    {
    
        return $this->db->query("SELECT * FROM abonnement where id='$id'")->fetch();
  
    }
    function deleteAbonnement($id)
    {
        $this->db->exec("DELETE FROM abonactiv WHERE idAbonnement = '$id'");

        $this->db->exec("DELETE FROM abonnement where id='$id'");
  
    }
    function updateAbonnement($Data)
    {
        $id = $Data['id'];
        $code = $Data['code'];
        $mois = $Data['mois'];
        $annuel = $Data['annuel'];
        $semester = $Data['semester'];
        return $this->db->exec("UPDATE abonnement SET code='$code',prix_mois='$mois',prix_semester='$semester',prix_annuel='$annuel' WHERE id='$id'");
  
    }
}
