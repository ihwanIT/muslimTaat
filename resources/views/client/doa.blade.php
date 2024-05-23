@extends('layout.main')
@section('doa')
    <div class="container-doa">
        <center><h4>DO'A SEHARI-HARI</h4></center>

        {{-- ========================== --}}
        @foreach ($dataDoa as $data)
        <div class="bar-doa">
            <div style="margin-right: 40px">
                <p>
                <b>
                    {{$data['doa']}}
                </b>
                </p>
               <p style="text-align: end;  font-family:  'Arial Narrow', Arial, sans-serif; font-size: clamp(13px, 4vw, 25px);">
                <b>
                    {{$data['ayat']}}
                </b>
                </p>
               <p style="text-align: end;  font-family:  'Arial Narrow', Arial, sans-serif; font-size: clamp(12px, 3vw, 17px);">
                    {{$data['latin']}}
                </p>
            </div>

                <span>
                    <i>"
                    {{$data['artinya']}}
                    "
                    </i>
                </span>
        </div>
        @endforeach 

    </div>
@endsection