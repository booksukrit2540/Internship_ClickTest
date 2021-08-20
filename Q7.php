<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question 7</title>
</head>
<body>
    <?php 
        error_reporting(0);

        echo "<form method=get>";
        echo "input = <input type=text name=time />";
        echo " ผลลัพธ์: ";
        $time = $_GET['time'];
        $hour = (int)($time/3600);
        $time = $time%3600;
        $min = (int)($time/60);
        $time = $time%60;
        $sec = $time;
        if($hour<10){
            echo "0".$hour.":";
        }else echo $hour.":";
        if($min<10){
            echo "0".$min.":";
        }else echo $min.":";
        if($sec<10){
            echo "0".$sec;
        }else echo $sec;
        echo "</form>";
    ?>
</body>
</html>