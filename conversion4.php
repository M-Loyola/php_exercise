<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo '<link href="assets\css\index.css" rel="stylesheet" type="text/css" />'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Conversion Page</title>
</head>
<body>

<div class="navBar">
    <a href="index.php">Home</a>
    <a class="active" href="conversion.php">Conversion</a>
    <a href="grade_loop.php">Grade & Loop</a>
    <h1 style="float:right; padding-right:5%;"><?php echo"Loyola Pre-Summative 2"?></h1>
</div>
<!--Imperial -> Metric Conversions-->
<div class="container">
    <div class="in_container">
        <div style="padding-top:2em;">
            <div class="navBar" style="width:fit-content;position:inherit;">
                <a href="conversion.php">Metric Conversions</a>
                <a href="conversion2.php">Imperial Conversions</a>
                <a href="conversion3.php">Metric -> Imperial Conversions</a>
                <a class="active" href="conversion4.php">Imperial -> Metric Conversions</a>
            </div>
        </div>
        <form style="padding-top:5em;">
            <input type="number" id="num1" name="num1">
            <p>to</p>
            <h1 id="num2"></h1>
        </form><br>
        <div class="dropdown">
            <button class="dropbtn">Convert</button>
            <div class="dropdown-content">
                <a onclick="in_cm()">in to cm</a>
                <a onclick="ft_cm()">ft to cm</a>
                <a onclick="yd_cm()">yd to cm</a>
                <a onclick="yd_m()">yd to m</a>
                <a onclick="mi_m()">mi to m</a>
                <a onclick="mi_km()">mi to km</a>
            </div>
        </div>
    </div>
    <script>
        function in_cm(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*2.54;
            document.getElementById("num2").innerHTML = "in to cm: "+ ans + "cm";
        }
        function ft_cm(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*30.48;
            document.getElementById("num2").innerHTML = "ft to cm: "+ ans + "cm";
        }
        function yd_cm(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*91.44;
            document.getElementById("num2").innerHTML = "yd to cm: "+ ans + "cm";
        }
        function yd_m(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*0.9144;
            document.getElementById("num2").innerHTML = "yd to m: "+ ans + "m";
        }
        function mi_m(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*1609.344;
            document.getElementById("num2").innerHTML = "mi to m: "+ ans + "m";
        }
        function mi_km(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*1.609344;
            document.getElementById("num2").innerHTML = "mi to km: "+ ans + "km";
        }
    </script>
</div> 

</body>
</html>