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

            <h4><i>Admin users Table</i></h4>
            <div class="mt-2">
                <table class="table-stripped table">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    @foreach ( $users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        @if ($user->usertype == '0')
                            <td><a onclick="return confirm('Are you sure delete this user?')" href="{{ url('/deleteuser', $user->id) }}">Deleted</a></td>
                        @else
                            <td>Not Allowed</td>
                        @endif
                        {{-- data-confirm="Are you sure to delete this item?" --}}
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
