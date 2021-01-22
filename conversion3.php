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
<!--Metric -> Imperial Conversions-->
<div class="container">
    <div class="in_container">
        <div style="padding-top:2em;">
            <div class="navBar" style="width:fit-content;position:inherit;">
                <a href="conversion.php">Metric Conversions</a>
                <a href="conversion2.php">Imperial Conversions</a>
                <a class="active" href="conversion3.php">Metric -> Imperial Conversions</a>
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
                <a onclick="mm_in()">mm to in</a>
                <a onclick="cm_in()">cm to in</a>
                <a onclick="m_in()">m to in</a>
                <a onclick="m_ft()">m to ft</a>
                <a onclick="m_yd()">m to yd</a>
                <a onclick="km_yd()">km to yd</a>
                <a onclick="km_mi()">km to mi</a>
            </div>
        </div>
    </div>
    <script>
        function mm_in(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*0.03937;
            document.getElementById("num2").innerHTML = "mm to in: "+ ans + "in";
        }
        function cm_in(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*0.39370;
            document.getElementById("num2").innerHTML = "cm to in: "+ ans + "in";
        }
        function m_in(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*39.37008;
            document.getElementById("num2").innerHTML = "m to in: "+ ans + "in";
        }
        function m_ft(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*3.28084;
            document.getElementById("num2").innerHTML = "m to ft: "+ ans + "ft";
        }
        function m_yd(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*1.09361;
            document.getElementById("num2").innerHTML = "m to yd: "+ ans + "yd";
        }
        function km_yd(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*1093.6133;
            document.getElementById("num2").innerHTML = "km to yd: "+ ans + "yd";
        }
        function km_mi(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*0.62137;
            document.getElementById("num2").innerHTML = "km to mi: "+ ans + "mi";
        }
    </script>
</div> 

</body>
</html>