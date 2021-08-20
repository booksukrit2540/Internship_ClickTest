<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question 9</title>
</head>
<body>
    <?php 
        error_reporting(0);

        echo "input: "."<form method=post action=Q9.php>";
        echo "<input type=text name=string />";
        echo " <input type=submit value=Submit />";
        echo "</form>";
        $string = $_POST['string'];
        $revert = "";
        $txt = "";
        for($i = 0; $i < strlen($string); $i++) {
            if($string[$i] == " ") {
                $revert .= $txt . " ";
                $txt = "";
                continue;
            }
            $txt = $string[$i] . $txt;    
        }
        $revert .= $txt;
        echo "ผลลัพธ์<br>";
        echo $revert;
    ?>
</body>
</html>