<!-- Modal -->
<div id="CP_STAFF_ADD" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form id="CP_STAFF_ADD_FORM">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Staff</h4>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">First Name:</label>
              <input type="text" class="form-control" id="CP_NEW_STAFF_FNAME">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Last Name:</label>
              <input type="text" class="form-control" id="CP_NEW_STAFF_LNAME">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Username:</label>
              <input type="text" class="form-control" id="CP_NEW_STAFF_USERNAME">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Password:</label>
              <input type="password" class="form-control" id="CP_NEW_STAFF_PASSWORD">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Email:</label>
              <input type="email" class="form-control" id="CP_NEW_STAFF_EMAIL">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Phone No:</label>
              <input type="text" class="form-control" id="CP_NEW_STAFF_PHONE_NO">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="usr">Address:</label>
              <textarea type="text" class="form-control" id="CP_NEW_STAFF_ADDRESS"></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="s">Status:</label>
              <select class="form-control" id="CP_NEW_STAFF_STATUS">
               <option>Active</option>
               <option>Inactive</option>
             </select>
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
          <a class="btn btn-success btn-block btn-lg gcsUpdate " id="CP_NEW_STAFF_ADD" ><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
        </div>
      </div>
    </form>
  </div>

</div>
</div>
</div>
