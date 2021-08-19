<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 8</title>
</head>
<body>
    <?php 
        function calculatechange(){
            echo "<form method=get action=Q8.php>";
            echo "input = <input type=text name=price />";
            echo " <input type=submit value=Submit />";
            echo "</form>";
            $price = $_GET['price'];
            $money = 1000;
            $change = $money-$price;
            $space = "&nbsp;&nbsp;&nbsp;&nbsp;";
            echo "ผลลัพธ์<br>";
            echo "$space จำนวนเงินทอน ".$change." บาท";
            $b500 = (int)($change/500);
            $change = $change%500;
            $b100 = (int)($change/100);
            $change = $change%100;
            $b50 = (int)($change/50);
            $change = $change%50;
            $b20 = (int)($change/20);
            $change = $change%20;
            $c10 = (int)($change/10);
            $change = $change%10;
            $c5 = (int)($change/5);
            $change = $change%5;
            $c1 = (int)($change/1);
            $change = $change%1;
            if($b500!=0){
                echo "<br>$space ธนบัตร 500 บาท ".$b500." ใบ";
            }else echo "";
            if($b100!=0){
                echo "<br>$space ธนบัตร 100 บาท ".$b100." ใบ";
            }else echo "";
            if($b50!=0){
                echo "<br>$space ธนบัตร 50 บาท ".$b50." ใบ";
            }else echo "";
            if($b20!=0){
                echo "<br>$space ธนบัตร 20 บาท ".$b20." ใบ";
            }else echo "";
            if($c10!=0){
                echo "<br>$space เหรียญ 10 บาท ".$c10." เหรียญ";
            }else echo "";
            if($c5!=0){
                echo "<br>$space เหรียญ 5 บาท ".$c5." เหรียญ";
            }else echo "";
            if($c1!=0){
                echo "<br>$space เหรียญ 1 บาท ".$c1." เหรียญ";
            }else echo "";
        }
    echo calculatechange();
    ?>
</body>
</html>