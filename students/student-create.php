<?php
session_start();
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
    <style>
        .internship-fields {
            display: none;
        }
    </style>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <legend>Name of the Student:</legend>
                                <input type="text" id="studentName" name="studentName" required class="form-control">

                            </div>

                            <div class="mb-3">

                                <label for="gender">Gender:</label>
                                <input type="radio" id="gender" name="gender" value="Male"> Male
                                <input type="radio" id="gender" name="gender" value="Female"> Female
                                <input type="radio" id="gender" name="gender" value="Other"> Other

                            </div>

                            <div class="mb-3">
                                <label for="category">Category:</label>
                                <input type="text" id="category" name="category" required class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="stateDomicile">State of Domicile:</label>
                                <input type="text" id="stateDomicile" name="stateDomicile" required class="form-control">

                            </div>

                            <div class="mb-3">
                                <label for="nationality">Nationality (if other than Indian):</label>
                                <input type="text" id="nationality" name="nationality" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email ID:</label>
                                <input type="text" id="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">

                                <label for="enrolmentID">Student Unique Enrolment ID:</label>
                                <input type="number" id="enrolmentID" name="enrolmentID" class="form-control" required>
                            </div>

                            <div class="mb-3">

                                <label for="mobileNumber">Mobile Number:</label>
                                <input type="number" id="mobileNumber" name="mobileNumber" class="form-control" required>
                            </div>

                            <div class="mb-3">

                                <label for="joiningYear">Year of Joining:</label>
                                <input type="number" id="joiningYear" name="joiningYear" class="form-control" required>
                            </div>

                            <div class="mb-3">

                                <label for="programmeCode">Programme Code:</label>
                                <input type="text" id="programmeCode" name="programmeCode" class="form-control" required>
                            </div>

                            <div class="mb-3">

                                <label for="programmeName">Programme Name:</label>
                                <input type="text" id="programmeName" name="programmeName" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="yearOfIntroduction">Year of Introduction:</label>
                                <input type="number" id="yearOfIntroduction" name="yearOfIntroduction" class="form-control" required>
                            </div>

                            <div class="mb-3">

                                <label for="implementationStatus">Status of Implementation of CBCS/ECS:</label>
                                <input type="Radio" id="implementationStatus" name="implementationStatus" value="Yes">Yes</input>
                                <input type="Radio" id="implementationStatus" name="implementationStatus" value="No">No</input>
                            </div>



                            <div class="mb-3">

                                <label for="yearOfRevision">Year of Revision (if any):</label>
                                <input type="number" id="yearOfRevision" name="yearOfRevision" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="percentageContentChange">Percentage of Content Added or Replaced:</label>
                                <input type="number" id="percentageContentChange" name="percentageContentChange" class="form-control" required>
                            </div>

                            <div class="mb-3">

                                <label for="courseName">Name of the Course:</label>
                                <input type="text" id="courseName" name="courseName" class="form-control" required>
                            </div>

                            <div class="mb-3">

                                <label for="courseCode">Course Code:</label>
                                <input type="text" id="courseCode" name="courseCode" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="courseContent">Activities/Content with direct bearing on
                                    Employability/Entrepreneurship/Skill Development:</label>
                                <textarea id="courseContent" name="courseContent" rows="4" class="form-control" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="studentProjects">Name of Students Undertaking Field Projects</label>
                                <textarea id="studentProjects" name="studentProjects" rows="4" class="form-control" required></textarea>
                            </div>


                            <!-- Student Projects -->
                            <label for="internshipStatus">student Projects</label>
                            <br>
                            <input type="radio" name="internshipStatus" value="yes" id="yesRadio" onclick="showInternshipFields()"> Yes
                            <input type="radio" name="internshipStatus" value="no" id="noRadio" onclick="hideInternshipFields()"> No

                            <div class="internship-fields">
                                <br>
                                <label for="internshipName">Project Name:</label>
                                <input type="text" class="form-control" name="internshipName" id="internshipName">

                                <br>
                                <label for="internshipPlace">Project Description:</label>
                                <input type="text" class="form-control" name="internshipPlace" id="internshipPlace">
                            </div>

                            <br>
                            <br>

                            <!-- INternship -->

                            <label for="internshipStatus">Have you done an internship?</label>
                            <br>
                            <input type="radio" name="internshipStatus" value="yes" id="yesRadio" onclick="showInternshipFields()"> Yes
                            <input type="radio" name="internshipStatus" value="no" id="noRadio" onclick="hideInternshipFields()"> No

                            <div class="internship-fields">
                                <br>
                                <label for="internshipName">Internship Name:</label>
                                <input type="text" class="form-control" name="internshipName" id="internshipName">

                                <br>
                                <label for="internshipPlace">Internship Place:</label>
                                <input type="text" class="form-control" name="internshipPlace" id="internshipPlace">
                            </div>

                            <div class="mb-3">
                                <label for="documentLink">Link to the Relevant Document:</label>
                                <input type="text" id="documentLink" name="documentLink" class="form-control" required>
                            </div>

                            <h2>Activity Information Form</h2>
                            <form action="process_activity_form.php" method="post">
                                <label for="year">Year:</label><br>
                                <input type="text" id="year" name="year" required><br><br>

                                <label for="activity_name">Name of the Activity:</label><br>
                                <input type="text" id="activity_name" name="activity_name" required><br><br>

                                <label for="students_attended">Number of students attended/participated:</label><br>
                                <input type="number" id="students_attended" name="students_attended" required><br><br>

                                <label for="students_placed">Number of students placed through campus placement:</label><br>
                                <input type="number" id="students_placed" name="students_placed" required><br><br>

                                <label for="document_link">Link to Relevant Document:</label><br>
                                <input type="url" id="document_link" name="document_link" required><br><br>

                            </form>
                            <!--for 5.2.1-->
                            <h4> placement or progression of outgoing students</h4>

                            <label for="year">Year:</label>
                            <input type="text" id="year" name="year" class="form-control" required><br><br>

                            <label for="studentName">Name of Student Placed:</label>
                            <input type="text" id="studentName" name="studentName" class="form-control" required><br><br>

                            <label for="programGraduated">Program Graduated From:</label>
                            <input type="text" id="programGraduated" name="programGraduated" class="form-control" required><br><br>

                            <label for="employerName">Name of the Employer:</label>
                            <input type="text" id="employerName" name="employerName" class="form-control" required><br><br>

                            <label for="payPackage">Pay Package at Appointment:</label>
                            <input type="text" id="payPackage" name="payPackage" class="form-control" required><br><br>

                            <!--for 5.2.2-->


                            <label for="studentName">Name of Student Enrolling into Higher Education:</label>
                            <input type="text" id="studentName" name="studentName" class="form-control" required><br><br>

                            <!-- <label for="programGraduated">Program Graduated From:</label>
    <input type="text" id="programGraduated" name="programGraduated" class="form-control" required><br><br> -->

                            <label for="institutionJoined">Name of Institution Joined:</label>
                            <input type="text" id="institutionJoined" name="institutionJoined" class="form-control" required><br><br>

                            <label for="programAdmitted">Name of Programme Admitted To:</label>
                            <input type="text" id="programAdmitted" name="programAdmitted" class="form-control" required><br><br>

                            <!--for 5.3.1-->
                            <h4>Recent Achievements in Sports and Culture</h4>

                            <label for="year">Year:</label>
                            <input type="text" id="year" name="year" class="form-control" required><br><br>

                            <label for="awardName">Name of the Award/Medal:</label>
                            <input type="text" id="awardName" name="awardName" class="form-control" required><br><br>

                            <label for="teamIndividual">Team/Individual:</label>
                            <select id="teamIndividual" name="teamIndividual1" class="form-control" required>
                                <option value="team">Team</option>
                                <option value="individual">Individual</option>
                            </select><br><br>

                            <label for="competitionLevel">Inter-University/State/National/International:</label>
                            <!-- <input type="text" id="competitionLevel" name="competitionLevel" class="form-control" required><br><br> -->
                            <select id="teamIndividual" name="teamIndividual2" class="form-control" required>
                                <option value="Inter-University">Inter-University</option>
                                <option value="State">State</option>
                                <option value="National">National</option>
                                <option value="International">International</option>
                            </select><br><br>

                            <label for="eventName">Name of the Event:</label>
                            <input type="text" id="eventName" name="eventName" class="form-control" required><br><br>

                            <label for="studentName">Name of the Student:</label>
                            <input type="text" id="studentName" name="studentName" class="form-control" required><br><br>


                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showInternshipFields() {
            document.getElementById('internshipName').required = true;
            document.getElementById('internshipPlace').required = true;
            document.querySelector('.internship-fields').style.display = 'block';
        }

        function hideInternshipFields() {
            document.getElementById('internshipName').required = false;
            document.getElementById('internshipPlace').required = false;
            document.querySelector('.internship-fields').style.display = 'none';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>