@extends('layout.main')
@section('ayat-bar')
<h4>{{$surahsTafsir['data']['namaLatin']}} 
<h4>{{$surahsTafsir['data']['nama']}} 
  <span class="icon-container">
  <audio controls class="audioPlayer">
    <source src="{{ $surahsTafsir['data']['audioFull']['05'] }}" type="audio/mpeg" id="audio-ayat">
  </audio>
</span>
</h4>
<div class="tafsir">
  {!! $surahsTafsir['data']['deskripsi']; !!}
</div>
<h4>بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</h4>
@foreach ($surahsTafsir['data']['ayat'] as $surah)
<div class="container-bar-ayat">
<div class="data-ayat-item">
<div class="icon-container">
  <audio controls class="audioPlayer">
    <source src="{{ $surah['audio']['05'] }}" type="audio/mpeg" id="audio-ayat">
  </audio>
  <button class="button-ayat" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne"> 
    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/><path d="M12,4c4.41,0,8,3.59,8,8s-3.59,8-8,8s-8-3.59-8-8S7.59,4,12,4 M12,2C6.48,2,2,6.48,2,12c0,5.52,4.48,10,10,10 c5.52,0,10-4.48,10-10C22,6.48,17.52,2,12,2L12,2z M13,12l0-4h-2l0,4H8l4,4l4-4H13z"/></g></svg>
  </button>
</div>
<span class="text-ayat">  {{ $surah['teksArab'] }}</span>
</div>
<div style=" text-align: end;">{{ $surah['teksLatin'] }}</div>
<div class="accordion" id="accordionPanelsStayOpenExample" >
  <div class="accordion-item" style="border: 0px; padding:0;">

    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
        {{ $surah['teksIndonesia'] }}
      </div>
    </div>
  </div>
</div>
</div>
@endforeach
@endsection