<!-- Modal -->
<div id="CP_MENU_UPDATE_MODAL" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form id="CP_MENU_UPDATE_FORM">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Menu</h4>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="usr">Menu Name:</label>
              <input type="text" class="form-control" id="CP_UPDATE_MENU_NAME">
              <input type="text" class="form-control" id="CP_UPDATE_MENU_ID" readonly="">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="s">Status:</label>
              <select class="form-control" id="CP_UPDATE_MENU_STATUS">
               <option value="active">Active</option>
               <option value="inactive">Inactive</option>
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
          <a class="btn btn-success btn-block btn-lg gcsUpdate " id="CP_UPDATE_MENU_SAVE" ><i class="fa fa-plus" aria-hidden="true"></i> SAVE</a>
        </div>
      </div>
    </form>
  </div>

</div>
</div>
</div>
