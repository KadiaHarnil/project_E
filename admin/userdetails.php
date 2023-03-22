<?php
include("includes/header.php");
include("includes/navbar.php");
include("includes/sidebar.php");
include("config/dbcon.php");
// $qry = "select * from user where is_verified='1";
// $result = $con->query($qry);
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
                                    <th style="width:50px;">
                                        <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                            <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th><strong>Name</strong></th>
                                    <th><strong>Email</strong></th>
                                    <th><strong>Phone Number</strong></th>
                                    <th><strong>Register At</strong></th>
                                    <th><strong></strong></th>
                                </tr>
                            </thead>
                            <!-- <?php while ($row = $result->fetch_assoc()) { ?> -->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox2"
                                                    required="">
                                                <label class="form-check-label" for="customCheckBox2"></label>
                                            </div>
                                        </td>
                                        <td><strong>
                                                <!-- <?= $row['fname'] . " " . $row['lname']; ?> -->
                                            </strong></td>
                                        <td>
                                            <div class="d-flex align-items-center"><img src="images/avatar/1.jpg"
                                                    class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">
                                                    <!-- <?= $row['email']; ?> -->
                                                </span></div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            <!-- <?php } ?> -->
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