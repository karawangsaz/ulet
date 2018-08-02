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
    {{-- Your contents here --}}
@endsection

@section ('footer_scripts')
    @foreach ($footer_scripts as $script)
        <script src="{{ $script }}"></script>
    @endforeach
@endsection
