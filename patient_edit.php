<?php require_once("restrict.php"); ?>
<?php require_once("connection.php"); ?>
<?php

    $id = $_GET["patient_id"];
    $patient = mysqli_query($con, "SELECT * FROM patient WHERE patient_id = $id");

    $row_patient = mysqli_fetch_assoc($patient);


    if(isset($_POST["name"]))
    {
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $birth_year = $_POST["birth_year"];
        $nic = $_POST["nic"];
        $job = $_POST["job"];
        $gender = $_POST["gender"];

        $reg_date = $date = date("Y-m-d");
        

        $query = "UPDATE patient SET name='$name', phone='$phone', address='$address', birth_year=$birth_year, nic='$nic', job='$job', gender=$gender WHERE patient_id = $id";
        $result = mysqli_query($con, $query);
        
        if($result)
        {
            header("location: patient_list.php?updatePatient");
        }
        else
        {
            header("location: patient_add.php?NotUpdatePatient&patient_id= $id");
        }
    }
?>
<?php require_once("top.php"); ?>

    <div class="card bg-primary text-white">
        <div class="card-header bg-lightsteelblue">
            <h1>Edit Patient</h1>
        </div>
        <div class="card-body bg-lightgray">

            <?php if(isset($_GET["NotUpdatePatient"])) { ?>
                <div class="alert alert-danger">
                    Could not edit patient! try again!
                </div>
            <?php } ?>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0">
            <form  method="post">
                <div class="input-group">
                    <span class="input-group-addon">Name :</span>
                    <input type="text" name="name" value="<?php echo $row_patient["name"]; ?>" placeholder="Patient Name" class="form-control">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Phone :</span>
                    <input type="text" name="phone" value="<?php echo $row_patient["phone"]; ?>" placeholder="Phone Number" class="form-control">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Address :</span>
                    <input type="text" name="address" value="<?php echo $row_patient["address"]; ?>" placeholder="Patient Address" class="form-control">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Birth Year :</span>
                    <input type="number" name="birth_year" value="<?php echo $row_patient["birth_year"]; ?>" class="form-control">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">NIC :</span>
                    <input type="text" name="nic" value="<?php echo $row_patient["nic"]; ?>" placeholder="NIC" class="form-control">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Job :</span>
                    <input type="text" name="job" value="<?php echo $row_patient["job"]; ?>" placeholder="Job" class="form-control">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Gender :</span>   &nbsp;&nbsp;&nbsp;
                    <label><input type="radio" <?php if($row_patient["gender"]===0) echo "checked"; ?> name="gender" value="0"> Male</label> &nbsp;&nbsp;&nbsp;
                    <label><input type="radio" <?php if($row_patient["gender"]===1) echo "checked"; ?> name="gender" value="1"> Female</label>
                </div>
                <input type="submit" name="Register" value="Save Changes" class="btn btn-primary">
            </form>
            </div>
        </div>
    </div>

<?php require_once("footer.php"); ?>