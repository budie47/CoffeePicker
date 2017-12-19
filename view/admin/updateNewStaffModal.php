
<div id="CP_STAFF_UPDATE_MODAL" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Staff</h4>
      </div>
      <div class="modal-body">
         <div class="row">
           <div class="col-md-6">
             <div class="form-group">
               <label for="usr">First Name:</label>
               <input type="text" class="form-control" id="CP_UPDATE_STAFF_FNAME">
               <input type="text" class="form-control cp-hidden" id="CP_UPDATE_STAFF_ID" readonly="">
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group">
               <label for="usr">Last Name:</label>
               <input type="text" class="form-control" id="CP_UPDATE_STAFF_LNAME">
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group">
               <label for="usr">Username:</label>
               <input type="text" class="form-control" id="CP_UPDATE_STAFF_USERNAME" readonly="">
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group">
               <label for="usr">Password:</label>
               <input type="password" class="form-control" id="CP_UPDATE_STAFF_PASSWORD" readonly="">
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group">
               <label for="usr">Email:</label>
               <input type="text" class="form-control" id="CP_UPDATE_STAFF_EMAIL">
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group">
               <label for="usr">Phone No:</label>
               <input type="text" class="form-control" id="CP_UPDATE_STAFF_PHONE_NO">
             </div>
           </div>
           <div class="col-md-12">
             <div class="form-group">
               <label for="usr">Address:</label>
               <textarea type="text" class="form-control" id="CP_UPDATE_STAFF_ADDRESS"></textarea>
             </div>
          </div>
        </div>
      </div>
      <div class="modal-footer" id="updateGSC">
        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
          <div class="btn-group" role="group">
            <button type="button" id="saveImage" class="btn btn-danger btn-block btn-lg" data-dismiss="modal" role="button"><i class="fa fa-times" aria-hidden="true"></i> Close</button>
          </div>
          <div class="btn-group" role="group">
            <a class="btn btn-success btn-block btn-lg gcsUpdate " id="CP_UPDATE_STAFF_UPDATE_BTN" ><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
