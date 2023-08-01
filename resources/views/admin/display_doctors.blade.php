@extends('admin.home')

@section('title', 'Display Doctor')

@section('css_by_page')

@endsection

@section('content')
<div class="container-fluid page-body-wrapper">
    <div class="container">
        <table class="mt-3 table" style="color: #fff;">
            <thead>
                <tr style="background-color: #fff;">
                    <th>Doctor Name</th>
                    <th>Phone</th>
                    <th>Speciality</th>
                    <th>Room No</th>
                    <th>Edit</th>
                    <th>Cancel</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $val)
                <tr>
                    <td>{{$val->name}}</td>
                    <td>{{$val->phone}}</td>
                    <td>{{$val->speciality}}</td>
                    <td>{{$val->room}}</td>
                    <td><a href="{{route('admin.edit_doctors', $val->id)}}" class="btn btn-danger">Edit</a></td>
                    <td>
                        <form action="{{route('admin.del_doctors', $val->id)}}" method="POST">
                            @csrf
                            <button type="submit" style="background-color: red;" class="btn btn-danger" onClick="return confirm('Do you really want to delete Doctor?');" name="doctor-del">Delete</button>

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