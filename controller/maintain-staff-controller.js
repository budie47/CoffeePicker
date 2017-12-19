$(document).ready(function(){

	$("#staff_log_table").DataTable();
	$("#staff_list_table").DataTable();
	$("#div_staff_table_list").load("admin/table-staff-list.php");


	$("#div_staff_table_list").on('click', '#staff_list_table #CP_STAFF_DELETE', function(event) {
		event.preventDefault();
		var tr = $(this).closest('tr');
		var staff_id = tr.find('#update_staff_id').text();
		var staff = {
			staff_id:staff_id
		}
		deleteStaff(staff);

	})

	$("#CP_UPDATE_STAFF_UPDATE_BTN").click(function(event) {
		/* Act on the event */
		event.preventDefault();
		alert("lol");
		var fname = $("#CP_UPDATE_STAFF_FNAME").val();
		var lname = $("#CP_UPDATE_STAFF_LNAME").val();
		var phoneno = $("#CP_UPDATE_STAFF_PHONE_NO").val();
		var address = $("#CP_UPDATE_STAFF_ADDRESS").val();
		var status = $("#CP_NEW_STAFF_STATUS").val();
		var email = $("#CP_UPDATE_STAFF_EMAIL").val();
		var staff_id = $("#CP_UPDATE_STAFF_ID").val();
		var staff = {
			staff_id:staff_id,
			fname:fname,
			lname:lname,
			phoneno:phoneno,
			address:address,
			email:email,
		}
		updateStaff(staff);

	});

	$("#div_staff_table_list").on('click', '#staff_list_table #CP_STAFF_UPDATE', function(event) {
		event.preventDefault();
		/* Act on the event */
		var tr = $(this).closest('tr');
		var staff_id = tr.find('#update_staff_id').text();

		$.ajax({
			url: '../controller/retrieveStaffDetail.php',
			type: 'POST',
			data: {staff_id: staff_id},
			success:function(r){
				var detailArray = r.trim().split("-|-");
				$("#CP_UPDATE_STAFF_FNAME").val(detailArray[1]);
				$("#CP_UPDATE_STAFF_LNAME").val(detailArray[2]);
				$("#CP_UPDATE_STAFF_USERNAME").val(detailArray[0]);
				$("#CP_UPDATE_STAFF_PASSWORD").val("password");
				$("#CP_UPDATE_STAFF_EMAIL").val(detailArray[4]);
				$("#CP_UPDATE_STAFF_PHONE_NO").val(detailArray[5]);
				$("#CP_UPDATE_STAFF_ADDRESS").val(detailArray[3]);
				$("#CP_UPDATE_STAFF_ID").val(staff_id);
				$("#CP_STAFF_UPDATE_MODAL").modal("show");
				//console.log(detailArray);
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

	$("#CP_NEW_STAFF_ADD").click(function(e){

		e.preventDefault();
		var fname = $("#CP_NEW_STAFF_FNAME").val();
		var lname = $("#CP_NEW_STAFF_LNAME").val();
		var username = $("#CP_NEW_STAFF_USERNAME").val();
		var password = $("#CP_NEW_STAFF_PASSWORD").val();
		var phoneno = $("#CP_NEW_STAFF_PHONE_NO").val();
		var address = $("#CP_NEW_STAFF_ADDRESS").val();
		var status = $("#CP_NEW_STAFF_STATUS").val();
		var email = $("#CP_NEW_STAFF_EMAIL").val();
		var staff = {
			fname:fname,
			lname:lname,
			username:username,
			password:password,
			phoneno:phoneno,
			address:address,
			status:status,
			email:email
		}
		addNewStaff(staff);
	});

})

function addNewStaff(obj){
	$.ajax({
		method:"POST",
		timeout:3000,
		data:obj,
		url:"../controller/addNewStaff.php",
		success:function(r){
			if(r.trim() === "|-SUCCESS-|"){
				alert("Your new staff has been created");
				$("#CP_STAFF_ADD_FORM")[0].reset();
				$("#CP_STAFF_ADD").modal('hide');
				$("#div_staff_table_list").load("admin/table-staff-list.php");
			}else{
				console.log(r);
			}
		}
	})
}

function updateStaff(staff){
	$.ajax({
		url: '../controller/updateStaff.php',
		type: 'POST',
		data: staff,
		success:function(r){
			if(r.trim() === "|-SUCCESS-|"){
				alert("Staff Detail Updated");
				$("#CP_STAFF_UPDATE_MODAL").modal('hide');
				$("#div_staff_table_list").load("admin/table-staff-list.php");
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

function deleteStaff(staff){
	$.ajax({
		url: '../controller/deleteStaff.php',
		type: 'POST',
		data: staff,
		success:function(r){
			if (r.trim() === "|-SUCCESS-|") {
				alert("Staff Deleted");
				$("#CP_STAFF_UPDATE_MODAL").modal('hide');
				$("#div_staff_table_list").load("admin/table-staff-list.php");

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