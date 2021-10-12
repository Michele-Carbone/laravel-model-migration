
@extends('layouts.main')

@section('title', 'Our travels')

@section('content')
    <section id="travels" class="container">
        <h1 class="text-center my-5">Viaggi in tutto il mondo</h1>
        <div class="card my-5" style="width: 18rem;">
            <div class="card-body">
                {{--problema di risolvere con inportare i dati da DB che non li trova--}}
              <h5 class="card-title">{{$travels['id']}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
    </section>
@endsection