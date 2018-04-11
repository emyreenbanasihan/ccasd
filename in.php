<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message

	if (isset($_POST['loginUser'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username/Password is required";
			header("Location: errorlogin.php");
		}else {
			// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password'];
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$conn = mysql_connect("localhost", "root", "");
			// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			// Selecting Database
			$db = mysql_select_db("db_ccasd", $conn);
			// SQL query to fetch information of registerd users and finds user match.

			$query = mysql_query("select * from systemcred where username LIKE '$username' AND password LIKE '$password'", $conn);
			$rows = mysql_num_rows($query);
			while ($row = mysql_fetch_array($query)) {
				$position = $row['position'];


				$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
				// query for inser user log in to data base
				mysql_query("INSERT INTO userlog(username,position,userIp) values('$username','$position','$uip')",$conn);
				// code redirect the page after login
			}

			if($row > 0){
							$_SESSION['mem_id'] = $fetch['mem_id'];


							if(!empty($_POST['remember'])){
								setcookie("username", $_POST['username'], time()+(10 * 365 * 24 * 60 * 60));
								setcookie("password", $_POST['password'], time()+(10 * 365 * 24 * 60 * 60));
							}else{
								if(ISSET($_COOKIE['username'])){
									setcookie("username", "");
								}
								if(ISSET($_COOKIE['password'])){
									setcookie("password", "");
								}
							}
							echo 0;
						}else{
							echo 1;
						}

				if ($rows == 1) {
					if ($position == "admin") {
						$_SESSION['login_user']=$position;
					  //echo "<pre>" . $position . "</pre>  "; // Initializing Session
					header("location: mapmain.php?type=admin"); // Redirecting To Other Page

					} elseif ($position == "employee") {
						$_SESSION['login_user']=$position; // Initializing Session
						header("location: mapmain.php?type=emp"); // Redirecting To Other Page
					}
				} else {
					$error = "Username or Password is invalid";
				  header("Location: errorlogin.php");
				}
				mysql_close($conn); // Closing Connection
			}
		}
	?>

	<script>
$(document).ready(function(){
	$('#login').on('click', function(){

		if($('#username').val() == "" || $('#password').val() == ""){
			alert("Please enter something!");
		}else{
			username = $('#username').val();
			password = $('#password').val();
			remember = $('#remember:checked').val();

			$.ajax({
				url: "index.php",
				type: "POST",
				data: {
					username: username,
					password: password,
					remember: remember
				},
				success: function(data){
					if(data == 0){

					window.location = "home.php";
					}else if(data == 1){
						alert("Invalid username or password");
					}
				}
			});
		}
	});
});
</script>
