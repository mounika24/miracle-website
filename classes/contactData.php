<?php
 include '../config/general.php';
      $resultMessage = "";
if(isset($_POST['btnSubmit'])){
require '../config/DbController.php';
$conn = new DbController();
try{
    $conn->connectToDatabase();
    
if(! get_magic_quotes_gpc() )
{$rfname = addslashes ($_POST['firstname']);
    $rlname = addslashes ($_POST['lastname']);
    $rorganization = addslashes ($_POST['organization']);
    $rcity = addslashes ($_POST['city']);
    $rdesignation = addslashes ($_POST['designation']);
    $rcountry = addslashes ($_POST['country']);
    $remail = addslashes ($_POST['email']);
    $rphone = addslashes ($_POST['phone']);
    $rdescription = addslashes ($_POST['description']);
     $rzip = addslashes ($_POST['zip']);
     $rstate = addslashes ($_POST['state']);
}
else
{
    $rfname = $_POST['firstname'];
    $rlname = $_POST['lastname'];
    $rorganization = $_POST['organization'];
    $rcity = $_POST['city'];
    $rdesignation = $_POST['designation'];
    $rcountry = $_POST['country'];
    $remail = $_POST['email'];
    $rphone = $_POST['phone'];
    $rzip = $_POST['zip'];
    $rstate = addslashes ($_POST['state']);
     $rdescription = addslashes ($_POST['description']);
}
$rflag = 1;
$conn->selectDatabase();
$sql = "insert into tblContactus(Fname,Lname,Organization,Designation,WorkPhone,City,Country,Description,".
        "Email,Zip,State) values('$rfname','$rlname','$rorganization','$rdesignation','$rphone','$rcity','$rcountry',".
        "'$rdescription','$remail','$rzip','$rstate')";
$selectQuery = "select * from tblContactus contactus where contactus.Email='$remail' and contactus.WorkPhone='$rphone'";
$selectresponce = mysql_query($selectQuery);
if(mysql_num_rows($selectresponce)>0){
            $resultMessage = '<font color=red size=2px>'.$remail.' is already exists in our system.</font>';
            $conn->closeConnection(); // closing the connection
}else{
    
            if(!mysql_query($sql)){
             $resultMessage= "<font color=red size=2px>Data insertion failed..Please try again.</font>";
            $conn->closeConnection(); // closing the connection
            }else{
                $eflag=EMAILFLAG;
                 if($eflag==1){
                 require '../classes/MailManager.php';
                $mailmanager = new MailManager();
                $mailmanager->sendContactForm($rfname, $rlname, $remail, $rorganization, $rdesignation, $rphone, $rcity, $rcountry, $rdescription,$rzip,$rstate);
                 }
                
            $resultMessage= "<font color=green size=2px>We have recived your deatils, Our team will contact you.\n</font>"; 
            $conn->closeConnection(); // closing the connection
            //header("Location: '../thank-you.php'");
          //  header('Location: ../thank-you.php');
          //  exit;
          //  echo'<script> window.location="../thank-you.php"; </script> ';
            header('Location: ../thank-you.php'); 
          //  echo '<meta http-equiv="refresh" content="1; URL=../thank-you.php" />';
            }
        }
}
  catch(Exception $exc){
       // Fb::log("log message");
         //$resultMessage= $exc->getTraceAsString();
      $exc->getMessage();
         //$resultMessage= '<font color=red size=2px>'.$exc.'</font>';
                  $resultMessage= "<font color=red size=2px>Please try again later.</font>";
                    $conn->closeConnection(); // closing the connection
                   
    }

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    </body>
</html>