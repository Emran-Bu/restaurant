<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
        @include('admin.navbars')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <div class="form-group">
                <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control text-dark" id="staticEmail" name="title">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Price</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control text-dark" id="staticEmail" name="price">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Image</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control text-dark" id="staticEmail" name="image">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control text-dark" id="staticEmail" name="description">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                      <div class="col-sm-10 mt-3">
                        <input type="submit" class="form-control text-light" id="staticEmail">
                      </div>
                    </div>
                </form>
            </div>




          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.adminfooter')
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.adminscript')
  </body>
</html>
