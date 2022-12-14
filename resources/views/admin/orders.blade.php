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
            border: solid black 2px;
            /* padding: 10px; */
        }
        .tdd{
          margin-top: 10px;
        }
    </style>
  </head>
  <body>
    <h1 style="text-align: center;">All orders</h1>

    <div class="container-scroller">
    
    @include('admin.navbar')
    <table>
        <tr >
            <td class="bgg" > Name</td>
            <td class="bgg"> Phone</td>
            <td class="bgg">Address</td>
            <td class="bgg">Food Price</td>
            <td class="bgg">Food Name</td>
            <td class="bgg">Food quantity</td>
           
            <td class="bgg">Totalprice</td>
             {{-- <td class="bgg">photo</td> --}}
        </tr>
        @foreach ($orders as $item)
            <tr>
                <th class="bgg">{{$item->name}}</th>
                <th class="bgg">{{$item->phone}}</th>
                <th class="bgg">{{$item->address}}</th>
                <th class="bgg">${{$item->price}}</th>
                <th class="bgg">{{$item->food_name}}</th>
                <th class="bgg">{{$item->quantity}}</th>
                <th class="bgg">${{$item->price* $item->quantity}}</th>
                {{-- <th class="bgg">{{$item->quantity}}</th> --}}

            </tr>
        @endforeach
        
    </table>
    <div>
        <form action="{{url('/search')}}" method="GET">
            @csrf
            <input style="color: blue;" type="text" name="search" placeholder="search">
            <input type="submit" value="Search" class="btn btn-primary">
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