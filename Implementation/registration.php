
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
		$query1 = "
				CREATE TABLE IF NOT EXISTS $username (
				`ID` int(11) NOT NULL AUTO_INCREMENT,
		  		`PRODUCTID` varchar(6) NOT NULL,
				`SIZE` varchar(4) NOT NULL,
		  		`COUNT` int(4) NOT NULL,
				PRIMARY KEY (`ID`)
				) ENGINE=InnoDB  DEFAULT CHARSET=latin1  AUTO_INCREMENT=1;
					";
		$result1=mysqli_query($con,$query1);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }else{
			echo '<center>';
			echo '<img src="fontname.png" >';
			echo '<br><br>';
			echo '<div class="form" >';
			echo '<h1>Registration</h1>';
			echo '<form name="registration" action="" method="post" autocomplete="off">';
			echo '<input type="text" name="username" placeholder="Username" required />';
			echo '<input type="email" name="email" placeholder="Email" required />';
			echo '<input type="password" name="password" placeholder="Password" required />';
			echo '<input type="submit" name="submit" value="Register" />';
			echo '</form>';
			echo '<br /><br />';
			echo '<p id="warning">Username/email-id has already been used. Kindly retry with something different.</p>';
			echo '</div>';
			echo '</center>';
		}
    }else{
?>
<center>
<img src="fontname.png" >
<br><br>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post" autocomplete="off">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</center>
<br /><br />

</div>
<?php } ?>
</body>
</html>
