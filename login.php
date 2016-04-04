<?php include('connect.php');?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Henl Nepal Network | E-Library PROJECT | One E-LIBRARY PER DISTRICT </title>
		<link type="text/css" rel="stylesheet" href="style/style.css"></link>
		<link rel="shortcut icon" style="border-color:red;" href="images/logo.png"  type="image/x-icon">
	</head>
<?php
//echo 'ram';
if(!isset($_SESSION['id'])) 
{//	echo 'tree';
	if(isset($_POST['username'])&&isset($_POST['password']))
	{//echo 'green';
		 //including config.php in our file
		$username = $_POST['username']; //Storing username in $username variable.
		$password = $_POST['password']; //Storing password in $password variable.
		echo 'test';
			$query_run=mysql_query("SELECT * FROM user WHERE username='$username' && password='$password'");
				$count=mysql_num_rows($query_run);
				echo $count;
			if ($count == 1) { 
				
				//echo "username no found";
				header("location:admin_panel.php");
				//include('tags.php');


				
				}
				else
				{
						$row = mysql_fetch_assoc($query_run);
						if(!empty($row)) 
						{			
							$_SESSION['user'] = $row['username'];
							$_SESSION['id'] = $row['id'];
					
						header("location:y.php");
						$logout= 1;
					}
					
					?> 
					<?php
				 
				}
			
	}
	else
	{
		?>
		<body>
		<div class="wrapper">
		
			<?php include 'menubar.php';?>
		
				<div id="marquee">
					<marquee direction='left' style="background-color:transparent; text-decoration:underline;"><?php include'marquee.php' ?></marquee>
				</div>
				<div class='left'>
				</div>
				<div class='right'>
					<form style='background=-color:transparent;'action='<?php $_SERVER['PHP_SELF'] ?>' method='post' class='form-signin' id = 'login_form' >
						<table border='0'>
							<th>LOGIN</th>
							<tr>
							<td>
							<input type='text' name='username' size='32' placeholder='Username'>
							</td>
							<tr>
							<td>
							<input type='password' name='password' size='32' placeholder='Password'></br>
							</td>
							</tr>
							<tr><td><input type='submit' value='LogIn' class='btn btn-large btn-primary'>
							</td><td></td>
							</tr>
							<tr><td><!-- <a href='reg.php'>Register</a>--></td></tr>
						</table>
					</form>
				</div>
				</div>

		</div>
			<?php

	}
}
else
{
	include"index.php";
}
?>

</body>
</html>
