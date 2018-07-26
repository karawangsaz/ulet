@extends('layouts.main')

@section('title', $sector->nama)

@section ('content')
    <div class="container">
        <div class="row">
            @foreach ($materials as $material)
                <div class="col-md-4">
                    <div class="card mt-4">
                        <img class="card-img-top" src="{{ $material->thumbnail }}" alt="{{ $material->nama }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $material->nama }}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{ url('material/' . $material->slug) }}" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection