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
            include 'includes/dbcon.php';
        ?>
        <!-- end sidebar -->
         
        <!-- start content page -->
        <div class="container-fluid px">
            <?php 
                include "includes/components/header.php";
            ?>
 <div class="button-add-student">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">add Courses</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add courses</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                              <div class="modal-body">
                                <form method="POST" action="" enctype="multipart/form-data">
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Name">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Description:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Email">
                                  </div>
                                  <div class="">
                                    <label for="recipient-name" class="col-form-label">Prix:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="Phone">
                                  </div>
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">add Courses</button>
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
                            <th>Name</th>
                            <th>site_id</th>
                            <th>Location</th>
                            <th>Geological data</th>
                            <th>Permit number</th>
                            <th>Environmental impact assessment</th>
                            <th class="opacity-0">list</th>
                        </tr>
                    </thead>
                    <tbody>

                       <?php
                        $requete = "SELECT * FROM 	miningsite";
                        $result = $conn -> query($requete);

                        foreach($result as $value):
                            ?>
                            <tr>
                                <td> <?php echo $value['name'] ?></td>
                                <td> <?php echo $value['site_id'] ?></td>
                                <td> <?php echo $value['location'] ?></td>
                                <td> <?php echo $value['geological_data'] ?></td>
                                <td> <?php echo $value['permit_number'] ?></td>
                                <td> <?php echo $value['environmental_impact_assessment'] ?></td>
                            </tr>
                       <?php endforeach; ?>
                        
                    </tbody>
                </table>
        </div>
    </main>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>