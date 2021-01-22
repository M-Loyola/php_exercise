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
<!--Imperial Conversions-->
<div class="container">
    <div class="in_container">
        <div style="padding-top:2em;">
            <div class="navBar" style="width:fit-content;position:inherit;">
                <a href="conversion.php">Metric Conversions</a>
                <a class="active" href="conversion2.php">Imperial Conversions</a>
                <a href="conversion3.php">Metric -> Imperial Conversions</a>
                <a href="conversion4.php">Imperial -> Metric Conversions</a>
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
                <a onclick="ft_in()">ft to in</a>
                <a onclick="yd_ft()">yd to ft</a>
                <a onclick="ch_yd()">ch to yd</a>
                <a onclick="fur_yd()">fur to yd</a>
                <a onclick="mi_yd()">mi to yd</a>
            </div>
        </div>
    </div>
    <script>
        function ft_in(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*12;
            document.getElementById("num2").innerHTML = "ft to in: "+ ans + "in";
        }
        function yd_ft(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*3;
            document.getElementById("num2").innerHTML = "yd to ft: "+ ans + "ft";
        }
        function ch_yd(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*22;
            document.getElementById("num2").innerHTML = "ch to yd: "+ ans + "yd";
        }
        function fur_yd(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*220;
            document.getElementById("num2").innerHTML = "fur to yd: "+ ans + "yd";
        }
        function mi_yd(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*1760;
            document.getElementById("num2").innerHTML = "mi to yd: "+ ans + "yd";
        }
    </script>
</div> 

</body>
</html>