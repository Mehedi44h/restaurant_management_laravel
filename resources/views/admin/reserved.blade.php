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
        .thh{
            /* border: solid wheat 2px; */
            background-color: gray;
            
        }
        .th{
            border: solid wheat 2px;
          padding: 5px;
        }
        .tht{
            border: solid wheat 2px;
            padding-left:20px ;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
    
    @include('admin.navbar')

    <div style="padding: 30px;">
        <table>
            <tr class="thh">
                <th class="th">Guest Name</th>
                <th class="th">Email</th>
                <th class="th">Phone</th>
                <th class="th">Guest</th>
                <th class="th">Date</th>
                <th class="th">Time</th>
                <th class="th">Message</th>
                <th class="th">Calcel</th>



            </tr>

            @foreach ($rvdata as $item)
                 <tr>
                    <td class="th">{{$item->name}}</td>
                    <td class="th">{{$item->email}}</td>
                    <td class="th">{{$item->phone}}</td>
                    <td class="tht">{{$item->guest}}</td>
                    <td class="th">{{$item->date}}</td>
                    <td class="th">{{$item->time}}</td>
                    <td class="th">{{$item->message}}</td>
                    <td class="th">
                        <a class="btn btn-danger" href="{{url('/cancel_reserve',$item->id)}}">Cancel</a>
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