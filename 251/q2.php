<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form method="POST" action="">
      Items Sold Per Day: <br>
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
      //step1: take input value
      $items=intval($_POST['items']);
      $days=intval($_POST['days']);
      $target=intval($_POST['target']);

      //core calculation
      $totalSold=$items*$days;

      // step3 :Performance Classification
        if ($totalSold >= 500) {
            $performance = "Excellent";
        } elseif ($totalSold >= 300) {
            $performance = "Good";
        } elseif ($totalSold >= 150) {
            $performance = "Average";
        } else {
            $performance = "Poor";
        }
      
        //step4: target classify
        $diff=abs($totalSold-$target);
        if ($totalSold == $target) {
            $result = "Target met exactly (0 difference)";
        } elseif ($totalSold > $target) {
            $result = "Above target by " . $diff;
        } else {
            $result = "Below target by " . $diff;
        }

        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr>
                <th colspan='3'>Sample Input (taken using html form)</th>
                <th colspan='3'>Sample Output (printed using PHP code)</th>
              </tr>";
        echo "<tr>
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