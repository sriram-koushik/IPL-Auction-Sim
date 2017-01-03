<?php
$user=$_COOKIE["psgcookie"];
include('dbconnect.php');
if($_COOKIE["psgcookie"]=="")
header("Location: login.php");
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META HTTP-EQUIV="REFRESH" CONTENT="7"><!--Make the number suitable so as to refresh accordingly-->
<title>PSG IPL AUCTION  -MY TEAM</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrapper">
   		<br>
			<br>
			<br>
			 <center>
			
		<a href="logout.php">Logout</a> 
		</center>
<br>
<br>
<br>
         <!-- Begin Header -->
         <div id="header">
		 
		      <center><font size="6"><b> MY TEAM</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='".$user."'";
				$result1=mysql_query($query1);
				$netvalue1=0;
				if(!$result1)
				echo mysql_error();
				print '<table align=center width=100% border=1>';
				print '<th>Player ID</th>';
				print '<th>Player Name</th>';
				print '<th>Style</th>';
				while($row1=mysql_fetch_assoc($result1))
				{	
				    
					print  '<tr width=430px>';									
					print '<td width=33.33% align=center >';
					echo htmlspecialchars( stripslashes($row1["playerid"]));
					print '</td>';
					print '<td width=33.33% align=center >';
					echo htmlspecialchars( stripslashes($row1["playername"]));
					print '</td>';
					print '<td width=33.33% align=center >';
					if($row1["type"]=="bm")
						echo htmlspecialchars( stripslashes("Batsman"))."</font>";
					else if($row1["type"]=="bw")
						echo htmlspecialchars( stripslashes("Bowler"));
					else if($row1["type"]=="ar")
						echo htmlspecialchars( stripslashes("Allrounder"));
					else if($row1["type"]=="wk")
						echo htmlspecialchars( stripslashes("Wicket keeper"));

					print '</td>';
					print '</tr>';
					
				}
				print '</table>';
			?>
			
	</div>		
	</body>
	</html>