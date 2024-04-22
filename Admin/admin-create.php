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

    <title>Admin Create</title>
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
                        <h4>Admin Student Add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <label for="roomName">Room Number or Name:</label>
                            <input type="text" id="roomName" name="roomName" required><br><br>

                            <label for="ictFacility">Type of ICT Facility:</label>
                            <input type="text" id="ictFacility" name="ictFacility" required><br><br>

                            <label for="photoLink">Link to Geo Tagged Photos:</label>
                            <input type="url" id="photoLink" name="photoLink" required><br><br>

                            <label for="timetable">Master Time Table:</label>
                            <input type="text" id="timetable" name="timetable" required><br><br>

                            <label for="year">Year:</label>
                            <input type="text" id="year" name="year" required><br><br>

                            <label for="budget">Budget Allocated for Infrastructure Augmentation:</label>
                            <input type="number" id="budget" name="budget" required><br><br>

                            <label for="expenditure">Expenditure for Infrastructure Augmentation:</label>
                            <input type="number" id="expenditure" name="expenditure" required><br><br>

                            <label for="totalExpenditure">Total Expenditure (excluding Salary):</label>
                            <input type="number" id="totalExpenditure" name="totalExpenditure" required><br><br>

                            <label for="maintenanceAcademic">Expenditure on Maintenance of Academic Facilities (excluding
                                salary):</label>
                            <input type="number" id="maintenanceAcademic" name="maintenanceAcademic" required><br><br>

                            <label for="maintenancePhysical">Expenditure on Maintenance of Physical Facilities (excluding
                                salary):</label>
                            <input type="number" id="maintenancePhysical" name="maintenancePhysical" required><br><br>

                            <label for="teacherName">Name of the Teacher:</label>
                            <input type="text" id="teacherName" name="teacherName" required><br><br>

                            <label for="module">Name of the Module Developed:</label>
                            <input type="text" id="module" name="module" required><br><br>

                            <label for="platform">Platform on Which Module is Developed:</label>
                            <input type="text" id="platform" name="platform" required><br><br>

                            <label for="launchDate">Date of Launching E-Content:</label>
                            <input type="date" id="launchDate" name="launchDate" required><br><br>

                            <label for="documentLink">Link to Relevant Document:</label>
                            <input type="url" id="documentLink" name="documentLink" required><br><br>

                            <label for="facility">Facility Available in the Institution:</label>
                            <input type="text" id="facility" name="facility" required><br><br>

                            <label for="developmentFacility">List of E-Content Development Facility Available:</label>
                            <input type="text" id="developmentFacility" name="developmentFacility" required><br><br>

                            <label for="videoLink">Link to Videos of the Media Centre and Recording Facility:</label>
                            <input type="url" id="videoLink" name="videoLink" required><br><br>
                            <label for="programName">Name of the Capability Enhancement Program:</label>
                            <input type="text" id="programName" name="programName" required><br><br>

                            <label for="implementationDate">Date of Implementation (DD-MM-YYYY):</label>
                            <input type="text" id="implementationDate" name="implementationDate" placeholder="DD-MM-YYYY" required><br><br>

                            <label for="enrolledStudents">Number of Students Enrolled:</label>
                            <input type="number" id="enrolledStudents" name="enrolledStudents" required><br><br>

                            <label for="agencies">Name of Agencies/Consultants Involved with Contact Details (if any):</label>
                            <textarea id="agencies" name="agencies" rows="4" required></textarea><br><br>

                            <input type="text" id="year" name="year" required><br><br>

                            <label for="studentName">Name of Student Placed:</label>
                            <input type="text" id="studentName" name="studentName" required><br><br>

                            <label for="programGraduated">Program Graduated From:</label>
                            <input type="text" id="programGraduated" name="programGraduated" required><br><br>

                            <label for="employerName">Name of the Employer:</label>
                            <input type="text" id="employerName" name="employerName" required><br><br>

                            <label for="payPackage">Pay Package at Appointment:</label>
                            <input type="text" id="payPackage" name="payPackage" required><br><br>
                            <label for="studentName">Name of Student Enrolling into Higher Education:</label>
                            <input type="text" id="studentName" name="studentName" required><br><br>

                            <label for="programGraduated">Program Graduated From:</label>
                            <input type="text" id="programGraduated" name="programGraduated" required><br><br>

                            <label for="institutionJoined">Name of Institution Joined:</label>
                            <input type="text" id="institutionJoined" name="institutionJoined" required><br><br>

                            <label for="programAdmitted">Name of Programme Admitted To:</label>
                            <input type="text" id="programAdmitted" name="programAdmitted" required><br><br>

                            <label for="year">Year:</label>
                            <input type="text" id="year" name="year" required><br><br>

                            <label for="awardName">Name of the Award/Medal:</label>
                            <input type="text" id="awardName" name="awardName" required><br><br>

                            <label for="teamIndividual">Team/Individual:</label>
                            <select id="teamIndividual" name="teamIndividual" required>
                                <option value="team">Team</option>
                                <option value="individual">Individual</option>
                            </select><br><br>

                            <label for="competitionLevel">Inter-University/State/National/International:</label>
                            <input type="text" id="competitionLevel" name="competitionLevel" required><br><br>

                            <label for="eventName">Name of the Event:</label>
                            <input type="text" id="eventName" name="eventName" required><br><br>

                            <label for="studentName">Name of the Student:</label>
                            <input type="text" id="studentName" name="studentName" required><br><br>
                            <label for="year">Year:</label>
                            <input type="text" id="year" name="year" required><br><br>

                            <label for="eventDate">Date of Event/Competition (DD-MM-YYYY):</label>
                            <input type="text" id="eventDate" name="eventDate" placeholder="DD-MM-YYYY" required><br><br>

                            <label for="eventName">Name of the Event/Competition:</label>
                            <input type="text" id="eventName" name="eventName" required><br><br>

                            <label for="year">Year:</label>
                            <input type="text" id="year" name="year" required><br><br>

                            <label for="teacherName">Name of Teacher:</label>
                            <input type="text" id="teacherName" name="teacherName" required><br><br>

                            <label for="conferenceName">Name of Conference/Workshop Attended (for which financial support
                                provided):</label>
                            <input type="text" id="conferenceName" name="conferenceName" required><br><br>

                            <label for="professionalBody">Name of Professional Body (for which membership fee is
                                provided):</label>
                            <input type="text" id="professionalBody" name="professionalBody" required><br><br>

                            <label for="amountUSD">Amount of Support (in USD):</label>
                            <input type="number" id="amountUSD" name="amountUSD" required><br><br>

                            <label for="amountINR">Amount of Support (in INR):</label>
                            <input type="number" id="amountINR" name="amountINR" required><br><br>

                            <label for="dates">Dates (from-to) (DD-MM-YYYY):</label>
                            <input type="text" id="dates" name="dates" placeholder="DD-MM-YYYY" required><br><br>

                            <label for="programTitle">Title of the Professional Development/Administrative Training
                                Programs:</label>
                            <input type="text" id="programTitle" name="programTitle" required><br><br>

                            <label for="participants">No. of Participants:</label>
                            <input type="number" id="participants" name="participants" required><br><br>

                            <label for="teacherName">Name of Teacher who Attended the Program:</label>
                            <input type="text" id="teacherName" name="teacherName" required><br><br>

                            <label for="programTitle">Title of the Program:</label>
                            <input type="text" id="programTitle" name="programTitle" required><br><br>

                            <label for="duration">Duration (from – to) (DD-MM-YYYY):</label>
                            <input type="text" id="duration" name="duration" placeholder="DD-MM-YYYY" required><br><br>


                            <label for="year">Year:</label>
                            <input type="text" id="year" name="year" required><br><br>

                            <label for="fundingSource">Name of the Non-Government Funding Agencies/Individuals:</label>
                            <input type="text" id="fundingSource" name="fundingSource" required><br><br>

                            <label for="purpose">Purpose of the Grant:</label>
                            <input type="text" id="purpose" name="purpose" required><br><br>

                            <label for="fundsReceived">Funds/Grants Received (INR in Lakhs):</label>
                            <input type="number" id="fundsReceived" name="fundsReceived" required><br><br>

                            <label for="linkAccounts">Link to Audited Statement of Accounts reflecting the receipts:</label>
                            <input type="url" id="linkAccounts" name="linkAccounts" required><br><br>

                            <label for="year">Year:</label>
                            <input type="text" id="year" name="year" required><br><br>

                            <label for="conferences">Conferences, Seminars, Workshops on Quality Conducted:</label>
                            <input type="text" id="conferences" name="conferences" required><br><br>

                            <label for="aaaAction">Academic Administrative Audit (AAA) and Initiation of Follow-up Action:</label>
                            <input type="text" id="aaaAction" name="aaaAction" required><br><br>

                            <label for="nirfStatus">Participation in NIRF along with Status:</label>
                            <input type="text" id="nirfStatus" name="nirfStatus" required><br><br>

                            <label for="isoCertification">ISO Certification and Nature/Validity Period:</label>
                            <input type="text" id="isoCertification" name="isoCertification" required><br><br>

                            <label for="nbaCertification">NBA or Any Other Certification Received with Program
                                Specifications:</label>
                            <input type="text" id="nbaCertification" name="nbaCertification" required><br><br>

                            <label for="collaborativeInitiatives">Collaborative Quality Initiatives with Other
                                Institution(s):</label>
                            <input type="text" id="collaborativeInitiatives" name="collaborativeInitiatives" required><br><br>

                            <label for="orientationProgramme">Orientation Programme on Quality Issues for Teachers and
                                Students:</label>
                            <input type="text" id="orientationProgramme" name="orientationProgramme" required><br><br>

                            <label for="programmeDate">Date (From-To) (DD-MM-YYYY):</label>
                            <input type="text" id="programmeDate" name="programmeDate" placeholder="DD-MM-YYYY" required><br><br>






                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                            </div>


                            <!-- <div class="mb-3">
                                <label>Name of the Student:</label>
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
                            </div>-->


                            <!-- Student Projects -->
                            <!-- <label for="internshipStatus">student Projects</label>
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
 -->
                            <!-- INternship -->

                            <!-- <label for="internshipStatus">Have you done an internship?</label>
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
                            </div> -->
                            <!-- <div class="mb-3">

                            </div>    
                            <div class="mb-3">

                            </div> -->

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