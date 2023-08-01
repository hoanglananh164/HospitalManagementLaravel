@extends('admin.home')

@section('title', 'Display Appointment')

@section('css_by_page')

@endsection

@section('content')
<div class="mt-10">
    <div class="display_app">
        <table class="mt-3 table" style="color: #fff;">
            <thead>
                <tr style="background-color: #fff;">
                    <th>Patient Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Cancel</th>

                </tr>
            </thead>
            <tbody>
                @foreach($app as $val)
                <tr>
                    <td>{{$val->name}}</td>
                    <td>{{$val->email}}</td>
                    <td>{{$val->phone}}</td>
                    <td>{{$val->doctor}}</td>
                    <td>{{$val->date}}</td>
                    <td>{{$val->message}}</td>
                    <td>
                        <form action="{{route('admin.del_app', $val->id)}}" method="POST">
                            @csrf
                            <button type="submit" style="background-color: red;" class="btn btn-danger" onClick="return confirm('Do you really want to delete Appointment?');" name="app-del">Delete</button>

                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@section('script_by_page')

@endsection