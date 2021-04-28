<!DOCTYPE html>
<html>
<head>
	<title> Ordering Application </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="pos1function.js"></script>
	<style type="text/css">
		.orderdetails{
			border: 2px dashed white;
			margin: 5px;
			background-color: transparent;
			height: 300px;
			width: 670px;
			float: left;
			padding: 20px;
			border-radius: 15px;
		}
		.orderinfo{
			margin: 0px;
			background-color: transparent;
			height: 280px;
			width: 380px;
			float: left;
			padding: 0px;
			border-radius: 15px;
		}
		.iteminfo{
			margin: 3px;
			background-color: transparent;
			height: 280px;
			width: 270px;
			float: left;
			padding: 5px;
			border-radius: 15px;
		}
		.promo{
			margin: 3px;
			background-color: transparent;
			height: 600px;
			width: 510px;
			float: left;
			padding: 20px;
			border-radius: 15px;
		}
		.com{
			padding: 5px;
			margin: 3px;
			float: left;
			font-family: Palatino Linotype;
			font-size: 15pt;
			width: 490px;
			height: 200px;
		}
		.ordermain{
			padding: 20px;
			margin: 3px;
			float: left;
			font-family: Palatino Linotype;
			font-size: 15pt;
			height: 550px;
			width: 700px;
		}
		.buttons{
			padding: 10px;
			margin: 10px;
			float: left;
		}
		input[type=submit] {
  			font-size: 13pt;
			border-radius: 10px;
			background-color: #f5f5f5;;
			color: black;
  			padding: 5px;
  			margin: 5px;
  			border:3px solid black;
  			font-family: Centaur;
		}
		h1{
			font-family: Bauhaus 93; 
			font-size: 50pt;
			text-align: center;
			color: #f5f5f5;
			text-shadow: 10px 5px 10px black;
		}
		.burger{
			background-color: transparent; 
            box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.5); 
            margin: 10px auto; 
            width: 1000px; 
            height: 740px;
            padding: 20px;
            border: 3px solid black;
            font-color: #f5f5f5;
            border-radius: 15px;
            text-align: center;
		}
		img{
			height:100px;
			width:150px;
			margin: 10px;
		}
		table{
			margin: 5px;
		}
		.bundle{
			border: 2px dashed white;
			margin: 5px;
			background-color: inherit;
			height: 300px;
			width: 200px;
			float: left;
			padding: 20px;
			border-radius: 15px;
		}
		body{
			font-size: 13pt;
			font-family: Bookman Old Style;
			background-repeat: no-repeat;
			background-attachment: fixed;
			color: white;
		}
		input[type=text] {
  			size: 13pt;
			background-color: #f5f5f5;
			color: black;
  			border:2px solid black;
  			font-family: Bookman Old Style;
		}
		textarea{
			border: 3px solid black;
			font-family: Palatino Linotype;
			font-size: 13pt;
			background-color: white;
			color: black;
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
			font-weight: 500;
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
		label{
			font-size: 16pt;
			font-family: Berlin Sans FB Demi;
			padding: 20px;
			color: #f5f5f5;
			text-shadow: 2px 2px black;
		}
	</style>
	<script type="text/javascript">
		function comboA(){
			document.getElementById("myimage").src = "img/comboA.png";
				
		}
		function comboB(){
			document.getElementById("myimage").src = "img/comboB.png";
		}
		function logout(){
			if(confirm("Are you sure you want to exit?")){
				window.location.href='logoutpage.php';
			}
		}
	</script>
</head>
<body background="img/b.png">
	<div class="topmenu">
		<header>
			<img src="img/log.png" style="height: 80px; width: 150px">
			<nav>
				<ul class="nav_links">
					<li class="active"><a href="web1.php">Order Burger</a></li>
					<li><a href="web2.php">Employee Info</a></li>
					<li><a href="web3.php">Point of Sale</a></li>
				</ul>
			</nav>
		</header>
	</div>
	<h1> The Burger Hub </h1>
	<div>
	<!-- menu list -->
	<div class="container">
		<form method="post" action="logoutpage.php">
		<div class="burger">
			<table>
				<tr>
					<td><b><label style="font-size: 18pt"> Menu List </label></b></td>
				</tr>
				<tr>
					<td><img src="img/beefyburger.jpg" ></td>
					<td><img src="img/cheeseburger.jpg"></td>
					<td><img src="img/veggieburger.png"></td>
					<td><img src="img/chickenburger.jpg"></td>
					<td><img src="img/grilledburger.jpg"></td>
				</tr>
				<tr>
					<td><input type="checkbox" id="beef" name="beef"> Beefy Burger</td>
					<td><input type="checkbox" id="cheeseburger" name="cheeseburger"> Cheese Burger</td>
					<td><input type="checkbox" id="veggie" name="veggie"> Veggie Burger</td>
					<td><input type="checkbox" id="chickenburger" name="chickenburger"> Chicken Burger</td>
					<td><input type="checkbox" id="grilledburger" name="grilledburger"> Grilled Beef Burger</td>
				</tr>
				<tr>
					<td><img src="img/hamburger.jpg"></td>
					<td><img src="img/baconcheese.jpg"></td>
					<td><img src="img/crispychicken.jpg"></td>
					<td><img src="img/Spicychicken.jpg"></td>
					<td><img src="img/grilledchicken.jpg"></td>
				</tr>
				<tr>
					<td><input type="checkbox" id="hamburger" name="hamburger"> Hamburger</td>
					<td><input type="checkbox" id="baconcheese" name="baconcheese"> Bacon Cheeseburger</td>
					<td><input type="checkbox" id="crispychicken" name="crispychicken"> Crispy Chicken Sandwich</td>
					<td><input type="checkbox" id="spicychicken" name="spicychicken"> Spicy Crispy Chicken </td>
					<td><input type="checkbox" id="grilledchicken" name="grilledchicken"> Grilled Chicken Burger</td>
				</tr>
				<tr>
					<td><img src="img/baconking.png"></td>
					<td><img src="img/vegchili.jpg"></td>
					<td><img src="img/eggsandwich.jpg"></td>
					<td><img src="img/hotdog.jpg"></td>
					<td><img src="img/hamsandwich.jpg"></td>
				</tr>
				<tr>
					<td><input type="checkbox" id="baconking" name="baconking"> Bacon King </td>
					<td><input type="checkbox" id="vegchili" name="vegchili"> Veg Chili Cheese Burger </td>
					<td><input type="checkbox" id="eggsandwich" name="eggsandwich"> Egg Sandwich </td>
					<td><input type="checkbox" id="hotdog" name="hotdog"> Hotdog Sandwich </td>
					<td><input type="checkbox" id="hamsandwich" name="hamsandwich"> Ham Sandwich </td>
				</tr>
				<tr>
					<td><img src="img/tunasandwich.jpg"></td>
					<td><img src="img/pancake.jpg"></td>
					<td><img src="img/fries.jpg"></td>
					<td><img src="img/nuggets.jpg"></td>
					<td><img src="img/friedchicken.jpg"></td>
				</tr>
				<tr>
					<td><input type="checkbox" id="tunasandwich" name="tunasandwich"> Tuna Sandwich </td>
					<td><input type="checkbox" id="pancake" name="pancake"> Pancake </td>
					<td><input type="checkbox" id="fries" name="fries"> Fries </td>
					<td><input type="checkbox" id="nuggets" name="nuggets"> 6pcs. Nuggets </td>
					<td><input type="checkbox" id="friedchicken" name="friedchicken"> 6 pcs. Fried Chicken</td>
				</tr>
			</table> 
		</div>
		<!-- promos -->
	<div class="promo">
		<div class="bundle">
			<label> Combo Snacks A </label></br><br/>
		<table >
			<tr>
				<td><input type="radio" id="bundleA" name="bundleA" onclick="comboA()"><b> Combo Snack A </b></td>
			</tr>
		</table>
		<table >
			<tr>
				<td> &nbsp;&nbsp;&nbsp; <input type="checkbox" id="friesA" name="friesA">2 Large Fries</td>
			</tr>
			<tr>
				<td> &nbsp;&nbsp;&nbsp; <input type="checkbox" id="cokeA" name="cokeA">2 8oz. Coke</td>
			</tr>
			<tr>
				<td> &nbsp;&nbsp;&nbsp; <input type="checkbox" id="nuggetsA" name="nuggetsA">4pcs. Nuggets</td>
			</tr>
			<tr>
				<td> &nbsp;&nbsp;&nbsp; <input type="checkbox" id="friedcA" name="friedcA">6 Fried Chicken</td>
			</tr>
		</table>
		</div>
		<div class="bundle">
			<label> Combo Snacks B </label></br><br/>
			<table >
			<tr>
				<td><input type="radio" id="bundleB" name="bundleB" onclick="comboB()"><b> Combo Snack B </b></td>
			</tr>
		</table>
		<table >
			<tr>
				<td> &nbsp;&nbsp;&nbsp; <input type="checkbox" id="friesB" name="friesB">4 Large Fries</td>
			</tr>
			<tr>
				<td> &nbsp;&nbsp;&nbsp; <input type="checkbox" id="cokeB" name="cokeB">4 8oz. Coke</td>
			</tr>
			<tr>
				<td> &nbsp;&nbsp;&nbsp; <input type="checkbox" id="nuggetsB" name="nuggetsB">6pcs. Nuggets</td>
			</tr>
			<tr>
				<td> &nbsp;&nbsp;&nbsp; <input type="checkbox" id="friedcB" name="FriedcB">10Fried Chicken</td>
			</tr>
		</table>
		</div>
		<div class="com">
			<center><img id="myimage" name="myimage" src="img/log.png" alt="No Image" style="width: 300px; height: 200px; border-radius: 5px; border: 5px solid black;"></center>
		</div>
	</div>

		<!-- order details -->
	<div class="ordermain">
		<div class="orderdetails">
		<div class="orderinfo">
			<label>Order Details</label></br>
		<table >			
			<tr>
				<td>Price: </td>
				<td><input type="text" id="price" name="price" disabled></td>
			</tr>
			<tr>
				<td>Quantity: </td>
				<td><input type="text" id="qty" name="qty"></td>
			</tr>
			<tr>
				<td>Discount Amount: </td>
				<td><input type="text" id="discount" name="discount" disabled></td>
			</tr>
			<tr>
				<td>Discounted Amount: </td>
				<td><input type="text" id="discounted" name="discounted" disabled></td>
			</tr>
			<tr>
				<td>Total Quantity: </td>
				<td><input type="text" id="tqty" name="tqty" disabled></td>
			</tr>
			<tr>
				<td>Total Bills: </td>
				<td><input type="text" id="total" name="total" disabled></td>
			</tr>
			<tr>
				<td>Cash Given: </td>
				<td><input type="text" id="cash" name="cash"></td>
			</tr>
			<tr>
				<td>Change: </td>
				<td><input type="Text" id="changemoney" name="changemoney" disabled></td>
			</tr>
		</table>
		</div>
		<div class="iteminfo">
			<br/>
			<center><textarea rows="10" cols="25" id="item" name="item" disabled></textarea></center>
		</div>
		</div>	
		<div class="buttons">
			<input type="submit" id="calculate" name="calculate" value=" Calculate Bills ">
			<input type="submit" id="change" name="change" value=" Change ">
			<input type="submit" id="print" name="print" value=" Print Transaction ">
			<input type="submit" id="remove" name="remove" value=" Remove Order "> 
			<input type="submit" id="new" name="new" value=" New " >
			<input type="submit" id="exit" name="exit" value=" Exit " onclick="logout()">
		</div>	
	</div>
		
	</form>
</div>
</div>
</body>
</html>