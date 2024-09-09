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
</head>

<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php
        include "includes/components/sidebar.php";
        $conn = mysqli_connect('localhost', 'me', 'password', 'stoneforest');
        $query = "SELECT site.site_id, site.site_name FROM site";
        $result = mysqli_query($conn, $query);

        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px">
            <?php
            include "includes/components/header.php";
            ?>
            <div class="button-add-student">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Activity</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Activity</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="" enctype="multipart/form-data">
                                    <div class="">
                                        <label for="recipient-name" class="col-form-label">Amount of Extracted Ore:</label>
                                        <input type="text" class="form-control" placeholder="gram" id="recipient-name" name="Name">
                                    </div>
                                    <div class="">
                                        <label for="recipient-name" class="col-form-label">Work Hours:</label>
                                        <input type="text" class="form-control" id="recipient-name" name="Email">
                                    </div>
                                    <div class="">
                                        <label for="recipient-name" class="col-form-label">Equipment Used:</label>
                                        <input type="text" class="form-control" placeholder="Truck, Cement Mixer..." id="recipient-name" name="Phone">
                                    </div>
                                    <div class="">
                                        <label for="recipient-name" class="col-form-label">Safety Inspection:</label>
                                        <input type="text" class="form-control" placeholder="Truck, Cement Mixer..." id="recipient-name" name="Phone">
                                    </div>
                                    <div class="">
                                        <label for="recipient-name" class="col-form-label">Site:</label>
                                        <select name="mining_log_site">
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <option value="<?php echo $row['site_id'] ?>"><?php echo $row['site_name'] ?></option>
                                            <?php
                                                if (empty($row['site_name'])) {
                                                    break;
                                                }
                                            }
                                            print_r($row);
                                            ?>
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="student-list-header d-flex justify-content-between align-items-center py-2">
                <div class="title h6 fw-bold">Site Details</div>
                <div class="btn-add d-flex gap-3 align-items-center">
                    <div class="short">
                        <i class="far fa-sort"></i>
                    </div>
                </div>
            </div>

            <div class="table table-responsive">
                <table class="table table-striped table-borderless">
                    <thead>
                        <tr class="py-3">
                            <th>DWA ID</th>
                            <th>Ore Extraction vol</th>
                            <th>Work Hours</th>
                            <th>Equipment usage</th>
                            <th>Safety inspection</th>
                            <th>Site_ID</th>
                            <th class="opacity-0">list</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $requete = "SELECT * FROM  Daily_Mining_Activity";
                        $result = $conn->query($requete);

                        foreach ($result as $value):
                        ?>
                            <tr>
                                <td> <?php echo $value['DMA_ID'] ?></td>
                                <td> <?php echo $value['Ore_Extraction_vol'] ?></td>
                                <td> <?php echo $value['work_hours'] ?></td>
                                <td> <?php echo $value['equipment_usage'] ?></td>
                                <td> <?php echo $value['safety_inspection'] ?></td>
                                <td> <?php echo $value['Site_ID'] ?></td>
                                <td>
                                    <a href="#"><i class="far fa-pen"></i></a>
                                    <a href="#"><i class="far fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <!-- end contentpage -->
    </main>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>