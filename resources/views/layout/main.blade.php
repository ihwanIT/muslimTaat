<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>

</head>
<style>
    .container-bar-search{
  height: 200px;
  width: 100%;
  background-color: #39A7FF;
  margin: 0;
  padding: 0;
  background-image: url("{{asset('utility/3.png')}}");
}
</style>
<body id="navbar">
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg" >
        <div class="container-fluid">
                 <!-- Button hanya muncul di tampilan desktop -->
<button style="border: 0px;" class="navbar-toggler d-none d-lg-block" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
  <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
    <svg class="menu-navi" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
  </a>
</button>

          <a class="navbar-brand" href="{{route('dataJuzQuran')}}">
            {{-- ISLAM KU --}}
          <img src="{{asset('utility/logo.png')}}" alt="" style="width: 100px;">
          </a>
          <button style="border: 0px;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            
            <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                <svg class="menu-navi" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
            </a>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

          </div>
        </div>
      </nav>
    <div class="container-bar-search">
      <div class="bar-search">

      <form class="d-flex" role="search">
        <input class="form-control me-2 p-3" type="search" placeholder="Apa yang ingin Anda baca?" aria-label="Search">
        <button class="btn btn-outline-light  " type="submit">
          <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><path d="M7,9H2V7h5V9z M7,12H2v2h5V12z M20.59,19l-3.83-3.83C15.96,15.69,15.02,16,14,16c-2.76,0-5-2.24-5-5s2.24-5,5-5s5,2.24,5,5 c0,1.02-0.31,1.96-0.83,2.75L22,17.59L20.59,19z M17,11c0-1.65-1.35-3-3-3s-3,1.35-3,3s1.35,3,3,3S17,12.65,17,11z M2,19h10v-2H2 V19z"/></g></svg>
        </button>
      </form>
        
    </div>
      <div class="home-index">
        <a class="surah" href="/ayat/1">Al-Fatihah</a>
        <a class="surah" href="/ayat/55"> Ar-Rahman</a>
        <a class="juz" href="/ayat/67"> Al-Mulk</a>
        <a class="surah" href="/ayat/36"> Yasin</a>
        <a class="surah" href="/ayat/18"> Al-Kahf</a>
        <a class="surah" href="/ayat/56"> Al-Waqi'ah</a>
        <a class="surah" href="/ayat/112"> Al-Ikhlas</a>
      </div>
    </div>
    {{-- link data qur'an --}}
    <div class="link-dataQuran">
      <div class="link-data-quran">
        <a id="surah"  href="{{route('dataJuzQuran')}}">Juz</a>
        <a id="juz"   href="{{route('data.Surah')}}">Surah</a>
  </div>
    <div class="navbar-toggler d-none d-lg-block" >
      <div class="form-check form-switch">

        {{-- mode dark/light --}}
    
        <input id="myButton" onclick="changeIcon()" class="form-check-input " type="checkbox" role="switch" >
        <label class="form-check-label" for="flexSwitchCheckChecked">
          <svg id="sun" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79 1.42-1.41zM4 10.5H1v2h3v-2zm9-9.95h-2V3.5h2V.55zm7.45 3.91l-1.41-1.41-1.79 1.79 1.41 1.41 1.79-1.79zm-3.21 13.7l1.79 1.8 1.41-1.41-1.8-1.79-1.4 1.4zM20 10.5v2h3v-2h-3zm-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm-1 16.95h2V19.5h-2v2.95zm-7.45-3.91l1.41 1.41 1.79-1.8-1.41-1.41-1.79 1.8z"/>
          </svg>
        </label>
        
        {{-- radio --}}
        Radio 
        <audio class="audioPlayer" controls>
          <source src="https://backup.qurango.net/radio/roqiah" type="audio/mpeg">
          Your browser does not support the audio element.
        </audio>

      </div>
    </div>
  </div>
  {{-- off canvas bootstraph --}}
{{-- off canvas bootstraph --}}
<div class="offcanvas offcanvas-start mobile-half" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
      <img src="{{asset('utility/logo.png')}}" alt="" style="width: 150px;">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>
      Di Islam Ku, temukan keheningan spiritual dalam bacaan Al-Quran, mendekatkan diri pada Allah, dan memperdalam iman untuk pencerahan rohani.
    </p>
    <div class="list-menu">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" style="display: flex;    justify-content: space-between;     align-items: center;">
          <div class="navbar-toggler d-none d-lg-block" style="padding:10px;">
            <div class="form-check form-switch">
          
              <input id="myButton" onclick="changeIcon()" class="form-check-input " type="checkbox" role="switch" >
              <label class="form-check-label" for="flexSwitchCheckChecked">
                <svg id="sun" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                  <path d="M0 0h24v24H0z" fill="none"/>
                  <path d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.79 1.42-1.41zM4 10.5H1v2h3v-2zm9-9.95h-2V3.5h2V.55zm7.45 3.91l-1.41-1.41-1.79 1.79 1.41 1.41 1.79-1.79zm-3.21 13.7l1.79 1.8 1.41-1.41-1.8-1.79-1.4 1.4zM20 10.5v2h3v-2h-3zm-8-5c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm-1 16.95h2V19.5h-2v2.95zm-7.45-3.91l1.41 1.41 1.79-1.8-1.41-1.41-1.79 1.8z"/>
                </svg>
              </label>
            </div>
          </div>     
    
            <audio class="audioPlayer" controls>
              <source src="audio_file.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
      </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('dataJuzQuran')}}">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><g><polygon points="1,11 1,21 6,21 6,15 10,15 10,21 15,21 15,11 8,6"/><path d="M10,3v1.97l7,5V11h2v2h-2v2h2v2h-2v4h6V3H10z M19,9h-2V7h2V9z"/></g></g></svg>
            Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M9 11.75c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zm6 0c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8 0-.29.02-.58.05-.86 2.36-1.05 4.23-2.98 5.21-5.37C11.07 8.33 14.05 10 17.42 10c.78 0 1.53-.09 2.25-.26.21.71.33 1.47.33 2.26 0 4.41-3.59 8-8 8z"/></svg>
            Jadwal Sholat dan ata cara Sholat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('dataDoa')}}">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M9 11.75c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zm6 0c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8 0-.29.02-.58.05-.86 2.36-1.05 4.23-2.98 5.21-5.37C11.07 8.33 14.05 10 17.42 10c.78 0 1.53-.09 2.25-.26.21.71.33 1.47.33 2.26 0 4.41-3.59 8-8 8z"/></svg>
            Do'a Sehari-hari</a>
        </li>
        <li class="nav-item">
          
          <a class="nav-link" href="{{route('asmaulHusna')}}">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M9 11.75c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zm6 0c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8 0-.29.02-.58.05-.86 2.36-1.05 4.23-2.98 5.21-5.37C11.07 8.33 14.05 10 17.42 10c.78 0 1.53-.09 2.25-.26.21.71.33 1.47.33 2.26 0 4.41-3.59 8-8 8z"/></svg>
            Asmaul Husna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M9 11.75c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zm6 0c-.69 0-1.25.56-1.25 1.25s.56 1.25 1.25 1.25 1.25-.56 1.25-1.25-.56-1.25-1.25-1.25zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8 0-.29.02-.58.05-.86 2.36-1.05 4.23-2.98 5.21-5.37C11.07 8.33 14.05 10 17.42 10c.78 0 1.53-.09 2.25-.26.21.71.33 1.47.33 2.26 0 4.41-3.59 8-8 8z"/></svg>
            Nabi dan Rosul</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('hadist')}}">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><rect fill="none" height="24" width="24"/><path d="M12,22H5c-1.11,0-2-0.9-2-2L3.01,6c0-1.1,0.88-2,1.99-2h1V2h2v2h8V2h2v2h1c1.1,0,2,0.9,2,2v6h-2v-2H5v10h7V22z M22.13,16.99 l0.71-0.71c0.39-0.39,0.39-1.02,0-1.41l-0.71-0.71c-0.39-0.39-1.02-0.39-1.41,0l-0.71,0.71L22.13,16.99z M21.42,17.7l-5.3,5.3H14 v-2.12l5.3-5.3L21.42,17.7z"/></svg>
            Hadist</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"/></g></svg>
            Log Out</a>
        </li>
      </ul>
    </div>
  </div>
</div>
  {{-- page layout --}}
    <hr>
    <div class="container-content">
        @yield('juz-bar')
        @yield('surah-bar')
        @yield('ayat-bar')
        @yield('doa')
        @yield('asmaulHusna')
        @yield('hadist')
    </div>
    
    <footer>
      <h3 style="color: white">
        Islam Ku
      </h3>
      {{-- MENU CEPAT --}}
    <div class="footer-menu">
      <ul>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('dataJuzQuran')}}">
            Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jadwal Sholat dan ata cara Sholat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('dataDoa')}}">
            Do'a Sehari-hari</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('asmaulHusna')}}">Asmaul Husna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Nabi dan Rosul</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('hadist')}}">
            Hadist</a>
        </li>
      </ul>
</div>

{{-- ================= SOSIAL MEDIA--}}
<div class="footer-menu">
  <ul>
    <li class="nav-item">
      <a href="">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
        </svg>
        
        Facebook</a>
    </li>
    <li class="nav-item">
      <a href="">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
        </svg>
        
        Instagram</a>
    </li>
    <li class="nav-item">
      <a href="">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
          <path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z"/>
        </svg>
        
        X</a>
    </li>
    <li class="nav-item">
      <a href="">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
          <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
        </svg>
        
        Konsultasi</a>
    </li>
  </ul>
</div>
  {{-- -==================== --}}
    </footer> 
<script src="{{asset('js/style.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>