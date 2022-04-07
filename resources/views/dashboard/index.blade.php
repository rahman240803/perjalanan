@extends('layouts.app')
@section('content')
<center>

    <h3> 
        Hallo,{{Auth()->user()->name}}!
    </h3>
    <img src="{{ asset('assets/images/bg.png')}}" alt="foto" style="width:400px; heigth:400px;">
</center>
@endsection