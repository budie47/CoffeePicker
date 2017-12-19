<!-- Modal -->
<div id="CP_PUBLIC_REGISTER" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">User Sign Up</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">First Name:</label>
              <input type="text" class="form-control" id="first_name">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Last Name:</label>
              <input type="text" class="form-control" id="last_name">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="usr">Username:</label>
          <input type="text" class="form-control" id="username">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="password">
        </div>
        <div class="form-group">
          <label for="pwd">Confirm Password:</label>
          <input type="password" class="form-control" id="confirm_password">
        </div>
        <div class="form-group">
          <label for="pwd">Email:</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="pwd">Phone Number:</label>
          <input type="text" class="form-control" id="phone_no">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary"  id="btnCP_PUBLIC_SIGN_UP">Sign Up</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
$(document).ready(function(){
  $("#btnCP_PUBLIC_SIGN_UP").click(function(e){
    e.preventDefault();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var username = $("#username").val();
    var password = $("#password").val();
    var email = $("#email").val();
    var phone_no = $("#phone_no").val();
    if($("#confirm_password").val() === $("#password").val()){
      var data = {
        first_name:first_name,
        last_name:last_name,
        username:username,
        password:password,
        email:email,
        phone_no:phone_no,
        type:"PUBLIC"
      }
      $.ajax({
        method:"POST",
        url:"controller/register.php",
        data:data,
        timeout:3000,
        success:function(r){
          if(r.trim() === "|-SUCCESS-|"){
            alert("Registration Succesfull.");
            $("#CP_REGISTER").modal("hide");
            $("#first_name").val('');
            $("#last_name").val('');
            $("#username").val('');
            $("#password").val('');
            $("#email").val('');
            $("#phone_no").val('');
            $("#confirm_password").val('');
          }else{
            console.log(r);
          }
        }
      });
    }else{
      alert("Password does not match. please re-enter the password");
      $("#confirm_password").val('');
      $("#password").val('');
      $("#password").focus();

    }



  })
})
</script>
