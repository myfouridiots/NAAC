<div class="form-group form-section container active" id="section1">
    <!--for 1.1.2 & 1.2.2-->
    <h3>Curricular Aspects</h3><br>
    <h4>syllabus info</h4><br>
    <label for="programmeCode">Programme Code:</label>
    <input type="text" id="programmeCode" class="form-control" name="programmeCode" ><br><br>

    <label for="programmeName">Programme Name:</label>
    <input type="text" id="programmeName" name="programmeName" class="form-control" ><br><br>

    <label for="yearOfIntroduction">Year of Introduction:</label>
    <input type="number" id="yearOfIntroduction" name="yearOfIntroduction" class="form-control" ><br><br>

    <label for="implementationStatus">Status of Implementation of CBCS/ECS:</label>
    <input type="radio" id="implementationStatus" name="implementationStatus" value="Yes">Yes
    <input type="radio" id="implementationStatus" name="implementationStatus" value="No">No<br><br>

    <label for="yearOfRevision">Year of Revision (if any):</label>
    <input type="number" id="yearOfRevision" name="yearOfRevision" class="form-control" ><br><br>

    <label for="percentageContentChange">Percentage of Content Added or Replaced:</label>
    <input type="number" id="percentageContentChange" name="percentageContentChange" class="form-control" ><br><br>


    <!--for 1.1.3 & 1.2.1-->

    <h4>Course info</h4>

    <label for="courseName">Name of the Course:</label>
    <input type="text" id="courseName" name="courseName" class="form-control" ><br><br>

    <label for="courseCode">Course Code:</label>
    <input type="text" id="courseCode" name="courseCode" class="form-control" ><br><br>

    <label for="courseContent">Activities/Content with direct bearing on Employability/Entrepreneurship/Skill Development:</label>
    <textarea id="courseContent" name="courseContent" rows="4" class="form-control" ></textarea><br><br>

    <label for="yearOfIntroduction">Year of Introduction (during the last five years):</label>
    <input type="number" id="yearOfIntroduction" name="yearOfIntroduction" class="form-control" ><br><br>

    <label for="documentLink">Link to the Relevant Document:</label>
    <input type="text" id="documentLink" name="documentLink" class="form-control" ><br><br>

    <!--for 1.3.4 and 1.3.4.1-->

    <label for="programmeName">Programme Name:</label>
    <input type="text" id="programmeName" name="programmeName" class="form-control" ><br><br>

    <label for="programCode">Program Code:</label>
    <input type="text" id="programCode" name="programCode" class="form-control" ><br><br>

    <label for="studentProjects">Name of Students Undertaking Field Projects/Internships/Student Projects:</label>
    <textarea id="studentProjects" name="studentProjects" rows="4" class="form-control" ></textarea><br><br>

    <!--for  for 1.3.2 & 1.3.3.-->
    <h4>Additional course</h4>
 
            <h4>Year 1</h4>
            <label for="courseName">Name of the value added Course:</label>
            <input type="text" id="courseName" name="addedCourse" class="form-control" ><br><br>

            <label for="courseContent">Year of offering </label>
            <textarea id="courseContent" name="yearOffer" rows="4" class="form-control" ></textarea><br><br>

            <label for="yearOfIntroduction">No. of times offered during the same year</label>
            <input type="number" id="yearOfIntroduction" name="timesOffered" class="form-control" ><br><br>

            <label for="documentLink">Duration of course</label>
            <input type="text" id="documentLink" name="durationCourse" class="form-control" ><br><br>

            <label for="courseContent">Number of students enrolled in the year</label>
            <textarea id="courseContent" name="studentEnrolled" rows="4" class="form-control" ></textarea><br><br>

            <label for="yearOfIntroduction">Number of Students completing the course in the year</label>
            <input type="number" name="completingCourse" class="form-control" ><br><br>
        
        
        <!-- <button type="button" id="addRecordsButton" onclick="addYearRecords()">Add Year Records</button> -->
    

</div>

<!-- <script>
    let yearCount = 2;

    function addYearRecords() {
        if (yearCount <= 5) {
            const recordsContainer = document.getElementById('recordsContainer');

            const yearRecords = document.createElement('div');
            yearRecords.innerHTML = `
            <h4>Year ${yearCount}</h4>
            <label for="courseName${yearCount}">Name of the value added Course:</label>
            <input type="text" id="courseName${yearCount}" name="addedCourse${yearCount}" class="form-control" ><br><br>

            <label for="courseContent${yearCount}">Year of offering </label>
            <textarea id="courseContent${yearCount}" name="yearOffer${yearCount}" rows="4" class="form-control" ></textarea><br><br>

            <label for="yearOfIntroduction${yearCount}">No. of times offered during the same year</label>
            <input type="number" id="yearOfIntroduction${yearCount}" name="timesOffered${yearCount}" class="form-control" ><br><br>

            <label for="documentLink${yearCount}">Duration of course</label>
            <input type="text" id="documentLink${yearCount}" name="durationCourse${yearCount}" class="form-control" ><br><br>

            <label for="courseContent${yearCount}">Number of students enrolled in the year</label>
            <textarea id="courseContent${yearCount}" name="studentEnrolled${yearCount}" rows="4" class="form-control" ></textarea><br><br>

            <label for="yearOfIntroduction${yearCount}">Number of Students completing the course in the year</label>
            <input type="number" name="completingCourse${yearCount}" class="form-control" ><br><br>
            `;

            recordsContainer.appendChild(yearRecords);
            yearCount++;

            if (yearCount > 5) {
                document.getElementById('addRecordsButton').style.display = 'none';
            }

        }
    }
</script> -->
