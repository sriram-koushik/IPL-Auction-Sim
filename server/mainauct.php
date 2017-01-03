<?php
$user=$_COOKIE["psgcookie"];
include('dbconnect.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
	<title>PSG IPL AUCTION</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="description" content="5 Column CSS Demo - Equal Height Columns with Cross-Browser CSS" />
	<meta name="keywords" content="5 Column CSS Demo - Equal Height Columns with Cross-Browser CSS" />
	<meta name="robots" content="index, follow" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<style media="screen" type="text/css">
	a{text-decoration:none;}
	
	<body {
	margin:0;
	padding:0;
}

#header h1,
#header h2,
#header p {
	margin-left:2%;
	padding-right:2%;
}
#active2 #tab2,
#active3 #tab3,
#active4 #tab4,
#active5 #tab5 {
	font-weight:bold;
	text-decoration:none;
	color:#000;
}
#footer {
	clear:both;
	float:left;
	width:100%;
}
#footer p {
	margin-left:2%;
	padding-right:2%;
}

/* Start of Column CSS */
#container6
 {
	clear:left;
	float:left;
	width:100%;
	overflow:hidden;
	background:#fff; /* column 6 background colour */
}
#container5 {
	clear:left;
	float:left;
	width:100%;
	position:relative;
	right:16.66%;
	background:#eee; /* column 5 background colour */
}
#container4 {
	clear:left;
	float:left;
	width:100%;
	position:relative;
	right:16.66%;
	background:#b2f0f9; /* column 4 background colour */
}
#container3 {
	clear:left;
	float:left;
	width:100%;
	position:relative;
	right:16.66%;
	background:#89ffa2; /* column 3 background colour */
}
#container2 {
	clear:left;
	float:left;
	width:100%;
	position:relative;
	right:16.66%;
	background:#ffa7a7; /* column 2 background colour */
}
#container1 {
	float:left;
	width:100%;
	position:relative;
	right:16.66%;
	background:#fff689; /* column 1 background colour */
}
#col1 {
	float:left;
	width:14%;
	position:relative;
	left:84%;
	overflow:hidden;
}
#col2 {
	float:left;
	width:14%;
	position:relative;
	left:88%;
	overflow:hidden;
}
#col3 {
	float:left;
	width:14%;
	position:relative;
	left:90%;
	overflow:hidden;
}
#col4 {
	float:left;
	width:14%;
	position:relative;
	left:93%;
	overflow:hidden;
}
#col5 {
	float:left;
	width:14%;
	position:relative;
	left:96%;
	overflow:hidden;
}
#col6 {
	float:left;
	width:14%;
	position:relative;
	left:99%;
	overflow:hidden;
}

> 
    </style>
</head>
<body id="active5">

<div id="header">
	
	<center><h1>PSG IPL AUCTION</h1></center>
		<p>
		<a id="tab1" href="whogotwho.php">Who got who</a> | 
		<a id="tab2" href="instructions.html">Instructions</a> | 
		<a id="tab2" href="logout.php">Logout</a> | 
		</p>
</div>
<div id="container6">
<div id="container5">
	<div id="container4">
		<div id="container3">
			<div id="container2">
				<div id="container1">
					<div id="col1">
						<!-- Column one start -->
						<h2>CLASS A</h2>
						<p>Each of the player costs $8000000</p>
						<p>
						<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where price=8000000";
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
						<!-- Column one end -->
					</div>
					<div id="col2">
						<!-- Column two start -->
						<h2>No CSS hacks</h2>
						<p>The CSS used for this 5 column layout is 100% valid and hack free. To overcome Internet Explorer's broken box model, no horizontal padding or margins are used. Instead, this design uses percentage widths and clever relative positioning.</p>
						<h2>No Images</h2>
						<p>This five column layout requires no images. Many CSS website designs need images to colour in the column backgrounds but that is not necessary with this design. Why waste bandwidth and precious HTTP requests when you can do everything in pure CSS and HTML?</p>
						<!-- Column two end -->
					</div>
					<div id="col3">
						<!-- Column three start -->
						<h2>No JavaScript</h2>
						<p>JavaScript is not required. Some website layouts rely on JavaScript hacks to resize divs and force elements into place but you won't see any of that nonsense here.</p>
						<h2>Valid XHTML strict markup</h2>
						<p>The HTML in this layout validates as XHTML 1.0 strict.</p>
						<!-- Column three end -->
					</div>
					<div id="col4">
						<!-- Column four start -->
						<h2>This layout is FREE for anyone to use</h2>
						<p>You don't have to pay anything. Simply view the source of this page and save the HTML onto your computer. My only suggestion is to put the CSS into a separate file. If you are feeling generous however, link back to this page so other people can find and use this layout too.</p>
						<!-- Column four end -->
					</div>
					<div id="col5">
						<!-- Column five start -->
						<h2>Cross-Browser Compatible</h2>
						<p>This 5 column layout has been tested on the following browsers:</p>
						<h3>iPhone &amp; iPod Touch</h3>
						<ul>
							<li>Safari</li>
						</ul>
						<h3>Mac</h3>
						<ul>
							<li>Safari</li>
							<li>Firefox</li>
							<li>Opera 9</li>
							<li>Netscape 7 &amp; 9</li>
						</ul>
						<h3>Windows</h3>
						<ul>
							<li>Firefox 1.5, 2 &amp; 3</li>
							<li>Safari</li>
							<li>Opera 8 &amp; 9</li>
							<li>Explorer 5.5, 6 &amp; 7</li>
							<li>Google Chrome</li>
							<li>Netscape 8</li>
						</ul>
						<!-- Column five end -->
					</div>
					<div id="col6">
						<!-- Column four start -->
						<h2>This layout is FREE for anyone to use</h2>
						<p>You don't have to pay anything. Simply view the source of this page and save the HTML onto your computer. My only suggestion is to put the CSS into a separate file. If you are feeling generous however, link back to this page so other people can find and use this layout too.</p>
						<!-- Column four end -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div id="container6">
<div id="container5">
	<div id="container4">
		<div id="container3">
			<div id="container2">
				<div id="container1">
					<div id="col1">
						<!-- Column one start -->
						<h2>CLASS A</h2>
						<p>Each of the player costs $8000000</p>
						<p>
						<?php
				$user=$_COOKIE["psgcookie"];
				$query1="SELECT * from players where price=8000000";
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
						<!-- Column one end -->
					</div>
					<div id="col2">
						<!-- Column two start -->
						<h2>No CSS hacks</h2>
						<p>The CSS used for this 5 column layout is 100% valid and hack free. To overcome Internet Explorer's broken box model, no horizontal padding or margins are used. Instead, this design uses percentage widths and clever relative positioning.</p>
						<h2>No Images</h2>
						<p>This five column layout requires no images. Many CSS website designs need images to colour in the column backgrounds but that is not necessary with this design. Why waste bandwidth and precious HTTP requests when you can do everything in pure CSS and HTML?</p>
						<!-- Column two end -->
					</div>
					<div id="col3">
						<!-- Column three start -->
						<h2>No JavaScript</h2>
						<p>JavaScript is not required. Some website layouts rely on JavaScript hacks to resize divs and force elements into place but you won't see any of that nonsense here.</p>
						<h2>Valid XHTML strict markup</h2>
						<p>The HTML in this layout validates as XHTML 1.0 strict.</p>
						<!-- Column three end -->
					</div>
					<div id="col4">
						<!-- Column four start -->
						<h2>This layout is FREE for anyone to use</h2>
						<p>You don't have to pay anything. Simply view the source of this page and save the HTML onto your computer. My only suggestion is to put the CSS into a separate file. If you are feeling generous however, link back to this page so other people can find and use this layout too.</p>
						<!-- Column four end -->
					</div>
					<div id="col5">
						<!-- Column five start -->
						<h2>Cross-Browser Compatible</h2>
						<p>This 5 column layout has been tested on the following browsers:</p>
						<h3>iPhone &amp; iPod Touch</h3>
						<ul>
							<li>Safari</li>
						</ul>
						<h3>Mac</h3>
						<ul>
							<li>Safari</li>
							<li>Firefox</li>
							<li>Opera 9</li>
							<li>Netscape 7 &amp; 9</li>
						</ul>
						<h3>Windows</h3>
						<ul>
							<li>Firefox 1.5, 2 &amp; 3</li>
							<li>Safari</li>
							<li>Opera 8 &amp; 9</li>
							<li>Explorer 5.5, 6 &amp; 7</li>
							<li>Google Chrome</li>
							<li>Netscape 8</li>
						</ul>
						<!-- Column five end -->
					</div>
					<div id="col6">
						<!-- Column four start -->
						<h2>This layout is FREE for anyone to use</h2>
						<p>You don't have to pay anything. Simply view the source of this page and save the HTML onto your computer. My only suggestion is to put the CSS into a separate file. If you are feeling generous however, link back to this page so other people can find and use this layout too.</p>
						<!-- Column four end -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div id="footer">
	<p>Copyright @ PSG TECH ECLUB 2012 &nbsp&nbsp&nbsp&nbsp&nbsp  <a href="http://psgtecheclub.com">visit psgtecheclub.com</a>.</p>
</div>


</body>
