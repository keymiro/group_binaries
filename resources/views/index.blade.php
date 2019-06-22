@extends('template')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <br>
                <br><br><br>
                <hr>
                <center><h3>GROUP BINARIOS LTDA</h3></center>
                <hr>
                @include('layouts.slider')

<center> </center>
                    <center>
                      <button type="button" class="btn btn-outline-warning"> <a class="nav-link" href="{{ route('login') }}"><img  src="/img/inco.png" style="width: 100px"></a></button></center>

            </div>
        </div>
    </div>


@endsection
