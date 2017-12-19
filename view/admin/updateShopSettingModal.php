<!-- Modal -->
<div id="CP_SHOP_SETTING_UPDATE" class="modal fade" role="dialog">
  <div class="modal-dialog">
 
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Shop Setting</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="usr">Name:</label>
              <input type="text" class="form-control" id="CP_UPDATE_SHOP_NAME">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="usr">Address:</label>
              <input type="text" class="form-control" id="CP_UPDATE_SHOP_ADDRESS">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Town:</label>
              <input type="text" class="form-control" id="CP_UPDATE_SHOP_TOWN">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Postcode:</label>
              <input type="text" class="form-control" id="CP_UPDATE_SHOP_POSTCODE" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">State:</label>
              <input type="text" class="form-control" id="CP_UPDATE_SHOP_STATE" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Country:</label>
              <input type="text" class="form-control" id="CP_UPDATE_SHOP_COUNTRY" >
            </div>
          </div>
        </div>
        <label>Operation Hour</label>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Open:</label>
              <input type="text" class="form-control" id="CP_UPDATE_SHOP_OPEN_HOUR">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Close:</label>
              <input type="text" class="form-control" id="CP_UPDATE_SHOP_CLOSE_HOUR" >
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="img">Image</label>
          <img src="" id="CP_UPDATE_SHOP_THUMBNAIL" class="img-thumbnail">
        </div>
        <div class="form-group">
          <label for="img">Shop Image</label>
           <input type="file" name="image" onchange="encodeImagetoBase64(this)">
           <input type="text" class="form-control cp-hidden" id="CP_UPDATE_SHOP_IMAGE" >
        </div>

        <div class="form-group">
          <label for="s">Status:</label>
          <select class="form-control" id="CP_UPDATE_SHOP_STATUS">
           <option>Active</option>
           <option>Inactive</option>
         </select>
        </div>


      </div>


      <div class="modal-footer" id="updateGSC">
          <div class="btn-group btn-group-justified" role="group" aria-label="group button">
              <div class="btn-group" role="group">
                  <button type="button" id="saveImage" class="btn btn-danger btn-block btn-lg" data-dismiss="modal" role="button"><i class="fa fa-times" aria-hidden="true"></i> Close</button>
              </div>
              <div class="btn-group" role="group">
                  <a class="btn btn-success btn-block btn-lg gcsUpdate " id="CP_UPDATE_SHOP_UPDATE" ><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
              </div>
          </div>
          </form>
      </div>
</div>

  </div>
</div>
  </div>