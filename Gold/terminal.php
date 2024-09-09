<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/terminal.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php 
            include "includes/components/sidebar.php";
            include 'includes/dbcon.php';
        ?>
        <!-- end sidebar -->

        

        <!-- start content page -->
        <div class="container-fluid px">
            <?php 
                include "includes/components/header.php";
            ?>

    <h1>MySQL Web Terminal</h1>
        <div id="terminal">
            <form method="POST">
                <textarea name="sql_query" placeholder="Enter SQL query..." rows="4" required></textarea>
                <button type="submit">Execute</button>
            </form>
<pre>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    include 'includes/dbcon.php';

    $sql_query = $_POST['sql_query'];
    $result = $conn->query($sql_query);

    if ($result) {
        if ($result === true) {
            echo "Query executed successfully.";
        } elseif ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo json_encode($row, JSON_PRETTY_PRINT) . "\n";
            }
        } else {
            echo "No results found.";
        }
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
        </pre>
    </div>

        </div>
        <!-- end contentpage -->
    </main>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>