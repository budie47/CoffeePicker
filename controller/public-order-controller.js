$(document).ready(function() {
	$("#CP_ORDER_MAKE_BTN").click(function(event) {
		/* Act on the event */
		store_id = "SHP-10";
		total_price = $("#total_price_order").text();

		$.ajax({
			url: 'controller/makeOrder.php',
			type: 'POST',
			data: {
				store_id: store_id,
				total_price:total_price
			},
			success:function(r){
				console.log(r);
				if (r.trim()=== "|-SUCCESS-|") {
					alert("You can pickup your order at shop. Thank you");
					location.href = "shop.php";
				}else {
					console.log("error");
				}
			}
		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		

		
	});
});