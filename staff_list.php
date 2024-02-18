<?php require_once("restrict.php"); ?>
<?php require_once("connection.php"); ?>

<?php 
    $staff = mysqli_query($con, "SELECT * FROM  staff  ORDER BY firstname ASC");
    $row_staff = mysqli_fetch_assoc($staff);


?>


<?php if(isset($_GET["add"])) {?> 
    <div class="alert alert-success">
        New staff has been successfully added!
    </div>
<?php }?>

<div class="card">
    <div class="card-header">
        Staff List
    </div>
    <div class="card-body">

    <div class="table-responseive">
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Photo</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php do { ?> 
        <tr>  
            <td> <?php echo $row_staff["staff_id"]; ?> </td>
            <td> <?php echo $row_staff["firstname"]; ?> </td>
            <td> <?php echo $row_staff["lastname"]; ?> </td>
            <td> <img src="<?php echo $row_staff["photo"]; ?>" class="img-circle"> </td>
            <td> <?php echo $row_staff["position"] ?> td>
            <td> <?php echo $row_staff["salary"]; ?></td>
            <td>
                <a href="staff_edit.php" class=>
                <span class="bi bi-pencil-fill"></span>
                 </a>
            </td>
            <td>
                <a href="staff_delete.php">
                <span class="bi bi-trash-fill"></span></span>
                </a>
            </td>
        </tr>
        <?php } while($row_staff = mysqli_fetch_assoc($staff)); ?>
    </table>
    </div>

    </div>
</div>

<?php require_once("footer.php"); ?>