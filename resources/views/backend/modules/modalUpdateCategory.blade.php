<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade modal-update" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chỉnh Sữa Loại</h5>
        <div id="return"class="text-center"></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" name="id-category" style="display: none;">
        <form class="updateCategoryForm">
            {{ csrf_field() }}
          <div class="modal-body">
                <div class="form-group row">
                    <label for="nameCategory" class="col-sm-2 col-form-label">Tên Loại</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control nameCategory" id="nameCategoryUpdate"  name="nameCategoryUpdate" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputMetaKey" class="col-sm-2 col-form-label">Seo Meta Key</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputMetaKeyUpdate" name="inputMetaKeyUpdate"  required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputMetaDesc" class="col-sm-2 col-form-label">Seo Meta Desc</label>
                    <div class="col-sm-10">
                    <input type="text"  class="form-control" id="inputMetaDescUpdate"  name="inputMetaDescUpdate"  required>
                    </div>
                </div>
                <div class="form-group row">
               
                  <div class="input-group" style="justify-content: center;">
                
                    <div class="custom-control custom-switch">
                      <input type="checkbox" class="custom-control-input" id="switch1" name="statusUpdate" data-token="{{ csrf_token() }}">>
                      <label class="custom-control-label" for="switch1">Toggle me</label>
                    </div>
                    <input type="hidden" name="statusCat" id="statusCat">
                  </div>
              </div>
               
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-submit update-category-btn">Cập Nhật</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
        
          </div>
        </div>
        </form>
  </div>
</div>