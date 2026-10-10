<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Academic Progress Tracker</title>
</head>
<body>

    <form method="POST">
        Credits Per Course: <br>
        <input type="number" name="credit" required> <br>

        Courses Completed:<br>
        <input type="number" name="courses" required><br>

        Target Credits:<br>
        <input type="number" name="target" required> <br>
   
        <input type="submit" value="Calculate">
    </form> 
    <hr>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $credit = intval($_POST['credit']);
        $courses = intval($_POST['courses']);
        $target = intval($_POST['target']);

        $total = $credit * $courses;

        // Progress Classification
        if ($total >= 120) {
            $progress = "Excellent";
        } elseif ($total >= 90) {
            $progress = "Good";
        } elseif ($total >= 60) {
            $progress = "Average";
        } else {
            $progress = "Poor";
        }

        // Target Comparison
        $diff = abs($total - $target);
        if ($total == $target) {
            $result = "Target met exactly (0 difference)";
        } elseif ($total > $target) {
            $result = "Above target by " . $diff;
        } else {
            $result = "Below target by " . $diff;
        }

        // Exact UIU Sample Output Table
        echo "<h3>Sample Output (print on PHP file)</h3>";
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