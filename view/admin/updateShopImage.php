
<!-- Modal -->
<div id="CP_SHOP_IMAGE" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form id="CP_SHOP_ADD_FORM">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload Shop Image</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group">
              <form method="post" action="" enctype='multipart/form-data'>
                     <input type='file' name='file' />
                     <input type='submit' value='Save name' name='but_upload'>
                 </form>
            </div>

        </div>
      </div>
      <div class="modal-footer" id="updateGSC">
       <div class="btn-group btn-group-justified" role="group" aria-label="group button">
         <div class="btn-group" role="group">
           <button type="button" id="saveImage" class="btn btn-danger btn-block btn-lg" data-dismiss="modal" role="button"><i class="fa fa-times" aria-hidden="true"></i> Close</button>
         </div>
         <div class="btn-group" role="group">
           <a class="btn btn-success btn-block btn-lg gcsUpdate " id="CP_SHOP_IMAGE_UPLOAD" ><i class="fa fa-plus" aria-hidden="true"></i> Save</a>
         </div>
       </div>
     </div>

   </form>
 </div>
</div>
</div>



