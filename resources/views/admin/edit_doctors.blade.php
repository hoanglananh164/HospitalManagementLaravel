<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../admin/template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../admin/template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../admin/template/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../admin/template/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../admin/template/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../admin/template/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../admin/template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../admin/template/assets/images/favicon.png" />
  </head>
  <body>
<div class="container-fluid page-body-wrapper">
<div class="container-fluid page-body-wrapper">

<div class="container" style="padding-top: 15px;  align-items:center; ">

@if(session()->has('noti'))
<div class="alert alert-success" role="alert">  
  <h4 class="alert-heading"></h4>
  <p>{{session('noti')}}</p>
</div>
@endif

    <form action="{{route('admin.update_doctors', $doctor->id)}}" method="POST">
        @csrf
        <div style="padding:15px">
            <label for="">Doctor Name</label>
            <input require type="text" name="name" id="" value="{{$doctor->name ? $doctor->name : ''}}" style="color: black" placeholder="" aria-describedby="helpId">

        </div>
      
        <div style="padding:15px">
            <label for="">Phone</label>
            <input  require type="text" name="phone" id="" value="{{$doctor->phone ? $doctor->phone : ''}}" class="" style="color: black" placeholder="" aria-describedby="helpId">

        </div>

        <div style="padding:15px">
        <label for="">Speciality</label>
          <select name="speciality" style="color: black;">
          <option >-- Select --</option>
          <option value="General Health">General Health</option>
            <option value="Cardiology">Cardiology</option>
            <option value="Dental">Dental</option>
            <option value="Neurology">Neurology</option>
            <option value="Orthopaedics">Orthopaedics</option>

          </select>
        </div>

        <div style="padding:15px">
            <label for="">Room No</label>
            <input  require type="text" name="room" id="" value="{{$doctor->room ? $doctor->room : ''}}" class="" style="color: black" placeholder="" aria-describedby="helpId">

        </div>
<!-- 
        <div style="padding:15px">
            <label for="">Doctor Image</label>
            <input type="file" name="file">

        </div> -->

        <div style="padding:15px">
          
            <button  require type="submit" name="btn-up" class="btn btn-success">Update</button>

        </div>
    </form>

</div>
</div>
<script src="../admin/template/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="../admin/template/assets/vendors/chart.js/Chart.min.js"></script>
<script src="../admin/template/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="../admin/template/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="../admin/template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../admin/template/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="../admin/template/assets/js/jquery.cookie.js" type="text/javascript"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../admin/template/assets/js/off-canvas.js"></script>
<script src="../admin/template/assets/js/hoverable-collapse.js"></script>
<script src="../admin/template/assets/js/misc.js"></script>
<script src="../admin/template/assets/js/settings.js"></script>
<script src="../admin/template/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="../admin/template/assets/js/dashboard.js"></script>
</body>
</html>

