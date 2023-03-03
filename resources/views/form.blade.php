@extends('layout.template')
@section('header')
            <li class="libtn">
                <form action="{{route('main')}}" method="GET">
                    <button class= "home" name="home" ></button><br>
                </form>
            </li>
        </ul>
    </div>
@endsection
@section('container')
<div class="form">
@if(Session::has('success'))
    <div class="alert-succes" role="alert">
        {{Session::get('success')}}
    </div>
@endif
    <div class="error">
        <p>error</P>
    </div>
    <div class="formField">
        <form class="formPage" action="{{route('save')}}" method="POST">
            @csrf
            <input class="inputField" type="Text" placeholder="Last Name" name="lastName">
            <input class="inputField" type="Text" placeholder="First Name" name="firstName"><br>
            <p>Birthdate
                <input class="inputField" type="date"name="birthDate">
                <input class="inputField" type="number" placeholder="Age" name="age" min="1" max="100">
            </p>
            <p>Gender:
                <input type="radio" value="male" name="gender" checked>
                <input type="radio" value="female" name="gender">
            </p>
            <p>college details</p>
            <input class="inputField" type="text" placeholder="college" name="college">
            <input class="inputField" type="text" placeholder="Department" name="department"><br>
            <input class="inputField" type="number" placeholder="year level" name="yearLevel" min="1"><br>
            <p>Address</P>
            <input class="inputField" type="number" placeholder="Region" name="region" min="1" max="12">
            <input class="inputField" type="text" placeholder="city" name="city"><br>
            <button class="submit">SUBMIT</button>
        </form>
    </div>
</div>
@endsection
@section('footer')
@endsection