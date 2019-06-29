@extends('template')

<br>
<br>
<br>
<br>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido (a) &nbsp{{auth()->user()->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Registrar Usuario
                        <hr>
                        <button type="button" class="btn btn-primary"> <a class="nav-link" href="{{ route('register') }}}">Registrar</a></button>

                </div>
            </div>
        </div>
    </div>
</div>

¿
