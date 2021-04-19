<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once "../PHPMailer/PHPMailer.php";
require_once "../PHPMailer/SMTP.php";
require_once "../PHPMailer/Exception.php";

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
    $mail -> Username = 'fyprojecthydro20@gmail.com';
    $mail -> Password = 'hydroponic@2020';
    $mail -> SetFrom ($Header);
    $mail -> Subject = $Subject;
    $mail -> Body = $Msg;
    $mail -> AddAddress ($Email);


    if(!$mail->Send()) {
        echo Error_Display(" Maaf. Kod Pengesahan tidak berjaya dihantar. ");
    }
    else{
        header("location:validate.php");
    }

 }


 // Form Validation Function
 function form_validation()
 {
     if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['btn_signup']))
     {
         $UserName = $_POST['username'];
         $Email = $_POST['email'];


         $Password = $_POST['password'];
         $CPassword = $_POST['cPassword'];

         // Validate password strength
         $uppercase = preg_match('@[A-Z]@', $Password);
         $lowercase = preg_match('@[a-z]@', $Password);
         $number    = preg_match('@[0-9]@', $Password);

         $Errors=[];

         // Check Empty Fields
         if(empty($UserName) || empty($Email) || empty($Password) || empty($CPassword))
         {
              $Errors[] = "Sila Isi Tempat Kosong ";
         }

         // Check Email Exists
         elseif(Email_Exist($Email))
         {
              $Errors[] = " Maaf. E-mel tersebut telah didaftarkan ";
         }

         // Check Password Characters
         elseif(!$uppercase || !$lowercase || !$number || strlen($Password) < 8)
         {
              $Errors[] = " Kata laluan hendaklah sekurang-kurangnya 8 aksara dan hendaklah mengandungi sekurang-kurangnya satu huruf besar dan satu nombor. ";
         }

         // Password Checking
         elseif($Password!=$CPassword)
         {
          $Errors[] = " Kata Laluan tidak sepadan. ";
         }

         if(!empty($Errors))
         {
             foreach($Errors as $display)
             {
                  echo Error_Display($display);
             }
         }
         else
         {

             if(user_registration($UserName,$Email,$Password))
             {
                  global $conn;
                  $query = "SELECT * from users where `email`='$Email'";
                  $result = mysqli_query($conn,$query);
                  $row = mysqli_fetch_array($result);

                  $_SESSION["Email"] = $row['email'];
                  echo '<div class="alert alert-success"> Akaun telah berjaya didaftar</div>';
             }
             else
             {
                 Error_Display(" Pendaftaran Akaun tidak berjaya. Sila Cuba Lagi. ");
             }
         }

     }
 } // Closing Form Validation Function


 /*************** User Registration Function********************///
 function user_registration($UserName,$Email,$Level,$Password,$Notification)
 {
      global $conn;
      $UserName = mysqli_real_escape_string($conn,$UserName);
      $Email = mysqli_real_escape_string($conn,$Email);

      $Password = mysqli_real_escape_string($conn,$Password);

        //echo $Notification ;die();
      $Pass = md5($Password);
      //$Validation_Code = (rand(10000,99999));

      $filename = './JS/main.js';
      $filename2 = './JS/jQuery.js';

      if (file_exists($filename) && file_exists($filename2)) {
        $sql = "insert into users (username, email ,password, validatecode,user_activate) values ('$UserName','$Email','$Pass','0','1')";
        $result = mysqli_query($conn,$sql);
      }
      return true;
 }


 /****************Login Validation Form******************/
 function login_validation()
 {
     if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-login']))
     {
         global $conn;
         $Email = mysqli_real_escape_string($conn,$_POST['Email']);
         $Password = mysqli_real_escape_string($conn,$_POST['Password']);

             if(login($Email,$Password))
             {
                global $conn;
                $query = "SELECT * from user where `user_email`='$Email'";
                $result = mysqli_query($conn,$query);
                $row = mysqli_fetch_array($result);

                if($row['user_activate']=='1'){

                    if($row['user_validatecode']=='0')
                    {
                        $_SESSION["loggedin"] = true;
                        $_SESSION["Id"] = $row['user_id'];
                        $_SESSION["UserName"] = $row['user_name'];
                        $_SESSION["Email"] = $row['user_email'];
                        $_SESSION["Level"] = $row['user_level'];
                        $_SESSION["Password"] = $row['user_password'];
                        header("location:index.php");
                    }
                    else
                    {
                        echo '<div class="text-warning" style="transform: rotate(0);">
                        Akaun anda belum disahkan. <br> Tekan <a href="forgotpassword.php" class="text-primary stretched-link">disini</a> untuk dapatkan kod pengesahan baru.
                        </div>';
                    }
                }
             }
             else
             {
                 //$Error = " Kata Laluan dan E-mel salah. <br> Sila cuba lagi. ";
                 //echo $Error;
                 echo Error_Display("E-mel dan Kata Laluan tidak sah.");
             }
     }
 }


 // Function Login
 function login($Email,$Password)
 {
     global $conn;
     $query = "select * from user where user_email='$Email'";
     $result = mysqli_query($conn,$query);

     if($row=mysqli_fetch_assoc($result))
     {
         $password = $row['user_password'];

         if(md5($Password)==$password)
         {
             $_SESSION['Email']=$Email;
              return true;
         }
         else
         {
              return false;
         }
     }
 }


 /*****************Reset Password Function******************** */
 function recover_password()
 {
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-recover']))
    {
        global $conn;

        if(isset($_POST['Email']))
        {
            $Email = $_POST['Email'];
            if(Email_Exist($Email))
            {
                //echo "Email: ".$Email;
                $update_validateCode = (rand(10000,99999));
                $query = "UPDATE users SET `validatecode`='$update_validateCode' WHERE `email`='$Email'";
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

 // Function Activation Account
 function validate($Email)
 {
     if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-validate']))
     {
        global $conn;

        if(isset($_POST['validate_code']))
        {
            $Validate_Code = $_POST['validate_code'];
            $query = "select * from user where `user_email`='$Email' AND `user_validatecode`='$Validate_Code'";
            $result = mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $query1 = "UPDATE user SET `user_validatecode`='0' WHERE `user_email`='$Email' AND `user_validatecode`='$Validate_Code'";
                if($result1 = mysqli_query($conn,$query1)){
                    header("location:reset.php");
                };

            }
            else
            {
                echo '<div class="text-danger"> Kod Pengesahan Tidak Sah. </div>';
            }
        }
     }
 }

 // Reset Password
 function reset_password($Email)
 {
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-reset']))
    {
        //echo $Email; die();
        global $conn;
        $Password = $_POST['password'];
        $CPassword = $_POST['cpassword'];

        // Validate password strength
        $uppercase = preg_match('@[A-Z]@', $Password);
        $lowercase = preg_match('@[a-z]@', $Password);
        $number    = preg_match('@[0-9]@', $Password);

        $Errors=[];
        // Check Empty Fields
        if(empty($Password) || empty($CPassword))
        {
             $Errors[] = "Sila Isi Tempat Kosong ";
        }

        // Check Password Characters
        elseif(!$uppercase || !$lowercase || !$number || strlen($Password) < 8)
        {
            $Errors[] = " Kata laluan mesti mempunyai minimum 8 aksara, mempunyai huruf besar, huruf kecil dan nombor.";
        }

        // Password Checking
        elseif($Password!=$CPassword)
        {
            $Errors[] = " Kata Laluan Tidak Sama. ";
        }

        if(!empty($Errors))
        {
            foreach($Errors as $display)
            {
                 echo Error_Display($display);
            }
        }

        elseif($_POST['password']==$_POST['cpassword'])
        {
            //echo "Password: ".$_POST['password'];
            $up_password = md5($_POST['password']);
            //echo "Password: ".$up_password; die();
            $query = "UPDATE user SET `user_password`='$up_password' WHERE `user_email`='$Email'";
            $result = mysqli_query($conn,$query);

            //condition where user/admin forgot password
            if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                session_destroy();
                header("location:login.php");
            }
            else
            {
                $query1 = "SELECT * FROM user WHERE `user_email`='$Email'";
                $result1 = mysqli_query($conn,$query1);
                $row = mysqli_fetch_array($result1);

                if($_SESSION["Email"] == $row['user_email']){
                    header("location:setting.php");
                }
                else{
                    header("location:tableuser.php");
                }
            }
        }
    }
 }

 //function verify account
 function verify($Email)
 {
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-verify']))
    {
        //echo $Email; die();
        global $conn;
        $Password = $_POST['Password'];

        $Errors=[];
        // Check Empty Fields
        if(empty($Password))
        {
             $Errors[] = "Sila Isi Tempat Kosong ";
        }

        if(!empty($Errors))
        {
            foreach($Errors as $display)
            {
                 echo Error_Display($display);
            }
        }

        elseif($_POST['Password'])
        {
            //echo "Password: ".$_POST['Password'];die();
            $Passwordform = md5($_POST['Password']);
            //echo "Password: ".$Password; die();
            $query = "SELECT * FROM user WHERE `user_email`='$Email'";
            $result = mysqli_query($conn,$query);

            if($row=mysqli_fetch_assoc($result))
            {
                $password = $row['user_password'];

                if($Passwordform == $password)
                {
                    $_SESSION["Email"];
                    header("location:reset.php");
                    return true;
                }
                else
                {
                    echo Error_Display(" Kata Laluan tidak sah. ");
                }
            }
        }

    }
 }

 function update_user($Email){
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-activate']))
    {
        //echo $Email; die();
        global $conn;
        $Active = $_POST['Active'];
        $Notification = $_POST['Notification'];

        //echo "Data: ".$_POST['Notification'];die();

        if ($Active == 1)
        {
            $query = "UPDATE `user` SET `user_activate`= '$Active', `user_notification`='$Notification' WHERE `user_email`='$Email'";
        }
        else{
            $query = "UPDATE `user` SET `user_activate`= '$Active', `user_notification`='0' WHERE `user_email`='$Email'";
        }

        if($result = mysqli_query($conn,$query))
            {
                header("location:tableuser.php");

            }
            else
            {
                echo Error_Display(" Kemaskini Tidak Berjaya. ");
            }
    }
 }
?>
