<!-- Modal -->
<div id="CP_MENU_VIEW" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">

        <div class="row">
          <div class="col-md-3">
            <img src="img/mocha2.jpg" style="width:100%; height:100%" />
          </div>
          <div class="col-md-9">
            <div class="caption">
              <h4 class="pull-right">RM 15.99</h4>
              <h4>Americano</h4>
                <p>Description about the item blah blah blah blah</p>
              <div class="form-group">
                <label for="usr">Size:</label>
                <select class="form-control" id="sel1">
                 <option>Small (9oz)</option>
                 <option>Regular (10oz)</option>
                 <option>Large (1oz)</option>
               </select>
              </div>
              <div class="form-group">
                
                <label class="radio-inline"><input type="radio" name="optradio">Hot</label>
                <label class="radio-inline"><input type="radio" name="optradio">Cold</label>
              </div>
              <div class="form-group">
                <label for="usr">Topping:</label>
                <label class="checkbox-inline"><input type="checkbox" value="">Choco Powder</label>
                <label class="checkbox-inline"><input type="checkbox" value="">Syrup</label>
                <label class="checkbox-inline"><input type="checkbox" value="">Brown Sugar</label>
              </div>
              <div class="form-group">
                <label for="usr">Another Request:</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
              </div>

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
                  <a class="btn btn-success btn-block btn-lg gcsUpdate " id="gcsUpdate" ><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
              </div>
          </div>
          </form>
      </div>

    </div>

  </div>
</div>
