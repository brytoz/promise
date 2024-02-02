<?php
use PHPMailer\PHPMailer\PHPMailer;
session_start();
$errors=array();
$success=array();
$year=date("Y");
//create connection
 $db=new mysqli("localhost","root","","firetwo");

 $admin_check_query="SELECT * FROM adminlogin ";
 $resultadmin=mysqli_query($db,$admin_check_query);
 $adminn=mysqli_fetch_assoc($resultadmin);

 $websitename=$adminn['websitename'];
 $websitelink=$adminn['websitelink'];
 $adminmail=$adminn['email'];
 $emailpass=$adminn['emailpass'];



 //Register User
if(isset($_POST['reg_user'])){
    $rand=rand(5746370,9573635);
    $acct_num='101'.$rand;
    $username=$db->real_escape_string($_POST['username']);
    $password=$db->real_escape_string($_POST['password']);
    $password2=$db->escape_string($_POST['password2']);
    $email=$_POST['email'];
    $lastname=$_POST['lastname'];
    $firstname=$_POST['firstname'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $country=$_POST['country'];
    $pin=$_POST['pin'];
    $date=date("Y-m-d H:i:s");
    $amount=$_POST['amount'];
    
    $username=trim($username);
    $username=strtolower($username);
    array_push($errors,"You email address is required");
    return;
    if(empty($username)){array_push($errors, "Username is required");}
    if(empty($password)){array_push($errors,"Password is required");}
    if(empty($email)){array_push($errors,"You email address is required");}
    if($password !=$password2){array_push($errors,"The Two passwords do not match");}
    
     $user_check_query = "SELECT *FROM registration WHERE username='$username' OR email='$email' LIMIT 1";
     $result = mysqli_query($db, $user_check_query);
     $user= mysqli_fetch_assoc($result);
    
    
     if($user){//check if user exists
    if($user['username']==$username){array_push($errors,"Username Already Exists");}
    if($user['email']==$email){array_push($errors,"Email address Already Exists");}
    
     }
      
      if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    
      
       // Use JSON encoded string and converts
       // it into a PHP variable
       $ipdat = @json_decode(file_get_contents(
       "http://www.geoplugin.net/json.gp?ip=" . $ip));
       $countryname=$ipdat->geoplugin_countryName;
    
    
     $user_check_ip = "SELECT *FROM bannedips WHERE ip='$ip' LIMIT 1";
     $resultip = mysqli_query($db, $user_check_ip);
     $userip= mysqli_fetch_assoc($resultip);
    if($userip){
     if($userip['ip']==$ip){array_push($errors,"You ware banned from accessing $websitelink");}
    }
    if (count($errors)==0){
    
    $query="INSERT INTO registration (acct_num,firstname,lastname,occupation,amount,pin,acct_type,username,gender,dob,password,email,address,marital,img,img_gov,ip,country,date)
    VALUES('$acct_num','$firstname','$lastname','','$amount','$pin','$account','$username','$gender','$dob','$password','$email','$address','$marital','$img','$img_gov','$q1','$a1','$q2','$a2','$ip','$country','$date')";
    mysqli_query($db,$query);
    
    
    if($query){
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
    
        $mail = new PHPMailer();
    
        //smtp settings
        $mail->isSMTP();
        $mail->Host = "https://s1.bitsboxhost.com";
        $mail->SMTPAuth = true;
        $mail->Username = "admin@winstarbank.online";
        $mail->Password ="Tusharpp11";
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
    
    
        //email settings
        $mail->isHTML(true);
        $mail->setFrom("admin@winstarbank.online");//stmp server host
        $mail->FromName="Winstar Bank";
        $mail->addAddress("$email");//recipients address
         $mail->Subject = ("(Registration successful)"); 
        $mail->Body = "<head>
          <style>p{font-size:18px;}
            .container {
              margin: 20px 10px 0px 10px;
              padding: 70px 20px 0 20px;
            }
        
            .contain{background-color:#a8dbf32b;
              border: 1px solid #000;
            }
        
            .footer {
              background: transparent;
              
              height: 100px;
              padding: 20px 15px;
            }
          </style>
        </head>
        <body>
          <div class='contain'>
          <br>
          <center>
            <div class='container'><img src='https://$websitelink/logo.png' style='width:75px;height:auto;'/>
            <h2 style='text-transform:uppercase;'>Registration Successful</h2>
        
            <p><b>Hello $firstname $lastname</b></p>
            <p>Thank you for your Registration on our bank.</p>
            <p>We will get back to you after your account have been set up</p>
          
            <p>Thank you.</p>
          </div>
          <div class='footer' style='text-align:center;'>
              <p><br>
                ©️ $year<a href='$websitelink' style='text-decoration: underline;'>$websitename</a>
              </p>
            </div>
          </div>
        
        </body>";
    
       $mail->Send();
       $mail->ClearAllRecipients();
       $mail->addAddress("admin@winstarbank.online");
    
          $mail->Body = "<head>
          <style>p{font-size:18px;}
            .container {
              margin: 20px 10px 0px 10px;
              padding: 70px 20px 0 20px;
            }
        
            .contain{background-color:#a8dbf32b;
              border: 1px solid #000;
            }
        
            .footer {
              background: transparent;
              
              height: 100px;
              padding: 20px 15px;
            }
          </style>
        </head>
        <body>
          <div class='contain'>
          <br>
          <center>
            <div class='container'><img src='https://$websitelink/logo.png' style='width:75px;height:auto;'/>
            <h2 style='font-size:30px;text-transform:uppercase;'>New Account Registration</h2>
            <p><b>Hello Admin</b></p>
            <p>A new account has been registered on $websitelink.</p>
            <a href='https://$websitelink/admin.php' style='text-decoration: underline;'>you can login to admin panel here</a>
            <p>User's login Information:</p>
          
            <p><b>Login:</b> $username</p>
            <p><b>password:</b> $password</p>
        
            </center>
          </div>
          <div class='footer' style='text-align:center;'>
              <p><br>
                ©️ $year<a href='$websitelink' style='text-decoration: underline;'>$websitename</a>
              </p>
            </div>
          </div>
        
        </body>";
        $mail->send();
         
    }


 ?>