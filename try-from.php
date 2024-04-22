<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <form action="./teacher/code.php" method="POST">
          <label for="stillServing">Have you done any Activities?</label>
          <input type="radio" name="stillServing" value="yes" onclick="showInput3()">yes
          <input type="radio" name="stillServing" value="no" onclick="hideInput3()">no<br>

          <div id="Activity" style="display: none;">
               <label for="activity">Name of the Activity:</label>
               <input type="text" id="activity" name="activity" class="form-control"><br><br>

               <label for="award">Name of the Award/Recognition:</label>
               <input type="text" id="award" name="award" class="form-control"><br><br>

               <label for="awardingBody">Name of the Awarding Government/Government Recognized Bodies:</label>
               <input type="text" id="awardingBody" name="awardingBody" class="form-control"><br><br>

               <label for="year">Year of Award:</label>
               <input type="number" id="year" name="year" class="form-control"><br><br>
               <button type="submit" name="try">try form</button>
     </form>


<?php
session_start();
require 'dbcon.php';


// Assuming you have already established a database connection

if (isset($_POST['yesno'])) {
    // Retrieve form data from POST
    $stillServing = $_POST['stillServing'];
    $activity = isset($_POST['activity']) ? $_POST['activity'] : '';
    $award = isset($_POST['award']) ? $_POST['award'] : '';
    $awardingBody = isset($_POST['awardingBody']) ? $_POST['awardingBody'] : '';
    $year = isset($_POST['year']) ? $_POST['year'] : '';

    // Check if the user has indicated they have done any activities
    if ($stillServing == 'yes') {
        // Construct the SQL insert query
        $sql = "INSERT INTO your_table_name (stillServing, activity, award, awardingBody, year) VALUES ('$stillServing', '$activity', '$award', '$awardingBody', '$year')";

        // Execute the SQL query
        $result = mysqli_query($conn, $sql);

        // Check if the insertion was successful
        if ($result) {
            echo "Data inserted successfully.";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    } else {
        echo "No activities to insert.";
    }
} else {
    echo "Invalid request method.";
}
?>

<script>
    function showInput3() {
        document.getElementById('Activity').style.display = 'block';
    }

    function hideInput3() {
        document.getElementById('Activity').style.display = 'none';
    }
</script>

</body>

</html>