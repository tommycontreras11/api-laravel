<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DistritoController extends Controller
{
    public function index($providence_code) {
        $response = Http::get('https://api-territorial.apps.madlab.com.do/api/distritos?province_code='.$providence_code);
        $data = $response->json();
        return view('distritos', ['data' => $data['data']]);
    }

    public function show($id) {
        $response = Http::get('https://api-territorial.apps.madlab.com.do/api/distritos/'.$id.'/show');
        $data = $response->json();
        return view('distrito', ['data' => $data]);
    }
}
