<!DOCTYPE html>
<html>
<head>
	<title> New Employee </title>
	<link rel="stylesheet" type="text/css" href="emp_style.css">
	<style type="text/css">
		img{
			height: 200px;
			width: 200px;
		}
	</style>
	<script type="text/javascript">
			var loadfile = function(event){
	 			var image = document.getElementById('output');
	 			image.src = URL.createObjectURL(event.target.files[0]);
		}
	</script>
</head>
<body background="img/empbg.png">
	<div class="topmenu">
		<header>
			<img src="img/log.png" style="height: 80px; width: 150px">
			<nav>
				<ul class="nav_links">
					<li><a href="web1.php">Order Burger</a></li>
					<li class="active"><a href="web2.php">Employee Info</a></li>
					<li><a href="web3.php">Point of Sale</a></li>
				</ul>
			</nav>
		</header>
		</div>
	<h1> Employee Registration </h1>
<div>
	<form>
	<div class="photo">
		<center><img id="output" name="output" src="img/photo.png" style="border: 5px solid black;"> <br></center>
		<p for="file" style="cursor: pointer;"> Upload Image</p> 
		<input type="file" name="image" id ="file" accept="image/*" onchange="loadfile(event)">
		<br/>
		<br/>
		<br/>
		<br/>
		<center>
			<input type="submit" name="save" value=" Save ">
			<input type="submit" name="cancel" value=" Cancel ">
		</center>
	</div>
	<div class="info">
		<center><label> Personal Information </label></center>
		<table>
			<tr>
				<td>Name: </td>
			</tr>
			<tr>
				<td><input type="text" name="lname" placeholder="Last Name"></td>
				<td><input type="text" name="fname" placeholder="First Name"></td>
				<td><input type="text" name="mname" placeholder="Middle Name"></td>
				<td><input type="text" name="sname" placeholder="Suffix"></td>
			</tr>
			<tr>
				<td> Date of Birth:</td>
				<td> Gender: </td>
				<td> Civil Status: </td>
				<td> Nationality: </td>
			</tr>
			<tr>
				<td><input type="date" name="bday" style="width: 180px;"></td>
				<td> &nbsp;<select name="gender">
					<option value="choose"> -- Select one -- &nbsp; &nbsp; &nbsp;</option>
					<option value="female"> Female </option>
					<option value="male"> Male </option>
				</select></td>
				<td> &nbsp;<select name="civilstat">
					<option value="Single"> Single </option>
					<option value="Married"> Married </option>
					<option value="Widow"> Widow </option>
					<option value="Complicated"> Complicated </option>
				</select></td>
				<td> &nbsp;<select name="nationality">
					<option value="filipino"> Filipino </option>
					<option value="american"> American </option>
					<option value="japanese"> Japanese </option>
					<option value="korean"> Korean </option>
					<option value="chinese"> Chinese </option>
				</select></td>
			</tr>
		</table>
		<br/>
		<hr color="white" size="3" width="80%">
		<br/>
		<table>
			<tr>
				<td>Employee ID: </td>
				<td><input type="text" name="empID"></td>
				<td>Employee Status: </td>
				<td><input type="text" name="empstat"></td>
			</tr>
			<tr>
				<td>Department: </td>
				<td><input type="text" name="department"></td>
				<td>Qualified Dept. Status: </td>
				<td> &nbsp;<select name="deptstat">
					<option value="choose"> -- Select one -- </option>
				</select></td>
			</tr>
			<tr>
				<td>Designation: </td>
				<td><input type="text" name="designation"></td>
				<td>Pay Date: </td>
				<td><input type="date" name="paydate" style="width: 180px;"></td>
			</tr>
		</table>
	</div>
	<div class="contactinfo">
		<label> Contact Information </label>
		<br/>
		<br/>
		<table>
			<tr>
				<td>Contact No.: </td>
			</tr>
			<tr>
				<td><input type="text" name="contactno" placeholder="0912xxxxxxx"></td>
			</tr>
			<tr>
				<td>E-mail address:  </td>
			</tr>
			<tr>
				<td><input type="email" name="email" placeholder="abcd123@gmail.com"></td>
			</tr>
			<tr>
				<td>Social Media: </td>
			</tr>
			<tr>
				<td> &nbsp;<select name="socialmedia">
					<option value="fb"> Facebook </option>
					<option value="insta"> Instagram </option>
					<option value="twit"> Twitter </option>
					<option value="yt"> Youtube </option>
				</select></td>
			</tr>
			<tr>
				<td>Social Account ID/No.:</td>
			</tr>
			<tr>
				<td><input type="text" name="social_acc"></td>
			</tr>
		</table>
	</div>
	<div class="addressinfo">
		<center><label>Address</label></center>
		<br/>
		<table>
			<tr>
				<td>Address Line 1</td>
			</tr>
			<tr>
				<td><input type="text" name="address1" placeholder="St. No/House No./Phase No./Subdivision" style="width: 600px;"></td>
			</tr>
			<tr>
				<td>Address Line 2</td>
			</tr>
			<tr>
				<td><input type="text" name="address2" placeholder="St. No/House No./Phase No./Subdivision" style="width: 600px;"></td>
			</tr>
		</table>
		<table>
			<tr>
				<td>City/Municipality </td>
				<td>State/Province </td>
			</tr>
			<tr>
				<td><input type="text" name="city" style="width: 250px;"></td>
				<td><input type="text" name="state" style="width: 250px;"></td>
			</tr>
			<tr>
				<td>Country </td>
				<td>Zip Code </td>
			</tr>
			<tr>
				<td> &nbsp;<select name="country" style="width: 260px;">
					<option value="phil"> Philippine </option>
					<option value="jpn"> Japan </option>
					<option value="china"> China </option>
					<option value="korea"> Korea </option>
				</select></td>
				<td><input type="text" name="zipcode" style="width: 250px;"></td>
			</tr>
		</table>
	</div>
	</form>
</div>
</body>
</html>