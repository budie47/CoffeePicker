$(document).ready(function(){

	$('#CP_NEW_SHOP_OPEN_HOUR').timepicker({
		template: 'modal'
	});
	$('#CP_NEW_SHOP_CLOSE_HOUR').timepicker();
	$('#CP_NEW_SHOP_COUNTRY').flexdatalist({
	     minLength: 1,
	     searchIn: 'name',
	     data: '../lib/flexdatalist/countries.json'
	});


		// $('#CP_NEW_SHOP_OPEN_HOUR').timepicker({
		//     timeFormat: 'h:mm p',
		//     interval: 30,
		//     minTime: '10',
		//     maxTime: '6:00pm',
		//     defaultTime: '11',
		//     startTime: '10:00',
		//     dynamic: false,
		//     dropdown: true,
		//     scrollbar: true
		// });
		// $('#CP_NEW_SHOP_CLOSE_HOUR').timepicker({
		//     timeFormat: 'h:mm p',
		//     interval: 30,
		//     minTime: '10',
		//     maxTime: '6:00pm',
		//     defaultTime: '11',
		//     startTime: '10:00',
		//     dynamic: false,
		//     dropdown: true,
		//     scrollbar: true
		// });



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
				close_hour:close_hour
			}

			console.log(addObj);

		});

	});

function addNewShop(obj){
	$.ajax({
		method:"POST",
		timeout:3000,
		data:obj,
		url:"controller/addNewShop.php",
		success:function(r){
			console.log(r);
		}
	})
}
