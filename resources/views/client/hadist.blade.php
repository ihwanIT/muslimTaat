@extends('layout.main')
@section('hadist')
    <div class="container-doa">
        <center><h4>HADIST</h4></center>

        {{-- ========================== --}}
        @foreach ($hadist['data'] as $data)
        <div class="bar-doa">
            <div style="margin-right: 40px">
                <p>
                <b>
                    {{$data['judul']}}
                </b>
                </p>
               <p style="text-align: end;  font-family:  'Arial Narrow', Arial, sans-serif; font-size: clamp(13px, 4vw, 25px);">
                <b>
                    {{$data['arab']}}
                </b>
                </p>
            </div>

                <span>
                    <i>"
                    {{$data['indo']}}
                    "
                    </i>
                </span>
        </div>
        @endforeach 

    </div>
@endsection