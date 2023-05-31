<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MunicipioController extends Controller
{
    public function index($providence_code){
        $response = Http::get('https://api-territorial.apps.madlab.com.do/api/municipios?province_code='.$providence_code);
        $data = $response->json();
        return view('municipios', ['data' => $data['data']]);
    }

    public function show($municipio_id){
        $response = Http::get('https://api-territorial.apps.madlab.com.do/api/municipios/'.$municipio_id.'/show');
        $data = $response->json();
        return view('municipio', ['data' => $data]);
    }
}
