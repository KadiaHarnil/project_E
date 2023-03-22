<?php
include("includes/header.php");
include("includes/navbar.php");
include("includes/sidebar.php");
include("config/dbcon.php");
$qry = "select * from product";
$result = $con->query($qry);
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User Register</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                  
                                    <th><strong>Name</strong></th>
                                    <th><strong>Email</strong></th>
                                    <th><strong>Phine Number</strong></th>
                                    <th><strong>Register At</strong></th>
                                    <th><strong></strong></th>
                                </tr>
                            </thead>
                            <?php 
                                $qry="select * from user where is_verified='1'";
                                $result=$con->query($qry);
                                    while($row=$result->fetch_assoc()){
                            ?>
                            <tbody>
                                <tr>
                                    <td><strong><?= $row['fname']." ".$row['lname']; ?></strong></td>
                                    <td>
                                        <div class="d-flex align-items-center"> <span class="w-space-no"><?= $row['email'] ;?></span></div>
                                    </td>
                                    <td><?= $row['upho']; ?></td>
                                    <td><?= $row['reg_at']; ?></td>
                                
                                    <td>
                                        <div class="d-flex">
    
                                            <a href="userdelete.php?id=<?= $row['uid']; ?>" onclick="return mydelete()" name="btndel" class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("includes/footer.php");
include("includes/scripts.php");
?>
