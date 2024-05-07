<?php
namespace App\users;
use PDO;
 class users{
     public $username;
     public $useremail;
     public $userpassword;
     public $userid;
     public function setData($userid,$username,$useremail,$userpassword){
      echo  $this->userid =$userid;
        $this->username =$username;
        $this->useremail =$useremail;
      echo  $this->userpassword =md5($userpassword);
     }
     public function __construct()
     {
         try
         {
             $this->pdo = new PDO("mysql:host=localhost;dbname=noyno_ir",'root','');
         }
         catch(PDOException $e)
         {
             echo 'Error'. $e->getMessage();
         }
     }
     public function insertDtat(){
         $sql = "insert into tbl_users (userid,username,useremail,userpassword) VALUES (:userid,:username,:useremail,:userpassword)";
         $noyon = $this->pdo->prepare($sql);
         $noyon->execute(array(
             ':userid'=> $this->userid,
             ':username'=> $this->username,
             ':useremail'=> $this->useremail,
             ':userpassword'=> $this->userpassword,

         ));
         return true;
     }
 }


?>