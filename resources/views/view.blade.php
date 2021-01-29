@php
if($data['weather'] == "Haze"){
$img = "https://www.accuweather.com/images/weathericons/4.svg";
}
if($data['weather'] == "Clouds"){
    $img = "https://www.accuweather.com/images/weathericons/07.svg";
}
if($data['weather'] == "Clear"){
    $img = "https://www.accuweather.com/images/weathericons/33.svg";
}
if($data['weather'] == ""){
    $img = "";
}
if($data['weather'] == "Smoke"){
    $img = "https://www.accuweather.com/images/weathericons/08.svg";
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
        @if($notfound)
        <div class="col-sm-12">
            <div class="panel panel-default col-sm-4">
                <div class="panel-heading">{{$city}} | Temp <b>{{$data['temp']}}</b> <a herf="#" id="edit1">Edit</a></div>

                <div class="panel-body">

                    <img src={{$img}}>
                    <p><b>Weather : </b> {{$data['weather']}}</p>
                    <p><b>Humidity:</b>{{$data['humidity']}}</p>
                </div>
            </div>
            

        </div>
       
        @else
        <p> No city found, that name please check spelling</p>
        @endif


        
            <a href="{{url('/')}}">Go back to Home</a>
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