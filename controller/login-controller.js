function login(data){
  
    $.ajax({
      method:"POST",
      timeout:3000,
      url:"controller/login.php",
      data:data,
      success:function(r){
        if(r.trim()==="|-SUCCESS-|"){
          //alert("Success Login");
          location.href="view/admindashboard.php"
        }else if(r.trim()=== "No Current ID"){
          alert("Your Account Does Not Exist");
        } else{
          console.log(r);
        }
      }
    })
 
}

function loginUser(data){
   $.ajax({
      method:"POST",
      timeout:3000,
      url:"login-user.php",
      data:data,
      success:function(r){
        console.log(r);
        if(r.trim()==="|-SUCCESS-|"){
          //alert("Success Login");
          location.href="shop.php";
        }else if(r.trim()=== "No Current ID"){
          alert("Your Account Does Not Exist");
        } else{
          console.log(r);
        }
      }
    })
}


function loginStaff(data){
   $.ajax({
      method:"POST",
      timeout:3000,
      url:"login-staff.php",
      data:data,
      success:function(r){
        console.log(r);
        if(r.trim()==="|-SUCCESS-|"){
          //alert("Success Login");
          location.href="view/staff-shopdashboard.php";
        }else if(r.trim()=== "No Current ID"){
          alert("Your Account Does Not Exist");
        } else{
          console.log(r);
        }
      }
    })
}