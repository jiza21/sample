<!DOCTYPE html>
<html>
<head>
	<title> Point of Sale </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="web3function.js"></script>
	<link rel="stylesheet" href="mystyle3.css">
	<style type="text/css">
		label{
			font-size: 12pt;
			font-family: Bookman Old Style;
			padding: 10px;
			margin: 5px;
			color: white;
			text-align: center;
		}
		h1{
			font-family: Palatino Linotype; 
			font-size: 40pt;
			padding: 20px;
			color: #f5f5f5;
			text-shadow: 5px 5px black;
		}
		body{
			font-size: 13pt;
			font-family: Bookman Old Style;
			background-repeat: no-repeat;
			background-attachment: fixed;
			color: white;
		}
		.burger{
			background-color: transparent; 
            box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.5); 
            margin: 10px auto; 
            width: 1000px; 
            height: 760px;
            padding: 20px;
            border: 3px solid black;
            font-color: #f5f5f5;
            border-radius: 15px;
            text-align: center;
		}
		input[type=text] {
  			size: 13pt;
			background-color: #f5f5f5;
			color: black;
  			border:2px solid black;font
  			font-family: Bookman Old Style;
		}
		img{
			height:100px;
			width:150px;
			margin: 10px;
		}
		input[type=submit] {
  			font-size: 13pt;
			border-radius: 5px;
			background-color: #f5f5f5;;
			color: black;
  			padding: 5px;
  			margin: 3px;
  			border:3px solid black;
  			font-family: Centaur;
  			height: 40px; 
  			width: 40px;
		}
		.item{
			padding: 10px;
			margin: 10px;
			background-color: transparent;
			width: 550px;
			height:200px;
			float: left;
			border: 1px dotted white;
			border-radius: 5px;
		}
		.iteminfo{
			padding: 10px;
			margin: 10px;
			background-color: transparent;
			width: 600px;
			height:480px;
			float: left;
			border: 2px solid black;
			border-radius: 5px;
		}
		.summary{
			padding: 10px;
			margin: 10px;
			background-color: transparent;
			width: 550px;
			height:100px;
			float: left;
			border: 1px dotted white;
			border-radius: 5px;
		}
		.cash{
			padding: 10px;
			margin: 10px;
			background-color: transparent;
			width: 550px;
			height:60px;
			float: left;
			border: 1px dotted white;
			border-radius: 5px;
		}
		
		.calculator{
			padding: 10px;
			margin: 10px;
			background-color: transparent;
			width: 210px;
			height:230px;
			float: left;
			border: 2px solid black;
			border-radius: 5px;
		}
		.nav_links{
			box-sizing: border-box;
			margin: 5px;
			padding: 5px;
			list-style: none;
		}
		.nav_links li{
			display: inline-block;
			padding: 20px;
		}
		.nav_links li a{
			transition: all 0.3s ease 0s;
		}
		.active{
			background-color: black;
			border-radius: 10px;
		}	
		a:hover{
			font-size: 14pt;
		}	
		li, a{
			font-family: Century;
			font-size: 12pt;
			font-weight: 500px;
			color: white;
			text-decoration: none;
		}
		header{
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 0px;
		}
		.topmenu{
			overflow: hidden;
			background-color: #222222;
		}
		label:hover{
			text-shadow: 3px 3px 10px #ff1493; 
		}
	</style>
	<script type="text/javascript">
		function logout(){
			if(confirm("Are you sure you want to exit?")){
				window.location.href='logoutpage.php';
			}
		}
	</script>
</head>
<body background="img/bb2.jpeg">
		<div class="topmenu">
		<header>
			<img src="img/log.png" style="height: 80px; width: 150px">
			<nav>
				<ul class="nav_links">
					<li><a href="web1.php">Order Burger</a></li>
					<li><a href="web2.php">Employee Info</a></li>
					<li class="active"><a href="web3.php">Point of Sale</a></li>
				</ul>
			</nav>
		</header>
		</div>
	<h1> Burger Hub Point of Sale </h1>
<div>
<form method="post" action="logoutpage.php">
	<!-- menu list -->
	<div class="header">
	</div>
	<div class="burger">
		<b><p style="font-size: 25pt"> Menu List </p></b>
			<table>
				<tr>
					<td><img src="img/beefyburger.jpg"></td>
					<td><img src="img/cheeseburger.jpg"></td>
					<td><img src="img/veggieburger.png"></td>
					<td><img src="img/chickenburger.jpg"></td>
					<td><img src="img/grilledburger.jpg"></td>
				</tr>
				<tr>
					<td> <label id="beef" name="beef">Beefy Burger</label></td>
					<td> <label id="cheeseburger" name="cheeseburger"> Cheese Burger </label></td>
					<td> <label id="veggie" name="veggie"> Veggie Burger </label></td>
					<td> <label id="chickenburger" name="chickenburger"> Chicken Burger </label></td>
					<td> <label id="grilledburger" name="grilledburger"> Grilled Beef Burger </label></td>
				</tr>
				<tr>
					<td><img src="img/hamburger.jpg"></td>
					<td><img src="img/baconcheese.jpg"></td>
					<td><img src="img/crispychicken.jpg"></td>
					<td><img src="img/Spicychicken.jpg"></td>
					<td><img src="img/grilledchicken.jpg"></td>
				</tr>
				<tr>
					<td> <label id="hamburger" name="hamburger"> Hamburger </label></td>
					<td> <label id="baconcheese" name="baconcheese"> Bacon Cheeseburger </label></td>
					<td> <label id="crispychicken" name="crispychicken"> Crispy Chicken Sandwich </label></td>
					<td> <label id="spicychicken" name="spicychicken"> Spicy Crispy Chicken </label> </td>
					<td> <label id="grilledchicken" name="grilledchicken"> Grilled Chicken Burger </label></td>
				</tr>
				<tr>
					<td><img src="img/baconking.png"></td>
					<td><img src="img/vegchili.jpg"></td>
					<td><img src="img/eggsandwich.jpg"></td>
					<td><img src="img/hotdog.jpg"></td>
					<td><img src="img/hamsandwich.jpg"></td>
				</tr>
				<tr>
					<td> <label id="baconking" name="baconking"> Bacon King </label> </td>
					<td> <label id="vegchili" name="vegchili"> Veg Chili Cheese Burger </label> </td>
					<td> <label id="eggsandwich" name="eggsandwich"> Egg Sandwich </label> </td>
					<td> <label id="hotdog" name="hotdog"> Hotdog Sandwich </label> </td>
					<td> <label id="hamsandwich" name="hamsandwich"> Ham Sandwich </label> </td>
				</tr>
				<tr>
					<td><img src="img/tunasandwich.jpg"></td>
					<td><img src="img/pancake.jpg"></td>
					<td><img src="img/fries.jpg"></td>
					<td><img src="img/nuggets.jpg"></td>
					<td><img src="img/friedchicken.jpg"></td>
				</tr>
				<tr>
					<td> <label id="tunasandwich" name="tunasandwich"> Tuna Sandwich </label> </td>
					<td> <label id="pancake" name="pancake"> Pancake </label> </td>
					<td> <label id="fries" name="fries"> Fries </label> </td>
					<td> <label id="nuggets" name="nuggets"> 6pcs. Nuggets </label> </td>
					<td> <label id="friedchicken" name="friedchicken"> 6pcs. Fried Chicken </label></td>
				</tr>
			</table> 
		</div>

		<!--  items info -->
		<div class="iteminfo">
		<div class="item">
			<table>
				<tr>
					<td> Name of an Item: </td>
					<td><input type="text" name="item" id="item" value="" disabled></td>
					<td><label id="lt" style="text-shadow: 2px 2px black; font-size: 14pt;">Select Discount: </label></td>
				</tr>
				<tr>
					<td> Price: </td>
					<td><input type="text" name="price" id="price" value="" disabled></td>
					<td><input type="radio" name="senior" id="senior"> Senior Citizen </td>
				</tr>
				<tr>
					<td> Quantity: </td>
					<td><input type="text" name="qty" id="qty" value=""></td>
					<td><input type="radio" name="disc_card" id="disc_card" > With Disc. Card </td>
				</tr>
				<tr>
					<td> Discount Amount: </td>
					<td><input type="text" name="disamount" id="disamount" value="" disabled></td>
					<td><input type="radio" name="emp_disc" id="emp_disc"> Employee Disc. </td>
				</tr>
				<tr>
					<td> Discounted Amount: </td>
					<td><input type="text" name="discounted" id="discounted" value= "" disabled></td>
					<td><input type="radio" name="nodisc" id="nodisc"> No Discount </td>
				</tr>
			</table>
				<input type="submit" name="cal" id="cal" value="Calculate" style="width: 80px">
				<input type="submit" name="change" id="change" value="Change" style="width: 80px">
				<input type="submit" name="new" id="new" value="New" style="width: 60px">
				<input type="submit" name="cancel" id="cancel" value="Cancel" style="width: 70px">
				<input type="submit" name="exit" id="exit" value="Exit" style="width: 60px" onclick="logout()">
		</div>

		<!-- summary -->
		<div class="summary">
			<label id="lt" style="text-shadow: 2px 2px black; font-size: 14pt;"> Summary </label>
			<table>
				<tr>
					<td> Total Quantity: </td>
					<td><input type="text" name="tqty" id="tqty" placeholder="0.00" disabled></td>
				</tr>
				<tr>
					<td> Total Discount Given: </td>
					<td><input type="text" name="tdisc" id="tdisc" placeholder="0.00" disabled></td>
				</tr>
				<tr>
					<td> Total Discounted Amount: </td>
					<td><input type="text" name="tdiscounted" id="tdiscounted" placeholder="0.00" disabled></td>
				</tr>
			</table>			
		</div>
		<div class="cash">
			<table>
				<tr>
					<td> Cash Given </td>
					<td> Change </td>
				</tr>
				<tr>
					<td><input type="text" name="cash" id="cash"></td>
					<td><input type="text" name="moneychange" id="moneychange" disabled></td>
				</tr>
			</table>
		</div>
		</div>

		<!-- calculator function -->
		<div class="calculator">
			<div>
			<input type="submit" name="no7" value="7">
			<input type="submit" name="no8" value="8">
			<input type="submit" name="no9" value="9">
			<input type="submit" name="plus" value="+">
			<br>
			<input type="submit" name="no4" value="4">
			<input type="submit" name="no5" value="5">
			<input type="submit" name="no6" value="6">
			<input type="submit" name="minus" value="-">
			<br>
			<input type="submit" name="no1" value="1">
			<input type="submit" name="no2" value="2">
			<input type="submit" name="no3" value="3">
			<input type="submit" name="times" value="*">
			<br>
			<input type="submit" name="no0" value="0">
			<input type="submit" name="dot" value=".">
			<input type="submit" name="divide" value="\">
			<input type="submit" name="equals" value="=">
			<br>
			</div>
			<div>
				<center> <input type="submit" name="enter" value="Enter" style="width: 95px"></center>
			</div>
		</div>
</form>
</div>
</body>
</html>