<?php 
session_start(); 
?>
<?php
	$error=0;
		$connect=mysql_connect("localhost","root","root") or die("Couldn't connect!!");
		mysql_select_db("henn",$connect) or die("Couldnot connect to the database");
		
		if(isset($_POST['submit']))
		{
			$user=$_POST['user'];
			$question=$_POST['question'];
			$answer=$_POST['answer'];
			
			if($user&&$question&&$answer)
			{
			
				mysql_query("INSERT INTO faq VALUES ('','$user','$question','$answer','')");
				header('Location:index.php');
			
			}
			
			else
				die("Please Provide all your information<a href='feedback.php'>Return Back</a>");
		
		
		
		}
?>






<?php include'connect.php';?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Henl Nepal Network | E-Library PROJECT | One E-LIBRARY PER DISTRICT </title>
		<link type="text/css" rel="stylesheet" href="style/style.css"></link>
		<link rel="shortcut icon" style="border-color:red;" href="images/logo.png"  type="image/x-icon">
	</head>
	<body>
		<div class='wrapper'>
				<?php include'menubar.php';?>

			<div id="marquee">
				<marquee direction="left" style="background-color:transparent; text-decoration:underline;"><?php include'marquee.php' ?></marquee>
			</div>

			<div class="left">

			</div>
			
			<div class="right">
			<table  align="center" id ="feed"  border=0>
				<form name="faq"  action='faq.php' method='POST'>
				<h1  align="center" style="font:calibari; size:60px;color:white;">Add the FAQ's below</h1>
				
				<tr>
						<td>USER:</td>
						<td><input type='text' name='user' id='user' style="background:transparent;border-radius:5px;"></td>
				</tr>
				<tr>

						<td>QUESTION:</td>
						<td><textarea name='question' id='question' rows='5' cols='70' maxlength='500' style=" background:transparent;resize:none; border-radius:5px;"></textarea></td>
				</tr>
				<tr>
						<td>ANSWER</td>
						<td><textarea name='answer' id='answer' rows='8' cols='70' maxlength='500' style="background:transparent; resize:none;border-radius:5px;"></textarea></td>
				</tr>
				<tr>	<td></td>
						<td><input type="submit"  style="color: red;" name='submit' id='faq' value='Submit'><input type="reset" style="color: red;" name='clear' id='clear' value='Clear'></td>
				</tr>
					<div style="padding-left:10px;">
					<?php
						if($error==1)
							echo"please fill in all the fields";
					?>
					</div>
				</form>
			</table>
			</div>

		</div>
	</body>
</html>
