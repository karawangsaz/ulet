@extends('layouts.main')

@section('title', $user->nama)

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="shadow p-4 mb-5 bg-white rounded">
                    <div class="profile d-flex align-items-center">
                        <div class="d-flex justify-content-center align-items-center profile-picture {{ $user->foto ? 'image' : 'letter' }} float-left rounded-circle align-middle mr-3">
                            @if ($user->foto)
                                <img src="{{ $user->foto }}" alt="Foto profil saya">
                            @else
                                <h3 class="mb-0">{{ substr($user->nama, 0, 1) }}</h3>
                            @endif
                        </div>
                        <div class="basic-profile float-left">
                            @if ($user->tgl_lahir || $user->tempat_lahir)
                                <div class="name-npm">
                                    <h2>{{ $user->nama }} <small>({{ $user->npm }})</small></h2>
                                </div>
                                <div class="born">
                                    @if ($user->tgl_lahir)
                                        @php
                                            $newLocale = setlocale(LC_TIME, 'Indonesian');

                                            $dt = \Carbon\Carbon::parse($user->tgl_lahir);
                                            $dt = \Carbon\Carbon::create($dt->year, $dt->month, $dt->day, 00, 00, 00);

                                            $date = $dt->formatLocalized('%d %B %Y');
                                        @endphp
                                    @endif
                                    {{ $user->tempat_lahir }}{{ $user->tgl_lahir ? ', ' . $date : ''}}
                                </div>
                            @else
                                <div class="name-npm">
                                    <h2>{{ $user->nama }}</h2>
                                    <h2><small>({{ $user->npm }})</small></h2>
                                </div>
                            @endif
                        </div>
                    </div>
                    @if ($user->biografi)
                        <hr>
                        <div class="bio">
                            {{ $user->biografi }}
                        </div>
                    @endif

                    <a href="{{ url('profile/edit') }}" class="float-right btn btn-primary btn-edit-profile {{ $user->biografi ? 'mt-3' : '' }}">Edit Profil</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection