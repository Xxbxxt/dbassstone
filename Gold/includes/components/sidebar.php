<?php session_start(); ?>
<div class="bg-sidebar vh-100 w-50 position-fixed ">
    <div class="log d-flex justify-content-between">
        <h1 class="E-classe text-start ms-3 ps-1 mt-3 h6 fw-bold" style="color: red;">Gold Fields</h1>
        <i class="far fa-times h4 me-3 close align-self-end d-md-none"></i>
    </div>
    <div class="img-admin d-flex flex-column align-items-center text-center gap-2">
        <br><br>
        <i class="fal fa-user h3 rounded-circle" height="120" width="120"></i>
        <h2 class="h6 fw-bold">Amanda</h2>
        <span class="h7 admin-color">Manager</span>
    </div>
    <div class=" bg-list d-flex flex-column align-items-center fw-bold gap-2 mt-4">
        <ul class="d-flex flex-column list-unstyled size">
            <li class="h7"><a class="nav-link text-dark" href="index.php">
                    <i class="fal fa-home-lg-alt me-2"></i> <span>Home</span></a>
            </li>

            <li class="h7"><a class=" nav-link text-dark" href="mining_site.php">
                    <i class="fal fa-bookmark me-2"></i> <span>Mining sites</span></a>
            </li>

            <li class="h7"><a class=" nav-link text-dark" href="mininig_acti.php"><i
                        class="far fa-graduation-cap me-2"></i> <span>Mining Activities</span></a>
            </li>

            <li class="h7"><a class=" nav-link text-dark" href="gold_pro.php"><i
                        class="fal fa-usd-square me-2"></i> <span>Gold production</span></a>
            </li>

            <li class="h7"><a class=" nav-link text-dark" href="employee.php">
                    <i class="fal fa-usd-square me-2"></i> <span>Employee</span></a>
            </li>

            <li class="h7"><a class=" nav-link text-dark" href="mining_equip.php"><i
                        class="fal fa-usd-square me-2"></i> <span>Mining Equipments</span></a>
            </li>

            <li class="h7"><a class=" nav-link text-dark" href="inventory.php"><i
                        class="fal fa-usd-square me-2"></i> <span>Inventory</span></a>
            </li>

            <li class="h7"><a class=" nav-link text-dark" href="#"><i
                        class="fal fa-usd-square me-2"></i> <span>Safty Complaints</span></a>
            </li>

            <li class="h7"><a class=" nav-link text-dark" href="terminal.php"><i
                        class="fal fa-usd-square me-2"></i> <span>Terminal</span></a>
            </li>

            <li class="h7"><a class=" nav-link text-dark" href="#"><i
                        class="fal fa-file-chart-line me-2"></i> <span>Report</span></a>
            </li>

            <li class="h7"><a class=" nav-link text-dark" href="#"><i
                        class="fal fa-sliders-v-square me-2"></i> <span>Settings</span></a>
            </li>
        </ul>
        <ul class="logout d-flex justify-content-start list-unstyled">
            <li class=" h7"><a class="nav-link text-dark" href="../index.php"><span>Logout</span><i
                        class="fal fa-sign-out-alt ms-2"></i></a></li>
        </ul>
    </div>

</div>