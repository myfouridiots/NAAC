
<?php
session_start();
require 'dbcon.php';

// if (isset($_POST['delete_student'])) {
//     $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

//     $query = "DELETE FROM students WHERE id='$student_id' ";
//     $query_run = mysqli_query($con, $query);

//     if ($query_run) {
//         $_SESSION['message'] = "Student Deleted Successfully";
//         header("Location: index.php");
//         exit(0);
//     } else {
//         $_SESSION['message'] = "Student Not Deleted";
//         header("Location: index.php");
//         exit(0);baitheg
//     }
// }

if (isset($_POST['update_teacher'])) {
    ////////////////////////////////section 2///////////////////////////////
    $seats_sanctioned = $_POST["seats_sanctioned"];
    $students_admitted = $_POST["students_admitted"];
    $sc_seats = $_POST["sc_seats"];
    $st_seats = $_POST["st_seats"];
    $obc_seats = $_POST["obc_seats"];
    $divyangjan_seats = $_POST["divyangjan_seats"];
    $gen_seats = $_POST["gen_seats"];
    $others_seats = $_POST["others_seats"];

    $teacherName = $_POST['teacherName'];
    $pan = $_POST['pan'];
    $designation = $_POST['designation'];
    $appointmentYear = $_POST['appointmentYear'];
    $appointmentNature = isset($_POST['appointmentNature']) ? $_POST['appointmentNature'] : '';
    $departmentName = $_POST['departmentName'];
    $experienceYears = $_POST['experienceYears'];
    $stillServing1 = isset($_POST['stillServing1']) ? $_POST['stillServing1'] : '';
    $teacherNamePhD = isset($_POST['teacherNamePhD']) ? $_POST['teacherNamePhD'] : '';
    $qualificationYear = $_POST['qualificationYear'];
    $recognizedGuide = $_POST['recognizedGuide'];
    $recognitionYear = $_POST['recognitionYear'];
    $stillServing2 = $_POST['stillServing2'];
    $researchScholar = $_POST['researchScholar'];
    $registrationYear = $_POST['registrationYear'];
    $guideAllotmentLink = $_POST['guideAllotmentLink'];
    $programmeName = $_POST['programmeName'];
    $programmeCode = $_POST['programmeCode'];
    $semesterYear = $_POST['semesterYear'];
    $lastExamDate = $_POST['lastExamDate'];
    $resultDate = $_POST['resultDate'];
    $programCode = $_POST['programCode'];
    $programName = $_POST['programName'];
    $studentsAppeared = $_POST['studentsAppeared'];
    $studentsPassed = $_POST['studentsPassed'];

    // $teacherNamePhD2 = $_POST['teacherNamePhD2'];
    // $qualificationYear2 = $_POST['qualificationYear2'];
    // $recognizedGuide2 = $_POST['recognizedGuide2'];
    // $recognitionYear2 = $_POST['recognitionYear2'];
    // $stillServing3 = $_POST['stillServing3'];
    // $researchScholar2 = $_POST['researchScholar2'];
    // $registrationYear2 = $_POST['registrationYear2'];
    // $guideAllotmentLink2 = $_POST['guideAllotmentLink2'];

    $teacherNameSeedMoney = isset($_POST['teacherNameSeedMoney']) ? $_POST['teacherNameSeedMoney'] : '';
    $seedAmount = $_POST['seedAmount'];
    $yearReceived = $_POST['yearReceived'];
    $policyLink = $_POST['policyLink'];
    $teacherNameAward = isset($_POST['teacherNameAward']) ? $_POST['teacherNameAward'] : '';
    $awardName = $_POST['awardName'];
    $awardYear = $_POST['awardYear'];
    $awardingAgency = $_POST['awardingAgency'];

    $pi_co_pi_name = $_POST["pi_co_pi_name"];
    $funding_agency = $_POST["funding_agency"];
    $type = $_POST["type"];
    $department = $_POST["department"];
    $funds_provided = $_POST["funds_provided"];
    $duration = $_POST["duration"];

    $workshop_name = $_POST['workshop_name'];
    $participants = $_POST['participants'];
    $date = $_POST['date'];
    $activity_report_link = $_POST['activity_report_link'];




    //////////studentform data////////////////
    // $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
    // $studentName = mysqli_real_escape_string($conn, $_POST['studentName']);
    // $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    // $category = mysqli_real_escape_string($conn, $_POST['category']);
    // $stateDomicile = mysqli_real_escape_string($conn, $_POST['stateDomicile']);
    // $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    // $email = $_POST['email'];
    // $enrolmentID = mysqli_real_escape_string($conn, $_POST['enrolmentID']);
    // $mobileNumber = mysqli_real_escape_string($conn, $_POST['mobileNumber']);
    // $joiningYear = mysqli_real_escape_string($conn, $_POST['joiningYear']);
    // $programmeCode = mysqli_real_escape_string($conn, $_POST['programmeCode']);
    // $programmeName = mysqli_real_escape_string($conn, $_POST['programmeName']);
    // $yearOfIntroduction = mysqli_real_escape_string($conn, $_POST['yearOfIntroduction']);
    // $implementationStatus = mysqli_real_escape_string($conn, $_POST['implementationStatus']);
    // $yearOfRevision = mysqli_real_escape_string($conn, $_POST['yearOfRevision']);
    // $percentageContentChange = mysqli_real_escape_string($conn, $_POST['percentageContentChange']);
    // $courseName = mysqli_real_escape_string($conn, $_POST['courseName']);
    // $courseCode = mysqli_real_escape_string($conn, $_POST['courseCode']);
    // $courseContent = mysqli_real_escape_string($conn, $_POST['courseContent']);
    // $studentProjects = mysqli_real_escape_string($conn, $_POST['studentProjects']);
    // $documentLink = $_POST['documentLink'];



    // $query = "UPDATE teacherform SET studentName='$studentName', gender='$gender', category='$category', stateDomicile='$stateDomicile', nationality='$nationality', email='$email', enrolmentID='$enrolmentID', mobileNumber='$mobileNumber', joiningYear='$joiningYear', programmeCode='$programmeCode', programmeName='$programmeName', yearOfIntroduction='$yearOfIntroduction', implementationStatus='$implementationStatus', yearOfRevision='$yearOfRevision', percentageContentChange='$percentageContentChange', courseName='$courseName', courseCode='$courseCode', courseContent='$courseContent', studentProjects='$studentProjects', documentLink='$documentLink' WHERE id='$student_id'";

    $query = "UPDATE teacherform SET seats_sanctioned = '$seats_sanctioned', 
    students_admitted = '$students_admitted', 
    sc_seats = '$sc_seats', 
    st_seats = '$st_seats', 
    obc_seats = '$obc_seats', 
    divyangjan_seats = '$divyangjan_seats', 
    gen_seats = '$gen_seats', 
    others_seats = '$others_seats'  
    
    
    pi_co_pi_name = '$pi_co_pi_name', 
    funding_agency = '$funding_agency', 
    type = '$type', 
    department = '$department', 
    funds_provided = '$funds_provided', 
    duration = '$duration',

    workshop_name='$workshop_name', participants='$participants', date='$date', activity_report_link='$activity_report_link',
    author_name='$author_name', department='$department', journal_name='$journal_name', publication_year='$publication_year', 

            issn_number='$issn_number', journal_website='$journal_website', article_link='$article_link', listing_status='$listing_status',
            teacher_consultants='$teacher_consultants', project_name='$project_name', 
            agency_details='$agency_details', revenue_generated='$revenue_generated', 
            trainees='$trainees', teachers_staff_names = '$teachers_staff_names',
                facilities_name_department = '$facilities_name_department',
                agency_details = '$agency_details',
                consultancy_name = '$consultancy_name',
                total_amount_spent = '$total_amount_spent',

             
            organizing_unit = '$organizing_unit', 
          

            
    
    
    
    
    
    
    
    
    
    
    
    WHERE id='$student_id'";



    $query_run = mysqli_query($conn, $query);
    echo "SQL Query: $query<br>";
    echo "Student ID: $student_id<br>";
    // Add similar lines for other variables

    if ($query_run) {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Updated: " . mysqli_error($conn);
        header("Location: index.php");
        exit(0);
    }
}


// if (isset($_POST['save_teacher'])) {
//     $roomName= mysqli_real_escape_string($conn, $_POST['roomName']);
//     // $ = mysqli_real_escape_string($conn, $_POST['']);
//     // $ = mysqli_real_escape_string($conn, $_POST['']);
//     // $ = mysqli_real_escape_string($conn, $_POST['']);
//     // $ = mysqli_real_escape_string($conn, $_POST['']);
//     // $ = $_POST[''];

//     $query = "INSERT INTO teacherform VALUES ('','$studentName', '$gender', '$category', '$stateDomicile', '$nationality', '$email', '$enrolmentID', '$mobileNumber', '$joiningYear', '$programmeCode', '$programmeName', '$yearOfIntroduction', '$implementationStatus', '$yearOfRevision', '$percentageContentChange', '$courseName', '$courseCode', '$courseContent', '$studentProjects', '$documentLink')";

//     $query_run = mysqli_query($conn, $query);
//     if ($query_run) {
//         $_SESSION['message'] = "Student Created Successfully";
//         header("Location: student-create.php");
//         exit(0);
//     } else {
//         $_SESSION['message'] = "Student Not Created";
//         header("Location: student-create.php");
//         exit(0);
//     }
// }


// Assuming you have already established a database connection




if (isset($_POST['save_teacher'])) {
    ////////////////////////////////section 2///////////////////////////////
    $seats_sanctioned = $_POST["seats_sanctioned"];
    $students_admitted = $_POST["students_admitted"];
    $sc_seats = $_POST["sc_seats"];
    $st_seats = $_POST["st_seats"];
    $obc_seats = $_POST["obc_seats"];
    $divyangjan_seats = $_POST["divyangjan_seats"];
    $gen_seats = $_POST["gen_seats"];
    $others_seats = $_POST["others_seats"];

    // Capture data from input fields
    $teacherName = $_POST['teacherName'];
    $pan = $_POST['pan'];
    $designation = $_POST['designation'];
    $appointmentYear = $_POST['appointmentYear'];
    $appointmentNature = isset($_POST['appointmentNature']) ? $_POST['appointmentNature'] : '';
    $departmentName = $_POST['departmentName'];
    $experienceYears = $_POST['experienceYears'];
    $stillServing1 = isset($_POST['stillServing1']) ? $_POST['stillServing1'] : '';
    $teacherNamePhD = isset($_POST['teacherNamePhD']) ? $_POST['teacherNamePhD'] : '';
    $qualificationYear = $_POST['qualificationYear'];
    $recognizedGuide = $_POST['recognizedGuide'];
    $recognitionYear = $_POST['recognitionYear'];
    $stillServing2 = $_POST['stillServing2'];
    $researchScholar = $_POST['researchScholar'];
    $registrationYear = $_POST['registrationYear'];
    $guideAllotmentLink = $_POST['guideAllotmentLink'];
    $programmeName = $_POST['programmeName'];
    $programmeCode = $_POST['programmeCode'];
    $semesterYear = $_POST['semesterYear'];
    $lastExamDate = $_POST['lastExamDate'];
    $resultDate = $_POST['resultDate'];
    $programCode = $_POST['programCode'];
    $programName = $_POST['programName'];
    $studentsAppeared = $_POST['studentsAppeared'];
    $studentsPassed = $_POST['studentsPassed'];

    // $teacherNamePhD2 = $_POST['teacherNamePhD2'];
    // $qualificationYear2 = $_POST['qualificationYear2'];
    // $recognizedGuide2 = $_POST['recognizedGuide2'];
    // $recognitionYear2 = $_POST['recognitionYear2'];
    // $stillServing3 = $_POST['stillServing3'];
    // $researchScholar2 = $_POST['researchScholar2'];
    // $registrationYear2 = $_POST['registrationYear2'];
    // $guideAllotmentLink2 = $_POST['guideAllotmentLink2'];

    $teacherNameSeedMoney = isset($_POST['teacherNameSeedMoney']) ? $_POST['teacherNameSeedMoney'] : '';
    $seedAmount = $_POST['seedAmount'];
    $yearReceived = $_POST['yearReceived'];
    $policyLink = $_POST['policyLink'];
    $teacherNameAward = isset($_POST['teacherNameAward']) ? $_POST['teacherNameAward'] : '';
    $awardName = $_POST['awardName'];
    $awardYear = $_POST['awardYear'];
    $awardingAgency = $_POST['awardingAgency'];

    $pi_co_pi_name = $_POST["pi_co_pi_name"];
    $funding_agency = $_POST["funding_agency"];
    $type = $_POST["type"];
    $department = $_POST["department"];
    $funds_provided = $_POST["funds_provided"];
    $duration = $_POST["duration"];



    /////////////////////////////////Section 4///////////////////////////
    $roomName = $_POST['roomName'];
    $ictFacility = $_POST['ictFacility'];
    $photoLink = $_POST['photoLink'];
    $timetable = $_POST['timetable'];
    $year = $_POST['year'];
    $budget = $_POST['budget'];
    $expenditure = $_POST['expenditure'];
    $totalExpenditure = $_POST['totalExpenditure'];
    $maintenanceAcademic = $_POST['maintenanceAcademic'];
    $maintenancePhysical = $_POST['maintenancePhysical'];
    // $teacherName = $_POST['teacherName'];
    $module = $_POST['module'];
    $platform = $_POST['platform'];
    $launchDate = $_POST['launchDate'];
    $documentLink = $_POST['documentLink'];
    $facility = $_POST['facility'];
    $developmentFacility = $_POST['developmentFacility'];
    $videoLink = $_POST['videoLink'];
////////////////////////section 3 continue/////////////
    $workshop_name = isset($_POST['workshop_name'])?$_POST['workshop_name']:'';
    $participants = $_POST['participants'];
    $date = isset($_POST['date'])?$_POST['date']:'';
    $activity_report_link = isset($_POST['activity_report_link'])?$_POST['activity_report_link']:'';

    $author_name = $_POST['author_name'];
    $department = $_POST['department'];
    $journal_name = $_POST['journal_name'];
    $publication_year = isset($_POST['publication_year'])? $_POST['publication_year']:''; 
    $issn_number = $_POST['issn_number'];
    $journal_website = $_POST['journal_website'];
    $article_link = $_POST['article_link'];
    $listing_status = $_POST['listing_status'];

    $teacher_consultants = $_POST['teacher_consultants'];
    $project_name = $_POST['project_name'];
    $agency_details = $_POST['agency_details'];
    $revenue_generated = $_POST['revenue_generated'];
    $trainees = $_POST['trainees'];

    $teachers_staff_names = $_POST['teachers_staff_names'];
    $facilities_name_department = $_POST['facilities_name_department'];
    $agency_details = $_POST['agency_details'];
    $consultancy_name = $_POST['consultancy_name'];
    $total_amount_spent = $_POST['total_amount_spent'];

    // $activity_name = $_POST['activity_name'];
    $organizing_unit = $_POST['organizing_unit'];
    // $scheme_name = $_POST['scheme_name'];
    // $participants = $_POST['participants'];


///////////////////////section5 //////////////////////////////////////////////////
$scheme_name = $_POST['scheme_name'];
    $gov_students = $_POST['gov_students'];
    $gov_amount = $_POST['gov_amount'];
    $ngo_students = $_POST['ngo_students'];
    $ngo_amount = $_POST['ngo_amount'];
    $ngo_name = $_POST['ngo_name'];
    $capacity_programme = isset($_POST['capacity_programme'])? $_POST['capacity_programme']: '';
    $implementationDate = $_POST['implementationDate'];
    $enrolledStudents = $_POST['enrolledStudents'];
    $agencies = $_POST['agencies'];
    $activity_name = $_POST['activity_name'];
    $students_attended = $_POST['students_attended'];
    $students_placed = $_POST['students_placed'];
    $eventDate = $_POST['eventDate'];
    $teamIndividual = $_POST['teamIndividual'];
    $competitionLevel = isset($_POST['competitionLevel']) ? $_POST['competitionLevel'] :'';
    $eventName = $_POST['eventName'];

//     ALTER TABLE teacherform
// ADD COLUMN role VARCHAR(50),


// ADD COLUMN year_placement VARCHAR(4),
// ADD COLUMN studentName_placement VARCHAR(255),
// ADD COLUMN programGraduated_placement VARCHAR(255),
// ADD COLUMN employerName VARCHAR(255),
// ADD COLUMN payPackage VARCHAR(255),
// ADD COLUMN studentName_higher_education VARCHAR(255),
// ADD COLUMN institutionJoined VARCHAR(255),
// ADD COLUMN programAdmitted VARCHAR(255);


///////////////section 6///////////////////////////////
$e_governance = $_POST['teamIndividual'];
$conferenceName = $_POST['conferenceName'];

$conferenceName = $_POST['conferenceName'];
$professionalBody = $_POST['professionalBody'];
$amount = $_POST['amount'];

$role = $_POST['role'];
$dates_from = isset($_POST['dates_from']) ? $_POST['dates_from'] :'';
$dates_to = isset($_POST['dates_to']) ? $_POST['dates_to'] :'';
$program_title = isset($_POST['program_title']) ? $_POST['program_title'] : '';




    // Construct the SQL query
    $query = "INSERT INTO teacherform 
                (seats_sanctioned, students_admitted, sc_seats, st_seats, obc_seats, divyangjan_seats, gen_seats, others_seats,teacherName, pan, designation, appointmentYear, appointmentNature, departmentName, experienceYears, stillServing1, teacherNamePhD, qualificationYear, recognizedGuide, recognitionYear, stillServing2, researchScholar, registrationYear, guideAllotmentLink, programmeName, programmeCode, semesterYear, lastExamDate, resultDate, programCode, programName, studentsAppeared, studentsPassed,  teacherNameSeedMoney, seedAmount, yearReceived, policyLink, teacherNameAward, awardName, awardYear, awardingAgency,roomName, ictFacility, photoLink, timetable, year, budget, expenditure, totalExpenditure, maintenanceAcademic, maintenancePhysical,  module, platform, launchDate, documentLink, facility, developmentFacility, videoLink,pi_co_pi_name, funding_agency, type, department, funds_provided, duration,workshop_name, participants, date, activity_report_link,author_name, department, journal_name, publication_year, issn_number, journal_website, article_link, listing_status,teachers_staff_names, facilities_name_department, agency_details, consultancy_name, total_amount_spent,activity_name, organizing_unit, scheme_name, participants,scheme_name, gov_students, gov_amount, ngo_students, ngo_amount, ngo_name, capacity_programme, implementationDate, enrolledStudents, agencies, activity_name, students_attended, students_placed, eventDate, teamIndividual, competitionLevel, eventName,e_governance, conference_name,conference_name, professional_body, amount,role, dates_from, dates_to, program_title) 
              VALUES 
                ('$seats_sanctioned', '$students_admitted', '$sc_seats', '$st_seats', '$obc_seats', '$divyangjan_seats', '$gen_seats', '$others_seats','$teacherName', '$pan', '$designation', '$appointmentYear', '$appointmentNature', '$departmentName', '$experienceYears', '$stillServing1', '$teacherNamePhD', '$qualificationYear', '$recognizedGuide', '$recognitionYear', '$stillServing2', '$researchScholar', '$registrationYear', '$guideAllotmentLink', '$programmeName', '$programmeCode', '$semesterYear', '$lastExamDate', '$resultDate', '$programCode', '$programName', '$studentsAppeared', '$studentsPassed',  '$teacherNameSeedMoney', '$seedAmount', '$yearReceived', '$policyLink', '$teacherNameAward', '$awardName', '$awardYear', '$awardingAgency','$roomName', '$ictFacility', '$photoLink', '$timetable', '$year', '$budget', '$expenditure', '$totalExpenditure', '$maintenanceAcademic', '$maintenancePhysical',  '$module', '$platform', '$launchDate', '$documentLink', '$facility', '$developmentFacility', '$videoLink','$pi_co_pi_name', '$funding_agency', '$type', '$department', '$funds_provided', '$duration','$workshop_name', '$participants', '$date', '$activity_report_link','$author_name', '$department', '$journal_name', '$publication_year', '$issn_number', '$journal_website', '$article_link', '$listing_status','$teachers_staff_names', '$facilities_name_department', '$agency_details', '$consultancy_name', '$total_amount_spent','$activity_name', '$organizing_unit', '$scheme_name', '$participants','$scheme_name', '$gov_students', '$gov_amount', '$ngo_students', '$ngo_amount', '$ngo_name', '$capacity_programme', '$implementationDate', '$enrolledStudents', '$agencies', '$activity_name', '$students_attended', '$students_placed', '$eventDate', '$teamIndividual', '$competitionLevel', '$eventName','$e_governance', '$conferenceName','$conferenceName', '$professionalBody', '$amount','$role', '$dates_from', '$dates_to', '$program_title')";

    // Execute the query
    if (mysqli_query($conn, $query)) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}



























































// if (isset($_POST['save_teacher'])) {
//     // Capture data from input fields
//     $teacherName = $_POST['teacherName'];
//     $pan = $_POST['pan'];
//     $designation = $_POST['designation'];
//     $appointmentYear = $_POST['appointmentYear'];
//     $appointmentNature = isset($_POST['appointmentNature']) ? $_POST['appointmentNature'] : '';
//     $departmentName = $_POST['departmentName'];
//     $experienceYears = $_POST['experienceYears'];
//     $stillServing1 = $_POST['stillServing1'];
//     $teacherNamePhD = $_POST['teacherNamePhD'];
//     $qualificationYear = $_POST['qualificationYear'];
//     $recognizedGuide = $_POST['recognizedGuide'];
//     $recognitionYear = $_POST['recognitionYear'];
//     $stillServing2 = $_POST['stillServing2'];
//     $researchScholar = $_POST['researchScholar'];
//     $registrationYear = $_POST['registrationYear'];
//     $guideAllotmentLink = $_POST['guideAllotmentLink'];
//     $programmeName = $_POST['programmeName'];
//     $programmeCode = $_POST['programmeCode'];
//     $semesterYear = $_POST['semesterYear'];
//     $lastExamDate = $_POST['lastExamDate'];
//     $resultDate = $_POST['resultDate'];
//     $programCode = $_POST['programCode'];
//     $programName = $_POST['programName'];
//     $studentsAppeared = $_POST['studentsAppeared'];
//     $studentsPassed = $_POST['studentsPassed'];

//     // $teacherNamePhD2 = $_POST['teacherNamePhD2'];
//     // $qualificationYear2 = $_POST['qualificationYear2'];
//     // $recognizedGuide2 = $_POST['recognizedGuide2'];
//     // $recognitionYear2 = $_POST['recognitionYear2'];
//     // $stillServing3 = $_POST['stillServing3'];
//     // $researchScholar2 = $_POST['researchScholar2'];
//     // $registrationYear2 = $_POST['registrationYear2'];
//     // $guideAllotmentLink2 = $_POST['guideAllotmentLink2'];

//     $teacherNameSeedMoney = $_POST['teacherNameSeedMoney'];
//     $seedAmount = $_POST['seedAmount'];
//     $yearReceived = $_POST['yearReceived'];
//     $policyLink = $_POST['policyLink'];
//     $teacherNameAward = $_POST['teacherNameAward'];
//     $awardName = $_POST['awardName'];
//     $awardYear = $_POST['awardYear'];
//     $awardingAgency = $_POST['awardingAgency'];


//     /////////////////////////////////Section 4///////////////////////////
//     $roomName = $_POST['roomName'];
//     $ictFacility = $_POST['ictFacility'];
//     $photoLink = $_POST['photoLink'];
//     $timetable = $_POST['timetable'];
//     $year = $_POST['year'];
//     $budget = $_POST['budget'];
//     $expenditure = $_POST['expenditure'];
//     $totalExpenditure = $_POST['totalExpenditure'];
//     $maintenanceAcademic = $_POST['maintenanceAcademic'];
//     $maintenancePhysical = $_POST['maintenancePhysical'];
//     // $teacherName = $_POST['teacherName'];
//     $module = $_POST['module'];
//     $platform = $_POST['platform'];
//     $launchDate = $_POST['launchDate'];
//     $documentLink = $_POST['documentLink'];
//     $facility = $_POST['facility'];
//     $developmentFacility = $_POST['developmentFacility'];
//     $videoLink = $_POST['videoLink'];

//     /////////////////////////////section 5//////////////////////////////////
//     $scheme_name = $_POST['scheme_name'];
//     $gov_students = $_POST['gov_students'];
//     $gov_amount = $_POST['gov_amount'];
//     $ngo_students = $_POST['ngo_students'];
//     $ngo_amount = $_POST['ngo_amount'];
//     $ngo_name = $_POST['ngo_name'];
//     $capacity_programme = $_POST['capacity_programme'];
//     $implementationDate = $_POST['implementationDate'];
//     $enrolledStudents = $_POST['enrolledStudents'];
//     $agencies = $_POST['agencies'];
//     $activity_name = $_POST['activity_name'];
//     $students_attended = $_POST['students_attended'];
//     $students_placed = $_POST['students_placed'];
//     $eventDate = $_POST['eventDate'];
//     $teamIndividual = $_POST['teamIndividual'];
//     $competitionLevel = $_POST['competitionLevel'];
//     $eventName = $_POST['eventName'];


//     // Construct the SQL query
//     $query = "INSERT INTO teacherform 
//                 (teacherName, pan, designation, appointmentYear, appointmentNature, departmentName, experienceYears, stillServing1, teacherNamePhD, qualificationYear, recognizedGuide, recognitionYear, stillServing2, researchScholar, registrationYear, guideAllotmentLink, programmeName, programmeCode, semesterYear, lastExamDate, resultDate, programCode, programName, studentsAppeared, studentsPassed,  teacherNameSeedMoney, seedAmount, yearReceived, policyLink, teacherNameAward, awardName, awardYear, awardingAgency,roomName, ictFacility, photoLink, timetable, year, budget, expenditure, totalExpenditure, maintenanceAcademic, maintenancePhysical,  module, platform, launchDate, documentLink, facility, developmentFacility, videoLink, scheme_name, gov_students, gov_amount, ngo_students, ngo_amount, ngo_name, capacity_programme, implementationDate, enrolledStudents, agencies, activity_name, students_attended, students_placed, eventDate, teamIndividual, competitionLevel, eventName) 
//               VALUES 
//                 ('$teacherName', '$pan', '$designation', '$appointmentYear', '$appointmentNature', '$departmentName', '$experienceYears', '$stillServing1', '$teacherNamePhD', '$qualificationYear', '$recognizedGuide', '$recognitionYear', '$stillServing2', '$researchScholar', '$registrationYear', '$guideAllotmentLink', '$programmeName', '$programmeCode', '$semesterYear', '$lastExamDate', '$resultDate', '$programCode', '$programName', '$studentsAppeared', '$studentsPassed',  '$teacherNameSeedMoney', '$seedAmount', '$yearReceived', '$policyLink', '$teacherNameAward', '$awardName', '$awardYear', '$awardingAgency','$roomName', '$ictFacility', '$photoLink', '$timetable', '$year', '$budget', '$expenditure', '$totalExpenditure', '$maintenanceAcademic', '$maintenancePhysical',  '$module', '$platform', '$launchDate', '$documentLink', '$facility', '$developmentFacility', '$videoLink', '$scheme_name', '$gov_students', '$gov_amount', '$ngo_students', '$ngo_amount', '$ngo_name', '$capacity_programme', '$implementationDate', '$enrolledStudents', '$agencies', '$activity_name', '$students_attended', '$students_placed', '$eventDate', '$teamIndividual', '$competitionLevel', '$eventName')";

//     // Execute the query
//     if (mysqli_query($conn, $query)) {
//         echo "Data inserted successfully.";
//     } else {
//         echo "Error: " . $query . "<br>" . mysqli_error($conn);
//     }
// }


?>