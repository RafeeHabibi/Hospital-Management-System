<?php require_once("restrict.php"); ?>
<?php require_once("connection.php"); ?>
<?php 
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

        $query = "INSERT INTO patient (name, phone, address, birth_year, nic, job, gender, reg_date) VALUES ('$name', '$phone', '$address', $birth_year, '$nic', '$job', $gender, '$reg_date')";
        $result = mysqli_query($con, $query);
        
        if($result)
        {
            header("location: patient_list.php?addPatient");
        }
        else
        {
            header("location: patient_add.php?NotAddPatient");
        }
    }
?>
<?php require_once("top.php"); ?>

    <div class="card bg-primary text-white">
        <div class="card-header bg-lightsteelblue">
            <h1>Register New Patient</h1>
        </div>
        <div class="card-body bg-lightgray">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0">
            <form  method="post">
                <div class="input-group">
                    <span class="input-group-addon">Name :</span>
                    <input type="text" name="name" placeholder="Patient Name" class="form-control">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Phone :</span>
                    <input type="text" name="phone" placeholder="Phone Number" class="form-control">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Address :</span>
                    <input type="text" name="address" placeholder="Patient Address" class="form-control">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Birth Year :</span>
                    <input type="number" name="birth_year" class="form-control">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">NIC :</span>
                    <input type="text" name="nic" placeholder="NIC" class="form-control">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Job :</span>
                    <input type="text" name="job" placeholder="Job" class="form-control">
                </div>
                <div class="input-group">
                    <span class="input-group-addon">Gender :</span>   &nbsp;&nbsp;&nbsp;
                    <label><input type="radio" name="gender" value="0"> Male</label> &nbsp;&nbsp;&nbsp;
                    <label><input type="radio" name="gender" value="1"> Female</label>
                </div>
                <input type="submit" name="Register" value="Register" class="btn btn-primary">
            </form>
            </div>
        </div>
    </div>

<?php require_once("footer.php"); ?>