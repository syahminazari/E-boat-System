<?php
require_once "config.php";
use PHPMailer\PHPMailer\PHPMailer;

require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/SMTP.php";
require_once "PHPMailer/src/Exception.php";

// Set Session Message
function set_message($msg)
{
    if(!empty($msg))
    {
        $_SESSION['Message'] = $msg;
    }
    else
    {
        $msg = "";
    }
}


// Display Session Message
function display_message()
{
   if(isset($_SESSION['Message']))
   {
       echo $_SESSION['Message'];
       unset($_SESSION['Message']);
   }
}


// Error Display
function Error_Display($Error)
{
    return '<p class="text-danger">'.$Error.'</p>';
}


 // Function Email Exists
 function Email_Exist($Email)
 {
     global $conn;
     $query = "select * from users where email='$Email'";
     $result = mysqli_query($conn,$query);

     if(mysqli_fetch_assoc($result))
     {
         return true;
     }
     else
     {
         return false;
     }
 }


 // Send Email Function
 function Send_Email($Email,$Subject,$Msg,$Header)
 {
    //echo "Message: <br>" .$Email. $Subject . $Msg . $Header; die();
    $mail = new PHPMailer();

    //SMTP Settings
    $mail -> IsSMTP();
    $mail -> SMTPAuth = true;
    $mail -> SMTPSecure = 'ssl';
    $mail -> Host = 'smtp.gmail.com';
    $mail -> Port = '465';

    //Email Settings
    $mail -> isHTML();
    $mail -> Username = 'pdhtsystem@gmail.com';
    $mail -> Password = 'PDHT21700';
    $mail -> SetFrom ($Header);
    $mail -> Subject = $Subject;
    $mail -> Body = $Msg;
    $mail -> AddAddress ($Email);


    if(!$mail->Send()) {
        echo Error_Display(" Maaf. Kod Pengesahan tidak berjaya dihantar. ");
    }
    else{
        header("location:login.php");
    }

 }


/*****************Reset Password Function******************** */
function recover_password()
{
   if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-recover']))
   {
       global $conn;

       if(isset($_POST['email']))
       {
           $Email = $_POST['email'];
           if(Email_Exist($Email))
           {
               //echo "Email: ".$Email;
               $update_validateCode = (rand(10000,99999));
               $query = "UPDATE users /*SET `validatecode`='$update_validateCode' WHERE*/ `email`='$Email'";
               $result = mysqli_query($conn,$query);

               $Subject = " Kod Pengesahan ";
               $Msg = " Kod Pengesahan untuk menukar kata laluan. <br> Email=".$Email. " Code=".$update_validateCode;
               $Header = 'no-reply@localhost.com';

               $_SESSION["Email"] = $Email;
               Send_Email($Email,$Subject,$Msg,$Header);
           }
           else
           {
               echo Error_Display(" Maaf. E-mel tersebut tidak wujud. ");
           }
       }
   }
}
