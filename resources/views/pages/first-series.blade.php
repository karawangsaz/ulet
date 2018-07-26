@extends ('layouts.main')

@section ('title', $seri->nama)

@section ('stylesheets')
    <link rel="stylesheet" href="{{ url('css/series.css') }}">
@endsection

@section ('footer_scripts')
    <script src="{{ url('js/series.js') }}"></script>
@endsection

@section ('content')
    <div class="fluid-container">
        <div class="row no-gutters">
            <div class="topics col-md-3">
                <h1>{{ $seri->nama }}</h1>
                <ul>
                    @foreach ($topics as $topic)
                    <li>
                        <a href="{{ url('series/' . $seri->slug . '/' . $topic->urutan) }}">{{ $topic->judul }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="content col-md-9">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="#">{{ $material->nama }}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $topics[0]->judul }}</li>
                    </ol>
                </nav>
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/3sDB38_d1Co" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen
                        style="width:100%"></iframe>
                </div>
                <div class="description">
                    <div class="fluid-container">
                        <div class="row justify-content-md-center">
                            <div class="col-md-10 mt-5 mb-5">
                                {!! $topics[0]->deskripsi !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection