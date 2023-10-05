<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header('location:../index.php');
}

include('dbcon.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../includes/style.css" />


    <!-- 
      show 5 row,copy,excel and search  -->

    <!-- jQuery UI -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!----------------------- jQuery UI --------------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <!---------------------- Data Table links ------------------>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/autofill/2.4.0/css/autoFill.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/autofill/2.4.0/js/dataTables.autoFill.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>




</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h3><i class="fa-solid fa-earth-americas pt-1"></i><span>SEPL</span></h3>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php" id="dashboard" class="active"><i class="fa-solid fa-house"></i>
                        <span>Dashboard</span> </a>
                </li>
                <li>
                    <a href="gatepass.php" id="gatepass"><i class="fa-solid fa-drum-steelpan"></i>
                        <span>Drum Shiffting</span>
                    </a>
                </li>
                <li>
                    <a href="report.php" id="Report"><i class="fa-regular fa-square-plus me-3"></i>
                        <span>Scrap Data</span>
                    </a>
                </li>
                <li>
                    <a href="fcoupon.php" id="fcoupon"><i class="fa-regular fa-file me-3"></i>
                        <span>Summary</span>
                    </a>
                </li>
                <li>
                    <a href="../Pages/attendance_sheet.php" id="attendance"><i class="fa-solid fa-person"></i>
                        <span>Attendance</span>
                    </a>
                </li>
                <li>
                    <a href="../Pages/bill.php" id="veh"><i class="fa-solid fa-receipt"></i>
                        <span>Bill</span>
                    </a>
                </li>
                <li>
                    <a class="sub-btn" href="#" id="Dmaster">
                        <i class="fa-solid fa-database"></i>
                        <span> Drum Master</span>
                        <i class="fas fa-angle-right dropdown"></i>
                    </a>
                    <div class="sub-menu" style="display:none;">
                        <a style="padding-top:10px;" href="../Drum-master/drum_contractor.php" class="sub-item">0.
                            &nbsp;Name of Contractor</a>
                        <a href="../Drum-master/drum_name.php" class="sub-item">1. &nbsp; Name</a>
                        <a href="../Drum-master/drum_plant.php" class="sub-item">2. &nbsp;Plant</a>
                        <a href="../Drum-master/drum_series.php" class="sub-item">3. &nbsp;Drum Series</a>
                        <a href="../Drum-master/drum_conductor.php" class="sub-item">4. &nbsp;Conductor</a>
                        <a href="../Drum-master/drum_stage.php" class="sub-item">5. &nbsp;Stage</a>
                        <a href="../Drum-master/drum_unit.php" class="sub-item">6. &nbsp;Unit</a>
                    </div>
                </li>
                <li>
                    <a class="sub-btn" href="#" id="Mmaster">
                        <i class="fa-solid fa-database"></i>
                        <span>Material Master</span>
                        <i class="fas fa-angle-right dropdown"></i>
                    </a>
                    <div class="sub-menu" style="display:none;">
                        <a style="padding-top:10px;" href="../Material-master/material_unloading.php"
                            class="sub-item">0. &nbsp;Material Unloading</a>
                    </div>
                </li>
                <li>
                    <a class="sub-btn" href="#" id="Smaster">
                        <i class="fa-solid fa-database"></i>
                        <span>Scrap Master</span>
                        <i class="fas fa-angle-right dropdown"></i>
                    </a>
                    <div class="sub-menu" style="display:none;">
                        <a style="padding-top:10px;" href="../Scrap-master/scrap_team_name.php" class="sub-item">0.
                            &nbsp;Team Name</a>
                        <a href="../Scrap-master/scrap_rate_master.php" class="sub-item">1. &nbsp;Rate Master </a>
                    </div>
                </li>
                <li>
                    <a class="sub-btn" href="#" id="Emaster">
                        <i class="fa-solid fa-database"></i>
                        <span>Employee Master</span>
                        <i class="fas fa-angle-right dropdown"></i>
                    </a>
                    <div class="sub-menu" style="display:none;">
                        <a style="padding-top:10px;" href="../Emp-master/emp_name.php" class="sub-item">0.
                            &nbsp;Employee Name </a>
                        <a href="../Emp-master/emp_contractor.php" class="sub-item">1. &nbsp; Contractor Master</a>
                        <a href="../Emp-master/emp_rate_master.php" class="sub-item">2. &nbsp; Rate Master</a>
                    </div>
                </li>
                <div>
                    <li>
                        <a href="../logout.php" onclick="return confirm('Are you sure you want to log out?');">
                            <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                            <span class="title">Logout</span>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <div class="header-title">
                <label for="nav-toggle">
                    <i class="fa-solid fa-bars"></i>
                </label>
                <span>Dashboard</sapn>
            </div>

            <div class="user-wrapper">
                <img src="../images/avtar.png" width="40px" height="30px" alt="">
                <div>
                    <h4>
                        <?php echo $_SESSION['uname'] ?>
                    </h4>
                    <small>
                        <?php echo $_SESSION['rights'] ?>
                    </small>
                </div>
            </div>
        </header>

        <main>