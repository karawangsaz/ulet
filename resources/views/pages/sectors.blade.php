@extends('layouts.main')

@section('title', 'Sectors')

@section('content')
    <div class="fluid-container">
        <div class="row sectors">
            @foreach ($sectors as $sector)
                <div class="col-md-6 sector d-flex flex-column justify-content-center" style="background-image: url('{{ $sector->thumbnail }}')">
                    <div class="cover position-absolute"></div>
                    <a href="{{ url('sector/' . $sector->slug) }}" aria-label="{{ $sector->nama }}" title="{{ $sector->nama }}" class="overlay position-absolute"></a>
                    <h2 class="sector-name">{{ $sector->nama }}</h2>
                    <div class="description">
                        {{ $sector->deskripsi_singkat }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection