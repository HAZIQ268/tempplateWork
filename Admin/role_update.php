<?php

include("header.php");
include("connection.php");

$Id = $_GET["id"];
$sql = "select * from role where id= $Id";
$result = mysqli_query($conn , $sql);


?>


<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Element</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                </ol>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Role Add</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form method="post">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Role Name</label>
                                <?php
                                
                                
                                while ($rows = mysqli_fetch_assoc($result)){
                                ?>

                                <input type="text" class="form-control" name="role_name" value="<?php echo $rows['role_name'] ?>" placeholder="Enter Your Role">
                           <?php } ?>
                            </div>
                        </div>



                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>


    <?php
        
        if(isset($_POST['update'])){
            $role_name = $_POST['role_name'];

            $sql = "update role set role_name = '$role_name' where id = $Id ";
            $result = mysqli_query($conn , $sql);

            echo "<script>
            
            alert('Role Update Successfully!');
            window.location.href='role_show.php'
            </script>";
        }
        include("footer.php");

    ?>