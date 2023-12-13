@extends('layouts.app')

@section('title')
    Treni
@endsection

@section('content')
    <section class="app-main">
        <h2 class="pb-5">I TRENI IN PARTENZA</h2>
        <div class="container">
            <div class="row gy-5">
                @foreach ($trains as $train)
                    <div class="col-3">
                        <div class="train-card">

                            <ul>
                                <li>
                                    <h2>Azienda Ferroviaria: <br> <span>{{ $train->azienda }}</span></h2>
                                </li>
                                <li>
                                    <h3>Codice Treno: <span>{{ $train->codice_treno }}</span></h3>
                                </li>
                                <li>Orario di Partenza:<span> {{ $train->orario_di_partenza }}</span></li>
                                <li>Orario di Arrivo:<span> {{ $train->orario_di_arrivo }}</span></li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
@endsection
