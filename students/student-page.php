<?php
include "authguard.php";

// include "../criteria-codes/section-form/section-1.php";
include "student_profile.html";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="add btn-bg-color btn-sm col-xs-2 margin-left">
            <a href="student-create.php" class="btn btn-success float-end">Add</a>
        </div>

        <div class="edit btn-bg-color btn-sm col-xs-2 margin-left">
            <a href="student-edit.php" class="btn btn-success float-end">Edit </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>