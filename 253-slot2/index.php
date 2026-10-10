<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planning Event System</title>
</head>
<body>
    <form method="POST">
        Number of Items Sold Per Day: <br>
        <input type="number" name="items"><br>
        
        Number of Days: <br>
        <input type="number" name="days"><br>

        Target Number of Items: <br>
        <input type="number" name="target"><br>

        <input type="submit"><br>
    </form>
    <hr><br>

    <?php 
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            //step1 : Form data receive
            $items=intval($_POST['items']);
            $days=intval($_POST['days']);
            $target=intval($_POST['target']);

            //step2 : Total items sold
            $totalSold=$items*$days;

            //step 3 : Performance Classify
            if($totalSold>=500){
                $performance="Excellent";
            }elseif($totalSold>=300 && $totalSold<500){
                $performance="Good";
            }elseif($totalSold>=150 && $totalSold<300){
                $performance="Average";
            }else{
                $performance="Poor";
            }

            //step4: Target comparison
            $diff=abs($totalSold-$target);

            if($totalSold==$target){
                $result="Target met exactly (0 difference)";
            }elseif($totalSold>$target){
                $result="Above Target ". $diff;
            }else{
                $result="Blew target by ". $diff;
            }

            //step 5 : print the table
            echo "<table border='1' cellpadding='8' cellspacing='0'>";
            echo "<tr>
                    <th colspan='3'>Sample Input(Taken using html form</th>
                    <th colspan='3'>Sample Output (printed using php code)</th>
                  </tr>";
            echo  "<tr>
                    <th>Items Sold</th>
                    <th>Number of Days</th>
                    <th>Target</th>
                    <th>Total Items</th>
                    <th>Performance</th>
                    <th>Result</th>
                  </tr>";
            echo "<tr>
                    <td>{$items}</td>
                    <td>{$days}</td>
                    <td>{$target}</td>
                    <td>{$totalSold}</td>
                    <td>{$performance}</td>
                    <td>{$result}</td>
                 </tr>";
            echo "</table>";
        }
     ?>
</body>
</html>