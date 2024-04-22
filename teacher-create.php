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

    <title>Teacher Create</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Teacher Student Add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div>
                                <h3>for 1.1.2 & 1.2.2</h3>
                                <label for="programmeCode">Programme Code:</label>
                                <input type="text" id="programmeCode" name="programmeCode" required><br><br>

                                <label for="programmeName">Programme Name:</label>
                                <input type="text" id="programmeName" name="programmeName" required><br><br>

                                <label for="yearOfIntroduction">Year of Introduction:</label>
                                <input type="number" id="yearOfIntroduction" name="yearOfIntroduction" required><br><br>

                                <label for="implementationStatus">Status of Implementation of CBCS/ECS:</label>
                                <input type="Radio" id="implementationStatus" name="implementationStatus"
                                    value="Yes">Yes</input>
                                <input type="Radio" id="implementationStatus" name="implementationStatus"
                                    value="No">No</input><br><br>

                                <label for="yearOfRevision">Year of Revision (if any):</label>
                                <input type="number" id="yearOfRevision" name="yearOfRevision" required><br><br>

                                <label for="percentageContentChange">Percentage of Content Added or Replaced:</label>
                                <input type="number" id="percentageContentChange" name="percentageContentChange"
                                    required><br><br>


                                <h3>for 1.1.3 & 1.2.1</h3>

                                <label for="courseName">Name of the Course:</label>
                                <input type="text" id="courseName" name="courseName" required><br><br>

                                <label for="courseCode">Course Code:</label>
                                <input type="text" id="courseCode" name="courseCode" required><br><br>

                                <label for="courseContent">Activities/Content with direct bearing on
                                    Employability/Entrepreneurship/Skill Development:</label>
                                <textarea id="courseContent" name="courseContent" rows="4" required></textarea><br><br>

                                <label for="yearOfIntroduction">Year of Introduction (during the last five
                                    years):</label>
                                <input type="number" id="yearOfIntroduction" name="yearOfIntroduction" required><br><br>

                                <label for="documentLink">Link to the Relevant Document:</label>
                                <input type="text" id="documentLink" name="documentLink" required><br><br>

                                <h3>for 1.3.4 and 1.3.4.1</h3>

                                <label for="programmeName">Programme Name:</label>
                                <input type="text" id="programmeName" name="programmeName" required><br><br>

                                <label for="programCode">Program Code:</label>
                                <input type="text" id="programCode" name="programCode" required><br><br>

                                <label for="studentProjects">Name of Students Undertaking Field
                                    Projects/Internships/Student
                                    Projects:</label>
                                <textarea id="studentProjects" name="studentProjects" rows="4"
                                    required></textarea><br><br>


                            </div>


                            <h3>for 2.4.1 & 2.4.3</h3>
                            <label for="teacherName">Name of the Full-time Teacher:</label>
                            <input type="text" id="teacherName" name="teacherName" required><br><br>

                            <label for="pan">PAN:</label>
                            <input type="text" id="pan" name="pan" required><br><br>

                            <label for="designation">Designation:</label>
                            <input type="text" id="designation" name="designation" required><br><br>

                            <label for="appointmentYear">Year of Appointment:</label>
                            <input type="number" id="appointmentYear" name="appointmentYear" required><br><br>

                            <label for="appointmentNature">Nature of Appointment (Against Sanctioned Post, Temporary,
                                Permanent):</label>
                            <input type="text" id="appointmentNature" name="appointmentNature" required><br><br>

                            <label for="departmentName">Name of the Department:</label>
                            <input type="text" id="departmentName" name="departmentName" required><br><br>

                            <label for="experienceYears">Total Years of Experience in the Same Institution:</label>
                            <input type="number" id="experienceYears" name="experienceYears" required><br><br>

                            <label for="stillServing">Is the Teacher Still Serving the Institution/If Not, Last Year of
                                Service
                                to the Institution:</label>
                            <input type="text" id="stillServing" name="stillServing" required><br><br>

                            <h3>for critera 2.4.2 , 3.2.3 & 3.4.2</h3>
                            <label for="teacherName">Name of Full-Time Teacher with Ph.D./D.M/M.Ch./D.N.B
                                Superspeciality/D.Sc./D’Lit.:</label>
                            <input type="text" id="teacherName" name="teacherNamePhD" required><br><br>

                            <label for="qualificationYear">Qualification (Ph.D./D.M/M.Ch./D.N.B
                                Superspeciality/D.Sc./D’Lit.)
                                and Year of Obtaining:</label>
                            <input type="text" id="qualificationYear" name="qualificationYear" required><br><br>

                            <label for="recognizedGuide">Whether Recognized as Research Guide for Ph.D./D.M/M.Ch./D.N.B
                                Superspeciality/D.Sc./D’Lit.:</label>
                            <input type="text" id="recognizedGuide" name="recognizedGuide" required><br><br>

                            <label for="recognitionYear">Year of Recognition as Research Guide:</label>
                            <input type="number" id="recognitionYear" name="recognitionYear" required><br><br>

                            <label for="stillServing">Is the Teacher Still Serving the Institution/If Not, Last Year of
                                Service2
                                to the Institution:</label>
                            <input type="text" id="stillServing" name="stillServing2" required><br><br>

                            <label for="researchScholar">Name of the Research Scholar:</label>
                            <input type="text" id="researchScholar" name="researchScholar" required><br><br>

                            <label for="registrationYear">Year of Registration of the Scholar:</label>
                            <input type="number" id="registrationYear" name="registrationYear" required><br><br>

                            <label for="guideAllotmentLink">Guide Allotment Letter Web Link to Be Provided:</label>
                            <input type="text" id="guideAllotmentLink" name="guideAllotmentLink" required><br><br>



                            <h3>for critera 2.5.1</h3>
                            <!-- <label for="programmeName">Programme Name:</label>
                            <input type="text" id="programmeName" name="programmeName" required><br><br>

                            <label for="programmeCode">Programme Code:</label>
                            <input type="text" id="programmeCode" name="programmeCode" required><br><br> -->

                            <label for="semesterYear">Semester/Year:</label>
                            <input type="text" id="semesterYear" name="semesterYear" required><br><br>

                            <label for="lastExamDate">Last Date of the Last Semester-End/Year-End Examination:</label>
                            <input type="date" id="lastExamDate" name="lastExamDate" required><br><br>

                            <label for="resultDate">Date of Declaration of Results of Semester-End/Year-End
                                Examination:</label>
                            <input type="date" id="resultDate" name="resultDate" required><br><br>


                            <h3>for critera 2.6.3</h3>
                            <!-- <label for="programCode">Program Code:</label>
                            <input type="text" id="programCode" name="programCode" required><br><br>

                            <label for="programName">Program Name:</label>
                            <input type="text" id="programName" name="programName" required><br><br> -->

                            <label for="studentsAppeared">Number of Students Appeared in the Final Year
                                Examination:</label>
                            <input type="number" id="studentsAppeared" name="studentsAppeared" required><br><br>

                            <label for="studentsPassed">Number of Students Passed in the Final Year Examination:</label>
                            <input type="number" id="studentsPassed" name="studentsPassed" required><br><br>


                            <h3>for criteria 2.7.1</h3>
                            <label for="studentName">Name of the Student:</label>
                            <input type="text" id="studentName" name="studentName" required><br><br>

                            <label for="gender">Gender:</label>
                            <input type="radio" id="gender" name="gender" value="Male"> Male
                            <input type="radio" id="gender" name="gender" value="Female"> Female
                            <input type="radio" id="gender" name="gender" value="Other"> Other<br><br>

                            <label for="category">Category:</label>
                            <input type="text" id="category" name="category" required><br><br>

                            <label for="stateDomicile">State of Domicile:</label>
                            <input type="text" id="stateDomicile" name="stateDomicile" required><br><br>

                            <label for="nationality">Nationality (if other than Indian):</label>
                            <input type="text" id="nationality" name="nationality" required><br><br>

                            <label for="email">Email ID:</label>
                            <input type="email" id="email" name="email" required><br><br>

                            <label for="programmeName">Programme Name:</label>
                            <input type="text" id="programmeName" name="programmeName" required><br><br>

                            <label for="enrolmentID">Student Unique Enrolment ID:</label>
                            <input type="number" id="enrolmentID" name="enrolmentID" required><br><br>

                            <label for="mobileNumber">Mobile Number:</label>
                            <input type="number" id="mobileNumber" name="mobileNumber" required><br><br>

                            <label for="joiningYear">Year of Joining:</label>
                            <input type="number" id="joiningYear" name="joiningYear" required><br><br>

                            <h3>for criteria 3.1.2</h3>

                            <label for="teacherName">Name of the Teacher Provided with Seed Money:</label>
                            <input type="text" id="teacherName" name="teacherName" required><br><br>

                            <label for="seedAmount">The Amount of Seed Money (INR in Lakhs):</label>
                            <input type="number" id="seedAmount" name="seedAmount" required><br><br>

                            <label for="yearReceived">Year of Receiving:</label>
                            <input type="number" id="yearReceived" name="yearReceived" required><br><br>

                            <label for="policyLink">Link to the Policy Documents for Sanction of Seed Money/Grants for
                                Research from
                                the Institution:</label>
                            <input type="text" id="policyLink" name="policyLink" required><br><br>


                            <h3>for critera 3.1.3</h3>

                            <label for="teacherName">Name of the Teacher Awarded National/International
                                Fellowship/Financial
                                Support:</label>
                            <input type="text" id="teacherName" name="teacherName" required><br><br>

                            <label for="awardName">Name of the Award/Fellowship:</label>
                            <input type="text" id="awardName" name="awardName" required><br><br>

                            <label for="awardYear">Year of Award:</label>
                            <input type="number" id="awardYear" name="awardYear" required><br><br>

                            <label for="awardingAgency">Awarding Agency:</label>
                            <input type="text" id="awardingAgency" name="awardingAgency" required><br><br>

                            <h3>for critera 3.6.2</h3>
                            <label for="activity">Name of the Activity:</label>
                            <input type="text" id="activity" name="activity" required><br><br>

                            <label for="award">Name of the Award/Recognition:</label>
                            <input type="text" id="award" name="award" required><br><br>

                            <label for="awardingBody">Name of the Awarding Government/Government Recognized
                                Bodies:</label>
                            <input type="text" id="awardingBody" name="awardingBody" required><br><br>

                            <label for="year">Year of Award:</label>
                            <input type="number" id="year" name="year" required><br><br>


                            <h3>for 4.1.3</h3>


                            <label for="roomName">Room Number or Name:</label>
                            <input type="text" id="roomName" name="roomName" required><br><br>

                            <label for="ictFacility">Type of ICT Facility:</label>
                            <input type="text" id="ictFacility" name="ictFacility" required><br><br>

                            <label for="photoLink">Link to Geo Tagged Photos:</label>
                            <input type="url" id="photoLink" name="photoLink" required><br><br>

                            <label for="timetable">Master Time Table:</label>
                            <input type="text" id="timetable" name="timetable" required><br><br>

                            <h3>for 4.1.4 and 4.4.1</h3>
                            <label for="year">Year:</label>
                            <input type="text" id="year" name="year" required><br><br>

                            <label for="budget">Budget Allocated for Infrastructure Augmentation:</label>
                            <input type="number" id="budget" name="budget" required><br><br>

                            <label for="expenditure">Expenditure for Infrastructure Augmentation:</label>
                            <input type="number" id="expenditure" name="expenditure" required><br><br>

                            <label for="totalExpenditure">Total Expenditure (excluding Salary):</label>
                            <input type="number" id="totalExpenditure" name="totalExpenditure" required><br><br>

                            <label for="maintenanceAcademic">Expenditure on Maintenance of Academic Facilities
                                (excluding
                                salary):</label>
                            <input type="number" id="maintenanceAcademic" name="maintenanceAcademic" required><br><br>

                            <label for="maintenancePhysical">Expenditure on Maintenance of Physical Facilities
                                (excluding
                                salary):</label>
                            <input type="number" id="maintenancePhysical" name="maintenancePhysical" required><br><br>


                            <h3>for 4.3.4</h3>

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


                            <h3>for 5.1.3</h3>

                            <label for="programName">Name of the Capability Enhancement Program:</label>
                            <input type="text" id="programName" name="programName" required><br><br>

                            <label for="implementationDate">Date of Implementation (DD-MM-YYYY):</label>
                            <input type="text" id="implementationDate" name="implementationDate"
                                placeholder="DD-MM-YYYY" required><br><br>

                            <label for="enrolledStudents">Number of Students Enrolled:</label>
                            <input type="number" id="enrolledStudents" name="enrolledStudents" required><br><br>

                            <label for="agencies">Name of Agencies/Consultants Involved with Contact Details (if
                                any):</label>
                            <textarea id="agencies" name="agencies" rows="4" required></textarea><br><br>

                            <h3>for 5.2.1</h3>

                            <label for="year">Year:</label>
                            <input type="text" id="year" name="year" required><br><br>

                            <label for="studentName">Name of Student Placed:</label>
                            <input type="text" id="studentName" name="studentName" required><br><br>

                            <label for="programGraduated">Program Graduated From:</label>
                            <input type="text" id="programGraduated" name="programGraduated" required><br><br>

                            <label for="employerName">Name of the Employer:</label>
                            <input type="text" id="employerName" name="employerName" required><br><br>

                            <label for="payPackage">Pay Package at Appointment:</label>
                            <input type="text" id="payPackage" name="payPackage" required><br><br>

                            <h3>for 5.2.2</h3>

                            <label for="studentName">Name of Student Enrolling into Higher Education:</label>
                            <input type="text" id="studentName" name="studentName" required><br><br>

                            <label for="programGraduated">Program Graduated From:</label>
                            <input type="text" id="programGraduated" name="programGraduated" required><br><br>

                            <label for="institutionJoined">Name of Institution Joined:</label>
                            <input type="text" id="institutionJoined" name="institutionJoined" required><br><br>

                            <label for="programAdmitted">Name of Programme Admitted To:</label>
                            <input type="text" id="programAdmitted" name="programAdmitted" required><br><br>

                            <h3>for 5.3.1</h3>

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

                            <h3>for 5.3.3</h3>
                            <label for="year">Year:</label>
                            <input type="text" id="year" name="year" required><br><br>

                            <label for="eventDate">Date of Event/Competition (DD-MM-YYYY):</label>
                            <input type="text" id="eventDate" name="eventDate" placeholder="DD-MM-YYYY"
                                required><br><br>

                            <label for="eventName">Name of the Event/Competition:</label>
                            <input type="text" id="eventName" name="eventName" required><br><br>

                            <h3>for 6.3.2</h3>

                            <label for="year">Year:</label>
                            <input type="text" id="year" name="year" required><br><br>

                            <label for="teacherName">Name of Teacher:</label>
                            <input type="text" id="teacherName" name="teacherName" required><br><br>

                            <label for="conferenceName">Name of Conference/Workshop Attended (for which financial
                                support
                                provided):</label>
                            <input type="text" id="conferenceName" name="conferenceName" required><br><br>

                            <label for="professionalBody">Name of Professional Body (for which membership fee is
                                provided):</label>
                            <input type="text" id="professionalBody" name="professionalBody" required><br><br>

                            <label for="amountUSD">Amount of Support (in USD):</label>
                            <input type="number" id="amountUSD" name="amountUSD" required><br><br>

                            <label for="amountINR">Amount of Support (in INR):</label>
                            <input type="number" id="amountINR" name="amountINR" required><br><br>


                            <h3>for 6.3.3</h3>

                            <label for="dates">Dates (from-to) (DD-MM-YYYY):</label>
                            <input type="text" id="dates" name="dates" placeholder="DD-MM-YYYY" required><br><br>

                            <label for="programTitle">Title of the Professional Development/Administrative Training
                                Programs:</label>
                            <input type="text" id="programTitle" name="programTitle" required><br><br>

                            <label for="participants">No. of Participants:</label>
                            <input type="number" id="participants" name="participants" required><br><br>

                            <h3>criteria 6.3.4</h3>
                            <label for="teacherName">Name of Teacher who Attended the Program:</label>
                            <input type="text" id="teacherName" name="teacherName" required><br><br>

                            <label for="programTitle">Title of the Program:</label>
                            <input type="text" id="programTitle" name="programTitle" required><br><br>

                            <label for="duration">Duration (from – to) (DD-MM-YYYY):</label>
                            <input type="text" id="duration" name="duration" placeholder="DD-MM-YYYY" required><br><br>


                            <h3>for 6.4.2</h3>

                            <label for="year">Year:</label>
                            <input type="text" id="year" name="year" required><br><br>

                            <label for="fundingSource">Name of the Non-Government Funding Agencies/Individuals:</label>
                            <input type="text" id="fundingSource" name="fundingSource" required><br><br>

                            <label for="purpose">Purpose of the Grant:</label>
                            <input type="text" id="purpose" name="purpose" required><br><br>

                            <label for="fundsReceived">Funds/Grants Received (INR in Lakhs):</label>
                            <input type="number" id="fundsReceived" name="fundsReceived" required><br><br>

                            <label for="linkAccounts">Link to Audited Statement of Accounts reflecting the
                                receipts:</label>
                            <input type="url" id="linkAccounts" name="linkAccounts" required><br><br>

                            <h3>for 6.5.3</h3>

                            <label for="year">Year:</label>
                            <input type="text" id="year" name="year" required><br><br>

                            <label for="conferences">Conferences, Seminars, Workshops on Quality Conducted:</label>
                            <input type="text" id="conferences" name="conferences" required><br><br>

                            <label for="aaaAction">Academic Administrative Audit (AAA) and Initiation of Follow-up
                                Action:</label>
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
                            <input type="text" id="collaborativeInitiatives" name="collaborativeInitiatives"
                                required><br><br>

                            <label for="orientationProgramme">Orientation Programme on Quality Issues for Teachers and
                                Students:</label>
                            <input type="text" id="orientationProgramme" name="orientationProgramme" required><br><br>

                            <label for="programmeDate">Date (From-To) (DD-MM-YYYY):</label>
                            <input type="text" id="programmeDate" name="programmeDate" placeholder="DD-MM-YYYY"
                                required><br><br>

                            <div class="mb-3">
                                <button type="submit" name="save_teacher" class="btn btn-primary">Save Student</button>
                            </div>





                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>