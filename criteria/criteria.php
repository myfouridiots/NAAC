<?php
session_start();
//require 'dbcon.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <style>
        #criteria1Sub,
        #criteria2Sub,
        #criteria3Sub,
        #criteria4Sub,
        #criteria5Sub,
        #criteria6Sub,
        #criteria7Sub {
            display: none;
        }

        #criteria1,
        #criteria2,
        #criteria3,
        #criteria4,
        #criteria5,
        #criteria6,
        #criteria7 {
            cursor: pointer;
            
        }
    </style>

    <?php
    include('../Admin/includes/header1.php');
    ?>
    <title>Student CRUD</title>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php
        include('../Admin/includes/sidebar1.php');
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
                        <h3>welcome to Admin Dashboard</h3>
                    </div>
                    <div class="container list-group col-lg-5">
                        <div onclick="toggleSubCriteria('criteria1')" class='list-group-item list-group-item-action active' id="criteria1">criteria 1</div>
                        <div id="criteria1Sub">
                            <a href="./criteria1-1.php" class="list-group-item list-group-item-action">crtieria 1.1.2 and 1.2.2</a>  
                            <a href="./criteria1-2.php" class="list-group-item list-group-item-action">crtieria 1.1.3 and 1.2.1</a>
                            <a href="./criteria1-3.php" class="list-group-item list-group-item-action">crtieria 1.3.2 and 1.3.3</a>
                            <a href="./criteria1-4.php" class="list-group-item list-group-item-action">crtieria 1.3.4</a>
                        </div><br />

                        <div onclick="toggleSubCriteria('criteria2')" class='list-group-item list-group-item-action active' id="criteria2">criteria 2</div>
                        <div id="criteria2Sub">
                            <a href="./criteria2-1.php" class="list-group-item list-group-item-action">crtieria 2.1.1</a>
                            <a href="./criteria2-2.php" class="list-group-item list-group-item-action">crtieria 2.1.2 </a>
                            <a href="./criteria2-4a.php" class="list-group-item list-group-item-action">crtieria 2.4.1 & 2.4.3 </a>
                            <a href="./criteria2-4b.php" class="list-group-item list-group-item-action">crtieria 2.4.2, 3.2.3 && 3.4.2 </a>
                            <a href="./criteria2-5.php" class="list-group-item list-group-item-action">crtieria 2.5.1 </a>
                            <a href="./criteria2-6.php" class="list-group-item list-group-item-action">crtieria 2.6.3 </a>
                            <a href="./criteria2-7.php" class="list-group-item list-group-item-action">crtieria 2.7.1 </a>
                        </div><br />

                        <div onclick="toggleSubCriteria('criteria3')" class='list-group-item list-group-item-action active' id="criteria3" >criteria 3</div>
                        <div id="criteria3Sub">
                            <a href="./criteria3-1a.php" class="list-group-item list-group-item-action">crtieria 3.1.2 </a>
                            <a href="./criteria3-1b.php" class="list-group-item list-group-item-action">crtieria 3.1.3 </a>
                            <a href="./criteria3-2.php" class="list-group-item list-group-item-action">crtieria 3.2.1, 3.2.2 & 3.2.4 </a>
                            <a href="./criteria3-3.php" class="list-group-item list-group-item-action">crtieria 3.3.2 </a>
                            <a href="./criteria3-4a.php" class="list-group-item list-group-item-action">crtieria 3.4.3 </a>
                            <a href="./criteria3-4b.php" class="list-group-item list-group-item-action">crtieria 3.4.4 </a>
                            <a href="./criteria3-5a.php" class="list-group-item list-group-item-action">crtieria 3.5.1  </a>
                            <a href="./criteria3-5b.php" class="list-group-item list-group-item-action">crtieria 3.5.2 </a>
                            <a href="./criteria3-6a.php" class="list-group-item list-group-item-action">crtieria 3.6.2 </a>
                            <a href="./criteria3-6b.php" class="list-group-item list-group-item-action">crtieria 3.6.3 & 3.6.4 </a>
                            <a href="./criteria3-7a.php" class="list-group-item list-group-item-action">crtieria 3.7.1 </a>
                            <a href="./criteria3-7b.php" class="list-group-item list-group-item-action">crtieria 3.7.2 </a>
                        </div><br />

                        <div onclick="toggleSubCriteria('criteria4')" class='list-group-item list-group-item-action active' id="criteria4" >criteria 4</div>
                        <div id="criteria4Sub">
                            <a href="./criteria4-1a.php" class="list-group-item list-group-item-action">crtieria 4.1.3 </a>
                            <a href="./criteria4-1b.php" class="list-group-item list-group-item-action">crtieria 4.1.4 &4.4.4.1 </a>
                            <a href="./criteria4-2.php" class="list-group-item list-group-item-action">crtieria 4.2.2. & 4.2.3 </a>
                            <a href="./criteria4-3.php" class="list-group-item list-group-item-action">crtieria 4.3.4 </a>
                        </div><br />

                        <div onclick="toggleSubCriteria('criteria5')" class='list-group-item list-group-item-action active'id="criteria5">criteria 5</div>
                        <div id="criteria5Sub">
                            <a href="./criteria5-1a.php" class="list-group-item list-group-item-action">crtieria 5.1.1. & 5.1.2 </a>
                            <a href="./criteria5-1b.php" class="list-group-item list-group-item-action">crtieria 5.1.3 </a>
                            <a href="./criteria5-1c.php" class="list-group-item list-group-item-action">crtieria 5.1.4 </a>
                            <a href="./criteria5-2a.php" class="list-group-item list-group-item-action">crtieria 5.2.1 </a>
                            <a href="./criteria5-2b.php" class="list-group-item list-group-item-action">crtieria 5.2.2</a>
                            <a href="./criteria5-2c.php" class="list-group-item list-group-item-action">crtieria 5.2.3 </a>
                            <a href="./criteria5-3a.php" class="list-group-item list-group-item-action">crtieria 5.3.1 </a>
                            <a href="./criteria5-3b.php" class="list-group-item list-group-item-action">crtieria 5.3.3 </a>
                        </div><br />

                        <div onclick="toggleSubCriteria('criteria6')" class='list-group-item list-group-item-action active'id="criteria6">criteria 6</div>
                        <div id="criteria6Sub">
                            <a href="./criteria6-1.php" class="list-group-item list-group-item-action">crtieria 6.2.3 </a>
                            <a href="./criteria6-3a.php" class="list-group-item list-group-item-action">crtieria 6.3.2 </a>
                            <a href="./criteria6-3b.php" class="list-group-item list-group-item-action">crtieria 6.3.3 </a>
                            <a href="./criteria6-3c.php" class="list-group-item list-group-item-action">crtieria 6.3.4 </a>
                            <a href="./criteria6-4.php" class="list-group-item list-group-item-action">crtieria 6.4.2 </a>
                            <a href="./criteria6-5.php" class="list-group-item list-group-item-action">crtieria 6.5.3 </a>
                            
                        </div><br />

                        <div onclick="toggleSubCriteria('criteria7')" class='list-group-item list-group-item-action active'id="criteria7">criteria 7</div>
                        <div id="criteria7Sub">
                            <a href="./criteria2-6.php" class="list-group-item list-group-item-action">crtieria 101 </a>
                            <a href="./criteria2-6.php" class="list-group-item list-group-item-action">crtieria 102 </a>
                            <a href="./criteria2-6.php" class="list-group-item list-group-item-action">crtieria 103 </a>
                            <a href="./criteria2-6.php" class="list-group-item list-group-item-action">crtieria 104 </a>
                        </div><br />
                    </div>

                    <script>
                        function toggleSubCriteria(criteria) {
                            // Get the sub-criteria element for the selected criteria
                            var subCriteriaElement = document.getElementById(criteria + 'Sub');

                            // Toggle the visibility of the sub-criteria
                            subCriteriaElement.style.display = (subCriteriaElement.style.display === 'none' || subCriteriaElement.style.display === '') ? 'block' : 'none';
                        }


                        function exportContent(criteriaId) {
                            // Get the content of the specific criteria
                            var criteriaContent = document.getElementById(criteriaId).textContent;

                            // Send an AJAX request to a PHP file with the criteria content
                            $.ajax({
                                type: 'POST',
                                url: './students/exportToExcel.php', // Replace with the actual PHP file URL
                                data: {
                                    content: criteriaContent
                                },
                                success: function(response) {
                                    // Handle the response from the PHP file if needed
                                    console.log(response);
                                },
                                error: function(error) {
                                    console.error('Error:', error);
                                }
                            });
                        }
                    </script>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>