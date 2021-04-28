$(document).ready(function(){

 //for clicking the checkboxes
	$("#beef").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("beef").onclick = document.getElementById("item").value = "Beefy Burger";
			document.getElementById("price").value = "55.00";
 		} else {
 			document.getElementById("beef").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#cheeseburger").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("cheeseburger").onclick = document.getElementById("item").value = "Cheese Burger";
	 		document.getElementById("price").value = "65.00";
 		} else {
 			document.getElementById("cheeseburger").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#veggie").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("veggie").onclick = document.getElementById("item").value = "Veggie Burger";
	 		document.getElementById("price").value = "45.00";
 		} else {
 			document.getElementById("veggie").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#chickenburger").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("chickenburger").onclick = document.getElementById("item").value = "Chicken Burger";
	 		document.getElementById("price").value = "50.00";
 		} else {
 			document.getElementById("chickenburger").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#grilledburger").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("grilledburger").onclick = document.getElementById("item").value = "Grilled Beef Burger";
	 		document.getElementById("price").value = "65.00";
 		} else {
 			document.getElementById("grilledburger").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#hamburger").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("hamburger").onclick = document.getElementById("item").value = "Hamburger";
	 		document.getElementById("price").value = "45.00";
 		} else {
 			document.getElementById("hamburger").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#baconcheese").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("baconcheese").onclick = document.getElementById("item").value = "Bacon Cheeseburger";
	 		document.getElementById("price").value = "65.00";
 		} else {
 			document.getElementById("baconcheese").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#crispychicken").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("crispychicken").onclick = document.getElementById("item").value = "Crispy Chicken Sandwich";
	 		document.getElementById("price").value = "49.00";
 		} else {
 			document.getElementById("crispychicken").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#spicychicken").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("grilledchicken").onclick = document.getElementById("item").value = "Grilled Chicken Burger";
	 		document.getElementById("price").value = "75.00";
 		} else {
 			document.getElementById("spicychicken").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#grilledchicken").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("grilledchicken").onclick = document.getElementById("item").value = "Grilled Chicken Burger";
	 		document.getElementById("price").value = "75.00";
 		} else {
 			document.getElementById("grilledchicken").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#baconking").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("baconking").onclick = document.getElementById("item").value = "Bacon King";
	 		document.getElementById("price").value = "75.00";
 		} else {
 			document.getElementById("baconking").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#vegchili").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("vegchili").onclick = document.getElementById("item").value = "Veg Chili Cheese Burger";
	 		document.getElementById("price").value = "70.00";
 		} else {
 			document.getElementById("vegchili").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#eggsandwich").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("eggsandwich").onclick = document.getElementById("item").value = "Egg Sandwich";
	 		document.getElementById("price").value = "30.00";
 		} else {
 			document.getElementById("eggsandwich").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#hotdog").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("hotdog").onclick = document.getElementById("item").value = "Hotdog Sandwich";
	 		document.getElementById("price").value = "39.00";
 		} else {
 			document.getElementById("hotdog").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#hamsandwich").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("hamsandwich").onclick = document.getElementById("item").value = "Ham Sandwich";
	 		document.getElementById("price").value = "40.00";
 		} else {
 			document.getElementById("hamsandwich").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#tunasandwich").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("tunasandwich").onclick = document.getElementById("item").value = "Tuna Sandwich";
	 		document.getElementById("price").value = "49.00";
 		} else {
 			document.getElementById("tunasandwich").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#pancake").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("pancake").onclick = document.getElementById("item").value = "Pancake";
	 		document.getElementById("price").value = "50.00";
 		} else {
 			document.getElementById("pancake").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#fries").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("fries").onclick = document.getElementById("item").value = "Fries";
	 		document.getElementById("price").value = "85.00";
 		} else {
 			document.getElementById("fries").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#nuggets").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("nuggets").onclick = document.getElementById("item").value = "6pcs. Nuggets";
	 		document.getElementById("price").value = "80.00";
 		} else {
 			document.getElementById("nuggets").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});
 	$("#friedchicken").click(function(e){
 		if($(this).prop("checked") == true){
 			document.getElementById("friedchicken").onclick = document.getElementById("item").value = "6pcs. Fried Chicken";
	 		document.getElementById("price").value = "339.00";
 		} else {
 			document.getElementById("friedchicken").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}
 	});

 	//radiobutton function
 	$("#bundleA").prop( "checked", false );
 	$("#bundleB").prop( "checked", false );

 	$("#bundleA").click(function(e){
 		if($(this).prop("checked") == true){
 			$("#friesA").prop( "checked", true );
 			$("#cokeA").prop( "checked", true );
 			$("#nuggetsA").prop( "checked", true );
 			$("#friedcA").prop( "checked", true );
 			document.getElementById("bundleA").onclick = document.getElementById("item").value = "2 Large Fries"+"\n"+"2 8oz Coke"+"\n"+"4pcs. Nuggets"+"\n"+"6pcs. Fried Chicken";
 			document.getElementById("price").value = "599.00";
 		} else {
 			document.getElementById("bundleA").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}	
 			$("#bundleB").prop( "checked", false );
 			$("#friesB").prop( "checked", false );
 			$("#cokeB").prop( "checked", false );
 			$("#nuggetsB").prop( "checked", false );
 			$("#friedcB").prop( "checked", false );
 	});
 	$("#bundleB").click(function(e){
 		if($(this).prop("checked") == true){
 			$("#friesB").prop( "checked", true );
 			$("#cokeB").prop( "checked", true );
 			$("#nuggetsB").prop( "checked", true );
 			$("#friedcB").prop( "checked", true );
 			document.getElementById("bundleB").onclick = document.getElementById("item").value = "4 Large "+"\n"+"4 8oz Coke"+"\n"+"6pcs. Nuggets"+"\n"+"10pcs. Fried Chicken";
 			document.getElementById("price").value = "899.00";
 		} else {
 			document.getElementById("bundleB").onclick = document.getElementById("item").value = "";
 			document.getElementById("price").value = "";
 		}	
 			$("#bundleA").prop( "checked", false );
 			$("#friesA").prop( "checked", false );
 			$("#cokeA").prop( "checked", false );
 			$("#nuggetsA").prop( "checked", false );
 			$("#friedcA").prop( "checked", false );
 	});


 	//calculate button function
 	var price, quantity, discounted_amount, discount_amount, cashgiven, chnge, totalbills, t_quantity;

 	$("#calculate").click(function(e){
	 	e.preventDefault();
	 	price = $("#price").val() - 0;
 		quantity = $("#qty").val() - 0;
	 	t_quantity = $("#tqty").val() - 0;
 		totalbills = $("#total").val() - 0;
	 	discount_amount = (price * quantity) * 0.25;
	 	discounted_amount = (price * quantity) - discount_amount;
	 	t_quantity += quantity;
	 	totalbills += discounted_amount;
		document.getElementById("price").value = price;
		document.getElementById("qty").value = quantity;
		document.getElementById("discount").value = discount_amount;
		document.getElementById("discounted").value = discounted_amount;
		document.getElementById("tqty").value = t_quantity;
		document.getElementById("total").value = totalbills;
	 });

 	//change function
	$("#change").click(function(e){
	 	e.preventDefault();
 		discounted_amount = $("#discounted").val() - 0;
 		cashgiven = $('#cash').val() - 0;
	 	chnge = cashgiven - discounted_amount;
		document.getElementById("changemoney").value = chnge;
	 });

	//new button function
	$("#new").click(function(e){
	 	e.preventDefault();
	 	t_quantity = $("#tqty").val() - 0;
 		totalbills = $("#total").val() - 0;

 		//clear radiobutton or in combo promo
	 	$("#bundleA").prop( "checked", false );
 		$("#friesA").prop( "checked", false );
 		$("#cokeA").prop( "checked", false );
 		$("#nuggetsA").prop( "checked", false );
 		$("#friedcA").prop( "checked", false );
 		$("#bundleB").prop( "checked", false );
 		$("#friesB").prop( "checked", false );
 		$("#cokeB").prop( "checked", false );
 		$("#nuggetsB").prop( "checked", false );
 		$("#friedcB").prop( "checked", false );

 		//clear checkbox
 		$("#beef").prop( "checked", false );
 		$("#cheeseburger").prop( "checked", false );
 		$("#veggie").prop( "checked", false );
 		$("#chickenburger").prop( "checked", false );
 		$("#grilledburger").prop( "checked", false );
 		$("#hamburger").prop( "checked", false );
 		$("#baconcheese").prop( "checked", false );
 		$("#crispychicken").prop( "checked", false );
 		$("#spicychicken").prop( "checked", false );
 		$("#grilledchicken").prop( "checked", false );
 		$("#baconking").prop( "checked", false );
 		$("#vegchili").prop( "checked", false );
 		$("#eggsandwich").prop( "checked", false );
 		$("#hotdog").prop( "checked", false );
 		$("#hamsandwich").prop( "checked", false );
 		$("#tunasandwich").prop( "checked", false );
 		$("#fries").prop( "checked", false );
 		$("#pancake").prop( "checked", false );
 		$("#nuggets").prop( "checked", false );
 		$("#friedchicken").prop( "checked", false );

 		//clear textfields in order info
		document.getElementById("price").value = "";
		document.getElementById("qty").value = "";
		document.getElementById("discount").value = "";
		document.getElementById("discounted").value = "";
		document.getElementById("tqty").value = t_quantity;
		document.getElementById("total").value = totalbills;
		document.getElementById("changemoney").value = "";
		document.getElementById("cash").value = "";
		document.getElementById("item").value = "";
	});

	//REMOVE or cancel
	$("#remove").click(function(e){
	 	e.preventDefault();
	 	//clear radiobutton or in combo promo
	 	$("#bundleA").prop( "checked", false );
 		$("#friesA").prop( "checked", false );
 		$("#cokeA").prop( "checked", false );
 		$("#nuggetsA").prop( "checked", false );
 		$("#friedcA").prop( "checked", false );
 		$("#bundleB").prop( "checked", false );
 		$("#friesB").prop( "checked", false );
 		$("#cokeB").prop( "checked", false );
 		$("#nuggetsB").prop( "checked", false );
 		$("#friedcB").prop( "checked", false );

 		//clear checkbox
 		$("#beef").prop( "checked", false );
 		$("#cheeseburger").prop( "checked", false );
 		$("#veggie").prop( "checked", false );
 		$("#chickenburger").prop( "checked", false );
 		$("#grilledburger").prop( "checked", false );
 		$("#hamburger").prop( "checked", false );
 		$("#baconcheese").prop( "checked", false );
 		$("#crispychicken").prop( "checked", false );
 		$("#spicychicken").prop( "checked", false );
 		$("#grilledchicken").prop( "checked", false );
 		$("#baconking").prop( "checked", false );
 		$("#vegchili").prop( "checked", false );
 		$("#eggsandwich").prop( "checked", false );
 		$("#hotdog").prop( "checked", false );
 		$("#hamsandwich").prop( "checked", false );
 		$("#tunasandwich").prop( "checked", false );
 		$("#fries").prop( "checked", false );
 		$("#pancake").prop( "checked", false );
 		$("#nuggets").prop( "checked", false );
 		$("#friedchicken").prop( "checked", false );

 		//clear textfields in order info
		document.getElementById("price").value = "";
		document.getElementById("qty").value = "";
		document.getElementById("discount").value = "";
		document.getElementById("discounted").value = "";
		document.getElementById("tqty").value = "";
		document.getElementById("total").value = "";
		document.getElementById("changemoney").value = "";
		document.getElementById("cash").value = "";
		document.getElementById("item").value = "";
	 });
});