$(document).ready(function(){
 //e.preventDefault();
 $("#optradio_A").prop( "checked", false );
 $("#optradio_B").prop( "checked", false );
 var price, quantity, amount_to_pay, discount_amount, amount_from_customer, change;
 // scripts or codes to be executed when clicking the FOOD BUNDLE A radiobutton
 $("#optradio_A").click(function(e){
 // e.preventDefault();
 if($(this).prop("checked") == true){
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;
 discount_amount = (price * quantity) * .10;
 amount_to_pay = (price * quantity) - discount_amount;
 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("discount_amount").value = discount_amount;
 document.getElementById("amount_to_pay").value = amount_to_pay;
 $("#optradio_B").prop( "checked", false );
 }
 });
 $("#optradio_B").click(function(e){
 // e.preventDefault();
 if($(this).prop("checked") == true){
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;
 discount_amount = (price * quantity) * .15;
 amount_to_pay = (price * quantity) - discount_amount;
 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("discount_amount").value = discount_amount;
 document.getElementById("amount_to_pay").value = amount_to_pay;
 $("#optradio_A").prop( "checked", false );
 }
 });
 $("#btn_change").click(function(e){
 //e.preventDefault();
 price = $("#price").val() - 0;
 quantity = $("#quantity").val() - 0;
 amount_from_customer = $("#amount_from_customer").val() - 0;
 amount_to_pay = (price * quantity) - discount_amount;
 change = amount_from_customer - amount_to_pay;
 document.getElementById("price").value = price;
 document.getElementById("quantity").value = quantity;
 document.getElementById("discount_amount").value = discount_amount;
 document.getElementById("amount_to_pay").value = amount_to_pay;
 document.getElementById("change").value = change;
 });
 $("#btn_new").click(function(e){
 e.preventDefault();
 document.getElementById("item_name").value ="";
 document.getElementById("price").value = "";
 document.getElementById("quantity").value = "";
 document.getElementById("discount_amount").value = "";
 document.getElementById("amount_to_pay").value = "";
 document.getElementById("amount_from_customer").value = "";
 document.getElementById("change").value = "";
 $("#optradio_A").prop( "checked", false );
 $("#optradio_B").prop( "checked", false );
 });
 $("#channel").click(function(e){
 e.preventDefault();
 document.getElementById("channel").onclick = document.getElementById("item_name").value = "CHANNEL N.5";
 document.getElementById("price").value = "5550.00";
 });
 $("#polo").click(function(e){
 e.preventDefault();
 document.getElementById("polo").onclick = document.getElementById("item_name").value = "POLO FOR MEN";
 document.getElementById("price").value = "3500.00";
 });
 $("#eternity").click(function(e){
 e.preventDefault();
 document.getElementById("eternity").onclick = document.getElementById("item_name").value = "CK ETERNITY FOR WOMEN";
 document.getElementById("price").value = "3650.00";
 });
 $("#ck1").click(function(e){
 e.preventDefault();
 document.getElementById("ck1").onclick = document.getElementById("item_name").value = "CALVIN KLIEN ONE"
;
 document.getElementById("price").value = "2750.00";
 });
 $("#nautica").click(function(e){
 e.preventDefault();
 document.getElementById("nautica").onclick = document.getElementById("item_name").value = "NOTICA VOYAGE";
 document.getElementById("price").value = "2850.00";
 });
});