@php
if($data1['weather'] == "Haze"){
    echo "true";
$img1 = "https://www.accuweather.com/images/weathericons/4.svg";
}
if($data1['weather'] == "Clouds"){
    $img1 = "https://www.accuweather.com/images/weathericons/07.svg";
}
if($data1['weather'] == "Clear"){
    $img1 = "https://www.accuweather.com/images/weathericons/33.svg";
}
if($data2['weather'] == "Haze"){
$img2 = "https://www.accuweather.com/images/weathericons/4.svg";
}
if($data2['weather'] == "Clouds"){
    $img2 = "https://www.accuweather.com/images/weathericons/07.svg";
}
if($data2['weather'] == "Clear"){
    $img2 = "https://www.accuweather.com/images/weathericons/33.svg";
}
if($data3['weather'] == "Haze"){
$img3 = "https://www.accuweather.com/images/weathericons/4.svg";
}
if($data3['weather'] == "Clouds"){
    $img3 = "https://www.accuweather.com/images/weathericons/07.svg";
}
if($data3['weather'] == "Clear"){
    $img3 = "https://www.accuweather.com/images/weathericons/33.svg";
}
if($data4['weather'] == "Haze"){
$img4 = "https://www.accuweather.com/images/weathericons/4.svg";
}
if($data4['weather'] == "Clouds"){
    $img4 = "https://www.accuweather.com/images/weathericons/07.svg";
}
if($data4['weather'] == "Clear"){
    $img4 = "https://www.accuweather.com/images/weathericons/33.svg";
}
if($data5['weather'] == "Haze"){
$img5 = "https://www.accuweather.com/images/weathericons/4.svg";
}
if($data5['weather'] == "Clouds"){
    $img5 = "https://www.accuweather.com/images/weathericons/07.svg";
}
if($data5['weather'] == "Clear"){
    $img5 = "https://www.accuweather.com/images/weathericons/33.svg";
}
if($data6['weather'] == "Haze"){
$img6 = "https://www.accuweather.com/images/weathericons/4.svg";
}
if($data6['weather'] == "Clouds"){
    $img6 = "https://www.accuweather.com/images/weathericons/07.svg";
}
if($data6['weather'] == "Clear"){
    $img6 = "https://www.accuweather.com/images/weathericons/33.svg";
}
if($data7['weather'] == "Haze"){
$img7 = "https://www.accuweather.com/images/weathericons/4.svg";
}
if($data7['weather'] == "Clouds"){
    $img7 = "https://www.accuweather.com/images/weathericons/07.svg";
}
if($data7['weather'] == "Clear"){
    $img7 = "https://www.accuweather.com/images/weathericons/33.svg";
}
if($data8['weather'] == "Haze"){
$img8 = "https://www.accuweather.com/images/weathericons/4.svg";
}
if($data8['weather'] == "Clouds"){
    $img8 = "https://www.accuweather.com/images/weathericons/07.svg";
}
if($data8['weather'] == "Clear"){
    $img8 = "https://www.accuweather.com/images/weathericons/33.svg";
}
if($data8['weather'] == "Smoke"){
    $img8 = "https://www.accuweather.com/images/weathericons/08.svg";
}
if($data9['weather'] == "Haze"){
$img9 = "https://www.accuweather.com/images/weathericons/4.svg";
}
if($data9['weather'] == "Clouds"){
    $img9 = "https://www.accuweather.com/images/weathericons/07.svg";
}
if($data9['weather'] == "Clear"){
    $img9 = "https://www.accuweather.com/images/weathericons/33.svg";
}
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="container">
    <br> 
    <br>
    <form action="{{url('city')}}" method="post">
            @csrf
            Enter city :
            <input type="text" name="city">
            <button type="submit">Submit</button>
        </form>
        <br>
        <br>
        <div class="col-sm-12">
            <div class="panel panel-default col-sm-4">
                <div class="panel-heading">New York | Temp <b>{{$data1['temp']}}</b> <a herf="#" id="edit1">Edit</a></div>

                <div class="panel-body">
                        
                    <img src={{$img1}}>
                    <p><b>Weather : </b> {{$data1['weather']}}</p>
                    <p><b>Humidity:</b>{{$data1['humidity']}}</p>
                </div>
            </div>
            <div class="panel panel-default col-sm-4">
                <div class="panel-heading">Hyderabad | Temp <b>{{$data2['temp']}}</b> <a herf="#" id="edit2">Edit</a></div>

                <div class="panel-body">
                        
                    <img src={{$img2}}>
                    <p><b>Weather : </b> {{$data2['weather']}}</p>
                    <p><b>Humidity:</b>{{$data2['humidity']}}</p>
                </div>
            </div>
            <div class="panel panel-default col-sm-4">
                <div class="panel-heading">Bangalore | Temp <b>{{$data3['temp']}}</b> <a herf="#" id="edit3">Edit</a></div>

                <div class="panel-body">
                        
                    <img src={{$img3}}>
                    <p><b>Weather : </b> {{$data3['weather']}}</p>
                    <p><b>Humidity:</b>{{$data3['humidity']}}</p>
                </div>
            </div>
            <div class="panel panel-default col-sm-4">
                <div class="panel-heading">Chittoor | Temp <b>{{$data4['temp']}}</b> <a herf="#" id="edit4">Edit</a></div>

                <div class="panel-body">
                        
                    <img src={{$img4}}>
                    <p><b>Weather : </b> {{$data4['weather']}}</p>
                    <p><b>Humidity:</b>{{$data4['humidity']}}</p>
                </div>
            </div>
            <div class="panel panel-default col-sm-4">
                <div class="panel-heading">Delhi | Temp <b>{{$data5['temp']}}</b> <a herf="#" id="edit5">Edit</a></div>

                <div class="panel-body">
                        
                    <img src={{$img5}}>
                    <p><b>Weather : </b> {{$data5['weather']}}</p>
                    <p><b>Humidity:</b>{{$data5['humidity']}}</p>
                </div>
            </div>
            <div class="panel panel-default col-sm-4">
                <div class="panel-heading">Jaipur | Temp <b>{{$data6['temp']}}</b> <a herf="#" id="edit6">Edit</a></div>

                <div class="panel-body">
                        
                    <img src={{$img6}}>
                    <p><b>Weather : </b> {{$data6['weather']}}</p>
                    <p><b>Humidity:</b>{{$data6['humidity']}}</p>
                </div>
            </div>
            <div class="panel panel-default col-sm-4">
                <div class="panel-heading">Kochi | Temp <b>{{$data7['temp']}}</b> <a herf="#" id="edit7">Edit</a></div>

                <div class="panel-body">
                        
                    <img src={{$img7}}>
                    <p><b>Weather : </b> {{$data7['weather']}}</p>
                    <p><b>Humidity:</b>{{$data7['humidity']}}</p>
                </div>
            </div>
            <div class="panel panel-default col-sm-4">
                <div class="panel-heading">Mumbai | Temp <b>{{$data8['temp']}}</b> <a herf="#" id="edit8">Edit</a></div>

                <div class="panel-body">
                        
                    <img src={{$img8}}>
                    <p><b>Weather : </b> {{$data8['weather']}}</p>
                    <p><b>Humidity:</b>{{$data8['humidity']}}</p>
                </div>
            </div>
            <div class="panel panel-default col-sm-4">
                <div class="panel-heading">Pune | Temp <b>{{$data9['temp']}}</b> <a herf="#" id="edit9">Edit</a></div>

                <div class="panel-body">
                        
                    <img src={{$img9}}>
                    <p><b>Weather : </b> {{$data9['weather']}}</p>
                    <p><b>Humidity:</b>{{$data9['humidity']}}</p>
                </div>
            </div>

        </div>

        

    </div>

</body>
<script>
    $(document).ready(function() {
        $('#edit1').on('click', function() {
            $('#edit1').html('<input type="text" id="city1" placeholder="enter city">');
            $('#city1').on('blur',function(){
                var data = $('#city1').val()
                $('#edit1').html(data);
            });

        });
    });
</script>

</html>
