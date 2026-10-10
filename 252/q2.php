<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <form method="POST" action="">
      Number of People Attendees: <br>
      <input type="number" name="attendees"> <br>

      Seat Capacity: <br>
      <input type="number" name="capacity"><br>

      Ticket Per Cost: <br>
      <input type="number" value="cost"><br>

      <input type="submit"><br>
   </form>
   <hr><br>
   <?php 
   function calculate($attendees,$capacity,$cost){
     
      //step 2: core calculation
      $totalScreen=ceil($attendees/$capacity);
      $emptySeats=($totalScreen*$capacity)-$attendees;
      $wasteMoney=($emptySeats*$cost);

      // step4: display the exact output
      echo "<table border='1' cellpadding='8' cellspacing='0'>";
      echo "<tr>
               <th colspan='3'>Sample Input(From Html Field)</th>
               <th colspan='3'>Sample Output(Print on the html file)</th>
            </tr>";
      echo "<tr>
               <th>Attendees</th>
               <th>Seat Capacity</th>
               <th>Ticket Price</th>
               <th>Total Screen</th>
               <th>Empty Seats</th>
               <th>Wasted Money</th>
            </tr>";
      echo "<tr>
               <td>{$attendees}</td>
               <td>{$capacity}</td>
               <td>{$cost}</td>
               <td>{$totalScreen}</td>
               <td>{$emptySeats}</td>
               <td>". number_format($wasteMoney) ."</td>
            </tr>";
      echo"</table>";

   }
   if($_SERVER["REQUEST_METHOD"]=="POST"){
      // step1: receive input value
      $attendees=intval($_POST['attendees']);
      $capacity=intval($_POST['capacity']);
      $cost=intval($_POST['cost']);

      calculate($attendees,$capacity,$cost);

   }
    ?>
</body>
</html>