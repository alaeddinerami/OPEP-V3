<?PHP
require_once("../config/db.php");
class Utilisateurs extends db
{

    private $conn;
    // public $a;
    public function __construct()
    {
        $this->conn = $this->conn();
    }
    public function insert_user($nomInsc, $prenomInsc, $emailInsc, $mdpInsc)
    {
        $sql = "INSERT INTO utilisateur(email,passwordUser,nom,prenom,idRole) VALUES ('$emailInsc','$mdpInsc','$nomInsc','$prenomInsc',null)";
        $this->conn->query($sql);
    }
    public function Login($emailInsc,$mdpInsc){
        $sql = "SELECT * FROM utilisateur WHERE email = '$emailInsc' and passwordUser = '$mdpInsc'";
        $res = $this->conn->query($sql);
        $row = $res->fetchAll(PDO::FETCH_ASSOC);
        $role = $row[0]['idRole'];
        if ($role == 1 && count($row)== 1){
            header("location:../views/admin.php");
        }else if ($role == 2 && count($row)== 1){
            header("location:../views/client.php");
        }
    }

    public function getConn()
    {
        return $this->conn;
    }
}
