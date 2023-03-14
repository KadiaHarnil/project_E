<?php
include("includes/header.php");
?>
<div class="wrapper m-auto">
    <div class="form-left">
        <h2 class="text-uppercase">information</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo.
        </p>
        <p class="text">
            <span>Sub Head:</span>
            Vitae auctor eu augudsf ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.
        </p>
        <div class="form-field">
            <input type="submit" class="account" value="Have an Account?">
        </div>
    </div>
    <form class="row  needs-validation form-right m-auto" action="registrationcode.php" method="post" novalidate>
<?php include("message.php"); ?>
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationCustom01" name="txtfname" required>
            
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="validationCustom02" name="txtlname" required>
            
        </div>

        <div class="col-md-12">
            <label for="validationCustom03" class="form-label">E-mail</label>
            <input type="email" class="form-control mb-4" id="validationCustom03" name="txtemail" required>
           
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Password</label>
            <input type="password" class="form-control mb-4" name="txtpass" id="validationCustom03" required>
           
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Confirm Password </label>
            <input type="password" class="form-control mb-4" name="txtcpass" id="validationCustom03" required>
           
        </div>
        <div class="col-md-12 mb-2">
            <label for="validationCustom05" class="form-label">Phone no</label>
            <input type="tel" class="form-control mb-4" id="validationCustom05" name="txtphno" required>
            
        </div>
        <div class="col-12 form-field">

            <button class="btn btn-primary" type="submit" name="btnsubmit">Submit form</button>
        </div>

    </form>

</div>
<?php
include("includes/scripts.php");
?>