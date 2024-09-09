<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>

        
    </style>
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
            <div class="cards row gap-3 justify-content-center mt-5">
                <div class=" card__items card__items--blue col-md-3 position-relative">
                    <div class="card__students d-flex flex-column gap-2 mt-3">
                        <i class="far fa-graduation-cap h3"></i>
                        <span>Employee</span>
                    </div>
                    <div class="card__nbr-students">
                        <span class="h5 fw-bold nbr">200</span>
                    </div>
                </div>

                <div class=" card__items card__items--red col-md-5 position-relative">
                    <div class="card__Course d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-bookmark h3"></i>
                        <span>Gold production</span>
                    </div>
                    <div class="card__nbr-course">
                        <span class="h5 fw-bold nbr">45</span>
                    </div>
                </div>

                <div class=" card__items card__items--yellow col-md-3 position-relative">
                    <div class="card__payments d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-usd-square h3"></i>
                        <span>Inventory</span>
                    </div>
                    <div class="card__payments">
                        <span class="h5 fw-bold nbr">556,000</span>
                    </div>
                </div>

                <div class="card__items card__items--orange col-md-3 position-relative">
                    <div class="card__users d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-user h3"></i>
                        <span>Mining Equipment</span>
                    </div>
                    <span class="h5 fw-bold nbr">33</span>
                </div>
                <div class="card__items card__items--blue col-md-3 position-relative">
                    <div class="card__users d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-user h3"></i>
                        <span>Miming Activity</span>
                    </div>
                    <span class="h5 fw-bold nbr">11</span>
                </div>
                <div class="card__items card__items--green col-md-3 position-relative">
                    <div class="card__users d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-user h3"></i>
                        <span>Complaints</span>
                    </div>
                    <span class="h5 fw-bold nbr">78</span>
                </div>
                <div class="card__items card__items--red col-md-3 position-relative">
                    <div class="card__users d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-user h3"></i>
                        <span>Gold production</span>
                    </div>
                    <span class="h5 fw-bold nbr">96</span>
                </div>
                <div class="card__items card__items--yellow col-md-3 position-relative">
                    <div class="card__users d-flex flex-column gap-2 mt-3">
                        <i class="fal fa-user h3"></i>
                        <span>Users</span>
                    </div>
                    <span class="h5 fw-bold nbr">3</span>
                </div>
            </div>

        </div>
        <!-- end contentpage -->
    </main>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>