<?php 
    if(!isset($_SESSION)) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <title>Hospital MIS</title>
</head>
<body>
    <div class="container">
        <div id="banner">
            <img src="images/logo.png">
            <h1>Hospital Management System</h1>
            <?php if(!isset($_SESSION["staff_id"])) {?>
                <a href="login.php" class="pull-right">Login</a>
            <?php }?>
            <div class="clearfix"></div>
        </div>  
    
        <div id="menu" class="navbar navbar-expand-lg navbar-light bg-light">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" role="navigation">
            <?php if(isset($_SESSION["staff_id"])) { ?>
                <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Staff</a>
                        <ul class="dropdown-menu">
                            <li><a href="staff_add.php">Add New Staff</a></li>
                            <li><a href="#">Staff List</a></li>
                            <li><a href="#">Staff Attendance</a></li>
                            <li><a href="#">Staff Salary</a></li>
                            <li><a href="#">Staff Schedule</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patient</a>
                        <ul class="dropdown-menu">
                            <li><a href="patient_add.php">Register Patient</a></li>
                            <li><a href="patient_list.php">Patient List</a></li>
                            <li><a href="patient_diagnosis.php">Diagnosis</a></li>
                            <li><a href="patient_admit.php">Patient Admit</a></li>
                            <li><a href="patient_appointment.php">Appointment</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pharmacy</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Add New Medicine</a></li>
                            <li><a href="#">Medicine List</a></li>
                            <li><a href="#">Patient Medicine</a></li>
                            <li><a href="#">Shortage Medicine</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laboratory</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Add New Test</a></li>
                            <li><a href="#">Lab Test</a></li>
                            <li><a href="#">Patient Test</a></li>
                            <li><a href="#">Blood Bank</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Finance</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Add New Income</a></li>
                            <li><a href="#">Income List</a></li>
                            <li><a href="#">Add New Expose</a></li>
                            <li><a href="#">Expose List</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Management</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Department</a></li>
                            <li><a href="#">Room Management</a></li>
                            <li><a href="#">Equipment Management</a></li>
                            <li><a href="#">User Accounts</a></li>
                        </ul>
                    </li>
                </ul>
            <?php } else { ?>
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Contact</a></li>
                <?php } ?>
                <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav> 
        <div class="clearfix"></div>
    </div>


    <div id="content">
           
