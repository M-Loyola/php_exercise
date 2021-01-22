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
<!--Metric Conversions-->
<div class="container">
    <div class="in_container">
        <div style="padding-top:2em;">
            <div class="navBar" style="width:fit-content;position:inherit;">
                <a class="active" href="conversion.php">Metric Conversions</a>
                <a href="conversion2.php">Imperial Conversions</a>
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
                <a onclick="cm_mm()">cm to mm</a>
                <a onclick="dm_cm()">dm to cm</a>
                <a onclick="m_cm()">m to cm</a>
                <a onclick="km_m()">km to m</a>
            </div>
        </div>
    </div>
    <script>
        function cm_mm(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*10;
            document.getElementById("num2").innerHTML = "cm to mm: "+ ans + "mm";
        }
        function dm_cm(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*10;
            document.getElementById("num2").innerHTML = "dm to cm: "+ ans + "cm";
        }
        function m_cm(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*100;
            document.getElementById("num2").innerHTML = "m to cm: "+ ans + "cm";
        }
        function km_m(){
            var num1 = document.getElementById("num1").value;
            var ans = num1*1000;
            document.getElementById("num2").innerHTML = "km to m: "+ ans + "m";
        }
    </script>
</div> 

</body>
</html>