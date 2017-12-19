$(document).ready(function() {
	//alert("lol");
	var filter = {
		country_search:"",
		state_search:"",
		area_search:""
	}
	retrieveShopList(filter)
	//$("#div-all-shop-list").load("all-shop-list.php");


});

function retrieveShopList(filter){
	$.ajax({
		url: 'all-shop-list.php',
		type: 'POST',
		data: filter,
		success:function(r){
			$("#div-all-shop-list").html(r.trim());
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