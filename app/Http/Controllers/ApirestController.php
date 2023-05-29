<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\BrowsertravelModel;

class apirestController extends Controller
{
    public function index(){

        return view('humedad');
    }

    public function search(Request $request){

        $data = $request->validate([
            'city' => 'required'
        ]);

        $city = $data['city'];
        $key = "61994af0f0ffc90017b8d69a4cb79096";

        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=".$city."&lang=es"."&appid=".$key)
            ->json();
        if($response['cod'] == "200") {
            $name = $response['name'];
            $main = $response['weather'][0]['main'];
            $weather = $response['weather'][0]['description'];
            $humidity = $response['main']['humidity'];
            $temp = $response['main']['temp'] - 273;
            $country = $response['sys']['country'];
            $lon = $response['coord']['lon'];
            $lat = $response['coord']['lat'];
            $icon = $response['weather'][0]['icon'];
            $ok = $response['cod'];
            $icono = 'http://openweathermap.org/img/w/'.$icon.'.png';

            //save database
            $savehumidity = new BrowsertravelModel;
            $savehumidity -> name = $city;
            $savehumidity -> main_weather = $main;
            $savehumidity -> description_weather = $weather;
            $savehumidity -> humidity = $humidity;
            $savehumidity -> temp = $temp;
            $savehumidity -> country = $country;
            $savehumidity -> logitud = $lon;
            $savehumidity -> latitud = $lat;
            $savehumidity -> cod = $ok;
            $savehumidity -> save();

        return view('humedad', compact('weather', 'main', 'temp', 'humidity' ,'lon', 'lat' , 'name', 'country','icono', 'ok'));
        } else {
            $notFound = true;
            return view('humedad', compact('notFound'));
        }
    }
}
