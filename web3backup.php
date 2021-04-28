<?php
		
		$itemn="";
		$quan="";
		$p="";
		$discounta="";
		$discounteda="";
		$totalqty="";
		$totaldisc="";
		$totaldiscounted="";
		$cashren="";
		$chng="";
		$fooradio1="";

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$itemn=$_POST['item'];
		$quan=$_POST['qty'];
		$p=$_POST['price'];
		$cashren=$_POST['cashr'];
		$fooradio=$_POST['foo'];

		//discount and discounted amount
		if(isset($_POST['cal'])){

			if(isset($_POST['foo'])){
				$fooradio1="checked";
				$discounta=($p*$quan)*$fooradio;
				$discounteda=($p*$quan)-$discounta;
				$totalqty=$quan;
				$totaldisc=$discounta;
				$totaldiscounted=$discounteda;
			}else{
				$discounta=($p*$quan)*0.25;
				$discounteda=($p*$quan)-$discounta;
				$totalqty=$quan;
				$totaldisc=$discounta;
				$totaldiscounted=$discounteda;
			}
		}

		//change
		elseif(isset($_POST['change'])){
				if(isset($_POST['foo'])){
				$fooradio1="checked";
				$discounta=($p*$quan)*$fooradio;
				$discounteda=($p*$quan)-$discounta;
				$totalqty=$quan;
				$totaldisc=$discounta;
				$totaldiscounted=$discounteda;
				$chng=$cashren-$discounteda;
			}else{
				$discounta=($p*$quan)*0.25;
				$discounteda=($p*$quan)-$discounta;
				$totalqty=$quan;
				$totaldisc=$discounta;
				$totaldiscounted=$discounteda;
				$chng=$cashren-$discounteda;
			}
							
		}
		//new button function
		elseif(isset($_POST['new'])){
			$itemn="";
			$quan="";
			$p="";
			$discounta="";
			$discounteda="";
			$totalqty="";
			$totaldisc="";
			$totaldiscounted="";
			$cashren="";
			$chng="";
			$fooradio="";
		}
		//cancel button function clear text fields
		elseif(isset($_POST['cancel'])){
			$itemn="";
			$quan="";
			$p="";
			$discounta="";
			$discounteda="";
			$totalqty="";
			$totaldisc="";
			$totaldiscounted="";
			$cashren="";
			$chng="";
			$fooradio1="";
		}
		elseif(isset($_POST['exi­t'])){
			echo "<script>if(confirm(­'Are you sure to exit this page ?')){
				document.locati­on.href='loginpage.php'}­;</script>"; 
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Point of Sale </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="web3function.js"></script>
	<link rel="stylesheet" type="text/css" href="mystyle3.css">
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
            height: 740px;
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
	</style>
</head>
<body background="bb2.jpeg">
		<div class="topmenu">
		<header>
			<img src="log.png" style="height: 80px; width: 150px">
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
<form method="post">
	<!-- menu list -->
	<div class="header">
	</div>
	<div class="burger">
		<b><label style="font-size: 20pt"> Menu List </label></b>
		<br/>
		<br/>
			<table>
				<tr>
					<td><img src="beefyburger.jpg"></td>
					<td><img src="cheeseburger.jpg"></td>
					<td><img src="veggieburger.png"></td>
					<td><img src="chickenburger.jpg"></td>
					<td><img src="grilledburger.jpg"></td>
				</tr>
				<tr>
					<td> <label id="beef" name="beef">Beefy Burger</label></td>
					<td> <label id="cheeseburger" name="cheeseburger"> Cheese Burger </label></td>
					<td> <label id="veggie" name="veggie"> Veggie Burger </label></td>
					<td> <label id="chickenburger" name="chickenburger"> Chicken Burger </label></td>
					<td> <label id="grilledburger" name="grilledburger"> Grilled Beef Burger </label></td>
				</tr>
				<tr>
					<td><img src="hamburger.jpg"></td>
					<td><img src="baconcheese.jpg"></td>
					<td><img src="crispychicken.jpg"></td>
					<td><img src="Spicychicken.jpg"></td>
					<td><img src="grilledchicken.jpg"></td>
				</tr>
				<tr>
					<td> <label id="hamburger" name="hamburger"> Hamburger </label></td>
					<td> <label id="baconcheese" name="baconcheese"> Bacon Cheeseburger </label></td>
					<td> <label id="crispychicken" name="crispychicken"> Crispy Chicken Sandwich </label></td>
					<td> <label id="spicychicken" name="spicychicken"> Spicy Crispy Chicken </label> </td>
					<td> <label id="grilledchicken" name="grilledchicken"> Grilled Chicken Burger </label></td>
				</tr>
				<tr>
					<td><img src="baconking.png"></td>
					<td><img src="vegchili.jpg"></td>
					<td><img src="eggsandwich.jpg"></td>
					<td><img src="hotdog.jpg"></td>
					<td><img src="hamsandwich.jpg"></td>
				</tr>
				<tr>
					<td> <label id="baconking" name="baconking"> Bacon King </label> </td>
					<td> <label id="vegchili" name="vegchili"> Veg Chili Cheese Burger </label> </td>
					<td> <label id="eggsandwich" name="eggsandwich"> Egg Sandwich </label> </td>
					<td> <label id="hotdog" name="hotdog"> Hotdog Sandwich </label> </td>
					<td> <label id="hamsandwich" name="hamsandwich"> Ham Sandwich </label> </td>
				</tr>
				<tr>
					<td><img src="tunasandwich.jpg"></td>
					<td><img src="pancake.jpg"></td>
					<td><img src="fries.jpg"></td>
					<td><img src="nuggets.jpg"></td>
					<td><img src="friedchicken.jpg"></td>
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
					<td><input type="text" name="item" id="item" value="<?php echo $itemn; ?>" ></td>
					<td><label id="lt" style="text-shadow: 2px 2px black;">Select Discount: </label></td>
				</tr>
				<tr>
					<td> Price: </td>
					<td><input type="text" name="price" id="price" value="<?php echo $p; ?>"></td>
					<td><input type="radio" name="foo" value="0.30"<?php if(isset($_POST['foo']) && $_POST['foo'] =="0.30" ){echo "$fooradio1";}?> required> Senior Citizen </td>
				</tr>
				<tr>
					<td> Quantity: </td>
					<td><input type="text" name="qty" value="<?php echo $quan; ?>"></td>
					<td><input type="radio" name="foo" value="0.15" <?php if(isset($_POST['foo']) && $_POST['foo'] =="0.15" ){echo "$fooradio1";}?> required> With Disc. Card </td>
				</tr>
				<tr>
					<td> Discount Amount: </td>
					<td><input type="text" name="disamount" value="<?php echo $discounta; ?>" disabled="input"></td>
					<td><input type="radio" name="foo" value="0.20"<?php if(isset($_POST['foo']) && $_POST['foo'] =="0.20" ){echo "$fooradio1";}?> required> Employee Disc. </td>
				</tr>
				<tr>
					<td> Discounted Amount: </td>
					<td><input type="text" name="discounted" value="<?php echo $discounteda; ?>" disabled="input"></td>
					<td><input type="radio" name="foo" value="0" <?php if(isset($_POST['foo']) && $_POST['foo'] =="0" ){echo "$fooradio1";}?> required> No Discount </td>
				</tr>
			</table>
				<input type="submit" name="cal" value="Calculate" style="width: 80px">
				<input type="submit" name="change" value="Change" style="width: 80px">
				<input type="submit" name="new" value="New" style="width: 60px">
				<input type="submit" name="cancel" value="Cancel" style="width: 70px">
				<input type="submit" name="exit" value="Exit" style="width: 60px" >
		</div>

		<!-- summary -->
		<div class="summary">
			<label id="lt" style="text-shadow: 2px 2px black;"> Summary </label>
			<table>
				<tr>
					<td> Total Quantity: </td>
					<td><input type="text" name="tqty" placeholder="0.00" value="<?php echo $totalqty; ?>" disabled="input"></td>
				</tr>
				<tr>
					<td> Total Discount Given: </td>
					<td><input type="text" name="tdisc" placeholder="0.00" value="<?php echo $totaldisc; ?>" disabled="input"></td>
				</tr>
				<tr>
					<td> Total Discounted Amount: </td>
					<td><input type="text" name="tdiscounted" placeholder="0.00" value="<?php echo $totaldiscounted; ?>" disabled="input"></td>
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
					<td><input type="text" name="cashr" value="<?php echo $cashren; ?>"></td>
					<td><input type="text" name="change" value="<?php echo $chng; ?>" disabled="input"></td>
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
			<!--	<input type="submit" name="clear" value="Clear" style="width: 60px">  -->
			</div>
		</div>
</form>
</div>
</body>
</html>