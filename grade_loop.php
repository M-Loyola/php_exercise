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
    <a href="conversion.php">Conversion</a>
    <a class="active" href="grade_loop.php">Grade & Loop</a>
    <h1 style="float:right; padding-right:5%;"><?php echo"Loyola Pre-Summative 2"?></h1>
</div>
<!--grade portion-->
<div class="intro">
    <div class="in_intro">
        <form action="grade_loop.php" method="get"> 
            <input type="text" name="fname" placeholder="First Name" /> 
            <input type="text" name="mi" placeholder="MI." /> 
            <input type="text" name="lname" placeholder="Last Name" /> 
            <input type="number" name="grade" placeholder="Grade(0-100)" /> <br><br>
            <input class="clearBtn" type="submit" name="submit" /> 
        </form> 
        <?php
            if ( isset( $_GET['submit'] ) ) { 
                $rank = ['A','A-','B+','B','B-','C+','C','C-','D+','D','D-','F'];
                $ranktoInput = "";
                //element's name attributes value as key ($_GET)
                $fname = $_GET['fname']; //firstname
                $mi = $_GET['mi']; //middle initial
                $lname = $_GET['lname']; //lastname
                $grade = $_GET['grade']; //grade
                //conditional statements
                if($grade >= 93){
                    $ranktoInput = $rank[0]; //A
                } else if ($grade >=90){
                    $ranktoInput = $rank[1]; //A-
                } else if ($grade >=87){
                    $ranktoInput = $rank[2]; //B+
                } else if ($grade >=83){
                    $ranktoInput = $rank[3]; //B
                } else if ($grade >=80){
                    $ranktoInput = $rank[4]; //B-
                } else if ($grade >=77){
                    $ranktoInput = $rank[5]; //C+
                } else if ($grade >=73){
                    $ranktoInput = $rank[6]; //C
                } else if ($grade >=70){
                    $ranktoInput = $rank[7]; //C-
                } else if ($grade >=67){
                    $ranktoInput = $rank[8]; //D+
                } else if ($grade >=63){
                    $ranktoInput = $rank[9]; //D
                } else if ($grade >=60){
                    $ranktoInput = $rank[10]; //D-
                } else if ($grade < 60){
                    $ranktoInput = $rank[11]; //F
                }
                // results
                echo 'Name: '.$fname.' '.$mi.' '.$lname.'<br>';
                echo 'Rank: '.$ranktoInput.' Grade: '.$grade;
            }
        ?>
    </div>
</div>
<!--loop portion-->
<div class="intro" style="padding-top:0.0001em;">
    <div class="in_intro">
        <h1>Instruction: Using Looping Statements write a program which will give you all of the potential combinations of a two-digit decimal combination, printed in a comma delimited format :</h1>
        <?php 
            for($a=0; $a< 10; $a++)
            { 
              for($b=0; $b< 10; $b++)
                 {
                    echo $a.$b.", "; 
                 }
            }
            printf("\n");
        ?>
    </div>
</div>

</body>
</html>