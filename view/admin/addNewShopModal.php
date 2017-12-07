<!-- Modal -->
<div id="CP_SHOP_ADD" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Set Up New Coffee Shop</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="usr">Name:</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="usr">Address:</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Town:</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Postcode:</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">State:</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Country:</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
        </div>
        <label>Operation Hour</label>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Open:</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Close:</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="img">Shop Image</label>
          <input id="input-b2" name="input-b2" type="file" class="file" data-show-preview="false">
        </div>

        <div class="form-group">
          <label for="s">Status:</label>
          <select class="form-control" id="sel1">
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
                  <a class="btn btn-success btn-block btn-lg gcsUpdate " id="gcsUpdate" ><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
              </div>
          </div>
          </form>
      </div>

    </div>

  </div>
</div>
