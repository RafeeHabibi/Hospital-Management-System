<?php 
require_once("connection.php");

if(!isset($_SESSION))
{
    session_start();
}

if(isset($_SESSION["staff_id"])) {
    header("location: home.php");
}

if(isset($_POST["username"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($con, "SELECT * FROM users WHERE username = '$username' AND password = PASSWORD('$password') ");

    if(mysqli_num_rows($result) == 1) 
    {
        $row_result = mysqli_fetch_assoc($result);
        $_SESSION["staff_id"] = $row_result["staff_id"];

        $user_id = $row_result["users_id"];
        $date = date("Y-m-d");
        $time = date("H:i:s");

        $result = mysqli_query($con, "INSERT INTO Login_Log VALUES(NULL, '$date', '$time', $user_id)");

        header("location: home.php");
    }
    else
    {
        header("location: login.php?login");
    }
    }

?>


<?php require_once("top.php"); ?>

<div class="row justify-content-center">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ls-offset-3 col-md-offset-3 col-sm-offset-3 col-xs-offset-0">
            <div class="card bg-primary text-white">
                <div class="card-header bg-lightsteelblue">
                    <h1 class="text-center">Login to MIS</h1>
                </div>
                <div class="card-body bg-lightgray">
                        <?php if(isset($_GET["login"])) { ?>
                            <div class="alert alert-danger">Incorrect Username or Password!</div>
                        <?php } ?>
                        <?php if(isset($_GET["logout"])) { ?>
                            <div class="alert alert-success">Your are Successfully Logout!</div>
                        <?php } ?>
                        <?php if(isset($_GET["notLogin"])) { ?>
                            <div class="alert alert-danger">Access without Login is Dinel!</div>
                        <?php } ?>
                    <form action="login.php" method="post">
                        <div class="input-group">
                            <span class="input-group-addon">User Name : </span>
                            <input type="text" name="username" placeholder="Enter your User Name!" class="form-control">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">Password : </span>
                            <input type="password" name="password" placeholder="Enter your Password!" class="form-control">
                        </div>
                        <input type="submit" value="Login" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php require_once("footer.php"); ?>