<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'Beranda')


@section('content')
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('images/gambar.jpeg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">handphone</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>

@endsection
