<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UIU Tech Fest Venue Budget</title>
</head>
<body>

    <form method="POST">
        Attendees: <br>
        <input type="number" name="attendees" required> <br>

        Cost Per Person: <br>
        <input type="number" name="cost" required> <br>

        Venue Capacity: <br>
        <input type="number" name="capacities" required> <br>

        <input type="submit"><br>
    </form>

    <hr><br>

    <?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //step1 : input receive
        $attendees=intval($_POST["attendees"]);
        $cost=intval($_POST["cost"]);
        $capacity=intval($_POST["capacities"]);

        //step2 : Core calculation
        $totalVenue=ceil($attendees/$capacity);
        $emptySeat=($totalVenue*$capacity)-$attendees;
        $wastedMoney=$emptySeat*$cost;

        //step3 : Print the output
        echo "<h3>Sample output</h3><br>";
        echo "<table border='1' cellpadding='8' cellspacing='0>' ";
        echo "<tr>
                <th>Attendees</th>
                <th>Cost Per Person</th>
                <th>Venue Capacity</th>
                <th>Total Venues</th>
                <th>Empty Seats</th>
                <th>Wasted Money(BDT)</th>
            </tr>";
        echo "<tr> 
                <td>{$attendees}</td>
                <td>{$cost}</td>
                <td>{$capacity}</td>
                <td>{$totalVenue}</td>
                <td>{$emptySeat}</td>
                <td>" .number_format($wastedMoney)."</td>
             </tr>";
        echo" </table>";
    }
    ?>

</body>
</html>