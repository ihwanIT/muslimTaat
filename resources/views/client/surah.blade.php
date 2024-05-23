@extends('layout.main')
@section('surah-bar')
        <div class="container-bar">
            @foreach ($surahs['data'] as $surah)
      
            <a href="{{ route('dataAyatQuran', $surah['nomor'] ) }}">
            <div class="bar">
                <div style="display: flex;">
                    <span class="no"><b>{{ $loop->iteration }}</b></span>
                    <div>
                <span class="name"><b>{{ $surah['namaLatin'] }}</b> </span>
                <br>
                <span class="arti">{{ $surah['arti'] }}</span>
            </div>
            </div>
                <div>
                    <span class="name"> <b>{{ $surah['nama'] }}</b></span>
                    <br>
                    <span class="arti">{{ $surah['jumlahAyat'] }} ayat</span>
            </div>
            </div>
            </a>
            @endforeach
        </div>
@endsection