@extends('layouts.app')

@section('content')
<style>
    div.s1 {
        margin-top: 25px;
        float: center;
        text-align: center;
        font-family: 'Courier New', Courier, monospace;
        font-weigh: bold;
    }
    ul{
        list-style:none;
        text-align:center;
    }
    .s2{
        font-weight: bolder;
    }
</style>

<div class="s1">
    <h1 class="s2">Semantics</h1>
</div>

<br>

<div class="container">
    <ul>
        <li><a href="about" class="waves-effect waves-light btn orange darken-2">About</a></li>
        <br>
        <li><a href="operational" class="waves-effect waves-light btn orange darken-2">Operational Semantics</a></li>
        <br>
        <li><a href="denotational" class="waves-effect waves-light btn orange darken-2">Denotaional Semantics</a></li>
        <br>
        <li><a href="axiomatic" class="waves-effect waves-light btn orange darken-2">Axiomatic Semantics</a></li>
        <br>
        <li><a href="https://www.google.com/" class="waves-effect waves-light btn orange darken-2">Exit</a></li>
    </ul>
</div>

<link rel="stylesheet" href="style.css">
@endsection