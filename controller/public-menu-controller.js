
$(document).ready(function() {


	$("#CP_MENU_ADD_ORDER").click(function(event) {
		/* Act on the event */
		event.preventDefault();
		var item_id = $("#item_id_view").text();
		var price = $("#item_price_view").text();
		var item_name = $("#item_name_view").text();
		var size = $("#CP_MENU_VIEW_SIZE").val();
		var comment = $("#CP_MENU_VIEW_COMMENT").val();

		var order = {
			item_id:item_id,
			price:price,
			item_name:item_name,
			size:size,
			comment:comment
		}
		
		$.ajax({
			url: 'controller/addToCart.php',
			type: 'POST',
			data: order,
			success:function(r){
				console.log(r);
				if(r.trim() === "|-SUCCESS-|"){
					alert("Added to cart");
					$("#CP_MENU_VIEW_MODAL").modal('show');
					$("#CP_MENU_VIEW_COMMENT").val('');
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
		


	});


	
});

$(document).on("click", "#CP_MENU_VIEW", function () {
     var id = $(this).data('id');
     $("#CP_MENU_VIEW_MODAL").modal('show');

     $.ajax({
     	url: 'public-get-detail-item.php',
     	type: 'POST',
     	data: {item_id: id},
     	success:function(r){
     		 $("#product-id-content").html(r.trim());
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