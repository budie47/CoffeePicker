
<!-- Modal -->
<div id="CP_SHOP_ADD" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Set Up New Coffee Shop</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="usr">Name:</label>
                <input type="text" class="form-control" id="CP_NEW_SHOP_NAME">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="usr">Address:</label>
                <input type="text" class="form-control" id="CP_NEW_SHOP_ADDRESS">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="usr">Town:</label>
                <input type="text" class="form-control" id="CP_NEW_SHOP_TOWN">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="usr">Postcode:</label>
                <input type="text" class="form-control" id="CP_NEW_SHOP_POSTCODE">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="usr">State:</label>
                <input type="text" class="form-control" id="CP_NEW_SHOP_STATE">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="usr">Country:</label>
                <!-- <input type="text" class="form-control"> -->
                <input type='text'
                       placeholder='Write your country name'
                       class='flexdatalist'
                       data-data='../lib/flexdatalist/countries.json'
                       data-search-in='name'
                       data-min-length='1'
                        id="CP_NEW_SHOP_COUNTRY"
                       name='country_name_suggestion'>
              </div>
            </div>
            <div class="col-md-12">
              <label>Operation Hour</label>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="usr">Open:</label>
                <div class="input-group bootstrap-timepicker timepicker">
                  <input id="CP_NEW_SHOP_OPEN_HOUR" type="text" class="form-control input-small">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                </div>

              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="usr">Close:</label>
                <div class="input-group bootstrap-timepicker timepicker">
                  <input id="CP_NEW_SHOP_CLOSE_HOUR" type="text" class="form-control input-small">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-12">
             <div class="form-group">
               <label for="s">Status:</label>
               <select class="form-control" id="CP_NEW_SHOP_STATUS">
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
           <a class="btn btn-success btn-block btn-lg gcsUpdate " id="CP_NEW_SHOP_ADD" ><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
         </div>
       </div>
     </div>

   </form>
 </div>
</div>
</div>



