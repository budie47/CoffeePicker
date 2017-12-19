$(document).ready(function() {
	$("#order_list_table").on('click', '#CP_STAFF_ACCEPT_ORDER', function(event) {
		event.preventDefault();
		/* Act on the event */
		var tr = $(this).closest('tr');
		var order_id = tr.find('#CP_ORDER_ACCEPT_ID').text();
		var cart_id = $("#CP_ORDER_CART_ID").text();
		var order= {
			order_id:order_id,
			cart_id:cart_id
		}

		var r = confirm("Customer pickup this order?");
		if (r == true) {
			changeCartStatus(order);
		} else {

		}

	});
});


function changeCartStatus(order){

	$.ajax({
		url: '../controller/changeCartStatus.php',
		type: 'POST',
		data: order,
		success:function(r){
			if (r.trim() === "|-SUCCESS-|") {
				location.href = "staff-shopdashboard.php";

			}else{
				console.log(r);
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
	

}