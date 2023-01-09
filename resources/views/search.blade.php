@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/bookstyle.css">
<div class="container bg-white">
    <h5 class="d-flex justify-content-between p-2">
        <div>
            <span class="border-red ">
                Book
            </span>
            Result
        </div>
    </h5>
    <div class="row">
        @foreach($books as $book)
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <a href="{{ route('books.show',$book->id) }}"><img src="/images/{{ $book->image }}"
                        alt=""></a>
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            <div class="tag bg-red">
            </div>
            <div class="title pt-4 pb-1">{{ $book->title }}</div>
            <div class="d-flex align-content-center justify-content-center">
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            </div>
            <div class="price">$ {{ $book->price }}</div>
        </div>
        @endforeach
    </div>
</div>

<div class="container bg-white">
    <h5 class="d-flex justify-content-between p-2">
        <div>
            <span class="border-red ">
                Cd
            </span>
            Result
        </div>
    </h5>
    <div class="row">
        @foreach($cds as $cd)
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <a href="{{ route('cds.show',$cd->id) }}"><img src="/images/{{ $cd->image }}"
                        alt=""></a>
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            <div class="tag bg-red">
            </div>
            <div class="title pt-4 pb-1">{{ $cd->title }}</div>
            <div class="d-flex align-content-center justify-content-center">
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            </div>
            <div class="price">$ {{ $cd->price }}</div>
        </div>
        @endforeach
    </div>
</div>

<div class="container bg-white">
    <h5 class="d-flex justify-content-between p-2">
        <div>
            <span class="border-red ">
                Game
            </span>
            Result
        </div>
    </h5>
    <div class="row">
        @foreach($games as $game)
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <a href="{{ route('games.show',$game->id) }}"><img src="/images/{{ $game->image }}"
                        alt=""></a>
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            <div class="tag bg-red">
            </div>
            <div class="title pt-4 pb-1">{{ $game->title }}</div>
            <div class="d-flex align-content-center justify-content-center">
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            </div>
            <div class="price">$ {{ $game->price }}</div>
        </div>
        @endforeach
    </div>
</div>


@endsection