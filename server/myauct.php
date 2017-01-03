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
<title>PSG IPL AUCTION </title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

   <!-- Begin Wrapper -->
   <div id="wrapper">
   
         <!-- Begin Header -->
         <div id="header">
		 
		      <center><font size="6"><b> PSG IPL AUCTION</b></font></center>
			   
		 </div>
		 <!-- End Header -->
		 <br>
		 <br>
		 <center>		<a href="whogotwho.php">Who got who</a> | 
		<a href="myteam.php">My Team</a> | 
		<a href="logout.php">Logout</a> 
		</center>
         <!-- Begin Faux Columns -->
		 <div id="faux">
			<?php
				$user=$_COOKIE["psgcookie"];
				$query="SELECT * from userdet where username='".$user."'";  
				echo "<br/>";
				$result=mysql_query($query);
				echo "&nbsp &nbsp<b>TEAM NAME :</b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
				echo "<b>".mysql_result($result,0,'teamname')."</b>";
				echo "<br />";
				echo "<br />";
				echo "&nbsp &nbsp<b>CASH BALANCE : </b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
				echo "<b>"."$".mysql_result($result,0,'amt')."</b>";
				echo "<br />";
				echo "<br />";
				echo "&nbsp &nbsp<b>PLAYERS SO FAR : </b>&nbsp &nbsp &nbsp &nbsp &nbsp";
				$querya="SELECT * from players where owner='".$user."'";
				$resulta=mysql_query($querya);
				echo "<b>".mysql_num_rows($resulta)."</b>";
				echo "<br />";
				echo "<br />";
		
			?>
				
		       <!-- Begin Left Column -->
		       <div id="leftcolumn">
		 
		            
			<h2><center>CLASS A</center></h2>
				<br>
						<p><center><b>Each of the player costs $8000000</b></center></p>
						<br>
						<p>
						<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where price=8000000 AND status='avl'";
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
				    
					print  '<tr width=430px>';									//but one problem the values will be stored in rank table only if the user signs in
					print '<td width=30% align=center >';
					echo htmlspecialchars( stripslashes($row1["playerid"]));
					print '</td>';
					print '<td width=30% align=center >';
					echo htmlspecialchars( stripslashes($row1["playername"]));
					print '</td>';
					print '<td width=40% align=center >';
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
					</p>
		       </div>
		       <!-- End Left Column -->
		 
		       <!-- Begin Left Middle -->
		       <div id="leftmiddle">
		       
	                 <h2><center>CLASS B</center></h2>
					 <br>
						<p><center><b>Each of the player costs $6500000</b></center></p>
						<br>
						<p>
						<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where price=6500000 AND status='avl'";
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
				    
					print  '<tr width=430px>';									//but one problem the values will be stored in rank table only if the user signs in
					print '<td width=30% align=center>';
					echo htmlspecialchars( stripslashes($row1["playerid"]));
					print '</td>';
					print '<td width=30% align=center>';
					echo htmlspecialchars( stripslashes($row1["playername"]));
					print '</td>';
					print '<td width=40% align=center>';
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
					</p>
	       </div>
		       <!-- End Left Middle -->
			   
			   <div id="leftmiddle2">
		       
	                 <h2><center>CLASS C</center></h2>
						<br>
						<p><center><b>Each of the player costs $4000000<b></center></p>
						<br>
						<p>
						<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where price=4000000 AND status='avl'";
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
				    
					print  '<tr width=430px>';									//but one problem the values will be stored in rank table only if the user signs in
					print '<td width=30% align=center>';
					echo htmlspecialchars( stripslashes($row1["playerid"]));
					print '</td>';
					print '<td width=30% align=center>';
					echo htmlspecialchars( stripslashes($row1["playername"]));
					print '</td>';
					print '<td width=40% align=center>';
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
					</p>
	       </div>
		       <!-- End Left Middle -->
			   
			   <!-- Begin Right Middle -->
		       <div id="rightmiddle">
		 
		             <h2><center>CLASS D</center></h2>
						<br>
						<p><center><b>Each of the player costs $2000000</b></center></p>
						<br>
						<p>
						<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where price=2000000 AND status='avl'";
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
				    
					print  '<tr width=430px>';									//but one problem the values will be stored in rank table only if the user signs in
					print '<td width=30% align=center>';
					echo htmlspecialchars( stripslashes($row1["playerid"]));
					print '</td>';
					print '<td width=30% align=center>';
					echo htmlspecialchars( stripslashes($row1["playername"]));
					print '</td>';
					print '<td width=40% align=center>';
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
					</p>
							
		       </div>
		       <!-- End Right Middle -->
			   
			   <!-- Begin Right Column -->
		       <div id="rightcolumn">
		 
		<h2><center>CLASS E</center></h2>
						<br>
						<p><center><b>Each of the player costs $1000000</b></center></p>
						<br>
						<p>
						<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where price=1000000 AND status='avl'";
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
				    
					print  '<tr width=430px>';									//but one problem the values will be stored in rank table only if the user signs in
					print '<td width=30% align=center>';
					echo htmlspecialchars( stripslashes($row1["playerid"]));
					print '</td>';
					print '<td width=30% align=center>';
					echo htmlspecialchars( stripslashes($row1["playername"]));
					print '</td>';
					print '<td width=40% align=center>';
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
					</p>
							
		       </div>
		       <!-- End Right Column -->

               <div class="clear"></div>
			   
         </div>	   
		 <br>
		 <br>
		 <div id="acc">
         <!-- End Faux Columns --> 
	<form name="accept" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<center><b>BUY PLAYERS</b></center>
				<br>
				<center><b>PLAYER ID :</b></center>
				<center><input type="text" name="id"></center>
				<br>
				<center><input type="submit" name="Submit" value="ACCEPT"></center>
				
				</form>
				<?php
				$user=$_COOKIE["psgcookie"];
				if(isset($_POST['Submit']))
					{
						$query="SELECT * from userdet where username='".$user."'";  
						$result=mysql_query($query);
					    $bal=mysql_result($result,0,'amt');
						$queryc="SELECT * from players where owner='".$user."'";
						$resultc=mysql_query($queryc);
						$alrpur=mysql_num_rows($resulta);
						$query1="SELECT * from players where playerid='".$_POST['id']."'";
						$result1=mysql_query($query1);
						$result1cou=mysql_num_rows($result1);
						if($result1cou==1)
						{		
						$playcost=mysql_result($result1,0,'price');
						$playname=mysql_result($result1,0,'playername');
						$stat=mysql_result($result1,0,'status');
						$diff=$bal-$playcost;
						$sold="sold";
						
							if($bal>$playcost&&$diff>=0)
							{
							if($alrpur<12)
							{
							if($stat=="avl")
							{
							$queryx="UPDATE userdet SET amt='".$diff."' where username='".$user."'";
							mysql_query($queryx);
							$queryy="UPDATE players SET owner='".$user."' where playerid='".$_POST['id']."'";
							mysql_query($queryy);
							$queryz="UPDATE players SET status='".$sold."' where playerid='".$_POST['id']."'";
							mysql_query($queryz);
							echo "<br><center><font color='green'>You bought ".$playname." successfully!</font></center>";
							
							}
							else
									echo "<br><center><font color='red'>The player you chose is not available !</font></center>";
							}
								else
									echo "<br><center><font color='red'>You can't buy more than 11 players !</font></center>";
							}
						else
						{
								echo "<br><center><font color='red'>You don't have enough money to buy this player !</font></center>";
											
						}
						}
						else
							echo "<br><center><font color='red'>Enter a valid player number</font></center>";
					}
				?>
				</div>
				<br>
				<br>
         <!-- Begin Footer -->
         <div id="footer">
		       
               Copyright @ PSGTECH ECLUB 2012		

         </div>
		 <!-- End Footer -->
		 
   </div>
   <!-- End Wrapper -->
</body>
</html>
