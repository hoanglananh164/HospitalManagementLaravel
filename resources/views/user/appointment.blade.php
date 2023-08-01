<div class="page-section">
  <div class="container">
    <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
    
    @if(session()->has('noti'))
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading"></h4>
      <p>{{session('noti')}}</p>

    </div>
    @endif

    <form class="main-form" action="{{route('user.store_appointment')}}" method="POST">
      @csrf
      <div class="row mt-5 ">
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
          <input type="text" name="name" class="form-control" placeholder="Full name">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
          <input type="text" name="email" class="form-control" placeholder="Email address..">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
          <input type="date" name="date" class="form-control">
        </div>
        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
          <select name="doctor" id="departement" class="custom-select">

            <option>--- select doctor ---</option>
            @foreach($doctor as $val)
            <option value="{{$val->name}}">{{$val->name}} ---speciality-- {{$val->speciality}}</option>
            <!-- <option value="cardiology">Cardiology</option>
              <option value="dental">Dental</option>
              <option value="neurology">Neurology</option>
              <option value="orthopaedics">Orthopaedics</option> -->
            @endforeach
          </select>
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <input type="text" name="phone" class="form-control" placeholder="Number..">
        </div>
        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
          <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
        </div>
      </div>

      <!-- <button type="submit" name="app-submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button> -->
      <button type="submit" name="app-submit" class="btn btn-primary mt-3 wow zoomIn" style="background-color: #00d9a5;">Submit Request</button>

      
    </form>
  </div>
</div>