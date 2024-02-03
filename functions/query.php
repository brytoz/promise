<?php
ob_start();
session_start();
require('conn.php');	
$errors=array();
$success=array();


function register($conn) {

	if(isset($_POST['reg_user']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) ) {

		$email = $_POST["email"];
		$referral = $_POST["referral"]; 
		$country = $_POST["country"]; 
		$gender = $_POST["gender"]; 
		$password = $_POST["password"]; 
		//crypt the password
		$salt = sha1(md5($password)).'^#|!@#$%%vZsQ2lB8g0s'; 
		$password_hash = md5($password.$salt);


		$rand=rand(5746370,9573635);
		$acct_num='101'.$rand;
		$username=$conn->real_escape_string($_POST['username']);
		$password=$conn->real_escape_string($_POST['password']);
		$lastname=$_POST['lastname'];
		$firstname=$_POST['firstname'];
		$date=date("Y-m-d H:i:s");
		
		$username=trim($username);
		$username=strtolower($username);

		
		if(empty($username)){
			echo "Username is required!";
			// echo '<script>document.getElementById("info").innerHTML = "Please fill in your user ID field!";</script>';
		}

		if(empty($password)){
			// echo '<script>document.getElementById("info").innerHTML = "Please fill in your password field!";</script>';
			echo "Please fill in your password field!";
		}
		
		if(empty($email)){
			// echo '<script>document.getElementById("info").innerHTML = "Your email address is required!";</script>';
			echo "Your email address is required!";

		}

		
		$user_check_query = "SELECT `username`  FROM users WHERE username LIKE '".mysqli_real_escape_string($conn, $username)."'";

		// $user_check_query = "SELECT * FROM users WHERE username='".$username."' OR email='".$email."' LIMIT 1";
		$result = mysqli_query($conn, $user_check_query);
		$user= mysqli_num_rows($result);

		$sql_select1 = "SELECT `username` FROM users WHERE username LIKE '".$username."'";
		$result1 = mysqli_query($conn, $sql_select1);
		
		
		if (  mysqli_num_rows($result1) === 1) {
				// echo '<script>document.getElementById("info").innerHTML = "User ID already exist!";</script>';
				echo "User ID already exist!";

			} else { 

				$query = "INSERT INTO users (acct_type,address,amount,dp,verify,refer,occupation,ip,marital,pin,img,doctype,phone,acct_num,firstname,lastname,username,gender,passwords,email,country,dates) VALUES ('','','','','','','','','','','','','','".$acct_num."','".$firstname."','".$lastname."','".$username."','".$gender."','".$password."','".$email."','".$country."','".$date."')";
				$result = mysqli_query($conn,$query);
			
				if ($result == true) {
					// echo '<script>document.getElementById("info").innerHTML = "Successfully Registered!";</script>';
	
					echo  'Successfully Registered!';
				} else {
					echo 'Sorry, we couldn\'t register you this time. Please try again later.';
					// echo  'Sorry, we couldn\'t register you this time. Please try again later.';
				}
			}
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
	require 'conn.php';
	$query = "SELECT '".$get."' FROM users WHERE `id`='".$_SESSION['user_id']."'";
	 if ($data_query = mysqli_query($conn, $query)) {
			$data_row = mysqli_fetch_row($data_query);
			$data_count = $data_row[0];
		if ($data_count == true) {
			return $data_count;
		}
	}
}
	

function login($conn){
	if(isset($_POST['login_submit'])){
		$user_id = $_POST["username"];
		$password = $_POST["password"]; 
		//crypt the password
		$salt = sha1(md5($password)).'^#|!@#$%%vZsQ2lB8g0s'; 
		$password_hash = md5($password.$salt);
		
		if(!empty($user_id) && !empty($password)){
			$sql_select = "SELECT `id` FROM users WHERE username LIKE '".mysqli_real_escape_string($conn, $user_id)."' AND passwords LIKE '".mysqli_real_escape_string($conn, $password)."'";
		
			$login_query = mysqli_query($conn, $sql_select);
			$rows = mysqli_num_rows($login_query);
			
			if ($rows==0) {
				echo '<span id="info" class="text-center w-full text-center text-xl text-red-600 bold">
				User ID does not exist!
				</span>';
			 

			}else    {
				echo '<span id="info" class="text-center text-xl text-green-600 bold">
				Redirecting...
				</span>';
				$_SESSION['username'] = $_POST['username'];
				$count = mysqli_fetch_row($login_query);
				$user_username = $count[0];
				
				//set cookie 

				setcookie('user', $user_id, time() + 2880, '/');
				setcookie('password', $password_hash, time() + 2880, '/');
				
				$_SESSION['user_username'] = $user_username;
					//Redirect to profile page
				header('refresh:2; url= dashboard.php?true='.sha1(rand()).'/');
				
				// header("refresh:2;url= admin.php");

			}
				
		} else {
			echo '<script>alert("Please fill all fields!");</script>';
		}
			
	}
}
 
?>





