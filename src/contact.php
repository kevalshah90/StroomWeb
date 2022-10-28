<?
session_start();
include 'config.php';
if($_POST['name']){

$name = trim(str_replace("'", "''", $_POST['name']));
$email= trim($_POST['email']);
$phone = trim($_POST['number']);
$company= trim($_POST['company-name']);
$job = trim($_POST['job-title']);
 $created = date('Y-m-d H:i:s');

      $sql =  "INSERT INTO `website_contact`(`Name`, `Email`, `Company`, `Phone`, `Job_Title`, `Created_DateTime`)
               VALUES ('$name','$email','$company','$phone','$job','$created')";
    if (mysqli_query($con, $sql)) {

         $_SESSION["success_msg_contact"] = '1';
      header("Location: ../index.php#competitive-advantage-sec");
    }
}
