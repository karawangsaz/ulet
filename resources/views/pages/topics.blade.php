@extends ('layouts.main')

@section ('title', $material->nama)

@section ('stylesheets')
    <link rel="stylesheet" href="{{ url('css/topics.css') }}">
@endsection

@section ('footer_scripts')
    <script src="{{ url('js/topics.js') }}"></script>
@endsection

@section ('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($series as $seri)
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <a class="cover" href="{{ url('series/' . $seri->slug) }}"></a>
                        <div class="card-body">
                            <div class="card-thumbnail" style="background-image:url({{ $seri->thumbnail }})"></div>
                            <div class="card-content">
                                <h5 class="card-title mt-3">{{ $seri->nama }}</h5>
                                <p class="card-text">
                                    {{ $seri->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>                    
                </div>
            @endforeach
        </div>
    </div>
@endsection