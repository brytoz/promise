<?php
ob_start();
session_start();
require('conn.php');	
$errors=array();
$success=array();

function generateRandomCode($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $code = '';
    for ($i = 0; $i < $length; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $code;
}

$token1 = generateRandomCode(6);

 


function register($conn) {

	if(isset($_POST['reg_user']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) ) {

		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$code = '';
		for ($i = 0; $i < $length; $i++) {
			$code .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $code;
		
		$token1 = $token1;

		$email = $_POST["email"];
		$referral = $_POST["referral"]; 
		$country = $_POST["country"]; 
		$phone = $_POST["phone"]; 
		$password = $_POST["password"]; 
		$password_again = $_POST["password_confirmation"]; 
		
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

		$userInput =  $_POST['captcha'] ;

		if ($userInput !== $token1) {
			echo "<span style='color:red;display:flex; justify-content:center; padding-bottom:10px; text-align: center; width:100%'>CAPTCHA Code mismatch. Please try again.!</span>";
			return;
		}

		if(empty($username)){
			echo "<span style='color:red;display:flex; justify-content:center; padding-bottom:10px; text-align: center; width:100%'>Username is required!</span>";
			return;
			// echo '<script>document.getElementById("info").innerHTML = "Please fill in your user ID field!";</script>';
		}

		if($password !== $password_again ){
			echo "<span style='color:red;display:flex; justify-content:center; padding-bottom:10px; text-align: center; width:100%'>Passwords do not match!</span>";
			return;
		}
		
		
		if(empty($password)){
			// echo '<script>document.getElementById("info").innerHTML = "Please fill in your password field!";</script>';
			echo "<span style='color:red;display:flex; justify-content:center; padding-bottom:10px; text-align: center; width:100%'>Please fill in your password field!</span>";
			return;
		}
		
		if(empty($email)){
			// echo '<script>document.getElementById("info").innerHTML = "Your email address is required!";</script>';
			echo "<span style='color:red;display:flex; justify-content:center; padding-bottom:10px; text-align: center; width:100%'>Your email address is required!</span>";
			return;

		}

		if(isset($_POST["referral"]) && !empty($referral)) {
			$referral_check_query = "SELECT `username`  FROM users WHERE username LIKE '".mysqli_real_escape_string($conn, $referral)."'";

			$resultRefer = mysqli_query($conn, $referral_check_query);
			$resultReferRow= mysqli_num_rows($resultRefer);
			if ( $resultReferRow === 0) { 
				echo "<span style='color:red;display:flex; justify-content:center; padding-bottom:10px; text-align: center; width:100%'>Referral ID does not exist!</span>";
				return;
			}


	
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
		 $resultip = mysqli_query($conn, $user_check_ip);
		 $userip= mysqli_fetch_assoc($resultip);
		if($userip){
		 if($userip['ip']==$ip){array_push($errors,"You ware banned from accessing $websitelink");}
		 return;
		}


		
		$user_check_query = "SELECT `username`  FROM users WHERE username LIKE '".mysqli_real_escape_string($conn, $username)."'";

		$result = mysqli_query($conn, $user_check_query);
		$user= mysqli_num_rows($result);

		
		
		if (  mysqli_num_rows($result) === 1) {
				// echo '<script>document.getElementById("info").innerHTML = "User ID already exist!";</script>';
				echo "<span style='color:red;display:flex; justify-content:center; padding-bottom:10px; text-align: center; width:100%'>User ID already exist!</span>";
				return;

			} else { 

				// referral ID
				$queryRefers = "INSERT INTO refer (username,referee,earnings) VALUES ('".$username."','".$referral."',2)";
				$resultRefers = mysqli_query($conn,$queryRefers);


				// New user
				$query = "INSERT INTO users (membership_level,total_withdraw,refer_bonus,total_investments_bonus,address,dp,verify,refer,occupation,marital,total_investments,city,doctype,gender,amount,profit,acct_num,ip,firstname,lastname,username,phone,passwords,email,country,dates) VALUES (1,0,0,0,'','','','','','','','','','',0,0,'".$acct_num."','".$ip."','".$firstname."','".$lastname."','".$username."','".$phone."','".$password."','".$email."','".$country."','".$date."')";
				$result = mysqli_query($conn,$query);
			
				if ($result == true) {
				 
					echo  "<span style='color:green;display:flex; justify-content:center; padding-bottom:10px; text-align: center; width:100%'>Successfully Registered! Redirecting to login...</span>";
				header('refresh:3; url= login.php?=registration-successful');

				} else {
					echo "<span style='color:red;display:flex; justify-content:center; padding-bottom:10px; text-align: center; width:100%'>Sorry, we couldn\'t register you this time. Please try again later.</span>";

				}
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
			$sql_select = "SELECT `id` FROM users WHERE username LIKE '".mysqli_real_escape_string($conn, $user_id)."' OR email LIKE '".mysqli_real_escape_string($conn, $user_id)."' AND passwords LIKE '".mysqli_real_escape_string($conn, $password)."'";
		
			$login_query = mysqli_query($conn, $sql_select);
			$rows = mysqli_num_rows($login_query);
			
			if ($rows==0) {
				echo "<span style='color:red;display:flex; justify-content:center; padding-bottom:10px; text-align: center; width:100%'>
				Wrong Email/Username or password combination!
				</span>";
			 

			}else    {
				echo "<span style='color:green;display:flex; justify-content:center; padding-bottom:10px; text-align: center; width:100%'>
				Successful. Redirecting...
				</span>";
				$_SESSION['user_id'] = $_POST['username'];
				$count = mysqli_fetch_row($login_query);
				$user_username = $count[0];
				
				//set cookie 

				setcookie('user', $user_id, time() + 2880, '/');
				setcookie('password', $password_hash, time() + 2880, '/');
				
				$_SESSION['user_username'] = $user_username;
					//Redirect to profile page
				header('refresh:1; url= dashboard.php?true='.sha1(rand()).'/');
				

			}
				
		} else {
			echo '<script>alert("Please fill all fields!");</script>';
		}
			
	}
}

//logged in function
function loggedin() {
	if (isset($_COOKIE['user']) && isset($_COOKIE['password']) && isset($_SESSION['user_id'])) {
		return true;
	} else {
		return false; 
	}
}

 
function UserId($get) {
    require 'conn.php';

    // Use backticks around column and table names
    $query = "SELECT `$get` FROM users WHERE `id` = '".$_SESSION['user_username']."'";

    $data_query = mysqli_query($conn, $query);
    
    if ($data_query) {
        $data_row = mysqli_fetch_row($data_query);

        // Check if the column exists
        if (!empty($data_row)) {
            $data_count = $data_row[0];
            return $data_count;
        } else {
            // Handle the case where the column doesn't exist
            return "Column not found";
        }
    } else {
        // Handle the case where the query fails
        return "Query failed: " . mysqli_error($conn);
    }
}

// for mobile device
function viewUserTransactions($userId) {
    require 'conn.php';

    $query = "SELECT * FROM transactions WHERE username = '$userId' ORDER BY createdAt DESC";
    
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Check if there are any transactions
        if (mysqli_num_rows($result) > 0) {
             

            while ($row = mysqli_fetch_assoc($result)) {
                echo '
				<div class="single-transaction">
                    <div class="transaction-left">
                        <div class="transaction-des">
                            <div class="transaction-title">'. $row['trx_info'] .'
                            </div>
                            <div class="transaction-id">' . $row['trx_id'].'</div>
                            <div class="transaction-date">'. $row['createdAt'] .'</div>
                        </div>
                    </div> 
                    <div class="transaction-right">
                        <div class="transaction-amount ">'. $row['trx_value'] .' USD</div>
                        <div class="transaction-fee sub">'. $row['trx_fee'] .' Fee </div>
                        <div class="transaction-gateway">'. $row['trx_type'] .'</div>
                        <div class="transaction-status success">'. $row['trx_status'] .'</div>
                    </div>
                </div> ';
            }

            echo '</table>';
        } else {
            echo 'No transactions found for this user.';
        }
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}


// for desktop device
function viewUserTransactionsDesktop($userId) {
    require 'conn.php';

    $query = "SELECT * FROM transactions WHERE username = '$userId' ORDER BY createdAt DESC";
    
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Check if there are any transactions
        if (mysqli_num_rows($result) > 0) {
             

            while ($row = mysqli_fetch_assoc($result)) {
                echo '
				<tr>
				<td>
					<div class="table-description">
						<div class="icon">
							<i icon-name="backpack
						 ">
							</i>
						</div>


						<div class="description">
							<strong>'. $row['trx_info'] .'                 </strong>
							<div class="date">'. $row['createdAt'] .'</div>
						</div>
					</div>
				</td>
				<td><strong>' . $row['trx_id'].'</strong></td>
				<td>
					<div
						class="site-badge primary-bg">'. $row['trx_type'] .'</div>
				</td>

				<td><strong
						class="green-color">'. $row['trx_value'] .' USD</strong>
				</td>
				<td><strong>'. $row['trx_fee'] .' USD</strong></td>
				<td>


															<div class="site-badge warnning">'. $row['trx_status'] .'</div>
													</td>
				<td><strong>'. $row['trx_type'] .'</strong></td>
			</tr>   ';
            }

            echo '</table>';
        } else {
            echo 'No transactions found for this user.';
        }
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}
 

///////////////////   referral //////////////////
// referral count
function referalCount($userId){
    require 'conn.php';

    $query = "SELECT COUNT(*) as count FROM refer WHERE referee = '$userId'";

    $result = mysqli_query($conn, $query);

	if ($result) {
		$row = mysqli_fetch_row($result);
        $count = $row[0];

        mysqli_free_result($result);
        mysqli_close($conn);

        echo $count;

    } else {
        // Handle the error
        echo 'Error: ' . mysqli_error($conn);
        mysqli_close($conn);
        echo 0; // Return 0 in case of an error
    }
}

// referral users 
function getReferralUsers($userId){
	require 'conn.php';

    $query = "SELECT  *   FROM refer WHERE referee = '$userId'";

    $result = mysqli_query($conn, $query);

	if ($result) { 
		if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
				echo '<tr>
				<th>'. $row['username'] .' </th>
				<th>'. $row['earnings'] .' USD </th>
			</tr>';
			}
		} else {
			echo '<tr>
				<th><p class="centered">No Data Found</p></th>
			</tr>';
		}
	}
} 

// referall value 
function getTotalEarnings($userId) {
    require 'conn.php';

    $query = "SELECT SUM(`earnings`) as total_earnings FROM refer WHERE referee = '$userId'";

    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $totalEarnings = $row['total_earnings'];

        mysqli_free_result($result);
        mysqli_close($conn);

        echo $totalEarnings;
    } else {
        // Handle the error
        echo 'Error: ' . mysqli_error($conn);
        mysqli_close($conn);
        echo 0; // Return 0 in case of an error
    }
}
///////////////////   referral //////////////////
 


function depositCheck($user){
    require 'conn.php';

	if(isset($_POST['submit'])){

		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$trxGenerated = 'TRX';
	
		for ($i = 0; $i < 12 ; $i++) {
			$trxGenerated .= $characters[rand(0, strlen($characters) - 1)];
		}

		
		if(!isset($_POST['gateway_code'])){
			echo '<span style="color:red;">Select Payment method</span>';
			return;
		}

		if(!isset($_POST['investment_plan'])){
			echo '<span style="color:red;">Select investment plan.</span>';
			return;
		}

		$amount = $_POST['amount']; 
		$investment_plan = $_POST['investment_plan']; 
		$paymentMethod = $_POST['gateway_code'];
		if(empty($amount) && empty($paymentMethod) && empty($investment_plan)){
			echo '<span style="color:red;">Enter a valid amount and payment method.</span>';
			return;
		}
		
		if($amount < 1000){ 
			echo '<span style="color:red;">Enter a value greater than $1000</span>';
			return;
		}

		$queryInsert = "INSERT INTO transactions (username,trx_info,trx_type_rec,trx_id,trx_status,trx_value,trx_fee,trx_type) VALUES ('".$user."','Deposit With ".$paymentMethod." for ".$investment_plan." plan','deposit','".$trxGenerated."','pending','".$amount."','0 USD','".$paymentMethod." - ".$investment_plan." plan')";

		$resultInsert = mysqli_query($conn,$queryInsert);
	
		if ($resultInsert) {
			echo '<span style="color:green;">Redirecting...</span>';
			header('refresh:0; url= deposit-now.php?type='.$paymentMethod.'');
		}

	}
}


// deposit address
function getPayAddress($admin) {
    require 'conn.php';

    $query = "SELECT * FROM payaddress WHERE username = '$admin'";
    
    $result = mysqli_query($conn, $query);

    if ($result) {

        if (mysqli_num_rows($result) > 0) { 

            while ($row = mysqli_fetch_assoc($result)) {
				if (isset($_GET['type']) && $_GET['type'] == "ETH") {

					echo '
					<center>
						Scan the QR code OR copy the address below to make payment 
						<img src="'.$row['eth_img'].' " width="250px" />

						<div style="margin-top:12px">
						'.$row['eth'].'  
						</div>
					</center>';
				}

				 else if (isset($_GET['type']) && $_GET['type']  == "USDT") {

					echo '
					<center>
						Scan the QR code OR copy the address below to make payment 
						<img src="'.$row['usdt_img'].' " width="250px" />

						<div style="margin-top:12px">
						'.$row['usdt'].'  
						</div>
					</center>';
				}

				else if (isset($_GET['type']) && $_GET['type']  == "BTC") {

					echo '
					<center>
						Scan the QR code OR copy the address below to make payment 
						<img src="'.$row['btc_img'].' " width="250px" />

						<div style="margin-top:12px">
						'.$row['btc'].'
						</div>
					</center>';
				} else {
					echo 'no data';
				}

            }

        } else {
            echo '';
        }
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}
 

// all deposit transactions
function getAllDeposit($user){
	require 'conn.php';
	
    $query = "SELECT * FROM transactions WHERE username = '".$user."' AND trx_type_rec = 'deposit' ORDER BY createdAt DESC";

    $result = mysqli_query($conn, $query);
	
	if ($result) { 
		if (mysqli_num_rows($result) > 0) {
			
			while ($row = mysqli_fetch_assoc($result)) {
				$depositCheck  = ($row['trx_type_rec'] === 'deposit') ? 'green-color' : 'red-color';
				$depositCheckIcon  = ($row['trx_type_rec'] === 'deposit') ? 'arrow-down-left' : 'arrow-top-right';
				$successCheck  = ($row['trx_status'] === 'success') ? 'success' : 'warning';
				
				echo '
				<tr>
				<td>
					<div class="table-description">
						<div class="icon">
							<i icon-name="'.$depositCheckIcon.'"></i>
						</div>
						<div class="description">
							<strong>'. $row['trx_info'] .'</strong>
							<div class="date">'. $row['createdAt'] .'</div>
						</div>
					</div>
				</td>
				<td><strong>'. $row['trx_id'] .'</strong></td>
				<td><strong class="'.$depositCheck.'"> + '. $row['trx_value'] .'  USD</strong></td>
				<td>
					<div class="site-badge '.$successCheck.'">'. $row['trx_status'] .' </div>
				</td>
				<td><strong>'. $row['trx_type'] .' </strong></td>
			</tr>

						';
			}
		} else {
			echo ' <tr>
			<td> <p class="centered">No Data Found</p> </td> </tr>';
		}
	}
	
}


// all withdrawal transactions
function getAllWithdrawal($user){
	require 'conn.php';
	
    $query = "SELECT * FROM transactions WHERE username = '".$user."' AND trx_type_rec = 'withdrawal' ORDER BY createdAt DESC";

    $result = mysqli_query($conn, $query);
	
	if ($result) { 
		if (mysqli_num_rows($result) > 0) {
			
			while ($row = mysqli_fetch_assoc($result)) {
				$depositCheck  = ($row['trx_type_rec'] === 'deposit') ? 'green-color' : 'red-color';
				$depositCheckIcon  = ($row['trx_type_rec'] === 'deposit') ? 'arrow-down-left' : 'arrow-top-right';
				$successCheck  = ($row['trx_status'] === 'success') ? 'success' : 'warning';
				
				echo '
				<tr>
				<td>
					<div class="table-description">
						<div class="icon">
							<i icon-name="'.$depositCheckIcon.'"></i>
						</div>
						<div class="description">
							<strong>'. $row['trx_info'] .'</strong>
							<div class="date">'. $row['createdAt'] .'</div>
						</div>
					</div>
				</td>
				<td><strong>'. $row['trx_id'] .'</strong></td>
				<td><strong class="'.$depositCheck.'">'. $row['trx_value'] .'  USD</strong></td>
				<td>
					<div class="site-badge '.$successCheck.'">'. $row['trx_status'] .' </div>
				</td>
				<td><strong>'. $row['trx_type'] .' </strong></td>
			</tr>

						';
			}
		} else {
			echo ' <tr>
			<td> <p class="centered">No Data Found</p> </td> </tr>';
		}
	}
	
}



// all user single - transaction
function getAllTrx($user){
	require 'conn.php';
	
    $query = "SELECT * FROM transactions WHERE username = '".$user."' ORDER BY createdAt DESC";

    $result = mysqli_query($conn, $query);
	
	if ($result) { 
		if (mysqli_num_rows($result) > 0) {
			
			while ($row = mysqli_fetch_assoc($result)) {
				$depositCheck  = ($row['trx_type_rec'] === 'deposit') ? 'green-color' : 'red-color';
				$depositCheckIcon  = ($row['trx_type_rec'] === 'deposit') ? 'arrow-down-left' : 'arrow-top-right';
				$successCheck  = ($row['trx_status'] === 'success') ? 'success' : 'warning';
				

				echo '
				 <tr>
					<td>
						<div class="table-description">
							<div class="icon">
							<i icon-name="'.$depositCheckIcon.'"></i>
								</i>
							</div>
							<div class="description">
							<strong>'. $row['trx_info'] .'</strong>
							<div class="date">'. $row['createdAt'] .'</div>
							</div>
						</div>
					</td>
				<td><strong>'. $row['trx_id'] .'</strong></td>
				 
				<td><strong class="'.$depositCheck.'">'. $row['trx_value'] .'  USD</strong></td>
					<td>
					<div class="site-badge  '.$successCheck.'">'. $row['trx_status'] .' </div>
					</td>
				<td><strong>'. $row['trx_type'] .' </strong></td>
				</tr>
 ';
			}
		} else {
			echo ' <tr>
			<td> <p class="centered">No Data Found</p> </td> </tr>';
		}
	}
	
}


function withdrawFunds($user){
    require 'conn.php';

	if(isset($_POST['submit'])) {

		$amount = $_POST['amount'];
		
		if(empty($_POST['withdraw_account'])){
			echo '<span style="color:red;">Update your withdrawal address</span>';
			return;
		}
		
		$account = $_POST['withdraw_account'];

		$query = "SELECT * FROM users WHERE username = '$user'";
		
		$result = mysqli_query($conn, $query);

		if ($result) {
			$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$trxGenerated = 'TRX';
			$paymentMethod = 'USD';
		
			for ($i = 0; $i < 12 ; $i++) {
				$trxGenerated .= $characters[rand(0, strlen($characters) - 1)];
			}

			if (mysqli_num_rows($result) > 0) {

				$row = mysqli_fetch_assoc($result);
				
				// Access the 'balance' field;
				$balance = $row['amount'];
				$address = $row['address'];

				// echo 'balance:'.$balance;
				// return;

				if (!intval($balance)) {
					echo '<span style="color:red;">Balance too low!</span>';
					return;
				}
				if ($amount > intval($balance)) {
					echo '<span style="color:red;">Balance is lower than the requested withdrawal value</span>';
					return;
				}
				if (!$address) {
					echo '<span style="color:red;">Update your withdrawal address</span>';
					return;
				}

			}
			

			$newNumber = intval($amount);
			// Update query to reduce the 'amount' field
			$updateQuery = "UPDATE users SET amount = amount - $newNumber  WHERE username = '$user'";

			// Perform the update
			$resultUpdateQuery = mysqli_query($conn, $updateQuery);


			$queryInsert = "INSERT INTO transactions (username,trx_info,trx_type_rec,trx_id,trx_status,trx_value,trx_fee,trx_type) VALUES ('".$user."','Withdrawal With ".$paymentMethod."','withdrawal','".$trxGenerated."','pending','-".$amount."','0 USD','".$paymentMethod."')";

			$resultInsert = mysqli_query($conn,$queryInsert);
		
			if ($resultInsert) {
				echo '<span style="color:green;">Withdrawal successfully placed.</span>';
				// header('refresh:0; url= deposit-now.php?type='.$paymentMethod.'');
			}


		}
	}

}


function updateProfile($user) {
	require 'conn.php';
	
	if(isset($_POST['submit'])) {

		if(empty($_POST['gender']) && empty($_POST['marital']) && empty($_POST['phone'])) {
			echo '<span style="color:red;">Fill in all fields.</span>';
			return;
		}

		$address = $_POST['address'];
		$marital = $_POST['marital']; 
		$date_of_birth = $_POST['date_of_birth']; 
		$gender = $_POST['gender'];
		$phone = $_POST['phone'];
		$city = $_POST['city'];



		$updateQuerys = "UPDATE users 
                 SET address = '$address', 
                     marital = '$marital', 
                     dob = '$date_of_birth', 
                     gender = '$gender', 
                     phone = '$phone', 
                     city = '$city' 
                 WHERE username = '$user'";


		$resultUpdateQuerys = mysqli_query($conn, $updateQuerys);

		if($resultUpdateQuerys){
			echo '<span style="color:green;">Successfully Updated.</span>';
			return;
		} else {			
			echo '<span style="color:red;">Error Updating.</span>';
			return;
		}

	}


}

function updatePassword($user) {
	require 'conn.php';
	if(isset($_POST['submit'])) {

		if(empty($_POST['password']) && empty($_POST['password_new'])) {
			echo '<span style="color:red;">Enter new password and retype new password</span>';
			return;
		}

		$password = $_POST['password'];
		$password_new = $_POST['password_new'];

		if($password !==  $password_new) {
			echo '<span style="color:red;">Passwords do not match.</span>';
			return;
		}

		// $updateQuerys = "UPDATE users SET passwords =  $password  WHERE username = '$user'";
		$updateQuerys = "UPDATE users SET passwords = '$password' WHERE username = '$user'";

		$resultUpdateQuerys = mysqli_query($conn, $updateQuerys);

		if($resultUpdateQuerys){
			echo '<span style="color:green;">Successfully Updated.</span>';
			echo "<script>
  alert('Successfully Updated');
  </script>";
			return;
		} else {			
			echo '<span style="color:red;">Error Updating.</span>';
			return;
		}

	}

}



?>





