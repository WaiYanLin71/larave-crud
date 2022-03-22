@extends('common.master')

@section('content')
    <div class="container-fluid">
      <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-6">
                <form action="" id="upload-image">
                    <div class="form-group">
                        <label for="file">File</label>
                        <input type="file" id="file" name="file" class="form-control input">
                        <span class="text-danger error error-file"></span>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-center  align-items-center">
          <div class="col-md-6">
            <h1 class="mt-5">Create Form</h1>
            <form>
              <div class="form-group mt-3">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control input">
                <span class="error-name error mt-1 text-danger"></span>
              </div>
              <div class="form-group mt-3">
                <label for="name">Email</label>
                <input type="email" id="email" class="form-control input">
                <span class="error-email error mt-1 text-danger"></span>
              </div>
              <div class="mt-3">
                <button class="btn btn-primary" id="create">Create</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-5  justify-content-center align-items-center">
          <div class="col-md-6">
            <table class="table text-center">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="student-list">

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection
