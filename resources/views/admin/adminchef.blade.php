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
                <form action="{{ url('/uploadchef') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control text-dark" id="staticEmail" name="name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Speciality</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control text-dark" id="staticEmail" name="speciality">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Image</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control text-dark" id="staticEmail" name="image">
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

            <div class="mt-5">
                <table class="table-stripped table">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Speciality</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ( $data as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->speciality }}</td>
                        <td><img class="rounded-0 w-75" style="height: 130px; !important" src="/chefimage/{{ $data->image }}" alt=""></td>
                        <td>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this chef?')" href="{{ url('/deletechef', $data->id) }}">Delete</a>
                            <a class="btn btn-success btn-sm" href="{{ url('/chefview', $data->id) }}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
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
