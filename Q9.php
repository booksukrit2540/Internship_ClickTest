<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 9</title>
</head>
<body>
    <?php 
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