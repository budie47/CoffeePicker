$(document).ready(function(){
  $("#stock_list_table").DataTable();

  $("#div_stock_table_list").load("admin/table-stock-list.php");
  $( "#CP_NEW_STOCK_EXPIRED_DATE" ).datepicker({
  	dateFormat: 'dd-mm-yy'
  });
  $( "#CP_UPDATE_STOCK_EXPIRED_DATE" ).datepicker({
  	dateFormat: 'dd-mm-yy'
  });

  $("#CP_UPDATE_STOCK_SAVE").click(function(event) {
  	/* Act on the event */
  	event.preventDefault();
  	var stock_id = $("#CP_UPDATE_STOCK_ID").val();
  	var name = $("#CP_UPDATE_STOCK_NAME").val();
  	var stock_no = $("#CP_UPDATE_STOCK_NO").val();
  	var quantity = $("#CP_UPDATE_STOCK_QUANTITY").val();
  	var unit = $("#CP_UPDATE_STOCK_UNIT").val();
  	var price_per_unit = $("#CP_UPDATE_STOCK_PRICE_PER_UNIT").val();
  	var price = $("#CP_UPDATE_STOCK_PRICE").val();
  	var expired_date = $("#CP_UPDATE_STOCK_EXPIRED_DATE").val();

  	var stock = {
  		stock_id:stock_id,
  		name:name,
  		stock_no:stock_no,
  		quantity:quantity,
  		unit:unit,
  		price_per_unit:price_per_unit,
  		price:price,
  		expired_date:expired_date
  	}

  	updateStock(stock);

  });

 
  $("#div_stock_table_list").on('click', '#stock_list_table #CP_STOCK_DELETE', function(event) {
  	event.preventDefault();
  	var tr = $(this).closest('tr');
  	var stock_id = tr.find('#update_stock_id').text();

  	var stock = {
  		stock_id:stock_id
  	}

  	var r = confirm("Are you sure ?");
  	if (r == true) {
  	    deleteStock(stock)
  	} else {
  	    
  	}


  })

  $("#div_stock_table_list").on('click', '#stock_list_table #CP_STOCK_UPDATE', function(event) {
  	event.preventDefault();
  	var tr = $(this).closest('tr');
  	var stock_id = tr.find('#update_stock_id').text();

  	$.ajax({
  		url: '../controller/retrieveStockDetail.php',
  		type: 'POST',
  		data: {stock_id: stock_id},
  		success:function(r){
  			var detailArray = r.trim().split("-|-");

  			$("#CP_UPDATE_STOCK_ID").val(detailArray[0]);
  			$("#CP_UPDATE_STOCK_NAME").val(detailArray[1]);
  			$("#CP_UPDATE_STOCK_NO").val(detailArray[2]);
  			$("#CP_UPDATE_STOCK_QUANTITY").val(detailArray[3]);
  			$("#CP_UPDATE_STOCK_UNIT").val(detailArray[4]);
  			$("#CP_UPDATE_STOCK_PRICE_PER_UNIT").val(detailArray[5]);
  			$("#CP_UPDATE_STOCK_PRICE").val(detailArray[6]);
  			$("#CP_UPDATE_STOCK_EXPIRED_DATE").val(detailArray[7]);
  			$("#CP_STOCK_UPDATE_MODAL").modal("show");
  			console.log(r);
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

  })

  $("#CP_NEW_STOCK_ADD").click(function(event) {
  	/* Act on the event */
  	event.preventDefault();
  	var name = $("#CP_NEW_STOCK_NAME").val();
  	var stock_no = $("#CP_NEW_STOCK_NO").val();
  	var quantity = $("#CP_NEW_STOCK_QUANTITY").val();
  	var unit = $("#CP_NEW_STOCK_UNIT").val();
  	var price_per_unit = $("#CP_NEW_STOCK_PRICE_PER_UNIT").val();
  	var price = $("#CP_NEW_STOCK_PRICE").val();
  	var expired_date = $("#CP_NEW_STOCK_EXPIRED_DATE").val();

  	var stock = {
  		name:name,
  		stock_no:stock_no,
  		quantity:quantity,
  		unit:unit,
  		price_per_unit:price_per_unit,
  		price:price,
  		expired_date:expired_date
  	}

  	addNewStock(stock);

  });

});

function addNewStock(stock){
	$.ajax({
		url: '../controller/addNewStock.php',
		type: 'POST',
		data: stock,
		success:function(r){
			if(r.trim() === "|-SUCCESS-|"){
				alert("Your new stock has been added");
				$("#CP_STOCK_ADD_FORM")[0].reset();
				$("#CP_STOCK_ADD").modal('hide');
				$("#div_stock_table_list").load("admin/table-stock-list.php");
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

function updateStock(stock){
	$.ajax({
		url: '../controller/updateStock.php',
		type: 'POST',
		data: stock,
		success:function(r){
			console.log(r);
			if(r.trim() === "|-SUCCESS-|"){
				alert("Stock Detail Updated");
				$("#CP_STOCK_UPDATE_MODAL").modal('hide');
				$("#div_stock_table_list").load("admin/table-stock-list.php");
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

function deleteStock(stock){
	$.ajax({
		url: '../controller/deleteStock.php',
		type: 'POST',
		data: stock,
		success:function(r){
			if (r.trim() === "|-SUCCESS-|") {
				alert("Stock Deleted");
				
				$("#div_stock_table_list").load("admin/table-stock-list.php");

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


function calculateTotalPrice(state){


	var price_per_unit = $("#CP_"+state+"_STOCK_PRICE_PER_UNIT").val();
	var quantity = $("#CP_"+state+"_STOCK_QUANTITY").val();
	if(price_per_unit === "" || quantity === ""){
		price_per_unit = "0";
		quantity = "0";
	}
	var total_price = parseFloat(price_per_unit)*parseFloat(quantity);
	$("#CP_"+state+"_STOCK_PRICE").val(total_price);


}