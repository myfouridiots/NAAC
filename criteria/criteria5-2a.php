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
    include('../students/includes/header1.php');
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
                <div class=" mb-5">
                    <?php include('../teacher/message.php'); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center">&emsp;<b> Criteria 1-2 Students Records</b>
                                    <form method="post" action="../excel/Excel copy 30.php">
                                            <button type="submit" class="btn btn-success btn pull-right" name="export_excel"><i class="fas fa-download"></i></button>
                                        </form>
                                        <!-- <a href="../criteria/criteria.php" class="btn btn-primary btn-sm pull-right"><i class="fa-regular fa-circle-left fa-xl"></i></a> -->
                                    </h4>
                                </div>
                                <div class="card-body m-5 mt-1">
                                    <table id="example" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <?php
                                                $query = "SELECT teacher_id,year,studentName,programGraduated,payPackage FROM teacherform LIMIT 1";
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
                                            $query = "SELECT teacher_id,year,studentName,programGraduated,payPackage FROM teacherform";
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