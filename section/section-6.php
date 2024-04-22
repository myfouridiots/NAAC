<div class="form-section container" id="section6">
    <!--for 6.2.3-->
    <label for="e-governance">Areas of e governance</label>
    <select id="e-governance" name="teamIndividual" class="form-control" >
        <option value="Administration">Administration</option>
        <option value="Finance-Accounts">Finance and Accounts</option>
        <option value="Student-Admiss-Supp">Student Admission and Support</option>
        <option value="Examination">Examination</option>
    </select><br><br>

    <!-- <label for="teacherName">Name of Teacher:</label>
    <input type="text" id="teacherName" name="teacherName" class="form-control" ><br><br> -->

    <label for="conferenceName">Name of Conference/Workshop Attended (for which
        financial support provided):</label>
    <input type="text" id="conferenceName" name="conferenceName" class="form-control" >&nbsp;
    <input type="file" id="conferenceName" name="conferenceName" class="form-control" ><br><br>



    <!--for 6.3.2-->

    <!-- <label for="year">Year:</label>
    <input type="text" id="year" name="year" class="form-control" ><br><br>

    <label for="teacherName">Name of Teacher:</label>
    <input type="text" id="teacherName" name="teacherName" class="form-control" ><br><br> -->

    <!-- <label for="conferenceName">Name of Conference/Workshop Attended (for which financial support provided):</label>
    <input type="text" id="conferenceName" name="conferenceName" class="form-control" ><br><br> -->

    <label for="professionalBody">Name of Professional Body (for which membership fee is provided):</label>
    <input type="text" id="professionalBody" name="professionalBody" class="form-control" ><br><br>

    <label for="amount">Amount of Support (in USD)/ (in INR)::</label>
    <input type="text" id="amount" name="amount" class="form-control" ><br><br>



    <!--for 6.3.3-->

    <label for="dates">Roles:</label>
    <select id="role" name="role" class="form-control" >
        <option value="select role">select Role</option>
        <option value="Teacher">Teacher</option>
        <option value="non-teaching-staff">non-teaching-staff</option>

    </select><br><br>

    <label for="dates">Dates: from</label>
    <input type="date" id="dates" name="dates" class="form-control" >
    <label for="dates"> to </label>
    <input type="date" id="dates" name="dates" class="form-control" ><br><br>

    <label for="programTitle">Title of the Professional Development/Administrative Training Programs:</label>
    <input type="text" id="programTitle" name="programTitle" class="form-control" ><br><br>

    <label for="participants">No. of Participants:</label>
    <input type="number" id="participants" name="participants" class="form-control" ><br><br>

    <!--criteria 6.3.4-->
    <h3>Teachers Involved in programms</h3>
    <label for="stillServing"> Teachers undergoing online/ face-to-face Faculty Development Programmes </label>
    <input type="radio" id="stillServingYes" name="stillServing" value="yes" onclick="showInput()">yes
    <input type="radio" id="stillServingNo" name="stillServing" value="no" onclick="hideInput()">no<br>

    <div id="Activity" style="display: none;">

        <label for="teacherName">Name of Teacher who Attended the Program:</label>
        <input type="text" id="teacherName" name="teacherName" class="form-control" ><br><br>

        <label for="programTitle">Title of the Program:</label>
        <input type="text" id="programTitle" name="programTitle" class="form-control" ><br><br>

        <label for="dates">Dates: from</label>
        <input type="date" id="dates" name="dates" class="form-control" >
        <label for="dates"> to </label>
        <input type="date" id="dates" name="dates" class="form-control" ><br><br>
    </div>

    <!--for 6.4.2-->

    <label for="year">Year:</label>
    <input type="text" id="year" name="year" class="form-control" ><br><br>

    <label for="fundingSource">Name of the Non-Government Funding
        Agencies/Individuals:</label>
    <input type="text" id="fundingSource" name="fundingSource" class="form-control" ><br><br>

    <label for="purpose">Purpose of the Grant:</label>
    <input type="text" id="purpose" name="purpose" class="form-control" ><br><br>

    <label for="fundsReceived">Funds/Grants Received (INR in Lakhs):</label>
    <input type="number" id="fundsReceived" name="fundsReceived" class="form-control" ><br><br>

    <label for="linkAccounts">Link to Audited Statement of Accounts reflecting the
        receipts:</label>
    <input type="url" id="linkAccounts" name="linkAccounts" class="form-control" ><br><br>


    <!--for 6.5.3-->

    <label for="year">Year:</label>
    <input type="text" id="year" name="year" class="form-control" ><br><br>

    <label for="conferences">Conferences, Seminars, Workshops on Quality
        Conducted:</label>
    <input type="text" id="conferences" name="conferences" class="form-control" ><br><br>

    <label for="aaaAction">Academic Administrative Audit (AAA) and Initiation of
        Follow-up Action:</label>
    <input type="text" id="aaaAction" name="aaaAction" class="form-control" ><br><br>

    <label for="nirfStatus">Participation in NIRF along with Status:</label>
    <input type="text" id="nirfStatus" name="nirfStatus" class="form-control" ><br><br>

    <label for="isoCertification">ISO Certification and Nature/Validity Period:</label>
    <input type="text" id="isoCertification" name="isoCertification" class="form-control" ><br><br>

    <label for="nbaCertification">NBA or Any Other Certification Received with Program
        Specifications:</label>
    <input type="text" id="nbaCertification" name="nbaCertification" class="form-control" ><br><br>

    <label for="collaborativeInitiatives">Collaborative Quality Initiatives with Other
        Institution(s):</label>
    <input type="text" id="collaborativeInitiatives" name="collaborativeInitiatives" class="form-control" ><br><br>

    <label for="orientationProgramme">Orientation Programme on Quality Issues for
        Teachers and
        Students:</label>
    <input type="text" id="orientationProgramme" name="orientationProgramme" class="form-control" ><br><br>

    <label for="programmeDate">Date (From-To) (DD-MM-YYYY):</label>
    <input type="text" id="programmeDate" name="programmeDate" placeholder="DD-MM-YYYY" class="form-control" ><br><br>

    <div class="mb-3">
        <button type="submit" name="save_teacher" class="btn btn-primary">Save
            Student</button>
    </div>
</div>


<script>
    function showInput() {
        document.getElementById('Activity').style.display = 'block';
    }

    function hideInput() {
        document.getElementById('Activity').style.display = 'none';
    }
</script>