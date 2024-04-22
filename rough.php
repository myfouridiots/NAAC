<!DOCTYPE html>
<html>

<head>
    <title>Course Information</title>
</head>

<body>


    <!-- <div id="courseDetails">
        <div id="courseDetails">
            <h3>Year 1</h3>
            <label for="courseName">Name of the value added Course:</label>
            <input type="text" id="courseName" name="addedCourse" required><br><br>

            <label for="courseContent">Year of offering </label>
            <textarea id="courseContent" name="yearOffer" rows="4" required></textarea><br><br>

            <label for="yearOfIntroduction">No. of times offered during the same
                year</label>
            <input type="number" id="yearOfIntroduction" name="timesOffered" required><br><br>

            <label for="documentLink">Duration of course</label>
            <input type="text" id="documentLink" name="durationCourse" required><br><br>

            <label for="courseContent">Number of students enrolled in the year</label>
            <textarea id="courseContent" name="studentEnrolled" rows="4" required></textarea><br><br>

            <label for="yearOfIntroduction">Number of Students completing the course in
                the year</label>
            <input type="number" name="completingCourse" required><br><br>
        </div>
        <div id="recordsContainer">

            Records will be dynamically added here
        </div>
        <button type="button" onclick="addYearRecords()">Add Year Records</button>
    </div> -->




    <script>let yearCount = 2;

        function addYearRecords() {
            if (yearCount <= 5) {
                const recordsContainer = document.getElementById('recordsContainer');

                const yearRecords = document.createElement('div');
                yearRecords.innerHTML = `
            <h3>Year ${yearCount}</h3>
            <label for="courseName${yearCount}">Name of the value added Course:</label>
            <input type="text" id="courseName${yearCount}" name="addedCourse${yearCount}" required><br><br>

            <label for="courseContent${yearCount}">Year of offering </label>
            <textarea id="courseContent${yearCount}" name="yearOffer${yearCount}" rows="4" required></textarea><br><br>

            <label for="yearOfIntroduction${yearCount}">No. of times offered during the same year</label>
            <input type="number" id="yearOfIntroduction${yearCount}" name="timesOffered${yearCount}" required><br><br>

            <label for="documentLink${yearCount}">Duration of course</label>
            <input type="text" id="documentLink${yearCount}" name="durationCourse${yearCount}" required><br><br>

            <label for="courseContent${yearCount}">Number of students enrolled in the year</label>
            <textarea id="courseContent${yearCount}" name="studentEnrolled${yearCount}" rows="4" required></textarea><br><br>

            <label for="yearOfIntroduction${yearCount}">Number of Students completing the course in the year</label>
            <input type="number" name="completingCourse${yearCount}" required><br><br>
        `;

                recordsContainer.appendChild(yearRecords);
                yearCount++;
            }
        }
    </script>


</body>

</html>


<!DOCTYPE html>
<html>

<head>
    <title>Course Information</title>
</head>

<body>
    <div id="courseForm">
        <label>
            <input type="radio" name="courseOption" value="yes" onclick="showCourseDetails()">PhD or  others
        </label>
        <label>
            <input type="radio" name="courseOption" value="no" onclick="hideCourseDetails()"> No
        </label><br><br>

        <div id="courseDetails" style="display: none;">
            <label for="qualificationYear">Qualification (Ph.D./D.M/M.Ch./D.N.B
                Superspeciality/D.Sc./D’Lit.) and Year of Obtaining:</label>
            <input type="text" id="qualificationYear" name="qualificationYear" required><br><br>

            <label for="recognizedGuide">Whether Recognized as Research Guide for
                Ph.D./D.M/M.Ch./D.N.B
                Superspeciality/D.Sc./D’Lit.:</label>
            <input type="text" id="recognizedGuide" name="recognizedGuide" required><br><br>

            <label for="recognitionYear">Year of Recognition as Research Guide:</label>
            <input type="number" id="recognitionYear" name="recognitionYear" required><br><br>

            <label for="stillServing">Is the Teacher Still Serving 2 in the Institution/If Not,
                Last Year of
                Service of Faculty in the Institution:</label>
            <input type="text" id="stillServing" name="stillServing2" required><br><br>

            <label for="researchScholar">Name of the Research Scholar:</label>
            <input type="text" id="researchScholar" name="researchScholar" required><br><br>

            <label for="registrationYear">Year of Registration of the Scholar:</label>
            <input type="number" id="registrationYear" name="registrationYear" required><br><br>

            <label for="guideAllotmentLink">Guide Allotment Letter Web Link to Be
                Provided:</label>
            <input type="text" id="guideAllotmentLink" name="guideAllotmentLink" required><br><br>

        </div>
    </div>

    <script>
        function showCourseDetails() {
            document.getElementById('courseDetails').style.display = 'block';
        }

        function hideCourseDetails() {
            document.getElementById('courseDetails').style.display = 'none';
        }
    </script>
</body>

</html>