<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaisController extends Controller
{
    public function index() {
        $response = Http::get('https://api-territorial.apps.madlab.com.do/api/paises');
        $data = $response->json();
        return view('paises', ['data' => $data['data']]);
    }

    public function show($id) {
        $response = Http::get('https://api-territorial.apps.madlab.com.do/api/paises/'.$id.'/show');
        $data = $response->json();
        return view('pais', ['data' => $data]);
    }
}
