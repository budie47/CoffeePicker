$(document).ready(function(){

	$('#CP_NEW_SHOP_OPEN_HOUR').timepicker({
		//template: 'modal',
		maxHours:'24',
		showSeconds: false,
		showMeridian: false
	});
	$('#CP_NEW_SHOP_CLOSE_HOUR').timepicker({
		maxHours:'24',
		showSeconds: false,
		showMeridian: false
	}); 
	$('#CP_UPDATE_SHOP_OPEN_HOUR').timepicker({
		//template: 'modal',
		maxHours:'24',
		showSeconds: false,
		showMeridian: false
	});
	$('#CP_UPDATE_SHOP_CLOSE_HOUR').timepicker({
		maxHours:'24',
		showSeconds: false,
		showMeridian: false
	});

	$("#CP_SHOP_SETTING_UPDATE").on('show.bs.modal',function(){
		$.ajax({
			method:"POST",
			timeout:3000,
			data:{data:""},
			url:"../controller/retriveShopDetail.php",
			success:function(r){
				var detail_array = r.trim().split("-|-");
				$("#CP_UPDATE_SHOP_NAME").val(detail_array[0]);
				$("#CP_UPDATE_SHOP_ADDRESS").val(detail_array[1]);
				$("#CP_UPDATE_SHOP_TOWN").val(detail_array[10]);;
				$("#CP_UPDATE_SHOP_POSTCODE").val(detail_array[3]);
				$("#CP_UPDATE_SHOP_STATE").val(detail_array[4]);
				$("#CP_UPDATE_SHOP_COUNTRY").val(detail_array[5]);
				$("#CP_UPDATE_SHOP_OPEN_HOUR").val(detail_array[6]);
				$("#CP_UPDATE_SHOP_CLOSE_HOUR").val(detail_array[7]);
				$("#CP_UPDATE_SHOP_STATUS").val(detail_array[8]);
				$("#CP_UPDATE_SHOP_IMAGE").val(detail_array[11]);
				$("#CP_UPDATE_SHOP_THUMBNAIL").attr("src",detail_array[11]);

			}
		});
	});

	$("#CP_UPDATE_SHOP_UPDATE").click(function(e){
		e.preventDefault();
		var name = $("#CP_UPDATE_SHOP_NAME").val();
		var address = $("#CP_UPDATE_SHOP_ADDRESS").val();
		var town = $("#CP_UPDATE_SHOP_TOWN").val();
		var postcode = $("#CP_UPDATE_SHOP_POSTCODE").val();
		var state = $("#CP_UPDATE_SHOP_STATE").val();
		var country = $("#CP_UPDATE_SHOP_COUNTRY").val();
		var open_hour = $("#CP_UPDATE_SHOP_OPEN_HOUR").val();
		var close_hour = $("#CP_UPDATE_SHOP_CLOSE_HOUR").val();
		var status = $("#CP_UPDATE_SHOP_STATUS").val();
		var image = $("#CP_UPDATE_SHOP_IMAGE").val();

		var shop = {
			name:name,
			address:address,
			town:town,
			postcode:postcode,
			state:state,
			country:country,
			open_hour:open_hour,
			close_hour:close_hour,
			status:status,
			image:image
		}
		updateShopDetail(shop);
		window.location.href = 'admin-shopsetid.php?id=0';


	})

	$("#CP_NEW_SHOP_ADD").click(function(e){
		e.preventDefault();
		var name = $("#CP_NEW_SHOP_NAME").val();
		var address = $("#CP_NEW_SHOP_ADDRESS").val();
		var town = $("#CP_NEW_SHOP_TOWN").val();
		var postcode = $("#CP_NEW_SHOP_POSTCODE").val();
		var state = $("#CP_NEW_SHOP_STATE").val();
		var country = $("#CP_NEW_SHOP_COUNTRY").val();
		var open_hour = $("#CP_NEW_SHOP_OPEN_HOUR").val();
		var close_hour = $("#CP_NEW_SHOP_CLOSE_HOUR").val();
		var status = $("#CP_NEW_SHOP_STATUS").val();

		var addObj = {
			name:name,
			address:address,
			town:town,
			postcode:postcode,
			state:state,
			country:country,
			open_hour:open_hour,
			close_hour:close_hour,
			status:status
		}

		addNewShop(addObj);

	});

	$(".thumbnail").on('click',function(){
		alert("lol");
	})

});

function addNewShop(obj){
	$.ajax({
		method:"POST",
		timeout:3000,
		data:obj,
		url:"../controller/addNewShop.php",
		success:function(r){
			
			if(r.trim() === "|-SUCCESS-|"){
				alert("Your new shop has been created");
				$("#CP_SHOP_ADD_FORM")[0].reset();
				$("#CP_SHOP_ADD").modal('hide');
				$("#admin-list-reload").load("admin/admin-list-shop.php");
			}else{
				console.log(r);
			}
		}
	})
}

function updateShopDetail(shop){
	$.ajax({
		url: '../controller/updateShopDetail.php',
		type: 'POST',
		data: shop,
		success:function(r){
			console.log(r);
		}
	})
	.done(function() {
		console.log("success");
		alert("Your shop detail saved");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});

	

}

 function encodeImagetoBase64(element) {

	  var file = element.files[0];

	  var reader = new FileReader();

	  reader.onloadend = function() {

	  	$("#CP_UPDATE_SHOP_IMAGE").val(reader.result);

	  	$("#CP_UPDATE_SHOP_THUMBNAIL").attr("src",reader.result);

	    // $(".link").attr("href",reader.result);

	    // $(".link").text(reader.result);

	  }

	  reader.readAsDataURL(file);

	}