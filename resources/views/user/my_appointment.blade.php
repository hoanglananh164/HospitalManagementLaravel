<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../user/assets/css/maicons.css">

  <link rel="stylesheet" href="../user/assets/css/bootstrap.css">

  <link rel="stylesheet" href="../user/assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../user/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../user/assets/css/theme.css">
  <style>
    table tr th {
      padding: 10px 20px;
    }

  </style>
</head>

<body>
  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="nav-link" style="background-color: #00d9a5; color: #fff;" href="{{route('user.my_appointment')}}">My Appointment</a>
            </li>

            <x-app-layout>

            </x-app-layout>

            @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="container">
  <table class="table mt-6">
    <thead>
      <tr>
        <th>Doctor Name</th>
        <th>Date</th>
        <th>Message</th>
        <th>Cancel Appointment</th>

      </tr>
    </thead>
    <tbody>
      @foreach($appointment as $val)
      <tr>
        <td>{{$val->doctor}}</td>
        <td>{{$val->date}}</td>
        <td>{{$val->message}}</td>
        <td>
          <form action="{{route('user.delmy_appointment', $val->id)}}" method="POST">
            @csrf
            <button type="submit" style="background-color: red;" class="btn btn-danger" onClick="return confirm('Do you really want to delete Appointment?');" name="btn-del">Delete</button>

          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  