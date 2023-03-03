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
    <div class="error">
        <p>error</P>
    </div>
    <div class="formField">
        @if(Session::has('success'))
        <div class="alert-succes" role="alert">
            {{Session::get('success')}}
        </div>
            @endif
                <form class="formPage" action="{{route('update',['id'=>$data->id])}}" method="POST">
                @csrf
                <input class="inputField" type="Text" placeholder="Last Name" name="lastName" value="{{$data->lastName}}">
                <input class="inputField" type="Text" placeholder="First Name" name="firstName" value="{{$data->firstName}}"><br>
                <p>Birthdate
                    <input class="inputField" type="date"name="birthDate"value="{{$data->birthDate}}" >
                    <input class="inputField" type="number" placeholder="Age" name="age" min="1" max="100" value="{{$data->age}}">
                </p>
                <p>Gender:
                    <input type="radio" value="male" name="gender" checked>
                    <input type="radio" value="female" name="gender">
                </p>
                <p>college details</p>
                <input class="inputField" type="text" placeholder="college" name="college" value="{{$data->college}}">
                <input class="inputField" type="text" placeholder="Department" name="department" value="{{$data->department}}"><br>
                <input class="inputField" type="number" placeholder="year level" name="yearLevel" min="1" value="{{$data->yearLevel}}"><br>
                <p>Address</P>
                <input class="inputField" type="number" placeholder="Region" name="region" min="1" max="12" value="{{$data->Region}}">
                <input class="inputField" type="text" placeholder="city" name="city" value="{{$data->city}}"><br>
                <button class="submit"  name="sbmt" value="{{$data->id}}">UPDATE</button>
            </form>
    </div>
</div>
@endsection
@section('footer')
@endsection


<!-- 

<form class="formPage" action="{{route('update',['id'=>$data->id])}}" method="POST">
        @csrf
        <input class="inputField" type="Text" placeholder="Last Name" name="lastName" value="{{$data->lastName}}">
        <input class="inputField" type="Text" placeholder="First Name" name="firstName" value="{{$data->firstName}}"><br>
        <p>Birthdate
            <input class="inputField" type="date"name="birthDate"value="{{$data->birthDate}}" >
            <input class="inputField" type="number" placeholder="Age" name="age" min="1" max="100" value="{{$data->age}}">
        </p>
        <p>Gender:
            <input type="radio" value="male" name="gender" checked>
            <input type="radio" value="female" name="gender">
        </p>
        <p>college details</p>
        <input class="inputField" type="text" placeholder="college" name="college" value="{{$data->college}}">
        <input class="inputField" type="text" placeholder="Department" name="department" value="{{$data->department}}"><br>
        <input class="inputField" type="number" placeholder="year level" name="yearLevel" min="1" value="{{$data->yearLevel}}"><br>
        <p>Address</P>
        <input class="inputField" type="number" placeholder="Region" name="region" min="1" max="12" value="{{$data->Region}}">
        <input class="inputField" type="text" placeholder="city" name="city" value="{{$data->city}}"><br>
        <button class="submit"  name="sbmt" value="{{$data->id}}">UPDATE</button>
    </form>

 -->