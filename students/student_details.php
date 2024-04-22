<?php
session_start();
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- DataTables CSS for Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

    <!-- table script link -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <?php
    include('includes/header1.php');
    ?>

</head>

<body>
    <div class="wrapper">
        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand">
                <!-- Button for sidebar toggle -->
                <a href="../criteria/criteria.php" class="btn btn-2xl mx-5 mt-4"><i class="fa-regular fa-circle-left fa-2xl" style="color: #fff;"></i></a>
            </nav>
            <main class="content ">
                <div class="container mb-5">
                    <?php include('message.php'); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">&emsp;<b>Students Records</b>
                                        <a href="../students/student-create.php" class="btn btn-primary btn-sm pull-right"><i class="fa-solid fa-plus fa-xl"></i></a>
                                        <!-- <a href="../criteria/criteria.php" class="btn btn-primary btn-sm pull-right"><i class="fa-regular fa-circle-left fa-xl"></i></a> -->
                                    </h4>
                                </div>
                                <div class="card-body m-5 mt-1">
                                    <table id="example" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
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
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "SELECT * FROM studentform";
                                            $query_run = mysqli_query($conn, $query);

                                            if (mysqli_num_rows($query_run) > 0) {
                                                foreach ($query_run as $student) {
                                            ?>
                                                    <tr>
                                                        <td>
                                                            <?= $student['id']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $student['studentName']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $student['gender']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $student['enrolmentID']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $student['programmeCode']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $student['programmeName']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $student['courseName']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $student['courseCode']; ?>
                                                        </td>
                                                        <td>
                                                            <a href="student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-xs"><i class="fas fa-desktop "></i></a>
                                                            <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-xs"><i class="fas fa-edit"></i></a>

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
            </main>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>