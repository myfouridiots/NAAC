<div class="form-group form-section container" id="section2">

    <!--for 2.1.1 -->

        <label for="program_name">Program Name:</label><br>
        <input type="text" class="form-control" id="program_name" name="program_name" ><br><br>

        <label for="program_code">Program Code:</label><br>
        <input type="text" class="form-control" id="program_code" name="program_code" ><br><br>

        <label for="seats_sanctioned">Number of Seats Sanctioned:</label><br>
        <input type="number" class="form-control" id="seats_sanctioned" name="seats_sanctioned" ><br><br>

        <label for="students_admitted">Number of Students Admitted:</label><br>
        <input type="number" class="form-control" id="students_admitted" name="students_admitted" ><br><br>

        
   
    <!--for 2.1.2-->
    <h2>Reserved Category Information Form</h2>
<!-- 
        <label for="year">Year:</label><br>
        <input type="text" class="form-control" id="year" name="year" ><br><br> -->

        <h3>Number of Seats Earmarked for Reserved Category:</h3>
        <label for="sc_seats">SC:</label>
        <input type="number" class="form-control" id="sc_seats" name="sc_seats" ><br>

        <label for="st_seats">ST:</label>
        <input type="number" class="form-control" id="st_seats" name="st_seats" ><br>

        <label for="obc_seats">OBC:</label>
        <input type="number" class="form-control" id="obc_seats" name="obc_seats" ><br>

        <label for="divyangjan_seats">Divyangjan:</label>
        <input type="number" class="form-control" id="divyangjan_seats" name="divyangjan_seats" ><br>

        <label for="gen_seats">Gen:</label>
        <input type="number" class="form-control" id="gen_seats" name="gen_seats" ><br>

        <label for="others_seats">Others:</label>
        <input type="number" class="form-control" id="others_seats" name="others_seats" ><br><br>

        <h3>Number of Students Admitted from Reserved Category:</h3>
        <label for="sc_admitted">SC:</label>
        <input type="number" class="form-control" id="sc_admitted" name="sc_admitted" ><br>

        <label for="st_admitted">ST:</label>
        <input type="number" class="form-control" id="st_admitted" name="st_admitted" ><br>

        <label for="obc_admitted">OBC:</label>
        <input type="number" class="form-control" id="obc_admitted" name="obc_admitted" ><br>

        <label for="divyangjan_admitted">Divyangjan:</label>
        <input type="number" class="form-control" id="divyangjan_admitted" name="divyangjan_admitted" ><br>

        <label for="gen_admitted">Gen:</label>
        <input type="number" class="form-control" id="gen_admitted" name="gen_admitted" ><br>

        <label for="others_admitted">Others:</label>
        <input type="number" class="form-control" id="others_admitted" name="others_admitted" ><br><br>

  

    <!--for 2.4.1 & 2.4.3-->
    <h3>Teacher Learning and Evolution</h3><br>
    <h4>Teacher Info </h4>
    <label for="teacherName">Name of the Full-time Teacher:</label>
    <input type="text" id="teacherName" name="teacherName" class="form-control" ><br>

    <label for="pan">PAN:</label>
    <input type="text" id="pan" name="pan" class="form-control" ><br>

    <label for="designation">Designation:</label>
    <input type="text" id="designation" name="designation" class="form-control" ><br>

    <label for="appointmentYear">Year of Appointment:</label>
    <input type="number" id="appointmentYear" name="appointmentYear" class="form-control" ><br>


    <label for="appointmentNature">Nature of Appointment:</label>
    <input type="radio" name="appointmentNature" value="temporary"> Temporary
    <input type="radio" name="appointmentNature" value="permanent"> Permanent <br>

    <label for="departmentName">Name of the Department:</label>
    <input type="text" id="departmentName" name="departmentName" class="form-control" ><br>

    <label for="experienceYears">Total Years of Experience in the Same
        Institution:</label>
    <input type="number" id="experienceYears" name="experienceYears" class="form-control" ><br>
    <label for="stillServing">Is the Teacher Still Serving the Institution
        Year of Service to the Institution:</label>
    <input type="radio" id="stillServingYes" name="stillServing1" value="yes" onclick="hideLastYearInput()">yes
    <input type="radio" id="stillServingNo" name="stillServing1" value="no" onclick="showLastYearInput()">no<br>

    <div id="lastYearInput" style="display: none;">
        <label for="lastYear">Last Year of Service:</label>
        <input type="text" id="lastYear" name="lastYear" class="form-control"><br>
    </div>

    <!--for critera 2.4.2-->
    <!-- <label for="teacherName">Name of Full-Time Teacher with Ph.D./D.M/M.Ch./D.N.B
         Superspeciality/D.Sc./D’Lit.:</label>
    <input type="text" id="teacherName" name="teacherName" ><br> -->
    <h4>Qualification</h4>
    <div>
        <label>
            <input type="radio" name="courseOption" value="yes" onclick="showCourse()">PHD or others
        </label>&ensp;
        <label>
            <input type="radio" name="courseOption" value="no" onclick="hideCourse()"> No
        </label><br>

        <div id="courseoption" style="display: none;">
            <label for="qualificationYear">Qualification (Ph.D./D.M/M.Ch./D.N.B Superspeciality/D.Sc./D’Lit.) and Year of Obtaining:</label>
            <input type="text" id="qualificationYear" name="qualificationYear" class="form-control" ><br>

            <label for="recognizedGuide">Whether Recognized as Research Guide for Ph.D./D.M/M.Ch./D.N.B Superspeciality/D.Sc./D’Lit.:</label>
            <input type="text" id="recognizedGuide" name="recognizedGuide" class="form-control" ><br>

            <label for="recognitionYear">Year of Recognition as Research Guide:</label>
            <input type="number" id="recognitionYear" name="recognitionYear" class="form-control" ><br>

            <label for="stillServing">Is the Teacher Still Serving 2 in the Institution/If Not, Last Year of Service of Faculty in the Institution:</label>
            <input type="text" id="stillServing" name="stillServing2" class="form-control" ><br>

            <label for="researchScholar">Name of the Research Scholar:</label>
            <input type="text" id="researchScholar" name="researchScholar" class="form-control" ><br>

            <label for="registrationYear">Year of Registration of the Scholar:</label>
            <input type="number" id="registrationYear" name="registrationYear" class="form-control" ><br>

            <label for="guideAllotmentLink">Guide Allotment Letter Web Link to Be
                Provided:</label>
            <input type="text" id="guideAllotmentLink" name="guideAllotmentLink" class="form-control" ><br>

        </div>
    </div><br>

    <!--for critera 2.5.1-->
    <h4>last Academic details of students </h4>
    <!-- <label for="programmeName">Programme Name:</label>
    <input type="text" id="programmeName" name="programmeName" class="form-control" ><br>

    <label for="programmeCode">Programme Code:</label>
    <input type="text" id="programmeCode" name="programmeCode" class="form-control" ><br> -->

    <label for="semesterYear">Semester/Year:</label>
    <input type="text" id="semesterYear" name="semesterYear" class="form-control" ><br>

    <label for="lastExamDate">Last Date of the Last Semester-End/Year-End
        Examination:</label>
    <input type="date" id="lastExamDate" name="lastExamDate" class="form-control" ><br>

    <label for="resultDate">Date of Declaration of Results of Semester-End/Year-End
        Examination:</label>
    <input type="date" id="resultDate" name="resultDate" class="form-control" ><br><br><br>


    <!--for critera 2.6.3-->
    <h4>Current Academic year details</h4>
    <!-- <label for="programCode">Program Code:</label>
    <input type="text" id="programCode" name="programCode" class="form-control" ><br>

    <label for="programName">Program Name:</label>
    <input type="text" id="programName" name="programName" class="form-control" ><br> -->

    <label for="studentsAppeared">Number of Students Appeared in the Final Year
        Examination:</label>
    <input type="number" id="studentsAppeared" name="studentsAppeared" class="form-control" ><br>

    <label for="studentsPassed">Number of Students Passed in the Final Year
        Examination:</label>
    <input type="number" id="studentsPassed" name="studentsPassed" class="form-control" ><br><br><br>


    <!--for criteria 2.7.1-->
    <h4>Student Satisfaction Survey</h4>
    <label for="studentName">Name of the Student:</label>
    <input type="text" id="studentName" name="studentName" class="form-control" ><br>

    <label for="gender">Gender:</label>
    <input type="radio" id="gender" name="gender" value="Male"> Male
    <input type="radio" id="gender" name="gender" value="Female"> Female
    <input type="radio" id="gender" name="gender" value="Other"> Other<br>

    <label for="category">Category:</label>
    <input type="text" id="category" name="category" class="form-control" ><br>

    <label for="stateDomicile">State of Domicile:</label>
    <input type="text" id="stateDomicile" name="stateDomicile" class="form-control" ><br>

    <label for="nationality">Nationality (if other than Indian):</label>
    <input type="text" id="nationality" name="nationality" class="form-control" ><br>

    <label for="email">Email ID:</label>
    <input type="email" id="email" name="email" class="form-control" ><br>

    <!-- <label for="programmeName">Programme Name:</label>
    <input type="text" id="programmeName" name="programmeName" class="form-control" ><br> -->

    <label for="enrolmentID">Student Unique Enrolment ID:</label>
    <input type="number" id="enrolmentID" name="enrolmentID" class="form-control" ><br>

    <label for="mobileNumber">Mobile Number:</label>
    <input type="number" id="mobileNumber" name="mobileNumber" class="form-control" ><br>

    <label for="joiningYear">Year of Joining:</label>
    <input type="number" id="joiningYear" name="joiningYear" class="form-control" ><br>

</div>
<?php
///////////////////////////2.4.2 &  3.2.3 & 3.4.2--> teacher-form////////////////////////////////
$input = array(
    'qualificationYear', 'recognizedGuide', 'recognitionYear', 'stillServing2', 'researchScholar', 'registrationYear', 'guideAllotmentLink',
);
// session_start();
$_SESSION['input'] = $input;
?>

<script>
    function showCourse() {
        document.getElementById('courseoption').style.display = 'block';
    }

    function hideCourse() {
        document.getElementById('courseoption').style.display = 'none';
    }
</script>

<script>
    function showLastYearInput() {
        document.getElementById('lastYearInput').style.display = 'block';
    }

    function hideLastYearInput() {
        document.getElementById('lastYearInput').style.display = 'none';
    }
</script>