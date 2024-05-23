@extends('layout.main')
@section('asmaulHusna')
<center><h4>ASMAUL HUSNA</h4></center>
    <div class="container-asmaul-husna">
        @foreach ($asmaulHusna['data'] as $data)
        <div class="asmaulHusna-bar">
            <div>
            <p>{{$data['arab']}}</p>
            <p>{{$data['latin']}}</p>
            <p>
                <i>"
                    {{$data['indo']}}"
            </i>
            </p>
        </div>
        </div>
        @endforeach
    </div> 
@endsection