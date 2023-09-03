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

            <h4><i>Admin Reservation Table</i></h4>
            <div class="mt-2">
                <table class="table-stripped table table-responsive">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Guest</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                    @foreach ( $data as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->guest }}</td>
                        <td>{{ $data->date }}</td>
                        <td>{{ $data->time }}</td>
                        <td>{{ substr( $data->message, 0, 25) . "(...)"}}</td>
                        <td><a onclick="return confirm('Are you sure delete this food?')" href="{{ url('deletereservation', $data->id) }}">Delete</a></td>
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
