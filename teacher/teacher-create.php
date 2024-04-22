<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .form-section {
            display: none;
        }

        .active {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container mt-5 mb-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Teacher Student Add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body m-5 mt-1">
                        <form action="code.php" method="POST">
                            <div class="d-flex justify-content-between m-4">
                                <input type="button" class="btn btn-primary" value="Previous" onclick="previousSection()">
                                <em id="demo">1</em>
                                <input type="button" class="btn btn-primary" value="Next" onclick="nextSection()" style="content: counter(page);">
                            </div>
                            <div id="long-form">
                                <?php include('../section/section-1.php'); ?>
                                <?php include('../section/section-2.php'); ?>
                                <?php include('../section/section-3.php'); ?>
                                <?php include('../section/section-4.php'); ?>
                                <?php include('../section/section-5.php'); ?>
                                <?php include('../section/section-6.php'); ?>
                                <?php include('../section/section-7.php'); ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentSection = 1;
        const formSections = document.querySelectorAll('.form-section');

        function showSection(sectionNumber) {
            formSections.forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(`section${sectionNumber}`).classList.add('active');
            currentSection = sectionNumber;
        }

        function previousSection() {
            if (currentSection > 1) {
                currentSection--;
                showSection(currentSection);
                document.getElementById("demo").innerHTML = currentSection;

            }
        }

        function nextSection() {
            if (currentSection < formSections.length) {
                currentSection++;
                showSection(currentSection);
                document.getElementById("demo").innerHTML = currentSection;
            }
        }
    </script>

</body>
<script>
    function showCourseDetails() {
        document.getElementById('courseDetails').style.display = 'block';
    }

    function hideCourseDetails() {
        document.getElementById('courseDetails').style.display = 'none';
    }
</script>

</html>