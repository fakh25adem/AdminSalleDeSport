<?
Class Role {
   
    private $role;
    function __construct()
    {
        $this->role = new PDO('mysql:host=localhost;dbname=salledesport', 'root', '');
    }
    function listeR()
    {
        return $this->role->query("select * from Role");
    }
    function addRole($Data)
    {
        $Libelle = $Data['Libelle'];
       
        $this->role->exec("INSERT INTO Role  VALUES ('','$Libelle')");
      
    }
    function deleteRole($id_R)
    {

        $this->role->exec("delete from Role where id='$id_R'");
  
    }
    function getRoleById($id_R)
    {
    
        return $this->role->query("SELECT * FROM Role where id_R='$id_R'")->fetch();
  
    }
    function updateActivite($Data)
    {
        $Libelle = $Data['Libelle'];

        return $this->role->exec("update Role  set Libelle='$Libelle'");
  
    }
}

