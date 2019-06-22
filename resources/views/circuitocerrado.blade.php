@extends('template')
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br><br>
<div class="container" style="text-align: justify;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <center><h3>NUESTROS PRODUCTOS</h3></center><HR>
            <div class="card text-center">

                @include('layouts.navproductos')
                <div class="card-body">

                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>