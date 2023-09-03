<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
        @include('admin.navbars')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <div class="form-group">
                <form action="{{ url('/updatechef', $data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control text-dark" id="staticEmail" name="name" value="{{ $data->name }}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Speciality</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control text-dark" id="staticEmail" name="speciality" value="{{ $data->speciality }}">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control text-dark" id="staticEmail" name="image">
                        </div>
                        <div class="col-sm-4">
                            <input type="hidden" name="oldImage" id="" value="{{ $data->image }}">
                            <img class="rounded-0 w-75" style="height: 130px; !important" src="/chefimage/{{ $data->image }}" alt="">
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
