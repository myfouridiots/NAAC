<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('includes/header1.php');
    ?>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php
        include('includes/sidebar1.php');
        ?>
        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <!-- Button for sidebar toggle -->
                <button class="btn" type="button" data-bs-theme="dark">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                    <h3 class="text-center mb-7">Welcome to Student Dashboard</h3>
                    </div>
                    <div class="row mt-5"></div>

                </div>
            </main>
        </div>
    </div>
    <script>
        const toggler = document.querySelector(".btn");
        toggler.addEventListener("click", function() {
            document.querySelector("#sidebar").classList.toggle("collapsed");
        });
    </script>
</body>

</html>