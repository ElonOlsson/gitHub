<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="style.css" media="screen" rel="stylesheet" type="text/css"/>
		<title>Databas för LEGO-satser</title>
	</head>
	<body>
	<div id="meny">
		
		
			<a href="index.html">
				<span id="home">
				<img id="bok" src="bok.jpg">
				</span>
			</a>
		
		
		<div id="menyinfo">
			<h1>Browse</h1>
		</div>
	</div>
	<div id="container">
		<div id="containerLeft">
			<form action="resultlist.php" method="post">
				<div id="search" class="search">
				Search:<br>
							<input type="text" name="text">
							<br>
				</div>
				<div id="years" class="search">
				Year:<br>
							<input type="number" name="firstYear">
							<input type="number" name="secondYear">
							<br>
							
				</div>
				<div id="categories" class="search">	<!-- kolla printScrn-bilden php/mysql loopa categorier-->
				Categories:<br>
							<input type="text" name="text"> <!-- type=" någon slags dropdown" -->
							<br>
				</div>
				<div id="go" class="search">
					<input  type="submit" value="post">
				</div>
				
			</form>
		</div>
		<div id="containerRight">
		
		</div>
	</div>
	
	</body>
</html>