$(document).ready(function(){
	$("#menu_list_table").DataTable();
	$("#div_menu_table_list").load("admin/table-menu-list.php");

	$("#menu-item-list").hide();

	$("#div_menu_detail_table_list").on('click', '#menu_item_list_table #CP_MENU_ITEM_DELETE', function(event) {
		event.preventDefault();
		/* Act on the event */
		var tr = $(this).closest('tr');
		var item_id = tr.find('#update_menu_item_id').text();
		var menu_id = $("#browse_menu_id").text();

		var item = {
			item_id:item_id,
			menu_id:menu_id
		}

		var r = confirm("Are you sure ?");
		if (r == true) {
			deleteItem(item);
		} else {

		}

	})

	$("#CP_UPDATE_MENU_ITEM_ADD").click(function(event) {
		/* Act on the event */
		event.preventDefault();
		var item_id = $("#CP_UPDATE_MENU_ITEM_ID").val();
		var name = $("#CP_UPDATE_MENU_ITEM_NAME").val();
		var price = $("#CP_UPDATE_MENU_ITEM_PRICE").val();
		var size = $("#CP_UPDATE_MENU_ITEM_SIZE").val();
		var image = $("#CP_UPDATE_MENU_ITEM_IMAGE").val();
		var status = $("#CP_UPDATE_MENU_ITEM_STATUS").val();
		var menu_id = $("#CP_UPDATE_MENU_ITEM_MENU_ID").val();

		var item = {
			item_id:item_id,
			name:name,
			price:price,
			size:size,
			image:image,
			status:status,
			menu_id:menu_id
		}

		updateItem(item)
		

	});

	$("#div_menu_detail_table_list").on('click', '#menu_item_list_table #CP_MENU_ITEM_UPDATE', function(event) {
		var tr = $(this).closest('tr');
		var item_id = tr.find('#update_menu_item_id').text();
		var menu_id = $("#browse_menu_id").text();
		var item = {
			item_id:item_id,
			menu_id:menu_id
		}
		console.log(item);
		$.ajax({
			url: '../controller/retrieveMenuItemDetail.php',
			type: 'POST',
			data: item,
			success:function(r){
				var detailArray = r.trim().split("-|-");
				console.log(detailArray);
				$("#CP_UPDATE_MENU_ITEM_ID").val(detailArray[1]);
				$("#CP_UPDATE_MENU_ITEM_NAME").val(detailArray[2]);
				$("#CP_UPDATE_MENU_ITEM_PRICE").val(detailArray[3]);
				$("#CP_UPDATE_MENU_ITEM_SIZE").val(detailArray[5]);
				$("#CP_UPDATE_MENU_ITEM_IMAGE").val(detailArray[6]);
				$("#CP_UPDATE_MENU_ITEM_STATUS").val(detailArray[4]);
				$("#CP_UPDATE_MENU_ITEM_MENU_ID").val(detailArray[0]);
				$("#CP_UPDATE_MENU_ITEM_THUMBNAIL").attr("src",detailArray[6]);
				$("#CP_MENU_ITEM_UPDATE").modal("show");

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

	$("#CP_NEW_MENU_ITEM_ADD").click(function(event) {
		/* Act on the event */
		event.preventDefault();
		var name = $("#CP_NEW_MENU_ITEM_NAME").val();
		var price = $("#CP_NEW_MENU_ITEM_PRICE").val();
		var size = $("#CP_NEW_MENU_ITEM_SIZE").val();
		var image = $("#CP_NEW_MENU_ITEM_IMAGE").val();
		var status = $("#CP_NEW_MENU_ITEM_STATUS").val();
		var menu_id = $("#browse_menu_id").text();
		var item = {
			name:name,
			price:price,
			size:size,
			status:status,
			menu_id:menu_id,
			image:image
		}
		addNewItem(item);
		console.log(item);

	});

	$("#div_menu_table_list").on('click', '#menu_list_table #CP_MENU_BROWSE', function(event) {
		var tr = $(this).closest('tr');
		var menu_id = tr.find('#update_menu_id').text();
		var menu_name = tr.find('#update_menu_name').text();

		$("#panel-menu-item-list").text('Menu Item List of '+menu_name);
		$("#browse_menu_id").text(menu_id);

		retrieveItemTable(menu_id)



		$("#menu-item-list").show('slow/400/fast', function() {

		});

		$("#menu-list").hide('slow/400/fast', function() {

		});
	});

	$("#CP_MENU_ITEM_LIST_BACK").on('click',function(event) {
		/* Act on the event */
		$("#menu-list").show('slow/400/fast', function() {

		});
		$("#menu-item-list").hide('slow/400/fast', function() {

		});
	});


	$("#CP_UPDATE_MENU_SAVE").click(function(event) {
		/* Act on the event */
		event.preventDefault();
		var menu_id = $("#CP_UPDATE_MENU_ID").val();
		var name = $("#CP_UPDATE_MENU_NAME").val();
		var status = $("#CP_UPDATE_MENU_STATUS").val();

		var menu = {
			menu_id:menu_id,
			name:name,
			status:status
		}
		updateMenu(menu);
		console.log(menu);

	});

	$("#div_menu_table_list").on('click', '#menu_list_table #CP_MENU_UPDATE', function(event) {
		event.preventDefault();
		/* Act on the event */
		var tr = $(this).closest('tr');
		var menu_id = tr.find('#update_menu_id').text();
		$.ajax({
			url: '../controller/retrieveMenuDetail.php',
			type: 'POST',
			data: {menu_id: menu_id},
			success:function(r){
				var detailArray = r.trim().split("-|-");

				$("#CP_UPDATE_MENU_ID").val(detailArray[0]);
				$("#CP_UPDATE_MENU_NAME").val(detailArray[1]);
				$("#CP_UPDATE_MENU_STATUS").val(detailArray[2]);
				$("#CP_MENU_UPDATE_MODAL").modal("show");
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


	});
	$("#div_menu_table_list").on('click', '#menu_list_table #CP_MENU_DELETE', function(event) {
		event.preventDefault();
		/* Act on the event */
		var tr = $(this).closest('tr');
		var menu_id = tr.find('#update_menu_id').text();
		var menu = {
			menu_id:menu_id
		}

		var r = confirm("Are you sure ?");
		if (r == true) {
			deleteMenu(menu);
		} else {

		}

	});  

	$("#CP_NEW_MENU_ADD").click(function(event) {
		/* Act on the event */
		event.preventDefault();
		var name = $("#CP_NEW_MENU_NAME").val();
		var status = $("#CP_NEW_MENU_STATUS").val();
		var menu = {
			name:name,
			status:status
		}
		addNewMenu(menu);

	});

});

function deleteItem(item){
	$.ajax({
		url: '../controller/deleteItem.php',
		type: 'POST',
		data: item,
		success:function(r){
			if (r.trim() === "|-SUCCESS-|") {
				alert("Item Deleted");
				retrieveItemTable(item.menu_id);

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

function updateItem(item){
	$.ajax({
			url: '../controller/updateItem.php',
			type: 'POST',
			data: item,
			success:function(r){
				if(r.trim() === "|-SUCCESS-|"){
					alert("Item Detail Updated");
					$("#CP_MENU_ITEM_UPDATE").modal('hide');
					retrieveItemTable(item.menu_id);
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

function addNewItem(item){
	$.ajax({
		url: '../controller/addNewItem.php',
		type: 'POST',
		data: item,
		success:function(r){
			if(r.trim() === "|-SUCCESS-|"){
				alert("Item Added");
				$("#CP_MENU_ITEM_ADD").modal('hide');
				retrieveItemTable(item.menu_id);
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

function addNewMenu(menu){
	$.ajax({
		method:"POST",
		timeout:3000,
		data:menu,
		url:"../controller/addNewMenu.php",
		success:function(r){
			if(r.trim() === "|-SUCCESS-|"){
				alert("Your new menu has been created");
				$("#CP_MENU_ADD_FORM")[0].reset();
				$("#CP_MENU_ADD").modal('hide');
				retrieveItemTable(menu_id)
				$("#div_menu_table_list").load("admin/table-menu-list.php");
			}else{
				console.log(r);
			}
		}
	})
}

function updateMenu(menu){
	$.ajax({
		url: '../controller/updateMenu.php',
		type: 'POST',
		data: menu,
		success:function(r){
			if(r.trim() === "|-SUCCESS-|"){
				alert("Menu Detail Updated");
				$("#CP_MENU_UPDATE_MODAL").modal('hide');
				$("#div_menu_table_list").load("admin/table-menu-list.php");
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

function deleteMenu(menu){
	$.ajax({
		url: '../controller/deleteMenu.php',
		type: 'POST',
		data: menu,
		success:function(r){
			if (r.trim() === "|-SUCCESS-|") {
				alert("Menu Deleted");
				$("#CP_MENU_UPDATE_MODAL").modal('hide');
				$("#div_menu_table_list").load("admin/table-menu-list.php");

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

function encodeImagetoBase64(element) {

	var file = element.files[0];

	var reader = new FileReader();

	reader.onloadend = function() {

		$(".CP_MENU_ITEM_IMAGE").val(reader.result);

		$(".CP_MENU_ITEM_THUMBNAIL").attr("src",reader.result);

	}

	reader.readAsDataURL(file);

}

function retrieveItemTable(menu_id){
	$.ajax({
		url: '../view/admin/table-menu-item-list.php',
		type: 'POST',
		data: {menu_id: menu_id},
		success:function(r){
			$("#div_menu_detail_table_list").html(r.trim())
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