<?php
namespace App\Auth;
use App\Dbconnect\Dbconnect;

include ("../../vendor/autoload.php");
use pdo;
@session_start();
class Auth extends Dbconnect
{
    private $password;
    private $email;

    public function login($data = "")
    {
        $this->email = "'" . $data['adminEmail'] . "'";
        $this->password = "'" . md5($data['Admin_pass']) . "'";

        $pdo = new PDO ('mysql:host=localhost; dbname=uvmanagement', 'root', '');
        $query = "SELECT * FROM `admin` where email=$this->email AND pass =$this->password";

        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch();
        if (!empty($data)) {
            $_SESSION['userid'] = $data;
            header('location:../../index.php');
        } else {
            header('location:../../../index.php');
            $_SESSION['Msg'] = "<div class='alert alert-border-left'> <strong>Opps!!</strong> &nbsp;&nbsp; Wrong Email or Password</div>";
        }
    }
}