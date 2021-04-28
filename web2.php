<?php
	//Employee information
	$empno="";
	$firstname="";
	$midname="";
	$lastname="";
	$desig="";
	$nodep="";
	$stat="";
	$civilstat="";
	$dptmnt="";
	$pdate="";
	//basic Pay
	$brate="";
	$bnohrs="";
	$bincome="";
	//honorarium
	$honorate="";
	$honohrs="";
	$thono="";
	//Others
	$orate="";
	$onohrs="";
	$toincome="";
	//summary
	$gross_income="";
	$net_income="";
	//regular deduc
	$rsss="";
	$rphilhealth="";
	$rpagibig="";
	$rtax="";
	//others deduction
	$sssl="";
	$pagibigl="";
	$saving_dep="";
	$saving_loan="";
	$salaryl="";
    $others="";
	//total deduction
	$total_deduction="";

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$empno=$_POST['empnum'];
		$firstname=$_POST['fname'];
		$midname=$_POST['mname'];
		$lastname=$_POST['lname'];
		$desig=$_POST['designation'];
		$nodep=$_POST['numdependents'];
		$stat=$_POST['status'];
		$civilstat=$_POST['cstatus'];
		$dptmnt=$_POST['dept'];
		$pdate=$_POST['paydate'];
		//basic Pay
		$brate=$_POST['rate'];
		$bnohrs=$_POST['nohrs'];
		//honorarium
		$honorate=$_POST['hrate'];
		$honohrs=$_POST['hnohrs'];
		//Others
		$orate=$_POST['Irate'];
		$onohrs=$_POST['Inohrs'];
		//others deduction
		$sssl=$_POST['sssloan'];
		$pagibigl=$_POST['pagibigloan'];
		$saving_dep=$_POST['fdeposit'];
		$saving_loan=$_POST['floan'];
		$salaryl=$_POST['sloan'];
        $others=$_POST['others'];

		//calculate the gross income
		if(isset($_POST['cgross'])){
			$bincome=$brate*$bnohrs;
			$thono=$honorate*$honohrs;
			$toincome=$orate*$onohrs;

			$gross_income=$bincome+$thono+$toincome;
			$rpagibig=100.00;

			// condition for sss contribution
			if ($gross_income >=1000 && $gross_income<=3249.99){
                $rsss=135.00;
            }                       
            elseif ($gross_income>=3250 && $gross_income<=3749.99){
                $rsss=157.50;
            }
            elseif ($gross_income>=3750 && $gross_income<=4249.99){
                $rsss=180.00;
            }
            elseif ($gross_income>=4250 && $gross_income<=4749.99){
                $rsss=202.50;
            }
            elseif ($gross_income>=4750 && $gross_income<=5249.99){
                $rsss=225.00;
            }
            elseif ($gross_income>=5250 && $gross_income<=5749.99){
                $rsss=247.50;
            }          
            elseif ($gross_income>=5750 && $gross_income<=6249.99){
                $rsss=270.00;
            } 
            elseif ($gross_income>=6250 && $gross_income<=6749.99){
                $rsss=292.50;
            }   
            elseif ($gross_income>=6750 && $gross_income<=7249.99){
                $rsss=315.00;
            }
            elseif ($gross_income>=7250 && $gross_income<=7749.99){
                $rsss=337.50;
            }
            elseif ($gross_income>=7750 && $gross_income<=8249.99){
                $rsss=360.00;
            }
            elseif ($gross_income>=8250 && $gross_income<=8749.99){
                $rsss=382.50;
            }
            elseif ($gross_income>=8750 && $gross_income<=9249.99){
                $rsss=405.00;
            }
            elseif ($gross_income>=9250 && $gross_income<=9749.99){
                $rsss=427.50;
            }
            elseif ($gross_income>=9750 && $gross_income<=10249.99){
                $rsss=450.00;
            }
            elseif ($gross_income>=10250 && $gross_income<=10749.99){
                $rsss=472.50;
            }
            elseif ($gross_income>=10750 && $gross_income<=11249.99){
                $rsss=495.00;
            }
            elseif ($gross_income>=11250 && $gross_income<=11749.99){
                $rsss=517.50;
            }
            elseif ($gross_income>=11750 && $gross_income<=12249.99){
                $rsss=540.00;
            }
            elseif ($gross_income>=12250 && $gross_income<=12749.99){
                $rsss=562.50;
            }
            elseif ($gross_income>=12750 && $gross_income<=13249.99){
                $rsss=585.00;
            }
            elseif ($gross_income>=13250 && $gross_income<=13749.99){
                $rsss=607.50;
            }
            elseif ($gross_income>=13750 && $gross_income<=14249.99){
                $rsss=630.00;
            }
            elseif ($gross_income>=14250 && $gross_income<=14749.99){
                $rsss=652.50;
            }
            elseif ($gross_income>=14750 && $gross_income<=15249.99){
                $rsss=675.00;
            }
            elseif ($gross_income>=15250 && $gross_income<=15749.99){
                $rsss=697.50;
            }
            elseif ($gross_income>=15750 && $gross_income<=16249.99){
                $rsss=720.00;
            }
            elseif ($gross_income>=16250 && $gross_income<=16749.99){
                $rsss=742.50;
            }
            elseif ($gross_income>=16750 && $gross_income<=17249.99){
                $rsss=765.00;
            }
            elseif ($gross_income>=17250 && $gross_income<=17749.99){
                $rsss=787.50;
            }
            elseif ($gross_income>=17750 && $gross_income<=18249.99){
                $rsss=810.00;
            }
            elseif ($gross_income>=18250 && $gross_income<=18749.99){
                $rsss=832.50;
            }
            elseif ($gross_income>=18750 && $gross_income<=19249.99){
                $rsss=855.00;
            }
            elseif ($gross_income>=19250 && $gross_income<=19749.99){
                $rsss=877.50;
            }
            elseif ($gross_income>=19750){
                $rsss=900.00;
            }
            else{
            	$rsss=0.00;
            } 

            //condition for philhealth contributions
            if($gross_income>0 && $gross_income<=10000){
            	$rphilhealth=175.00;
            }
            elseif($gross_income>=10000.01 && $gross_income<=69999.99){
            	$rphilhealth=($gross_income*0.035)/2;
            }
            elseif($gross_income>=70000){
            	$rphilhealth=1225.00;
            }

            //Income tax monthly
            $annual_gross_income=$gross_income*12; 
            $annual_sss=$rsss*12;
            $annual_philhealth=$rphilhealth*12;
            $annual_pagibig=$rpagibig*12;
            $annual_totaldeduc=$annual_pagibig+$annual_philhealth+$annual_sss;

        	if($annual_gross_income>0 && $annual_gross_income<250000){
        		$rtax=($annual_gross_income-$annual_totaldeduc)*0.00/12;
        	}
        	elseif($annual_gross_income>250000 && $annual_gross_income<400000){
        		$rtax=(($annual_gross_income-$annual_totaldeduc)-250000)*0.20/12;
        	}
        	elseif($annual_gross_income>400000 && $annual_gross_income<800000){
        		$rtax=((($annual_gross_income-$annual_totaldeduc)-400000)*0.25)+30000/12;
        	}
        	elseif($annual_gross_income>800000 && $annual_gross_income<2000000){
        		$rtax=((($annual_gross_income-$annual_totaldeduc)-800000)*0.30)+130000/12;
        	}
        	elseif($annual_gross_income>2000000 && $annual_gross_income<8000000){
        		$rtax=((($annual_gross_income-$annual_totaldeduc)-2000000)*0.32)+490000/12;
        	}
        	elseif($annual_gross_income>8000000){
        		$rtax=((($annual_gross_income-$annual_totaldeduc)-8000000)*0.35)+2410000/12;
        	}



		}
		elseif(isset($_POST['cnet'])){
			$bincome=$brate*$bnohrs;
			$thono=$honorate*$honohrs;
			$toincome=$orate*$onohrs;

			$gross_income=$bincome+$thono+$toincome;
			$rpagibig=100.00;

			// condition for sss contribution
			if ($gross_income >=1000 && $gross_income<=3249.99){
                $rsss=135.00;
            }                       
            elseif ($gross_income>=3250 && $gross_income<=3749.99){
                $rsss=157.50;
            }
            elseif ($gross_income>=3750 && $gross_income<=4249.99){
                $rsss=180.00;
            }
            elseif ($gross_income>=4250 && $gross_income<=4749.99){
                $rsss=202.50;
            }
            elseif ($gross_income>=4750 && $gross_income<=5249.99){
                $rsss=225.00;
            }
            elseif ($gross_income>=5250 && $gross_income<=5749.99){
                $rsss=247.50;
            }          
            elseif ($gross_income>=5750 && $gross_income<=6249.99){
                $rsss=270.00;
            } 
            elseif ($gross_income>=6250 && $gross_income<=6749.99){
                $rsss=292.50;
            }   
            elseif ($gross_income>=6750 && $gross_income<=7249.99){
                $rsss=315.00;
            }
            elseif ($gross_income>=7250 && $gross_income<=7749.99){
                $rsss=337.50;
            }
            elseif ($gross_income>=7750 && $gross_income<=8249.99){
                $rsss=360.00;
            }
            elseif ($gross_income>=8250 && $gross_income<=8749.99){
                $rsss=382.50;
            }
            elseif ($gross_income>=8750 && $gross_income<=9249.99){
                $rsss=405.00;
            }
            elseif ($gross_income>=9250 && $gross_income<=9749.99){
                $rsss=427.50;
            }
            elseif ($gross_income>=9750 && $gross_income<=10249.99){
                $rsss=450.00;
            }
            elseif ($gross_income>=10250 && $gross_income<=10749.99){
                $rsss=472.50;
            }
            elseif ($gross_income>=10750 && $gross_income<=11249.99){
                $rsss=495.00;
            }
            elseif ($gross_income>=11250 && $gross_income<=11749.99){
                $rsss=517.50;
            }
            elseif ($gross_income>=11750 && $gross_income<=12249.99){
                $rsss=540.00;
            }
            elseif ($gross_income>=12250 && $gross_income<=12749.99){
                $rsss=562.50;
            }
            elseif ($gross_income>=12750 && $gross_income<=13249.99){
                $rsss=585.00;
            }
            elseif ($gross_income>=13250 && $gross_income<=13749.99){
                $rsss=607.50;
            }
            elseif ($gross_income>=13750 && $gross_income<=14249.99){
                $rsss=630.00;
            }
            elseif ($gross_income>=14250 && $gross_income<=14749.99){
                $rsss=652.50;
            }
            elseif ($gross_income>=14750 && $gross_income<=15249.99){
                $rsss=675.00;
            }
            elseif ($gross_income>=15250 && $gross_income<=15749.99){
                $rsss=697.50;
            }
            elseif ($gross_income>=15750 && $gross_income<=16249.99){
                $rsss=720.00;
            }
            elseif ($gross_income>=16250 && $gross_income<=16749.99){
                $rsss=742.50;
            }
            elseif ($gross_income>=16750 && $gross_income<=17249.99){
                $rsss=765.00;
            }
            elseif ($gross_income>=17250 && $gross_income<=17749.99){
                $rsss=787.50;
            }
            elseif ($gross_income>=17750 && $gross_income<=18249.99){
                $rsss=810.00;
            }
            elseif ($gross_income>=18250 && $gross_income<=18749.99){
                $rsss=832.50;
            }
            elseif ($gross_income>=18750 && $gross_income<=19249.99){
                $rsss=855.00;
            }
            elseif ($gross_income>=19250 && $gross_income<=19749.99){
                $rsss=877.50;
            }
            elseif ($gross_income>=19750){
                $rsss=900.00;
            }
            else{
            	$rsss=0.00;
            } 

            //condition for philhealth contributions
            if($gross_income>0 && $gross_income<=10000){
            	$rphilhealth=175.00;
            }
            elseif($gross_income>=10000.01 && $gross_income<=69999.99){
            	$rphilhealth=($gross_income*0.035)/2;
            }
            elseif($gross_income>=70000){
            	$rphilhealth=1225.00;
            }
            
            //Income tax monthly
            $annual_gross_income=$gross_income*12; 
            $annual_sss=$rsss*12;
            $annual_philhealth=$rphilhealth*12;
            $annual_pagibig=$rpagibig*12;
            $annual_totaldeduc=$annual_pagibig+$annual_philhealth+$annual_sss;

        	if($annual_gross_income>0 && $annual_gross_income<250000){
        		$rtax=($annual_gross_income-$annual_totaldeduc)*0.00/12;
        	}
        	elseif($annual_gross_income>250000 && $annual_gross_income<400000){
        		$rtax=(($annual_gross_income-$annual_totaldeduc)-250000)*0.20/12;
        	}
        	elseif($annual_gross_income>400000 && $annual_gross_income<800000){
        		$rtax=((($annual_gross_income-$annual_totaldeduc)-400000)*0.25)+30000/12;
        	}
        	elseif($annual_gross_income>800000 && $annual_gross_income<2000000){
        		$rtax=((($annual_gross_income-$annual_totaldeduc)-800000)*0.30)+130000/12;
        	}
        	elseif($annual_gross_income>2000000 && $annual_gross_income<8000000){
        		$rtax=((($annual_gross_income-$annual_totaldeduc)-2000000)*0.32)+490000/12;
        	}
        	elseif($annual_gross_income>8000000){
        		$rtax=((($annual_gross_income-$annual_totaldeduc)-8000000)*0.35)+2410000/12;
        	}
        	
            $regdeduc=$rsss+$rphilhealth+$rpagibig+$rtax;
            $othersdeduc=$sssl+$pagibigl+$saving_dep+$saving_loan+$salaryl+$others;
            $total_deduction=$regdeduc+$othersdeduc;
            $net_income=$gross_income-$total_deduction;
		}
		elseif(isset($_POST['new'])){
			$empno="";
			$firstname="";
			$midname="";
			$lastname="";
			$desig="";
			$nodep="";
			$stat="";
			$civilstat="";
			$dptmnt="";
			$pdate="";
			$brate="";
			$bnohrs="";
			$bincome="";
			$honorate="";
			$honohrs="";
			$thono="";
			$orate="";
			$onohrs="";
			$toincome="";
			$gross_income="";
			$net_income="";
			$rsss="";
			$rphilhealth="";
			$rpagibig="";
			$rtax="";
			$sssl="";
			$pagibigl="";
			$saving_dep="";
			$saving_loan="";
			$salaryl="";
            $others="";
			$total_deduction="";
		}elseif(isset($_POST['cancel'])){
			$empno="";
			$firstname="";
			$midname="";
			$lastname="";
			$desig="";
			$nodep="";
			$stat="";
			$civilstat="";
			$dptmnt="";
			$pdate="";
			$brate="";
			$bnohrs="";
			$bincome="";
			$honorate="";
			$honohrs="";
			$thono="";
			$orate="";
			$onohrs="";
			$toincome="";
			$gross_income="";
			$net_income="";
			$rsss="";
			$rphilhealth="";
			$rpagibig="";
			$rtax="";
			$sssl="";
			$pagibigl="";
			$saving_dep="";
			$saving_loan="";
			$salaryl="";
            $others="";
			$total_deduction="";
		}
        if (isset($_POST['new_emp'])) {
            header("location: new_employee.php");
        }
        if (isset($_POST['update'])) {
            header("location: update_employee.php");
        }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Employee Information </title>
	<link rel="stylesheet" type="text/css" href="mystyle2.css">
    <script type="text/javascript">
        function logout(){
            if(confirm('Are you sure you want to exit?')){
                window.location.href='logoutpage.php';
            }
        }
        var loadfile = function(event){
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
    <style>
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
        .info{
            border: 3px solid white;
            margin: 10px;
            background-color: inherit;
            height: 280px;
            width: 800px;
            float: left;
            padding: 20px;
            border-radius: 5px;
        }
        input[type=text] {
            size: 13pt;
            background-color: #f5f5f5;
            color: black;
            border:2px solid black;font
            font-family: Bookman Old Style;
        }
        .photo{
            border: 3px solid white;
            margin: 10px;
            background-color: inherit;
            height: 280px;
            width: 280px;
            float: left;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
        img{
            height: 200px;
            width: 200px;
        }
        input[type=submit] {
            font-size: 13pt;
            border-radius: 10px;
            background-color: #f5f5f5;;
            color: black;
            padding: 10px;
            margin: 5px;
            border:3px solid black;
            font-family: Centaur;
        }
        .salary{
            border: 3px solid white;
            margin: 10px;
            background-color: inherit;
            height: 535px;
            width: 450px;
            float: left;
            padding: 20px;
            border-radius: 5px;
        }
        .deduction{
            border: 3px solid white;
            margin: 10px;
            background-color: inherit;
            height: 150px;
            width: 400px;
            float: left;
            padding: 20px;
            border-radius: 5px;
        }
        .otherdeduction{
            border: 3px solid white;
            margin: 10px;
            background-color: inherit;
            height: 200px;
            width: 400px;
            float: left;
            padding: 20px;
            border-radius: 5px;
        }
        .totaldeduction{
            border: 3px solid white;
            margin: 10px;
            background-color: inherit;
            height: 50px;
            width: 400px;
            float: left;
            padding: 20px;
            border-radius: 5px;
        }
        select{
            size: 13pt;
            background-color: #f5f5f5;
            color: black;
            border:2px solid black;font
            font-family: Bookman Old Style;
        }
        input[type="date"]{
            size: 13pt;
            background-color: #f5f5f5;
            color: black;
            border:2px solid black;font
            font-family: Bookman Old Style;
        }
        .buttons{
            padding: 5px;
            margin: 5px;
            background-color: transparent;
            width: 160px;
            height:500px;
            float: left;
        }
        .deduc{
            float: left;
            height: 600px;
            width:480px;
        }
        label{
            font-size: 16pt;
            font-family: Berlin Sans FB Demi;
            padding: 20px;
            color: #f5f5f5;
            text-shadow: 2px 2px black;
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
            padding: 10px;
        }
        .topmenu{
            overflow: hidden;
            background-color: #222222;
        }
    </style>
</head>
<body background="img/bb.jpg">
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
	<h1> Employee Details </h1>
<div>
<form method="post">
	<!-- employee info -->
	<div class="info">
		<table>
			<tr>
				<td>Employee Number: </td>
				<td><input type="text" name="empnum" value="<?php echo $empno; ?>"></td>
				<td>Designation: </td>
				<td><input type="text" name="designation" value="<?php echo $desig; ?>"></td>
			</tr>
			<tr>
				<td>First Name: </td>
				<td><input type="text" name="fname" value="<?php echo $firstname; ?>"></td>
				<td>Number of Dependents: </td>
				<td><input type="text" name="numdependents" value="<?php echo $nodep; ?>"></td>
			</tr>
			<tr>
				<td>Middle Name: </td>
				<td><input type="text" name="mname" value="<?php echo $midname; ?>"></td>
				<td>Paydate: </td>
				<td><input type="date" name="paydate" value="<?php echo $pdate; ?>" style="width: 172px;"></td>
			</tr>
			<tr>
				<td>Surname: </td>
				<td><input type="text" name="lname" value="<?php echo $lastname; ?>"></td>
				<td>Employee Status: </td>
				<td><input type="text" name="status" value="<?php echo $stat; ?>"></td>
			</tr>
			<tr>
				<td>Civil Status: </td>
				<td><input type="text" name="cstatus" value="<?php echo $civilstat; ?>"></td>
				<td>Department </td>
				<td><input type="text" name="dept" value="<?php echo $dptmnt; ?>"></td>
			</tr>
		</table>
	</div>
	<div class="photo">
		<center><img id="output" name="output" src="img/photo.png"> <br></center>
        <p for="file" style="cursor: pointer;"> Upload Image</p> 
        <input type="file" name="image" id ="file" accept="image/*" onchange="loadfile(event)">
	</div>

	<!-- basic pay -->
	<div class="salary">
		<label> Basic Pay </label>
		<table>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td> Rate / Hour: </td>
				<td><input type="text" name="rate" value="<?php echo $brate; ?>"></td>
			</tr>
			<tr>
				<td> No. of Hours / Cut Off: </td>
				<td><input type="text" name="nohrs" value="<?php echo $bnohrs; ?>"></td>
			</tr>
			<tr>
				<td> Income per Cut Off: </td>
				<td><input type="text" name="income" readonly value="<?php echo $bincome; ?>"></td>
			</tr>
		</table>
		</br>
		<label> Honorarium </label>
		<table>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td> Rate / Hour: </td>
				<td><input type="text" name="hrate" value="<?php echo $honorate; ?>"></td>
			</tr>
			<tr>
				<td> No. of Hours / Cut Off: </td>
				<td><input type="text" name="hnohrs" value="<?php echo $honohrs; ?>"></td>
			</tr>
			<tr>
				<td> Total Honorarium Pay: </td>
				<td><input type="text" name="thonorarium" readonly value="<?php echo $thono; ?>"></td>
			</tr>
		</table>
		</br>
		<label> Other Income </label>
		<table>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td> Rate / Hour: </td>
				<td><input type="text" name="Irate" value="<?php echo $orate; ?>"></td>
			</tr>
			<tr>
				<td> No. of Hours / Cut Off: </td>
				<td><input type="text" name="Inohrs" value="<?php echo $onohrs; ?>"></td>
			</tr>
			<tr>
				<td> Total other Income Pay: </td>
				<td><input type="text" name="tincome" readonly value="<?php echo $toincome; ?>"></td>
			</tr>
		</table>
		</br>
		<label> Income Summary </label>
		<table>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td> Gross Income: </td>
				<td><input type="text" name="gross" readonly value="<?php echo round($gross_income,2); ?>"></td>
			</tr>
			<tr>
				<td> Net Income: </td>
				<td><input type="text" name="net" readonly value="<?php echo round($net_income,2); ?>"></td>
			</tr>
		</table>
	</div>

	<!-- deductions -->
<div class="deduc">
	<div class="deduction">
		<label> Regular Deductions </label>
		<table>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td> SSS Contribution: </td>
				<td><input type="text" name="sss" placeholder="0.00" value="<?php echo round($rsss,2); ?>" readonly></td>
			</tr>
			<tr>
				<td> PhilHealth Contribution: </td>
				<td><input type="text" name="philhealth" placeholder="0.00" value="<?php echo round($rphilhealth,2); ?>" readonly></td>
			</tr>
			<tr>
				<td> Pagibig Contribution: </td>
				<td><input type="text" name="pagibig" placeholder="0.00" value="<?php echo round($rpagibig,2); ?>" readonly></td>
			</tr>
			<tr>
				<td> Income Tax: </td>
				<td><input type="text" name="tax" placeholder="0.00" value="<?php echo round($rtax,2); ?>" readonly></td>
			</tr>
		</table>
	</div>
	<div class="otherdeduction">
		<label> Other Deductions </label>
		<table>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td> SSS Loan: </td>
				<td><input type="text" name="sssloan" placeholder="0.00" value="<?php echo $sssl; ?>"></td>
			</tr>
			<tr>
				<td> Pagibig Loan: </td>
				<td><input type="text" name="pagibigloan" placeholder="0.00" value="<?php echo $pagibigl; ?>"></td>
			</tr>
			<tr>
				<td> Faculty Savings Deposit: </td>
				<td><input type="text" name="fdeposit" placeholder="0.00" value="<?php echo $saving_dep; ?>"></td>
			</tr>
			<tr>
				<td> Faculty Savings Loan: </td>
				<td><input type="text" name="floan" placeholder="0.00" value="<?php echo $saving_loan; ?>"></td>
			</tr>
			<tr>
				<td> Salary Loan: </td>
				<td><input type="text" name="sloan" placeholder="0.00" value="<?php echo $salaryl; ?>"></td>
			</tr>
			<tr>
				<td> Others: </td>
				<td><select name="otherdeduc">
					<option value="Other Deduction"> Select other deduction&nbsp; &nbsp; &nbsp;</option>
				</select></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="text" name="others"></td>
			</tr>
		</table>
	</div>

	<div class="totaldeduction">
		<label> Deduction Summary </label>
		<table>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td> Total Deductions: </td>
				<td><input type="text" name="tdeduc" readonly value="<?php echo round($total_deduction,2); ?>"></td>
			</tr>
		</table>
	</div>

</div>
	
	<!-- buttons -->
	<div>
		<div class="buttons">
			<input type="submit" id="cgross" name="cgross" value=" Calculate Gross Income">
			<input type="submit" id="cnet" name="cnet" value=" Calculate Net Income">
			<input type="submit" id="new" name="new" value=" New " >
			<input type="submit" id="cancel" name="cancel" value=" Cancel ">
			<input type="submit" id="print" name="print" value=" Print Payslip ">
			<input type="submit" id="prev" name="prev" value=" Preview Payslip Details "> 
			<input type="submit" id="exit" name="exit" value=" Exit " onclick="logout()">
            <input type="submit" id="new_emp" name="new_emp" value=" Add new Employee ">
            <input type="submit" id="update" name="update" value=" Update Employee Info">
		</div>
	</div>
</form>
</div>
</body>
</html>