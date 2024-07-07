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
    function listRole()
    {
        return $this->db->query("select * from Role");
    }
    function getRoleById($id_R)
    {
    
        return $this->db->query("SELECT * FROM Role where id='$id_R'")->fetch();
  
    }
    function deleteRole($id_R)
    {
        $this->db->exec("DELETE FROM Role WHERE id = '$id_R'");

    }
    function updateRole($Data)
    {
        $id_R = $Data['id_R'];
        $Libelle = $Data['Libelle'];
       
        return $this->db->exec("UPDATE Role SET Libelle='$Libelle' WHERE id_R='$id_R'");
  
    }
   
}
