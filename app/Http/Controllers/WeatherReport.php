<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherReport extends Controller
{
    public function index()
    {
        $city1 = "New York";
        $data1 = Http::get('https://api.openweathermap.org/data/2.5/weather?q=' . $city1 . '&appid=3e0ef952b309e68bd3f0b4e003182d00')->json();
        $weather1 = $data1['weather'][0]['main'];
        $humidity1 = $data1['main']['humidity'];
        $temp1 = $data1['main']['temp'] - 273.15;
        $data1['humidity'] = $humidity1;
        $data1['temp'] = $temp1;
        $data1['weather'] = $weather1;
        $city2 = "Hyderabad";
        $data2 = Http::get('https://api.openweathermap.org/data/2.5/weather?q=' . $city2 . '&appid=3e0ef952b309e68bd3f0b4e003182d00')->json();
        $weather2 = $data2['weather'][0]['main'];
        $humidity2 = $data2['main']['humidity'];
        $temp2 = $data2['main']['temp'] - 273.15;
        $data2['humidity'] = $humidity2;
        $data2['temp'] = $temp2;
        $data2['weather'] = $weather2;
        $city3 = "Bangalore";
        $data3 = Http::get('https://api.openweathermap.org/data/2.5/weather?q=' . $city3 . '&appid=3e0ef952b309e68bd3f0b4e003182d00')->json();
        $weather3 = $data3['weather'][0]['main'];
        $humidity3 = $data3['main']['humidity'];
        $temp3 = $data3['main']['temp'] - 273.15;
        $data3['humidity'] = $humidity3;
        $data3['temp'] = $temp3;
        $data3['weather'] = $weather3;
        $city4 = "Chennai";
        $data4 = Http::get('https://api.openweathermap.org/data/2.5/weather?q=' . $city4 . '&appid=3e0ef952b309e68bd3f0b4e003182d00')->json();
        $weather4 = $data4['weather'][0]['main'];
        $humidity4 = $data4['main']['humidity'];
        $temp4 = $data4['main']['temp'] - 273.15;
        $data4['humidity'] = $humidity4;
        $data4['temp'] = $temp4;
        $data4['weather'] = $weather4;
        $city5 = "Delhi";
        $data5 = Http::get('https://api.openweathermap.org/data/2.5/weather?q=' . $city5 . '&appid=3e0ef952b309e68bd3f0b4e003182d00')->json();
        $weather5 = $data5['weather'][0]['main'];
        $humidity5 = $data5['main']['humidity'];
        $temp5 = $data5['main']['temp'] - 273.15;
        $data5['humidity'] = $humidity5;
        $data5['temp'] = $temp5;
        $data5['weather'] = $weather5;
        $city6 = "Jaipur";
        $data6 = Http::get('https://api.openweathermap.org/data/2.5/weather?q=' . $city6 . '&appid=3e0ef952b309e68bd3f0b4e003182d00')->json();
        $weather6 = $data6['weather'][0]['main'];
        $humidity6 = $data6['main']['humidity'];
        $temp6 = $data6['main']['temp'] - 273.15;
        $data6['humidity'] = $humidity6;
        $data6['temp'] = $temp6;
        $data6['weather'] = $weather6;
        $city7 = "Kochi";
        $data7 = Http::get('https://api.openweathermap.org/data/2.5/weather?q=' . $city7 . '&appid=3e0ef952b309e68bd3f0b4e003182d00')->json();
        $weather7 = $data7['weather'][0]['main'];
        $humidity7 = $data7['main']['humidity'];
        $temp7 = $data7['main']['temp'] - 273.15;
        $data7['humidity'] = $humidity7;
        $data7['temp'] = $temp7;
        $data7['weather'] = $weather7;
        $city8 = "Mumbai";
        $data8 = Http::get('https://api.openweathermap.org/data/2.5/weather?q=' . $city8 . '&appid=3e0ef952b309e68bd3f0b4e003182d00')->json();
        $weather8 = $data8['weather'][0]['main'];
        $humidity8 = $data8['main']['humidity'];
        $temp8 = $data8['main']['temp'] - 273.15;
        $data8['humidity'] = $humidity8;
        $data8['temp'] = $temp8;
        $data8['weather'] = $weather8;
        $city9 = "Pune";
        $data9 = Http::get('https://api.openweathermap.org/data/2.5/weather?q=' . $city9 . '&appid=3e0ef952b309e68bd3f0b4e003182d00')->json();
        $weather9 = $data9['weather'][0]['main'];
        $humidity9 = $data9['main']['humidity'];
        $temp9 = $data9['main']['temp'] - 273.15;
        $data9['humidity'] = $humidity9;
        $data9['temp'] = $temp9;
        $data9['weather'] = $weather9;
        return view('index', compact('data1', 'data2','data3','data4','data5','data6','data7','data8','data9'));
    }
    public function city(Request $request)
    {
        $city = $request->city;
        //dd($city);
        $data = Http::get('https://api.openweathermap.org/data/2.5/weather?q=' . $city . '&appid=3e0ef952b309e68bd3f0b4e003182d00')->json();
        // dd($data['cod']);
        if($data['cod'] == 404 || $data['cod'] == 400){
            $data['humidity'] ="";
            $data['temp'] = "";
            $data['weather'] ="";
            $notfound = false;
            return view('view', compact('data', 'city','notfound'));

        }else{
            $weather = $data['weather'][0]['main'];

            $humidity = $data['main']['humidity'];
            $temp = $data['main']['temp'] - 273.15;
            $data['humidity'] = $humidity;
            $data['temp'] = $temp;
            $data['weather'] = $weather;
            $notfound = true;
            return view('view', compact('data', 'city','notfound'));
            
            
            
        }
       
        
        
    }
}
