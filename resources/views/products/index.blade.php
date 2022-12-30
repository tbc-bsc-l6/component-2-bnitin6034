@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">
    <div class="col text-end mb-2">
        <a href="{{ route('products.create') }}" class="btn btn-secondary">Add New</a>
    </div>
    <div class="row">
        @foreach ($products as $product)
        <div class="col-4 mb-2">
            <div class="card h-100">
                <img src="images/{{ $product -> image }}" id="bookimg" class="card-img-book"
                    alt="Palm Springs Road" />
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $product -> title }}</h5>
                    <p class="card-text">{{ $product -> firstname }}</p>
                    <p class="card-text">{{ $product -> surname }}</p>
                    <p class="card-text"> <b> $ </b> {{ $product -> price }}</p>
                    <p class="card-text">
                        @if($product->category == 'book')
                        <p>Page {{ $product -> pages }}</p>
                        @elseif($product->category == 'cd')
                        <p>Duration {{ $product -> pages }}</p>
                        @else
                        <p>Playlength {{ $product -> pages }}</p>
                        @endif
                    </p>
                </div>
                <!--div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div-->
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection