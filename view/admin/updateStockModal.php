<!-- Modal -->
<!-- Modal -->
<div id="CP_STOCK_UPDATE_MODAL" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form id="CP_STOCK_UPDATE_FORM">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Stock</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Name:</label>
              <input type="text" class="form-control" id="CP_UPDATE_STOCK_NAME">
              <input type="text" class="form-control " id="CP_UPDATE_STOCK_ID">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Stock No:</label>
              <input type="text" class="form-control" id="CP_UPDATE_STOCK_NO">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Quantity:</label>
              <input type="number" class="form-control" id="CP_UPDATE_STOCK_QUANTITY" onchange="calculateTotalPrice('UPDATE')">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Unit:</label>
              <input type="text" class="form-control" id="CP_UPDATE_STOCK_UNIT">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Price Per Unit:</label>
              <input type="text" class="form-control" id="CP_UPDATE_STOCK_PRICE_PER_UNIT" onchange="calculateTotalPrice('UPDATE')">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Total Price:</label>
              <input type="text" class="form-control" id="CP_UPDATE_STOCK_PRICE" disabled>
            </div>
          </div>
        

          <div class="col-md-6">
            <div class="form-group">
              <label for="usr">Expired Date:</label>
              <input type="datepicker" class="form-control" id="CP_UPDATE_STOCK_EXPIRED_DATE">
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
          <a class="btn btn-success btn-block btn-lg gcsUpdate " id="CP_UPDATE_STOCK_SAVE" ><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
        </div>
      </div>
    </form>
  </div>

</div>
</div>
</div>
