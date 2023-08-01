@extends('admin.home')

@section('title', 'Add Doctor')

@section('css_by_page')

@endsection

@section('content')



<div class="container-fluid page-body-wrapper">

<div class="container" style="padding-top: 15px;  align-items:center; ">

@if(session()->has('noti'))
<div class="alert alert-success" role="alert">  
  <h4 class="alert-heading"></h4>
  <p>{{session('noti')}}</p>
</div>
@endif

    <form action="{{route('admin.store_doctor')}}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div style="padding:15px">
            <label for="">Doctor Name</label>
            <input require type="text" name="name" id="" class="" style="color: black" placeholder="Write doctor name" aria-describedby="helpId">

        </div>
      
        <div style="padding:15px">
            <label for="">Phone</label>
            <input  require type="text" name="phone" id="" class="" style="color: black" placeholder="Write phone doctor" aria-describedby="helpId">

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
            <input  require type="text" name="room" id="" class="" style="color: black" placeholder="Write room doctor" aria-describedby="helpId">

        </div>
<!-- 
        <div style="padding:15px">
            <label for="">Doctor Image</label>
            <input type="file" name="file">

        </div> -->

        <div style="padding:15px">
          
            <button  require type="submit" name="submit" class="btn btn-success">Submit</button>

        </div>
    </form>

</div>
</div>
@endsection

@section('script_by_page')

@endsection

