<div class="form-section container" id="section5">
    <!--for 5.1.1 & 5.1.2-->
    <h2>Scheme Information Form</h2>
        <!-- <label for="year">Year:</label><br>
        <input type="text" class="form-control" id="year" name="year" ><br><br> -->

        <label for="scheme_name">Name of the Scheme:</label><br>
        <input type="text" class="form-control" id="scheme_name" name="scheme_name" ><br><br>

        <h3>Number of students benefited by government scheme and amount:</h3>
        <label for="gov_students">Number of students:</label>
        <input type="number" class="form-control" id="gov_students" name="gov_students" ><br>

        <label for="gov_amount">GOV Amount:</label>
        <input type="number" class="form-control" id="gov_amount" name="gov_amount" ><br><br>

        <h3>Number of students benefited by non-government agencies (NGOs) and amount:</h3>
        <label for="ngo_students">Number of students:</label>
        <input type="number" class="form-control" id="ngo_students" name="ngo_students" ><br>

        <label for="ngo_amount">NGo Amount:</label>
        <input type="number" class="form-control" id="ngo_amount" name="ngo_amount" ><br>

        <label for="ngo_name">Name of the NGO/Agency:</label>
        <input type="text" class="form-control" id="ngo_name" name="ngo_name" ><br><br>

        <!-- <label for="document_link">Link to Relevant Document:</label><br>
        <input type="url" class="form-control" id="document_link" name="document_link" ><br><br> -->

  
    <!--for 5.1.3-->
    <h4>Capacity development and skills enhancement activities </h4>
    <label>Programme </label>
    <select id="role" class="form-control" >
        <option value="Select Program">Select Program</option>
        <option value="Soft_skills">Soft skills</option>
        <option value="Lang_comm">Languages and communication</option>
        <option value="Life_skills">Life Skills</option>
        <option value="Awareness_tech">Awareness of trends in technology</option>
        <option value="Other">Other</option>
    </select><br><br>
    <label for="programName">Name of the Capability Enhancement Program:</label>
    <input type="text" id="programName" name="programName" class="form-control" ><br><br>

    <label for="implementationDate">Date of Implementation (DD-MM-YYYY):</label>
    <input type="date" id="implementationDate" name="implementationDate" placeholder="DD-MM-YYYY" class="form-control" ><br><br>

    <label for="enrolledStudents">Number of Students Enrolled:</label>
    <input type="number" id="enrolledStudents" name="enrolledStudents" class="form-control" ><br><br>

    <label for="agencies">Name of Agencies/Consultants Involved with Contact Details (if any):</label>
    <textarea id="agencies" name="agencies" rows="4" class="form-control" ></textarea><br><br>

    <!--for 5.1.4-->
    <h2>Activity Information Form</h2>
    
        <!-- <label for="year">Year:</label><br>
        <input type="text" id="year" name="year" ><br><br> -->

        <label for="activity_name">Name of the Activity:</label><br>
        <input type="text" class="form-control" id="activity_name" name="activity_name" ><br><br>

        <label for="students_attended">Number of students attended/participated:</label><br>
        <input type="number" class="form-control" id="students_attended" name="students_attended" ><br><br>

        <label for="students_placed">Number of students placed through campus placement:</label><br>
        <input type="number" class="form-control" id="students_placed" name="students_placed" ><br><br>

        <!-- <label for="document_link">Link to Relevant Document:</label><br>
        <input type="url" class="form-control" id="document_link" name="document_link" ><br><br> -->

    
    <!--for 5.2.1-->
    <h4> placement or progression of outgoing students</h4>

    <label for="year">Year:</label>
    <input type="text" id="year" name="year" class="form-control" ><br><br>

    <label for="studentName">Name of Student Placed:</label>
    <input type="text" id="studentName" name="studentName" class="form-control" ><br><br>

    <label for="programGraduated">Program Graduated From:</label>
    <input type="text" id="programGraduated" name="programGraduated" class="form-control" ><br><br>

    <label for="employerName">Name of the Employer:</label>
    <input type="text" id="employerName" name="employerName" class="form-control" ><br><br>

    <label for="payPackage">Pay Package at Appointment:</label>
    <input type="text" id="payPackage" name="payPackage" class="form-control" ><br><br>

    <!--for 5.2.2-->


    <label for="studentName">Name of Student Enrolling into Higher Education:</label>
    <input type="text" id="studentName" name="studentName" class="form-control" ><br><br>

    <!-- <label for="programGraduated">Program Graduated From:</label>
    <input type="text" id="programGraduated" name="programGraduated" class="form-control" ><br><br> -->

    <label for="institutionJoined">Name of Institution Joined:</label>
    <input type="text" id="institutionJoined" name="institutionJoined" class="form-control" ><br><br>

    <label for="programAdmitted">Name of Programme Admitted To:</label>
    <input type="text" id="programAdmitted" name="programAdmitted" class="form-control" ><br><br>

    <!--for 5.3.1-->
    <h4>Recent Achievements in Sports and Culture</h4>
<!-- 
    <label for="year">Year:</label>
    <input type="text" id="year" name="year" class="form-control" ><br><br> -->

    <label for="awardName">Name of the Award/Medal:</label>
    <input type="text" id="awardName" name="awardName" class="form-control" ><br><br>

    <label for="teamIndividual">Team/Individual:</label>
    <select id="teamIndividual" name="teamIndividual1" class="form-control" >
        <option value="team">Team</option>
        <option value="individual">Individual</option>
    </select><br><br>

    <label for="competitionLevel">Inter-University/State/National/International:</label>
    <!-- <input type="text" id="competitionLevel" name="competitionLevel" class="form-control" ><br><br> -->
    <select id="teamIndividual" name="teamIndividual2" class="form-control" >
        <option value="Inter-University">Inter-University</option>
        <option value="State">State</option>
        <option value="National">National</option>
        <option value="International">International</option>
    </select><br><br>

    <label for="eventName">Name of the Event:</label>
    <input type="text" id="eventName" name="eventName" class="form-control" ><br><br>

    <!-- <label for="studentName">Name of the Student:</label>
    <input type="text" id="studentName" name="studentName" class="form-control" ><br><br> -->

    <!--for 5.3.3-->

    <div id="eventDetails">
        <div id="eventDetails">
           
            <!-- <label for="year">Year:</label>
            <input type="text" id="year" name="year" class="form-control" ><br><br> -->

            <label for="eventDate">Date of Event/Competition:</label>
            <input type="date" id="eventDate" name="eventDate" class="form-control" ><br><br>

            <label for="eventName">Name of the Event/Competition:</label>
            <input type="text" id="eventName" name="eventName" class="form-control" ><br><br>
        </div>
    </div>
</div>
