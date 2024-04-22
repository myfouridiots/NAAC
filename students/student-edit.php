<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


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

    <title>Student Create</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Edit
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $student_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM studentform WHERE id='$student_id' ";
                            $query_run = mysqli_query($conn, $query);
                            //var_dump($query_run);

                            if (mysqli_num_rows($query_run) > 0) {
                                $student = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        <label>Name of the Student:</label>
                                        <input type="text" id="studentName" name="studentName" value="<?= $student['studentName']; ?>" required class="form-control">

                                    </div>


                                    <div class="mb-3">
                                        <label for="gender">Gender:</label>
                                        <input type="radio" id="male" name="gender" value="Male" <?php echo ($student['gender'] == 'Male') ? 'checked' : ''; ?>> Male
                                        <input type="radio" id="female" name="gender" value="Female" <?php echo ($student['gender'] == 'Female') ? 'checked' : ''; ?>> Female
                                        <input type="radio" id="other" name="gender" value="Other" <?php echo ($student['gender'] == 'Other') ? 'checked' : ''; ?>> Other
                                    </div>

                                    <div class="mb-3">
                                        <label for="category">Category:</label>
                                        <input type="text" id="category" name="category" value="<?= $student['category']; ?>" required class="form-control">
                                    </div>


                                    <div class="mb-3">
                                        <label for="stateDomicile">State of Domicile:</label>
                                        <input type="text" id="stateDomicile" name="stateDomicile" required value="<?= $student['stateDomicile']; ?>" class="form-control">

                                    </div>

                                    <div class="mb-3">
                                        <label for="nationality">Nationality (if other than Indian):</label>
                                        <input type="text" id="nationality" name="nationality" value="<?= $student['nationality']; ?>" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email">Email ID:</label>
                                        <input type="text" id="email" name="email" value="<?= $student['email']; ?>" class="form-control" required>
                                    </div>

                                    <div class="mb-3">

                                        <label for="enrolmentID">Student Unique Enrolment ID:</label>
                                        <input type="number" id="enrolmentID" name="enrolmentID" value="<?= $student['enrolmentID']; ?>" class="form-control" required>
                                    </div>

                                    <div class="mb-3">

                                        <label for="mobileNumber">Mobile Number:</label>
                                        <input type="number" id="mobileNumber" name="mobileNumber" value="<?= $student['mobileNumber']; ?>" class="form-control" required>
                                    </div>

                                    <div class="mb-3">

                                        <label for="joiningYear">Year of Joining:</label>
                                        <input type="number" id="joiningYear" name="joiningYear" value="<?= $student['joiningYear']; ?>" class="form-control" required>
                                    </div>

                                    <div class="mb-3">

                                        <label for="programmeCode">Programme Code:</label>
                                        <input type="text" id="programmeCode" name="programmeCode" value="<?= $student['programmeCode']; ?>" class="form-control" required>
                                    </div>

                                    <div class="mb-3">

                                        <label for="programmeName">Programme Name:</label>
                                        <input type="text" id="programmeName" name="programmeName" value="<?= $student['programmeName']; ?>" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="yearOfIntroduction">Year of Introduction:</label>
                                        <input type="number" id="yearOfIntroduction" name="yearOfIntroduction" value="<?= $student['yearOfIntroduction']; ?>" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="implementationStatus">Status of Implementation of CBCS/ECS:</label>

                                        <label>
                                            <input type="radio" id="implementationStatusYes" name="implementationStatus" value="Yes" <?php echo ($student['implementationStatus'] == 'Yes') ? 'checked' : ''; ?>>
                                            Yes
                                        </label>

                                        <label>
                                            <input type="radio" id="implementationStatusNo" name="implementationStatus" value="No" <?php echo ($student['implementationStatus'] == 'No') ? 'checked' : ''; ?>>
                                            No
                                        </label>
                                    </div>



                                    <div class="mb-3">

                                        <label for="yearOfRevision">Year of Revision (if any):</label>
                                        <input type="number" id="yearOfRevision" name="yearOfRevision" value="<?= $student['yearOfRevision']; ?>" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="percentageContentChange">Percentage of Content Added or Replaced:</label>
                                        <input type="number" id="percentageContentChange" name="percentageContentChange" value="<?= $student['percentageContentChange']; ?>" class="form-control" required>
                                    </div>

                                    <div class="mb-3">

                                        <label for="courseName">Name of the Course:</label>
                                        <input type="text" id="courseName" name="courseName" value="<?= $student['courseName']; ?>" class="form-control" required>
                                    </div>

                                    <div class="mb-3">

                                        <label for="courseCode">Course Code:</label>
                                        <input type="text" id="courseCode" name="courseCode" value="<?= $student['courseCode']; ?>" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="courseContent">Activities/Content with direct bearing on Employability/Entrepreneurship/Skill Development:</label>
                                        <textarea id="courseContent" name="courseContent" rows="4" class="form-control" required><?= $student['courseContent']; ?></textarea>
                                    </div>


                                    <!-- <?php
                                    // Debugging
                                    //var_dump($student['studentProjects']);
                                    ?> -->

                                    <div class="mb-3">
                                        <label for="studentProjects">Name of Students Undertaking Field Projects/Internships/Student Projects:</label>
                                        <textarea id="studentProjects" name="studentProjects" rows="4" class="form-control" required><?= $student['studentProjects']; ?></textarea>
                                    </div>


                                    <div class="mb-3">
                                        <label for="documentLink">Link to the Relevant Document:</label>
                                        <input type="text" id="documentLink" name="documentLink" value="<?= $student['documentLink']; ?>" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update Student
                                        </button>
                                    </div>

                                </form>
                        <?php
                            } else {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>