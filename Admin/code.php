
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

if (isset($_POST['update_student'])) {
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
    $studentName = mysqli_real_escape_string($conn, $_POST['studentName']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $stateDomicile = mysqli_real_escape_string($conn, $_POST['stateDomicile']);
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $email = $_POST['email'];
    $enrolmentID = mysqli_real_escape_string($conn, $_POST['enrolmentID']);
    $mobileNumber = mysqli_real_escape_string($conn, $_POST['mobileNumber']);
    $joiningYear = mysqli_real_escape_string($conn, $_POST['joiningYear']);
    $programmeCode = mysqli_real_escape_string($conn, $_POST['programmeCode']);
    $programmeName = mysqli_real_escape_string($conn, $_POST['programmeName']);
    $yearOfIntroduction = mysqli_real_escape_string($conn, $_POST['yearOfIntroduction']);
    $implementationStatus = mysqli_real_escape_string($conn, $_POST['implementationStatus']);
    $yearOfRevision = mysqli_real_escape_string($conn, $_POST['yearOfRevision']);
    $percentageContentChange = mysqli_real_escape_string($conn, $_POST['percentageContentChange']);
    $courseName = mysqli_real_escape_string($conn, $_POST['courseName']);
    $courseCode = mysqli_real_escape_string($conn, $_POST['courseCode']);
    $courseContent = mysqli_real_escape_string($conn, $_POST['courseContent']);
    $studentProjects = mysqli_real_escape_string($conn, $_POST['studentProjects']);
    $documentLink = $_POST['documentLink'];

    $query = "UPDATE studentform SET studentName='$studentName', gender='$gender', category='$category', stateDomicile='$stateDomicile', nationality='$nationality', email='$email', enrolmentID='$enrolmentID', mobileNumber='$mobileNumber', joiningYear='$joiningYear', programmeCode='$programmeCode', programmeName='$programmeName', yearOfIntroduction='$yearOfIntroduction', implementationStatus='$implementationStatus', yearOfRevision='$yearOfRevision', percentageContentChange='$percentageContentChange', courseName='$courseName', courseCode='$courseCode', courseContent='$courseContent', studentProjects='$studentProjects', documentLink='$documentLink' WHERE id='$student_id'";

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


if (isset($_POST['save_student'])) {
    $studentName = mysqli_real_escape_string($conn, $_POST['studentName']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $stateDomicile = mysqli_real_escape_string($conn, $_POST['stateDomicile']);
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $email = $_POST['email'];
    $enrolmentID = mysqli_real_escape_string($conn, $_POST['enrolmentID']);
    $mobileNumber = mysqli_real_escape_string($conn, $_POST['mobileNumber']);
    $joiningYear = mysqli_real_escape_string($conn, $_POST['joiningYear']);
    $programmeCode = mysqli_real_escape_string($conn, $_POST['programmeCode']);
    $programmeName = mysqli_real_escape_string($conn, $_POST['programmeName']);
    $yearOfIntroduction = mysqli_real_escape_string($conn, $_POST['yearOfIntroduction']);
    $implementationStatus = mysqli_real_escape_string($conn, $_POST['implementationStatus']);
    $yearOfRevision = mysqli_real_escape_string($conn, $_POST['yearOfRevision']);
    $percentageContentChange = mysqli_real_escape_string($conn, $_POST['percentageContentChange']);
    $courseName = mysqli_real_escape_string($conn, $_POST['courseName']);
    $courseCode = mysqli_real_escape_string($conn, $_POST['courseCode']);
    $courseContent = mysqli_real_escape_string($conn, $_POST['courseContent']);
    $studentProjects = mysqli_real_escape_string($conn, $_POST['studentProjects']);
    $documentLink = $_POST['documentLink'];

    $query = "INSERT INTO studentform VALUES ('','$studentName', '$gender', '$category', '$stateDomicile', '$nationality', '$email', '$enrolmentID', '$mobileNumber', '$joiningYear', '$programmeCode', '$programmeName', '$yearOfIntroduction', '$implementationStatus', '$yearOfRevision', '$percentageContentChange', '$courseName', '$courseCode', '$courseContent', '$studentProjects', '$documentLink')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    } else {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>