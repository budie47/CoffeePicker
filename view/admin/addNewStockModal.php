<!-- Modal -->
<div id="CP_STOCK_ADD" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Stock</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Name:</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Stock No:</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Quantity:</label>
              <input type="number" class="form-control" id="usr">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Unit:</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Price Per Unit:</label>
              <input type="text" class="form-control" id="usr">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Total Price:</label>
              <input type="text" class="form-control" id="usr" disabled>
            </div>
          </div>
        </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Expired Date:</label>
              <input type="datepicker" class="form-control" id="usr">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Status:</label>
              <input type="text" class="form-control" id="usr">
            </div>
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
