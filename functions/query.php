<?php
ob_start();
session_start();
require('conn.php');	
	
	
//register && LOGIN function
function msc($conn) {
	
if(isset($_POST['reg_num']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) ) {
	
		$email = $_POST["email"];
		$password = $_POST["password"]; 
		$referral = $_POST["referral"]; 
		$country = $_POST["country"]; 
		$gender = $_POST["gender"]; 
		//crypt the password
		$salt = sha1(md5($password)).'^#|!@#$%%vZsQ2lB8g0s'; 
		$password_hash = md5($password.$salt);
		$timestamp = date('Y-m-d  H:i:s');


	 $rand=rand(5746370,9573635);
    $acct_num='101'.$rand;
    $username=$db->real_escape_string($_POST['username']);
    $password=$db->real_escape_string($_POST['password']);
    $email=$_POST['email'];
    $lastname=$_POST['lastname'];
    $firstname=$_POST['firstname'];
    $gender=$_POST['gender'];
    $date=date("Y-m-d H:i:s");
    
    $username=trim($username);
    $username=strtolower($username);


    if(empty($username)){echo '<script>document.getElementById("info").innerHTML = "Please fill all fields!";</script>';}
    if(empty($password)){echo '<script>document.getElementById("info").innerHTML = "Please fill in your password fields!";</script>';}
    if(empty($email))
	{echo '<script>document.getElementById("info").innerHTML = "You email address is requireds!";</script>';}
    
     $user_check_query = "SELECT *FROM users WHERE username='$username' OR email='$email' LIMIT 1";
     $result = mysqli_query($db, $user_check_query);
     $user= mysqli_num_rows($result);
    
    
	 //check if user exists
     if($user){
		if($user['username']==$username){echo '<script>document.getElementById("info").innerHTML = "User ID already exist!";</script>';
			return
		}
		if($user['email']==$email)
		{echo '<script>document.getElementById("info").innerHTML = "Email already exist!";</script>';
			return
		}
     }
      
    //   if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    //     $ip = $_SERVER['HTTP_CLIENT_IP'];
    // } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    //     $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    // } else {
    //     $ip = $_SERVER['REMOTE_ADDR'];
    // }
    
    //   $ip = 'fff'
    //    // Use JSON encoded string and converts
    //    // it into a PHP variable
    //    $ipdat = @json_decode(file_get_contents(
    //    "http://www.geoplugin.net/json.gp?ip=" . 'ip')); ///$ip
    //    $countryname=$ipdat->geoplugin_countryName;
    
    
    //  $user_check_ip = "SELECT *FROM bannedips WHERE ip='$ip' LIMIT 1";
    //  $resultip = mysqli_query($conn, $user_check_ip);
    //  $userip= mysqli_fetch_assoc($resultip);
    // if($userip){
    //  if($userip['ip']==$ip){echo '<script>document.getElementById("info").innerHTML = "You were banned!";</script>';}
    // }

	$login_query = mysqli_query($conn, $sql_select);
	$rows = mysqli_num_rows($login_query);
    if ($rows==0){
    
			// acct_num	verify	username	firstname	lastname	password	email	dob	gender	marital	pin	refer	ip	country	occupation	phone	doctype	img	acct_type	address	amount	dp vdate	date
    $query="INSERT INTO users (acct_num,firstname,lastname,pin,username,gender,password,email,country,date)
    VALUES('$acct_num','$firstname','$lastname','$username','$gender','$password','$email','$country','$date')";
    mysqli_query($conn,$query);
    
    if($query){ 
		echo '<script>document.getElementById("info").innerHTML = "Successfully Registered!";</script>';
	}

    
	// if($query){
    //     require_once "PHPMailer/PHPMailer.php";
    //     require_once "PHPMailer/SMTP.php";
    //     require_once "PHPMailer/Exception.php";
    
    //     $mail = new PHPMailer();
    
    //     //smtp settings
    //     $mail->isSMTP();
    //     $mail->Host = "https://s1.bitsboxhost.com";
    //     $mail->SMTPAuth = true;
    //     $mail->Username = "admin@winstarbank.online";
    //     $mail->Password ="Tusharpp11";
    //     $mail->Port = 465;
    //     $mail->SMTPSecure = "ssl";
    
    
    //     //email settings
    //     $mail->isHTML(true);
    //     $mail->setFrom("admin@winstarbank.online");//stmp server host
    //     $mail->FromName="Winstar Bank";
    //     $mail->addAddress("$email");//recipients address
    //      $mail->Subject = ("(Registration successful)"); 
    //     $mail->Body = "<head>
    //       <style>p{font-size:18px;}
    //         .container {
    //           margin: 20px 10px 0px 10px;
    //           padding: 70px 20px 0 20px;
    //         }
        
    //         .contain{background-color:#a8dbf32b;
    //           border: 1px solid #000;
    //         }
        
    //         .footer {
    //           background: transparent;
              
    //           height: 100px;
    //           padding: 20px 15px;
    //         }
    //       </style>
    //     </head>
    //     <body>
    //       <div class='contain'>
    //       <br>
    //       <center>
    //         <div class='container'><img src='https://$websitelink/logo.png' style='width:75px;height:auto;'/>
    //         <h2 style='text-transform:uppercase;'>Registration Successful</h2>
        
    //         <p><b>Hello $firstname $lastname</b></p>
    //         <p>Thank you for your Registration on our bank.</p>
    //         <p>We will get back to you after your account have been set up</p>
          
    //         <p>Thank you.</p>
    //       </div>
    //       <div class='footer' style='text-align:center;'>
    //           <p><br>
    //             ©️ $year<a href='$websitelink' style='text-decoration: underline;'>$websitename</a>
    //           </p>
    //         </div>
    //       </div>
        
    //     </body>";
    
    //    $mail->Send();
    //    $mail->ClearAllRecipients();
    //    $mail->addAddress("admin@winstarbank.online");
    
    //       $mail->Body = "<head>
    //       <style>p{font-size:18px;}
    //         .container {
    //           margin: 20px 10px 0px 10px;
    //           padding: 70px 20px 0 20px;
    //         }
        
    //         .contain{background-color:#a8dbf32b;
    //           border: 1px solid #000;
    //         }
        
    //         .footer {
    //           background: transparent;
              
    //           height: 100px;
    //           padding: 20px 15px;
    //         }
    //       </style>
    //     </head>
    //     <body>
    //       <div class='contain'>
    //       <br>
    //       <center>
    //         <div class='container'><img src='https://$websitelink/logo.png' style='width:75px;height:auto;'/>
    //         <h2 style='font-size:30px;text-transform:uppercase;'>New Account Registration</h2>
    //         <p><b>Hello Admin</b></p>
    //         <p>A new account has been registered on $websitelink.</p>
    //         <a href='https://$websitelink/admin.php' style='text-decoration: underline;'>you can login to admin panel here</a>
    //         <p>User's login Information:</p>
          
    //         <p><b>Login:</b> $username</p>
    //         <p><b>password:</b> $password</p>
        
    //         </center>
    //       </div>
    //       <div class='footer' style='text-align:center;'>
    //           <p><br>
    //             ©️ $year<a href='$websitelink' style='text-decoration: underline;'>$websitename</a>
    //           </p>
    //         </div>
    //       </div>
        
    //     </body>";
    //     $mail->send();
         
    // }

 
				
	}

	 
	 //login 
  } 
}




//logged in function
function loggedin() {
	if (isset($_COOKIE['Reg_num']) && isset($_COOKIE['password']) && isset($_SESSION['user_id'])) {
		return true;
	} else {
		return false; 
	}
}

//userId function
function UserId($get) {
	require '../functions/conn.php';
	$query = "SELECT ".$get." FROM masters WHERE `id`='".$_SESSION['user_id']."'";
	if ($data_query = mysqli_query($conn, $query)) {
			$data_row = mysqli_fetch_row($data_query);
			$data_count = $data_row[0];
		if ($data_count == true) {
			return $data_count;
		}
	}
}
	
//file function 
function file_($conn){
	if (isset($_FILES['file']) && !empty($_FILES['file']) && isset($_POST['submit'])) {
	
			$Reg_num = mysqli_real_escape_string($conn, $_POST['Reg_num']);			
			//start file variables
			$file = $_FILES['file'];
			$target = 'uploads/'.basename($_FILES['file']['name']);
			//define file names 
			$filename = $file['name']; //file name
			$fileTmpname = $file['tmp_name']; //file temporary name
			$filesize = $file['size'];  //size of the file 
			$fileError = $file['error'];  //error output on the file
			$filetype = $file['type'];// the text 
			$allowedExt = 'ppt';
			
			$fileExt = explode('.',$filename);
			$fileActualExt = strtolower(end($fileExt));
			
			if (!empty($filename)) {
					if ($filesize < 1000000) {
						if ($fileError === 0) {
							if (in_array($fileActualExt, $allowedExt) == true) {
								move_uploaded_file($fileTmpname, $target);
								//query
								$upload_insert = "INSERT INTO filemasters VALUES ('', '".$Reg_num."', '', '', '', '".$filename."')";
								$upload_result = mysqli_query($conn, $upload_insert);

								echo "<script>alert('Your file was uploaded successfully!');</script>";
								
							} else {
								echo "<script>alert('You cannot Upload files of this type!');</script>";
							}
						} else {
							echo "<script>alert('There was an error uploading your file!');</script>";
						}
					} else {
						echo "<script>alert('File too large!!');</script>";
					}
			} else {
				echo "<script>alert('problem ooo!');</script>";
			}

		} 
}





function login($conn){
	if(empty($_POST['fullname']) && empty($_POST['school']) && isset($_POST['icode']) && isset($_POST['password']) && isset($_POST['submit'])){
		$icode = $_POST["icode"];
		$password = $_POST["password"]; 
		//crypt the password
		$salt = sha1(md5($password)).'^#|!@#$%%vZsQ2lB8g0s'; 
		$password_hash = md5($password.$salt);
		
		if(!empty($icode) && !empty($password)){
			$sql_select = "SELECT `id` FROM supervisor WHERE code LIKE '".mysqli_real_escape_string($conn, $icode)."' AND password LIKE '".mysqli_real_escape_string($conn, $password_hash)."'";
		
			$login_query = mysqli_query($conn, $sql_select);
			$rows = mysqli_num_rows($login_query);
			
			if ($rows==0) {
				echo '<script>alert("Incorrect Code Id or password! ");</script>';
			}else if ($rows==1) {
				$_SESSION['icode'] = $_POST['icode'];
				/*$count = mysqli_fetch_row($login_query);
				$user_icode = $count[0];
					//set cookie 

				setcookie('code', $code, time() + 2880, '/');
				setcookie('password', $password_hash, time() + 2880, '/');
				
				$_SESSION['user_icode'] = $user_icode;*/
					//Redirect to profile page
				header('Location: successful.php?true='.sha1(rand()).'/');
			}
				
		} else {
			echo '<script>alert("Please fill all fields!");</script>';
		}
			
}






