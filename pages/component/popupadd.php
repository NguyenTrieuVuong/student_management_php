<div class="button-add-student">
  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Thêm học viên</button>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thêm học viên</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="addstudent.php" enctype="multipart/form-data">
            <div class="">
              <label for="recipient-name" class="col-form-label">Avatar(image):</label>
              <input type="file" class="form-control" id="recipient-name" accept=".jpg,.png,.jpeg" name="img" >
            </div>
            <div class="">
              <label for="recipient-name" class="col-form-label">Tên học viên:</label>
              <input type="text" class="form-control" id="recipient-name" name="Name" required>
            </div>
            <div class="">
              <label for="recipient-name" class="col-form-label">Email:</label>
              <input type="text" class="form-control" id="recipient-name" name="Email" required>
            </div>
            <div class="">
              <label for="recipient-name" class="col-form-label">Số điện thoại:</label>
              <input type="text" class="form-control" id="recipient-name" name="Phone" required>
            </div>
            <div class="">
              <label for="recipient-name" class="col-form-label">Mã học viên:</label>
              <input type="text" class="form-control" id="recipient-name" name="EnrollNumber" required>
            </div>
            <div class="">
              <label for="recipient-name" class="col-form-label">Ngày tham gia:</label>
              <input type="date" class="form-control" id="recipient-name" name="DateOfAdmission" required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
              <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>