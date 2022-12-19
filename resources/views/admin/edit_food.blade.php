<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
    
    @include('admin.navbar')

    <div style="padding-top: 20px;">
        <form action="{{url('/update',$foods->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    

@if (session()->has('message'))
            
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
                {{session()->get('message')}}
              </div>
            @endif

    <div style="padding-top: 20px;">
      <div style="position: relative; top=60px; right=-200px; ">
      <label  for="">Title:</label>
      <input style="color:black;" type="text" name="title" value="{{$foods->title}}"  required>
    </div>
    <div style="padding-top: 20px;">
      <label for="">Price:</label>
      <input style="color:black;" type="text" name="price" value="{{$foods->price}}"  required>
    </div>
    <div style="padding-top: 20px;">
      <label for="">Previous Image:</label>
      <img style="padding: 20px;" height="100px" width="200px" src="/food_images/{{$foods->image}}" alt="">
    </div>
    <div style="padding-top: 20px;">
      <label for="">New Image:</label>
      <input  type="file" name="image"  required>
    </div>
    <div style="padding-top: 20px;">
      <label for="">Description:</label>
      <input style="color:black;" type="text" name="description" value="{{$foods->description}}" required>
    </div>
<div>
  <button style="margin-left:100px; margin-top: 20px;" class="btn btn-primary" type="submit">Update</button>
</div>
    </div>
    
   </form>
    </div>
   
    </div>
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>