<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather Api</title>
    <link rel="stylesheet" href="./assets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome.min.css">
    <style type="text/css">
        input{
            background: none;
            border:none;
            font-size: 2em;
            color: white;       
            width: 200px;
            padding: 10px; 
        }
        button{
            background: none;
            border:none;
            font-size: 2em;
            color: white;  
            opacity: 0.2;
            padding: 10px; 
            transition: 1s;
        }
        button:hover{
            opacity: 1;
            transition: 1s;
        }
    </style>
</head>
<body>
<?php if(isset($_GET["c"])){
    if ($_GET["c"]=="LocGeo") {
        //depends location geo
        ?>
    <div class="container">
        <div class="weather-box">
            <div class="row1">
                <h2 class="weather-location"></h2>
                <canvas class="weatherType" id="icon1" width="128" height="128"></canvas>
            </div>
            <div class="row2">
                <h1 class="temp"></h1>
                <span class="temp-type">°C</span>
            </div>
            <h2 class="weather-description"></h2>
            <p class="made-by">Pottsed.</p>
        </div>

    </div>
    <script src="./assets/js/skycons.js"></script>
    <script src="./assets/js/jquery-3.2.1.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>
<?php
    }else{
        //input result
?>
    <script type="text/javascript">
        var city = "<?php echo $_GET['c'];?>";
    </script>
    <div class="container">
        <div class="weather-box">
            <div class="row1">
                <h3 class="weather-location"><?php echo $_GET["c"]; ?></h3>
                <canvas class="weatherType" id="icon1" width="128" height="128"></canvas>
            </div>
            <div class="row2">
                <h1 class="temp"></h1>
                <span class="temp-type">°C</span>
            </div>
            <h2 class="weather-description"></h2>
            <p class="made-by">Pottsed.</p>
        </div>
    </div>
    <script src="./assets/js/skycons.js"></script>
    <script src="./assets/js/jquery-3.2.1.min.js"></script>
    <script src="./main.js"></script>
</body>
</html>
<?php
}}
else{
    //unfilled input
    ?>
    <div class="container">
        <div class="weather-box">
            <div class="row1">
                <h2 class="weather-location">Fill your city</h2>
                <form method="GET">
                    <input type="text" name="c" required>
                    <button type="submit">Go</button>
                </form>
            </div>
            <div class="row2">
                <h1 class="temp">or &nbsp;&nbsp;</h1>
                <a class="temp-type" href="?c=LocGeo">Detect location</a>
            </div>
            <h2 class="weather-description"></h2>
            <p class="made-by">Pottsed.</p>
        </div>
    </div>
</body>
</html>
<?php
}
?>