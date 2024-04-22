<div class=" form-section  container" class="form-control" id="section3">

    <!--for criteria 3.1.2-->

    <label for="stillServing1">Seed money Provided?</label>
    <input type="radio" name="stillServing1" value="yes" onclick="showInput1()">yes
    <input type="radio" name="stillServing1" value="no" onclick="hideInput1()">no<br><br>

    <div class="form-group form-section container" class="form-control" id="lastYear" style="display: none;">

        <label for="teacherName">Name of the Teacher Provided with Seed Money:</label>
        <input type="text" id="teacherName" name="teacherName" class="form-control"><br><br>
        <label for="seedAmount">The Amount of Seed Money (INR in Lakhs):</label>
        <input type="number" id="seedAmount" name="seedAmount" class="form-control" ><br><br>

        <label for="yearReceived">Year of Receiving:</label>
        <input type="number"  id="yearReceived" name="yearReceived" class="form-control" ><br><br>

        <label for="policyLink">Link to the Policy Documents for Sanction of Seed Money/Grants for Research from the Institution:</label>
        <input type="text" id="policyLink" name="policyLink" class="form-control" ><br><br>

    </div>


    <!--for critera 3.1.3-->

    <!-- <label for="teacherName">Name of the Teacher Awarded National/International Fellowship/Financial Support:</label>
    <input type="text" id="teacherName" name="teacherName" ><br><br> -->
    <label for="stillServing">Teacher Awarded any national/ international fellowship?</label>
    <input type="radio"  name="stillServing1" value="yes" onclick="showInput2()">yes
    <input type="radio"  name="stillServing1" value="no" onclick="hideInput2()">no<br>

    <div class="form-group form-section  container" id="awarded" style="display: none;">
        <label for="awardName">Name of the Award/Fellowship:</label>
        <input type="text" id="awardName" name="awardName" class="form-control" ><br><br>

        <label for="awardYear">Year of Award:</label>
        <input type="number" id="awardYear" name="awardYear" class="form-control" ><br><br>

        <label for="awardingAgency">Awarding Agency:</label>
        <input type="text" id="awardingAgency" name="awardingAgency" class="form-control" ><br><br>
    </div>
    <!--for critera 3.2.1. 3.2.2 & 3.2.4-->
    <h4>Reacher /Project</h4>
    <h2>Research Project Information Form</h2>
    <form action="process_research_project.php" method="post">
        <label for="sl_no">Sl. No.:</label><br>
        <input type="text" class="form-control" id="sl_no" name="sl_no" ><br><br>

        <label for="pi_co_pi_name">Name of the Principal Investigator/Co Investigator (if applicable):</label><br>
        <input type="text" class="form-control" id="pi_co_pi_name" name="pi_co_pi_name" ><br><br>

        <label for="funding_agency">Name of the Funding Agency:</label><br>
        <input type="text" class="form-control" id="funding_agency" name="funding_agency" ><br><br>

        <label for="type">Type (Government/Non-Government):</label><br>
        <input type="text" class="form-control" id="type" name="type" ><br><br>

        <label for="department">Department of Principal Investigator/Co Investigator:</label><br>
        <input type="text" class="form-control" id="department" name="department" ><br><br>

        <!-- <label for="year_of_award">Year of Award:</label><br>
        <input type="text" class="form-control" id="year_of_award" name="year_of_award" ><br><br> -->

        <label for="funds_provided">Funds Provided (INR in Lakhs):</label><br>
        <input type="number" class="form-control" id="funds_provided" name="funds_provided" ><br><br>

        <label for="duration">Duration of the Project:</label><br>
        <input type="text" class="form-control" id="duration" name="duration" ><br><br>


    </form>



    <!--for critera 3.3.2-->
    <h2>Workshop/Seminar Information Form</h2>
    <form action="process_workshop_form.php" method="post">
        <label for="year">Year:</label><br>
        <input type="text" class="form-control" id="year" name="year" ><br><br>

        <label for="workshop_name">Name of the Workshop/Seminar:</label><br>
        <input type="text" class="form-control" id="workshop_name" name="workshop_name" ><br><br>

        <label for="participants">Number of Participants:</label><br>
        <input type="number" class="form-control" id="participants" name="participants" ><br><br>

        <label for="date">Date (From - To):</label><br>
        <input type="text" class="form-control" id="date" name="date" ><br><br>

        <label for="activity_report_link">Link to the Activity Report on the Website:</label><br>
        <input type="url" class="form-control" id="activity_report_link" name="activity_report_link" ><br><br>


    </form>
    <!--for critera 3.4.3-->
    <h2>Article Information Form</h2>
    <form action="process_article_form.php" method="post">
        <label for="author_name">Name of the Author/s:</label><br>
        <input type="text" class="form-control" id="author_name" name="author_name" ><br><br>

        <label for="department">Department of the Teacher:</label><br>
        <input type="text" class="form-control" id="department" name="department" ><br><br>

        <label for="journal_name">Name of the Journal:</label><br>
        <input type="text" class="form-control" id="journal_name" name="journal_name" ><br><br>

        <label for="publication_year">Year of Publication:</label><br>
        <input type="number" class="form-control" id="publication_year" name="publication_year" ><br><br>

        <label for="issn_number">ISSN Number:</label><br>
        <input type="text" class="form-control" id="issn_number" name="issn_number" ><br><br>

        <label for="journal_website">Link to Website of the Journal:</label><br>
        <input type="url" class="form-control" id="journal_website" name="journal_website" ><br><br>

        <label for="article_link">Link to Article/Paper/Abstract:</label><br>
        <input type="url" class="form-control" id="article_link" name="article_link" ><br><br>

        <label for="listing_status">Is it listed in UGC Care list/Scopus/Web of Science/other, mention:</label><br>
        <input type="text" class="form-control" id="listing_status" name="listing_status" ><br><br>

       
    </form>

    <!--for critera 3.4.4-->
    <h2>Paper Information Form</h2>
        <label for="paper_title">Title of Paper:</label><br>
        <input type="text" class="form-control" id="paper_title" name="paper_title" ><br><br>

        <label for="author_name">Name of the Author/s:</label><br>
        <input type="text" class="form-control" id="author_name" name="author_name" ><br><br>

        <label for="department">Department of the Teacher:</label><br>
        <input type="text" class="form-control" id="department" name="department" ><br><br>

        <label for="journal_name">Name of the Journal:</label><br>
        <input type="text" class="form-control" id="journal_name" name="journal_name" ><br><br>

        <!-- <label for="publication_year">Year of Publication:</label><br>
        <input type="number" class="form-control" id="publication_year" name="publication_year" ><br><br> -->

        <label for="issn_number">ISSN Number:</label><br>
        <input type="text" class="form-control" id="issn_number" name="issn_number" ><br><br>

        <label for="journal_website">Link to Website of the Journal:</label><br>
        <input type="url" class="form-control" id="journal_website" name="journal_website" ><br><br>

        <label for="article_link">Link to Article/Paper/Abstract:</label><br>
        <input type="url" class="form-control" id="article_link" name="article_link" ><br><br>

        <label for="listing_status">Is it listed in UGC Care list/Scopus/Web of Science/other, mention:</label><br>
        <input type="text" class="form-control" id="listing_status" name="listing_status" ><br><br>

       
    

    <!--for critera 3.5.1-->
    <h2>Consultancy Information Form</h2>
        <label for="teacher_consultants">Name of the Teacher-Consultants:</label><br>
        <input type="text" class="form-control" id="teacher_consultants" name="teacher_consultants" ><br><br>

        <label for="project_name">Name of Consultancy Project/Corporate Training Program:</label><br>
        <input type="text" class="form-control" id="project_name" name="project_name" ><br><br>

        <label for="agency_details">Consulting/Sponsoring Agency with Contact Details:</label><br>
        <input type="text" class="form-control" id="agency_details" name="agency_details" ><br><br>

        <!-- <label for="year">Year:</label><br>
        <input type="text" class="form-control" id="year" name="publication_year" ><br><br> -->

        <label for="revenue_generated">Revenue Generated (INR in Lakhs):</label><br>
        <input type="number" class="form-control" id="revenue_generated" name="revenue_generated" ><br><br>

        <label for="trainees">Number of Trainees:</label><br>
        <input type="number" class="form-control" id="trainees" name="trainees" ><br><br>

    
  
    <!--for critera 3.5.2-->
    <h2>Facilities Development Information Form</h2>
        <label for="teachers_staff_names">Names of the Teachers/Staff:</label><br>
        <input type="text" class="form-control" id="teachers_staff_names" name="teachers_staff_names" ><br><br>

        <label for="facilities_name_department">Name of the Facilities Developed and Department:</label><br>
        <input type="text" class="form-control" id="facilities_name_department" name="facilities_name_department" ><br><br>

        <label for="agency_details">Agency Seeking Training with Contact Details:</label><br>
        <input type="text" class="form-control" id="agency_details" name="agency_details" ><br><br>

        <!-- <label for="year">Year:</label><br>
        <input type="text" class="form-control" id="year" name="year" ><br><br> -->

        <label for="consultancy_name">Name of Consultancy:</label><br>
        <input type="text" class="form-control" id="consultancy_name" name="consultancy_name" ><br><br>

        <label for="total_amount_spent">Total Amount Spent (INR in Lakhs):</label><br>
        <input type="number" class="form-control" id="total_amount_spent" name="total_amount_spent" ><br><br>


   
    <!--for critera 3.6.3 && 3.6.4-->
    <h2>Activity Information Form</h2>
        <label for="activity_name">Name of the Activity:</label><br>
        <input type="text" class="form-control" id="activity_name" name="activity_name" ><br><br>

        <label for="organizing_unit">Organising Unit/Agency/Collaborating Agency:</label><br>
        <input type="text" class="form-control" id="organizing_unit" name="organizing_unit" ><br><br>

        <label for="scheme_name">Name of the Scheme:</label><br>
        <input type="text" class="form-control" id="scheme_name" name="scheme_name" ><br><br>

        <!-- <label for="year">Year of the Activity:</label><br>
        <input type="text" class="form-control" id="year" name="year" ><br><br> -->

        <label for="participants">Number of Students Participated:</label><br>
        <input type="number" class="form-control" id="participants" name="participants" ><br><br>

        

     <!--for critera 3.6.2-->

    <h4>Activity Report</h4>
    <label for="stillServing">Have you done any Activities?</label>
    <input type="radio" name="stillServing" value="yes" onclick="showInput3()">yes
    <input type="radio" name="stillServing" value="no" onclick="hideInput3()">no<br>

    <div class="form-control" id="Activity" style="display: none;">
        <label for="activity">Name of the Activity:</label>
        <input type="text" id="activity" name="activity" class="form-control" ><br><br>

        <label for="award">Name of the Award/Recognition:</label>
        <input type="text" id="award" name="award" class="form-control" ><br><br>

        <label for="awardingBody">Name of the Awarding Government/Government Recognized Bodies:</label>
        <input type="text" id="awardingBody" name="awardingBody" class="form-control" ><br><br>

        <label for="year">Year of Award:</label>
        <input type="number" id="year" name="year" class="form-control" ><br><br>

    </div>
         <!--for critera 3.7.1-->
         <h2>Collaborative Activity Information Form</h2>
    <form action="process_collaborative_activity.php" method="post">
        <label for="sl_no">Sl. No.:</label><br>
        <input type="text" class="form-control" id="sl_no" name="sl_no" ><br><br>

        <label for="activity_title">Title of the Collaborative Activity:</label><br>
        <input type="text" class="form-control" id="activity_title" name="activity_title" ><br><br>

        <label for="collaborating_agency">Name of the Collaborating Agency with Contact Details:</label><br>
        <input type="text" class="form-control" id="collaborating_agency" name="collaborating_agency" ><br><br>

        <label for="participant_name">Name of the Participant:</label><br>
        <input type="text" class="form-control" id="participant_name" name="participant_name" ><br><br>

        <label for="year_of_collaboration">Year of Collaboration:</label><br>
        <input type="text" class="form-control" id="year_of_collaboration" name="year_of_collaboration" ><br><br>

        <label for="duration">Duration:</label><br>
        <input type="text" class="form-control" id="duration" name="duration" ><br><br>

        <label for="activity_nature">Nature of the Activity:</label><br>
        <input type="text" class="form-control" id="activity_nature" name="activity_nature" ><br><br>

        <label for="document_link">Link to the Relevant Document:</label><br>
        <input type="url" class="form-control" id="document_link" name="document_link" ><br><br>

    </form>
 <!--for critera 3.7.2-->
 <h2>MoU Information Form</h2>
    <form action="process_mou_form.php" method="post">
        <label for="organisation_name">Organisation with which MoU is signed:</label><br>
        <input type="text" class="form-control" id="organisation_name" name="organisation_name" ><br><br>

        <label for="institution_name">Name of the Institution/Industry/Corporate House:</label><br>
        <input type="text" class="form-control" id="institution_name" name="institution_name" ><br><br>

        <label for="year_of_signing">Year of Signing MoU:</label><br>
        <input type="text" class="form-control" id="year_of_signing" name="year_of_signing" ><br><br>

        <label for="duration">Duration:</label><br>
        <input type="text" class="form-control" id="duration" name="duration" ><br><br>

        <label for="activities">List of Actual Activities under each MoU Year-wise:</label><br>
        <textarea class="form-control" id="activities" name="activities" rows="5" cols="50" ></textarea><br><br>

      
    </form>
</div>



<script>
    function showInput2() {
        document.getElementById('awarded').style.display = 'block';
    }

    function hideInput2() {
        document.getElementById('awarded').style.display = 'none';
    }
</script>

<script>
    function showInput3() {
        document.getElementById('Activity').style.display = 'block';
    }

    function hideInput3() {
        document.getElementById('Activity').style.display = 'none';
    }
</script>
<script>
    function showInput1() {
        document.getElementById('lastYear').style.display = 'block';
    }

    function hideInput1() {
        document.getElementById('lastYear').style.display = 'none';
    }
</script>