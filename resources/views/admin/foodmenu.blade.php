<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
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
     <style>
        .bgg{
            border: solid white 2px;
            padding: 10px;
        }
        .tdd{
          margin-top: 10px;
        }
    </style>
  </head>
  <body>
    
     <div class="container-scroller ">   
    @include('admin.navbar')

    

   <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
    @csrf
    

@if (session()->has('message'))
            
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
                {{session()->get('message')}}
              </div>
            @endif

    <div>
<div style="position: relative; top=60px; right=-200px; ">
      <label  for="">Title:</label>
      <input style="color:black;" type="text" name="title" placeholder="title" required>
    </div>
    <div>
      <label for="">Price:</label>
      <input style="color:black;" type="text" name="price" placeholder="price" required>
    </div><div>
      <label for="">Image:</label>
      <input  type="file" name="image"  required>
    </div><div>
      <label for="">Description:</label>
      <input style="color:black;" type="text" name="description" placeholder="description" required>
    </div>
<div>
  <button style="margin-left:100px; margin-top: 20px;" class="btn btn-primary" type="submit">Save</button>
</div>
    </div>
    
   </form>



 <div>
  @if (session()->has('message'))
            
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" area-hidden="true">x</button>
                {{session()->get('message')}}
              </div>
            @endif
            
    <table class="bgg" >
        <tr  style="background: gray; ">
            <th class="bgg">Food Name</th>
            <th class="bgg">Price</th>
            <th class="bgg">description </th>
            <th class="bgg">image </th>
            <th class="bgg ">Edit </th>
            <th class="bgg ">Delete </th>




        </tr>

        @foreach ($foods as $item)
            <tr >
            <td class="bgg">{{$item->title}}</td>
            <td class="bgg">{{$item->price}}</td>
            <td class="bgg">{{$item->description}}</td>
            <td class="bgg"><img height="100px" width="200px" src="food_images/{{$item->image}}" alt=""></td>
           <td class="bgg">
                  <a class="tdd bgg btn btn-success" href="{{url('/edit_food',$item->id)}}">Edit</a>
              </td>
              <td class="bgg">
                  <a class="tdd bgg btn btn-danger" href="{{url('/delete_food',$item->id)}}">Delete</a>
              </td>
            

        </tr>
        @endforeach
        
    </table>
   
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