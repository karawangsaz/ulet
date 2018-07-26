@extends('layouts.main')

@section('title', $sector->nama)

@section ('content')
    <div class="container">
        <div class="row">
            @foreach ($materials as $material)
                <div class="col-md-4">
                    <div class="card shadow-sm mt-5">
                        <img class="card-img-top" src="{{ $material->thumbnail }}" alt="{{ $material->nama }}">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $material->nama }}</h5>
                            <p class="card-text">
                                <div class="list-group list-group-flush">
                                    @foreach ($material->series as $series)
                                        <a class="list-group-item list-group-item-action" href="{{ url('series/' . $series->slug) }}">{{ $series->nama }}</a>
                                    @endforeach
                                </div>
                            </p>
                            <a href="{{ url('material/' . $material->slug) }}" class="float-right btn btn-primary">Lebih banyak &raquo;</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection