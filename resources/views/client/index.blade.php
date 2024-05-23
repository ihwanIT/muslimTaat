@extends('layout.main')
@section('juz-bar')
        <div class="container-bar">
            @foreach ($juz['data'] as $surah)
            <div class="container-juz">
                <p style="margin: 0px 10px">{{$surah['name']}}</p>
                <a href="{{ route('dataAyatQuran', $surah['surah_id_start'] ) }}">
                    <div class="bar" style="background-color: white;">
                        <div style="display: flex;">
                            <div>
                        <span class="name"><b>{{$surah['name_start_id']}}</b> </span>
                        <br>
                        <span class="arti">Surah awal</span>
                    </div>
                    </div>
                        <div>
                            <span class="name"> <b>{{$surah['name_start_arab']}}</b></span>
                            <br>
                            <span class="arti">{{$surah['verse_start']}} ayat</span>
                    </div>
                    </div>
                    </a>
            <a href="{{ route('dataAyatQuran', $surah['surah_id_end'] ) }}">
            <div class="bar" style="background-color: white;">
                <div style="display: flex;">
                    <div>
                <span class="name"><b>{{$surah['name_end_id']}}</b> </span>
                <br>
                <span class="arti">Surah akhir</span>
            </div>
            </div>
                <div>
                    <span class="name"> <b>{{$surah['name_end_arab']}}</b></span>
                    <br>
                    <span class="arti">{{$surah['verse_end']}} ayat</span>
            </div>
            </div>
            </a>
        </div>
            @endforeach
        </div>
@endsection