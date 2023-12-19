 <?php
    require_once("../config/db.php");

    class Roles extends db
    {
        private $conn;

        public function __construct()
        {
            $this->conn = $this->conn();
        }

        public function ChoisirRole($role, $emailInsc)
        {


            if ($role == "admin") {
                $sql = "UPDATE utilisateur SET idRole = 1 WHERE email ='$emailInsc'";
            } else {
                $sql = "UPDATE utilisateur SET idRole = 2 WHERE email ='$emailInsc'";
            }
            $this->conn->query($sql);
        }
    }

    ?> 