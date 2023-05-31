<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProvinciaController extends Controller
{
    public function index($country_code){
        $response = Http::get('https://api-territorial.apps.madlab.com.do/api/provincias?country_code='.$country_code);
        $data = $response->json();
        return view('provincias', ['data' => $data['data']]);
    }

    public function show($provincia_id){
        $response = Http::get('https://api-territorial.apps.madlab.com.do/api/provincias/'.$provincia_id.'/show');
        $data = $response->json();
        return view('provincia', ['data' => $data]);
    }
}
