@extends('template')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <br>
                <br>
                <hr>
                <div class="card-header">
                <center><h3>GROUP BINARIOS LTDA</h3></center>
                </div>
                <hr>
                <center>
                <div class=" col-md-10">
                @include('layouts.slider')
                </div></center>


                    <center>
                      <button type="button" class="btn btn-outline-warning"> <a class="nav-link" href="{{ route('login') }}"><img  src="/img/inco.png" style="width: 100px"></a></button></center>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>

            </div>
        </div>
    </div>


@endsection
