<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div id="return"class="text-center"></div>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form id="insertCategory">
        {{ csrf_field() }}
      <div class="modal-body">
            <div class="form-group row">
                <label for="nameCategory" class="col-sm-2 col-form-label">Tên Loại</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nameCategory"  name="nameCategory"   minlength="6" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputMetaKey" class="col-sm-2 col-form-label">Seo Meta Key</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputMetaKey" name="inputMetaKey"  required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputMetaDesc" class="col-sm-2 col-form-label">Seo Meta Desc</label>
                <div class="col-sm-10">
                <input type="text"  class="form-control" id="inputMetaDesc"  name="inputMetaDesc"  required>
                </div>
            </div>
            <div class="form-group row">
           
              <div class="input-group" style="justify-content: center;">
            
                <div id="radioBtn" class="btn-group">
                  <a class="btn btn-primary btn-sm active" data-toggle="statusCat" data-title="1">Mở</a>
                  <a class="btn btn-primary btn-sm notActive" data-toggle="statusCat" data-title="0">Tắt</a>
                </div>
                <input type="hidden" name="statusCat" id="statusCat">
              </div>
          </div>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-submit" id="submitbtn">Thêm</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
    
      </div>
    </div>
    </form>
 
  </div>
</div>