@extends('template')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <br>
                <br>

                <div class="card-header">
                <center><h3>GROUP BINARIOS LTDA</h3></center>
                </div>
                <br>

                @include('layouts.slider')



                    <center>
                      <button type="button" class="btn btn-primary"> <a class="nav-link" href="{{ route('login') }}">INGRESAR</a></button></center>


            </div>
        </div>
    </div>


@endsection
