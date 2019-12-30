$(document).ready(function () {
        
        console.log(city);
            var api = 'https://api.openweathermap.org/data/2.5/weather?q='+ city +'&appid=106b303e0ad7bd7415cac0e5e83ab569&units=metric';

            $.getJSON(api, function (res) {

                var celsius = res.main.temp;
                var farenheit = (celsius * 1.8) + 32;

                var location = res.name;

                if (location) {
                    $('.weather-location').html(location);
                }else{
                    $('.weather-location').html(res.message);
                }
                $('.temp').html(Math.floor(celsius));
                $('.weather-description').html(res.weather[0].description);
                $('.weatherType').attr('id', res.weather[0].main);
                $('.row2').on('click', function () {
                    if ($('.temp').html() == (Math.floor(celsius))) {
                        $('.temp').html(Math.floor(farenheit));
                        $('.temp-type').html('°F');

                    } else {
                        $('.temp').html(Math.floor(celsius));
                        $('.temp-type').html('°C');
                    }
                });


                //SETTING UP THE ICON 
                var icons = new Skycons({
                    "color": "white"
                });

                icons.set("Clear-day", Skycons.CLEAR_DAY);
                icons.set("Clear-night", Skycons.CLEAR_NIGHT);
                icons.set("Partly-cloudy-day", Skycons.PARTLY_CLOUDY_DAY);
                icons.set("Partly-cloudy-night", Skycons.PARTLY_CLOUDY_NIGHT);
                icons.set("Clouds", Skycons.CLOUDY);
                icons.set("Rain", Skycons.RAIN);
                icons.set("Sleet", Skycons.SLEET);
                icons.set("Snow", Skycons.SNOW);
                icons.set("Wind", Skycons.WIND);
                icons.set("Fog", Skycons.FOG);
                icons.play();

            });
});