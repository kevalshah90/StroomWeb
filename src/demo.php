<?
session_start();
include 'config.php';
if($_POST['demo-email']) {

  $email= trim($_POST['demo-email']);
   $created = date('Y-m-d H:i:s');

        $sql =  "INSERT INTO `website_leads`( `Email`, `Create_DateTime`)
                 VALUES ('$email', '$created')";
      if (mysqli_query($con, $sql)) {

           $_SESSION["success_msg_demo"] = '1';
        header("Location: ../index.php");
      }
}
