<?php
include("header.php");
include("connection.php");

$sql = "select * from role";
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
                            <span class="ml-1">Role</span>
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
                                <h4 class="card-title">User Form</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="POST">
                                    <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Role</label>
                                                <select id="inputState" name="u_r_id" class="form-control">
                                                    <?php

                                                    while ($rows =mysqli_fetch_assoc($result)) {
                                                    
                                                        ?>
                                                    <option value="<?php echo $rows['id']?>"><?php echo $rows['role_name'] ?></option>
                                                    <?php } ?>
                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>User Name</label>
                                                <input type="text" class="form-control" name="username" placeholder="Enter Your Name">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                                            </div>
                        
                                        </div>
                                        
                                    
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>

<?php
            if (isset($_POST['submit'])) {
            $roleId =$_POST['u_r_id'];
            $username =$_POST['username'];
            $password =$_POST['password'];

            $sql="insert into users (username,password,RoleId_FK) values ('$username','$password','$roleId')";
            $result=mysqli_query($conn,$sql);

            echo 
                "<script>
                alert('Your Record has been Inserted');
                </script>";
     }
        include("footer.php");
?>
