{{--Essendo contacts una pagina statica dove andremo a inserire soltano i contatti 
del sito la posizioniamo nella cartella views assieme alla Home--}}


@extends('layouts.main')

@section('title', 'Contacts')
{{--cdns--}}
@section('cdns')    {{--per importare font awesome sono in questa pagina usiamo questa procedura @section--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <section id="contacts" class="container">
        <h1>Vieni a trovarci o contattaci tramite i nostri canali</h1>

        @foreach ($contacts as $contact)
        <div><i class="fas {{ $contact['icon'] }} me-2"></i>{{ $contact['text'] }}</div>
        @endforeach
    </section>
@endsection






