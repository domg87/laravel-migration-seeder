@extends('layouts.base')

@section('page-content')
<div class="container">
    <div class="row">
        @foreach ($comic as $comic) 
        <div class="wrapper_card">
            <div class="box_card">     
                <img src="{{$comic->cover}}" alt="{{$comic->title}}">
                <h3>{{$comic->title}}</h3>
                <h6 class="card-subtitle mb-2 text-muted">{{$comic->author}}</h6>
                <p class="card-text">Numero: {{$comic->number}}</p>
                <p class="card-text">Pagine: {{$comic->n_page}}</p>
                <p class="card-text">Edizione: {{$comic->edition}}</p>
                <p class="card-text">Prezzo: {{$comic->price}}</p>
                <p class="card-text">Anno: {{$comic->release}}</p>
                <a href="#" class="card-link">Card link</a>
            </div>
        </div>
        @endforeach
    </div>
  </div>
@endsection

