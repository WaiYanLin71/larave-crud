<!-- Modal -->
<div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="edit-modal-title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit-modal-title">Edit Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        .<div>

          <h1 class="mt-5">Edit Form</h1>
          <form>
            <div class="form-group mt-3">
              <label for="name">Name</label>
              <input type="text" id="edit_name" class="form-control input">
              <span class="error-edit_name error mt-1 text-danger"></span>
            </div>
            <div class="form-group mt-3">
              <label for="name">Email</label>
              <input type="email" id="edit_email" class="form-control input">
              <span class="error-edit_email error mt-1 text-danger"></span>
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="update-api">Update</button>
      </div>
    </div>
  </div>
</div>
