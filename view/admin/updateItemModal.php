<div id="CP_MENU_ITEM_UPDATE" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
       <form id="CP_MENU_ITEM_UPDATE_FORM">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Update Item</h4>
         </div>
         <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="usr">Item Name:</label>
                  <input type="text" class="form-control" id="CP_UPDATE_MENU_ITEM_NAME">
                   <input type="text" class="form-control cp-hidden" id="CP_UPDATE_MENU_ITEM_ID">
                    <input type="text" class="form-control cp-hidden" id="CP_UPDATE_MENU_ITEM_MENU_ID">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="usr">Price:</label>
                  <input type="text" class="form-control" id="CP_UPDATE_MENU_ITEM_PRICE">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="usr">Size:</label>
                  <input type="text" class="form-control" id="CP_UPDATE_MENU_ITEM_SIZE">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="img">Image</label>
                  <img src="" id="CP_UPDATE_MENU_ITEM_THUMBNAIL" class="img-thumbnail CP_MENU_ITEM_THUMBNAIL">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="img">Shop Image</label>
                   <input type="file" name="image" onchange="encodeImagetoBase64(this)">
                   <input type="text" class="form-control cp-hidden CP_MENU_ITEM_IMAGE" id="CP_UPDATE_MENU_ITEM_IMAGE" >
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="s">Status:</label>
                  <select class="form-control" id="CP_UPDATE_MENU_ITEM_STATUS">
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
                <a class="btn btn-success btn-block btn-lg gcsUpdate " id="CP_UPDATE_MENU_ITEM_ADD" ><i class="fa fa-floppy-o" aria-hidden="true"></i> SAVE </a>
              </div>
            </div>
          </div>
       </form>
    </div>
  </div>
</div>
