<?php require_once("restrict.php"); ?>
<?php require_once("connection.php"); ?>
<?php 

    $condition = "";
    if(isset($_GET["search"]))
    {
        $search = $_GET["search"];
        $condition = "'%$search%' or patient_id LIKE '$search'";
        mysqli_query($con, "SELECT * FROM patient WHERE name LIKE '$condition'");
    }

    $patient = mysqli_query($con, "SELECT * FROM patient");
    $row_patient = mysqli_fetch_assoc($patient);

    $totalRows_patient = mysqli_num_rows($patient);
    
?>
<?php require_once("top.php"); ?>
    <div class="card bg-primary text-white">
        <div class="card-header bg-lightsteelblue">
            <h1>Patient List</h1>
        </div>
        <div class="card-body bg-lightgray">

        <?php if(isset($_GET["successDelete"])) { ?>
            <div class="alert alert-success">
            Selected pateint has been successfuly deleted!
            </div>
        <?php } ?>
        <?php if(isset($_GET["updatePatient"])) { ?>
            <div class="alert alert-success">
            Selected pateint has been successfuly updated!
            </div>
        <?php } ?>
        <?php if(isset($_GET["addPatient"])) { ?>
            <div class="alert alert-success">
            New pateint has been successfuly added!
            </div>
        <?php } ?>

        <form method="get">
            <div class="input-group">
                <span class="input-group-addon" style="width : 12vw;">Search Patient : </span>
                <input type="text" name="search" class="form-control">
                <span class="input-group-btn">
                <button type="submit" name="search" class="btn btn-primary"> <i class="bi bi-search"></i> </button>
            </span>
            </div>
        </form>
        <?php if($totalRows_patient >= 1 ) { ?> 
        <div class="table-responsive">
        <table class="table table-striped">
        <tr>
            <th>ID</th> <th>Name</th> <th>Age</th> <th>Gender</th> <th>Registeration Date</th> <th>Edit</th> <th>Delete</th>
        </tr>
        <?php do{ ?>
        <tr>
            <td><?php echo $row_patient["patient_id"];?></td> 
            <td><?php echo $row_patient["name"];?></td> 
            <td><?php echo date("Y") - $row_patient["birth_year"];?></td> 
            <td><?php echo ($row_patient["gender"] == 0 ? "Male" : "Female"); ?></td> 
            <td><?php echo $row_patient["reg_date"];?></td> 
            <td>
                <a href="patient_edit.php?patient_id=<?php echo $row_patient["patient_id"]; ?>">
                <span class="bi bi-pencil-fill"></span>
                </a>
            </td>
            <td>
                <a class="delete" href="patient_delete.php?patient_id=<?php echo $row_patient["patient_id"]; ?>">
                <span class="bi bi-trash-fill"></span></span>
                </a>
            </td>
        </tr>
        <?php } while($row_patient = mysqli_fetch_assoc($patient)) ?>
        </table>
        </div>
        <?php } else { ?>
            <div class="alert alert-warning">
                There is No Patient!
            </div>
        <?php } ?>
        </div>
    </div>
<?php require_once("footer.php"); ?>