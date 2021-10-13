
@extends('layouts.main')

@section('title', 'Our travels')

@section('content')

    <section id="travels" class="container">
        <h1 class="text-center my-5">Viaggi in tutto il mondo</h1>
        @foreach ($travels as $travel)
        <div class="card my-5 d-flex">
            <div class="card-body">
                {{--problema di risolvere con inportare i dati da DB che non li trova--}}
              
              <h5 class="card-title">{{$travel->country}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$travel->region}}</h6>
              <h6 class="card-subtitle mb-2 text-muted">{{$travel->province}}</h6>
              <h6 class="card-subtitle mb-2 text-muted">{{$travel->city}}</h6>
              <h6 class="card-subtitle mb-2 text-muted">{{$travel->address}}</h6>
              <h6 class="card-subtitle mb-2 text-muted">{{$travel->postal_code}}</h6>
              <span>{{$travel->start_date}}</span>
              <span>{{$travel->end_date}}</span>

              <p class="card-text">{{$travel->description}}</p>
              
                
            </div>
          </div>
          @endforeach
    </section>
@endsection