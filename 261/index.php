<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Academic Progress Tracker</title>
</head>
<body>
   <?php
      echo "<h1>Solving Question 2</h1>";
   ?>
   <br>

   <!-- type1 -->

   <form method="POST">
      Credits Per Course: <br>
      <input type="number" name="credit" required> <br>

      Course Completed:<br>
      <input type="number" name="courses" required><br>

      Target credits:<br>
      <input type="number" name="target" required> <br>
      
      <input type="submit" value="calculate"> 
   <form>

   <!-- <hr><br>
   <?php 
   if($_SERVER["REQUEST_METHOD"]=="POST"){
      
      $credit=intval($_POST['credit']);
      $courses=intval($_POST['courses']);
      $target=intval($_POST['target']);

      $total=$credit*$courses;

      echo "<h3>Academic Progress Result</h3>";
      echo "Total credits: ". $total ."<br>";


      if($total>=120){
         echo "Progress Category: Excellent<br>";
      }elseif($total>=90 && $total<120){
          echo"Progress Category: Good<br>";
      }elseif($total>=60 && $total<90){
         echo"Progress Category: Average<br>";;
      }else{
          echo"Progress Category: Poor<br>";
      }

      $diff=abs($total-$target);
      if($total==$target){
         echo "Result : Target met exactly (0) difference)<br>";
      }elseif($total>$target){
         echo "Result: Above target by".$diff."<br";
      }else{
         echo "Result: Blew target by ".$diff."<br";
      }
   }
    ?>
   <hr><br> -->

   <!-- exact output -->
    <hr>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $credit = intval($_POST['credit']);
        $courses = intval($_POST['courses']);
        $target = intval($_POST['target']);

        $total = $credit * $courses;

        if ($total >= 120) {
            $progress = "Excellent";
        } elseif ($total >= 90) {
            $progress = "Good";
        } elseif ($total >= 60) {
            $progress = "Average";
        } else {
            $progress = "Poor";
        }

        $diff = abs($total - $target);
        if ($total == $target) {
            $result = "Target met exactly (0 difference)";
        } elseif ($total > $target) {
            $result = "Above target by " . $diff;
        } else {
            $result = "Below target by " . $diff;
        }

        echo "<h3>Sample Output</h3>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr>
                <th>Credits/Course</th>
                <th>Courses Completed</th>
                <th>Target</th>
                <th>Total Credits</th>
                <th>Progress</th>
                <th>Result</th>
              </tr>";
        echo "<tr>
                <td>{$credit}</td>
                <td>{$courses}</td>
                <td>{$target}</td>
                <td>{$total}</td>
                <td>{$progress}</td>
                <td>{$result}</td>
              </tr>";
        echo "</table>";
    }
    ?>

</body>
</html>
