<?php require_once("connection.php"); ?>
<?php require_once("top.php"); ?>

<div class="card bg-primary text-white">
    <div class="card-header bg-lightsteelblue">
        Register New Staff
    </div>
    <div class="card-body bg-lightgray">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-0">
    <form method="post">
        <div class="inpupt-group">
            <span class="input-group-addon">
            First Name :
            </span>
            <input type="text" name="firstname" placeholder="First Name" class="form-control">
        </div>
        <div class="inpupt-group">
            <span class="input-group-addon">
            Last Name :
            </span>
            <input type="text" name="lastname" placeholder="Last Name" class="form-control">
        </div>
        <div class="inpupt-group">
            <span class="input-group-addon">
            Birth Year :
            </span>
            <input type="text" name="birth_year" placeholder="Birth Year" class="form-contol">
        </div>
        <div class="inpupt-group">
            <span class="input-group-addon">
            Position
            </span>
            <input type="text" name="position" placeholder="Position" class="form-control">
        </div>
        <div class="inpupt-group">
            <span class="input-group-addon">
            Education
            </span>
            <input type="text" name="education" placeholder="Education" class="form-control">
        </div>
        <div class="inpupt-group">
            <span class="input-group-addon">
            Photo :
            </span>

        </div>
        <div class="inpupt-group">
            <span class="input-group-addon">
            Phone :
            </span>
            <input type="file" name="photo" class="form-control">
            <span></span>
        </div>
        <div class="inpupt-group">
            <span class="input-group-addon">
            Email :
            </span>

        </div>
        <div class="inpupt-group">
            <span class="input-group-addon">
            Address :
            </span>

        </div>
        <div class="inpupt-group">
            <span class="input-group-addon">
            Salary :
            </span>

        </div>
        <div class="inpupt-group">
            <span class="input-group-addon">
            Hire Date :
            </span>

        </div>
        <div class="inpupt-group">
            <span class="input-group-addon">
            Staff Type :
            </span>

        </div>
        <div class="inpupt-group">
            <span class="input-group-addon">
            Gender
            </span>

        </div>
        <input type="submit" value="">
    </form>
    </div>
    </div>
</div>

<?php require_once("footer.php"); ?>