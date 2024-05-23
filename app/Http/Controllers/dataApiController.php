<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class dataApiController extends Controller
{
    public function index( )
    {
        $url = 'https://api.dikiotang.com/quran/juz';
        $response = Http::get($url);
        // dd($response->json());
        return view('client.index', [
            'juz' => $response->json(),
        ]);
    }
    public function surah()
    {
        $url = 'https://equran.id/api/v2/surat';
        $response = Http::get($url);
        return view('client.surah', [
            'surahs' => $response->json(),
        ]);
    }
    public function ayat($id)
    {
        $urlTafsir = 'https://equran.id/api/v2/surat/'.$id.'';
        $responseTafsir = Http::get($urlTafsir);
        return view('client.ayat', [
                'surahsTafsir' => $responseTafsir->json(),
            ]);
    }
    public function doa()
    {
        $doa = 'https://doa-doa-api-ahmadramadhan.fly.dev/api';
        $responseDoa = Http::get($doa);
        // dd($responseDoa->json());    
        return view('client.doa', [
                'dataDoa' => $responseDoa->json(),
            ]);
    }
    public function asmaulHusna(){
    $url = 'https://api.dikiotang.com/quran/asma';
    $response = Http::get($url);
    // dd($response->json());
    return view("client.asmaulHusna", [
        'asmaulHusna' => $response->json(),
    ]);
    }
    public function hadist(){
        $url = 'https://api.dikiotang.com/hadits';
        $response = Http::get($url);
        // dd($response->json());
        return view('client.hadist', [
            'hadist' => $response->json(),
        ]);
    }
}
