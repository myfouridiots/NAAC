<?php
include('dbcon.php');
?>

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

</head>
<body>
    <div class="container">
        <div class="row header" style="text-align:center;color:green">
            <h3>Bootstrap table with pagination</h3>
        </div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <?php
                    $query = "SELECT id, courseCode, studentName, gender, courseName, programmeName, enrolmentID FROM studentform LIMIT 1";
                    $query_run = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($query_run);
                    foreach ($row as $key => $value) {
                        echo "<th>" . ucfirst($key) . "</th>";
                    }
                    ?>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT id, courseCode, studentName, gender, courseName, programmeName, enrolmentID FROM studentform";
                $query_run = mysqli_query($conn, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    while ($student = mysqli_fetch_assoc($query_run)) {
                ?>
                        <tr>
                            <?php
                            foreach ($student as $data) {
                                echo "<td>" . $data . "</td>";
                            }
                            ?>
                            <td>
                                <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-xs"><i class="fas fa-desktop "></i></a>
                                <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-xs"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='4'>No Record Found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>