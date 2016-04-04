<?php 
session_start(); 
?>
<?php
	$error=0;
		$connect=mysql_connect("localhost","root","root") or die("Couldn't connect!!");
		mysql_select_db("henn",$connect) or die("Couldnot connect to the database");
		
		if(isset($_POST['submit']))
		{
			$from=$_POST['from'];
			$subject=$_POST['subject'];
			$feedback=$_POST['feedback'];
			
			if($from&&$subject&&$feedback)
			{
			
				mysql_query("INSERT INTO feedback VALUES ('','$from','$subject','$feedback')");
				header('Location:index.php');
			
			}
			
			else
				die("Please Provide all your information<a href='feedback.php'>Return Back</a>");
		
		
		
		}
?>



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
			<div id="marquee"><marquee direction="left" style="background-color:transparent; text-decoration:underline;"> <?php include'marquee.php' ?></marquee></div>

			<div class="left">
						TEST LEFT DIVISION
			</div>
			
			<div class="right">

			<table  align="center" id ="feed"  border=0>
				<form name="feedback"  action='feedback.php' method='POST'>
				<h1  align="center" style="font:calibari; size:40px;">POST YOUR FEEDBACK BELOW</h1>
				<tr>
						<td>From:</td>
						<td> <input type="text" name='from' id='from' ></td>
				</tr>
				<tr>
						<td>Subject:</td>
						<td><input type="text" name='subject' id='subject'></td>
				</tr>
				<tr>
						<td>Feedback:</td>
						<td><textarea name='feedback' id='feedback' rows='8' cols='60' maxlength='500' style="resize:none;"></textarea></td>
				</tr>
				<tr>	<td></td>
						<td><input type="submit"  style="color: red;" name='submit' id='feedback' value='Submit'><input type="reset" style="color: red;" name='clear' id='clear' value='Clear'></td>
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


<div class="footer1"style="margin-botton:down;margin-top:160px;;margin-left:auto;margin-right:auto;">
<?php include'footer.php';?>
</div>

</div>

</div>
</body>
</html>
