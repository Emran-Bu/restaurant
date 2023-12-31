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

            <div class="mt-5">
                <table class="table-stripped table">
                    <tr>
                        <th>SL</th>
                        <th>title</th>
                        <th>price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ( $data as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ substr($data->description, 0, 20) . "..." }}</td>
                        <td><img class="rounded-0 w-75" style="height: 130px; !important" src="/foodimage/{{ $data->image }}" alt=""></td>
                        <td>
                            <a onclick="return confirm('Are you sure delete this food?')" href="{{ url('/deletefood', $data->id) }}">Deleted</a>
                            <a href="{{ url('/foodview', $data->id) }}">Edit</a>
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
