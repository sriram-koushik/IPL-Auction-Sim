<?php
$user=$_COOKIE["psgcookie"];
include('dbconnect.php');
error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META HTTP-EQUIV="REFRESH" CONTENT="25"><!--Make the number suitable so as to refresh accordingly-->
<title>PSG IPL AUCTION  -MY TEAM</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div id="wrapper">
			<br>
			<br>
			<br>
			 <center><a href="myauct.php">Go back to auction</a> | 
		<a href="myteam.php">My Team</a> | 
		<a href="logout.php">Logout</a> 
		</center>
<br>
<br>
<br>
         <!-- Begin Header -->
         <div id="header">
		 
		      <center><font size="6"><b>TEAM 1</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='alpha1211'";
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
			<br>
		 <br><br>
		 <br>
			<div id="header">
		 
		      <center><font size="6"><b>TEAM 2</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='beta1211'";
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
			<br>
		 <br><br>
		 <br>
			<div id="header">
		 
		      <center><font size="6"><b>TEAM 3</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='delta1211'";
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
			
			<div id="header">
		 
		      <center><font size="6"><b>TEAM 4</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='epsilon121'";
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
			
			<div id="header">
		 
		      <center><font size="6"><b>TEAM 5</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='foreign112'";
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
			
			<div id="header">
		 
		      <center><font size="6"><b>TEAM 6</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='foreign212'";
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
			
			<div id="header">
		 
		      <center><font size="6"><b>TEAM 7</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='gamma1211'";
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
			
			<div id="header">
		 
		      <center><font size="6"><b>TEAM 8</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='kappa1211'";
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
			
			<div id="header">
		 
		      <center><font size="6"><b>TEAM 9</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='lambda1211'";
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
			
			<div id="header">
		 
		      <center><font size="6"><b>TEAM 10</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='omega1211'";
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
			
			<div id="header">
		 
		      <center><font size="6"><b>TEAM 11</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='omicron121'";
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

			<div id="header">
		 
		      <center><font size="6"><b>TEAM 12</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='sigma1211'";
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

			<div id="header">
		 
		      <center><font size="6"><b>TEAM 13</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='team010121'";
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

			<div id="header">
		 
		      <center><font size="6"><b>TEAM 14</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='team0111211'";
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

			<div id="header">
		 
		      <center><font size="6"><b>TEAM 15</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='team011211'";
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

			<div id="header">
		 
		      <center><font size="6"><b>TEAM 16</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='team0121211'";
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

			<div id="header">
		 
		      <center><font size="6"><b>TEAM 17</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='team0131211'";
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

			<div id="header">
		 
		      <center><font size="6"><b>TEAM 18</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='team0141211'";
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

			<div id="header">
		 
		      <center><font size="6"><b>TEAM 19</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='team0151211'";
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

			<div id="header">
		 
		      <center><font size="6"><b>TEAM 20</b></font></center>
			   
		 </div>
		 <br>
		 <br>
				<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where owner='team021211'";
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