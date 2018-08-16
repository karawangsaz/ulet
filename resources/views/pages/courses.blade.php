@extends ('layouts.main')

@section ('title', $title)

@section ('stylesheets')
    @foreach ($stylesheets as $stylesheet)
        <link rel="stylesheet" href="{{ $stylesheet }}">
    @endforeach
@endsection

@section ('header_scripts')
    @foreach ($header_scripts as $script)
        <script src="{{ url('js/' . $script) }}"></script>
    @endforeach
@endsection

@section ('content')
    <div class="container courses">
        <div class="row">
            @foreach ($courses as $course)
                <div class="col-md-12">
                    <div class="box">
                        <div class="thumbnail">
                            <img src="{{ $course->thumbnail }}" alt="{{ $course->nama }}">
                        </div>
                        <h2 class="title">
                            <a href="{{ url('course/' . $course->id . '/topics') }}">{{ $course->nama }}</a>
                        </h2>
                        <div class="description">
                            {{ $course->deskripsi }}
                        </div>
                        <a class="btn btn-sm btn-primary" href="{{ url('course/' . $course->id) }}">Edit</a>
                        <a class="btn btn-sm btn-secondary" href="{{ url('series/' . $course->slug) }}" target="_blank">View</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section ('footer_scripts')
    @foreach ($footer_scripts as $script)
        <script src="{{ $script }}"></script>
    @endforeach
@endsection
