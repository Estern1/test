<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FormController extends Controller
{
    public function form()
    {
        $response = Http::get('https://restcountries.eu/rest/v2/all');
        if ($response->status() != 200) {
            $countries = [];
        } else {
            $countries = $response->json();
        }

        return view('form', compact('countries'));
    }

    public function getGender(Request $request)
    {
        $response = Http::get('https://api.genderize.io?name='. $request['name'] .'&country_id='. $request['country_id']);
        return $response->json();
    }
}
