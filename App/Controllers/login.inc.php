
<?php
include '../Models/Connection.php';
include '../Controllers/loginController.php';
include '../Models/loginModel.php';
// A la sousission du formulaire 
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["connexion"])){
   $emailuser=$_POST["Email"];
   $passworduser=$_POST["password"];

//instanciation de la classe loginController
   $loginctrl=new loginController(
        $emailuser,
        $passworduser
   );
   $loginctrl->valideInput();
   $test= $loginctrl->valideInput();
   if ($test =='false'){
        $registerAttest= new loginModel($emailuser, $passworduser);
         $registerAttest->emailuserDB();
   }
}