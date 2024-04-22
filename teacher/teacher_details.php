<?php
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Teacher CRUD</title>
</head>

<body>

    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Teachers Details
                            <a href="teacher-create.php" class="btn btn-primary float-end">Add Teachers</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name of the Student</th>
                                    <th>Gender</th>
                                    <th>Student Unique Enrolment ID</th>
                                    <th>Year of Joining</th>
                                    <th>Programme Code</th>
                                    <th>Programme Name</th>
                                    <th>Course Code</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM teacherform";
                                $query_run = mysqli_query($conn, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $student) {
                                ?>
                                        <tr>
                                            <td><?= $student['id']; ?></td>
                                            <td><?= $student['studentName']; ?></td>
                                            <td><?= $student['gender']; ?></td>
                                            <td><?= $student['enrolmentID']; ?></td>
                                            <td><?= $student['programmeCode']; ?></td>
                                            <td><?= $student['programmeName']; ?></td>
                                            <td><?= $student['courseName']; ?></td>
                                            <td><?= $student['courseCode']; ?></td>

                                            <td>
                                                <a href="student-view.php?id=<? $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                <a href="student-edit.php?id=<? $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>

                                            </td>

                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>