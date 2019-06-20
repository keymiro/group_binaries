@extends('template')


@section('content')
    <link rel='stylesheet' href="{{asset('css/main.css')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <br>
                <br><br>
                @include('layouts.slider')
            </div>
        </div>
    </div>


@endsection
