@extends('layouts.app')

@section('navbar')
@endsection

@section('content')
    <style>
        div.s1{
            margin-top: 25px;
            float: center;
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
            font-weight: bold;
        }
        .s2{
            font-weight: bolder;
        }
    </style>

    <div class="s1">
        <h1 class="s2">About</h1>
        <h3 class="s2">Group Members</h3>
        
        <h4>Sean Gayle - 1507138</h4>
        <h4>Demar Johnson - 1608193</h4>
        <h4>Danyel Roper - 1608198</h4>
        <br>
        <br>
        <h5>Univesity of Technology Jamaica</h5>
        <h5>Date: November 22, 2019</h5>
        <h6>Made with Laravel and Materialize</h3>
    </div>
    
@endsection