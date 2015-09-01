@extends('master');

@section('contents')
    <div id="innercontainer" style="height: 15%;">
        <div class="nav navbar-left">
            <a href="{{url('/')}}"> <img src="/image/citylogo.gif" width="250" alt=""></a>
        </div>
        <div>
            <ol id="menu" class="nav navbar-right">
                <li><a class="btn btn-link" href="{{url('/manual')}}"><b>Staff Login</b></a></li>
                <li><a class="btn btn-link" href="{{url('/manual')}}"><b>Student Login</b></a></li>
                <li><a href="{{url('/home')}}"><b>Registration Info</b></a>
                    <ol>
                        <li><a href="#">Course Registration</a></li>
                        <li><a href="#">Student Registration</a></li>
                    </ol>
                </li>
                <li><a class="btn btn-link" href="{{url('/home')}}"><b>Fee Schedule</b></a></li>
                <li><div><form><input name="search" type="text" placeholder="Quick Search" id="search" /></form></div></li>
            </ol>
        </div>
    </div>
    <div class="maincontainer" align="center">

        <div id="econtainer">
            <div id="slides">
                <img src="../image/IMAG0250.jpg">
                <img src="../image/nature-photo3.png">
                <img src="../image/nature-photo6.png">
                <img src="../image/city.jpg">
            </div>
        </div>


    </div>

@endsection