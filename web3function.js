$(document).ready(function(){
	$("#beef").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("beef").onclick = document.getElementById("item").value = "Beefy Burger";
	 	document.getElementById("price").value = "55.00";
	 });
	$("#cheeseburger").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("cheeseburger").onclick = document.getElementById("item").value = "Cheese Burger";
	 	document.getElementById("price").value = "65.00";
	 });
	$("#veggie").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("veggie").onclick = document.getElementById("item").value = "Veggie Burger";
	 	document.getElementById("price").value = "45.00";
	 });
	$("#chickenburger").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("chickenburger").onclick = document.getElementById("item").value = "Chicken Burger";
	 	document.getElementById("price").value = "50.00";
	 });
	$("#grilledburger").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("grilledburger").onclick = document.getElementById("item").value = "Grilled Beef Burger";
	 	document.getElementById("price").value = "65.00";
	 });

	$("#hamburger").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("hamburger").onclick = document.getElementById("item").value = "Hamburger";
	 	document.getElementById("price").value = "45.00";
	 });
	$("#baconcheese").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("baconcheese").onclick = document.getElementById("item").value = "Bacon Cheeseburger";
	 	document.getElementById("price").value = "65.00";
	 });
	$("#crispychicken").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("crispychicken").onclick = document.getElementById("item").value = "Crispy Chicken Sandwich";
	 	document.getElementById("price").value = "49.00";
	 });
	$("#spicychicken").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("spicychicken").onclick = document.getElementById("item").value = "Spicy Crispy Chicken";
	 	document.getElementById("price").value = "60.00";
	 });
	$("#grilledchicken").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("grilledchicken").onclick = document.getElementById("item").value = "Grilled Chicken Burger";
	 	document.getElementById("price").value = "75.00";
	 });

	$("#baconking").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("baconking").onclick = document.getElementById("item").value = "Bacon King";
	 	document.getElementById("price").value = "75.00";
	 });
	$("#vegchili").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("vegchili").onclick = document.getElementById("item").value = "Veg Chili Cheese Burger";
	 	document.getElementById("price").value = "70.00";
	 });
	$("#eggsandwich").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("eggsandwich").onclick = document.getElementById("item").value = "Egg Sandwich";
	 	document.getElementById("price").value = "30.00";
	 });
	$("#hotdog").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("hotdog").onclick = document.getElementById("item").value = "Hotdog Sandwich";
	 	document.getElementById("price").value = "39.00";
	 });
	$("#hamsandwich").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("hamsandwich").onclick = document.getElementById("item").value = "Ham Sandwich";
	 	document.getElementById("price").value = "40.00";
	 });

	$("#tunasandwich").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("tunasandwich").onclick = document.getElementById("item").value = "Tuna Sandwich";
	 	document.getElementById("price").value = "49.00";
	 });
	$("#pancake").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("pancake").onclick = document.getElementById("item").value = "Pancake";
	 	document.getElementById("price").value = "50.00";
	 });
	$("#fries").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("fries").onclick = document.getElementById("item").value = "Fries";
	 	document.getElementById("price").value = "85.00";
	 });
	$("#nuggets").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("nuggets").onclick = document.getElementById("item").value = "6pcs. Nuggets";
	 	document.getElementById("price").value = "80.00";
	 });
	$("#friedchicken").click(function(e){
	 	e.preventDefault();
	 	document.getElementById("friedchicken").onclick = document.getElementById("item").value = "6pcs. Fried Chicken";
	 	document.getElementById("price").value = "339.00";
	 });


	
	var price, quantity, discounted_amount, discount_amount, cashgiven, chnge, t_discount, t_quantity, t_discounted,rdiscount;

	//radiobutton
	$("#senior").prop( "checked", false );
 	$("#disc_card").prop( "checked", false );
 	$("#emp_disc").prop( "checked", false );
 	$("#nodisc").prop( "checked", false );

 	$("#senior").click(function(e){
 		if($(this).prop("checked") == true){
 			rdiscount = 0.30;
 			$("#disc_card").prop( "checked", false );
 			$("#emp_disc").prop( "checked", false );
 			$("#nodisc").prop( "checked", false );
 		}
 	});
 	$("#disc_card").click(function(e){
 		if($(this).prop("checked") == true){
 			rdiscount = 0.20;
 			$("#senior").prop( "checked", false );
 			$("#emp_disc").prop( "checked", false );
 			$("#nodisc").prop( "checked", false );
 		}
 	});
 	$("#emp_disc").click(function(e){
 		if($(this).prop("checked") == true){
 			rdiscount = 0.15;
 			$("#disc_card").prop( "checked", false );
 			$("#senior").prop( "checked", false );
 			$("#nodisc").prop( "checked", false );
 		}
 	});
 	$("#nodisc").click(function(e){
 		if($(this).prop("checked") == true){
 			rdiscount = 0;
 			$("#disc_card").prop( "checked", false );
 			$("#emp_disc").prop( "checked", false );
 			$("senior").prop( "checked", false );
 		}
 	});

	//calculate function
	$("#cal").click(function(e){
	 	e.preventDefault();
	 	price = $("#price").val() - 0;
 		quantity = $("#qty").val() - 0;
	 	t_quantity = $("#tqty").val() - 0;
 		t_discount = $("#tdisc").val() - 0;
	 	t_discounted = $("#tdiscounted").val() - 0;

	 	discount_amount = (price * quantity) * rdiscount;
	 	discounted_amount = (price * quantity) - discount_amount;
	 	t_quantity += quantity;
	 	t_discount += discount_amount;
	 	t_discounted += discounted_amount; 
		document.getElementById("price").value = price;
		document.getElementById("qty").value = quantity;
		document.getElementById("disamount").value = discount_amount;
		document.getElementById("discounted").value = discounted_amount;
		document.getElementById("tqty").value = t_quantity;
		document.getElementById("tdisc").value = t_discount;
		document.getElementById("tdiscounted").value = t_discounted;
	 });

	//change function
	$("#change").click(function(e){
	 	e.preventDefault();
	 	cashgiven = $("#cash").val() - 0;
	 	discounted_amount = $("#discounted").val() - 0;
		chnge = cashgiven - discounted_amount;
		document.getElementById("moneychange").value = chnge;
	 });

	//new button function
	$("#new").click(function(e){
	 	e.preventDefault();
	 	t_quantity = $("#tqty").val() - 0;
 		t_discount = $("#tdisc").val() - 0;
	 	t_discounted = $("#tdiscounted").val() - 0;
		document.getElementById("price").value = "";
		document.getElementById("qty").value = "";
		document.getElementById("disamount").value = "";
		document.getElementById("discounted").value = "";
		document.getElementById("tqty").value = t_quantity;
		document.getElementById("tdisc").value = t_discount;
		document.getElementById("tdiscounted").value = t_discounted;
		document.getElementById("moneychange").value = "";
		document.getElementById("cash").value = "";
		document.getElementById("item").value = "";
		$("#senior").prop( "checked", false );
	 	$("#disc_card").prop( "checked", false );
	 	$("#emp_disc").prop( "checked", false );
	 	$("#nodisc").prop( "checked", false );
	 });

	$("#cancel").click(function(e){
	 	e.preventDefault();
		document.getElementById("price").value = "";
		document.getElementById("qty").value = "";
		document.getElementById("disamount").value = "";
		document.getElementById("discounted").value = "";
		document.getElementById("tqty").value = "";
		document.getElementById("tdisc").value = "";
		document.getElementById("tdiscounted").value = "";
		document.getElementById("moneychange").value = "";
		document.getElementById("cash").value = "";
		document.getElementById("item").value = "";
		$("#senior").prop( "checked", false );
	 	$("#disc_card").prop( "checked", false );
	 	$("#emp_disc").prop( "checked", false );
	 	$("#nodisc").prop( "checked", false );
	 });

});