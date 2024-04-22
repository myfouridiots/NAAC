<?php
//export.php  
$connect = mysqli_connect("localhost", "root", "", "aqar");
$output = '';
if (isset($_POST["export_excel"])) {
    $query = "SELECT id, studentName, gender, email, joiningYear, programmeName FROM studentform";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
        // Fetch column names
        $columns = [];
        while ($fieldinfo = mysqli_fetch_field($result)) {
            $columns[] = $fieldinfo->name;
        }

        $output .= '<table class="table" bordered="1">';
        $output .= '<tr>';
        // Output table headers
        foreach ($columns as $column) {
            $output .= '<th>' . ucfirst($column) . '</th>';
        }
        $output .= '</tr>';

        // Output table data
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '<tr>';
            foreach ($row as $data) {
                $output .= '<td>' . $data . '</td>';
            }
            $output .= '</tr>';
        }

        $output .= '</table>';
        
        // Set headers for Excel file download
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=students.xls');

        // Output the generated table
        echo $output;
    }
}
?>
