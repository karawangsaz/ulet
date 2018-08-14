@extends('layouts.main')

@section('title', $user->nama)

@section ('stylesheets')
    @foreach ($stylesheets as $stylesheet)
        <link rel="stylesheet" href="{{ $stylesheet }}">
    @endforeach
@endsection

@section ('header_scripts')
    @foreach ($scripts['header'] as $script)
        <script src="{{ $script }}"></script>
    @endforeach
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.profile-picture')
                        .css({
                            'background-image' : 'url("' + e.target.result + '")',
                            'background-size' : 'cover'
                        });
                    if (letter = document.getElementsByClassName('display-3')) {
                        letter[0].parentNode.removeChild(letter[0])
                    }
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection

@section ('footer_scripts')
    @foreach ($scripts['footer'] as $script)
        <script src="{{ $script }}"></script>
    @endforeach

    <script>
        @php
            $now = \Carbon\Carbon::now();
            $max = \Carbon\Carbon::parse($now->year-5 . '-12-01');
            $minDate = '1930/01/01 00:00:00';
            $maxDate = $max->year . '/' . $max->month . '/' . $max->lastOfMonth()->day . ' 00:00:00';
            $startDate = '2000/01/01 00:00:00';
        @endphp

        @if ($user->tgl_lahir)
            @php
                $dt = \Carbon\Carbon::parse($user->tgl_lahir);
                $date = $dt->day . '/' . $dt->month . '/' . $dt->year;
            @endphp
        @endif

        $('#tanggal_lahir').daterangepicker({            
            singleDatePicker: true,
            showDropdowns: true,
            startDate: '{{ $startDate }}',
            minDate: '{{ $minDate }}',
            maxDate: '{{ $maxDate }}',
            autoUpdateInput: false,
            locale: {
                format: 'YYYY/MM/DD HH:mm:ss',
                cancelLabel: 'Clear'
            }
        }, function (start, end, label) {
            $('#tanggal_lahir').val(start.format('DD/MM/YYYY'));
            $('input[name="tanggal_lahir"]').val(start.format('YYYY-MM-DD'));
        });
    </script>
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="shadow p-4 mb-5 bg-white rounded">
                    <form method="POST" action="{{ url('profile/edit') }}" class="form" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="profile fluid-container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-12 mt-3 mb-4">
                                    <div class="d-flex justify-content-center">
                                        <div class="d-flex justify-content-center align-items-center profile-picture edit {{ $user->foto ? 'image' : 'letter' }} rounded-circle align-middle" {!! $user->foto ? 'style="background-image: url(' . url($user->foto) . ')"' : '' !!}>
                                            <a href="#" class="cover position-absolute"></a>

                                            <div id="change-profile-picture" class="change-pp-button overlay position-absolute d-flex justify-content-center align-items-center" tabindex="0" data-toggle="popover" data-trigger="hover" title="Foto Profil" data-content="Gambar harus berukuran minimal 300x300 px dengan format png/jpg">
                                                <i class="fas fa-2x fa-camera"></i>
                                            </div>

                                            @if (!$user->foto)
                                                <h1 class="display-3">{{ substr($user->nama, 0, 1) }}</h1>
                                            @endif
                                        </div>
                                    </div>
                                    <input type="file" name="profile_picture" onchange="readURL(this);" class="btn btn-default" accept="image/png, image/jpeg" hidden>
                                </div>
                                <div class="col-md-12">
                                    <div class="basic-profile float-left">
                                        <div class="fluid-container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nama">Nama</label>
                                                        <br>
                                                        <input class="form-control" id="nama" type="text" name="nama" value="{{ $user->nama }}">
                                                    </div>                    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nama">NPM</label>
                                                        <br>
                                                        <input class="form-control" id="nama" type="text" value="{{ $user->npm }}" disabled aria-disabled="true" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tempat_lahir">Tempat Lahir</label>
                                                        <br>
                                                        <input class="form-control" id="tempat_lahir" type="text" name="tempat_lahir" value="{{ $user->tempat_lahir }}" autocomplete="off">
                                                    </div>                                            
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                                        <br>
                                                        <input class="form-control" id="tanggal_lahir" type="text" value="{{ $user->tgl_lahir ? $date : '' }}" autocomplete="off">
                                                        <input type="text" name="tanggal_lahir" value="{{ $user->tgl_lahir }}" hidden>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="biografi">Biografi</label>
                                                        <textarea class="form-control" name="biografi" id="biografi" rows="7">{{ $user->biografi }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" class="float-right btn btn-primary btn-edit-profile mt-2" value="Simpan">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection